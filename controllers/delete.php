<?php   

    session_start();

    require './connection.php';


    if (!isset($_SESSION['results'])) {
        header("Location: ../views/home.php");
    } else {
        $id = $_SESSION['user']['id'];
    }


    $valid_query = "SELECT * FROM results WHERE user_id = $id";
    $valid_result = mysqli_query($conn, $valid_query);
    $valid_info = mysqli_fetch_assoc($valid_result);

    if(isset($_SESSION['results'])) {
        $delete_query = "DELETE FROM results WHERE user_id = $id";
        $result = mysqli_query($conn, $delete_query);
        if($result) {
            echo 'deleted successfully';
            header('Location: ../views/profile.php');
        } else {
            echo mysqli_error($conn);
        }
    }

    

?>

