<?php 


$serg = new DateTime('January 13, 1988');
$mike = new DateTime('May 24, 1987');

// who is older ?

if ($serg < $mike) {
    echo "Serg is older";
} else {
    echo "Mike is Older";
}


// age diffrence 

$diff = $serg->diff($mike);
// OlderDateInterval Object ( 
//  [y] => 0 [m] => 7 [d] => 20 [h] => 0 [i] => 0 [s] => 0 [f] => 0 
//  [weekday] => 0 [weekday_behavior] => 0 [first_last_day_of] => 0 
//  [invert] => 1 [days] => 234 [special_type] => 0 [special_amount] => 0 
//  [have_weekday_relative] => 0 [have_special_relative] => 0 ) 
print_r( $diff );

echo $diff->format("There is %y years , and %m monts and %d days Diffrence Between S and M");

?>
