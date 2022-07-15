<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/styles.css"> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    
    @vite(['resources/css/app.css','resources/css/query.css', 'resources/js/app.js'])
</head>

<body style="background-color:#f8fafc;">
    <nav class="navbar navbar-expand-md shadow-sm p-0 mb-5 bg-white rounded">

        <a class="navbar-brand" href="#">
            <img style="margin-left: 2rem;" src="images/logo.png" width="100" height="auto" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link disabled" aria-current="page" href="#">Why Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-current="page" href="#">Curriculum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-current="page" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn1">Login</button>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn2">Get Free Trial</button>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container" style="margin-top: -5px;">
        <div class="row leftSection">
            <div class="col-7">
                <h2>Membership</h2>
                <p class="subtitle">Make your own plan and stay connected with Amar Bhasa Family.</p>
                <button type="button" class="btn3">Prepaid</button>
                <button type="button" class="btn4">Postpaid</button>
                <div class="container">
                    <div class="row">
                        <div class="col-5" style="padding-left: 0rem;">
                            <h3>Class per week</h3>
                            <p class="description">3 classes per week</p>
                        </div>
                        <div class="col-7">
                            <button type="button" class="btnC">1</button>
                            <button type="button" class="btnC">2</button>
                            <button type="button" class="btnC" style="background: #f58120; color:#ffffff;">3</button>
                            <button type="button" class="btnC">4</button>
                            <button type="button" class="btnC">5</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5" style="padding-left: 0rem;">
                            <h3>Number of month For membership</h3>
                            <p class="description">0 month membership</p>
                        </div>
                        <div class="col-7">
                            <button type="button" class="btnC">1</button>
                            <button type="button" class="btnC">2</button>
                            <button type="button" class="btnC">3</button>
                            <button type="button" class="btnC" style="color: #8ea0a1">4</button>
                            <button type="button" class="btnC" style="color: #8ea0a1">5</button>
                            <button type="button" class="btnC" style="color: #8ea0a1">6</button>
                            <button type="button" class="btnC" style="color: #8ea0a1">7</button>
                            <button type="button" class="btnC" style="color: #8ea0a1">8</button>
                            <button type="button" class="btnC" style="color: #8ea0a1">9</button>
                            <button type="button" class="btnC" style="color: #8ea0a1; padding: 8px 12px">10</button>
                            <button type="button" class="btnC" style="color: #8ea0a1; padding: 8px 12px">11</button>
                            <button type="button" class="btnC" style="color: #8ea0a1; padding: 8px 12px">12</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="padding-left: 0;">
                            <input type="checkbox" name="check" value="Yes">
                            <label for="check"> Turn on auto-renewal</label><br>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-1">
                <div class="vl"></div>
            </div>
            <div class="col">
                <div class="container rightSection">
                    <div class="row">
                        <div class="col" style="padding-left: 0rem;">
                            <p>Class per week</p>
                        </div>
                        <div class="col" style="padding-right: 0rem">
                            <p class="right">3</p>
                        </div>
                    </div>
                    <div class="row" style="padding-bottom: 2px;">
                        <div class="col-2" style="padding-left: 0rem;">
                            <p style="line-height: 100%;">Membership months</p>
                        </div>
                        <div class="col" style="padding-right: 0rem">
                            <p class="right">0</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="hl"></div>
                    </div>
                    <div class="row ">
                        <p class="price">0$</p>
                        <p class="perPrice">Per class</p>
                        <div class="container" style="padding-bottom: 0.5rem;">
                            <div class="row">
                                <div class="col" style="padding: 0">
                                    <p>Total class</p>
                                </div>
                                <div class="col" style="padding: 0">
                                    <p class="right">0$</p>
                                </div>
                            </div>
                        </div>
                        <p style="padding: 0; line-height: 1rem;">If you click on this button you will be redirect to
                            2checkout payment gateway</p>
                        <button type="button" class="block btnPay">Pay in USD</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button type="button" class="btnR"><img src="images/rotate-right-solid.svg" width="20" height="auto"
            alt=""></button>
    <p class="footer">Amar Vasha is a service by Tinkers Technologies Ltd</p>

</body>

</html>