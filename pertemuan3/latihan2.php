<html>
<head>
<title>Contoh IF</title>
</head>

<body>
<form method="post">
Besar Pembelian :
<input type="text" name="total_beli"><br><br>
<input type="submit" value="Tentukan Diskon">
</form>

<?php
if (isset($_POST['total_beli'])) {

    $total_beli = intval($_POST['total_beli']);
    $diskon = 0;

    if ($total_beli >= 200000) {
        $diskon = 0.1;
    } elseif ($total_beli >= 100000) {
        $diskon = 0.05;
    } else {
        $diskon = 0.01;
    }

    $total_diskon = $diskon * $total_beli;
    $bayar = $total_beli - $total_diskon;

    echo "Diskon = $total_diskon <br>";
    echo "Pembayaran = $bayar <br>";
}
?>
</body>
</html>