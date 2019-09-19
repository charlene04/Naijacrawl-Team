 
<!-- Naijacrawl user header script-->
<?php
include('../connection/config.php');
include('../classes/user.php');
$user = new User($db);
if (!$user->is_logged_in()) {
    header('Location: ../login');
}
$session_id = $_SESSION['id'];
$sql = "select * from users where id = '$session_id'";
foreach ($db->query($sql, PDO::FETCH_ASSOC) as $row)
    $email = $row['email'];
$fullname = $row['full_name'];
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../assets/css/main.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />

        <title><?php echo $fullname ?></title>
    </head>

    <body>
        <div class="modal" style="display: none">
            <div class="center">
                <img src="../assets/img/reload.gif"  >
            </div>
        </div>
        <?php include('../layouts/header.php') ?>

