<?php 
  $_SESSION['lastpage'] = $_SERVER['REQUEST_URI'];
  $sql = "SELECT * FROM tb_admin";
  $result = mysqli_query($kon,$sql);
 ?>
<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading">Data Admin</div>
  <div class="panel-body">
    <a href="?page=tambahadmin"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>Tambah Data</button></a>
    <button onclick="konfirmasiHapus('admin','all')" type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus Semua</button> <br>

    <label style="float:right">Cari Data : <input type="text" name="cari"></label>
<div class="container">
  <!-- Table -->
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Username</th>
        <th>Status</th>
        <th>Tindakan</th>
      </tr>
    </thead>
  <?php
  $no=0;
  while($row=mysqli_fetch_array($result)){
    $no++;
   ?>
     <tr>
       <td><?php echo $no ?></td>
       <td><?php echo $row['user_admin'] ?></td>
       <td><?php echo $row['status_admin'] ?></td>
       <td><a href="?page=editadmin&user=<?php echo $row['user_admin'] ?>"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span> Edit</button></a>
       <button id=<?php echo $row['user_admin'] ?> onclick="konfirmasiHapus('admin',this.id)" type="button" class="btn btn-warning"><span class="glyphicon glyphicon-remove"></span> Hapus</button></td></tr>
       <?php 
     }
        ?>
   </tbody>
 </table>
</div>
</div>

<script type="text/javascript">
 function konfirmasiHapus(data,id){
   var konf = confirm("Apakah Anda Yakin Ingin Menghapus ?");
   if(konf==true){
     window.location.assign("hapus.php?item="+data+"&id="+id);
   }
 }
</script>
</div>
</div>
