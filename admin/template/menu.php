<link rel="stylesheet" type="text/css" href="menu.css">
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="height:0px">`
    <div class="container-fluid">
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav" style="margin-right: 10px">
            <li><span id="nama-brand">KangIkan</span></li>
            </ul>
            <a style="padding-top:0px" class="navbar-brand" href="#menu-toggle" id="menu-toggle"><span class="glyphicon glyphicon-list" aria-hidden="true"></span></a>
            <ul class="nav navbar-nav navbar-right">
                <li><span id=tgl-skrg></span></li>
                <li><a style="padding-top:0px" href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Beranda</a></li>
                <li><a style="padding-top:0px" href="#"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Keluar</a></li>
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
                        <span class="glyphicon glyphicon-user" aria-hidden="true" style="font-size: 20px"> </span> Admin
                    </a>
                </li>
                <li>
                   <a href="#" ><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Beranda</a>
                </li> 
                <br>
                <li id="toggle-menu-data">
                    <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span><font color="#337AB7"> DATA</font>
                </li>
                <li class="toggle-item child-data">
                    <a href="#"><span aria-hidden="true"></span> Data Admin</a>
                </li>
                <li class="toggle-item child-data">
                    <a href="#"><span  aria-hidden="true"></span>Data Konsumen</a>
                </li>
                <li class="toggle-item child-data">
                    <a href="#"><span aria-hidden="true"></span>Data Produk</a>
                </li>
                <li class="toggle-item child-data">
                    <a href="#"><span aria-hidden="true"></span>Data Transaksi</a>
                </li>

                <li id="toggle-menu-laporan">
                    <span class="glyphicon glyphicon-file" aria-hidden="true"></span><font color="#337AB7"> Laporan </font>
                </li>
                <li class="toggle-item child-laporan">
                    <a href="#"><span  aria-hidden="true"></span> Laporan Pembelian</a>
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