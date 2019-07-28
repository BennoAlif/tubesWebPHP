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
    <meta name="viewport" contene.t="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seat</title>
</head>
<body>
    <form action="payment.php" method="POST" name="paymentForm">
        <input type="text" name="from" id="from" value="<?php echo $from; ?>" hidden>

        <input type="checkbox" name="A1" id="a1" onClick="price(this)" ><label for="a1">A1</label>
        <input type="checkbox" name="A2" id="a2" onClick="price(this)" onchange="dataEntry(this)"><label for="a2">A2</label>
        <input type="checkbox" name="A3" id="a3" onClick="price(this)"><label for="a3">A3</label>
        <input type="checkbox" name="A4" id="a4" onClick="price(this)"><label for="a4">A4</label>
        <input type="checkbox" name="A5" id="a5" onClick="price(this)"><label for="a5">A5</label>
        <input type="text" name="NA1" id="na1" style="display:none"><label style="display:none" for="na1" id="la1">Nama</label>
        <input type="text" name="NA2" id="na2" style="display:none"><label style="display:none" for="na2" id="la1">Nama</label>
        <input type="text" name="NA3" id="na3" style="display:none"><label style="display:none" for="na3" id="la1">Nama</label>
        <input type="text" name="NA4" id="na4" style="display:none"><label style="display:none" for="na4" id="la1">Nama</label>
        <input type="text" name="NA5" id="na5" style="display:none"><label style="display:none" for="na5" id="la1">Nama</label>
        <label for="total">Total</label>

        <input type="text" name="total" id="total" require>
        <input type="submit" value="Lanjut" name="submit" onClick="check()">
    </form>

    <script>
        var total
        total = 0;
        

        function price(e) {
            let nama = document.getElementById("n"+e.id);    
            let label = document.getElementById("l"+e.id); 
            if (e.checked) {
                nama.style.display = "";
                label.style.display = "";
                total = total + 150000
            } else {
                nama.style.display = "none";
                label.style.display = "none";
                total = total - 150000
            }            
            let inputTotal = document.getElementById('total');
            inputTotal.value = total            
            
        }



    
    </script>
</body>
</html>