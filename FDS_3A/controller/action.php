<?php

require_once __DIR__ . '/../database/conn.php';

function getRecords(){

    $conn = ConnectionDB();
    $query = "SELECT * FROM student";
    $result = $conn->query($query);
    $records = array();
    while($row = mysqli_fetch_assoc($result)){
        $records[] = $row;
    }
    return $records;
}

function insertStudent($studid,$lname, $fname, $age, $stat, $address, $cn){
    $conn = ConnectionDB();
    $query = "INSERT INTO student(studid,lname,fname,age,stat,address,cn) 
    VALUES ('$studid','$lname','$fname','$age','$stat','$address','$cn')";

$res = $conn->query($query);

return $res;

}
   function deleteStudent($id){
        $conn = connectionDB();
        $qry=$conn->query("DELETE FROM student WHERE id='$id'");

        return $qry;

    }
    
    function updateStudent($id, $studid, $lname, $fname, $age, $stat, $address, $cn){
        $conn = ConnectionDB();
        $qry = $conn->query("UPDATE student 
                            SET studid = '$studid', lname = '$lname', fname = '$fname', age = '$age', stat = '$stat', address = '$address', cn =  '$cn'
                            WHERE id = '$id'");

        return $qry;
    }
    
    function selectStudent($id){
        $conn = connectionDB();
        $qry = $conn->query("SELECT * FROM student
                            WHERE id = '$id'");

        return $qry;
    }
?>