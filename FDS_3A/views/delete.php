<?php

    require_once('../controller/action.php');

    $id = $_GET['id'];
    $res = deleteStudent($id);

    if($res){
        header("location: view.php");
        echo "<script>alert('Data inserted successfully')</script>";
    }else{
        echo "Something went wrong!";
    }

?>