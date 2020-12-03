<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        body {
            background-color: grey;
        }
    </style>
    <title>Sign In</title>
</head>
<body>
    <!-- <h1>Hello</h1> -->

    <div class="container">
        <form action="signin" id="signin" method="POST">
            @csrf
            <input type="email" name="usermail" id="" placeholder="Your Email">
            <input type="password" name="userpwd" id="" placeholder="Password">


            <p>
                <label for="">
                    <input type="checkbox" name="" id="" class="filled-in"/>
                    <span>Keep me logged in</span>
                </label>
            </p>

            <!-- <input type="checkbox" name="keepSignedIn" id=""> -->
            <button class="btn waves-effect waves-light grey darken-4" type="submit">Log In</button>
        </form>


        

        
        <button class="btn waves-effect waves-light teal darken-3 right"><a href="signup">Sign Up</a></button>


        <div class="">
                <a href="#">Forgot Password?</a>
        </div>

    </div>
</body>
</html>