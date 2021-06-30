    <?php
        include("header.html");
        include("navbar.html");
        include("footer.html");
    ?>
    <title>2020 Labdarúgó Európa Bajnokság</title>
    </head>

    <body>

        <?php
            include("eb/variables.php");
        ?>
        
        <div class="container" style="text-align:center;">
            <div class="row">
                <div class="col-md-8">
                    <h1>2020-as labdarúgó-Európa-bajnokság</h1>
                </div>
                <div class="col-md-4">
                    <form method="post">
                        <input type="submit" name="someAction" value="Szimuláció" style="font-size: 30px;" />
                    </form>
                </div>
            </div>
            <br><br>

            <div class="row">
                <?php
                    //A csoportokban történő meccsek kiszámítása
                    include("eb/groupStageSim.php");
                    //A meccsek utáni adatok frissítése
                    include("eb/groupStage.php");
                    //Az adatok vizualizálása egy táblázatban
                    include("eb/groupStageTable.php");
                ?>  
            </div>

            <?php
                //A harmadik helyezettek sorrendjét állapítja meg, az előre meghatározott szabályok alapján (lásd 2021 eb wiki)
                include("eb/thirdPlaceSorter.php");
                //A legjobb 16 közé került csapatok meccseinek kiszámítása és a nyertesek megállapítása
                include("eb/roundOfSixteen.php");
                //A legjobb 8 közé került csapatok meccseinek kiszámítása és a nyertesek megállapítása
                include("eb/quarterFinals.php");
                //A legjobb 4 közé került csapatok meccseinek kiszámítása és a nyertesek megállapítása
                include("eb/semiFinals.php"); 
                //A döntőbe került csapatok meccseinek kiszámítása és a végső nyertes megállapítása
                include("eb/final.php");
            ?>   

            <div class="row">
                    <div class="col">
                        <h2>2020-as labdarúgó-Európa-bajnokság győztese: 
                            <strong><?php if (isset($tournamentWinner)) echo $tournamentWinner ?></strong>
                        </h2>
                    </div>
            </div>
        </div>