<!DOCTYPE html>
<head>
    <title>Halaman 2 </title>
    <style>
        body{
    font-family: 'Courier New', Courier, monospace;
    background-color: #1e1e1e;
    color: #fff;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: radial-gradient(circle,#333333, #000000);
}
h2{
    text-align: center;
    font-family: 'Arial Black', Gadget,sans-serif;
    letter-spacing: 2px;
    color: #ff4081;
    text-shadow: 2px 2px #000;
    margin-bottom: 20px;
}
table{
    width: 80%;
    border-collapse: collapse;
    background-color: #2c2c2c;
    border: 2px solid #ff4081;
    margin: 0 auto;
}
td{
    padding: 15px;
    text-align: center;
    color: #b3b3b3;
    border: 1px solid #ff4081;

}
table tr:nth-child(even){
    background-color: #333;
}
table tr:hover{
    background-color: #ff4081;
    color: #fff;
}
.container{
    max-width: 600px;
    margin : 0 auto;
    text-align: center;
}
    </style>
</head>
<body>
    <div class="container">
    <?php
        function grading($nilai){
            if ($nilai < 0 || $nilai > 100) {
            echo "<script>alert('inputan salah!');</script>";
            return "inputan salah!";
        }elseif($nilai < 50){
            return "E";
        }elseif($nilai >= 51 && $nilai <= 60){
            return "D";
        }elseif($nilai >= 61 && $nilai <= 70){
            return "C";
        }elseif($nilai >= 71 && $nilai <= 80){
            return "B";
        }elseif($nilai >= 81 && $nilai <= 100){
            return "A";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $ddp = $_POST['ddp'];
        $pti = $_POST['pti'];
        $asd = $_POST['asd'];
        $pbo = $_POST['pbo'];
        $pw = $_POST['pw'];

        echo "<h2>Hasil Nilai </h2>";
        echo "<table>";
        echo "<tr><td>DDP</td><td>". grading($ddp) . "</td></tr>";
        echo "<tr><td>PTI</td><td>". grading($pti) . "</td></tr>";
        echo "<tr><td>ASD</td><td>". grading($asd) . "</td></tr>";
        echo "<tr><td>PBO</td><td>". grading($pbo) . "</td></tr>";
        echo "<tr><td>PW</td><td>". grading($pw) . "</td></tr>";
        echo "</table>";
    }
    ?> 
    </div>
</body>
</html>