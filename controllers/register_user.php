<?php
    require './connection.php';

    $fname = htmlspecialchars($_POST['firstname']);
    $lname = htmlspecialchars($_POST['lastname']);
    $age = htmlspecialchars($_POST['age']);
    $email = htmlspecialchars($_POST['email']);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $confirmPassword = htmlspecialchars($_POST['confirmPassword']);
    $role_id = 2;

    
	if($fname !="" && $lname !="") {
        echo "welcome " . $fname . " " . $lname;
        echo "<br>";
	} else {
        echo "please provide a complete name";
        echo "<br>";
    }
    
    if($age != "") {
        echo "your age is: " . $age;
        echo "<br>";
    } else {
        echo "please provide an age";
        echo "<br>";
    }

	if($email != "") {
        echo "your email is: " . $email;
        echo "<br>";
	} else {
        echo "please provide a valid email";
        echo "<br>";
	}

    if($username != "") {
        echo "your username is: " . $email;
        echo "<br>";
	} else {
        echo "please provide a username";
        echo "<br>";
    }

    // validation of email and username
    $valid_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
    $valid_result = mysqli_query($conn, $valid_query);
    $valid_info = mysqli_fetch_assoc($valid_result);

    if(mysqli_num_rows($valid_result) > 0) {

        if($email = $valid_info['email'] || $username = $valid_info['username']) {
            header('Location: ../views/register.php');
        }
    }



    if($password != "" && $confirmPassword != "") {
        $password = sha1($password);
        $confirmPassword = sha1($confirmPassword);
        var_dump($password);
        var_dump($confirmPassword);

        if($password === $confirmPassword) {
            $insert_query = "INSERT INTO users(firstname, lastname, age, email, username, password, role_id)
                                        VALUES('$fname', '$lname', '$age', '$email', '$username', '$password', '$role_id')";
            $result = mysqli_query($conn, $insert_query);
            
            if($result) {
                echo 'registered successfully';
                header('Location: ../views/login.php');
            } else {
                echo mysqli_error($conn);
            }

        } else {
            echo "passwords do not match";
            header('Location: ../views/register.php');
        }

    } else {
        echo "check password fields";
    }






?>