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
                    include("eb/groupStageSim.php");
                    include("eb/groupStage.php");
                    include("eb/groupStageTable.php");
                ?>  
            </div>

            <?php
                include("eb/thirdPlaceSorter.php");
                include("eb/roundOfSixteen.php");
                include("eb/quarterFinals.php");
                include("eb/semiFinals.php");
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