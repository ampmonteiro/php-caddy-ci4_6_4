<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keyword" content="" />
    <meta name="author" content="flexilecode" />
    <!--! The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags !-->
    <!--! BEGIN: Apps Title-->
    <title>
        CI: <?= CodeIgniter\CodeIgniter::CI_VERSION ?>
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        :root {
            --sidebar-width: 260px;
            --sidebar-collapsed-width: 72px;
            --topbar-height: 56px;
        }

        body {
            min-height: 100vh;
            background-color: var(--bs-body-bg);
        }

        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            width: var(--sidebar-width);
            transition: width .35s ease;
            overflow-y: auto;
            overflow-x: hidden;
        }

        .sidebar-collapsed {
            width: var(--sidebar-collapsed-width) !important;
        }

        .sidebar-collapsed .sidebar-text,
        .sidebar-collapsed .sidebar-header {
            display: none;
        }

        .main-content {
            margin-left: var(--sidebar-width);
            transition: margin-left .35s ease;
            padding-top: var(--topbar-height);
        }

        .sidebar-collapsed+.main-content {
            margin-left: var(--sidebar-collapsed-width);
        }

        .nav-link {
            color: rgba(255, 255, 255, .75);
            border-radius: 0.375rem;
            margin: 0.25rem 0.75rem;
        }

        .nav-link:hover,
        .nav-link.active {
            color: white;
            background-color: rgba(255, 255, 255, .12);
        }

        .dropdown-menu {
            border: none;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, .25);
        }
    </style>

    <?= $this->renderSection('css') ?>

    <?= $this->renderSection('head_js') ?>

</head>

<body>
    <?= $this->include('components/nav') ?>
    <?= $this->include('components/sidebar') ?>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container-fluid py-4">
            <?= $this->renderSection('content') ?>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('sidebar-collapsed');
            document.querySelector('.main-content').classList.toggle('sidebar-collapsed');
        });
    </script>

    <?= $this->renderSection('footer_js') ?>
</body>

</html>