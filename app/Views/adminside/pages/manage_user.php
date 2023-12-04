<?= $this->extend('adminside/layout/templateadmin'); ?>

<?= $this->section('content'); ?>
<link href="css/styles.css" rel="stylesheet" />
            <main>
                <div class="container-fluid px-4">
                    <h3 class="mt-4"> <b>MANAGEMENT USER</b></h3>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/indexadmin">Dashboard</a></li>
                        <li class="breadcrumb-item active">Pages</li>
                        <li class="breadcrumb-item active">Management User</li>
                    </ol>
                    
                    <div class="card mb-4" style="display: inline-block;box-shadow: 0 0 8px rgba(216, 216, 216, 0.8);">
                        <div class="col-sm-12">
                            <div class="card-header" style="padding-bottom: 20px;">
                                <div style="padding-top: 15px;">
                                    <i class="fa-regular fa-newspaper" style="color: #000000;"></i> &nbsp;
                                    
                                    <div style="float: right;margin-top: -3px;">
                                        <a class="btn btn-success btn-sm"><i class="fa fa-plus"></i> &nbsp;Tambah</a>
                                    </div>
                                    <div style="float: right;margin-top: -3px;margin-right: 30px;">
                                        <!-- <input class="form-control" type="text" placeholder="cari" aria-label="cari"
                                        aria-describedby="btnNavbarSearch" />
                                        <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                                        class="fas fa-search"></i></button> -->
                                        <button class="btn btn-primary btn-sm"><i class="fas fa-search"></i></button>
                                    </div>
                                    <b>MANAGEMENT USER</b>
                                </div>
                            </div>
                        </div>
                        <div class="card-body overflow-auto rounded-lg" >
                            <table class="table table-striped">
                                <thead class="table-primary">
                                    <tr>
                                        <th width="20">No</th>
                                        <th width="300">Nama</th>
                                        <th width="300">Email</th>
                                        <th width="300">Jabatan</th>
                                        <th width="200">No. Telepon</th>
                                        <!-- <th width="300">Keterangan Tambahan</th> -->
                                        <th width="150">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="text-align: center;">1</td>
                                        <td>Tiger Nixon</td>
                                        <td>tiger123@gmail.com</td>
                                        <td class = "tampilantabel">CEO</td>
                                        <td class = "tampilantabel">08587564991</td>
                                        <!-- <td style="text-align: center;">20/04/2323</td> -->
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
                                        <td class = "tampilantabel">Tokyo</td>
                                        <td class = "tampilantabel">63</td>
                                        <!-- <td style="text-align: center;">2011/07/25</td> -->
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