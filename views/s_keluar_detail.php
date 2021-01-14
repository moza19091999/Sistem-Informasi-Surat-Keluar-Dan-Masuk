<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Surat Keluar</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tb_suratkeluar WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">No Surat </td> <td><?= $data['no_surat'] ?></td>
                        </tr>
                        <tr>
                            <td>Asal Surat</td> <td><?= $data['asal_surat'] ?></td>
                        </tr>

						<tr>
                            <td>Tanggal keluar</td> <td><?= $data['tgl_keluar'] ?></td>
                        </tr>

						<tr>
                            <td>Staff Penerbit Surat</td> <td><?= $data['penerbit'] ?></td>
                        </tr>

						<tr>
                            <td>Perihal</td> <td><?= $data['perihal'] ?></td>
                        </tr>

                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=s_keluar&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Arsip </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

