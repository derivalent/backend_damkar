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
    <link href="<?= base_url('css/styles.css'); ?>" rel="stylesheet" /> 
    <!-- <link href="css/styles.css" rel="stylesheet" /> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
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
            <div class="mb-0 my-5">
            <?= $this->include('adminside/layout/footer') ?>
            </div>
        </div>

        

    
    </div>

    
    
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script src="<?= base_url(''); ?>js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url(''); ?>js/chart-area-demo.js"></script>
    <script src="<?= base_url(''); ?>js/chart-bar-demo.js"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> -->
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script> -->
</body>

</html>