<?php
    if (isset($_POST['submit'])) {
        $from = $to = '';

        if (empty($_POST['from'])) {
            echo 'Pilih lokasi keberangkatan <br/>';
        } else {
            $from = htmlspecialchars($_POST['from']);
        }
        
        if (empty($_POST['to'])) {
            echo 'Pilih lokasi Tujuan <br/>';
        } else {
            $to = htmlspecialchars($_POST['to']);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tanggal</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="form">
            <div class="card-header">
                <h1>Select Departure Time</h1>
                <hr>
            </div>
            <form action="seat.php" method="post">
                <input type="text" name="from" value="<?php echo $from; ?>" hidden>
                <input type="text" name="to" value="<?php echo $to; ?>" hidden>
                <p>Choose class</p>
                <div class="time">
                    <span>
                        <input type="radio" name="class" value="Economy" id="economy">
                        <label for="economy">Economy</label>
                    </span>
                    <span>
                        <input type="radio" name="class" value="Business" id="business">
                        <label for="business">Business</label>
                    </span>
                    <span>
                        <input type="radio" name="class" value="Executive" id="executive">
                        <label for="executive">Executive</label>
                    </span>
                </div>

                <p>
                    <input type="date" name="date" id="date" require>
                </p>

                <div class="time">
                    <span>
                        <input type="radio" name="time" value="02:57" id="waktu1">
                        <label for="waktu1">02:57</label>
                    </span>
                    <span>
                        <input type="radio" name="time" value="03:25" id="waktu2">
                        <label for="waktu2">03:25</label>
                    </span>
                    <span>
                        <input type="radio" name="time" value="04:15" id="waktu3">
                        <label for="waktu3">04:15</label>
                    </span>
                    <span>
                        <input type="radio" name="time" value="07:48" id="waktu4">
                        <label for="waktu4">07:48</label>
                    </span>
                    <span>
                        <input type="radio" name="time" value="08:30" id="waktu5">
                        <label for="waktu5">08:30</label>
                    </span>
                    <span>
                        <input type="radio" name="time" value="12:30" id="waktu6">
                        <label for="waktu6">12:30</label>
                    </span>
                    <span>
                        <input type="radio" name="time" value="15:12" id="waktu7">
                        <label for="waktu7">15:12</label>
                    </span>
                    <span>
                        <input type="radio" name="time" value="17:02" id="waktu8">
                        <label for="waktu8">17:02</label>
                    </span>
                    <span>
                        <input type="radio" name="time" value="19:07" id="waktu9">
                        <label for="waktu9">19:07</label>
                    </span>
                    <span>
                        <input type="radio" name="time" value="20:08" id="waktu10">
                        <label for="waktu10">20:08</label>
                    </span>
                    <span>
                        <input type="radio" name="time" value="21:25" id="waktu11">
                        <label for="waktu11">21:25</label>
                    </span>
                    <span>
                        <input type="radio" name="time" value="23:30" id="waktu12">
                        <label for="waktu12">23:30</label>
                    </span>
                </div>

                <div class="btn-group">
                    <p>
                        <input class="btn-back" type="button" value="Back" onclick="goBack()">
                        <input class="btn" type="submit" value="Next" name="submit">
                    </p>
                </div>
            </form>
        </div>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>

</body>

</html>