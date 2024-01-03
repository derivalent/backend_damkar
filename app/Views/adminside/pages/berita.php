<?= $this->extend('adminside/layout/templateadmin'); ?>

<?= $this->section('content'); ?>
            <main>
                <div class="container-fluid px-4">
                    <h3 class="mt-4"> <b>BERITA</b></h3>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/indexadmin">Dashboard</a></li>
                        <li class="breadcrumb-item active">Konten</li>
                        <li class="breadcrumb-item active">Berita</li>
                    </ol>
                    
                    <div class="card mb-4" style="display: inline-block;box-shadow: 0 0 8px rgba(216, 216, 216, 0.8);">
                        <div class="col-sm-12">
                            <div class="card-header" style="padding-bottom: 20px;">
                                <div style="padding-top: 15px;">
                                    <i class="fa-regular fa-newspaper" style="color: #000000;"></i> &nbsp;
                                    <div style="float: right;padding-right: 30px;margin-top: -3px;">
                                        <a class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modalTambah"><i class="fa fa-plus"></i> &nbsp;Tambah </a>
                                        <!-- <a class="btn btn-success btn-sm" href="/Berita/create"><i class="fa fa-plus"></i> &nbsp;Tambah</a> -->
                                    </div>
                                    <div style="float: right;margin-right: 100px;margin-top: -3px;">
                                    
                                    <select id="select-state" placeholder="Pick a state..." data-mdb-filter="true" style="width: 150px;margin-right: 5px;">
                                        <option value="">-Pilih Bulan-</option>
                                        <option value="JA">Januari</option>
                                        <option value="FE">Februari</option>
                                        <option value="MA">Maret</option>
                                        <option value="AP">April</option>
                                        <option value="ME">Mei</option>
                                        <option value="JU">Juni</option>
                                        <option value="JL">Juli</option>
                                        <option value="AG">Agustus</option>
                                        <option value="SE">September</option>
                                        <option value="OK">Oktober</option>
                                        <option value="NO">November</option>
                                        <option value="DE">Desember</option>
                                    </select>

                                    <select id="select-state" placeholder="Pick a state..." data-mdb-filter="true" style="width: 120px;">
                                        <option value="">-Pilih Tahun-</option>
                                        <option value="">2023</option>
                                        <option value="">2022</option>
                                        <option value="">2021</option>
                                        <option value="">2020</option>
                                        <option value="">2019</option>
                                    </select> &nbsp;

                                    <a class="btn btn-primary btn-sm"><i class="fas fa-search"></i></a>&nbsp;
                                </div>
                                    <b>BERITA</b> &nbsp;
                                    <!-- <label>
                                        <select class="datatable-selector">
                                            <option value="5">5</option>
                                            <option value="10" selected="">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                            <option value="25">25</option>
                                        </select> entries per page
                                     </label> -->
                                </div>
                            </div>
                        </div>
                        <div class="card-body overflow-auto rounded-lg" >
                            <div class="outer-wrapper">
                            <div class ="table-wrapper">
                            <table class="table table-striped">
                                <thead class="table-primary">
                                    <tr class = "tampilantabel">
                                        <th width="20">No</th>
                                        <th width="250">Judul Berita</th>
                                        <th width="300">Isi Berita</th>
                                        <th width="200">Gambar</th>
                                        <th width="150">Hari/Tanggal</th>
                                        <th width="250">Keterangan</th>
                                        <th width="130">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($berita as $brita) : ?>
                                    <tr>
                                        <td class = "tampilantabel" scope="row"><?= $i++; ?></td>
                                        <td><?= $brita['judul']; ?></td>
                                        <td><?= $brita['isi']; ?></td>
                                        <td class="tampilantabel"> <img src="/image/<?= $brita['gambar']; ?>" alt="gambar pemadam" class="foto_dokumentasi"> </td>
                                        <td class = "tampilantabel"><?= $brita['tanggal']; ?></td>
                                        <td class = "tampilantabel"><?= $brita['ket_tambahan']; ?></td>
                                        <td class = "tampilantabel">
                                            <span class="action_btn">
                                                <a class="btn btn-warning btn-sm" href="#" > <i class="fa-solid fa-pen-to-square" alt="edit"></i> </a>
                                                <a class="btn btn-danger btn-sm" href="#"> <i class="fa-solid fa-trash" alt="delete"></i> </a>
                                            </span>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    <!-- <tr>
                                        <td class = "tampilantabel">2</td>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td class="tampilantabel"> <img src="/image/pemadam.jpg" alt="gambar pemadam" class="foto_dokumentasi"> </td>
                                        <td class = "tampilantabel">20/04/2323</td>
                                        <td class = "tampilantabel">abc</td>
                                        <td class = "tampilantabel">
                                            <span class="action_btn">
                                                <a class="btn btn-warning btn-sm" href="#" > <i class="fa-solid fa-pen-to-square" alt="edit"></i> </a>
                                                <a class="btn btn-danger btn-sm" href="#"> <i class="fa-solid fa-trash" alt="delete"></i> </a>
                                            </span>
                                        </td>
                                    </tr> -->
                                </tbody>
                            </table>
                            </div>
                            </div>
                            <!-- <div class="pagination">
                                <div class="btn"><i class="fa-solid fa-angles-left"></i></div>
                                <div class="btn"><i class="fa-solid fa-angle-left"></i></div>
                                <div class="btn">1</div>
                                <div class="btn">2</div>
                                <div class="btn"><i class="fa-solid fa-angle-right"></i></div>
                                <div class="btn"><i class="fa-solid fa-angles-right"></i></div>
                            </div> -->
                            <div class="kosong"></div>
                        </div>
                    </div>
                </div> 
            </main>

            <!-- bagian pop-up -->

            <!-- <div class="modal fade modal-lg" id="modalTambah"data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true"> -->
            <div class="modal fade modal-lg" id="modalTambah">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Berita</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body"> 

                        <!-- Start Form -->
                        <!-- <form id="bookingForm" action=# method="POST" class="needs-validation" novalidate
                            autocomplete="off"> -->
                        <form id="bookingForm" action="/beritaController/save" method="post" class="needs-validation" novalidate
                            autocomplete="off">
                            <?= csrf_field(); ?>
                            <!-- Start Input Name -->
                            <div class="form-group">
                                <label for="inputName">Judul</label>
                                <input type="text" class="form-control" id="inputName" name="judul"
                                    placeholder="Masukkan nama anda" required />
                                <small class="form-text text-muted">Please fill your name</small>
                            </div>
                            <!-- End Input Name -->

                            <!-- Start Input Name -->
                            <div class="form-group mb-4">
                                <label for="textAreaRemark">Isi</label>
                                <textarea class="form-control" name="isi" id="textAreaRemark" rows="10"
                                    placeholder="Tell us you want more..."></textarea>
                            </div>
                            <!-- End Input Name -->

                            <!-- Start Input file -->
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Default file input example</label>
                                <input class="form-control" type="file" id="formFile" required>
                            </div>
                            <!-- End Input file -->

                            <!-- Start Input Date , Start Time and End Time -->
                            <div class="row">
                                <!-- Start Input Date -->
                                <div class="form-group col-md-4">
                                    <label for="inputDate">Date</label>
                                    <input type="date" class="form-control" id="inputDate" name="date" required />
                                    <small class="form-text text-muted">Please choose date and time for
                                        meeting.</small>
                                </div>
                                <!-- End Input Date -->
                                <div class="form-group col-md-4">
                                    <label for="inputTime">time</label>
                                    <input type="time" class="form-control" id="inpuTime" name="time" required />
                                    <small class="form-text text-muted">Please choose date and time for
                                        meeting.</small>
                                </div>
                                <!-- End Input Start Time -->
                            </div>
                            <!-- End Input Date , Start Time and End Time -->

                            <!-- Start Input Email -->
                            <!-- <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" id="inputEmail" name="email"
                                    placeholder="Enter email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                                    required />
                                <small class="form-text text-muted">We'll never share your email with anyone
                                    else.</small>
                            </div> -->
                            <!-- End Input Email -->

                            <!-- Start Input Telephone -->
                            <!-- <div class="form-group">
                                <label for="inputPhone">Phone</label>
                                <input type="tel" class="form-control" id="inputPhone" name="phone"
                                    placeholder="099xxxxxxx" pattern="\d{3}\d{3}\d{3}\d{3}" required />
                                <small class="form-text text-muted">We'll never share your phone number with
                                    anyone else.</small>
                            </div> -->
                            <!-- End Input Telephone -->

                            <!-- <div class="mb-3">
                                <label for="formFile" class="form-label">Default file input example</label>
                                <input class="form-control" type="file" id="formFile" required>
                            </div> -->

                            <!-- Start Input Remark -->
                            <div class="form-group mb-4">
                                <label for="textAreaRemark">Notes</label>
                                <textarea class="form-control" name="remark" id="textAreaRemark" rows="2"
                                    placeholder="Tell us you want more..."></textarea>
                            </div>
                            <!-- End Input Remark -->

                            <!-- Start Submit Button -->
                            <center>
                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                                <button class="btn btn-success" type="submit">Simpan</button>
                                <!-- <button class="btn btn-success col-lg-2" type="submit">Simpan</button> -->
                            </center>

                            <!-- End Submit Button -->
                        </form>
                        <!-- End Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ckeditor untuk tampilan insert data mirip word -->
<!-- <script src="https://cdn.ckeditor.com/4.23.0-lts/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'isi' );
</script> -->
<!-- Script Javascript -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

<?= $this->endSection(); ?>