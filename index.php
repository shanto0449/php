<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $food ="pizza";
    $Food = "Burger";
    echo 'I love to eat ' .$food . '<br>';

    /*arrroffkfdff
    frfrrrfrttffr
    sfrggt
    ?>*/
    $age =27;
    echo 'My age is '.$age . '<br>';
   $x= 10;
   $y=20;
   echo $x+$y . '<br>';


   $name ='Ali';
   $name1=' Shanto';
   $age=30;
   $age1=30.2;
   $religion = true;
   $foods = array('apple','Banana','Plum');
   $null=null;
   var_dump($foods);

   class Phone {
    var $model;
    function phoneModel ($number){
        global $model;
        $model = $number;
        echo "This is $model <br>";
    }
   }

   $apple = new phone;
   $apple-> phoneModel('iphone13');
   $samsung = new phone;
   $samsung-> phoneModel('s24 ultra');

   echo strlen ('i to love eat pizza') .'<br>';
   echo str_word_count('i to love eat pizza').'<br>';

   echo str_replace('pizza','Burger', 'i love to eat pizza').'<br>';

   echo (pi()).'<br>';
   echo(min (0,10,20,50,60)) .'<br>';
   echo(sqrt(64)).'<br>';
   echo(round(pi())) .'<br>';
   echo(rand(1,10)).'<br>';

   define('a',17);
define('cars',[
    'BMW',
    'Toyota',
    'mazda'
]);
   echo (cars[0]);
   var_dump(cars) .'<br>';

   function name(){
    $x = 20;
    echo($x);
    echo(cars[1]) .'<br>';
   }
   name() ;

//    Arithmetic Operators dddd
$x=2;
$y=3;
$z=$x+$y;
echo $z .'<br>';

// php if and else
$date = date('H');
if(22<20){
    echo 'Good Morning';
} elseif(22<25){
    echo'nice day';
}
else{
   echo 'Have a nice day ';
}  ; 


// // Php switch statement
// switch('green'){
//     case'red':
//     echo 'Apple is red';
//     break;
//     case 'green':
//         echo 'mango is green';
//     break ;
//     default:
//     echo 'I love to eat fruots';


// }

// Php Loop

// $x = 0;
// while($x <= 5){
//     echo "The number is: $x <br> ";
//     $x++;
// }

// $x=2;
// do{
//     echo "The number is : $x <br>";
//     $x++;
// } while($x <= 5);

// for($y = 0; $y <= 10; $y+=5){
//  echo "the number is: $y <br>";
// }

// PHP function 
// function test_name(){
//     echo "This is funciton";
// }
// test_name();
function test_name(){
    echo "This is funciton : $name";
}
test_name("Shanto");


    ?>
</body>
</html>