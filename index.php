<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <title>DropShot - Transfer your files right at the moment!</title>
    <!-- <link rel="icon" href="defaultfavicon2.png">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
    <script>
        window.googletag = window.googletag || {cmd: []};
        googletag.cmd.push(function() {
            googletag
                .defineSlot(
                    '/6355419/Travel/Europe/France/Paris', [300, 250], 'banner-ad')
                .addService(googletag.pubads());
            googletag.enableServices();
        });

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
    </script>
</head>
<style>
    body {
        background-color: #222;
        /* font-family: 'Montserrat'; */
        /* background-color: black; */
        /* margin-top: 55px; */
    }
    /* @media (max-width: 979px) {
        body {
            padding-top: 0px;
        }
    } */
    table {
        border-collapse: collapse;
        width: 100%;
        background-color: white;
    }

    th {
        font-family: Lato-Bold;
        font-size: 15px;
        color: #00ad5f;
        line-height: 1.4;
        text-transform: uppercase;
        background-color: #393939;
        position: sticky;
        top: 0;
    }

    tr {
        /* box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); */
        font-family: Lato-Regular;
        font-size: 15px;
        color: gray;
        line-height: 1.4;
        background-color: #222222;
    }

    th, td {
        text-align: left;
        padding: 16px;
    }

    tr:nth-child(even) {
        background-color: #272727;
    }

    th:last-child,
    td:last-child,
    th:nth-last-child(2),
    td:nth-last-child(2) {
        text-align: right;
    }

    #text_help {
        color: #00ad5f;
        font-weight: bold;
        width: 100%;
        text-align: center; 
    }

    #text_help a {
        opacity: 0.4;
        transition: opacity 0.5s;
    }

    #text_help a:hover {
        opacity: 1;
        transition: opacity 0.5s;
    }

    /* #table_files {
        overflow-y: auto;
        max-width: 100%;
    } */

    .navbar-custom { 
        background-color: #393939;
    }
    .navbar-custom .navbar-brand,
    .navbar-custom .navbar-text { 
        color: white; 
        padding-top: 0px;
    }
    .navbar .navbar-brand img {
        height: 50px;
    }

    .navbar-custom .navbar-nav .nav-link {
        color: white;
    }

    .navbar-custom .nav-item.active .nav-link,
    .navbar-custom .nav-item:hover .nav-link {
        color: rgba(255, 255, 255, 0.6);
    }

    .custom-toggler .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
    }

    /* Firefox */
    input[type=number] {
    -moz-appearance: textfield;
    }

    .input_code {
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
</style>
<body>
    <nav class="navbar navbar-custom navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="appicon.png"></a>
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Storage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Create Tray</a>
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
                <form class="d-flex" method="get" name="form_code">
                    <input class="form-control me-2 input_code" type="number" tabindex="1" aria-label="Search" name="input_code1" onkeydown="if(event.keyCode!=8) { if(event.keyCode==13) { checkCodeValidity(); } else if(value.length == 1) { return false; } }" onkeyup="if(event.keyCode != 8) { if(value.length == 1) { document.form_code.elements[this.tabIndex].focus() } }">
                    <input class="form-control me-2 input_code" type="number" tabindex="2" aria-label="Search" name="input_code2" onkeydown="if(event.keyCode!=8) { if(event.keyCode==13) { checkCodeValidity(); } else if(value.length == 1) { return false; } }" onkeyup="if(event.keyCode != 8) { if(value.length == 1) { document.form_code.elements[this.tabIndex].focus() } } else { document.form_code.elements[this.tabIndex-2].focus() }">
                    <input class="form-control me-2 input_code" type="number" tabindex="3" aria-label="Search" name="input_code3" onkeydown="if(event.keyCode!=8) { if(event.keyCode==13) { checkCodeValidity(); } else if(value.length == 1) { return false; } }" onkeyup="if(event.keyCode != 8) { if(value.length == 1) { document.form_code.elements[this.tabIndex].focus() } } else { document.form_code.elements[this.tabIndex-2].focus() }">
                    <input class="form-control me-2 input_code" type="number" tabindex="4" aria-label="Search" name="input_code4" onkeydown="if(event.keyCode!=8) { if(event.keyCode==13) { checkCodeValidity(); } }" onkeyup="if(event.keyCode != 8) { if(value.length == 1) { checkCodeValidity(); } } else { document.form_code.elements[this.tabIndex-2].focus() }">
                </form>
            </div>
        </div>
    </nav>
    <!-- <div id="table_files">
        <table>  
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Filename</th>
                <th scope="col">Size</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tr class="spacer">
                <td>1</td>
                <td>Teszt.txt</td>
                <td>652.0 Bit</td>
                <td>
                    <form method="post" name="form_actions">
                        <input type="submit" class="btn btn-outline-primary" name="input_download" value="Download">
                        <input type="submit" class="btn btn-outline-danger" name="input_delete" value="Delete">
                    </form>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Teszt2.txt</td>
                <td>42143.0 Bit</td>
                <td>
                    <form method="post" name="form_actions">
                        <input type="submit" class="btn btn-outline-primary" name="input_download" value="Download">
                        <input type="submit" class="btn btn-outline-danger" name="input_delete" value="Delete">
                    </form>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Teszt3.txt</td>
                <td>24428341.0 Bit</td>
                <td>
                    <form method="post" name="form_actions">
                        <input type="submit" class="btn btn-outline-primary" name="input_download" value="Download">
                        <input type="submit" class="btn btn-outline-danger" name="input_delete" value="Delete">
                    </form>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>Teszt.txt</td>
                <td>652.0 Bit</td>
                <td>
                    <form method="post" name="form_actions">
                        <input type="submit" class="btn btn-outline-primary" name="input_download" value="Download">
                        <input type="submit" class="btn btn-outline-danger" name="input_delete" value="Delete">
                    </form>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Teszt2.txt</td>
                <td>42143.0 Bit</td>
                <td>
                    <form method="post" name="form_actions">
                        <input type="submit" class="btn btn-outline-primary" name="input_download" value="Download">
                        <input type="submit" class="btn btn-outline-danger" name="input_delete" value="Delete">
                    </form>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Teszt3.txt</td>
                <td>24428341.0 Bit</td>
                <td>
                    <form method="post" name="form_actions">
                        <input type="submit" class="btn btn-outline-primary" name="input_download" value="Download">
                        <input type="submit" class="btn btn-outline-danger" name="input_delete" value="Delete">
                    </form>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>Teszt.txt</td>
                <td>652.0 Bit</td>
                <td>
                    <form method="post" name="form_actions">
                        <input type="submit" class="btn btn-outline-primary" name="input_download" value="Download">
                        <input type="submit" class="btn btn-outline-danger" name="input_delete" value="Delete">
                    </form>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Teszt2.txt</td>
                <td>42143.0 Bit</td>
                <td>
                    <form method="post" name="form_actions">
                        <input type="submit" class="btn btn-outline-primary" name="input_download" value="Download">
                        <input type="submit" class="btn btn-outline-danger" name="input_delete" value="Delete">
                    </form>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Teszt3.txt</td>
                <td>24428341.0 Bit</td>
                <td>
                    <form method="post" name="form_actions">
                        <input type="submit" class="btn btn-outline-primary" name="input_download" value="Download">
                        <input type="submit" class="btn btn-outline-danger" name="input_delete" value="Delete">
                    </form>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>Teszt.txt</td>
                <td>652.0 Bit</td>
                <td>
                    <form method="post" name="form_actions">
                        <input type="submit" class="btn btn-outline-primary" name="input_download" value="Download">
                        <input type="submit" class="btn btn-outline-danger" name="input_delete" value="Delete">
                    </form>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Teszt2.txt</td>
                <td>42143.0 Bit</td>
                <td>
                    <form method="post" name="form_actions">
                        <input type="submit" class="btn btn-outline-primary" name="input_download" value="Download">
                        <input type="submit" class="btn btn-outline-danger" name="input_delete" value="Delete">
                    </form>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Teszt3.txt</td>
                <td>24428341.0 Bit</td>
                <td>
                    <form method="post" name="form_actions">
                        <input type="submit" class="btn btn-outline-primary" name="input_download" value="Download">
                        <input type="submit" class="btn btn-outline-danger" name="input_delete" value="Delete">
                    </form>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>Teszt.txt</td>
                <td>652.0 Bit</td>
                <td>
                    <form method="post" name="form_actions">
                        <input type="submit" class="btn btn-outline-primary" name="input_download" value="Download">
                        <input type="submit" class="btn btn-outline-danger" name="input_delete" value="Delete">
                    </form>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Teszt2.txt</td>
                <td>42143.0 Bit</td>
                <td>
                    <form method="post" name="form_actions">
                        <input type="submit" class="btn btn-outline-primary" name="input_download" value="Download">
                        <input type="submit" class="btn btn-outline-danger" name="input_delete" value="Delete">
                    </form>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Teszt3.txt</td>
                <td>24428341.0 Bit</td>
                <td>
                    <form method="post" name="form_actions">
                        <input type="submit" class="btn btn-outline-primary" name="input_download" value="Download">
                        <input type="submit" class="btn btn-outline-danger" name="input_delete" value="Delete">
                    </form>
                </td>
            </tr>
        </table>
    </div>
    <p id="text_help">
        Can't find a file? Let us <a href="#">help</a>
    </p>
    <lottie-player src="empty.json" class="centered" style="pointer-events: none; z-index: -1;" background="transparent" speed="1" autoplay></lottie-player>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
    <style>
        body {
            background-image: url("assets/images/bodybackground.png");
            background-repeat: no-repeat;
            background-position: top right;
            background-size: 70vw;
            max-width: 100%;
            max-height: 100%;
        }
        .navbar-custom { 
            /* background-color: #393939; */
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
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.4)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }

        .input_code {
            width: 1ch;
            border: 0;
            box-sizing: content-box;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.2);
            color: white
        }
        
        .input_code:focus {
            color: white;
            background-color: rgba(0, 0, 0, 0.2);
        }

        #label_form_code {
            margin-right: 10px;
            color: white
        }

        .centered {
            position: fixed; /* or absolute */
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
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

        .content {
            max-width: 100%;
            margin: 0;
            position: absolute;
            top: 50%;
            left: 20px;
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            z-index: -1;
        }
    </style>
    <script src="scripts/script.js"></script>
</head>
<body>
    <div class="modal fade" id="modal_invalidcode">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Invalid code</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                The code you have entered is invalid!
            </div>
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                <button type="button" class="btn btn-primary" tabindex="1" data-bs-dismiss="modal">Okay</button>
            </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_cookieacception">
        <div class="modal-dialog modal-dialog modal-dialog-scrollable role="document">
            <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Accept Cookie</h5>
            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
        </div>
        <div class="modal-body">
            <p>Modal body text goes here.</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="$('#modal_cookieacception').modal('hide')">About Cookies / Manage Settings</button>
            <button type="button" class="btn btn-primary" tabindex="1" onclick="$('#modal_cookieacception').modal('hide')">Accept</button>
        </div>
        </div>
        </div>
    </div>
    <nav class="navbar navbar-custom navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index"><img src="appicon.png"></a>
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" onclick="isTogglerOpen()">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Storage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="routes/traycreation">Create Tray</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About DropShot©
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">What is the point of this?</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="routes/help">Help Documentation</a></li>
                            <li><a class="dropdown-item" href="#">Terms of Policies</a></li>
                        </ul>
                    </li>
                </ul>
                <label for="form_code" id="label_form_code">Code for searched tray:</label>
                <form class="d-flex" method="post" name="form_code">
                    <input class="form-control me-2 input_code" type="number" tabindex="1" aria-label="Search" name="input_code1" onkeydown="if(event.keyCode!=8) { if(event.keyCode==13) { checkCodeValidity(); } else if(value.length == 1) { return false; } }" onkeyup="if(event.keyCode != 8) { if(value.length == 1) { document.form_code.elements[this.tabIndex].focus() } }">
                    <input class="form-control me-2 input_code" type="number" tabindex="2" aria-label="Search" name="input_code2" onkeydown="if(event.keyCode!=8) { if(event.keyCode==13) { checkCodeValidity(); } else if(value.length == 1) { return false; } }" onkeyup="if(event.keyCode != 8) { if(value.length == 1) { document.form_code.elements[this.tabIndex].focus() } } else { document.form_code.elements[this.tabIndex-2].focus() }">
                    <input class="form-control me-2 input_code" type="number" tabindex="3" aria-label="Search" name="input_code3" onkeydown="if(event.keyCode!=8) { if(event.keyCode==13) { checkCodeValidity(); } else if(value.length == 1) { return false; } }" onkeyup="if(event.keyCode != 8) { if(value.length == 1) { document.form_code.elements[this.tabIndex].focus() } } else { document.form_code.elements[this.tabIndex-2].focus() }">
                    <input class="form-control me-2 input_code" type="number" tabindex="4" aria-label="Search" name="input_code4" onkeydown="if(event.keyCode!=8) { if(event.keyCode==13) { checkCodeValidity(); } }" onkeyup="if(event.keyCode != 8) { if(value.length == 1) { checkCodeValidity(); } } else { document.form_code.elements[this.tabIndex-2].focus() }">
                </form>
            </div>
        </div>
    </nav>
    <div class="col-sm-4 content">
        <h1>Bored of transfering files through cloud or cable?</h1>
        <h3 style="font-weight: normal">This is what this page is for!</h3>
        <a href="routes/howtostart" style="color: black"><p>Okay great, but how do I start?</p></a>
        <div>
            <a href="routes/traycreation">
                <button class="btn btn-primary">
                    Create Tray
                </button>
            </a>
        </div>
    </div>
    <footer style="position: absolute; bottom: 10px; left: 10px;">
        Version 1.12
    </footer>
</body>
</html>