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
            color: black
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
    </style>
    <script src="../scripts/script.js"></script>
</head>
<body>
    <nav class="navbar navbar-custom fixed-top navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index"><img src="../assets/images/appicon.png"></a>
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
                            <li><a class="dropdown-item" href="help">Help Documentation</a></li>
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
    <div class="container">
        <h1 style="text-align: center">Look who's here for help👀</h1>
        <h2>What is this?</h2>
            <p>This webpage can solve you one exact problem with file-transfering. The time it takes to transfer a file to your other device, or maybe to your friend can take up an eternity..<br>In the first place, whenever you want to send file to your friend, you try to upload, and send it via Messenger.
        <br><b>Why is it bad you ask?</b>
        <ol>
            <li>
                <h3>Messenger</h3>
                <p>You can upload only 25mb of data there, and some format aren't even supported. And of course you need to have an account. Like .sql files (We know it, we tried to send them under development😂)</p>
            </li>
            <li>
                <h3>OneDrive</h3>
                <p>Account required. If this is not enough, you need to upload your files before sending them via a link.</p>
            </li>
            <li>
                <h3>Google Drive</h3>
                <p>Same as the OneDrive</p>
            </li>
            <li>
                <h3>Discord</h3>
                <p>You need to have an account, and you can send only 8mb of data.</p>
            </li>
        </ol>
        <h2>Why is this good for us?</h2>
            <p>We don't need to store thousands of accounts, and of course we can use this platform as well.
        <h2>Do you collect any data?</h2>
            <p>What data?👀 Jokes aside we store the files which you have uploaded into your personal storage or into your tray. We keep the files in your tray, while the tray is alive(this can be up to 36 hours), beside of this, the files in your storages are stored while you don't delete them.<br>Of course we do store your preferred language, and theme. We do <b style="color: red; text-decoration: underline">not</b> sell your data</p>
        <h2>Why does this page has jokes in them? Doesn't it need to be formal?</h2>
            <p>It could be formal, but those help documents are boring🥱 And of course our help documentation writer doesn't know how to be formal.</p>
            <br>
        <h2>How can I help to make the product even better?</h2>
            <p>Glad you asked! You helped us a lot by just redirecting to our page🤗 Thank you. But if you want to help us on the field of the actual "production product", you can always leave us an idea, or a bug-report by reaching out to the <a href="support">support</a> (We do chats on the webpage, we answer you back approxiemately in 30 seconds). The second way to help us, is by allowing ads, to be showed up. Nowadays maintaining a webpage with a team is not cheap. Of course closing the trays you don't use anymore is another big help for us.</p>
            <br>
        <h1>Actual Help</h1>
        <h2>How does this work?</h2>
            <p>Our system works with trays. The maximum allowed traycount is 9999. This is why it is important to close unused trays.</p>
        <h2>How to transfer data?</h2>
            <p>By creating a tray, and uploading files onto them. You can create a tray right <a href="traycreation">here</a>.</p>
        <h2>How to recieve data?</h2>
            <p>If you, or your friend have created a tray, you will get a code, and a QR-code. QR-Codes can be scanned by using the mobile app, to store data of trays in the "noted trays" tab. If you get a tray-code, you can type it in on the right side of the navigation bar. If you can't find it, click <a style="color: blue; text-decoration: underline" onclick="document.form_code.elements[0].focus()">here</a> and start typing the code.</p>
        <h2>How to make trays secured?</h2>
            <p>We do encrypt every tray, and their content, because we value the privacy of your data, but besides of this, you can always type in a password, just in case if you or your friend can't recieve the tray right at the moment. Passwords can be only added whenever you create the tray. <b>But be aware</b>, if you forget it, you can only get the content of the tray back, if you name one exact file of the tray, at the <a href="support">support</a>.</p>
    </div>
    <footer>
        DropShot - 2021©
    </footer>
</body>
</html>