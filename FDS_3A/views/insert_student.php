<?php

    require_once('../controller/action.php');
    $studid = $_POST['studid'];
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $age = $_POST['age'];
    $stat = $_POST['stat'];
    $address = $_POST['address'];
    $cn = $_POST['cn'];

    if(isset($_POST['btn-save'])){
        $bool = insertStudent($studid, $lname, $fname, $age, $stat, $address, $cn);
        if($bool){
            echo "Data inserted successfully";
            header("Location: ../index.php");
        }else{
            echo "Something went wrong";
    }
    
}
?>