<?php 

// index array
$laptop = array("Apple","Dell","Lenovo","Asus","Hp","Acer");
print_r($laptop);
echo "<br>";
echo $laptop[1];


echo "<br>";

$fruits = [];
$fruits[0] = "Apple";
$fruits[1] = "Orange";
$fruits[2] = "Banana";
$fruits[3] = "Mango";
print_r($fruits);

// Associative Array
$students = [
    "name" => "Pyae Phyo Paing",
    "age" => 23,
    "year" => "second year",
    "email" => "paing.mdy.edu@gmail.com",
    "phone" => "09789643507",
];

print_r($students);
echo "<br>";
echo $students['name'];

foreach($students as $key=>$value){
    echo "<h1>$key is $value </h1>";
};

// Multidimensional Array
$foods = [
    "breakfast" => ["မုန့်ဟင်းခါး","နန်းကြီးသုပ်","ကောက်ညှင်းပေါင်း"],
    "lunch" => ["ရှမ်းထမင်း","ကြက်ဆီထမင်း"],
    "dinner" => ["ဆန်ပြားကြော်","ဒိန်ချဥ်","ထမင်းသုပ်"],
];
print_r($foods);
foreach($foods as $key => $value){
    foreach($value as $k => $v){
        echo "<h3>$v</h3>";
    }
}

// php code အတွင်းမှာ html code ရေးခြင်း
foreach($foods as $key => $items){
    echo "<h1>$key</h1>";
    echo "<ul>";
        foreach ($items as $item){
            echo "<li>$item</li>";
        }
    echo "</ul>";
}
?>

<!-- html code အတွင်းမှာ php code ရေးခြင်း -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    foreach($foods as $key => $value){
    ?>
    <h1><?php echo $key ?></h1>
    <ul>
        <?php foreach($value as $v){ ?>
            <li><?php echo $v ?></li>
            <?php } ?>
    </ul>
    <?php } ?>
</body>
</html>