<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Arsip</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Surat Masuk dan Surat Keluar PT XYZ  </h2>
                        <h4>Jalan Cokroaminoto No 19 Kisaran <br>Kabupaten Asahan, Sumatera Utara, 21212</h4>
                        <hr>
                        <h3>DATA SELURUH SURAT KELUAR</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
                                <tr>
                                <th>No.</th>
                                <th>Nomor Surat</th>
                                <th>Asal Surat</th>
                                <th>Tanggal Keluar</th>
                                <th>Penrbit</th>
                                <th>Perihal</th>
                            </tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tb_suratkeluar";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
									<td><?= $data['no_surat'] ?></td>
                                    <td><?= $data['asal_surat'] ?></td>
									<td><?= $data['tgl_keluar'] ?></td>
									<td><?= $data['penerbit'] ?></td>
									<td><?= $data['perihal'] ?></td>
                                </tr>
                                <br>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="8" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Faras Wahyuddin Sirait<strong></u><br>
                                        NIM.17220155
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>