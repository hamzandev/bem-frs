<div class="nav-item dropdown">
    <a href="#" class="p-0 nav-link d-flex lh-1 text-reset" data-bs-toggle="dropdown"
        aria-label="Open user menu">
        <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
        <div class="d-none d-xl-block ps-2">
            <div>Nama User</div>
            <div class="mt-1 small text-muted">UI Designer</div>
        </div>
    </a>
    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
        <a href="#" class="dropdown-item">Status</a>
        <a href="./profile.html" class="dropdown-item">Profile</a>
        <a href="#" class="dropdown-item">Feedback</a>
        <div class="dropdown-divider"></div>
        <a href="./settings.html" class="dropdown-item">Settings</a>
        <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="dropdown-item">Logout</button>
        </form>
    </div>
</div>
