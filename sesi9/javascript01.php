<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 - output</title>
</head>
<body>

    <div id="pesan">Letak Text dengan innerHTML</div>
    
    <script>
        document.write("Belajar Script JavaScript");
        alert("Belajar Script JavaScript");
        document.getElementById("pesan").innerHTML = "Text dibuat dari script javascript";
    </script>
</body>
</html>