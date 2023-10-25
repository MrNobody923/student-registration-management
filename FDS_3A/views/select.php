<?php
    require_once __DIR__ . '/../controller/action.php';

    if (isset($_GET['id'])) {
        $selectStudent = selectStudent($_GET['id']);

        return $selectStudent;
    }
?>