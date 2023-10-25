<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/index.css?v2">
    <title>Student Record Management - main</title>
</head>
<body>
    <div class="header" id="header-info">
        <center style="font-family: Arial, Helvetica, sans-serif;">
        <h1>STUDENT RECORD MANAGEMENT</h1>
        </center>
    </div>    

        <form action="views/insert_student.php" method="post">

            <div class="main-container">
            
            <div class="sub-main-container">

            <div class="info-container">
                <div class="user-id">
                    <input type="text" name="studid" placeholder="ID #.." required>
                </div>

                <div class="user-lname">
                    <input type="text" name="lname" placeholder="Last name.." required>
                </div>

                <div class="user-fname">
                    <input type="text" name="fname" placeholder="First name.." required>
                </div>

                <div class="user-age">
                    <input type="text" name="age" placeholder="Age.." required>
                </div>

                <div class="user-stat">
                    <input type="text" name="stat" placeholder="Stat.." required>
                </div>  
                
                <div class="user-address">
                    <input type="text" name="address" placeholder="Address.." required>
                </div>

                <div class="user-contact">
                    <input type="text" name="cn" placeholder="Contact.." required>
                </div>

                <div class="submit-btn">
                    <a href="views/view.php" style="color: white;">View data</a>
                    <input type="Submit" name="btn-save">
                </div>
            
            </div>
        </div>
    </div>
</form>
                


</body>
</html>

<?php
    

?>
