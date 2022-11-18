<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
     <!-- css -->
    <link rel="stylesheet" type="text/css"href="css/login_css.css">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

<body>
   
<div class="sign-up-form">
<img src="images/user.png">
<h1>Login</h1>

<div id="app-login">
        

                    <!-- form -->
                    <div class="info">
                        <input required class="input-box" type="email" v-model="input.username" placeholder="Email or phone number">
                        <br>
                        <input required class="input-box" type="password" v-model="input.password" placeholder="Password">
                    </div>
                    <div class="btn">
                        <button class="reg-btn" v-on:click="login()">Login</button>
                    </div>
                    <div class="help">
                        <div>
                            <input value="true" type="checkbox"><label>Remember me</label>
                        </div>


                    </div>



                </div>

                <div class="signup">
                    <br>
                    <a href="register.php">Sign up now</a>
                </div>
            
            </div>
    </div>
</form>

     <!-- Vue Links -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <script src="https://unpkg.com/vue@2.6.14/dist/vue.js"></script>

     <!-- Js Link -->
    <script src="js/index.js"></script>

</body>

</html>