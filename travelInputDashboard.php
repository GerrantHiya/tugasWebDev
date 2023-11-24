<!DOCTYPE html>
<html lang="en">

<?php include 'addOn/head.html';

session_start();
if (isset($_SESSION['IsLoggedIn']) && $_SESSION['IsLoggedIn'] === true) {
} else {
    header("Location: loginForm.html");
}

?>

<body class="sb-nav-fixed">
    <?php include 'addOn/nav.html' ?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?php include 'addOn/sidepanelmenu.php' ?>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <?php include 'travel_new_data_UI.php';
                    ?>
                </div>
            </main>
            <?php include 'addOn/footer.html' ?>
        </div>
    </div>
    <?php
    include 'addOn/script.html' ?>
</body>

</html>