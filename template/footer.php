</div>
<?php 
if(!isset($_SESSION['user']) || empty($_SESSION['user'])){
include 'pages/login.php';
include 'pages/daftar.php';
}
 ?>
<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.16/p5.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.16/addons/p5.dom.min.js"></script>
<!-- Project scripts -->
<script type="text/javascript" src="scripts/index.js"></script>
<script type="text/javascript" src="scripts/menu.js"></script>
<script type="text/javascript" src="scripts/parallax.js"></script>
<link rel="stylesheet" type="text/css" href="style/footer.css">
<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
<footer>
	<div class="footer-main">
	<div class="footer-inner">
	<div class="footer-left">
	<div class="footer-box">
		<h6>Bantuan</h6>
		<ul >
		<li><a href="#">Pembelian</a></li>
		<li><a href="#">Pembayaran</a></li>
		<li><a href="#">Pengiriman</a></li>
		<li></li>
			
		</ul>
	</div>
	</div>
	<div class="footer-left">
	<div class="footer-box">
		<h6>Informasi</h6>
		<ul>
		<li><a href="?page=tentangkami">Tentang Kami</a></li>
		<li><a href="?page=kontakkami">Kontak Kami</a></li>
		</ul>
	</div>
</div>
	<div class="footer-left" style="width:300px"> <!-- dicoba ganti style widthnya disini -->
	<div class="footer-box">
		<h6>Alamat</h6>
		<ul>
		<li><span id='foot-alamat' class="fas fa-map-marker-alt" style="font-weight: bold; font-size: 150%; color:#282828"> Jl. Raya Gading Indah Blok Mohammad4C No.39. RT.13/RW.18. <br>
		Kelapa Gading Barat <br>
		Jakarta Utara - 14240.
		 </span></li>
		</ul>
	</div>
</div>
		<br><br>
		<div class="clr">	
	</div>
	<br>
		<label>Ikuti Kami :</label>
	<ul class="sosmed">
 <a href=https://www.facebook.com/KangIkans/ class="fab fa-facebook-square" style="color: white; font-size: 200%"></a>
<a href=https://twitter.com/KangIkans class="fab fa-twitter-square" style="color: white; font-size: 200%; margin-left: 5px" ></a>
<a href=https://plus.google.com/u/0/114017126997816095813 class="fab fa-google-plus-square" style="color: white; font-size: 200%;margin-left: 5px"></a>
<a href=https://www.instagram.com/kangikans/ class="fab fa-instagram" style="color:white;font-size: 200%; margin-left: 5px"></a> <em  style="color:white; float:right; margin-bottom: 40px">Copyright &copy; 2018 Alfayolans | Powered by Heroku</em>

</ul>
	
	<div class="clr">
</div>
</div>
</div>
</footer>
</body>

</html>