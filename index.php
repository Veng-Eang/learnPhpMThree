<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn Php</title>
</head>
<body>
<?php
/*
បង្កើតអថេរនឹងផ្ដល់តម្លៃដំបូងឱ្យវា
$ឈ្មោះអថេរ = តម្លៃដ៉បូង
*/
$num=123;
$char='a';
$str="abc";
$bol=false;
echo($num);
$a=11;
$b=22;
if($a>$b){
    echo"a is bigger than b";
}elseif($a==$b){
    echo"a is equal to b";
}else{
    echo"a is smaller than b";
}
$i=8;
switch($i){
    case 0:
        echo"i is equal 0";
    break;
    case 1:
        echo"i is equal 1";
    break;
    case 2:
        echo"i is equal 2";
    break;
    default:
        echo"i is bigger than 2";

}
for($i=0;;$i++){
    if($i>10){
        break;
    }
    echo"i=".$i."</br>";
}
$i=1;
while($i<=10){
    echo$i++."</br>";
}
function foo(){
    echo "";
}
?>
</body>
</html>