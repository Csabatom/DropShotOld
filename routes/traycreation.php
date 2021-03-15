<!DOCTYPE html>
<html lang="en" ondrop="upload_file(event)" ondragover="return false">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <title>DropShot - Transfer your files right at the moment!</title>
    <link rel="icon" href="defaultfavicon2.png">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
    <script src="../scripts/script.js"></script>
</head>
<style>
    body {
        background-color: white;
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
        color: #FF481F;
        line-height: 1.4;
        text-transform: uppercase;
        background-color: white;
        position: sticky;
        top: 0;
    }

    tr {
        /* box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); */
        font-family: Lato-Regular;
        font-size: 15px;
        color: gray;
        line-height: 1.4;
        background-color: #f2f2f2;
    }

    th, td {
        text-align: left;
        padding: 16px;
    }

    tr:nth-child(even) {
        background-color: #ffffff;
    }

    th:last-child,
    td:last-child,
    th:nth-last-child(2),
    td:nth-last-child(2) {
        text-align: right;
    }

    .text_help {
        color: #FF481F;
        font-weight: bold;
        width: 100%;
        text-align: center;
    }

    .text_help a {
        color: #FF481F;
        opacity: 1;
        transition: opacity 0.2s;
    }

    .text_help a:hover {
        color: #FF481F;
        opacity: 0.4;
        transition: opacity 0.2s;
    }

    footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 2.5rem;
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

    #drop_file_zone {
        top:0;
        left:0;
        bottom:0;
        right:0;
        height:100%;
        width:100%;
        position: absolute;
        pointer-events: all;
        /* padding: 8px;
        font-size: 18px;
        z-index: 2;
        opacity: 0;
        background-color: transparent;
        transition: opacity 0.3s;
        position: relative */
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
    <div class="centered" id="emptyTableAnimation">
        <lottie-player src="../assets/animations/empty.json" style="pointer-events: none;" background="transparent" speed="1" autoplay></lottie-player>
        <div class="text_help">Drop files, or click <a href="">here</a></div>
    </div>
    <!-- <div id="drop_file_zone"></div> -->
    <div>
        <table id="table_files">  
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Filename</th>
                <th scope="col">Size</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <!-- <tr class="spacer">
                <td>1</td>
                <td>Teszt.txt</td>
                <td>652.0 Bit</td>
                <td>
                    <form method="post" name="form_actions">
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
                        <input type="submit" class="btn btn-outline-danger" name="input_delete" value="Delete">
                    </form>
                </td>
            </tr> -->
        </table>
        
    </div>
    <footer class="text_help">
        Something's not right? Let us <a href="#">help</a> via chat
    </footer>
    <!-- <lottie-player src="empty.json" class="centered" style="pointer-events: none; z-index: -1;" background="transparent" speed="1" autoplay></lottie-player> -->
</body>
</html>