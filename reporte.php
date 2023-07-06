<?php
include_once 'config/Database.php';
include_once 'class/User.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);

if (!$user->loggedIn()) {
    header("Location: index.php");
}
include('inc/header4.php');
?>
<title>Reporte</title>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" />
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css" />
</head>

<body>
    <div class="container-fluid">
        <?php include('top_menus.php'); ?>
        <div class="row row-offcanvas row-offcanvas-left">
            <?php include('left_menus.php'); ?>
            <div class="col-md-9 col-lg-10 main">
                <h2>Gestiones Sesión</h2>
                <table id="userListing" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Entrada</th>
                            <th>Salida</th>
                            <th>Tiempo</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <?php
    include("./footer.php");
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script src="js/reporte.js"></script>
</body>

</html>
