<link rel="stylesheet" type="text/css" href="menu.css">
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="height:0px">`
    <div class="container-fluid">
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav" style="margin-right: 10px">
            <li class="no-copy"><span id="nama-brand">KangIkan</span></li>
            </ul>
            <a style="padding-top:0px; padding-left:50px" class="navbar-brand" href="#menu-toggle" id="menu-toggle"><span class="glyphicon glyphicon-list" aria-hidden="true"></span></a>
            <ul class="nav navbar-nav navbar-right">
                <li class="no-copy"><span id=tgl-skrg></span></li>
                <li class="no-copy"><a style="padding-top:0px" href="?page=home"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Beranda</a></li>
                <li class="no-copy"><a style="padding-top:0px" href="system/logout.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Keluar</a></li>
            </ul>
        </div>
    </div>
</nav>

<div id="wrapper" class="toggled">
    <div class="container-fluid">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
              	<li class="sidebar-brand">
                    <br>
                </li>
                <li class="sidebar-brand">
                    <a href="#" class="navbar-brand" style="margin-right:10px;border:none">
                        <span aria-hidden="true" style="font-size: 20px">Halo, </span> <?php echo $_SESSION['admin'] ?>
                    </a>
                </li>
                <li>
                   <a href="?page=home" ><span class="glyphicon glyphicon-home" aria-hidden="true"style="margin-left:-20px" ></span> Beranda</a>
                </li>
                <br>
                <li id="toggle-menu-data" class="no-copy">
                    <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span><font color="#337AB7"> DATA</font><span class="glyphicon glyphicon-chevron-down" style="margin-left:50px"></span>
                </li>
                <li class="toggle-item child-data no-copy">
                    <a href="?page=dataadmin"><span aria-hidden="true"></span> Data Admin</a>
                </li>
                <li class="toggle-item child-data no-copy">
                    <a href="?page=datakonsumen"><span  aria-hidden="true"></span>Data Konsumen</a>
                </li>
                <li class="toggle-item child-data no-copy">
                    <a href="?page=dataproduk"><span aria-hidden="true"></span>Data Produk</a>
                </li>
                <li class="toggle-item child-data no-copy">
                    <a href="?page=datatransaksi"><span aria-hidden="true"></span>Data Transaksi</a>
                </li>

                <li id="toggle-menu-laporan" class="no-copy">
                    <span class="glyphicon glyphicon-file" aria-hidden="true"></span><font color="#337AB7"> Laporan </font><span class="glyphicon glyphicon-chevron-down" style="margin-left:30px"></span>
                </li>
                <li class="toggle-item child-laporan no-copy">
                  <a href="#"><span  aria-hidden="true"></span> Laporan Data Konsumen</a>
              </li>
                  <li class="toggle-item child-laporan no-copy">
                    <a href="#"><span  aria-hidden="true"></span> Laporan Penjualan Bulanan</a>
                </li>
                <li class="toggle-item child-laporan no-copy">
                    <a href="#"><span  aria-hidden="true"></span> Laporan Penjualan Pertahun</a>
                </li>

            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <?php include 'template/content.php' ?>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
</div>
