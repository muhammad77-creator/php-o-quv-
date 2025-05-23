<form method="post">
    Son kiriting (raqamlar analizi): <input type="number" name="num">
    <input type="submit" value="Hisobla">
</form>

<?php
if (isset($_POST['num'])) {
    $n = abs((int)$_POST['num']);
    $juft = 0;
    $toq = 0;

    while ($n > 0) {
        $raqam = $n % 10;
        if ($raqam % 2 == 0) {
            $juft++;
        } else {
            $toq++;
        }
        $n = (int)($n / 10);
    }

    echo "<p>Juft raqamlar: $juft</p>";
    echo "<p>Toq raqamlar: $toq</p>";
}
?>
