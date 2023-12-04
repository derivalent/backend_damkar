<?= $this->extend('adminside/layout/templateadmin'); ?>

<?= $this->section('content'); ?>
<link href="css/styles.css" rel="stylesheet" />
            <main>
                <div class="container-fluid px-4">
                    <h3 class="mt-4"><b>DASHBOARD ADMIN</b></h3>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-area me-1"></i>
                                    Area Chart Example
                                </div>
                                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-bar me-1"></i>
                                    Bar Chart Example
                                </div>
                                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="col-sm-12">
                            <div class="card-header">
                                <div>
                                    <i class="fa-solid fa-list-check"></i>
                                    Laporan Masuk
                                </div>
                            </div>
                        </div>
                        <div class="card-body overflow-auto rounded-lg">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <th>Alamat Pelapor</th>
                                        <th>Foto Kartu Identitas</th>
                                        <th>Foto Kejadian</th>
                                        <th>Jenis Kejadian</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td style="text-align: center;">61</td>
                                        <td style="text-align: center;">20/04/2323</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>

                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>

                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>

                                    </tr>
                                    <tr>
                                        <td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>

                                    </tr>
                                    <tr>
                                        <td>Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>

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
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fa-solid fa-comment-dots"></i>
                                    Komentar
                                </div>
                                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
<?= $this->endSection(); ?>