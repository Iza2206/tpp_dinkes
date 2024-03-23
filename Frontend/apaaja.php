<?php
function Brithday($tanggal_lahir) {
    return date_diff(date_create($tanggal_lahir), 
    date_create('today'))->y;
}

$tanggal_lahir = '1999-03-20';
$umur = Brithday($tanggal_lahir);
echo "Beni, $umur tahun";
?>


<?php
function hitungUmur($tanggal_lahir) {
    return date_diff(date_create($tanggal_lahir), date_create('today'))->y;
}

echo "Beni, " . hitungUmur('1999-03-20') . " tahun";
?>

<?php
$tanggal_lahir = '1999-03-20';
$umur = date_diff(date_create($tanggal_lahir),
 date_create('today'))->y;

echo "Beni, 25 tahun";
?>




