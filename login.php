<?php
    include("api/connect.php");
    session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `user` WHERE email = '$email' AND password = '$password'";
    $check = mysqli_query($conn, $query);

    if (mysqli_num_rows($check) > 0) {

        $userdata = mysqli_fetch_array($check);
        $_SESSION['userdata'] = $userdata;
        $_SESSION['login'] = true;

        // For testing purposes
        echo '
        <script>
            alert("Login Successful !");
        </script>
        ';
    
        echo '
        <script>
            window.location="dashboard/dashboard.php";
        </script>
        ';
    } else {
        // echo '
        // <script>
        //     alert("Invalid Username or Password !");
        //     window.location="index.html";
        // </script>
        // ';
    }
?>