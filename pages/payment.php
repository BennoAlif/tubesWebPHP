<?php
    if(isset($_POST['submit'])){
        $from = $_POST['from'];
        $to = $_POST['to'];
        $total = $_POST['total'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $class = $_POST['class'];
        $NA1 = $_POST['NA1'];
        $NA2 = $_POST['NA2'];
        $NA3 = $_POST['NA3'];
        $NA4 = $_POST['NA4'];
        $NA5 = $_POST['NA5'];
        $NA6 = $_POST['NA6'];
        $NA7 = $_POST['NA7'];
        $NA8 = $_POST['NA8'];
        $NA9 = $_POST['NA9'];
        $NA10 = $_POST['NA10'];
        $NA11 = $_POST['NA11'];
        $NA12 = $_POST['NA12'];
        $NA13 = $_POST['NA13'];
        $NA14 = $_POST['NA14'];
        $NA15 = $_POST['NA15'];
        $NA16 = $_POST['NA16'];
        $NA17 = $_POST['NA17'];
        $NA18 = $_POST['NA18'];
        $NA19 = $_POST['NA19'];
        $NA20 = $_POST['NA20'];
        $NA21 = $_POST['NA21'];
        $NA22 = $_POST['NA22'];
        $NA23 = $_POST['NA23'];
        $NA24 = $_POST['NA24'];
        $NA25 = $_POST['NA25'];
        $NA26 = $_POST['NA26'];
        $NA27 = $_POST['NA27'];
        $NA28 = $_POST['NA28'];
        $NA29 = $_POST['NA29'];
        $NA30 = $_POST['NA30'];
        $NA31 = $_POST['NA31'];
        $NA32 = $_POST['NA32'];
        $NA33 = $_POST['NA33'];
        $NA34 = $_POST['NA34'];
        $NA35 = $_POST['NA35'];
        $NA36 = $_POST['NA36'];
        $NA37 = $_POST['NA37'];
        $NA38 = $_POST['NA38'];
        $NA39 = $_POST['NA39'];
        $NA40 = $_POST['NA30'];
    }
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="form-details">
            <div class="card-header">
                <h1>Details Payment</h1>
                <hr>
            </div>
            <div class="details">
                <div class="names">
                    <h3>Passenger Name :</h3>
                    <p><?php echo $NA1 ?></p>
                    <p><?php echo $NA2 ?></p>
                    <p><?php echo $NA3 ?></p>
                    <p><?php echo $NA4 ?></p>
                    <p><?php echo $NA5 ?></p>
                    <p><?php echo $NA6 ?></p>
                    <p><?php echo $NA7 ?></p>
                    <p><?php echo $NA8 ?></p>
                    <p><?php echo $NA9 ?></p>
                    <p><?php echo $NA10 ?></p>
                    <p><?php echo $NA11 ?></p>
                    <p><?php echo $NA12 ?></p>
                    <p><?php echo $NA13 ?></p>
                    <p><?php echo $NA14 ?></p>
                    <p><?php echo $NA15 ?></p>
                    <p><?php echo $NA16 ?></p>
                    <p><?php echo $NA17 ?></p>
                    <p><?php echo $NA18 ?></p>
                    <p><?php echo $NA19 ?></p>
                    <p><?php echo $NA20 ?></p>
                    <p><?php echo $NA21 ?></p>
                    <p><?php echo $NA22 ?></p>
                    <p><?php echo $NA23 ?></p>
                    <p><?php echo $NA24 ?></p>
                    <p><?php echo $NA25 ?></p>
                    <p><?php echo $NA26 ?></p>
                    <p><?php echo $NA27 ?></p>
                    <p><?php echo $NA28 ?></p>
                    <p><?php echo $NA29 ?></p>
                    <p><?php echo $NA30 ?></p>
                    <p><?php echo $NA31 ?></p>
                    <p><?php echo $NA32 ?></p>
                    <p><?php echo $NA33 ?></p>
                    <p><?php echo $NA34 ?></p>
                    <p><?php echo $NA35 ?></p>
                    <p><?php echo $NA36 ?></p>
                    <p><?php echo $NA37 ?></p>
                    <p><?php echo $NA38 ?></p>
                    <p><?php echo $NA39 ?></p>
                    <p><?php echo $NA40 ?></p>
                </div>
                <div class="destination">
                    <h3>Class : <?php echo $class; ?></h3>
                    <h3>Destination :</h3>
                    <h4>From</h4>
                    <p><?php echo $from ?></p>
                    <h4>To</h4>
                    <p><?php echo $to ?></p>
                </div>
                <div class="at">
                    <h3>Departure Time</h3>
                    <p><?php echo $date ?></p>
                    <h4>at</h4>
                    <p><?php echo $time ?></p>
                </div>
            </div>
            <div class="btn-group-payment">
                <p>
                    <button class="btn-back" onclick="goBack()">Back</button>
                    <a class="btn" href="../index.php">Home</a>
                    <button class="Print" onclick="window.print()">Print</button>
                </p>
            </div>
        </div>
    </div>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>

</html>