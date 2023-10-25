<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/view.css?v2">
    <title>Student Record Management-view</title>
</head>

<body>
    <div class="main-container">
        <div class="container-btn">
        <a href="../index.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M7.82843 10.9999H20V12.9999H7.82843L13.1924 18.3638L11.7782 19.778L4 11.9999L11.7782 4.22168L13.1924 5.63589L7.82843 10.9999Z"></path></svg></a>
        </div>
        <div class="header" id="head">
    <center>
        <h1 style="font-family: Arial, Helvetica, sans-serif;">STUDENT RECORD MANAGEMENT</h1>
        </center>
    </div>

    <div class="table-container">
    <table border="2">
        
        <thead>
            <tr>
                <td colspan="9">
                    <div class="table-container-title">
                    <center>
                        <H3 style="font-family: Arial, Helvetica, sans-serif;">RECORDS</H3>
                    </center>
                </td>
            </tr>
            </div>
            <tr style="font-family: Arial, Helvetica, sans-serif;">
            
                <th>ID</th>
                <th>Student ID</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Age</th>
                <th>Status</th>
                <th>Address</th>
                <th>Contact number</th>
                <th>Action</th>

            </tr>
        </thead>
        <?php
        require_once('../controller/action.php');
        $record = getRecords();

        if (!empty($record)) {
            foreach ($record as $key) {


        ?>
                <tbody>
                    <tr>
                        <td><?= $key['id'] ?></td>
                        <td><?= $key['studid'] ?></td>
                        <td><?= $key['lname'] ?></td>
                        <td><?= $key['fname'] ?></td>
                        <td><?= $key['age'] ?></td>
                        <td><?= $key['stat'] ?></td>
                        <td><?= $key['address'] ?></td>
                        <td><?= $key['cn'] ?></td>
                        <td>
                            <a href="../updateform.php?id=<?= $key['id']; ?>">Update</a>
                            <a href="delete.php?id=<?= $key['id'] ?>">Delete</a>
                        </td>
                    </tr>
                </tbody>
                <a href=""></a>

        <?php
            }
        } else {
            echo "No Record Found!";
        }
        ?>
    </table>
    </div>
    </div>

</body>

</html>