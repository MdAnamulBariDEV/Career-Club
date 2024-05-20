<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <!-- Bootstrap css cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <!-- navbar start -->
    <nav class="navbar bg-light">
        <div class="container">
            <a href='index.php' class="navbar-brand">CareerClub</a>
            <div class="d-flex">
                <a href="admin_signup.php" class="btn btn-outline-success">Sign Up</a>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- Admin Credential Input Form Start -->
    <section>
        <div class="w-25 mx-auto">
            <form action="admin_loginProcess.php" method="post">
                <h2 class="text-center my-5">Admin Login</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="john@Doe.com" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-2">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" placeholder="******" class="form-control" id="exampleInputPassword1" required>
                </div>
                <div class="mb-3">
                    <label class="form-check-label">Forgot your password!</label>
                </div>
                <div class="d-grid">
                    <button type="submit" name="adminLogin" class="btn btn-primary">Login</button>
                </div>
                <div class="mt-3">
                    <label class="form-check-label">Don't Have any account? <a href="admin_signup.php">Sign Up</a></label>
                </div>
            </form>
        </div>
    </section>
    <!-- Admin Credential Input Form End -->


    <!-- php code -->
    <?php
    // Message show
    if (isset($_GET['signup_success'])) {
        echo $_GET['signup_success'];
    } elseif (isset($_GET['login_failed'])) {
        echo $_GET['login_failed'];
    }
    ?>


    <!-- Bootstrap Script CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>