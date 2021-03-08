<!-- imagen hemeroteca -->
<?php
require_once('header.php');

$statement = $pdo->prepare("SELECT * FROM tbl_hemeroteca WHERE id=?");
$statement->execute(array($_REQUEST['id']));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
    $img = $row['img'];
    unlink('../img/' . $img);
}

$statement = $pdo->prepare("DELETE FROM tbl_hemeroteca WHERE id=?");
$statement->execute(array($_REQUEST['id']));

header('location: index.php');
?>