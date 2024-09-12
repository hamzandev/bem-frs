<!-- Datatable Component -->
{{-- @props(['data' => []]) --}}

<div x-data="datatable()" class="container p-6 mx-auto">
    <div class="flex items-center justify-between mb-4">
        <div class="flex items-center">
            <input x-model="search" @input="searchTable()" type="text" placeholder="Search..."
                class="px-4 py-2 border rounded-lg">
            <select x-model="perPage" @change="changePerPage()" class="px-4 py-2 ml-4 border rounded-lg">
                <option value="5">5 per page</option>
                <option value="10">10 per page</option>
                <option value="25">25 per page</option>
                <option value="50">50 per page</option>
            </select>
        </div>

    </div>

    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr>
                <template x-for="column in columns">
                    <th
                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-100 border-b border-gray-300">
                        <div @click="sort(column)" class="flex items-center cursor-pointer">
                            <span x-text="column.label"></span>
                            <template x-if="sortColumn === column.key">
                                <span x-text="sortDirection === 'asc' ? '▲' : '▼'" class="ml-1"></span>
                            </template>
                        </div>
                    </th>
                </template>
            </tr>
        </thead>
        <tbody>
            <template x-for="(row, index) in paginatedData" :key="index">
                <tr :class="{ 'bg-gray-50': index % 2 === 0 }">
                    <template x-for="column in columns">
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
                            <div x-text="row[column.key]" class="text-sm leading-5 text-gray-900"></div>
                        </td>
                    </template>
                </tr>
            </template>
        </tbody>
    </table>

    <div class="flex items-center justify-between p-4 mt-4 bg-white border border-gray-300">
        <div>
            <span class="text-sm text-gray-700">
                Showing <span x-text="startIndex + 1"></span> to <span x-text="endIndex"></span> of <span
                    x-text="filteredData.length"></span> entries
            </span>
        </div>
        <div class="flex space-x-2">
            <button @click="previousPage" :disabled="currentPage === 1" class="px-4 py-2 border rounded-lg"
                :class="{ 'opacity-50 cursor-not-allowed': currentPage === 1 }">Previous</button>
            <button @click="nextPage" :disabled="currentPage === totalPages" class="px-4 py-2 border rounded-lg"
                :class="{ 'opacity-50 cursor-not-allowed': currentPage === totalPages }">Next</button>
        </div>
    </div>
</div>

<script>
    function datatable() {
        return {
            columns: [{
                    key: 'id',
                    label: 'ID'
                },
                {
                    key: 'title',
                    label: 'Judul'
                },
                {
                    key: 'status',
                    label: 'Status'
                },
                {
                    key: 'published_at',
                    label: 'Dirilis Pada'
                },
            ],
            data: [
                ...Array.from({
                    length: 50
                }).map((_, index) => ({
                    id: index + 1,
                    title: 'John Doe ' + Number(index + 1),
                    status: Math.random() > 0.5 ? 'Draft' : 'Published',
                    published_at: '2020-01-01',
                }))
                // Add more sample data here
            ],
            search: '',
            sortColumn: 'id',
            sortDirection: 'asc',
            perPage: 10,
            currentPage: 1,

            get filteredData() {
                return this.data.filter(row => {
                    return Object.values(row).some(value =>
                        value.toString().toLowerCase().includes(this.search.toLowerCase())
                    );
                });
            },

            get sortedData() {
                return this.filteredData.sort((a, b) => {
                    let modifier = this.sortDirection === 'asc' ? 1 : -1;
                    if (a[this.sortColumn] < b[this.sortColumn]) return -1 * modifier;
                    if (a[this.sortColumn] > b[this.sortColumn]) return 1 * modifier;
                    return 0;
                });
            },

            get paginatedData() {
                const start = (this.currentPage - 1) * this.perPage;
                const end = start + this.perPage;
                return this.sortedData.slice(start, end);
            },

            get totalPages() {
                return Math.ceil(this.filteredData.length / this.perPage);
            },

            get startIndex() {
                return (this.currentPage - 1) * this.perPage;
            },

            get endIndex() {
                return Math.min(this.startIndex + this.perPage, this.filteredData.length);
            },

            sort(column) {
                if (this.sortColumn === column.key) {
                    this.sortDirection = this.sortDirection === 'asc' ? 'desc' : 'asc';
                } else {
                    this.sortColumn = column.key;
                    this.sortDirection = 'asc';
                }
            },

            previousPage() {
                if (this.currentPage > 1) {
                    this.currentPage--;
                }
            },

            nextPage() {
                if (this.currentPage < this.totalPages) {
                    this.currentPage++;
                }
            },

            changePerPage() {
                this.currentPage = 1;
            },

            searchTable() {
                this.currentPage = 1;
            }
        };
    }
</script>
