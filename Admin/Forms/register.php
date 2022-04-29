<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <title>University of Makati - TASC</title>
   

    <link rel="shortcut icon" href="https://umak.edu.ph/olcmat/favicon.ico">
    <!-- Bootstrap -->
    <link href="https://umak.edu.ph/olcmat/assets/n_assets/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://umak.edu.ph/olcmat/assets/n_assets/css/fontawesome/css/all.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="https://umak.edu.ph/olcmat/assets/n_assets/css/overwrite.css" rel="stylesheet">

    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-SWHW0WX40Y"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-SWHW0WX40Y');
        </script> -->
    <!--         <script src="assets/js/disable.js" ></script>
         -->
         <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <script src="https://umak.edu.ph/olcmat/assets/n_assets/js/jquery.min.js"></script>
    <script src="https://umak.edu.ph/olcmat/assets/n_assets/css/bootstrap/js/bootstrap.js"></script>
</head>

<body class="olea-ct">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
                <a class="navbar-brand pc-ct" href="index.html"><img src="https://umak.edu.ph/olcmat/assets/n_assets/images/umak_logo.png" width="45px" style="float: left;margin-top: -12px "><span class="navbar-text-ct">UNIVERSITY OF MAKATI </span><span class="nav-name-ct" style="color: #fff; margin-left:20px;">| Admistrator Website Login</span><span> (TASC OFFICE)</span></a>
            </div>

            
        </div>
    </nav>
    <div class="container-fluid container-login">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 log-back">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 login-left-ct">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 login-ct">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 login-logo-ct">
                            <center>
                                <h1 class="text-dark-custom" style="color: #fff;"><i class="fas fa-user-lock"></i><br>REGISTER</h1>
                            </center>
                            <!-- palitan mo ung kulay kapag error = red -->
                            <!-- palitan mo ung kulay kapag success = green -->
    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "The username is taken try another") {
             echo "<p><center>Username already taken!</center></p>";
        }
        else if($_GET["error"] == "The password and confirm password does not match"){
            echo "<p><center>Password does not match!</center></p>";
        }
    }
    else if(isset($_GET["success"])) {
        if ($_GET["success"] == "Your account has been created successfully") {
         echo "<p><center>Account created successfully!</center></p>";
  }
    }
                            ?>
                            <form action="register.inc.php"  method="post" accept-charset="utf-8">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 login-logo-ct">

                            <hr>
                            <div class="form-group">
                                <label class="text-dark-custom">ADMINISTRATOR ID</label>
                                <input type="text" name="student_id" class="form-control text-center" placeholder="Enter Employee ID" style="font-size: 18px;" required> 
                            </div>
                            <div class="form-group" style="margin-top: 30px;">
                                <label class="text-dark-custom">PASSWORD</label>
                                <input type="password" name="password" class="form-control text-center" placeholder="Enter Password" id="Show" style="font-size: 18px;" required>
                                <label > Show Password:</label>
                                <input type="checkbox" name=""  onclick="showfunc()">
                            </div>
                            <div class="form-group" style="margin-top: 30px;">
                                <label class="text-dark-custom">CONFIRM PASSWORD</label>
                                <input type="password" name="repassword" class="form-control text-center" placeholder="Enter Password" id="Shows" style="font-size: 18px;" required>
                                <label> Show Password:</label>
                                <input type="checkbox" name=""  onclick="showfun()">
                            </div>
                            <hr>
                        </div>
                        
                       
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 login-right-ct" style="background-color: #062966;">

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 head-ct-title" style="margin-top: 10px; color: #fff;">
                        <h4>Other Information for Verification</h4>
                        <hr>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 login-logo-ct">
                            <hr>
                            <div class="form-group">
                                <label class="text-dark-custom" style="color: #ebd939;">FULLNAME</label>
                                <input type="text" name="fullname" class="form-control text-center" placeholder="Enter FullName" style="font-size: 18px; " required>
                            </div>
                            <div class="form-group" style="margin-top: 30px;">
                                <label class="text-dark-custom" style="color: #ebd939;">BIRTHDATE</label>
                                <input type="text" name="birthdate" class="form-control text-center" placeholder="Enter Birthdate" style="font-size: 18px;" required>
                            </div>
                            <div class="form-group" style="margin-top: 30px;">
                                <label class="text-dark-custom" style="color: #ebd939;">CONTACT NUMBER</label>
                                <input type="text" name="contact" class="form-control text-center" placeholder="Enter Contact Number" style="font-size: 18px;" required>
                            </div>
                            <div class="form-group" style="margin-top: 30px;">
                                <label class="text-dark-custom" style="color: #ebd939;">UNIVERSITY EMAIL</label>
                                <input type="text" name="email" class="form-control text-center" placeholder="Enter Email" style="font-size: 18px;" required>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <center>
                                    <button type="submit" class="btn btn-lg btn-block btn-primary letter-spacing-ct"  id="btn_submit" name="btn_submit" style="margin-top:20px;"> SUBMIT</button>
                                </center>
                            </div>
                            <hr>
                        </div>

                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <h4>Contact Us</h4>
                    <ul>
                        <li><b>ADDRESS</b></li>
                        <li style="padding-left: 10px;">J.P. Rizal Ext, West Rembo, Makati City, 1215 Metro Manila</li>
                        <li><b>REGISTRAR OFFICE</b>
                        </li>
                        <li style="padding-left: 10px;">registrar@umak.edu.ph <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJZcQsfHrmXKfBDsmPfTflzvCwlnPFxGtVcxsCcDcZznJSKmGhdnqPXjBlwlsbrcckFTDGq"> Email Now!</a></li>
                        <li><b>ACCOUNTING OFFICE</b>
                        </li>
                        <li style="padding-left: 10px;">accounting@umak.edu.ph <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCKCJDXzlLNWBdHqgtQmXWmqGQqLKFWxndGBbngWZMDvwmFfbKPmMWdTtjZnmzddDvWrgTtg">Email Now!</a></li>
                        <li><b>TESTING, ADMISSION AND SCHOLARSHIP CENTER</b>
                        </li>
                        <li style="padding-left: 10px;">tasc@umak.edu.ph <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCKCDkpMwVKmdvWcMsqZmflFSQqFtWJDxNhSRNbQNzprJvstmbhKcdjSRNCSTsgdxXvNNxPg">Email Now!</a></li>
                        <li><b>INFORMATION TECHNOLOGY CENTER</b>
                        </li>
                        <li style="padding-left: 10px;">itc_support@umak.edu.ph <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJfnZqRGqNMpRfWhTLXVQjLtxWnmQlSPmtrGbJdMNFcglZtpTWfgTcpZhdgJPXBHZnLvdNq">Email Now!</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 foot-img-ct">
                    <img src="https://umak.edu.ph/olcmat/assets/n_assets/images/umak_logo.png" class="pull-right" width="150px">
                </div>
            </div>
        </div>
    </div>
    <div class="footer-ct">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                DEVELOPED BY : UNIVERSITY OF MAKATI - INFORMATION TECHNOLOGY CENTER (Modiied by Students)
            </div>
        </div>
    </div>

    
</body>

</html>