<?= $this->extend('adminside/layout/templateadmin'); ?>

<?= $this->section('popup'); ?>
<main>
                <!-- <div class="container-fluid px-4">
                    <h3 class="mt-4"> <b>KONTEN BERITA</b></h3>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Berita</li>
                    </ol>
                    
                    <div class="card mb-4" style="display: inline-block;box-shadow: 0 0 8px rgba(216, 216, 216, 0.8);">
                        <div class="col-sm-12">
                            <div class="card-header" style="padding-bottom: 20px;">
                                <div style="padding-top: 15px;">
                                    <i class="fa-regular fa-newspaper"></i>
                                    <div style="float: right;padding-right: 30px;" data-name="tambah-berita">
                                        <a class="btn btn-success btn-sm" href="berita-form.html"><i class="fa fa-plus"></i> &nbsp;Tambah</a>
                                    </div>
                                    Konten Berita
                                </div>
                            </div>
                        </div>
                        <div class="card-body overflow-auto rounded-lg" >
                            <table class="table table-striped">
                                <thead class="table-primary">
                                    <tr>
                                        <th width="20">No</th>
                                        <th width="300">Judul Berita</th>
                                        <th width="400">Isi Berita</th>
                                        <th width="200">Gambar</th>
                                        <th width="200">Hari/Tanggal</th>
                                        <th width="200">Link</th>
                                        <th width="130">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="text-align: center;">1</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td style="text-align: center;">61</td>
                                        <td style="text-align: center;">20/04/2323</td>
                                        <td style="text-align: center;">
                                            <span class="action_btn">
                                                <a class="btn btn-warning btn-sm" href="#" > <i class="fa-solid fa-pen-to-square" alt="edit"></i> </a>
                                                <a class="btn btn-danger btn-sm" href="#"> <i class="fa-solid fa-trash" alt="delete"></i> </a>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">2</td>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td style="text-align: center;">63</td>
                                        <td style="text-align: center;">2011/07/25</td>
                                        <td style="text-align: center;">
                                            <span class="action_btn">
                                                <a class="btn btn-warning btn-sm" href="#" > <i class="fa-solid fa-pen-to-square" alt="edit"></i> </a>
                                                <a class="btn btn-danger btn-sm" href="#"> <i class="fa-solid fa-trash" alt="delete"></i> </a>
                                            </span>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                            <div class="pagination">
                                <div class="btn"><i class="fa-solid fa-angles-left"></i></div>
                                <div class="btn"><i class="fa-solid fa-angle-left"></i></div>
                                <div class="btn">1</div>
                                <div class="btn">2</div>
                                <div class="btn"><i class="fa-solid fa-angle-right"></i></div>
                                <div class="btn"><i class="fa-solid fa-angles-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="background_pop_up_tambah">
                </div>
                <div class="pop_up_tambah">
                    <div class="card mb-4" style="display: inline-block;box-shadow: 0 0 8px rgba(216, 216, 216, 0.8);margin-left: 10%;">
                        <div class="col-sm-12">
                            <a class="btn fas fa-times" href="berita.html" style="float: right;"></a>
                            <div class="card-header" style="padding-bottom: 15px;">
                                <td width="65%">
                                    <h4 style="padding-top: 10px;text-align: center;">Form Input Berita Baru</h4>
                                </td>
                            </div>
                        </div>
                        <div class="card-body">
                            <table style="">
                                <tr height="46">
                                    <td> </td>
                                    <td>Judul Berita</td>
                                    <td><input type="text" name="id_mahasiswa" size="35" maxlength="100" placeholder="masukkan judul berita"/></td>
                                </tr>
                                <tr height="46">
                                    <td> </td>
                                    <td>Isi Berita</td>
                                    <td><br><textarea name="message" rows="2" cols="37" placeholder="isi berita..."></textarea></td>
                                </tr>
                                <tr height="46">
                                    <td> </td>
                                    <td>Gambar</td>
                                    <td><br><input type="file" name="foto" required="required">
                                        <p style="color: red;font-size: smaller;">Ekstensi yang diperbolehkan .png | .jpg | .jpeg</p></td>
                                </tr>
                                <tr height="46">
                                    <td> </td>
                                    <td>Hari/Tanggal</td>
                                    <td><input type="date" id="hari_tanggal" name="hari_tanggal"></td>
                                </tr>
                                <tr height="46">
                                    <td> </td>
                                    <td>link</td>
                                    <td><input type="link" name="link" size="35" placeholder="masukkan link" /></td>
                                </tr>
                                <tr height="46">
                                    <td> </td>
                                    <td> </td>
                                    <td class="button_simpan">
                                        <a class="btn btn-success btn-sm" href="berita.html" style="margin-top: 30px;padding: 5px;padding-left: 15px;padding-right: 15px;margin-left: 20%;">&nbsp;Simpan</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>                
            </main>
            <!-- <main>
                <div class="container-fluid px-4">
                    <h3 class="mt-4"> <b>KONTEN BERITA</b></h3>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Berita</li>
                    </ol>
                    
                    <div class="card mb-4" style="display: inline-block;box-shadow: 0 0 8px rgba(216, 216, 216, 0.8);">
                        <div class="col-sm-12">
                            <div class="card-header" style="padding-bottom: 20px;">
                                <div style="padding-top: 15px;">
                                    <i class="fa-regular fa-newspaper"></i>
                                    <div style="float: right;padding-right: 30px;" data-name="tambah-berita">
                                        <a class="btn btn-success btn-sm" href="berita-form.html"><i class="fa fa-plus"></i> &nbsp;Tambah</a>
                                    </div>
                                    Konten Berita
                                </div>
                            </div>
                        </div>
                        <div class="card-body overflow-auto rounded-lg" >
                            <table class="table table-striped">
                                <thead class="table-primary">
                                    <tr>
                                        <th width="20">No</th>
                                        <th width="250">Judul Berita</th>
                                        <th width="300">Isi Berita</th>
                                        <th width="200">Gambar</th>
                                        <th width="150">Hari/Tanggal</th>
                                        <th width="200">Link</th>
                                        <th width="100">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="text-align: center;">1</td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td style="text-align: center;">61</td>
                                        <td style="text-align: center;">20/04/2323</td>
                                        <td style="text-align: center;">
                                            <span class="action_btn">
                                                <a class="btn btn-warning btn-sm" href="#" > <i class="fa-solid fa-pen-to-square" alt="edit"></i> </a>
                                                <a class="btn btn-danger btn-sm" href="#"> <i class="fa-solid fa-trash" alt="delete"></i> </a>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;">2</td>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td style="text-align: center;">
                                            <span class="action_btn">
                                                <a class="btn btn-warning btn-sm" href="#" > <i class="fa-solid fa-pen-to-square" alt="edit"></i> </a>
                                                <a class="btn btn-danger btn-sm" href="#"> <i class="fa-solid fa-trash" alt="delete"></i> </a>
                                            </span>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                            <div class="pagination">
                                <div class="btn"><i class="fa-solid fa-angles-left"></i></div>
                                <div class="btn"><i class="fa-solid fa-angle-left"></i></div>
                                <div class="btn">1</div>
                                <div class="btn">2</div>
                                <div class="btn"><i class="fa-solid fa-angle-right"></i></div>
                                <div class="btn"><i class="fa-solid fa-angles-right"></i></div>
                            </div>
                        </div>
                    </div>

                </div>
            </main>
    <div class="background_pop_up_tambah">
        <div class="pop_up_tambah">
            <div class="card mb-4" style="display: inline-block;box-shadow: 0 0 8px rgba(216, 216, 216, 0.8);margin-left: 30%;">
                <div class="col-sm-12">
                    <a class="btn fas fa-times" href="berita.html" style="float: right;"></a>
                    <div class="card-header" style="padding-bottom: 15px;">
                        <td width="65%">
                            <h4 style="padding-top: 10px;text-align: center;">Form Input Berita Baru</h4>
                        </td>
                    </div>
                </div>
                <div class="card-body">
                    <table style="">
                        <tr height="46">
                            <td> </td>
                            <td>Judul Berita</td>
                            <td><input type="text" name="id_mahasiswa" size="35" maxlength="100" placeholder="masukkan judul berita"/></td>
                        </tr>
                        <tr height="46">
                            <td> </td>
                            <td>Isi Berita</td>
                            <td><br><textarea name="message" rows="2" cols="37" placeholder="isi berita..."></textarea></td>
                        </tr>
                        <tr height="46">
                            <td> </td>
                            <td>Gambar</td>
                            <td><br><input type="file" name="foto" required="required">
                                <p style="color: red;font-size: smaller;">Ekstensi yang diperbolehkan .png | .jpg | .jpeg</p></td>
                        </tr>
                        <tr height="46">
                            <td> </td>
                            <td>Hari/Tanggal</td>
                            <td><input type="date" id="hari_tanggal" name="hari_tanggal"></td>
                        </tr>
                        <tr height="46">
                            <td> </td>
                            <td>link</td>
                            <td><input type="link" name="link" size="35" placeholder="masukkan link" /></td>
                        </tr>
                        <tr height="46">
                            <td> </td>
                            <td> </td>
                            <td class="button_simpan">
                                <a class="btn btn-success btn-sm" href="/berita" style="margin-top: 30px;padding: 5px;padding-left: 15px;padding-right: 15px;margin-left: 20%;">&nbsp;Simpan</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div> -->
<?= $this->endSection(); ?>