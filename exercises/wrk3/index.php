<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form action="index2.php" method="post">
            <div class="row">
                <div class="column left">
                    <p>Item</p>
                    <label>Tires</label><br><br>
                    <label>Oil</label><br><br>
                    <label>SparkPlugs</label><br><br>
                    <label>How did you find Bob's</label>
                </div>
                <div class="column right">
                    <p>Quantity</p>
                    <input type="text" name="tires" required><br><br>
                    
                    <input type="text" name="oil" required><br><br>
                    
                    <input type="text" name="sparkPlugs" required><br><br>
                    
                    <select name="options" required>
                        <option value="reg">I'm a regular customer</option>
                        <option value="ad">TV advertising</option>
                        <option value="phone">Phone directory</option>
                        <option value="mouth">Word of mouth</option>
                    </select>
                    <br><br>
                    <input type="submit" name="btnClicked">
                </div>
            </div>
        </form>
    </body>
</html>