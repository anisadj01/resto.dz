
<?php
    //if(isset($_POST['send']))
    echo $_POST['nom']."<br>".$_POST['email']."<br>".$_POST['message'];
    $username = $_POST['nom'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $file = fopen("text.txt", "a");
    fwrite($file, $usename);
    fclose($file);
?>

