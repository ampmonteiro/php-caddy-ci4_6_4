<div
    class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div
        class="offcanvas-md offcanvas-end bg-body-tertiary"
        tabindex="-1"
        id="sidebarMenu"
        aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">
                Company name
            </h5>
            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="offcanvas"
                data-bs-target="#sidebarMenu"
                aria-label="Close">
            </button>
        </div>
        <div
            class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a
                        class="nav-link d-flex align-items-center gap-2 
                            <?= uri_string() === '' ? 'active' : '' ?>"

                        href="<?= route_to('page_index') ?>">
                        <svg class="bi" aria-hidden="true">
                            <use xlink:href="#house-fill"></use>
                        </svg>
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2
                    <?= uri_string() === 'card' ? 'active' : '' ?>"
                        href="<?= route_to('page_card') ?>">
                        <svg class="bi" aria-hidden="true">
                            <use xlink:href="#file-earmark"></use>
                        </svg>
                        Card Dynamic Cell
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2
                    <?= uri_string() === 'dynamic-view' ? 'active' : '' ?>"
                        href="<?= route_to('page_dynamic_view') ?>">
                        <svg class="bi" aria-hidden="true">
                            <use xlink:href="#cart"></use>
                        </svg>
                        Card Dynamic Smart View
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2
                    <?= uri_string() === 'invokable-json' ? 'active' : '' ?>"
                        href="<?= route_to('say_json') ?>">
                        <svg class="bi" aria-hidden="true">
                            <use xlink:href="#people"></use>
                        </svg>
                        Invokable | json
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2
                    <?= uri_string() === 'about' ? 'active' : '' ?>"
                        href="<?= route_to('page_about') ?>">

                        <svg class="bi" aria-hidden="true">
                            <use xlink:href="#graph-up"></use>
                        </svg>
                        About
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2
                    <?= uri_string() === 'original' ? 'active' : '' ?>"
                        href="<?= route_to('original') ?>">
                        <svg class="bi" aria-hidden="true">
                            <use xlink:href="#puzzle"></use>
                        </svg>
                        Original
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>