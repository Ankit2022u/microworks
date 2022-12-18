<?php
    include("../api/connect.php");

    // function to calculate age
    function agecalculator($dob){
        if(!empty($dob)){
            $birthdate = new DateTime($dob);
            $today = new DateTime('today');
            $age = $birthdate->diff($today)->y;
            return $age;
        }else{
            return 0;
        }
    }

    if(isset($_POST["register-btn"])){
        $fname = $_POST["fname"];
        $lname = $_POST["fname"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $dob = $_POST["dob"];
        $age = agecalculator($dob);

        // Matching password and repeated password
        if($cpassword == $password){
            // Validate password strength
            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            $number    = preg_match('@[0-9]@', $password);
            $specialchars = preg_match('@[^\w]@', $password);

            // For testing purposes
            if(!$uppercase || !$lowercase || !$number || !$specialchars || strlen($password) < 8) {
                echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one lower case letter, one number, and one special character.';
            }else{
                // For testing purposes
                echo 'Strong password.';
                // Insertion into database
                $query = "insert into user( fname, lname, email, phone, password,dob, age) values ('$fname', '$lname', '$email', '$phone', '$password', '$dob', '$age')";
                $run = mysqli_query($conn, $query);

                // For testing purposes
                if ($run) {
                    echo "Your Data has been submitted";
                    // header("location: ../index.html");

                } else {
                    echo "Your Data has not been submitted";
                }
            }

        }

    }