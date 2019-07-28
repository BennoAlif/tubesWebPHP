<?php
    if (isset($_POST['submit'])) {
        $from = $to = $date = $time = '';
        $from = $_POST['from'];
        $to = $_POST['to'];
        $date = $_POST['date'];
        $time = $_POST['time'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seat</title>
</head>
<body>
    <form action="payment.php" method="POST">
        <input type="text" name="from" id="from" value="<?php echo $from; ?>" hidden>

        <input type="checkbox" name="A1" id="a1" onClick="price(this)"><label for="a1">A1</label>
        <input type="checkbox" name="A2" id="a2" onClick="price(this)"><label for="a2">A2</label>
        <input type="checkbox" name="A3" id="a3" onClick="price(this)"><label for="a3">A3</label>
        <input type="checkbox" name="A4" id="a4" onClick="price(this)"><label for="a4">A4</label>
        <input type="checkbox" name="A5" id="a5" onClick="price(this)"><label for="a5">A5</label>

        <label for="total">Total</label>
        <input type="text" name="total" id="total" require>
        <input type="submit" value="Lanjut" name="submit" onClick="check()">
    </form>

    <script>
        var total
        total = 0;
        
        function price(e) {
            if (e.checked) {
                total = total + 150000
            } else {
                total = total - 150000
            }            
            let inputTotal = document.getElementById('total');
            inputTotal.value = total            
        }
    </script>
</body>
</html>