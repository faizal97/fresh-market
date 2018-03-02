<?php include 'template/header.php' ?>
<link rell="stylesheet" type="text/css" href="style/login.css">
<div id="login">
    <div class="container">
        <div class="row" align="center">
            <div class="col-md col-md-4 col-md-offset-4">               
                <form class="form-logreg adm" action="system/login.php" method="post">
                    <h2><label> Administrator</label></h2>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" name="username" class="form-control" placeholder="Masukkan username" required autofocus>
                    </div> <br>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" required="required" name="password" placeholder="Masukkan Kata Sandi">
                     </div> <br>
                    
		              <div class="form-group"> <button class="btn btn-lg btn-primary btn-block" type="submit">MASUK</button>
		              </div>
                </form> 
            </div>
        </div>
    </div> 
</div>
<?php include 'template/footer.php' ?>
<?php 
 ?>
