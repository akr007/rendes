<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form method="post">
            p:<input type="text" name="p" id="p" value="1" required min="1" max="100000">
            <button type="submit" name="ok">OK</button>
        </form>
        <?php
            if(isset($_POST['ok'])){
                $p = $_POST['p'];
                echo '<style type="text/css">
                        #valuesForm {
                            display: block;
                        }
                     </style>';
            }
        ?>
        <form id="valuesForm" method="post">
            a:<input type="text" name="a" id="a" value="0" required min="1" max=<?php $p ?>>
            b:<input type="text" name="b" id="b" value="0" required min="1" max=<?php $p ?>>
            c:<input type="text" name="c" id="c" value="0" required min="1" max=<?php $p ?>>
            <button type="submit" name="submit">OK</button>
        </form>
        <?php
            if(isset($_POST['submit'])){
                $a = $_POST['a'];
                $b = $_POST['b'];
                $c = $_POST['c'];

                echo '<br />';
                echo $_POST['a'];
                echo '<br />';
                echo $_POST['b'];
                echo '<br />';
                echo $_POST['c'];
                echo '<br />';
            }
        ?>
        <p>
            <?php
                if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c']) && isset($_POST['p'])){
                    echo pow($a, 3) + pow($b, 3)."x = ".pow($c, 3)." (mod".$p." )";
                }   
            ?>
        </p>
    </div>
</body>
</html>
