{{-- <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <title>Login Apps</title>
</head>
<body>
<main>
    <div class="Login">
        <div class="Bg"></div>
        <img class="ImageHeader" src="https://img.freepik.com/free-vector/diabetes-composition-with-icons-blood-glucose-monitor-insulin-pills-with-apple-doodle-human-characters-vector-illustration_1284-83910.jpg?w=900&t=st=1696813154~exp=1696813754~hmac=cf2053eb5c716217e2e5ae1d7d807b4b19c2c90d5e270616ffb317a3c3f1d33d" alt="Image">
        <div class="LoginText">Login</div>
        <div class="Email">
            <div class="EmailLabel">Email</div>
            <div class="Rectangle11"></div>
        </div>
        <div class="Pw">
            <div class="Rectangle5176"></div>
            <img class="Vector" src="https://cdn2.iconfinder.com/data/icons/basic-user-interface-29/24/Eye_Eyes_See_View_Watch_Show_2-256.png" alt="eyes">
            <div class="PasswordLabel">Password</div>
            <div class="RememberMe">
                <div class="RememberMeLabel">Remember Me</div>
                <div class="Rectangle5175"></div>
            </div>
            <div class="ForgotPassword">Forgot Password?</div>
        </div>
        <div class="CreateAccount" style="left: 150px; top: 457px; position: absolute">
            <div class="Create">Create</div>
        </div>
            <div class="DonTHaveAnyAccount" style="left: 0px; top: 0px; position: absolute; color: #20992E; font-size: 14px; font-family: Poppins; font-weight: 300; word-wrap: break-word">Don’t have any account?</div>
        </div>
        <div class="ButtonSubmitLogReg" >
            <div class="Submit">Submit</div>
            <div class="Rectangle5177"></div>
        </div>

    </div>
</main>

<script src="assets/scripts/_init.js"></script>
<script src="assets/scripts/login-script.js"></script>
</body>
</html> --}}

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Login Apps</title>
</head>
<body>
<main>
    <div class="Login">
        <!-- Logo -->
        <img class="logo" src="https://img.freepik.com/free-vector/diabetes-composition-with-icons-blood-glucose-monitor-insulin-pills-with-apple-doodle-human-characters-vector-illustration_1284-83910.jpg?w=900&t=st=1696813154~exp=1696813754~hmac=cf2053eb5c716217e2e5ae1d7d807b4b19c2c90d5e270616ffb317a3c3f1d33d" alt="Image">

        <!-- Formulir login -->
        <div class="login-input">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email">

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password">

            <div class="RememberMe">
                <input type="checkbox" id="rememberMe" name="rememberMe">
                <label for="rememberMe">Remember Me</label>
            </div>

            <div class="ForgotPassword">
                <a href="#">Forgot Password?</a>
            </div>

            <button type="submit">Submit</button>
        </div>

        <!-- Create Account -->
        <div class="CreateAccount">
            <div>Don't have any account? <a href="#">Create</a></div>
        </div>
    </div>
</main>

<script src="assets/scripts/_init.js"></script>
<script src="assets/scripts/login-script.js"></script>
</body>
</html>
