<?php if(isset($_COOKIE['Current_User'])){

    if($_COOKIE['Current_User'] == '23722b97842c4d6e73ad56f05a7cba93'){
    require_once('../config/db.php');
        
        if($_GET['accept']){
                $projectAcceptEmail = $GET['accept'];
                echo $projectAcceptEmail;
                // $sql = "UPDATE project_info SET status = '1' WHERE email = '$projectAcceptEmail'";
                // $result = mysqli_query($db, $sql);
                // if($result){
                //     echo "<script>alert('Project Accepted Successfully!')</script>";
                // }else{
                //     echo "<script>alert('Something Went Wrong!')</script>";
                // }
        }
        // else if($_GET['reject']){
        //         $projectRejectEmail = $_GET['reject'];
        //         $sql = "DELETE FROM project_info WHERE email = '$projectRejectEmail'";
        //         $result = mysqli_query($db, $sql);
        //         if($result){
        //             echo "<script>alert('Project Rejected Successfully!')</script>";
        //         }else{
        //             echo "<script>alert('Something Went Wrong!')</script>";
        //         }
        // }












    }
    header('location: ./auth.php');
} ?>


