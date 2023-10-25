<?php

    require_once __DIR__ . "/../database/conn.php";
    require_once __DIR__ . "/../controller/action.php";

    if (isset($_POST['id'])){

        $id = $_POST['id'];
        $studid = $_POST['studid'];
        $lname = $_POST['lname'];
        $fname = $_POST['fname'];
        $age = $_POST['age'];
        $stat = $_POST['stat'];
        $address = $_POST['address'];
        $cn = $_POST['cn'];

        $bool = updateStudent($id, $studid, $lname, $fname, $age, $stat, $address, $cn);

        if ($bool) {
            echo "Information updated successfully!";
            header("location: ./view.php");
        }else{
            echo "Update failed!";
        }
    }

?>