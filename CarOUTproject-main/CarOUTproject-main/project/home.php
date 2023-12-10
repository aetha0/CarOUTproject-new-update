<?php

session_start();
include('inc/connection.php');

if (isset($_SESSION['id'])&& isset($_SESSION['username']))
{

    $id=$_SESSION['id'];
    $user=$_SESSION['username'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <a href="logout.php"></a>
    <h1>hello ,<?php echo $user ?> </h1>
</body>
</html>

<?php

else {

    header ('location :index.php');
}

?>