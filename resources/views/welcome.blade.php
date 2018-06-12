<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Awesome People</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                font-weight: bold;
                color: #ffffff;
            }
            * {
                outline-width: 0;
                font-family: 'Raleway' !important;
            }

            #pageContainer {
                width: 100%;
                height: 100vh;
                background: url("/img/img.jpg") center fixed;
                background-size: cover;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            #formContainer {
                display: flex;
                border-radius: 3px;
                overflow: hidden;
                position: relative;
                height: 305px;
                transition: 0.3s ease;
                min-width: 492px;
                max-width: 492px;
            }
            #formContainer.switch {
                height: 368.4px;
            }

            #logo {
                background: #fff;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 10px 25px;
                box-sizing: border-box;
                width: 142px;
                transition: 0.5s cubic-bezier(1, 0, 0, 1);
            }
            #logo img {
                width: 84px;
                height: 84px;
                border-radius: 50%;
                border: 4px solid #ccc;
            }

            #forms {
                position: relative;
                overflow: hidden;
                transition: 0.5s cubic-bezier(1, 0, 0, 1);
            }
            #forms:before {
                content: "";
                background: url("https://images.pexels.com/photos/695644/pexels-photo-695644.jpeg") center fixed;
                background-size: cover;
                position: absolute;
                display: block;
                width: 150%;
                top: -20px;
                left: -20px;
                height: 150%;
                box-shadow: inset 0 0 0 300px rgba(0, 0, 0, 0.5);
                -webkit-filter: blur(10px);
                filter: blur(10px);
            }
            #forms form {
                position: relative;
                z-index: 2;
                padding: 25px;
                box-sizing: border-box;
                min-width: 350px;
                transition: 0.3s ease;
            }
            #forms.forgot {
                width: 0 !important;
                flex-basis: 0 !important;
            }

            #whyReg {
                position: absolute !important;
                background: #fff;
                z-index: 3 !important;
                padding: 58px 0 59px 0 !important;
                min-width: 0 !important;
                width: 0 !important;
                overflow: hidden;
                box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.4);
                transition-delay: 0.2s !important;
            }
            #whyReg h1 {
                color: #444;
            }
            #whyReg ul {
                padding: 0 15px;
                margin: 0;
            }
            #whyReg ul li {
                list-style: none;
                font-weight: 500;
                margin-bottom: 10px;
            }
            #whyReg a {
                color: #444;
                text-align: left;
                padding-left: 15px;
                font-size: 14px;
            }
            #whyReg .fadeUp {
                position: relative;
                top: 20px;
                opacity: 0;
                visibility: hidden;
                transition: 0.3s ease;
            }
            #whyReg.whyRegister {
                min-width: 350px !important;
                width: 350px !important;
                padding: 105px 25px 90px 25px !important;
                transition-delay: 0s !important;
            }
            #whyReg.whyRegister > .fadeUp {
                top: 0 !important;
                opacity: 1 !important;
                visibility: visible !important;
                transition-delay: 0.5s;
            }

            #forgot {
                position: absolute !important;
                background: #fff;
                z-index: 3 !important;
                padding: 58px 0 59px 0 !important;
                min-width: 0 !important;
                width: 0 !important;
                overflow: hidden;
                box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.4);
                transition-delay: 0.2s !important;
            }
            #forgot .fadeUp {
                position: relative;
                top: 20px;
                opacity: 0;
                visibility: hidden;
                transition: 0.3s ease;
            }
            #forgot h1 {
                color: #000000;
                font-size: 28px;
            }
            #forgot p {
                color: #000000;
            }
            #forgot input[type="email"] {
                color: #444;
                box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.2);
            }
            #forgot input[type="email"]:focus {
                box-shadow: inset 0 -2px 0 #444;
            }
            #forgot a {
                color: #444;
            }
            #forgot.forgot {
                min-width: 350px !important;
                width: 350px !important;
                padding: 60px 25px 61px 25px !important;
                transition-delay: 0s !important;
            }
            #forgot.forgot > .fadeUp {
                top: 0 !important;
                opacity: 1 !important;
                visibility: visible !important;
                transition-delay: 0.5s;
            }

            #login {
                position: relative;
                left: 0;
                transition-delay: 0.1s !important;
            }
            #login.switch {
                left: -350px;
                transition-delay: 0s !important;
            }

            #register {
                position: absolute !important;
                top: 0;
                right: -350px;
                transition-delay: 0s;
            }
            #register.switch {
                right: 0;
                transition-delay: 0.1s;
            }

            .formHead {
                padding-bottom: 15px;
                text-align: center;
            }
            .formHead h1 {
                margin: 0;
                color: #eee;
                font-weight: 400;
                font-size: 30px;
            }
            .formHead p {
                margin: 0;
                font-size: 12px;
                font-weight: bold;
                color: #ffffff;
                opacity: .5;
            }

            .formDiv {
                margin-bottom: 15px;
            }
            .formDiv input[type="text"], .formDiv input[type="email"], .formDiv input[type="password"] {
                background: transparent;
                border: none;
                width: 100%;
                box-sizing: border-box;
                box-shadow: inset 0 -1px 0 rgba(255, 255, 255, 0.4);
                padding: 15px;
                font-weight: bold;
                color: #fff;
                transition: 0.2s ease;
            }
            .formDiv input[type="text"]:focus, .formDiv input[type="email"]:focus, .formDiv input[type="password"]:focus {
                box-shadow: inset 0 -2px 0 #fff;
            }
            .formDiv input[type="submit"] {
                width: 100%;
                padding: 10px 0;
                color: #fff;
                font-weight: 500;
                border: none;
                background: cadetblue;
                border-radius: 3px;
                cursor: pointer;
                transition: 0.2s ease;
            }
            .formDiv input[type="submit"]:hover {
                background: #568e90;
            }

            .formOther {
                display: flex;
            }
            .formOther a {
                width: 50%;
                color: #fff;
                text-decoration: none;
                font-size: 10px;
                opacity: 0.5;
                font-weight: 700;
                text-align: center;
                transition: 0.2s ease;
            }
            .formOther a:hover {
                opacity: 1;
            }

        </style>
    </head>
    <body>
            <div class="content">
                <div id="pageContainer">
                    <div class="title">
                        Awesome People Inc.
                    </div>
                    <div id="formContainer">
                        <div id="logo">
                            <h2>Register to get your own publishing platform</h2>
                        </div>
                        <div id="forms">
                            <form id="whyReg">
                                <div class="fadeUp">
                                    <div class="formHead">
                                        <h1>WHY REGISTER?</h1>
                                    </div>
                                    <div class="formDiv">
                                        <ul>
                                            <li>Access to member only pages.</li>
                                            <li>Able to comment on any post to share your opinion.</li>
                                            <li>Able to download source code files.</li>
                                        </ul>
                                    </div>
                                    <div class="formOther"><a class="regBtn" href="#">Close</a></div>
                                </div>
                            </form>
                            <form id="forgot">
                                <div class="fadeUp">
                                    <div class="formHead">
                                        <h1>FORGOT PASSWORD?</h1>
                                        <p>Looks like you forgot your password</p>
                                    </div>
                                    <div class="formDiv">
                                        <input type="email" placeholder="Type your email"/>
                                    </div>
                                    <div class="formDiv">
                                        <input type="submit" value="SEND EMAIL"/>
                                    </div>
                                    <div class="formOther"><a class="backLoginF" href="#">BACK TO LOGIN</a><a href="#">CONTACT STAFF</a></div>
                                </div>
                            </form>
                            <form id="login">
                                <div class="formHead">
                                    <h1>WELCOME</h1>
                                    <p>Login</p>
                                </div>
                                <div class="formDiv">
                                    <input type="text" placeholder="Username" name="username"/>
                                </div>
                                <div class="formDiv">
                                    <input type="password" placeholder="Password" name="password"/>
                                </div>
                                <div class="formDiv">
                                    <input type="submit" value="LOGIN"/>
                                </div>
                                <div class="formOther"><a class="forgotBtn" href="#">FORGOT PASSWORD?</a><a class="needAccount" href="#">NEED AN ACCOUNT?</a></div>
                            </form>
                            <form id="register" method="post" action="{{ route('tenant.create') }}">
                                {{ csrf_field() }}
                                <div class="formHead">
                                    <h1>BECOME A BRO</h1>
                                    <p>Register to gain full access</p>
                                </div>
                                <div class="formDiv">
                                    <input type="text" placeholder="Portal Name" name="portalname"/>
                                </div>
                                <div class="formDiv">
                                    <input type="email" placeholder="Email" name="email"/>
                                </div>
                                <div class="formDiv">
                                    <input type="submit" value="REGISTER"/>
                                </div>
                                <div class="formOther"><a class="backLogin" href="#">BACK TO LOGIN</a><a class="regBtn" href="#">WHY REGISTER?</a></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script>
        // JQUERY
        $(function() {

            // Switch to Register
            $('.needAccount, .backLogin').click(function() {
                $('#login, #register, #formContainer').toggleClass('switch');
            });

            // Open Forgot Password
            $('.forgotBtn, .backLoginF').click(function() {
                $('#forgot').toggleClass('forgot');
            });

            // Open Why Register
            $('.regBtn').click(function() {
                $('#whyReg').toggleClass('whyRegister');
            });
        });
    </script>
    </body>
</html>
