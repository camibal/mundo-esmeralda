<?php
require_once('header.php');

if (isset($_POST['form1'])) {
    $valid = 1;

    if (empty($_POST['name'])) {
        $valid = 0;
        $error_message .= "El campo  nombre debe estar lleno<br>";
    }
    if (empty($_POST['hour'])) {
        $valid = 0;
        $error_message .= "El campo hooras de duración del video debe estar lleno<br>";
    }
    if (empty($_POST['min'])) {
        $valid = 0;
        $error_message .= "El campo minutos de duración del video debe estar lleno<br>";
    }
    if (empty($_POST['second'])) {
        $valid = 0;
        $error_message .= "El campo segundos de duración del video debe estar lleno<br>";
    }
    if (empty($_POST['url'])) {
        $valid = 0;
        $error_message .= "El campo url de you tube del video debe estar lleno<br>";
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
    } else {
        $valid = 0;
        $error_message .= 'Debes tener que seleccionar una foto destacada<br>';
    }

    if ($valid == 1) {

        $statement = $pdo->prepare("SHOW TABLE STATUS LIKE 'tbl_hemeroteca'");
        $statement->execute();
        $result = $statement->fetchAll();
        foreach ($result as $row) {
            $ai_id = $row[10];
        }

        if (isset($_FILES['photo']["name"]) && isset($_FILES['photo']["tmp_name"])) {
            $photo = array();
            $photo = $_FILES['photo']["name"];
            $photo = array_values(array_filter($photo));

            $photo_temp = array();
            $photo_temp = $_FILES['photo']["tmp_name"];
            $photo_temp = array_values(array_filter($photo_temp));

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

        $final_name = 'img-miniatura-' . $ai_id . '.' . $ext;
        move_uploaded_file($path_tmp, './img/hemeroteca/' . $final_name);

        $statement = $pdo->prepare("INSERT INTO tbl_hemeroteca(name,img,hour,min,second,url) VALUES (?,?,?,?,?,?)");
        $statement->execute(array(
            $_POST['name'],
            $final_name,
            $_POST['hour'],
            $_POST['min'],
            $_POST['second'],
            $_POST['url']
        ));

        $success_message = 'Video almacenado exitosamente';
    }
}

?>

<section class="content-header">
    <div class="content-header-left">
        <h1>Agregar video</h1>
    </div>
    <div class="content-header-right">
        <a href="index.php#tab_4" class="btn btn-primary btn-sm">Ver todo</a>
    </div>
</section>
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
                            <label for="" class="col-sm-3 control-label">Nombre video <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Imagen miniatura del video <span>*</span></label>
                            <div class="col-sm-4" style="padding-top:4px;">
                                <input type="file" name="img">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Horas de duración <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="number" name="hour" maxlength="2" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Minutos de duración <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="number" name="min" maxlength="2" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Segundos de duración <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="number" name="second" maxlength="2" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Url de you tube <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="text" name="url" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-3 control-label"></label>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success pull-left" name="form1">Agregar</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</section>