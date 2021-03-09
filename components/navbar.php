<?php
ob_start();
include("admin/inc/config.php");
include("admin/inc/functions.php");

$statement = $pdo->prepare("SELECT * FROM tbl_logo WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
    $logo = $row['logo'];
}
?>
<!-- NAVBAR -->
<nav class="navbar navbar-light bg-white" style="border-bottom: 2px solid #99999920;">
    <a class="navbar-brand text-decoration-none img-navbar" href="#">
        <img src="admin/img/<?php echo $logo ?>" width="70px" class="d-inline-block align-top" alt="">
    </a>
    <button class="navbar-toggler m-0 green-medium" style="border: none;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon green-medium"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
    </div>
</nav>