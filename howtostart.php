<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        body {
            margin-top: 100px;
        }
        
        .navbar-custom { 
            background-color: white;
        }
        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-text { 
            color: black; 
            padding-top: 0px;
        }
        .navbar .navbar-brand img {
            height: 50px;
        }

        .navbar-custom .navbar-nav .nav-link {
            color: black;
        }

        .navbar-custom .nav-item.active .nav-link,
        .navbar-custom .nav-item:hover .nav-link {
            color: rgba(0, 0, 0, 0.6);
        }

        .custom-toggler .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }

        .input_code {
            background-color: #f2f2f2;
            
            width: 1ch;
            border: 0;
            box-sizing: content-box;
            text-align: center;
        }

        .centered {
            position: fixed; /* or absolute */
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        footer {
            bottom: 0;
            width: 100%;
            text-align: center;
            min-height: 40px;
        }

        textarea:hover, 
        input:hover, 
        textarea:active, 
        input:active, 
        textarea:focus, 
        input:focus,
        button:focus,
        button:active,
        button:hover,
        label:focus,
        .btn:active,
        .btn.active
        {
            outline:0px !important;
            -webkit-appearance:none;
            box-shadow: none !important;
        }
        
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .container {
            text-align: justify;
            position: relative;
            min-height: 100vh;
        }

        .container h2 {
            margin-top: 40px;
        }

        .container p {
            font-size: 18pt;
        }

        .container ol {
            font-size: 22pt;
        }
        
        .steppercircle {

        }
    </style>
    <script>
        function checkCodeValidity() {
            var form = document.forms["form_code"];
            var input_code1 = form['input_code1'].value;
            var input_code2 = form['input_code2'].value;
            var input_code3 = form['input_code3'].value;
            var input_code4 = form['input_code4'].value;
            if(input_code1 != '' && input_code2 != '' && input_code3 != '' && input_code4 != '') {
                // alert("Valid code!")
                form.submit();
            } else {
                // alert("Invalid code!")
            }
        }

        window.onload = function () {
            var countDownDate = new Date("Mar 14, 2021 00:23:56").getTime();
            document.getElementById("trayExpirationTime").innerHTML = "CALCULATING..."
            var x = setInterval(function() {
                var now = new Date().getTime();
                var distance = countDownDate - now;
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                document.getElementById("trayExpirationTime").innerHTML =  days*24+hours.toString() + ":"
                + (minutes.toString().length == 1 ? "0" + minutes : minutes) + ":" + (seconds.toString().length == 1 ? "0" + seconds : seconds);
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("trayExpirationTime").innerHTML = "EXPIRED";
                }
            }, 1000);
        }

        $(document).ready(function () {
        $(".navbar-toggle").on("click", function () {
            $(this).toggleClass("active");
        });
        $(document).on('click',function(){
        if(!$(event.target).closest('.navbar-toggle').length) {
            if ($('.navbar-toggle').hasClass('active') ) {
                $('.collapse').collapse('hide');
                $(".navbar-toggle").toggleClass("active");
            }
            }
        });
        
        });
    </script>
</head>
<body>
    <nav class="navbar navbar-custom fixed-top navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index"><img src="appicon.png"></a>
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Storage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="traycreation">Create Tray</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About DropShot©
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">What is the point of this?</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="#">Terms of Policies</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <label for="form_code" style="margin-right: 10px; color: black">Code for searched tray:</label>
                <form class="d-flex" method="post" name="form_code">
                    <input class="form-control me-2 input_code" type="number" tabindex="1" aria-label="Search" name="input_code1" onkeydown="if(event.keyCode!=8) { if(event.keyCode==13) { checkCodeValidity(); } else if(value.length == 1) { return false; } }" onkeyup="if(event.keyCode != 8) { if(value.length == 1) { document.form_code.elements[this.tabIndex].focus() } }">
                    <input class="form-control me-2 input_code" type="number" tabindex="2" aria-label="Search" name="input_code2" onkeydown="if(event.keyCode!=8) { if(event.keyCode==13) { checkCodeValidity(); } else if(value.length == 1) { return false; } }" onkeyup="if(event.keyCode != 8) { if(value.length == 1) { document.form_code.elements[this.tabIndex].focus() } } else { document.form_code.elements[this.tabIndex-2].focus() }">
                    <input class="form-control me-2 input_code" type="number" tabindex="3" aria-label="Search" name="input_code3" onkeydown="if(event.keyCode!=8) { if(event.keyCode==13) { checkCodeValidity(); } else if(value.length == 1) { return false; } }" onkeyup="if(event.keyCode != 8) { if(value.length == 1) { document.form_code.elements[this.tabIndex].focus() } } else { document.form_code.elements[this.tabIndex-2].focus() }">
                    <input class="form-control me-2 input_code" type="number" tabindex="4" aria-label="Search" name="input_code4" onkeydown="if(event.keyCode!=8) { if(event.keyCode==13) { checkCodeValidity(); } }" onkeyup="if(event.keyCode != 8) { if(value.length == 1) { checkCodeValidity(); } } else { document.form_code.elements[this.tabIndex-2].focus() }">
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="steppercircle"></div>
            <h1 class="col-sm-8">Go to Tray Creation</h1>
        </div>
        <div class="row">
            <h1>Upload Files</h1>
        </div>
        <div class="row">
            <h1>Create Tray</h1>
        </div>
        <div class="row">
            <h1>Share Code</h1>
        </div>
    </div>
    <footer>
        DropShot - 2021©
    </footer>
</body>
</html>