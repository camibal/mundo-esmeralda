<?php require_once('header.php'); ?>
<!-- header -->
<section class="content-header">
    <div class="content-header-left">
        <h1>Ajustes de la pagina</h1>
    </div>
</section>

<!----------  ---------->
<!---------- GET ---------->
<!----------  ---------->

<!-- logo -->
<?php

$statement = $pdo->prepare("SELECT * FROM tbl_logo WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
    $logo = $row['logo'];
}

//Change Logo
if (isset($_POST['form1'])) {
    $valid = 1;

    $path = $_FILES['photo_logo']['name'];
    $path_tmp = $_FILES['photo_logo']['tmp_name'];

    if ($path == '') {
        $valid = 0;
        $error_message .= 'Debes tener que seleccionar una foto<br>';
    } else {
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        $file_name = basename($path, '.' . $ext);
        if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg' && $ext != 'gif') {
            $valid = 0;
            $error_message .= 'Debes subir un archivo jpg, jpeg, gif o png.<br>';
        }
    }

    if ($valid == 1) {
        // removing the existing photo
        $statement = $pdo->prepare("SELECT * FROM tbl_logo WHERE id=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
            $logo = $row['logo'];
            unlink('./img/' . $logo);
        }

        // updating the data
        $final_name = 'logo' . '.' . $ext;
        move_uploaded_file($path_tmp, './img/' . $final_name);

        // updating the database
        $statement = $pdo->prepare("UPDATE tbl_logo SET logo=? WHERE id=1");
        $statement->execute(array($final_name));

        $success_message = 'El logotipo se actualizó correctamente.';
    }
}
?>

<!-- favicon -->
<?php
$statement = $pdo->prepare("SELECT * FROM tbl_favicon WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
    $favicon = $row['favicon'];
}

if (isset($_POST['form2'])) {
    $valid = 1;

    $path = $_FILES['photo_favicon']['name'];
    $path_tmp = $_FILES['photo_favicon']['tmp_name'];

    if ($path == '') {
        $valid = 0;
        $error_message .= 'You must have to select a photo<br>';
    } else {
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        $file_name = basename($path, '.' . $ext);
        if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg' && $ext != 'gif') {
            $valid = 0;
            $error_message .= 'You must have to upload jpg, jpeg, gif or png file<br>';
        }
    }

    if ($valid == 1) {
        // removing the existing photo
        $statement = $pdo->prepare("SELECT * FROM tbl_favicon WHERE id=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
            $favicon = $row['favicon'];
            unlink('./img/' . $favicon);
        }

        // updating the data
        $final_name = 'favicon' . '.' . $ext;
        move_uploaded_file($path_tmp, './img/' . $final_name);

        // updating the database
        $statement = $pdo->prepare("UPDATE tbl_favicon SET favicon=? WHERE id=1");
        $statement->execute(array($final_name));

        $success_message = 'Favicon is updated successfully.';
    }
}
?>

<!-- footer -->
<?php
$statement = $pdo->prepare("SELECT * FROM tbl_footer WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
    $privacy_policies = $row['privacy_policies'];
    $contact = $row['contact'];
    $phone = $row['phone'];
    $email = $row['email'];
}

if (isset($_POST['form3'])) {

    $valid = 1;

    if (empty($_POST['privacy_policies'])) {
        $valid = 0;
        $error_message .= 'El campo politicas debe estar lleno<br>';
    }

    if (empty($_POST['contact'])) {
        $valid = 0;
        $error_message .= 'El campo contact debe estar lleno<br>';
    }

    if (empty($_POST['phone'])) {
        $valid = 0;
        $error_message .= 'El campo telefono debe estar lleno<br>';
    }

    if (empty($_POST['email'])) {
        $valid = 0;
        $error_message .= 'El campo email debe estar lleno<br>';
    }

    if ($valid == 1) {

        // updating the database
        $statement = $pdo->prepare("UPDATE tbl_footer SET privacy_policies = ?, contact = ?, phone = ?, email = ? WHERE id=1");
        $statement->execute(array($_POST['privacy_policies'], $_POST['contact'], $_POST['phone'], $_POST['email']));

        $success_message = 'El pie de pagina a sido actualizado satisfactoriamente';
        // header("Location: settings.php");
    }
}
?>

<!-- blog -->
<?php
$statement = $pdo->prepare("SELECT * FROM tbl_blog WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
    $title = $row['title'];
    $body = $row['body'];
}


if (isset($_POST['form4'])) {

    $valid = 1;

    if (empty($_POST['title'])) {
        $valid = 0;
        $error_message .= 'El campo titulo debe estar lleno<br>';
    }

    if (empty($_POST['body'])) {
        $valid = 0;
        $error_message .= 'El campo cuerpo debe estar lleno<br>';
    }

    if ($valid == 1) {

        // updating the database
        $statement = $pdo->prepare("UPDATE tbl_blog SET title = ?, body = ? WHERE id=1");
        $statement->execute(array($_POST['title'], $_POST['body']));


        header("Location: index.php");
        $success_message = 'El blog a sido actualizado satisfactoriamente';
    }
}

?>

<!-- section message -->

<section class="content" style="min-height:auto;margin-bottom: -30px;">
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
        </div>
    </div>
</section>

<!-- body -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class=""><a href="#tab_1" data-toggle="tab">Logo</a></li>
                    <li><a href="#tab_2" data-toggle="tab">Favicon</a></li>
                    <li><a href="#tab_3" data-toggle="tab">Pie de pagina y Contacto</a></li>
                    <li><a href="#tab_4" data-toggle="tab">Blog</a></li>
                    <li><a href="#tab_5" data-toggle="tab">Hemeroteca</a></li>
                    <!--<li><a href="#tab_11" data-toggle="tab">Ads</a></li>-->
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Foto existente</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="./img/<?php echo $logo; ?>" class="existing-photo" style="height:80px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Nueva foto</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="photo_logo">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form1">Actualizar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="tab_2">

                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Foto existente</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="./img/<?php echo $favicon; ?>" class="existing-photo" style="height:40px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Nueva foto</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="photo_favicon">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form2">Actualizar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>
                    <div class="tab-pane" id="tab_3">

                        <form class="form-horizontal" action="" method="post">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Politicas de privacidad </label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="privacy_policies" value="<?php echo $privacy_policies; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Contácto</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="contact" value="<?php echo $contact; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Teléfono</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Correo </label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="email" style="height:200px;"><?php echo $email; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form3">Actualizar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>
                    <div class="tab-pane" id="tab_4">
                        <form class="form-horizontal" action="" method="post">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Titulo </label>
                                        <div class="col-sm-5">
                                            <input type="text" name="title" class="form-control" value="<?php echo $title; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Cuerpo </label>
                                        <div class="col-sm-5">
                                            <textarea name="body" class="form-control" cols="30" rows="10"><?php echo $body; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form4">Actualizar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="tab_5">
                        <section class="content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="box box-info">
                                        <div class="content-header-right">
                                            <a href="add-hemeroteca.php" class="btn btn-primary btn-sm">Añadir video</a>
                                        </div>
                                        <div class="box-body table-responsive">
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th width="30">SL</th>
                                                        <th>Imagen miniatura</th>
                                                        <th width="200">Nombre del video</th>
                                                        <th width="60">Duración del video</th>
                                                        <th width="60">Acción</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $i = 0;
                                                    $statement = $pdo->prepare("SELECT *
							                           	FROM tbl_hemeroteca");
                                                    $statement->execute();
                                                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                                                    foreach ($result as $row) {
                                                        $i++;
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $i; ?></td>
                                                            <td style="width:130px;"><img src="./img/hemeroteca/<?php echo $row['img']; ?>" alt="" style="width:100px; height: 56px;"></td>
                                                            <td><?php echo $row['name']; ?></td>
                                                            <td><?php echo $row['hour']; ?>:<?php echo $row['min']; ?>:<?php echo $row['second']; ?></td>
                                                            <td>
                                                                <a href="edit-hemeroteca.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-xs">Editar</a>
                                                                <a href="#" class="btn btn-danger btn-xs" data-href="delete-hemeroteca.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete">Eliminar
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>


                        <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">Confirmación</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>¿Está seguro de que desea eliminar este video?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                        <a class="btn btn-danger btn-ok">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</section>

<?php require_once('footer.php'); ?>