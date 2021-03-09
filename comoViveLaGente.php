<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./admin/img/<?php echo $favicon ?>">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="./lib/css/docs.theme.min.css">
    <link rel="stylesheet" href="./lib/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="./lib/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="./assets/css/como-vive-la-gente.css">
    <link href="https://fonts.googleapis.com/css2?family=Tomorrow:wght@300&display=swap" rel="stylesheet">
    <title>Como vive la gente</title>
</head>

<body>
    <?php
    include "./components/navbar.php";
    ?>
    <div class="container-fluid">
        <div class="home-demo">
            <div class="row row-margin">
                <!-- TITLE -->
                <h1 class="green-dark font-weight-bold title-section">Cultura: cómo vive la gente</h1>
                <!-- Películas y documentales -->
                <div class="large-12 columns">
                    <h1 class="green-dark font-weight-bold subtitle-section">Documentales</h1>
                    <div class="owl-carousel" style="width: 100%;">
                        <?php
                        $i = 0;
                        $statement = $pdo->prepare("SELECT * FROM tbl_hemeroteca");
                        $statement->execute();
                        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($result as $row) {


                        ?>
                            <div class="item-container lightbox-gallery">

                                <div class="item">

                                    <img src="./admin/img/hemeroteca/<?php echo $row['img'] ?>" style="height: 19vh; padding-top: 2%" data-image-hd="<?php echo $row['url'] ?>" alt="<?php echo $row['name'] ?>" style="padding: 1% 0% 0% 0%;">
                                    <div class="green-dark font-weight-bold" style="width: 200px; display: inline-table; margin: 3px;">
                                        <?php echo $row['name'] ?>
                                    </div>
                                    <span class="green-dark pt-3 time-video"><?php echo $row['hour'] ?>:<?php echo $row['min'] ?>:<?php echo $row['second'] ?></span>

                                </div>

                            </div>
                        <?php
                            $i++;
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="row row-margin mt-5">
                <!-- Películas y documentales -->
                <div class="large-12 columns">
                    <h1 class="green-dark font-weight-bold subtitle-section">Documentales</h1>
                    <div class="owl-carousel" style="width: 100%;">
                        <?php
                        $i = 0;
                        $statement = $pdo->prepare("SELECT * FROM tbl_hemeroteca");
                        $statement->execute();
                        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($result as $row) {


                        ?>
                            <div class="item-container lightbox-gallery">

                                <div class="item">

                                    <img src="./admin/img/hemeroteca/<?php echo $row['img'] ?>" style="height: 18vh" data-image-hd="<?php echo $row['url'] ?>" alt="<?php echo $row['name'] ?>" style="padding: 1% 0% 0% 0%;">
                                    <div class="green-dark font-weight-bold" style="width: 200px; display: inline-table; margin: 3px;">
                                        <?php echo $row['name'] ?>
                                    </div>
                                    <span class="green-dark pt-3 time-video"><?php echo $row['hour'] ?>:<?php echo $row['min'] ?>:<?php echo $row['second'] ?></span>

                                </div>

                            </div>
                        <?php
                            $i++;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php
    include "./components/footer.php";
    ?>

    <!-- jQuery library -->
    <script src="./lib/jquery/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>

    <script>
        // Create a lightbox
        (function() {
            var $lightbox = $("<div class='lightbox'></div>");
            var $img = $("<iframe>");
            var $caption = $("<p class='caption'></p>");

            // Add image and caption to lightbox

            $lightbox
                .append($img)
                .append($caption);

            // Add lighbox to document

            $('body').append($lightbox);

            $('.lightbox-gallery img').click(function(e) {
                e.preventDefault();

                // Get image link and description
                var src = $(this).attr("data-image-hd");
                var cap = $(this).attr("alt");

                // Add data to lighbox

                $img.attr('src', src);
                $caption.text(cap);

                // Show lightbox

                $lightbox.fadeIn('fast');

                $lightbox.click(function() {
                    $lightbox.fadeOut('fast');
                });
            });

        }());
    </script>

    <script src="./lib/vendors/jquery.min.js"></script>

    <script src="./lib/owlcarousel/owl.carousel.js"></script>

    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            margin: 10,
            loop: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>

    <script src="./lib/vendors/highlight.js"></script>


    <script src="./lib/js/app.js"></script>
</body>

</html>