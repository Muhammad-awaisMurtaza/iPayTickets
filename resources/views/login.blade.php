<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <style>
        body {
    margin: 0;
    color: #6a6f8c;
    background: #c8c8c8;
    font: 600 16px/18px 'Open Sans', sans-serif
}

.login-box {
    width: 100%;
    margin: auto;
    max-width: 525px;
    min-height: 870px;
    position: relative;
    background: url(img/loginback.jpg) no-repeat center;
    box-shadow: 0 12px 15px 0 rgba(0, 0, 0, .24), 0 17px 50px 0 rgba(0, 0, 0, .19)
}

.login-snip {
    width: 100%;
    height: 100%;
    position: absolute;
    padding: 90px 70px 50px 70px;
    background: rgba(0, 77, 77, .9)
}

.login-snip .login,
.login-snip .sign-up-form {
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    position: absolute;
    transform: rotateY(180deg);
    backface-visibility: hidden;
    transition: all .4s linear
}

.login-snip .sign-in,
.login-snip .sign-up,
.login-space .group .check {
    display: none
}

.login-snip .tab,
.login-space .group .label,
.login-space .group .button {
    text-transform: uppercase
}

.login-snip .tab {
    font-size: 22px;
    margin-right: 15px;
    padding-bottom: 5px;
    margin: 0 15px 10px 0;
    display: inline-block;
    border-bottom: 2px solid transparent
}

.login-snip .sign-in:checked+.tab,
.login-snip .sign-up:checked+.tab {
    color: #fff;
    border-color: #1161ee
}

.login-space {
    min-height: 345px;
    position: relative;
    perspective: 1000px;
    transform-style: preserve-3d
}

.login-space .group {
    margin-bottom: 15px
}

.login-space .group .label,
.login-space .group .input,
.login-space .group .button {
    width: 100%;
    color: #fff;
    display: block
}

.login-space .group .input,
.login-space .group .button {
    border: none;
    padding: 15px 20px;
    border-radius: 25px;
    background: rgba(255, 255, 255, .1)
}

.login-space .group input[data-type="password"] {
    text-security: circle;
    -webkit-text-security: circle;
}

.login-space .group .label {
    color: #aaa;
    font-size: 12px
}

.login-space .group .button {
    background: #1161ee
}

.login-space .group label .icon {
    width: 15px;
    height: 15px;
    border-radius: 2px;
    position: relative;
    display: inline-block;
    background: rgba(255, 255, 255, .1)
}

.login-space .group label .icon:before,
.login-space .group label .icon:after {
    content: '';
    width: 10px;
    height: 2px;
    background: #fff;
    position: absolute;
    transition: all .2s ease-in-out 0s
}

.login-space .group label .icon:before {
    left: 3px;
    width: 5px;
    bottom: 6px;
    transform: scale(0) rotate(0)
}

.login-space .group label .icon:after {
    top: 6px;
    right: 0;
    transform: scale(0) rotate(0)
}

.login-space .group .check:checked+label {
    color: #fff
}

.login-space .group .check:checked+label .icon {
    background: #1161ee
}

.login-space .group .check:checked+label .icon:before {
    transform: scale(1) rotate(45deg)
}

.login-space .group .check:checked+label .icon:after {
    transform: scale(1) rotate(-45deg)
}

.login-snip .sign-in:checked+.tab+.sign-up+.tab+.login-space .login {
    transform: rotate(0)
}

.login-snip .sign-up:checked+.tab+.login-space .sign-up-form {
    transform: rotate(0)
}

*,
:after,
:before {
    box-sizing: border-box
}

.clearfix:after,
.clearfix:before {
    content: '';
    display: table
}

.clearfix:after {
    clear: both;
    display: block
}

a {
    color: inherit;
    text-decoration: none
}

.hr {
    height: 2px;
    margin: 60px 0 50px 0;
    background: rgba(255, 255, 255, .2)
}

.foot {
    text-align: center;


}

.card {
    width: 500px;
    left: 100px
}

::placeholder {
    color: #b3b3b3
}
    </style>
</head>
<body>
    <div class="row">
        <div class="col-md-6 mx-auto p-0">
            <div class="card">
                <div class="login-box">

                    <div class="login-snip">
                        @isset($e_msg) <div class="alert alert-danger">{{$e_msg}}</div> @endisset
                        @isset($msg) <div class="alert alert-success">{{$msg}}</div> @endisset

                         <input id="tab-1" type="radio" name="tab" class="sign-in"><label for="tab-1" class="tab">Login</label>
                         <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                        <div class="login-space">
                            <div class="login">
                                <form action="/signin" method="post">
                                    @csrf
                                <div class="group"> <label for="user" class="label">Username</label> <input id="user" required type="text" name="userName" class="input" placeholder="Enter your username"> </div>
                                <div class="group"> <label for="pass" class="label">Password</label> <input id="pass" required type="password" name="password" class="input" data-type="password" placeholder="Enter your password"> </div>
                                <div class="group"> <input id="check" name="remember" value="checkBox" type="checkbox" class="check"> <label for="check"><span class="icon"></span> Keep me Signed in</label> </div>
                                <div class="group"> <input type="submit" class="button" value="Sign In"> </div>
                                <div class="hr"></div>
                            </form>
                                <div class="foot"> <a href="#">Forgot Password?</a> </div>
                            </div>
                            <div class="sign-up-form">
                                <form action="/register" method="post">
                                    @csrf

                                <div class="group"> <label for="user" class="label">Username</label> <input id="user" name="userName" type="text" class="input" required placeholder="Create your Username"> </div>
                                <div class="group"> <label for="pass" class="label">Password</label> <input id="pass" type="password" name="password" required class="input" data-type="password" placeholder="Create your password"> </div>
                                <div class="group"> <label for="pass" class="label">Repeat Password</label> <input id="pass" type="password" required name="rPassword" class="input" data-type="password" placeholder="Repeat your password"> </div>
                                <div class="group"> <label for="pass" class="label">Email Address</label> <input id="pass" type="email" required class="input" name="email" placeholder="Enter your email address"> </div>
                                <div class="group"> <label for="pass" class="label">Licence Plate</label> <input id="pass" type="text" required class="input" name="licencePlate" placeholder="Enter your Licence Plate"> </div>
                                <div class="group"> <label for="pass" class="label">State Registered</label> <input id="pass" type="text" required class="input" name="state" placeholder="Enter your State Registered"> </div>

                                <div class="group"> <input type="submit" class="button" value="Sign Up"> </div>
                                <div class="hr"></div>
                                </form>
                                <div class="foot"> <label for="tab-1" style="color: white">Already Member?</label> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@isset($login)
    <script> var tab = document.getElementById('tab-1');tab.checked = true;</script>
@endisset
@isset($signup)<script>var tab = document.getElementById('tab-2');tab.checked = true;</script>@endisset


</html>