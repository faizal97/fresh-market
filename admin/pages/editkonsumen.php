<div class="panel panel-primary" style=" margin:20px;padding:20px; width: 260%">
  <div class="panel-heading"><h2 style="margin:10px">Edit Member</h2></div> <br>
<div class="container" style="width: 100%">
  <form class="form-horizontal" action="prosesedit.php" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="">Nama Lengkap :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="" name="nama_lengkap" value="<?php echo $row['nama_lengkap'] ?>" required="required">
      </div>
   </div>

     <div class="form-group">
      <label class="control-label col-sm-2" for="">Email :</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email'] ?>" required="required">
      </div>
     </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="">Tanggal Lahir :</label>
      <div class="col-sm-10">
        <select id='tgl' class="form-control" name="tgl">
    <option selected="selected">Tanggal Lahir</option>
    <?php
    for ($a=1; $a<=31; $a+=1){
      if($a==date_format(date_create($row['tgl_lahir']),"j")){
        echo "<option value=$a selected='selected'> $a </option>";
      }else{
      echo "<option value=$a> $a </option>";
    }
    }
     ?>
  </select>
   <select name="bln" class="form-control">
    <option selected="selected">Bulan</option>
    <?php
    $bulan=array("","Januari","Febuari","Maret","April","Mei","Juni","Juli", "Agustus","September","Oktober","November","Desember");
    $jlh_bln=count($bulan);
    for($c=1; $c<$jlh_bln; $c+=1){
      if($c==date_format(date_create($row['tgl_lahir']),"n")){
        echo "<option value=$c selected='selected'>".$bulan[$c]."</option>";
      }else{
      echo "<option value=$c>".$bulan[$c]."</option>";
    }
    }
     ?>
   </select>
   <select name="thn" class="form-control">
    <option value="">Tahun</option>
   <?php
  $now=date("Y");
  for($a=1950;$a<=$now;$a++)
  {
    if($a==date_format(date_create($row['tgl_lahir']),"Y")){
        echo "<option value=$a selected='selected'> $a </option>";
      }else{
      echo "<option value=$a> $a </option>";
    }
  }
  echo "</select>";
    ?>
  </select>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" id="sel1">Jenis Kelamin</label>
      <div class="col-sm-10">
      <div class="radio">
      <label><input id="jeniskel1" type="radio" name="jeniskel" value="Laki-Laki" <?php if($row['jk']=="Laki-Laki"){ echo "checked='checked'";} ?>>Laki-Laki</label>
    </div>
    <div class="radio">
      <label><input id="jeniskel3" type="radio" name="jeniskel" value="Perempuan" <?php if($row['jk']=="Perempuan"){ echo "checked='checked'";} ?>>Perempuan</label>
    </div>
  </div>


     <div class="form-group">
      <label class="control-label col-sm-2" for="">Username :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="" name="username" value="<?php echo $row['username'] ?>"" required="required">
      </div>
     </div>


     <div class="form-group">
      <label class="control-label col-sm-2" for="">Alamat :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="" name="alamat" value="<?php echo $row['alamat'] ?>">
      </div>
     </div>

     <div class="form-group">
      <label class="control-label col-sm-2" for="">Kelurahan :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="" name="kelurahan" value="<?php echo $row['kelurahan'] ?>">
      </div>
     </div>


      <div class="form-group">
      <label class="control-label col-sm-2" for="">Kecamatan :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="" name="kecamatan" value='<?php echo $row['kecamatan'] ?>'>
      </div>
     </div>

    <div class="form-group">
      <label class="control-label col-sm-2" id="sel1">Kota:</label>
      <div class="col-sm-10">
      <select class="form-control" id="sel1" name="kota">
        <option <?php if($row['kota']=="Bekasi"){ echo "selected='selected'";} ?>>Bekasi</option>
        <option <?php if($row['kota']=="Bogor"){ echo "selected='selected'";} ?>>Bogor</option>
        <option <?php if($row['kota']=="Depok"){ echo "selected='selected'";} ?>>Depok</option>
        <option <?php if($row['kota']=="Jakarta"){ echo "selected='selected'";} ?>>Jakarta</option>
        <option <?php if($row['kota']=="Tanggerang"){ echo "selected='selected'";} ?>>Tanggerang</option>
     </select>
     </div>
     </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="">Kode Pos :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="" name="kodepos" value="<?php echo $row['kodepos'] ?>">
      </div>
      </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="">No Telephone :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="" name="telp" value="<?php echo $row['telp'] ?>">
      </div>
     </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn-success" style="width:18%; height: 33px"><span class="glyphicon glyphicon-save">Simpan Data</span></button>
        <a href="<?php echo $_COOKIE['lastpage'] ?>"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-share-alt"> Kembali</span></button>
      </div>
    </div>
</div>
<input type="hidden" name="tipe" value="member">
<input type="hidden" name="old_id" value="<?php echo $row['username'] ?>">
</form>
</div>
</div>
