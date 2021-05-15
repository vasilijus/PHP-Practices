<?php 

// $publishDate = $_POST['date_registered'];
$publishDate = "2021-05-15 13:24:00";


$utcDateTime = new DateTime( $publishDate, new DateTimeZone('UTC') );

$localDateTime = clone $utcDateTime;

$localDateTime->setTimeZone( new DateTimeZone('Europe/Moscow') );

?>

<?php
// DateTime Object ( [date] => 2020-10-15 12:43:00.000000 [timezone_type] => 3 [timezone] => UTC )
// print_r($utcDateTime); 
?>

<p>The UTC date/time is: <?php echo $utcDateTime->format('d-m-Y : H-i-s'); ?></p>

<?php
// DateTime Object ( [date] => 2020-10-15 15:43:00.000000 [timezone_type] => 3 [timezone] => Europe/Moscow )
// print_r($localDateTime->setTimeZone( new DateTimeZone('Europe/Moscow') )); 
?>

<p>The Moscow date/time is: <?php echo $localDateTime->format('d-m-Y : H-i-s'); ?></p>
