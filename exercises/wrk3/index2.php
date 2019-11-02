<?php
echo"<h1>Bob's Auto Parts</h1>";
echo"<h3>Order Results</h3>";
echo "Order Processed ".date("H:i")." ".date("d M y");
echo "<br>Your order is as follows: <br><br>";

$tires=$_POST['tires'];
$oil=$_POST['oil'];
$plugs=$_POST['sparkPlugs'];
$select=$_POST['options'];

const t =100;
const o =10;
const sp =4;

function subtotal($tires,$oil,$plugs)
{
    $totalT=$tires*t;
    $totalO=$oil*o;
    $totalSP=$plugs*sp;
    $finalTotal=$totalT+$totalO+$totalSP;
    echo "Subtotal: $".$finalTotal;
}

function tax($subTotal)
{
 
    $total=$subTotal;
    echo "Total including TAX: ".$total;
}

if($tires==""&&$oil==""&&$plugs=="")
{
    echo "<b>You did not order anything on the previous page!</b>";
}
else
{

    //echo subtotal($tires,$oil,$plugs);
    $result=$tires+$oil+$plugs;
    echo "Items ordered: $result <br>";
    echo "$tires tires <br>";
    echo "$oil bottles of oil <br>";
    echo "$plugs spark plugs <br>";
    echo subtotal($tires,$oil,$plugs);
    echo"<br>";
    echo tax(0.15);
    echo"<br>";
    switch ($select) {
        case 'reg':
            echo 'regular customer';
            break;
        case 'ad':
            echo 'TV advertising';
            break;
        case 'phone':
            echo 'Phone directory';
            break;
        case 'mouth':
            echo 'Word of mouth';
            break;

    }
}

?>