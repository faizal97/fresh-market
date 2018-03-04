<link rel="stylesheet" type="text/css" href="style/menu.css">

 <nav class="navbar navbar-inverse navbar-fixed-top navbar-custom">
  <!-- <img id="header" src="images/navbar.png" width="100%"> -->
  <div class="container-fluid">
    <ul class="nav navbar-nav list-menu">
     <li class="logo"><a href="index.php" style="padding:0"><img src="images/logo.png" width="150px"></a></li>
    <div class="dropdown" style="display:inline-block;margin-top: 15px">
     <li class="dropdown-toggle" data-togle="dropdown">KATAGORI <span class="caret"></span></li>
      <ul class="dropdown-menu">
        <li><a tabindex="-1" href="#"></a>Cumi</li>
        <li class="dropdown-submenu"></li>
        <a href="#" tabindex="-1">Ikan<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">Ikan Kakap</a></li>
          <li><a tabindex="-1" href="#">Ikan Kembung</a></li>
          <li><a tabindex="-1" href="#">Ikan Kerapu</a></li>
          <li><a tabindex="-1" href="#">Ikan Kuwe</a></li>
          <li><a tabindex="-1" href="#">Ikan Lain-Lain</a></li>
        </ul>
        <li><a tabindex="-1" href="#"></a>Kepiting</li>
        <li><a tabindex="-1" href="#"></a>Udang</li>
      </ul>
    </div>
  </ul>
  <ul class="nav navbar-nav list-menu navbar-right">
    <li><div id="search" class="searchbox">
          <form id='form-search' action="" method="get"><div class="input-group"><input type="search" class="form-control" placeholder="Cari Ikan ...." style="width:200px">
        <div class="input-group-btn">
        <button class="btn btn-default searchbox-btn" type="submit">
          <i class="glyphicon glyphicon-search"></i>
        </button>
        </div>
        </div>
      </form>
      </div>
    </li>
    <li><a href="#" style="padding:0px"><img src="images/cart.png" width="50px" height="50px"></a></li>
    <li><a href="#" class="custom-menu" data-toggle="modal" data-target="#id01">MASUK</a></li>
 	  <li><a href="#" class="custom-menu" data-toggle="modal" data-target="#id02">DAFTAR</a></li>
  </ul>
  </div>
</nav>