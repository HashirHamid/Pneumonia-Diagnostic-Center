<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f10cd542d4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Home</title>
</head>
<body>
<form method="post" action="/login-user" id="loginForm">
    @csrf 
    @if(Session::has('fail'))
    <?php echo '<script>alert("You must be logged in!")</script>'?>
    @endif
    <div class="container">
        <div class="row">
            <a href="/" class="btn btn1" style="width: 10%">Back to home</a>
        </div>
    </div>
    <div class="container container1 card">
        <div class="row row1">
            <img src="{{asset('assets/3.png')}}" alt="" class="img">
            <hr>
            <div class="form1">
                <h2 class="text-center mt-5 fw-normal">
                    Log in
                </h2>
                <label for="email" class="form-label fw-bold">
                    Email
                </label>
                <input type="email" name="email" class="form-control" id="" onkeyup="validateEmail(this)">
                <span class="text-danger error-text email_error" style="display:block;"></span>

                <label for="password" class="form-label fw-bold mt-3" id="">
                    Password
                </label>
                <input type="password" name="password" class="form-control" onkeyup="validatePassword(this)">
                <span class="text-danger error-text password_error" style="display:block;"></span>

                <button type="submit" class="btn btn1 mt-5" id="button">
                    Log in
                </button>
                <p>
                    Not a user? <a href="/signup" style="color: blue;">Sign up</a>
                </p>
            </div>
        </div>
    </div>
</form>
<script type="text/javascript" src="{{asset('https://code.jquery.com/jquery-3.6.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/validation.js')}}"></script>
</body>
</html>