<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Grandstander:ital,wght@1,300;1,400;1,600&display=swap" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Akronim' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Eater' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Passero One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Oleo Script Swash Caps' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Eczar:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Jomhuria&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="./script.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<?php
include 'navbar.php';
?>

<body style="background-image: url(bg/sky2.jpg); background-size:cover">

    <div class="container">
        <h2 class="text-center pt-4" style="color : navy;">Transaction History</h2>
        <br>
        <div class="row">
            <div class="col">
                <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead style="color : white;">
                            <tr>
                                <th scope="col" class="text-center py-2 bg-info">S/No</th>
                                <th scope="col" class="text-center py-2 bg-info">Sender</th>
                                <th scope="col" class="text-center py-2 bg-info">Receiver</th>
                                <th scope="col" class="text-center py-2 bg-info">Amount</th>
                                <th scope="col" class="text-center py-2 bg-info">Date and Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'config.php';
                            $sql = "SELECT * FROM transaction";
                            $query = mysqli_query($conn, $sql);
                            while ($rows = mysqli_fetch_assoc($query)) {
                            ?>
                                <tr style="color : navy;">
                                    <td scope="col" class="text-center py-2"><?php echo $rows['sno'] ?></td>
                                    <td scope="col" class="text-center py-2"><?php echo $rows['sender'] ?></td>
                                    <td scope="col" class="text-center py-2"><?php echo $rows['receiver'] ?></td>
                                    <td scope="col" class="text-center py-2"><?php echo $rows['balance'] ?></td>
                                    <td scope="col" class="text-center py-2"><?php echo $rows['datetime'] ?></td>
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <style>
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
    </style>


</body>

</html>