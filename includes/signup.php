<?php
    
    include_once 'db.php';

    $first = $_POST['first'];
    $last = $_POST['last'];
    $username = $_POST['usrnm'];
    $pwd = $_POST['pwd'];
    $role = $_POST['role'];

    $sql = "INSERT INTO `users` (`id`, `lastname`, `firstname`, `username`, `password`, `photo`, `role_id`) VALUES (NULL, '$last', '$first', '$username', '$pwd', 'user.png','$role');";

    mysqli_query($conn, $sql);

    header("Location: ../index.php?signup=success");

?>