<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <script src="https://kit.fontawesome.com/a1e5e20082.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <form action="signup.php" method="POST" enctype="multipart/form-data">
        <div id="first">
            <h2>Signup Form</h2>
            <div class="aa" id="user">
                <i class="fa-solid fa-user"></i>
                <input type="username" name="user" placeholder="Username" required>
            </div>
            <div class="aa" id="email">
                <i class="fa-solid fa-envelope"></i>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="aa" id="pass">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="pass" placeholder="New Password">
            </div>
            <div class="aa" id="repass">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="repass" placeholder="Re-type Password">
            </div>
            <div class="aa">
                <i class="fa-solid fa-file"></i>
                <input type="file" name="image" accept=".jpg, .png, .jpeg">
            </div>
            <div class="aa" id="buttom">
                <input type="submit" name="submit" value="Sign Up">
            </div>
        </div>
    </form>
</body>

</html>
