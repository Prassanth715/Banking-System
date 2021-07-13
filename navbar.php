<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</head>
<header>
    <style>
        nav {
            position: fixed;
        }

        .navbar-custom {
            background-color: royalblue;
            height: auto;
        }

        .nav li {
            padding: 10px;
            font-size: 20px;
        }
    </style>




    <nav id="navigation" class="navbar navbar-expand-lg navbar-dark static-top scrolling-navbar navbar-nav  navbar-custom navbar-default" style="overflow-x: hidden;">
        <div class="container">
            <a class="navbar-brand" href="#" style="font-size: 30px;">
                <img src="https://img.icons8.com/emoji/96/000000/bank-emoji.png" width="50" height="50" class="d-inline block align-top" alt="">
                <b>SPARK BANK </b>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="index.php" style="color: white;">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="createuser.php" style="color: white;">Create User</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="transfermoney.php" style="color: white;">Transfer Money</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="transactionhistory.php" style="color: white;">Transaction History</a>
                    </li>
                </ul>


            </div>
        </div>

    </nav>

</header>