<?php
//q12
$arrayMarks=[40,50,45,60,50];
$mean= array_sum($arrayMarks) / count($arrayMarks);

echo count($arrayMarks);
echo "<br>";
echo array_sum($arrayMarks);
echo "<br>";
echo $mean;
echo "<br>";

//function
function calc($arrayMarks)
{
    $mean= array_sum($arrayMarks) / count($arrayMarks);
    echo $mean;
}
calc($arrayMarks);
echo "<br>";

//q13
$age=15;
if($age>=18)
{
    echo "Person is allowed to enter";
}
else
{
    echo "Person is not allowed to enter";
}
echo "<br>";
$password="ginger";

if($password==="ginger")
{
    echo "password is correct";
}
else
{
    echo "password is incorrect";
}
echo "<br>";

//q14
$random = (rand(0,15));
print("random number between 0 and 15 is: $random");
echo "<br>";
if($random===7)
{
    echo "You WON!";
}
else
{
    echo "You lost!";
}
echo "<br>";

//q15
$random1 = (rand(1,3));
print("random number between 1 and 3 is: $random1");
echo "<br>";
$random2 = (rand(1,3));
print("random number between 1 and 3 is: $random2");
echo "<br>";
$random3 = (rand(1,3));
print("random number between 1 and 3 is: $random3");

echo "<br>";

if($random1===$random2&&$random1===$random3&&$random2===$random3)
{
    echo "user won";
}
else
{
    echo "user didnt win";
}
echo "<br>";

//16
for($i=1;$i<=10;$i++)
{
    echo $i;
    echo"<br>";
}

echo "<br>";

for($a=10;$a>=1;$a--)
{
    echo $a;
    echo"<br>";
}

echo "<br>";
//q17
for($e=2;$e<=50;$e+=2)
{
    echo $e;
    echo "<br>";
}
echo "<br>";
//18
echo "For loop <br>";
for($b=1;$b<=10;$b++)
{
    echo $b;
    echo"<br>";
}
echo "<br>";
echo "While loop <br>";
$c=1;
while($c<=10)
{

    echo $c++;
    echo"<br>";
}
echo "<br>";
echo "Do While loop <br>";
$d=1;
do
{
    echo $d++;
    echo"<br>";
}
while($d<=10);

echo"<br>";
//q19
echo "For loop <br>";
$num=8;
for($f=1;$f<=10;$f++)
{
    echo "Multiple of $f is ".$f*$num;
    echo "<br>";
}
echo"<br>";
echo "While loop <br>";
$g=1;
while($g<=10)
{ 
    echo "Multiple of ".$g." is ".$g*$num;
    $g++;
    echo"<br>";
}
echo"<br>";
echo "Do loop <br>";
$h=1;
do
{
    echo "Multiple of ".$h." is ".$h*$num;
    $h++;
    echo"<br>";
}
while($h<=10);

//q20
$array=array();

for($n=0;$n<=9;$n++)
{
    $randoms = (rand(1,60));
    array_push($array,$randoms);
    echo "Array element $n.Value contained is $array[$n] <br>"; 
}

//foreach( $array as $value ) { 
//    echo "Array element is $value <br>"; 
//} 
//21

echo "<br>";
$h=6;
while($h<=20)
{ 
    echo $h;
    $h+=2;
    echo "<br>";
}
echo "<br>";
//q22
$h=100;
while($h>=0)
{ 
    echo $h;
    $h-=10;
    echo "<br>";
}
echo "<br>";
//q23
$j=6;
do
{
    echo $j;
    $j+=2;
    echo "<br>";
}
while($j<=20);
//q24
echo "<br>";
$k=100;
do
{
    echo $k;
    $k-=10;
    echo "<br>"; 
}
while($k>=0);
echo "<br>";
//q25
for($l=0;$l<=5;$l++)
{
    echo $l;
    echo "<br>";
}
//q26
echo "<br>";
$counter=1;
while(true)
{
    echo $counter++;
    echo "<br>";
    if($counter===10)
    {
        echo $counter;
        break; 
    }
}
echo "<br>";
echo "<br>";
//q27
for($m=0;$m<=4;$m++)
{
    if($m===2)
    {
        continue;
    }
    echo $m;   
}
echo "<br>";
//q28
$rand = (rand(1,10));
switch($rand){
    case 1:
        echo"Going to Las Vegas";
        break;
    case 2:
        echo"Going to Amsterdam";
        break;
    case 3:
        echo"Going to Egypt";
        break;
    case 4:
        echo "Going to Tokyo";
        break;
    default:
        echo"Going nowhere"; 

} 
?>