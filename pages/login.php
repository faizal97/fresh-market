<link rel="stylesheet" type="text/css" href="style/login.css">
<div id="id01" class="modal">
  
  <form class="modal-content animate">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="avatar.png" alt="Avatar" class="avatar">
    </div>
     <div class="input-group">
     <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
     <input id="username" type="text" class="form-control" name="text" placeholder="Masukkan Username">
  </div>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="password" type="password" class="form-control" name="password" placeholder="Masukkan Kata Sandi">
  </div>
  
    <div class="container">
        
      <button type="button" class="btn btn-primary">Masuk</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Ingat Saya
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" class="btn btn-danger"onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Batal</button>
      <span class="psw">Lupa <a href="#">Kata Sandi?</a></span>
    </div>
  </form>
</div>
<p>Belum punya akun? <a href="#"> daftar disini </p>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
