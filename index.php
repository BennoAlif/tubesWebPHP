<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BringMeTrain.com</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="card-header">
            <h1>BringMeTrain.com</h1>
            <hr />
        </div>
        <div class="form">
            <form action="pages/date.php" method="POST">
                <p>
                    <label for="kota1">Choose Departure</label>
                </p>
                <select name="from" id="kota1"></select>
                <p>
                    <label for="kota2">Choose Destination</label>
                </p>
                <select name="to" id="kota2"></select>

                <div class="btn-group">
                    <p>
                        <input class="btn" type="submit" value="Next" name="submit">
                    </p>
                </div>
            </form>
        </div>
    </div>
    <script>
        let listKota = ["Subang", "Jakarta", "Bandung"];
        let kotaAsal = document.getElementById("kota1");
        let kotaTujuan = document.getElementById("kota2");
        let kotas = kota1.children;
        window.onload = function () {
            for (i = 0; i < listKota.length; i++) {
                let item = document.createElement("option");
                item.value = listKota[i];
                item.text = listKota[i];
                kotaAsal.append(item);
            }
            for (i = 0; i < listKota.length - 1; i++) {
                let item = document.createElement("option");
                item.value = listKota[i + 1];
                item.text = listKota[i + 1];
                kotaTujuan.append(item);
            }
        };
        kotaAsal.onchange = () => {
            for (i = 0; i < listKota.length; i++) {
                kotaTujuan.remove(kotaTujuan.children[i]);

            }
            for (i = 0; i < listKota.length; i++) {
                let item = document.createElement("option");
                if (kotaAsal.value == listKota[i]) {
                    continue;
                } else {
                    item.value = listKota[i];
                    item.text = listKota[i];
                    kotaTujuan.append(item);
                }
            }
        };
    </script>
</body>

</html>