<?php
    require_once('db.php');



if(!isset($_POST['submit'])){
    header("Location: ../index.php");
    exit();
}
else{


// if(isset($_POST['t_name']) && isset($_POST['t_member']) && isset($_POST['dept']) && isset($_POST['intk']) && isset$_POST(['project_title']) && isset($_POST['project_type']) && isset($_POST['synopsis']) && isset($_POST['tnx_id']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['v_link']) && isset($_POST['project_file'])){

    $pre_email = $_REQUEST['email'];
    $user_sql = "SELECT * FROM project_info WHERE email = '$pre_email'";
    $result = mysqli_query($db, $user_sql);
    if (mysqli_num_rows($result) > 0) {
        header("Location: ../submit.php?alreadyexist");
    }
    else{
        $email = $_REQUEST['email'];
    }
    $pre_phone = (string) $_REQUEST['phone'];
    if(strlen($pre_phone)==11){
        $phone = $_REQUEST['phone'];
    }
    else{
        header("Location: ../submit.php?invalidphone");
    }
    
    
    $t_name = $_REQUEST['t_name'];
    $t_member = $_REQUEST['t_member'];
    $dept = $_REQUEST['dept'];
    $intk = $_REQUEST['intk'];
    $project_title = $_REQUEST['project_title'];
    $project_type = $_REQUEST['project_type'];
    $synopsis = $_REQUEST['synopsis'];
    $tnx_id = $_REQUEST['tnx_id'];
    $v_link = $_REQUEST['v_link'];

    
    

    if($_FILES['project_file']['type'] == "application/pdf"){
        $p_file = $_FILES['project_file'] ['name'];
        $p_file_tmpname = $_FILES['project_file']['tmp_name'];
    $location = "project_file/";
    $nameforDB = uniqid();
    move_uploaded_file($p_file_tmpname, $location."$nameforDB.pdf");
    }
    else{
        header("Location: ../submit.php?error=invalidfile");
    }
     $sql = "INSERT INTO project_info (team_name,team_member,dept,section,project_title,project_criteria,synopsis,tnx_id,email,contact_number,video_link,project_file,p_status) VALUES ('$t_name','$t_member','$dept','$intk','$project_title','$project_type','$synopsis','$tnx_id','$email','$phone','$v_link','$nameforDB.pdf','0')";

    $result = mysqli_query($db, $sql);
    if($result){
        header("Location: ../submit.php?success");
    }
    else{
        echo "Data Not Inserted";
    }





// }
// else{
//     echo header("Location: ../submit.php?error=checkFormData");
// }
}
    

?>