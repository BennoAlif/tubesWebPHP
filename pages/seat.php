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
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="form">
            <div class="card-header">
                <h1>Select Your Seat</h1>
                <hr>
            </div>
            <form action="payment.php" method="POST" name="paymentForm">

                <input type="text" name="from" id="from" value="<?php echo $from; ?>" hidden>
                <input type="text" name="to" id="from" value="<?php echo $to; ?>" hidden>
                <input type="text" name="date" id="from" value="<?php echo $date; ?>" hidden>
                <input type="text" name="time" id="from" value="<?php echo $time; ?>" hidden>

                <div class="seats">
                    <div class="seat">
                        <span>
                            <input type="checkbox" name="A1" id="a1" onClick="price(this)">
                            <label for="a1">A1</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A2" id="a2" onClick="price(this)">
                            <label for="a2">A2</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A3" id="a3" onClick="price(this)">
                            <label for="a3">A3</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A4" id="a4" onClick="price(this)">
                            <label for="a4">A4</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A5" id="a5" onClick="price(this)">
                            <label for="a5">A5</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A6" id="a6" onClick="price(this)">
                            <label for="a6">A6</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A7" id="a7" onClick="price(this)">
                            <label for="a7">A7</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A8" id="a8" onClick="price(this)">
                            <label for="a8">A8</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A9" id="a9" onClick="price(this)">
                            <label for="a9">A9</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A10" id="a10" onClick="price(this)">
                            <label for="a10">A10</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A11" id="a11" onClick="price(this)">
                            <label for="a3">A11</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A12" id="a12" onClick="price(this)">
                            <label for="a12">A12</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A13" id="a13" onClick="price(this)">
                            <label for="a13">A13</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A14" id="a14" onClick="price(this)">
                            <label for="a14">A14</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A15" id="a15" onClick="price(this)">
                            <label for="a15">A15</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A16" id="a16" onClick="price(this)">
                            <label for="a16">A16</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A17" id="a17" onClick="price(this)">
                            <label for="a17">A17</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A18" id="a18" onClick="price(this)">
                            <label for="a18">A18</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A19" id="a19" onClick="price(this)">
                            <label for="a19">A19</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A20" id="a20" onClick="price(this)">
                            <label for="a20">A20</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A21" id="a21" onClick="price(this)">
                            <label for="a21">A21</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A22" id="a22" onClick="price(this)">
                            <label for="a22">A22</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A23" id="a23" onClick="price(this)">
                            <label for="a23">A23</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A24" id="a24" onClick="price(this)">
                            <label for="a24">A24</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A25" id="a25" onClick="price(this)">
                            <label for="a25">A25</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A26" id="a26" onClick="price(this)">
                            <label for="a26">A26</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A27" id="a27" onClick="price(this)">
                            <label for="a27">A27</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A28" id="a28" onClick="price(this)">
                            <label for="a28">A28</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A29" id="a29" onClick="price(this)">
                            <label for="a29">A29</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A30" id="a30" onClick="price(this)">
                            <label for="a30">A30</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A31" id="a31" onClick="price(this)">
                            <label for="a31">A31</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A32" id="a32" onClick="price(this)">
                            <label for="a32">A32</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A33" id="a33" onClick="price(this)">
                            <label for="a33">A33</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A34" id="a34" onClick="price(this)">
                            <label for="a34">A34</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A35" id="a35" onClick="price(this)">
                            <label for="a35">A35</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A36" id="a36" onClick="price(this)">
                            <label for="a36">A36</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A37" id="a37" onClick="price(this)">
                            <label for="a37">A37</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A38" id="a38" onClick="price(this)">
                            <label for="a38">A38</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A39" id="a39" onClick="price(this)">
                            <label for="a39">A39</label>
                        </span>
                        <span>
                            <input type="checkbox" name="A40" id="a40" onClick="price(this)">
                            <label for="a40">A40</label>
                        </span>
                    </div>
                    <div class="inputName">
                        <input type="text" name="NA1" id="na1" style="display:none">
                        <label style="display:none" for="na1" id="la1">Nama</label>
                        <input type="text" name="NA2" id="na2" style="display:none">
                        <label style="display:none" for="na2" id="la1">Nama</label>
                        <input type="text" name="NA3" id="na3" style="display:none">
                        <label style="display:none" for="na3" id="la1">Nama</label>
                        <input type="text" name="NA4" id="na4" style="display:none">
                        <label style="display:none" for="na4" id="la1">Nama</label>

                        <input type="text" name="NA5" id="na5" style="display:none">
                        <label style="display:none" for="na5" id="la1">Nama</label>
                        <input type="text" name="NA6" id="na6" style="display:none">
                        <label style="display:none" for="na6" id="la1">Nama</label>
                        <input type="text" name="NA7" id="na7" style="display:none">
                        <label style="display:none" for="na7" id="la1">Nama</label>
                        <input type="text" name="NA8" id="na8" style="display:none">
                        <label style="display:none" for="na8" id="la1">Nama</label>

                        <input type="text" name="NA9" id="na9" style="display:none">
                        <label style="display:none" for="na9" id="la1">Nama</label>
                        <input type="text" name="NA10" id="na10" style="display:none">
                        <label style="display:none" for="na10" id="la1">Nama</label>
                        <input type="text" name="NA11" id="na11" style="display:none">
                        <label style="display:none" for="na11" id="la1">Nama</label>
                        <input type="text" name="NA12" id="na12" style="display:none">
                        <label style="display:none" for="na12" id="la1">Nama</label>

                        <input type="text" name="NA13" id="na13" style="display:none">
                        <label style="display:none" for="na13" id="la1">Nama</label>
                        <input type="text" name="NA14" id="na14" style="display:none">
                        <label style="display:none" for="na14" id="la1">Nama</label>
                        <input type="text" name="NA15" id="na15" style="display:none">
                        <label style="display:none" for="na15" id="la1">Nama</label>
                        <input type="text" name="NA16" id="na16" style="display:none">
                        <label style="display:none" for="na16" id="la1">Nama</label>

                        <input type="text" name="NA17" id="na17" style="display:none">
                        <label style="display:none" for="na17" id="la1">Nama</label>
                        <input type="text" name="NA18" id="na18" style="display:none">
                        <label style="display:none" for="na18" id="la1">Nama</label>
                        <input type="text" name="NA19" id="na19" style="display:none">
                        <label style="display:none" for="na19" id="la1">Nama</label>
                        <input type="text" name="NA20" id="na20" style="display:none">
                        <label style="display:none" for="na4" id="la1">Nama</label>

                        <input type="text" name="NA21" id="na21" style="display:none">
                        <label style="display:none" for="na21" id="la1">Nama</label>
                        <input type="text" name="NA22" id="na22" style="display:none">
                        <label style="display:none" for="na22" id="la1">Nama</label>
                        <input type="text" name="NA23" id="na23" style="display:none">
                        <label style="display:none" for="na23" id="la1">Nama</label>
                        <input type="text" name="NA24" id="na24" style="display:none">
                        <label style="display:none" for="na24" id="la1">Nama</label>

                        <input type="text" name="NA25" id="na25" style="display:none">
                        <label style="display:none" for="na25" id="la1">Nama</label>
                        <input type="text" name="NA26" id="na26" style="display:none">
                        <label style="display:none" for="na26" id="la1">Nama</label>
                        <input type="text" name="NA27" id="na27" style="display:none">
                        <label style="display:none" for="na27" id="la1">Nama</label>
                        <input type="text" name="NA28" id="na28" style="display:none">
                        <label style="display:none" for="na28" id="la1">Nama</label>

                        <input type="text" name="NA29" id="na29" style="display:none">
                        <label style="display:none" for="na29" id="la1">Nama</label>
                        <input type="text" name="NA30" id="na30" style="display:none">
                        <label style="display:none" for="na30" id="la1">Nama</label>
                        <input type="text" name="NA31" id="na31" style="display:none">
                        <label style="display:none" for="na31" id="la1">Nama</label>
                        <input type="text" name="NA32" id="na32" style="display:none">
                        <label style="display:none" for="na32" id="la1">Nama</label>

                        <input type="text" name="NA33" id="na33" style="display:none">
                        <label style="display:none" for="na33" id="la1">Nama</label>
                        <input type="text" name="NA34" id="na34" style="display:none">
                        <label style="display:none" for="na34" id="la1">Nama</label>
                        <input type="text" name="NA35" id="na35" style="display:none">
                        <label style="display:none" for="na35" id="la1">Nama</label>
                        <input type="text" name="NA36" id="na36" style="display:none">
                        <label style="display:none" for="na36" id="la1">Nama</label>

                        <input type="text" name="NA37" id="na37" style="display:none">
                        <label style="display:none" for="na37" id="la1">Nama</label>
                        <input type="text" name="NA38" id="na38" style="display:none">
                        <label style="display:none" for="na38" id="la1">Nama</label>
                        <input type="text" name="NA39" id="na39" style="display:none">
                        <label style="display:none" for="na39" id="la1">Nama</label>
                        <input type="text" name="NA40" id="na40" style="display:none">
                        <label style="display:none" for="na40" id="la1">Nama</label>
                    </div>
                </div>
                <p>Total</p>
                <input type="text" name="total" id="total" require>
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
        var total
        total = 0;

        function price(e) {
            let nama = document.getElementById("n" + e.id);
            let label = document.getElementById("l" + e.id);

            if (e.checked) {
                nama.style.display = "inline-block"
                total = total + 150000
            } else {
                nama.style.display = "none"
                total = total - 150000
            }
            let inputTotal = document.getElementById('total');
            inputTotal.value = total
        }
        function goBack() {
            window.history.back();
        }
    </script>


</body>

</html>