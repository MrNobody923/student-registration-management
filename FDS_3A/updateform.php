<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/updateform.css?v2">
    <title>Student Record Management - update</title>
</head>

<body>
    <?php

    require_once __DIR__ . '/./views/select.php';

    foreach ($selectStudent as $key);
    ?>

    <div class="header" id="header-info">
        <center>
            <h1>STUDENT RECORD MANAGEMENT</h1>
        </center>
    </div>

    <form action="views/update.php" method="post">

        <div class="main-container">

            <div class="container-btn">
                <a href="views/view.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M7.82843 10.9999H20V12.9999H7.82843L13.1924 18.3638L11.7782 19.778L4 11.9999L11.7782 4.22168L13.1924 5.63589L7.82843 10.9999Z"></path>
                    </svg></a>
            </div>

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
        </div>
    </form>





</body>

</html>