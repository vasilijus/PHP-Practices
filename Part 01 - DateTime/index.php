<?php 


$date               = new DateTime('2021, May 15');
$dateInTwoWeeks     = new DateTime('+2 weeks');
$dateNextWeek       = new DateTime('next week');
$dateTomorrow       = new DateTime('tomorrow');

$row = '15. 5. 2020';
$date = DateTime::createFromFormat('d. m. Y', $row);

?>

<p> Date is: <?php echo $date->format('d-m-Y'); ?></p>
<p> Date in 2 weeks: <?php echo $dateInTwoWeeks->format('d-m-Y'); ?></p>
<p> Date next Week: <?php echo $dateNextWeek->format('d-m-Y'); ?></p>
<p> Date tomorrow <?php echo $dateTomorrow->format('d-m-Y'); ?></p>

<?php echo "=============="; ?>

<p> Creaed from string : <?php echo $date->format('d-m-Y'); ?></p>
