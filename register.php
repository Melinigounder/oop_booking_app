<!DOCTYPE html>
<html lang="en">

<head>
    <!-- css -->
 <link rel="stylesheet" type="text/css"href="css/signup_css.css">
 <link rel="stylesheet" type="text/css"href="css/login_css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />
    <title>Register</title>
   
</head>

<body>
<div class="sign-up-form">
<img src="images/user.png">
<h1>Sign Up</h1>

    <div id="app-register">
        <header class="showcase">
              
        <!-- form -->

            <div class="showcase-content">
                <div class="formm">

                    
                    <div class="info">
                        <input class="input-box" type="email" v-model="input.username" placeholder="Email or phone number">
                        <br>
                        <input class="input-box" type="password" v-model="input.password" placeholder="Password"><br>
                        <input class="input-box" type="password" v-model="input.confirmpassword" placeholder="Confirm Password">
                    </div>
                    
                    <div class="btn">
                        <button class="reg-btn" v-on:click="register()">Sign Up</button>
                    </div>
                </div>
            </div>

        </header>
    </div>
</div>
 <!-- Vue Links -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <script src="https://unpkg.com/vue@2.6.14/dist/vue.js"></script>
<!-- Js Link -->
    <script src="js/register.js"></script>
</body>

</html>