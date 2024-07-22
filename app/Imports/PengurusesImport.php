<?php

namespace App\Imports;

use App\Models\Jabatan;
use App\Models\Pengurus;
use App\Models\Prodi;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithProgressBar;

class PengurusesImport implements ToModel, WithHeadingRow, WithProgressBar
{

    use Importable;

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {

        $cekDuplikasi = Pengurus::get('nim')->where('nim', $row['nim'])->first();
        if (!$cekDuplikasi) {
            return new Pengurus([
                'nim' => $row['nim'],
                'nama' => $row['nama'],
                'jabatan_id' => Jabatan::where('jabatan', 'like', '%' . $row['jabatan'])->first()->id ?? null,
                'prodi_id' => Prodi::where('prodi', 'like', '%' . $row['prodi'])->first()->id ?? null,
                'foto' => $row['foto'],
            ]);
        }
    }

}
