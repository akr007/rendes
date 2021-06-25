<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <form method="post">
            a:<input type="text" name="a" id="a" value="0">
            b:<input type="text" name="b" id="b" value="0">
            c:<input type="text" name="c" id="c" value="0">
            <button type="submit" name="submit">OK</button>
        </form>
        <?php
            if(isset($_POST['submit'])){
                $a = $_POST['a'];
                $b = $_POST['b'];
                $c = $_POST['c'];

                echo $_POST['a'];
                echo '<br />';
                echo $_POST['b'];
                echo '<br />';
                echo $_POST['c'];
                echo '<br />';
            }
        ?>
        <p><?php echo $a."^3 +".$b."^3 =".$c."^3";?></p>
    </div>
</body>
</html>
