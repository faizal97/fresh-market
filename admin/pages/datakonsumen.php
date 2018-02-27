<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading">Data Admin</div>
  <div class="panel-body">
    <a href=""><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>Tambah Data</button></a>
    <button onclick="konfirmasiHapus('admin','all')" type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus Semua</button> <br>

    <label>Cari Data : <input type="text" name="cari"></label>
<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>Email</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Username</th>
        <th>Alamat</th>
        <th>Kelurahan</th>
        <th>Kecamatan</th>
        <th>Kota</th>
        <th>Kode Pos</th>
        <th>No Telephone</th>
        <th>Tindakan</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $row['nama_lengkap'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['tgl_lahir'] ?></td>
        <td><?php echo $row['jk'] ?></td>
        <td><?php echo $row['username'] ?></td>
        <td><?php echo $row['alamat'] ?></td>
        <td><?php echo $row['kelurahan'] ?></td>
        <td><?php echo $row['kecamatan'] ?></td>
        <td><?php echo $row['kota'] ?></td>
        <td><?php echo $row['kodepos'] ?></td>
        <td><?php echo $row['telp'] ?></td>
        <td><a href="#<?php echo $row['username'] ?>"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span> Edit</button></a>
        <button id=<?php echo $row['username'] ?> onclick="konfirmasiHapus('member',this.id)" type="button" class="btn btn-warning"><span class="glyphicon glyphicon-remove"></span> Hapus</button>
</td>
      </tr>
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
