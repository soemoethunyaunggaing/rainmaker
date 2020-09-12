<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <!-- <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css"> -->
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

    <div class="container">
        
        <div class="login">
            <form action="{{route('login')}}" method="POST" class="login-form" id="appointment-form" autocomplete="off">
                <h2>Login to admin</h2>
                <div class="form-group-1">
                   
                    <input type="email" name="email" id="email" placeholder="Email" required />
                    <input type="password" name="password" id="password" placeholder="Password" required />
                  
                </div>
                <div class="form-check">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree to the  <a href="#" class="term-service">Terms and Conditions</a></label>
                </div>
                <div class="form-submit">
                    <button type="submit" class="submit" id="submit">login</button>
                    <!-- <input type="submit" name="submit" id="submit" class="submit" value="Request an appointment" /> -->
                </div>
            </form>
        </div>

    </div>

    <!-- JS -->
    <!-- <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script> -->
</body>
</html>