<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sL Code Hub | Store | Login</title>
    <!-- style.css -->
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap.css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 shadow box-area">

            <!-- left -->
            <dir class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box " style="backdrop-filter: blur(20px);">
                <div class="featured-image mb-3">
                    <img src="img/b-img.png" class="img-fluid" style="width: 450px;">
                </div>

                <p class="text-black fs-2" style="font-family:'Courier New', Courier, monospace;
                font-weight:600;">sL Code <span style="color: red;">Hub</span>|store</p>

                <small class="text-black text-wrap text-center" style="width: 17rem; font-family:'Courier New', Courier, monospace;">
                    Join experienced Designers on this platform.</small>
            </dir>

            <!-- right -->

            <!-- signup box  -->
            <div class="col-md-6 right-box" id="signUp">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <a href="#" class="d-flex justify-content-center mb-4">
                            <img src="img/slcodehub.png" width="200">
                        </a>
                        <div class="text-center m5-5">
                            <h3 class="fw-bold">Create New Account</h3>
                            <p class="text-secondary">Get access to account</p>
                        </div>
                        <div class="col-12 d-none" id="msgDiv">
                            <div class="alert alert-danger" role="alert" id="msg"></div>
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text">
                                <ion-icon name="person-outline"></ion-icon>
                            </span>
                            <input type="text" class="form-control form-control-lg fs-6" placeholder="First Name">
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text">
                                <ion-icon name="person-outline"></ion-icon>
                            </span>
                            <input type="text" class="form-control form-control-lg fs-6" placeholder="Last Name">
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text">
                                <ion-icon name="call-outline"></ion-icon>
                            </span>
                            <input type="text" class="form-control form-control-lg fs-6" placeholder="Mobile">
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text">
                                <ion-icon name="mail-outline"></ion-icon>
                            </span>
                            <input type="email" class="form-control form-control-lg fs-6" placeholder="Email">
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text">
                                <ion-icon name="lock-closed-outline"></ion-icon>
                            </span>
                            <input type="password" class="form-control form-control-lg fs-6" placeholder="Password">
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-text">
                                <ion-icon name="male-female-outline"></ion-icon>
                            </span>
                            <select class="form-control" id="gender">
                                <!-- not link a Data Base  -->
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-lg btn-primary w-100 fs-6">Sign Up</button>
                        </div>
                        <div class="row">
                            <small>I have account <a href="#">Login</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ionic -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- bootstrap.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
