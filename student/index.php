<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> Smart CBT Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Student Area" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="../assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="../assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-login text-center">
                            <div class="bg-login-overlay"></div>
                            <div class="position-relative">
                                <h5 class="text-white font-size-20">Welcome Back !</h5>
                                <p class="text-white-50 mb-0">Sign in to Enroll and Exam.</p>
                                <a href="index.php" class="logo logo-admin mt-4">
                                    <img src="../assets/images/logo-sm-dark.png" alt="" height="30">
                                </a>
                            </div>
                        </div>
                        <div class="card-body pt-5">
                            <div class="p-2">
                                <form class="form-horizontal" action="controller/slogin.php" method="post">

                                    <div class="form-group">
                                        <label for="username">Email</label>
                                        <input type="email" name = "email" class="form-control" id="email"  required placeholder="Enter Email">
                                    </div>

                                    <div class="form-group">
                                        <label for="userpassword">Password</label>
                                        <input type="password" name = "password" class="form-control" required id="userpassword" placeholder="Enter password">
                                    </div>



                                    <div class="mt-3">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" name ="login_event" type="submit">Log In</button>
                                    </div>


                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">

                        <p>© 2020 Smart CBT. Crafted with <i class="mdi mdi-heart text-danger"></i> by Beautifulcode Inc</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="../assets/libs/jquery/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="../assets/libs/simplebar/simplebar.min.js"></script>
    <script src="../assets/libs/node-waves/waves.min.js"></script>

    <script src="assets/js/app.js"></script>

</body>



</html>
