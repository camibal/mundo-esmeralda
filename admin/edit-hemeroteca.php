<?php require_once('header.php'); ?>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_hemeroteca WHERE id=?");
$statement->execute(array($_REQUEST['id']));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
    $name = $row['name'];
    $img = $row['img'];
    $hour = $row['hour'];
    $min = $row['min'];
    $second = $row['second'];
    $url = $row['url'];
}
?>

<?php
if (isset($_POST['form1'])) {
    $valid = 1;

    if (empty($_POST['name'])) {
        $valid = 0;
        $error_message .= "El campo nombre debe estar lleno<br>";
    }

    if (empty($_POST['hour'])) {
        $valid = 0;
        $error_message .= "El campo horas del video debe estar lleno<br>";
    }
    if (empty($_POST['min'])) {
        $valid = 0;
        $error_message .= "El campo minutos del video debe estar lleno<br>";
    }

    if (empty($_POST['second'])) {
        $valid = 0;
        $error_message .= "El campo segundos del video debe estar lleno<br>";
    }

    if (empty($_POST['url'])) {
        $valid = 0;
        $error_message .= "El campo url de youtube del video debe estar lleno<br>";
    }

    $path = $_FILES['img']['name'];
    $path_tmp = $_FILES['img']['tmp_name'];

    if ($path != '') {
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        $file_name = basename($path, '.' . $ext);
        if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg' && $ext != 'gif') {
            $valid = 0;
            $error_message .= 'Debes subir un archivo jpg, jpeg, gif o png.<br>';
        }
    }


    if ($valid == 1) {

        if (isset($_FILES['photo']["name"]) && isset($_FILES['photo']["tmp_name"])) {

            $photo = array();
            $photo = $_FILES['photo']["name"];
            $photo = array_values(array_filter($photo));

            $photo_temp = array();
            $photo_temp = $_FILES['photo']["tmp_name"];
            $photo_temp = array_values(array_filter($photo_temp));

            $statement = $pdo->prepare("SHOW TABLE STATUS LIKE 'tbl_hemeroteca'");
            $statement->execute();
            $result = $statement->fetchAll();
            foreach ($result as $row) {
                $next_id1 = $row[10];
            }
            $z = $next_id1;

            $m = 0;
            for ($i = 0; $i < count($photo); $i++) {
                $my_ext1 = pathinfo($photo[$i], PATHINFO_EXTENSION);
                if ($my_ext1 == 'jpg' || $my_ext1 == 'png' || $my_ext1 == 'jpeg' || $my_ext1 == 'gif') {
                    $final_name1[$m] = $z . '.' . $my_ext1;
                    move_uploaded_file($photo_temp[$i], "./img/hemeroteca/" . $final_name1[$m]);
                    $m++;
                    $z++;
                }
            }
        }

        if ($path == '') {

            $statement = $pdo->prepare("UPDATE tbl_hemeroteca SET name=?,hour=?,min=?,second=?,url=? WHERE id=?");
            $statement->execute(array(
                $_POST['name'],
                $_POST['hour'],
                $_POST['min'],
                $_POST['second'],
                $_POST['url'],
                $_REQUEST['id']
            ));
        } else {
            unlink('./img/hemeroteca/' . $_POST['img']);

            $final_name = 'img-miniatura-' . $_REQUEST['id'] . '.' . $ext;
            move_uploaded_file($path_tmp, './img/hemeroteca/' . $final_name);

            $statement = $pdo->prepare("UPDATE tbl_hemeroteca SET name=?,img=?,hour=?,min=?,second=?,url=? WHERE id=?");
            $statement->execute(array(
                $_POST['name'],
                $final_name,
                $_POST['hour'],
                $_POST['min'],
                $_POST['second'],
                $_POST['url'],
                $_REQUEST['id']
            ));
        }

        $success_message = 'Video actualizado exitosamente';
    }
}
?>

<section class="content">

    <div class="row">
        <div class="col-md-12">

            <?php if ($error_message) : ?>
                <div class="callout callout-danger">

                    <p>
                        <?php echo $error_message; ?>
                    </p>
                </div>
            <?php endif; ?>

            <?php if ($success_message) : ?>
                <div class="callout callout-success">

                    <p><?php echo $success_message; ?></p>
                </div>
            <?php endif; ?>

            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                <div class="box box-info">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Nombre <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">imagen existente</label>
                            <div class="col-sm-4" style="padding-top:4px;">
                                <img src="./img/hemeroteca/<?php echo $img; ?>" alt="" style="width:150px;">
                                <input type="hidden" name="img" value="<?php echo $img; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Imagen miniatura</label>
                            <div class="col-sm-4" style="padding-top:4px;">
                                <input type="file" name="img">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Horas <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="number" name="hour" class="form-control" value="<?php echo $hour; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Minutos <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="number" name="min" class="form-control" value="<?php echo $min; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Segundos <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="number" name="second" class="form-control" value="<?php echo $second; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Url de youtube <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="text" name="url" class="form-control" value="<?php echo $url; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success pull-left" name="form1">Actualizar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>