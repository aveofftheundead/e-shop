<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eShop</title>
    <link rel="icon" href="resources/logo.svg">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">

</head>

<body class="main-body">
    <div class="container-fluid vh-100 d-flex justify-content-center">
        <div class="row align-content-center">

            <!--This is header-->
            <div class="col-12">
                <div class="row">
                    <div class="col-12 logo"></div>
                    <div class="col-12">
                        <p class="text-center title01" style="font-family:honey;font-size: 30px;letter-spacing:
                         3px;">Hi,Welcome to eShop</p>
                    </div>
                </div>
            </div>
            <!--End of header-->

            <!--content-->
            <div class="col-12 p-3">
                <div class="row">
                    <div class="col-6 d-none d-lg-block background"></div>

                    <!--sign up-->
                    <div class="col-12 col-lg-6" id="SignUpBox">
                        <div class="row g-2">
                            <div class="col-12">
                                <p class="title02">Create New Account.</p>
                            </div>
                            <div class="col-12 d-none" id="msgdiv">
                                <div class="aler alert-danger" role="alert" id="msg"></div>
                            </div>
                            <div class="col-12">
                                <label class="form-label">First Name</label>
                                <input class="form-control" type="text" placeholder="ex: John" id="fname" />
                            </div>
                            <div class="col-6">
                                <label class="form-label">Last Name</label>
                                <input class="form-control" type="text" placeholder="ex: Doe" id="lname" />
                            </div>
                            <div class="col-6">
                                <label class="form-label">Email</label>
                                <input class="form-control" type="email" placeholder="ex: johndoe@gmail.com" id="email" />
                            </div>
                            <div class="col-6">
                                <label class="form=label">Password</label>
                                <input class="form-control" type="password" placeholder="ex: johndoe1234" id="password" />
                            </div>
                            <div class="col-6">
                                <label class="form-label">Gender</label>
                                <select class="form-control" id="gender">
                                    <option value="0">Select your Gender</option>
                                    <!--TODO-Add database logic here-->
                                </select>
                            </div>
                            <div class="col-12 col-lg-6 d-grid">
                                <button class="btn btn-primary" onclick="signUp();"> Sign Up</button>
                            </div>
                            <div class="col-12 col-lg-6 d-grid">
                                <button class="btn -btn-dark" onclick="ChangeView();">Already have an Account? Sign In</button>
                            </div>
                        </div>
                        <!--End of sign up-->

                        <!--sign in-->
                        <div class="col-12 col-lg-6 d-none" id="SignInBox">
                            <div class="col-12 col-lg-6 d-none" id="SignInBox">
                                <div class="row g-2">
                                    <div class="col-12">
                                        <p class="title02">Sign In to your Account.</p>
                                    </div>

                                    <?php $email = isset($_COOKIE["email"]) ? $_COOKIE["email"] : "";
                                    $password = isset($_COOKIE["password"]) ? $_COOKIE["password"] : ""; ?>

                                    <div class="col-12">
                                        <label class="form-label">Password</label>
                                        <input class="form-control" type="password" id="password2" value="<?php echo $password; ?>" placeholder="12345678" />
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="rememberme">
                                            <label class="form-check-label" for="rememberme">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <a href="#" class="link-primary" onclick="forgotPassword();"> Forgotten Password?</a>
                                    </div>
                                    <div class="col-12 col-lg-6 d-grid">
                                        <button class="btn btn-primary" onclick="signin();"> Sign In</button>
                                    </div>
                                    <div class="col-12 col-lg-6 d-grid">
                                        <button class="btn btn-danger" onclick="ChangeView();"> New to eshop? Join Now </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End of sign in-->
                    </div>
                </div>
                <!--End of content-->

                <!--modal-->
                <div class="modal" tabindex="-1" id="forgotPasswordModal">
                    <div class="modal-dialog">
                        <div class="modal-header">
                            <h5 class="modal-title">Forgot Password?</h5>
                            <button type="button" class="btn-close" data-bs-dismis="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-6">
                                    <label class="form-label">New Passeword</label>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" id="np" />
                                        <button class="btn btn-outline-secondary" type="button" id="npb" onclick="showPassword();">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Retype New Password</label>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" id="rnp" />
                                        <button class="btn btn-outline-secondary" type="button" id="rnpb" onclick="showPassword2();">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Verifiction Code</label>
                                        <input type="text" class="form-control" id="vc" />
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" onclick="resetPassword();">Reset Password</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of modal-->

                <!--footer-->
                <div class="col-12 d-none d-lg-block fixed-bottom">
                    <p class="text-center">&copy;2023 eshop.lk || ALL Rights Reserved</p>
                </div>
                <!--End of footer-->
            </div>
        </div>

        <!--scripts-->
        <script src="bootstrap.js"></script>
        <script src="script.js"></script> <!--TODO-->
</body>

</html>