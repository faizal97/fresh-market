<div class="panel panel-primary" style=" margin:65px;padding:40px; width: 195%">
  <div class="panel-heading"><h2 style="margin:10px">Edit Admin</h2></div> <br>
<div class="container" style="width: 100%">
  <form class="form-horizontal" action="prosesedit.php" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="">Username:</label>
      <div class="col-sm-10">
        <input type="" class="form-control" id="" name="username" required="required"> value="<?php echo $row['username'] ?>">
      </div>
   </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="">Status :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="warnabunga" required="required" name="status" value="<?php echo $row['status'] ?>">
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn-success" style="width:18%; height: 33px"><span class="glyphicon glyphicon-save"> Simpan Data</span></button>
        <a href="<?php echo $_SESSION['lastpage'] ?>"><button type="button" class="btn btn-info"> <span class="glyphicon glyphicon-share-alt"> Kembali</span></button>
      </div>
    </div>
    <input type="hidden" name="tipe" value="admin">
    <input type="hidden" name="old_id" value="<?php echo $row['username'] ?>">
</form>
</div>
</div>
