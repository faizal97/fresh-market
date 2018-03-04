<link rel="stylesheet" type="text/css" href="style/daftar.css">
<div id="id02" class="modal" role="dialog">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content animate" action="/action_page.php">
    <div class="container">
      <h1>Daftar</h1>
      <hr>
      <label for="nm"><b>Nama Lengkap</b></label>
      <input type="text" placeholder="Masukkan Nama Lengkap" name="nama">

      <label for="usernm"><b>Username</b></label>
      <input type="text" placeholder="Masukkan Username" name="usernm">

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Masukkan Email" name="email" required>

      <label for="psw"><b>Kata Sandi</b></label>
      <input type="password" placeholder="Masukkan Kata Sandi" name="psw" required>

      <label for="psw-repeat"><b>Ulang Kata Sandi</b></label>
      <input type="password" placeholder="Ulang Kata Sandi" name="psw-repeat" required>

      <div class="clearfix">
        <button type="button" class="btn btn-danger" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Batal</button>
        <button type="button" class="btn btn-primary signupbtn">Daftar</button>
      </div>
    </div>
  </form>
</div>
<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
