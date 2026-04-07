<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <!-- WAJIB untuk responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Data Absensi</title>

    <link rel="shortcut icon" href="<?= base_url('assets/images/icon.png') ?>" type="image/x-icon">

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link href="<?= base_url('assets/bootstrap-icons-1.13.1/bootstrap-icons.css') ?>" rel="stylesheet">

    <style>
        body {
            font-family: "SF Pro", "Helvetica Neue", Helvetica, Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .topbar {
            background: white;
            border-radius: 18px;
            padding: 18px 22px;
            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.06);
        }

        .menu-btn {
            min-width: 120px;
            border-radius: 12px;
            font-weight: 500;
        }

        /* RESPONSIVE MOBILE */
        @media (max-width: 768px) {

            .topbar {
                padding: 15px;
            }

            .topbar h4 {
                font-size: 20px;
                text-align: center;
                width: 100%;
            }

            .menu-wrapper {
                width: 100%;
                display: flex;
                flex-direction: column;
                gap: 10px;
            }

            .menu-btn {
                width: 100%;
            }
        }
    </style>

</head>

<body>

    <div class="container-fluid py-3 px-3 px-md-4">

        <div class="topbar mb-4">

            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">

                <h4 class="fw-bold text-primary mb-0">
                    <i class="bi bi-calendar-check-fill"></i> Absol
                </h4>

                <div class="menu-wrapper d-flex flex-column flex-md-row gap-2">

                    <a href="<?= site_url('/') ?>" class="btn btn-primary menu-btn">
                        <i class="bi bi-clipboard-check"></i> Absen
                    </a>

                    <a href="<?= site_url('santri') ?>" class="btn btn-success menu-btn">
                        <i class="bi bi-people-fill"></i> Santri
                    </a>

                    <a href="<?= site_url('backup') ?>" class="btn btn-danger menu-btn">
                        <i class="bi bi-cloud-arrow-down-fill"></i> Backup
                    </a>

                </div>

            </div>

        </div>

        <?= $this->renderSection('content') ?>

    </div>

    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>

</body>

</html>