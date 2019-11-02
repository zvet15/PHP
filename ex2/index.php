<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Intro to PHP</title>
  </head>
  <body>
    <h1>Intro to PHP</h1>

    <?php
        //your PHP code goes here :D
        echo "Hello World!";
        print("<br/>Hello Again :D");
        echo "<br/>Hello my name is \"Owen\"";
        //OR:
        echo '<br/>Hello, my name is "Owen"';

        //creating a new variable called 'myName', it's value is "Owen"
        $myName = "Owen";

        //floating point number
        $newXiaomiMi9Price = 499.99;

        //boolean variables
        $morning = true;
        $evening = false;

        //integer variable
        $yearOfBirth = 1994;

        //null variable (empty)
        $myEmptyVar = null;

        //array variable
        $myUnits = ["Server Side Scripting", "Securing Applications", "Client Side Scripting", "Low Level Programming II", "Critical Thinking", "Entrepreneurship"];


        echo "<br><br>This is my name: $myName. I was born in year $yearOfBirth and I just bought a new Xiaomi Mi 9";
        echo "<br>The price of a new Xiaomi Mi 9 is: &euro;$newXiaomiMi9Price";

        echo "<br/><br/>";
        echo "<br/><h2>Debug Variables</h2>";
        echo '$myName variable<br/>';
        var_dump($myName);

        echo "<br/><br/>";
        echo '$newXiaomiMi9Price variable<br/>';
        var_dump($newXiaomiMi9Price);

        echo "<br/><br/>";
        echo '&morning variable<br/>';
        var_dump($morning);

        echo "<br/><br/>";
        echo '$yearOfBirth variable<br/>';
        var_dump($yearOfBirth);

        echo "<br/><br/>";
        echo '$myEmptyVar variable<br/>';
        var_dump($myEmptyVar);

        echo "<br/><br/>";
        echo '$myUnits variable <br/>';
        var_dump($myUnits);

        echo "<hr/>";
        echo "<h2>Constants</h2>";

        //create a new constant called 'VAT_RATE' and assign the value 0.18 (18%)
        //constant names should be in UPPERCASE
        define("VAR_RATE", 0.18);

        echo "The vat rate in Malta is ".(VAR_RATE*100)."%";

        echo "<hr/>";
        echo "<h2>Operators</h2>";
        $a = 6;
        $b = 3;
        $c = 2;

        echo "Addition of $a and $b: ".($a+$b)."<br/>";
        echo "Multiplication of $a and $b: ".($a*$b)."<br/>";
        echo "Divide $a by $b: ".($a/$b)."<br/>";
        echo "Subtract $b from $a: ".($a-$b)."<br/>";
        echo "Mod (remainder) $b / $c: ".($b%$c)."<br/>";
    ?>

    <h2>Arrays</h2>

    <?php
      //breakfast, lunc and diner are the KEYS to thsi array
      //cereal, pasta and ribeye are the values to each key respectively
      $myMenu = array("breakfast" => "cereal", "lunch" => "pasta", "dinner" => "ribeye");

      echo "I am having ".$myMenu['breakfast']." for breakfast...<br/>";
      echo "I usually eat ".count($myMenu)." times a day!<br/>";

      //for a list of PHP functions please use php.net, For ex: php.net/count
      $listOfMeals = array_keys($myMenu);
      print_r($listOfMeals);

      echo "<hr/>List of Meals: <br>";
      //you can use a foreach loop to go through them or go through them manually:
      foreach ($listOfMeals as $mealTime){
        echo "$mealTime<br/>";
      }

      //manually
      echo "<br>Or Manually: ".$listOfMeals[0].", ".$listOfMeals[1].", ".$listOfMeals[2];


      //otherwise!
      //you can access both the key and the value in a foreach loop! (without using array_keys() or array_values())
      foreach ($myMenu as $key => $value){
        echo "Key: $key, Value: $value<br/>";
      }
    ?>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>