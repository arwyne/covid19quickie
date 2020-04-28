<?php

    if(!isset($_SESSION)) { 
        session_start(); 
    } 
    require './connection.php';

    $userlog = htmlspecialchars($_POST['userlog']);
    $password = sha1(htmlspecialchars($_POST['password']));

    $user_query = "SELECT * FROM users WHERE username = '$userlog' OR email = '$userlog'";
    $user_result = mysqli_query($conn, $user_query);
    $user_info = mysqli_fetch_assoc($user_result);

    if(mysqli_num_rows($user_result) > 0) {

        if($password != $user_info['password']) {
            header('Location: ../views/login.php');
            die('login failed');

        } else {
            $_SESSION['user'] = $user_info;
            
            // validation if user have results
            $id = $_SESSION['user']['id'];
            $results_query = "SELECT * FROM results WHERE user_id = '$id'";
            $results_result = mysqli_query($conn, $results_query);
            $results_info = mysqli_fetch_assoc($results_result);
            
            if(mysqli_num_rows($results_result) > 0) {
                echo 'there is result';
                $_SESSION['results'] = $results_info;
                header('Location: ../views/profile.php');
            } else {
                echo 'no results yet';
                header('Location: ../views/questions.php');
            }
        }
        
    } else {
        echo 'No credentials found!';
        header('Location: ../views/login.php');
    }

?>
