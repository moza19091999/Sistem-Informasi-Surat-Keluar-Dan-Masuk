<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Arsip</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tb_suratmasuk WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Surat Masuk dan Surat Keluar PT XYZ </h2>
                        <h4>Jalan Cokroaminoto No 19 Kisaran <br>Kabupaten Asahan, Sumatera Utara, 21212</h4>
                        <hr>
                        <h3>DATA Surat Masuk</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>

								<tr>
                                    <td>Nomor Surat</td> <td><?= $data['no_surat'] ?></td>
                                </tr>

                                <tr>
                                    <td width="200">Asal Surat</td> <td><?= $data['asal_surat'] ?></td>
                                </tr>

								<tr>
                                    <td>Tanggal Masuk</td> <td><?= $data['tgl_masuk'] ?></td>
                                </tr>

								<tr>
                                    <td>Penerima</td> <td><?= $data['penerima'] ?></td>
                                </tr>

								<tr>
                                    <td>Perihal</td> <td><?= $data['perihal'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
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