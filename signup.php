<?php 
session_start();
    if(isset($_SESSION['single_user'])){ 
        header('location:index.php');
    }
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Laurier's social</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bicon.min.css">
    <!-- Flat Icon CSS -->
    <link rel="stylesheet" href="assets/css/vendor/flaticon.css">
    <!-- audio & video player CSS -->
    <link rel="stylesheet" href="assets/css/plugins/plyr.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="assets/css/plugins/slick.min.css">
    <!-- nice-select CSS -->
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <!-- perfect scrollbar css -->
    <link rel="stylesheet" href="assets/css/plugins/perfect-scrollbar.css">
    <!-- light gallery css -->
    <link rel="stylesheet" href="assets/css/plugins/lightgallery.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .success_message{
            background: #0DC143;
            color: #eee;
            text-align: center;
            padding: 10px 0;
            margin-top: 10px;
            display: none;
            transition: .4s;
        }
        .error_message {
            background: #DC4734;
            color: #eee;
            text-align: center;
            padding: 10px 0;
            margin-top: 10px;
            display: none;
            transition: .4s;
        }
      
    </style>

</head>

<body class="bg-transparent">

    <main>
        <div class="main-wrapper pb-0 mb-0">
            <div class="timeline-wrapper">
                <div class="timeline-header">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters align-items-center">
                            <div class="col-lg-6">
                                <div class="timeline-logo-area d-flex align-items-center">
                                    <div class="timeline-logo">
                                        <a href="index.php">
                                            <img src="assets/images/logo/logo.png" alt="timeline logo">
                                        </a>
                                    </div>
                                    <div class="timeline-tagline">
                                        <h6 class="tagline">It’s helps you to connect and share with the people in your life</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="login-area">
                                    <form method="POST" action="#" id="login_form">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-sm">
                                            <input type="text" id="lg_username" placeholder="Email or Userame" class="single-field">
                                        </div>
                                        <div class="col-12 col-sm">
                                            <input type="password" id="lg_password" placeholder="Password" class="single-field">
                                        </div>
                                        <div class="col-12 col-sm-auto">
                                            <input type="submit" id="submit" class="login-btn" value="Login">
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="timeline-page-wrapper">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                            <div class="col-lg-6 order-2 order-lg-1">
                                <div class="timeline-bg-content bg-img" data-bg="assets/images/timeline/adda-timeline.jpg">
                                    <h3 class="timeline-bg-title">Let’s see what’s happening to you and your world. Welcome in Adda.</h3>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 d-flex align-items-center justify-content-center">
                                <div class="signup-form-wrapper">
                                    <div class="success_message " id="log_success_message"></div>
                                <div class="error_message " id="log_error_message"></div>

                                    <h1 class="create-acc text-center">Create An Account</h1>
                                    <div class="signup-inner text-center">
                                        <h3 class="title">Wellcome to Adda</h3>
                                        <form class="signup-inner--form" method="POST" action="#" id="reg_form">
                                            <div class="row">
                                                <div class="col-12">
                                                    <input type="email" id="email" class="single-field" placeholder="Email">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" id="first_name" class="single-field" placeholder="First Name">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" id="last_name" class="single-field" placeholder="Last Name">
                                                </div>
                                                <div class="col-12">
                                                    <input type="password" id="rg_password" class="single-field" placeholder="Password">
                                                </div>
                                                <div class="col-md-6">
                                                    <select class="nice-select" name="sortby" id="gender">
                                                        <option value="">Gender</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <select class="nice-select" name="sortby" id="age">
                                                        <option value="">Age</option>
                                                        <option value="18+">18+</option>
                                                        <option value="18-">18-</option>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <select class="nice-select" name="sortby" id="country">
                                                        <option value="">Country</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="Noakhali">Noakhali</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="China">China</option>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <input type="submit" class="submit-btn" id="submit"  value="Create Account">
                                                </div>
                                            </div>
                                            <h6 class="terms-condition">I have read & accepted the <a href="#">terms of use</a></h6>
                                            <div class="success_message " id="success_message"></div>
                                            <div class="error_message " id="error_message"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <!-- Popper JS -->
    <script src="assets/js/vendor/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!-- Slick Slider JS -->
    <script src="assets/js/plugins/slick.min.js"></script>
    <!-- nice select JS -->
    <script src="assets/js/plugins/nice-select.min.js"></script>
    <!-- audio video player JS -->
    <script src="assets/js/plugins/plyr.min.js"></script>
    <!-- perfect scrollbar js -->
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <!-- light gallery js -->
    <script src="assets/js/plugins/lightgallery-all.min.js"></script>
    <!-- image loaded js -->
    <script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <!-- isotope filter js -->
    <script src="assets/js/plugins/isotope.pkgd.min.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- registration from submite  -->
    <script>
         $('#reg_form').on('submit',function(event){
                event.preventDefault();

                var email = $('#email').val();
                var f_name = $('#first_name').val();
                var l_name = $('#last_name').val();
                var rg_password = $('#rg_password').val();
                var gender = $('#gender').val();
                var age = $('#age').val();
                var country = $('#country').val();
               

                if (email.length == 0){
                    $('#error_message').show().text('Email is Required!');
                    $('#success_message').hide();
                }
                else if(f_name.length == 0){
                    $('#error_message').show().text('First Name is Required!');
                    $('#success_message').hide();
                }
                else if (l_name.length == 0){
                    $('#error_message').show().text('Last Name is Required!');
                    $('#success_message').hide();
                }
                else if (rg_password.length == 0){
                    $('#error_message').show().text('Password is Required!');
                    $('#success_message').hide();
                }
                else if (gender == ""){
                    $('#error_message').show().text('Please Selecte Gender');
                    $('#success_message').hide();
                }
                else if (age == ""){
                    $('#error_message').show().text('Please Selecte Age');
                    $('#success_message').hide();
                }
                else if (country == ""){
                    $('#error_message').show().text('Please Selecte Country');
                    $('#success_message').hide();
                }
                else{
                    $('#error_message').hide();
                    // $('#success_message').show().text('condition okay');

                    $.ajax({
                        type: 'POST',
                        url: 'devlop/ajaxRegistration.php',
                        data:{
                            email : email,
                            f_name : f_name,
                            l_name : l_name,
                            rg_password : rg_password,
                            gender : gender,
                            age : age,
                            country : country
                        },
                        success:function(response){
                            if(response == "success"){
                                $('#success_message').show().text('Registration Successfully Done');
                                $('#error_message').hide();
                            }
                            else if(response == "error"){
                                $('#error_message').show().text('This email is already exist!');
                                $('#success_message').hide();
                            }
                            else{
                                $('#error_message').show().text(response);
                                $('#success_message').hide();
                            }
                        }
                    });
                   
                }
              
        });


        // Login form submite 

        $('#login_form').on('submit',function(event){
            event.preventDefault();
            var lg_username = $('#lg_username').val();
            var lg_password = $('#lg_password').val();

            if(lg_username.length == 0){
                $('#log_error_message').show().text('Email or Mobile is Required!');
                $('#log_success_message').hide();
            }
            else if (lg_password.length == 0){
                $('#log_error_message').show().text('Password is Required!');
                $('#log_success_message').hide();
            }
            else{
                // success_message('Condition is success')

                $.ajax({
                    type: 'POST',
                    url: 'devlop/ajaxLogin.php',
                    data:{
                        username : lg_username,
                        password : lg_password
                    },
                    success:function(response){
                        if(response == 'lg error'){
                            $('#log_error_message').show().text('Username or Password is wrong');
                            $('#log_success_message').hide();
                        }
                        else if(response == 'lg success'){
                            $('#log_success_message').show().text('login Success');
                            $('#log_error_message').hide();
                            setTimeout(function(){
                                window.location = 'index.php';
                            }, 2000); 
                        }
                        else{
                            $('#log_error_message').show().text(response);
                            $('#log_success_message').hide();
                        }
                        
                    }
                });
            }
    });
       
    </script>

</body>

</html>