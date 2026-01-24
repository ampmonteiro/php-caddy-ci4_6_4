<!-- Sidebar -->
<div class="sidebar bg-dark text-white" id="sidebar">
    <div class="d-flex flex-column h-100">
        <div class="sidebar-header p-3 border-bottom border-secondary">
            <h5 class="mb-0 sidebar-text">Dashboard</h5>
        </div>

        <ul class="nav flex-column flex-grow-1 pt-3">
            <li class="nav-item">
                <a class="nav-link <?= uri_string() === '' ? 'active' : '' ?>"
                    href="<?= route_to('page_index') ?>">
                    <i class="bi bi-house-door-fill me-3 fs-5"></i>
                    <span class="sidebar-text">Home</span>
                </a>
            </li>

            <li class="nav-item">
                <a
                    href="<?= route_to('page_card') ?>"
                    class="<?= uri_string() === 'card' ? 'active' : '' ?> 
                    nav-link">

                    <i class="me-3 fs-5"></i>
                    <span class="sidebar-text">
                        Card Dynamic Cell
                </a>
            </li>


            <li class="nav-item">
                <a
                    href="<?= route_to('say') ?>"
                    class="<?= uri_string() === 'say' ? 'active' : '' ?> 
                    nav-link">

                    <i class="me-3 fs-5"></i>
                    <span class="sidebar-text">Invokable | json
                    </span>
                </a>
            </li>


            <li class="nav-item">
                <a href="<?= route_to('page_about') ?>"
                    class="<?= uri_string() === 'about' ? 'active' : '' ?> nav-link ">
                    <i class="me-3 fs-5"></i>
                    <span class="sidebar-text">About</span>
                </a>
            </li>


            <li class="nav-item">
                <a
                    href="<?= route_to('original') ?>"
                    class="nav-link">

                    <i class="bi bi-people-fill me-3 fs-5"></i>
                    <span class="sidebar-text">Original</span>
                </a>
            </li>

        </ul>

    </div>
</div>