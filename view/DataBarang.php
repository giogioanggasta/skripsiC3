<?php include('../model/Model-DataBarang.php') ?>

<!DOCTYPE html>


<head>
  <title>Data Barang</title>
  <?php include_once './_partials/Header2.php'; ?>
  <style>
    @font-face {
      font-family: header;
      src: url("../fonts/Ailerons-Typeface.otf");
    }

    @font-face {
      font-family: texts;
      src: url("../fonts/Renner_ 400 Book.ttf");
    }

    @font-face {
      font-family: navBarFont;
      src: url("../fonts/Kiona-Regular.ttf");
      font-style: bold;
    }

    h1 {
      font-family: header;
      font-size: 70px;
      color: #373737;
    }

    a {
      font-family: navBarFont;
      font-size: 25px;
      color: #868B8E;
      font-style: bold;
    }


    h2 {
      font-family: navBarFont;
      font-size: 30px;
      color: white;
      margin-top: 40px;
      margin-bottom: 40px;
    }

    h5 {
      font-family: navBarFont;
      font-size: 20px;
      color: white;
    }

    .enterbutton {
      width: 20%;
      background-color: grey;
      border: none;
      color: white;
      padding: 14px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 8px 0;
      margin-left: 75%;
      margin-top: 5%;
      cursor: pointer;
      border-radius: 4px;
      transition: 0.5s;
    }

    .button {
      width: 82.5%;
      background-color: white;
      border: 1px solid #ccc;
      color: white;
      padding: 14px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 8px 0;
      cursor: pointer;
      border-radius: 4px;
      transition: 0.5s;
    }


    .button:hover {
      background-color: grey;
      transition: 0.5s;
    }

    h5 {
      font-family: navBarFont;
      font-size: 20px;
      color: white;
    }

    table {
      width: 70%;
      color: black;
      margin-left: 10%;
      margin-top: 2.5%;
    }

    table,
    tr,
    td {
      padding: 10px;
    }

    input[type=submit] {
      width: 20%;
      background-color: grey;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      margin-top: 5%;
      margin-left: 55%;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .tablecust {
      font-family: texts2;
      font-size: 15px;
      color: #373737;
    }
  </style>
</head>

<body>

<?php include_once './_partials/Navbar2.php'; ?>

  <a class="w3-display-middle" style="color:black;float: center; margin-top: -13%; text-decoration: none; font-size: 120%">Tabel Barang</a>

  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalHapus" style="float:right; margin-top:8%; margin-right: 1%; background-color:steelblue">
    Hapus
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="modalHapus">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Hapus Transaksi</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form class="w3-container" action="DataBarang.php" method="POST">
            <br>
            <label><b>Kode Barang yang ingin dihapus</b></label>
            <input class="w3-input w3-border" type="text" placeholder="" name="kodeBarang">
            <br>
            <br>
            <br>

            <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
              <button class="w3-button w3-block w3-dark-grey w3-section w3-padding" type="submit" name="btnHapus">HAPUS</button>
            </div>
          </form>

        </div>

      </div>
    </div>
  </div>

  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambah" style="float:right; margin-top:8%; margin-right: 2%; background-color:steelblue">
    Tambah
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="modalTambah">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Tambah Barang</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form class="w3-container" action="DataBarang.php" method="POST" enctype="multipart/form-data">
            <br>
            <label><b>Kode Barang</b></label>
            <input class="w3-input w3-border" type="text" placeholder="" name="tambahKode" required>
            <label><b>Nama Barang</b></label>
            <input class="w3-input w3-border" type="text" placeholder="" name="tambahNama" required>
            <label><b>Harga Barang</b></label>
            <input class="w3-input w3-border" type="text" placeholder="" name="tambahHarga" required>
            <label><b>Kategori</b></label>
            <input class="w3-input w3-border" type="text" placeholder="" name="tambahKategori" required>
            <label><b>Stok Barang</b></label>
            <input class="w3-input w3-border" type="text" placeholder="" name="tambahStok" required>
            <label><b>Satuan</b></label>
            <input class="w3-input w3-border" type="text" placeholder="" name="tambahSatuan" required>
            <label><b>Keterangan Barang</b></label>
            <input class="w3-input w3-border" type="text" placeholder="" name="tambahKeterangan" required>
            <label><b>Foto Barang</b></label>
            <input class="w3-input w3-border" type="file" name="tambahFoto">
            <br>
            <br>
            <br>

            <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
              <button class="w3-button w3-block w3-dark-grey w3-section w3-padding" type="submit" name="btnInsert">ENTER</button>
            </div>


        </div>

      </div>
    </div>
  </div>
  </form>



  <div class="w3-container" style="margin-left: -10%;">
    <table class="w3-table-all w3-center w3-hoverable" id="tabelcust" style="font-family: texts; font-size: 15px; width: 90%">
      <thead>
        <tr class="w3-light-grey">
          <th>ID Barang</th>
          <th>Kode Barang</th>
          <th>Nama Barang</th>
          <th>Foto Barang</th>
          <th>Harga Barang</th>
          <th>Keterangan Barang</th>
          <th>Kategori</th>
          <th>Stok Barang</th>
          <th>Satuan</th>
        </tr>
      </thead>

      <?php
      $sql = "SELECT * FROM barang";
      $results = mysqli_query($db, $sql) or die(mysqli_error($db));

        while ($row = mysqli_fetch_array($results)) {

        

      ?>


<form class="w3-container" action="DataBarang.php" method="POST" enctype="multipart/form-data">
        <tr>
            <td><?php echo $row["idBarang"] ?></td>
            <td><?php echo $row["kodeBarang"] ?></td>
            <td><?php echo $row["namaBarang"] ?></td>
            <td><img src="../model/uploadImage/<?php echo $row['fotoBarang']?>" style="width:25%"> </td>
            <td><?php echo $row["hargaBarang"] ?></td>
            <td><?php echo $row["keteranganBarang"] ?></td>
            <td><?php echo $row["kategori"] ?></td>
            <td><?php echo $row["stokBarang"] ?></td>
            <td><?php echo $row["satuan"] ?></td>
            <td><input type="hidden" name="idBarang" value="<?php echo $row["idBarang"];?>"></td>
            <td><button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#modalUbah-<?=$row["idBarang"] ?>' name='buttonEdit' style="background-color:steelblue">Edit</button></td>
        </tr>



        <!-- The Modal -->
        <div class="modal fade" id="modalUbah-<?=$row["idBarang"] ?>" >
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Edit Barang</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                
                  <br>
                  <label><b>Kode Barang</b></label>
                  <input class="w3-input w3-border" type="text" placeholder="" name="editKode" value="<?php echo $row['kodeBarang']?>" required>
                  <label><b>Nama Barang</b></label>
                  <input class="w3-input w3-border" type="text" placeholder="" name="editNama" value="<?php echo $row['namaBarang']?>" required>
                  <label><b>Harga Barang</b></label>
                  <input class="w3-input w3-border" type="text" placeholder="" name="editHarga" value="<?php echo $row['hargaBarang']?>" required>
                  <label><b>Kategori</b></label>
                  <input class="w3-input w3-border" type="text" placeholder="" name="editKategori" value="<?php echo $row['kategori']?>" required>
                  <label><b>Stok Barang</b></label>
                  <input class="w3-input w3-border" type="text" placeholder="" name="editStok" value="<?php echo $row['stokBarang']?>" required>
                  <label><b>Satuan</b></label>
                  <input class="w3-input w3-border" type="text" placeholder="" name="editSatuan" value="<?php echo $row['satuan']?>" required>
                  <label><b>Keterangan Barang</b></label>
                  <input class="w3-input w3-border" type="text" placeholder="" name="editKeterangan" value="<?php echo $row['keteranganBarang']?>" required>
                  <label><b>Foto Barang</b></label>
                  <input class="w3-input w3-border" type="file" name="editFoto" >
                  <input type="hidden" name="idBarang" value="<?php echo $row["idBarang"];?>">
                  <br>
                  <br>
                  <br>

                  <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                    <button class="w3-button w3-block w3-dark-grey w3-section w3-padding" type="submit" name="btnEdit">ENTER</button>
                  </div>


              </div>

            </div>
          </div>
        </div>
        </form>
        <?php

        
}

?>
    </table>
  </div>



</body>

</html>