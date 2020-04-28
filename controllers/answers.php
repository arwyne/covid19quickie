<?php

    session_start();
    require './connection.php';

    if (isset($_SESSION['user'])) {
        $id = $_SESSION['user']['id'];
    }

    $answer1 = $_POST['question1']; //travel yes or no
    $answer2_1 = ''; //symptoms yes or no
    $answer2_2 = ''; //contact yes or no
    $answer3 = ''; //temp above or below
    $pui = 'pui';
    $pum = 'pum';
    $not = 'not';

    if(isset($_POST['question2-1'])) {
        $answer2_1 = $_POST['question2-1'];
    }

    if(isset($_POST['question2-2'])) {
        $answer2_2 = $_POST['question2-2'];
    }

    if(isset($_POST['question3'])) {
        $answer3 = $_POST['question3'];
    }

    $_SESSION['answer1'] = $answer1;
    $_SESSION['answer2_1'] = $answer2_1;
    $_SESSION['answer2_2'] = $answer2_2;
    $_SESSION['answer3'] = $answer3;
    $_SESSION['pui'] = $pui;
    $_SESSION['pum'] = $pum;
    $_SESSION['not'] = $not;


    if(isset($_SESSION['user'])) {

        if($answer3 == 'above') {
            $insert_query1 = "INSERT INTO results(travel, symptoms, contact, temp, status, user_id)
                                VALUES ('$answer1', '$answer2_1', '$answer2_2', '$answer3', '$pui', '$id')";

            $result1 = mysqli_query($conn, $insert_query1);
            if($result1) {
                echo 'answered successfuly1';

                header('Location: ../views/profile.php');
            } else {
                echo mysqli_error($conn);
            }


        } elseif($answer3 == 'below') {
            $insert_query2 = "INSERT INTO results(travel, symptoms, contact, temp, status, user_id)
                                VALUES ('$answer1', '$answer2_1', '$answer2_2', '$answer3', '$pum', '$id')";

            $result2 = mysqli_query($conn, $insert_query2);
            if($result2) {
                echo 'answered successfuly2';
                header('Location: ../views/profile.php');
            } else {
                echo mysqli_error($conn);
            }


        } else {
            $insert_query3 = "INSERT INTO results(travel, symptoms, contact, temp, status, user_id)
                                VALUES ('$answer1', '$answer2_1', '$answer2_2', '$answer3', '$not', '$id')";

            $result3 = mysqli_query($conn, $insert_query3);
            if($result3) {
                echo 'answered successfuly3';
                header('Location: ../views/profile.php');
            } else {
                echo mysqli_error($conn);
            }

        } 

    } else {
        header('Location: ../views/results.php');
    }



?>

