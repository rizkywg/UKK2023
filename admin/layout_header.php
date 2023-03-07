<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WG Laundry</title>
    <link rel="stylesheet" href="../assets/css/dasbor/style.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/plugins/images/wash.png">
</head>
<body>
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <i class='bx bxs-washer'></i>
                <div class="logo_name">LaundryKu</div>
            </div>
            <i class='bx bx-menu' id='btn'></i>
        </div>
        <ul class="nav">
            <li>
                <a href="../admin/index.php">
                    <i class='bx bxs-dashboard'></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-briefcase'></i>
                    <span class="link_name">Data Outlet</span>
                </a>
                <span class="tooltip">Data Outlet</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-package' ></i>
                    <span class="link_name">Data Paket</span>
                </a>
                <span class="tooltip">Data Paket</span>
            </li>
            <li>
                <a href="#">
                <i class='bx bxs-user-account'></i>
                    <span class="link_name">Data Pelanggan</span>
                </a>
                <span class="tooltip">Data Pelanggan</span>
            </li>
            <li>
                <a href="#">
                <i class='bx bxs-cart-alt'></i>
                    <span class="link_name">Data Transaksi</span>
                </a>
                <span class="tooltip">Data Transaksi</span>
            </li>
            <li>
                <a href="#">
                <i class='bx bxs-user'></i>
                    <span class="link_name">Data Pengguna</span>
                </a>
                <span class="tooltip">Data Pengguna</span>
            </li>
            <li>
                <a href="#">
                <i class='bx bxs-report'></i>
                    <span class="link_name">Laporan</span>
                </a>
                <span class="tooltip">Data Laporan</span>
            </li>
            <li>
                <a href="#">
                <i class='bx bxs-log-out-circle'></i>
                    <span class="link_name">Logout</span>
                </a>
                <span class="tooltip">Logout</span>
            </li>
        </ul>
    </div>

    <!-- <div class="home_content">
        <div class="text">Home Content</div>
    </div> -->

    <script>
        let btn = document.querySelector('#btn');
        let sidebar = document.querySelector('.sidebar');
        let srcBtn = document.querySelector('.bx-search');

        btn.onclick = function(){
            sidebar.classList.toggle('active');
        }
        srcBtn.onclick = function(){
            sidebar.classList.toggle('active');
        }
    </script>
</body>
</html>