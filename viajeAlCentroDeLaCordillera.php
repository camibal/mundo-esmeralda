<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="">
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/viajeAlCentroDeLaCordillera.css">
    <link href="https://fonts.googleapis.com/css2?family=Tomorrow:wght@300&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <?php
    include "./components/navbar.php";
    ?>
    <div class="container pb-5 mb-5">
        <!-- section1 -->
        <div class="row section-1">
            <div class="col-md-6 border-bottom">
                <h1 class="mt-5 green-dark font-weight-bold d-none d-md-block">Viajando al centro<br>de la cordillera</h1>
                <h4 class="mt-5 green-dark font-weight-bold d-md-none py-2">Viajando al centro de la cordillera</h4>
                <p class="d-block green-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores voluptate ipsa dolorum delectus accusantium nam sed officiis, quo error soluta qui, mollitia facilis totam doloremque iusto reprehenderit?

                </p>
                <p class="d-block green-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores voluptate ipsa dolorum delectus accusantium nam sed officiis, quo error soluta qui, mollitia facilis totam doloremque iusto reprehenderit, asperiores eius voluptatemre prehenderit, asperiores eius voluptatem reprehenderit, asperiores eius voluptatem?

                </p>
                <button class="btn btn-section1 font-weight-bold">BOLD 15PX</button>
                <button class="btn btn-section2 font-weight-bold ml-2 green-medium">HOVER</button>
            </div>
            <div class="col-md-6">
                <img src="../Daniela Luque, Maripí, 2020.JPG" width="100%" style="height: 52vh" class="mt-3 mt-md-0" alt="">
            </div>
        </div>
        <!-- section2 -->
        <div class="row section-2 mt-5">
            <div class="col-md-6">
                <h2 class="green-dark font-weight-bold px-lg-3 d-none d-md-block">Provincia occidente de Boyacá</h2>
                <h5 class="mt-5 green-dark font-weight-bold d-md-none py-2">Provincia occidente de Boyacá</h5>
                <div class="mapa_imagen">
                    <img src="../PROVINCIA DE OCCIDENTE.png" width="100%" />

                    <ul class="notas">
                        <li id="nota1" class="tablinks2" onclick="openInf(event, 'collapse1')">
                            <p> <img src="../PROVINCIA DE OCCIDENTE.png" width="100%" /></p>
                        </li>
                        <li id="nota2" class="tablinks2" onclick="openInf(event, 'collapse2')">
                            <p> <img src="../PROVINCIA DE OCCIDENTE.png" width="100%" /></p>
                        </li>
                        <li id="nota3" class="tablinks2" onclick="openInf(event, 'collapse3')">
                            <p> <img src="../PROVINCIA DE OCCIDENTE.png" width="100%" /></p>
                        </li>
                        <li id="nota4" class="tablinks2" onclick="openInf(event, 'collapse4')">
                            <p> <img src="../PROVINCIA DE OCCIDENTE.png" width="100%" /></p>
                        </li>
                        <li id="nota5" class="tablinks2" onclick="openInf(event, 'collapse5')">
                            <p> <img src="../PROVINCIA DE OCCIDENTE.png" width="100%" /></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <div class="card w-75">
                    <!-- collapse 1 -->
                    <div class="card-body tabcontent2" id="collapse1">
                        <h5 class="card-title green-dark font-weight-bold">Primer corredor vial</h5>
                        <h6 class="card-subtitle mb-2 border-bottom py-3 green-dark font-weight-bold">Información</h6>
                        <p class="card-text green-dark">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate optio excepturi soluta modi inventore nulla, voluptatum fuga<br><br>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis blanditiis odit sapiente consequatur labore ducimus repudiandae nostrum sunt dicta, eveniet iusto dolores ipsam saepe voluptatem, eos hic nesciunt architecto unde?
                        </p>
                    </div>
                    <!-- collapse 2 -->
                    <div class="card-body tabcontent2" id="collapse2">
                        <h5 class="card-title green-dark font-weight-bold">Primer corredor vial2</h5>
                        <h6 class="card-subtitle mb-2 border-bottom py-3 green-dark font-weight-bold">Información</h6>
                        <p class="card-text green-dark">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate optio excepturi soluta modi inventore nulla, voluptatum fuga<br><br>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis blanditiis odit sapiente consequatur labore ducimus repudiandae nostrum sunt dicta, eveniet iusto dolores ipsam saepe voluptatem, eos hic nesciunt architecto unde?
                        </p>
                    </div>
                    <!-- collapse 3 -->
                    <div class="card-body tabcontent2" id="collapse3">
                        <h5 class="card-title green-dark font-weight-bold">Primer corredor vial3</h5>
                        <h6 class="card-subtitle mb-2 border-bottom py-3 green-dark font-weight-bold">Información</h6>
                        <p class="card-text green-dark">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate optio excepturi soluta modi inventore nulla, voluptatum fuga<br><br>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis blanditiis odit sapiente consequatur labore ducimus repudiandae nostrum sunt dicta, eveniet iusto dolores ipsam saepe voluptatem, eos hic nesciunt architecto unde?
                        </p>
                    </div>
                    <!-- collapse 4 -->
                    <div class="card-body tabcontent2" id="collapse4">
                        <h5 class="card-title green-dark font-weight-bold">Primer corredor vial4</h5>
                        <h6 class="card-subtitle mb-2 border-bottom py-3 green-dark font-weight-bold">Información</h6>
                        <p class="card-text green-dark">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate optio excepturi soluta modi inventore nulla, voluptatum fuga<br><br>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis blanditiis odit sapiente consequatur labore ducimus repudiandae nostrum sunt dicta, eveniet iusto dolores ipsam saepe voluptatem, eos hic nesciunt architecto unde?
                        </p>
                    </div>
                    <!-- collapse 5 -->
                    <div class="card-body tabcontent2" id="collapse5">
                        <h5 class="card-title green-dark font-weight-bold">Primer corredor vial5</h5>
                        <h6 class="card-subtitle mb-2 border-bottom py-3 green-dark font-weight-bold">Información</h6>
                        <p class="card-text green-dark">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate optio excepturi soluta modi inventore nulla, voluptatum fuga<br><br>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis blanditiis odit sapiente consequatur labore ducimus repudiandae nostrum sunt dicta, eveniet iusto dolores ipsam saepe voluptatem, eos hic nesciunt architecto unde?
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-----------  ----------->
        <!----------- MENU ACORDEON TABLETS DESKTOP ----------->
        <!-----------  ----------->
        <!-- section3 -->
        <div class="row section-2 mt-5 d-none d-lg-block mb-4">
            <h2 class="green-dark font-weight-bold px-lg-3 d-none d-md-block">Lugares de interés</h2>
            <h5 class="mt-5 green-dark font-weight-bold d-md-none py-2">Lugares de interés</h5>
            <div class="col-12">
                <div class="tab">
                    <button class="tablinks green-dark font-weight-bold" onclick="openCity(event, 'option1')" id="defaultOpen">PNR Serrania de Quinchas <img src="" alt=""></button>
                    <button class="tablinks green-dark font-weight-bold" onclick="openCity(event, 'option2')">Cerros de Fura y Tena</button>
                    <button class="tablinks green-dark font-weight-bold" onclick="openCity(event, 'option3')">Cerros de la Chapa</button>
                    <button class="tablinks green-dark font-weight-bold" onclick="openCity(event, 'option4')">Caverna las Cacas</button>
                    <button class="tablinks green-dark font-weight-bold" onclick="openCity(event, 'option5')">Balneario La Fortaleza</button>
                    <button class="tablinks green-dark font-weight-bold" onclick="openCity(event, 'option6')">Minas de Muzo</button>
                    <button class="tablinks green-dark font-weight-bold" onclick="openCity(event, 'option7')">Museo Internacional de la Esmeralda</button>
                </div>
                <!-- 1 -->
                <div id="option1" class="tabcontent mb-5">
                    <h5 class="card-title py-3 px-1 green-dark font-weight-bold">PNR Serrania de Quinchas</h5>
                    <div class="card w-100">
                        <div class="card-body">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="" width="24%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="" width="24%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card w-100 mt-3">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-title green-dark font-weight-bold">Información</h5>
                                    <p class="card-text green-dark">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia reprehenderit eius voluptatem error quas deleniti? Maiores, amet aliquam. Cupiditate veniam nisi veritatis expedita enim adipisci, possimus ex atque optio voluptatem! ex atque optio voluptatem! ex atque optio voluptatem!<br><br>
                                        Praesentium maiores ipsa dignissimos nostrum quas veritatis iusto in sapiente. Quis minus corporis illo praesentium sapiente molestiae ipsam expedita at possimus minima fuga ipsa, quo voluptatum voluptatibus id aperiam exercitationem.
                                        Aspernatur maxime incidunt dolore explicabo laboriosam, corporis sapiente sequi. Maxime corporis reiciendis rem tempora quam quasi aliquam culpa eum corrupti blanditiis, sequi illum pariatur?
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="card-title green-dark font-weight-bold">¿Cómo llegar?</h5>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d107014.05331022815!2d-74.1006714486345!3d4.605919633255054!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9bfd2da6cb29%3A0x239d635520a33914!2zQm9nb3TDoQ!5e0!3m2!1ses!2sco!4v1615228295686!5m2!1ses!2sco" width="100%" height="200px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 2 -->
                <div id="option2" class="tabcontent mb-5">
                    <h5 class="card-title py-3 px-1 green-dark font-weight-bold">Cerros de Fura y Tena</h5>
                    <div class="card w-100">
                        <div class="card-body">
                            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="" width="24%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="" width="24%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card w-100 mt-3">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-title green-dark font-weight-bold">Información</h5>
                                    <p class="card-text green-dark">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia reprehenderit eius voluptatem error quas deleniti? Maiores, amet aliquam. Cupiditate veniam nisi veritatis expedita enim adipisci, possimus ex atque optio voluptatem! ex atque optio voluptatem! ex atque optio voluptatem!<br><br>
                                        Praesentium maiores ipsa dignissimos nostrum quas veritatis iusto in sapiente. Quis minus corporis illo praesentium sapiente molestiae ipsam expedita at possimus minima fuga ipsa, quo voluptatum voluptatibus id aperiam exercitationem.
                                        Aspernatur maxime incidunt dolore explicabo laboriosam, corporis sapiente sequi. Maxime corporis reiciendis rem tempora quam quasi aliquam culpa eum corrupti blanditiis, sequi illum pariatur?
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="card-title green-dark font-weight-bold">¿Cómo llegar?</h5>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d107014.05331022815!2d-74.1006714486345!3d4.605919633255054!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9bfd2da6cb29%3A0x239d635520a33914!2zQm9nb3TDoQ!5e0!3m2!1ses!2sco!4v1615228295686!5m2!1ses!2sco" width="100%" height="200px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 3 -->
                <div id="option3" class="tabcontent mb-5">
                    <h5 class="card-title py-3 px-1 green-dark font-weight-bold">Cerros de la Chapa</h5>
                    <div class="card w-100">
                        <div class="card-body">
                            <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="" width="24%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="" width="24%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card w-100 mt-3">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-title green-dark font-weight-bold">Información</h5>
                                    <p class="card-text green-dark">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia reprehenderit eius voluptatem error quas deleniti? Maiores, amet aliquam. Cupiditate veniam nisi veritatis expedita enim adipisci, possimus ex atque optio voluptatem! ex atque optio voluptatem! ex atque optio voluptatem!<br><br>
                                        Praesentium maiores ipsa dignissimos nostrum quas veritatis iusto in sapiente. Quis minus corporis illo praesentium sapiente molestiae ipsam expedita at possimus minima fuga ipsa, quo voluptatum voluptatibus id aperiam exercitationem.
                                        Aspernatur maxime incidunt dolore explicabo laboriosam, corporis sapiente sequi. Maxime corporis reiciendis rem tempora quam quasi aliquam culpa eum corrupti blanditiis, sequi illum pariatur?
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="card-title green-dark font-weight-bold">¿Cómo llegar?</h5>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d107014.05331022815!2d-74.1006714486345!3d4.605919633255054!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9bfd2da6cb29%3A0x239d635520a33914!2zQm9nb3TDoQ!5e0!3m2!1ses!2sco!4v1615228295686!5m2!1ses!2sco" width="100%" height="200px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 4 -->
                <div id="option4" class="tabcontent mb-5">
                    <h5 class="card-title py-3 px-1 green-dark font-weight-bold">Caverna las Cacas</h5>
                    <div class="card w-100">
                        <div class="card-body">
                            <div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators4" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators4" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators4" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="" width="24%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="" width="24%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators4" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators4" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card w-100 mt-3">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-title green-dark font-weight-bold">Información</h5>
                                    <p class="card-text green-dark">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia reprehenderit eius voluptatem error quas deleniti? Maiores, amet aliquam. Cupiditate veniam nisi veritatis expedita enim adipisci, possimus ex atque optio voluptatem! ex atque optio voluptatem! ex atque optio voluptatem!<br><br>
                                        Praesentium maiores ipsa dignissimos nostrum quas veritatis iusto in sapiente. Quis minus corporis illo praesentium sapiente molestiae ipsam expedita at possimus minima fuga ipsa, quo voluptatum voluptatibus id aperiam exercitationem.
                                        Aspernatur maxime incidunt dolore explicabo laboriosam, corporis sapiente sequi. Maxime corporis reiciendis rem tempora quam quasi aliquam culpa eum corrupti blanditiis, sequi illum pariatur?
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="card-title green-dark font-weight-bold">¿Cómo llegar?</h5>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d107014.05331022815!2d-74.1006714486345!3d4.605919633255054!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9bfd2da6cb29%3A0x239d635520a33914!2zQm9nb3TDoQ!5e0!3m2!1ses!2sco!4v1615228295686!5m2!1ses!2sco" width="100%" height="200px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 5 -->
                <div id="option5" class="tabcontent mb-5">
                    <h5 class="card-title py-3 px-1 green-dark font-weight-bold">Balneario La Fortaleza</h5>
                    <div class="card w-100">
                        <div class="card-body">
                            <div id="carouselExampleIndicators5" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators5" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators5" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators5" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="" width="24%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="" width="24%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators5" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators5" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card w-100 mt-3">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-title green-dark font-weight-bold">Información</h5>
                                    <p class="card-text green-dark">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia reprehenderit eius voluptatem error quas deleniti? Maiores, amet aliquam. Cupiditate veniam nisi veritatis expedita enim adipisci, possimus ex atque optio voluptatem! ex atque optio voluptatem! ex atque optio voluptatem!<br><br>
                                        Praesentium maiores ipsa dignissimos nostrum quas veritatis iusto in sapiente. Quis minus corporis illo praesentium sapiente molestiae ipsam expedita at possimus minima fuga ipsa, quo voluptatum voluptatibus id aperiam exercitationem.
                                        Aspernatur maxime incidunt dolore explicabo laboriosam, corporis sapiente sequi. Maxime corporis reiciendis rem tempora quam quasi aliquam culpa eum corrupti blanditiis, sequi illum pariatur?
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="card-title green-dark font-weight-bold">¿Cómo llegar?</h5>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d107014.05331022815!2d-74.1006714486345!3d4.605919633255054!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9bfd2da6cb29%3A0x239d635520a33914!2zQm9nb3TDoQ!5e0!3m2!1ses!2sco!4v1615228295686!5m2!1ses!2sco" width="100%" height="200px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 6 -->
                <div id="option6" class="tabcontent mb-5">
                    <h5 class="card-title py-3 px-1 green-dark font-weight-bold">Minas de Muzo</h5>
                    <div class="card w-100">
                        <div class="card-body">
                            <div id="carouselExampleIndicators6" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators6" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators6" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators6" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="" width="24%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="" width="24%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators6" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators6" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card w-100 mt-3">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-title green-dark font-weight-bold">Información</h5>
                                    <p class="card-text green-dark">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia reprehenderit eius voluptatem error quas deleniti? Maiores, amet aliquam. Cupiditate veniam nisi veritatis expedita enim adipisci, possimus ex atque optio voluptatem! ex atque optio voluptatem! ex atque optio voluptatem!<br><br>
                                        Praesentium maiores ipsa dignissimos nostrum quas veritatis iusto in sapiente. Quis minus corporis illo praesentium sapiente molestiae ipsam expedita at possimus minima fuga ipsa, quo voluptatum voluptatibus id aperiam exercitationem.
                                        Aspernatur maxime incidunt dolore explicabo laboriosam, corporis sapiente sequi. Maxime corporis reiciendis rem tempora quam quasi aliquam culpa eum corrupti blanditiis, sequi illum pariatur?
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="card-title green-dark font-weight-bold">¿Cómo llegar?</h5>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d107014.05331022815!2d-74.1006714486345!3d4.605919633255054!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9bfd2da6cb29%3A0x239d635520a33914!2zQm9nb3TDoQ!5e0!3m2!1ses!2sco!4v1615228295686!5m2!1ses!2sco" width="100%" height="200px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 7 -->
                <div id="option7" class="tabcontent mb-5">
                    <h5 class="card-title py-3 px-1 green-dark font-weight-bold">Museo Internacional de la Esmeralda</h5>
                    <div class="card w-100">
                        <div class="card-body">
                            <div id="carouselExampleIndicators7" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators7" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators7" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators7" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="" width="24%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="" width="24%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                        <img class="" width="24%" src="../Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                        <img class="" width="24%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators7" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators7" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card w-100 mt-3">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-title green-dark font-weight-bold">Información</h5>
                                    <p class="card-text green-dark">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia reprehenderit eius voluptatem error quas deleniti? Maiores, amet aliquam. Cupiditate veniam nisi veritatis expedita enim adipisci, possimus ex atque optio voluptatem! ex atque optio voluptatem! ex atque optio voluptatem!<br><br>
                                        Praesentium maiores ipsa dignissimos nostrum quas veritatis iusto in sapiente. Quis minus corporis illo praesentium sapiente molestiae ipsam expedita at possimus minima fuga ipsa, quo voluptatum voluptatibus id aperiam exercitationem.
                                        Aspernatur maxime incidunt dolore explicabo laboriosam, corporis sapiente sequi. Maxime corporis reiciendis rem tempora quam quasi aliquam culpa eum corrupti blanditiis, sequi illum pariatur?
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="card-title green-dark font-weight-bold">¿Cómo llegar?</h5>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d107014.05331022815!2d-74.1006714486345!3d4.605919633255054!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9bfd2da6cb29%3A0x239d635520a33914!2zQm9nb3TDoQ!5e0!3m2!1ses!2sco!4v1615228295686!5m2!1ses!2sco" width="100%" height="200px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-----------  ----------->
        <!----------- MENU ACORDEON RESPONSIVE ----------->
        <!-----------  ----------->
        <div class="section-2 mt-5 d-lg-none">
            <h2 class="green-dark font-weight-bold px-lg-3 d-none d-md-block">Lugares de interés</h2>
            <h5 class="mt-5 green-dark font-weight-bold d-md-none py-2">Lugares de interés</h5>
            <section id="how-to">
                <!-- Super Accordion -->
                <div class="panel-group" id="superaccordion">
                    <!-- Accordion 1 -->
                    <div class="panel">
                        <div class="panel-heading parent">
                            <a class="accordion-toggle green-dark font-weight-bold" data-toggle="collapse" data-parent="#superaccordion" href="#collapse1" aria-expanded="false">
                                PNR Serrania de Quinchas
                            </a>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="panel-group" id="accordion1">
                                    <div class="panel">
                                        <div class="panel-heading child">
                                            <h5 class="card-title p-3 px-1 green-dark font-weight-bold">PNR Serrania de Quinchas</h5>
                                            <div class="card w-100">
                                                <div class="card-body">
                                                    <div id="carouselExampleIndicators8" class="carousel slide" data-ride="carousel">
                                                        <ol class="carousel-indicators">
                                                            <li data-target="#carouselExampleIndicators8" data-slide-to="0" class="active"></li>
                                                            <li data-target="#carouselExampleIndicators8" data-slide-to="1"></li>
                                                            <li data-target="#carouselExampleIndicators8" data-slide-to="2"></li>
                                                        </ol>
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                                <img class="" width="49%" src="../Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                                                <img class="" width="49%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="" width="49%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                                                <img class="" width="49%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="" width="49%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                                                <img class="" width="49%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card w-100 mt-3">
                                                <div class="card-body">

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h5 class="card-title green-dark font-weight-bold">Información</h5>
                                                            <p class="card-text green-dark">
                                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia reprehenderit eius voluptatem error quas deleniti? Maiores, amet aliquam. Cupiditate veniam nisi veritatis expedita enim adipisci, possimus ex atque optio voluptatem! ex atque optio voluptatem! ex atque optio voluptatem!<br><br>
                                                                Praesentium maiores ipsa dignissimos nostrum quas veritatis iusto in sapiente. Quis minus corporis illo praesentium sapiente molestiae ipsam expedita at possimus minima fuga ipsa, quo voluptatum voluptatibus id aperiam exercitationem.
                                                                Aspernatur maxime incidunt dolore explicabo laboriosam, corporis sapiente sequi. Maxime corporis reiciendis rem tempora quam quasi aliquam culpa eum corrupti blanditiis, sequi illum pariatur?
                                                            </p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h5 class="card-title green-dark font-weight-bold py-3">¿Cómo llegar?</h5>
                                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d107014.05331022815!2d-74.1006714486345!3d4.605919633255054!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9bfd2da6cb29%3A0x239d635520a33914!2zQm9nb3TDoQ!5e0!3m2!1ses!2sco!4v1615228295686!5m2!1ses!2sco" width="100%" height="200px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion 2 -->
                    <div class="panel">
                        <div class="panel-heading parent">
                            <a class="accordion-toggle green-dark font-weight-bold" data-toggle="collapse" data-parent="#superaccordion" href="#collapse2" aria-expanded="false">
                                Cerros de Fura y Tena
                            </a>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="panel-group" id="accordion2">
                                    <div class="panel">
                                        <div class="panel-heading child">
                                            <h5 class="card-title p-3 px-1 green-dark font-weight-bold">Cerros de Fura y Tena</h5>
                                            <div class="card w-100">
                                                <div class="card-body">
                                                    <div id="carouselExampleIndicators9" class="carousel slide" data-ride="carousel">
                                                        <ol class="carousel-indicators">
                                                            <li data-target="#carouselExampleIndicators9" data-slide-to="0" class="active"></li>
                                                            <li data-target="#carouselExampleIndicators9" data-slide-to="1"></li>
                                                            <li data-target="#carouselExampleIndicators9" data-slide-to="2"></li>
                                                        </ol>
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                                <img class="" width="49%" src="../Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                                                <img class="" width="49%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="" width="49%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                                                <img class="" width="49%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="" width="49%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                                                <img class="" width="49%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card w-100 mt-3">
                                                <div class="card-body">

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h5 class="card-title green-dark font-weight-bold">Información</h5>
                                                            <p class="card-text green-dark">
                                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia reprehenderit eius voluptatem error quas deleniti? Maiores, amet aliquam. Cupiditate veniam nisi veritatis expedita enim adipisci, possimus ex atque optio voluptatem! ex atque optio voluptatem! ex atque optio voluptatem!<br><br>
                                                                Praesentium maiores ipsa dignissimos nostrum quas veritatis iusto in sapiente. Quis minus corporis illo praesentium sapiente molestiae ipsam expedita at possimus minima fuga ipsa, quo voluptatum voluptatibus id aperiam exercitationem.
                                                                Aspernatur maxime incidunt dolore explicabo laboriosam, corporis sapiente sequi. Maxime corporis reiciendis rem tempora quam quasi aliquam culpa eum corrupti blanditiis, sequi illum pariatur?
                                                            </p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h5 class="card-title green-dark font-weight-bold py-3">¿Cómo llegar?</h5>
                                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d107014.05331022815!2d-74.1006714486345!3d4.605919633255054!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9bfd2da6cb29%3A0x239d635520a33914!2zQm9nb3TDoQ!5e0!3m2!1ses!2sco!4v1615228295686!5m2!1ses!2sco" width="100%" height="200px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion 3 -->
                    <div class="panel">
                        <div class="panel-heading parent">
                            <a class="accordion-toggle green-dark font-weight-bold" data-toggle="collapse" data-parent="#superaccordion" href="#collapse3" aria-expanded="false">
                                Cerros de la Chapa
                            </a>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="panel-group" id="accordion2">
                                    <div class="panel">
                                        <div class="panel-heading child">
                                            <h5 class="card-title p-3 px-1 green-dark font-weight-bold">Cerros de la Chapa</h5>
                                            <div class="card w-100">
                                                <div class="card-body">
                                                    <div id="carouselExampleIndicators10" class="carousel slide" data-ride="carousel">
                                                        <ol class="carousel-indicators">
                                                            <li data-target="#carouselExampleIndicators10" data-slide-to="0" class="active"></li>
                                                            <li data-target="#carouselExampleIndicators10" data-slide-to="1"></li>
                                                            <li data-target="#carouselExampleIndicators10" data-slide-to="2"></li>
                                                        </ol>
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                                <img class="" width="49%" src="../Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                                                <img class="" width="49%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="" width="49%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                                                <img class="" width="49%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="" width="49%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                                                <img class="" width="49%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card w-100 mt-3">
                                                <div class="card-body">

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h5 class="card-title green-dark font-weight-bold">Información</h5>
                                                            <p class="card-text green-dark">
                                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia reprehenderit eius voluptatem error quas deleniti? Maiores, amet aliquam. Cupiditate veniam nisi veritatis expedita enim adipisci, possimus ex atque optio voluptatem! ex atque optio voluptatem! ex atque optio voluptatem!<br><br>
                                                                Praesentium maiores ipsa dignissimos nostrum quas veritatis iusto in sapiente. Quis minus corporis illo praesentium sapiente molestiae ipsam expedita at possimus minima fuga ipsa, quo voluptatum voluptatibus id aperiam exercitationem.
                                                                Aspernatur maxime incidunt dolore explicabo laboriosam, corporis sapiente sequi. Maxime corporis reiciendis rem tempora quam quasi aliquam culpa eum corrupti blanditiis, sequi illum pariatur?
                                                            </p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h5 class="card-title green-dark font-weight-bold py-3">¿Cómo llegar?</h5>
                                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d107014.05331022815!2d-74.1006714486345!3d4.605919633255054!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9bfd2da6cb29%3A0x239d635520a33914!2zQm9nb3TDoQ!5e0!3m2!1ses!2sco!4v1615228295686!5m2!1ses!2sco" width="100%" height="200px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion 4 -->
                    <div class="panel">
                        <div class="panel-heading parent">
                            <a class="accordion-toggle green-dark font-weight-bold" data-toggle="collapse" data-parent="#superaccordion" href="#collapse4" aria-expanded="false">
                                Caverna las Cacas
                            </a>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="panel-group" id="accordion2">
                                    <div class="panel">
                                        <div class="panel-heading child">
                                            <h5 class="card-title p-3 px-1 green-dark font-weight-bold">Caverna las Cacas</h5>
                                            <div class="card w-100">
                                                <div class="card-body">
                                                    <div id="carouselExampleIndicators11" class="carousel slide" data-ride="carousel">
                                                        <ol class="carousel-indicators">
                                                            <li data-target="#carouselExampleIndicators11" data-slide-to="0" class="active"></li>
                                                            <li data-target="#carouselExampleIndicators11" data-slide-to="1"></li>
                                                            <li data-target="#carouselExampleIndicators11" data-slide-to="2"></li>
                                                        </ol>
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                                <img class="" width="49%" src="../Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                                                <img class="" width="49%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="" width="49%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                                                <img class="" width="49%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="" width="49%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                                                <img class="" width="49%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card w-100 mt-3">
                                                <div class="card-body">

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h5 class="card-title green-dark font-weight-bold">Información</h5>
                                                            <p class="card-text green-dark">
                                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia reprehenderit eius voluptatem error quas deleniti? Maiores, amet aliquam. Cupiditate veniam nisi veritatis expedita enim adipisci, possimus ex atque optio voluptatem! ex atque optio voluptatem! ex atque optio voluptatem!<br><br>
                                                                Praesentium maiores ipsa dignissimos nostrum quas veritatis iusto in sapiente. Quis minus corporis illo praesentium sapiente molestiae ipsam expedita at possimus minima fuga ipsa, quo voluptatum voluptatibus id aperiam exercitationem.
                                                                Aspernatur maxime incidunt dolore explicabo laboriosam, corporis sapiente sequi. Maxime corporis reiciendis rem tempora quam quasi aliquam culpa eum corrupti blanditiis, sequi illum pariatur?
                                                            </p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h5 class="card-title green-dark font-weight-bold py-3">¿Cómo llegar?</h5>
                                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d107014.05331022815!2d-74.1006714486345!3d4.605919633255054!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9bfd2da6cb29%3A0x239d635520a33914!2zQm9nb3TDoQ!5e0!3m2!1ses!2sco!4v1615228295686!5m2!1ses!2sco" width="100%" height="200px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion 5 -->
                    <div class="panel">
                        <div class="panel-heading parent">
                            <a class="accordion-toggle green-dark font-weight-bold" data-toggle="collapse" data-parent="#superaccordion" href="#collapse5" aria-expanded="false">
                                Balneario la Fortaleza
                            </a>
                        </div>
                        <div id="collapse5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="panel-group" id="accordion2">
                                    <div class="panel">
                                        <div class="panel-heading child">
                                            <h5 class="card-title p-3 px-1 green-dark font-weight-bold">Balneario la Fortaleza</h5>
                                            <div class="card w-100">
                                                <div class="card-body">
                                                    <div id="carouselExampleIndicators12" class="carousel slide" data-ride="carousel">
                                                        <ol class="carousel-indicators">
                                                            <li data-target="#carouselExampleIndicators12" data-slide-to="0" class="active"></li>
                                                            <li data-target="#carouselExampleIndicators12" data-slide-to="1"></li>
                                                            <li data-target="#carouselExampleIndicators12" data-slide-to="2"></li>
                                                        </ol>
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                                <img class="" width="49%" src="../Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                                                <img class="" width="49%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="" width="49%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                                                <img class="" width="49%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="" width="49%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                                                <img class="" width="49%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card w-100 mt-3">
                                                <div class="card-body">

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h5 class="card-title green-dark font-weight-bold">Información</h5>
                                                            <p class="card-text green-dark">
                                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia reprehenderit eius voluptatem error quas deleniti? Maiores, amet aliquam. Cupiditate veniam nisi veritatis expedita enim adipisci, possimus ex atque optio voluptatem! ex atque optio voluptatem! ex atque optio voluptatem!<br><br>
                                                                Praesentium maiores ipsa dignissimos nostrum quas veritatis iusto in sapiente. Quis minus corporis illo praesentium sapiente molestiae ipsam expedita at possimus minima fuga ipsa, quo voluptatum voluptatibus id aperiam exercitationem.
                                                                Aspernatur maxime incidunt dolore explicabo laboriosam, corporis sapiente sequi. Maxime corporis reiciendis rem tempora quam quasi aliquam culpa eum corrupti blanditiis, sequi illum pariatur?
                                                            </p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h5 class="card-title green-dark font-weight-bold py-3">¿Cómo llegar?</h5>
                                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d107014.05331022815!2d-74.1006714486345!3d4.605919633255054!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9bfd2da6cb29%3A0x239d635520a33914!2zQm9nb3TDoQ!5e0!3m2!1ses!2sco!4v1615228295686!5m2!1ses!2sco" width="100%" height="200px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion 6 -->
                    <div class="panel">
                        <div class="panel-heading parent">
                            <a class="accordion-toggle green-dark font-weight-bold" data-toggle="collapse" data-parent="#superaccordion" href="#collapse6" aria-expanded="false">
                                Minas de Muzo
                            </a>
                        </div>
                        <div id="collapse6" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="panel-group" id="accordion2">
                                    <div class="panel">
                                        <div class="panel-heading child">
                                            <h5 class="card-title p-3 px-1 green-dark font-weight-bold">Minas de Muzo</h5>
                                            <div class="card w-100">
                                                <div class="card-body">
                                                    <div id="carouselExampleIndicators13" class="carousel slide" data-ride="carousel">
                                                        <ol class="carousel-indicators">
                                                            <li data-target="#carouselExampleIndicators13" data-slide-to="0" class="active"></li>
                                                            <li data-target="#carouselExampleIndicators13" data-slide-to="1"></li>
                                                            <li data-target="#carouselExampleIndicators13" data-slide-to="2"></li>
                                                        </ol>
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                                <img class="" width="49%" src="../Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                                                <img class="" width="49%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="" width="49%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                                                <img class="" width="49%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="" width="49%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                                                <img class="" width="49%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card w-100 mt-3">
                                                <div class="card-body">

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h5 class="card-title green-dark font-weight-bold">Información</h5>
                                                            <p class="card-text green-dark">
                                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia reprehenderit eius voluptatem error quas deleniti? Maiores, amet aliquam. Cupiditate veniam nisi veritatis expedita enim adipisci, possimus ex atque optio voluptatem! ex atque optio voluptatem! ex atque optio voluptatem!<br><br>
                                                                Praesentium maiores ipsa dignissimos nostrum quas veritatis iusto in sapiente. Quis minus corporis illo praesentium sapiente molestiae ipsam expedita at possimus minima fuga ipsa, quo voluptatum voluptatibus id aperiam exercitationem.
                                                                Aspernatur maxime incidunt dolore explicabo laboriosam, corporis sapiente sequi. Maxime corporis reiciendis rem tempora quam quasi aliquam culpa eum corrupti blanditiis, sequi illum pariatur?
                                                            </p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h5 class="card-title green-dark font-weight-bold py-3">¿Cómo llegar?</h5>
                                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d107014.05331022815!2d-74.1006714486345!3d4.605919633255054!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9bfd2da6cb29%3A0x239d635520a33914!2zQm9nb3TDoQ!5e0!3m2!1ses!2sco!4v1615228295686!5m2!1ses!2sco" width="100%" height="200px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion 7 -->
                    <div class="panel">
                        <div class="panel-heading parent">
                            <a class="accordion-toggle green-dark font-weight-bold" data-toggle="collapse" data-parent="#superaccordion" href="#collapse7" aria-expanded="false">
                                Museo Internacional de la Esmeralda
                            </a>
                        </div>
                        <div id="collapse7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="panel-group" id="accordion2">
                                    <div class="panel">
                                        <div class="panel-heading child">
                                            <h5 class="card-title p-3 px-1 green-dark font-weight-bold">Museo Internacional de la Esmeralda</h5>
                                            <div class="card w-100">
                                                <div class="card-body">
                                                    <div id="carouselExampleIndicators14" class="carousel slide" data-ride="carousel">
                                                        <ol class="carousel-indicators">
                                                            <li data-target="#carouselExampleIndicators14" data-slide-to="0" class="active"></li>
                                                            <li data-target="#carouselExampleIndicators14" data-slide-to="1"></li>
                                                            <li data-target="#carouselExampleIndicators14" data-slide-to="2"></li>
                                                        </ol>
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                                <img class="" width="49%" src="../Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                                                <img class="" width="49%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="" width="49%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                                                <img class="" width="49%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="" width="49%" src="..//Daniela Luque, Quípama, 2019 (2).JPG" alt="First slide">
                                                                <img class="" width="49%" src="../Daniela Luque, Quípama, 2019 (1).JPG" alt="First slide">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card w-100 mt-3">
                                                <div class="card-body">

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h5 class="card-title green-dark font-weight-bold">Información</h5>
                                                            <p class="card-text green-dark">
                                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia reprehenderit eius voluptatem error quas deleniti? Maiores, amet aliquam. Cupiditate veniam nisi veritatis expedita enim adipisci, possimus ex atque optio voluptatem! ex atque optio voluptatem! ex atque optio voluptatem!<br><br>
                                                                Praesentium maiores ipsa dignissimos nostrum quas veritatis iusto in sapiente. Quis minus corporis illo praesentium sapiente molestiae ipsam expedita at possimus minima fuga ipsa, quo voluptatum voluptatibus id aperiam exercitationem.
                                                                Aspernatur maxime incidunt dolore explicabo laboriosam, corporis sapiente sequi. Maxime corporis reiciendis rem tempora quam quasi aliquam culpa eum corrupti blanditiis, sequi illum pariatur?
                                                            </p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h5 class="card-title green-dark font-weight-bold py-3">¿Cómo llegar?</h5>
                                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d107014.05331022815!2d-74.1006714486345!3d4.605919633255054!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9bfd2da6cb29%3A0x239d635520a33914!2zQm9nb3TDoQ!5e0!3m2!1ses!2sco!4v1615228295686!5m2!1ses!2sco" width="100%" height="200px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Super Accordion -->
            </section>
        </div>
    </div>

    <?php
    include "./components/footer.php";
    ?>
    <!-- tabs -->
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>

    <!-- tabs map -->
    <script>
        function openInf(evt, cityName) {
            var i, tabcontent, tablinks2;
            tabcontent = document.getElementsByClassName("tabcontent2");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks2 = document.getElementsByClassName("tablinks2");
            for (i = 0; i < tablinks2.length; i++) {
                tablinks2[i].className = tablinks2[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("nota1").click();
    </script>

    <!-- jQuery library -->
    <script src="./lib/jquery/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>