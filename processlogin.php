<?php
include 'db.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * FROM users where `username` = '$username' AND `password` = '$password'";

$users = mysqli_query($conn, $query);

if(mysqli_num_rows($users) > 0){
    //user valid

    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    $_SESSION['user'] = $username;

    header('Location: index.php');
}else{
    echo "
        <script type='text/javascript'>
            alert('You have entered an invalid username or password');

            window.location.href = 'login.php';
        </script>
    ";

    mysqli_close($conn);
}