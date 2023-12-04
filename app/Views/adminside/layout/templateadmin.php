<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="https://i.postimg.cc/1zzb34Jq/LOGO-DAMKAR.png">
    <title>Damkarmat Banyuwangi</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <!-- <link href="css/styles.css" rel="stylesheet" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- <style>
.table,
.th,
.td {
  border: 1px solid rgb(200, 200, 200);
  border-collapse: collapse;
}

.th {
  text-align: center;
}
    </style> -->
</head>
<body class="sb-nav-fixed">

<?= $this->include('adminside/layout/navbar') ?>

<!-- Bagian Sidebar -->
    <div id="layoutSidenav">

        <?= $this->include('adminside/layout/sidebar') ?>

        <div id="layoutSidenav_content">

            <?= $this->renderSection('content') ?>

            <?= $this->include('adminside/layout/footer') ?>

        </div>

        

    
    </div>

    
    
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="js/chart-area-demo.js"></script>
    <script src="js/chart-bar-demo.js"></script>
</body>

</html>