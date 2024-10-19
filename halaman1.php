<!DOCTYPE html>
<head>
    <title>Halamaan 1</title>
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
    <form method="post" action="halaman2.php">
        <h1>Input Nilai</h1>
        <table>
            <tr>
                <td>DDP</td>
                <td><input type="number" name="ddp"></td>
            </tr>
            <tr>
                <td>PTI</td>
                <td><input type="number" name="pti"></td>
            </tr>
            <tr>
                <td>ADS</td>
                <td><input type="number" name="asd"></td>
            </tr>
            <tr>
                <td>PBO</td>
                <td><input type="number" name="pbo"></td>
            </tr>
            <tr>
                <td>PW</td>
                <td><input type="number" name="pw"></td>
            </tr>
        </table>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>