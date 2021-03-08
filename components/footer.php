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
?>

<!-- Footer -->
<footer class="bg-light text-center text-lg-start">
    <!-- Grid container -->
    <div class="containe w-100 p-4">
        <!--Grid row-->
        <div class="row w-100" style="    max-width: 100% !important;">
            <!--Grid column-->
            <div class="col-lg-4 col-md-12 mb-4 mb-md-0 d-flex justify-content-center align-items-center">
                <p>
                    <?php echo $privacy_policies ?>
                </p>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Redes sociales</h5>
                <div class="row justify-content-center">
                    <div class="col-1">1</div>
                    <div class="col-1">2</div>
                    <div class="col-1">3</div>
                    <div class="col-1">5</div>
                </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-0">Contáctanos</h5>

                <ul class="list-unstyled mt-3">
                    <li>
                        <a href="#!" class="text-dark"><?php echo $phone ?></a>
                    </li>
                    <li>
                        <a href="#!" class="text-dark"><?php echo $phone ?></a>
                    </li>
                    <li>
                        <a href="#!" class="text-dark"><?php echo $email ?></a>
                    </li>
                </ul>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->
</footer>
<!-- Footer -->