<!DOCTYPE html>
<html lang="en">
<header>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title></title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css" />
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/boostarp_min.js"></script>
    <!-- Jqery -->
    <script src="js/jquery_min.js"></script>
    <script src="js/helper.js"></script>
</header>
<?php
include "helper.php";
include "conn.php";
?>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <!-- Sign up form -->
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title text-align">Sign up</h2>
                        <form method="post" class="register-form" id="register-form" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" />
                                <p id="g"></p>
                                <p></p>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <label for="img"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="file" name="img" id="img" />
                            </div>
                            <div class="form-grou p form-button">
                                <div class="d-grid">
                                    <!-- <a type="submit" name="" id="" onclick="signup()" class="btn btn-primary">Submit</a> -->
                                    <input type="submit" name="submit" id="signup">

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <?php include_once 'get-data.php'; ?>
            </div>
        </div>
    </div>
</body>

</html>