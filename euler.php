    <?php
        include("header.html");
        include("navbar.html");
        include("footer.html");
    ?>
    <title>753. probléma</title>
</head>
<body>
    <div class="container">
        <h1>Nem sikerült megoldani Euler 753. problémáját, mivel nem találtam kézzel fogható példát az interneten, így nem tudtam megérteni a problémát. F(5), F(7) és F(12)-re a (p-1)*(p-2) segítségével kijöttek az eredmények, de a többi szám rejtély maradt.</h1>
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
    </div>