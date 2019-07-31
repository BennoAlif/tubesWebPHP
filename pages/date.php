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
                <p>
                    <input type="date" name="date" id="date" require>
                </p>

                <div class="time" id="timeContainer">
                    <span>
                        <input type="radio" name="time" value="12:30" id="waktu1">
                        <label for="waktu1">12:30</label>
                    </span>
                    <span>
                        <input type="radio" name="time" value="12:00" id="waktu2">
                        <label for="waktu2">12:30</label>
                    </span>
                    <span>
                        <input type="radio" name="time" value="13:30" id="waktu3">
                        <label for="waktu3">12:30</label>
                    </span>
                    <span>
                        <input type="radio" name="time" value="13:00" id="waktu4">
                        <label for="waktu4">12:30</label>
                    </span>
                    <span>
                        <input type="radio" name="time" value="12:30" id="waktu5">
                        <label for="waktu5">12:30</label>
                    </span>
                    <span>
                        <input type="radio" name="time" value="12:00" id="waktu6">
                        <label for="waktu6">12:30</label>
                    </span>
                    <span>
                        <input type="radio" name="time" value="13:30" id="waktu7">
                        <label for="waktu7">12:30</label>
                    </span>
                    <span>
                        <input type="radio" name="time" value="13:00" id="waktu8">
                        <label for="waktu8">12:30</label>
                    </span>
                </div>
                
                <div class="btn-group">
                    <p>
                        <input class="btn-back" type="button" value="Back" onclick="goBack()">
                        <input class="btn" id="btnLanjut"type="submit" value="Next" name="submit" disabled>
                    </p>
                </div>
            </form>
        </div>
    </div>

    <script>
        let timeContainer=document.getElementById("timeContainer")
        let btnLanjut = document.getElementById("btnLanjut");
        
        timeContainer.addEventListener("input", ()=>{
                btnLanjut.disabled = false
        });
        window.onload = ()=>{
            document.getElementById('date').valueAsDate = new Date();


        }
        function goBack() {
            window.history.back();
        }
    </script>

</body>

</html>