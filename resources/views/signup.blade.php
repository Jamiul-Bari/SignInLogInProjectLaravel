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
    <title>Sign Up</title>
</head>
<body>
    <div class="container">
        <div class="card grey darker-2">
            <div class="card-content white-text">

                <form action="signup" method="POST">
                    @csrf
                    <div>
                        <input type="text" name="first_name" id="first_name" placeholder="First name"/>
                    </div>

                    <div>
                        <input type="text" name="last_name" id="last_name" placeholder="Last name" required />
                    </div>

                            <div>
                                <input type="email" name="email" id="email" placeholder="Email address" required />
                            </div>

                            <div>
                                <input type="tel" name="phone" id="phone" placeholder="Phone number" required />
                            </div>

                            <div>
                                <input type="password" name="password" id="password" placeholder="Password" required />
                            </div>

                            <div>
                                <label for="date">Date of birth</label><br />
                                <input type="date" name="dob" id="date" />
                            </div>

                            Gender

                            <div>
                                <p>
                                    <label>
                                        <input name="gender" type="radio" id="male" required>
                                        <span>Male</span>
                                    </label>
                                </p>
                                <p>
                                    <label>
                                        <input name="gender" type="radio" id="female" required>
                                        <span>Female</span>
                                    </label>
                                </p>
                            </div>

                            <button type="submit" class="btn waves-effect waves-light teal darken-3">Submit</button>
                </form>

                <div class="card-action">
                            <div class="container center">
                                
                            </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>