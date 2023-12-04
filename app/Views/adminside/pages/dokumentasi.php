<?= $this->extend('adminside/layout/templateadmin'); ?>

<?= $this->section('content'); ?>
<link href="css/styles.css" rel="stylesheet" />
            <main>
                <div class="container-fluid px-4">
                    <h3 class="mt-4"> <b>DOKUMENTASI</b></h3>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/indexadmin">Dashboard</a></li>
                        <li class="breadcrumb-item active">Konten</li>
                        <li class="breadcrumb-item active">Dokumentasi</li>
                    </ol>
                    
                    <div class="card mb-4" style="display: inline-block;box-shadow: 0 0 8px rgba(216, 216, 216, 0.8);">
                        <div class="col-sm-12">
                            <div class="card-header" style="padding-bottom: 20px;">
                                <div style="padding-top: 15px;">
                                    <!-- <i class="fas fa-table me-1"></i> -->
                                    <!-- <i class="fa-solid fa-address-book" style="color: #000000;"></i> &nbsp; -->
                                    <i class="fa-solid fa-images" style="color: #000000;"></i></i> &nbsp;
                                    <div style="float: right;padding-right: 30px;margin-top: -3px;">
                                        <a class="btn btn-success btn-sm"><i class="fa fa-plus"></i> &nbsp;Tambah</a>
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

                                        <select id="select-state" placeholder="Pick a state..." data-mdb-filter="true" style="width: 130px;">
                                        <option value="">-Pilih Tahun-</option>
                                            <option value="">2023</option>
                                            <option value="">2022</option>
                                            <option value="">2021</option>
                                            <option value="">2020</option>
                                            <option value="">2019</option>
                                        </select> &nbsp;

                                        <a class="btn btn-primary btn-sm"><i class="fas fa-search"></i></a>&nbsp;
                                    </div>
                                    <div style="float: right;padding-right: 30px;">
                                        <div style="float: right;padding-right: 30px;margin-top: -5px;">
                                        <a href="#" class="search-btn">
                                            <i class="fas fa-search text-white" style="margin-top: -6px;width: 20px;"></i>
                                        </a>
                                        </button>
                                        </div>
                                    </div>
                                    <b>DOKUMENTASI</b>
                                </div>
                            </div>
                        </div>
                        <div class="card-body overflow-auto rounded-lg" >
                            <table class="table table-striped">
                                <thead class="table-primary">
                                    <tr>
                                        <th width="20">No</th>
                                        <th width="300">Gambar</th>
                                        <th width="400">Nama</th>
                                        <th width="800">Keterangan</th>
                                        <th width="150">Tanggal</th>
                                        <th width="150">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td class = "tampilantabel"><img src="/image/pemadam.jpg" alt="gambar pemadam" class="foto_dokumentasi"></td>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td class = "tampilantabel">13-3-2023</td>
                                        <td class = "tampilantabel" >
                                            <span class="action_btn">
                                                <a class="btn btn-warning btn-sm" href="#" > <i class="fa-solid fa-pen-to-square" alt="edit"></i> </a>
                                                <a class="btn btn-danger btn-sm" href="#"> <i class="fa-solid fa-trash" alt="delete"></i> </a>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <td class = "tampilantabel"><img src="/image/pemadam.jpg" alt="gambar pemadam" class="foto_dokumentasi"></td>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td class = "tampilantabel">13-3-2023</td>
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
<?= $this->endSection(); ?>