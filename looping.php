<?php 

// for loop
$a = 0;
$b = 0;
for($i = 0; $i < 5; $i++) { //i = 0,1,2,3,.....,15
    $a += 10; // a = 10 + 10
    $b += 5; //a = 5 + 5 + 5
}
echo "<h3>The looping end is a = $a and b = $b.</h3>";

// while loop
$j = 10;
$num = 50;
while($j < 10) {
    $num--;
    $j++;
}
echo "<h3>The looping end at j = $j and num = $num</h3>";

// do while loop
$k = 10;
$n = 50;
do {
    $k++;
    $n++;
}while($k < 10);
echo "<h3>The looping end at k = $k and n = $n</h3>";


// for each
$laptop = ["Apple","Dell","Hp","Asus","Lenovo"];
print_r($laptop);
foreach($laptop as $key => $value){
    echo "<h3>Key is $key and value is $value</h3>";
}
?>