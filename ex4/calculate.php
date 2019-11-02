<?php
    if(isset($_POST["submit_btn"])){
        $yob = $_POST["yob"];
        
        $currentYear = date("Y");

        if ($yob >= 1900 && $yob <= $currentYear){
            $age = $currentYear - $yob;
            header("Location: index.php?success=1&age=$age&yob=$yob&currentyear=$currentYear");
            //echo "You were born in $yob, the year today is $currentYear. Therfore, this year you will be $age years old!";
        } else {
            header("Location: index.php?success=0&yob=$yob&currentyear=$currentYear");
            //echo "Year of birth must be between 1900 and less than or equal to $currentYear.";
            //echo "<br><br>You have entered: $yob";
        }
        
    } else {
        header("Location: index.php?success=-1");
        //echo "No Value Submitted";
    }
?>