<?php
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

    if(!isset($_SESSION['user'])){
        header('Location: login.php');
    }else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Homepage - TalkZone</title>
</head>
<body class="h-screen flex justify-center items-center bg-gray-200">
    <div class="w-full max-w-xs">
        <div action="processlogin.php" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post">
            <h1 class="text-center font-light text-gray-700 text-xl mb-1">Hello, welcome back <b><?php echo $_SESSION['user']; ?></b>!</h1>
            <p class="text-center font-light text-gray-700">Feel bored? <a href="logout.php">Click here to Logout</a></p>
        </div>
        <p class="text-center text-gray-500 text-xs">
            &copy;2019 Dodycode. For practice purposes.
        </p>
    </div>
</body>
</html>
<?php } ?>