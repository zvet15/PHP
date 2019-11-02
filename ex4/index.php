<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POST Superglobal</title>
</head>
<body>
    <h1>Age Calculator</h1>

    <form action="calculate.php" method="post">
    <label for="yob">Year Of Birth: </label><input type="number" name="yob">
    <br><br>
    <input type="submit" name="submit_btn" value="Calculate your age!">
    </form>

    <br>
    <br>
    <hr>

    <?php
        if(isset($_GET['success'])){
            if($_GET['success'] == 1){
                $yob = $_GET['yob'];
                $currentYear = $_GET['currentyear'];
                $age = $_GET['age'];
                echo "You were born in $yob, the year today is $currentYear. Therfore, this year you will be $age years old!";
            } else if($_GET['success'] == 0){
                $yob = $_GET['yob'];
                $currentYear = $_GET['currentyear'];
                echo "Year of birth must be between 1900 and less than or equal to $currentYear.";
                echo "<br><br>You have entered: $yob";
            } else {
                echo "No Values Submitted";
            }
        }
    ?>
    

</body>
</html>