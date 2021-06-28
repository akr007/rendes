<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
        //if (window.history.replaceState) {
          //  window.history.replaceState(null, null, window.location.href);
        //}
    </script>
    <title>2020 Labdarúgó Európa Bajnokság</title>
</head>

<body>
    <?php
        $Turkey = "Törökország";
        $Italy = "Olaszország";
        $Wales = "Wales";
        $Switz = "Svájc";

        $Belgium = "Belgium";
        $Denmark = "Dánia";
        $Russia = "Oroszország";
        $Finland = "Finnország";

        $Au = "Ausztria";
        $Mac = "Észak-Macedónia";
        $Neth = "Hollandia";
        $Ukr = "Ukrajna";

        $Eng = "Anglia";
        $Cro = "Horvátország";
        $Sco = "Skócia";
        $Czeh = "Csehország";

        $Pol = "Lengyelország";
        $Slo = "Szlovákia";
        $Esp = "Spanyolország";
        $Swe = "Svédország";

        $Hun = "Magyarország";
        $Por = "Portugália";
        $Fran = "Franciaország";
        $Germ = "Németország";

        //----------------------

        $ItalyRank = 1642;
        $SwitzRank = 1606;
        $WalesRank = 1570;
        $TurkeyRank = 1505;
        
        $BelgiumRank = 1783;
        $DenmarkRank = 1632;
        $FinnRank = 1411;
        $RussiaRank = 1463;
        
        $MacRank = 1375;
        $UkrRank = 1515;
        $NethRank = 1598;
        $AuRank = 1523;
        
        $EngRank = 1687;
        $CroRank = 1606;
        $CzehRank = 1459;
        $ScoRank = 1441;
        
        $PolRank = 1550;
        $SloRank = 1475;
        $EspRank = 1648;
        $SweRank = 1570;
        
        $HunRank = 1469;
        $PorRank = 1666;
        $FranRank = 1743;
        $GermRank = 1609;

        //----------------------

        $ItalyOverall = 5;
        $SwitzOverall = 4;
        $WalesOverall = 3;
        $TurkeyOverall = 2;

        $BelgiumOverall = 5;
        $DenmarkOverall = 3;
        $FinnOverall = 1;
        $RussiaOverall = 2;

        $MacOverall = 1;
        $UkrOverall = 3;
        $NethOverall = 4;
        $AuOverall = 3;

        $EngOverall = 5;
        $CroOverall = 4;
        $CzehOverall = 2;
        $ScoOverall = 2;

        $PolOverall = 3;
        $SloOverall = 2;
        $EspOverall = 5;
        $SweOverall = 3;

        $HunOverall = 2;
        $PorOverall = 5;
        $FranOverall = 5;
        $GermOverall = 4;

        //----------------------

        $ItalyMatchNumber = 0;
        $TurkeyMatchNumber = 0;
        $WalesMatchNumber = 0;
        $SwitzMatchNumber = 0;

        $BelgiumMatchNumber = 0;
        $DenmarkMatchNumber = 0;
        $FinnMatchNumber = 0;
        $RussiaMatchNumber = 0;

        $MacMatchNumber = 0;
        $AuMatchNumber = 0;
        $NethMatchNumber = 0;
        $UkrMatchNumber = 0;

        $EngMatchNumber = 0;
        $CroMatchNumber = 0;
        $CzehMatchNumber = 0;
        $ScoMatchNumber = 0;

        $PolMatchNumber = 0;
        $SweMatchNumber = 0;
        $EspMatchNumber = 0;
        $SloMatchNumber = 0;

        $HunMatchNumber = 0;
        $PorMatchNumber = 0;
        $FranMatchNumber = 0;
        $GermMatchNumber = 0;

        //----------------------

        $ItalyWin = 0;
        $TurkeyWin = 0;
        $WalesWin = 0;
        $SwitzWin = 0;

        $BelgiumWin = 0;
        $DenmarkWin = 0;
        $FinnWin = 0;
        $RussiaWin = 0;

        $MacWin = 0;
        $AuWin = 0;
        $NethWin = 0;
        $UkrWin = 0;

        $EngWin = 0;
        $CroWin = 0;
        $CzehWin = 0;
        $ScoWin = 0;

        $PolWin = 0;
        $SweWin = 0;
        $EspWin = 0;
        $SloWin = 0;

        $HunWin = 0;
        $PorWin = 0;
        $FranWin = 0;
        $GermWin = 0;

        //----------------------

        $ItalyDraw = 0;
        $TurkeyDraw = 0;
        $WalesDraw = 0;
        $SwitzDraw = 0;

        $BelgiumDraw = 0;
        $DenmarkDraw = 0;
        $FinnDraw = 0;
        $RussiaDraw = 0;

        $MacDraw = 0;
        $AuDraw = 0;
        $NethDraw = 0;
        $UkrDraw = 0;

        $EngDraw = 0;
        $CroDraw = 0;
        $CzehDraw = 0;
        $ScoDraw = 0;

        $PolDraw = 0;
        $SweDraw = 0;
        $EspDraw = 0;
        $SloDraw = 0;

        $HunDraw = 0;
        $PorDraw = 0;
        $FranDraw = 0;
        $GermDraw = 0;

        //----------------------

        $ItalyLose = 0;
        $TurkeyLose = 0;
        $WalesLose = 0;
        $SwitzLose = 0;

        $BelgiumLose = 0;
        $DenmarkLose = 0;
        $FinnLose = 0;
        $RussiaLose = 0;

        $MacLose = 0;
        $AuLose = 0;
        $NethLose = 0;
        $UkrLose = 0;

        $EngLose = 0;
        $CroLose = 0;
        $CzehLose = 0;
        $ScoLose = 0;

        $PolLose = 0;
        $SweLose = 0;
        $EspLose = 0;
        $SloLose = 0;

        $HunLose = 0;
        $PorLose = 0;
        $FranLose = 0;
        $GermLose = 0;

        //----------------------

        $ItalyScoreDiff = 0;
        $TurkeyScoreDiff = 0;
        $WalesScoreDiff = 0;
        $SwitzScoreDiff = 0;

        $BelgiumScoreDiff = 0;
        $DenmarkScoreDiff = 0;
        $FinnScoreDiff = 0;
        $RussiaScoreDiff = 0;

        $MacScoreDiff = 0;
        $AuScoreDiff = 0;
        $NethScoreDiff = 0;
        $UkrScoreDiff = 0;

        $EngScoreDiff = 0;
        $CroScoreDiff = 0;
        $CzehScoreDiff = 0;
        $ScoScoreDiff = 0;

        $PolScoreDiff = 0;
        $SweScoreDiff = 0;
        $EspScoreDiff = 0;
        $SloScoreDiff = 0;

        $HunScoreDiff = 0;
        $PorScoreDiff = 0;
        $FranScoreDiff = 0;
        $GermScoreDiff = 0;

        //----------------------

        $ItalyPoint = 0;
        $TurkeyPoint = 0;
        $WalesPoint = 0;
        $SwitzPoint = 0;

        $BelgiumPoint = 0;
        $DenmarkPoint = 0;
        $FinnPoint = 0;
        $RussiaPoint = 0;

        $MacPoint = 0;
        $AuPoint = 0;
        $NethPoint = 0;
        $UkrPoint = 0;

        $EngPoint = 0;
        $CroPoint = 0;
        $CzehPoint = 0;
        $ScoPoint = 0;

        $PolPoint = 0;
        $SwePoint = 0;
        $EspPoint = 0;
        $SloPoint = 0;

        $HunPoint = 0;
        $PorPoint = 0;
        $FranPoint = 0;
        $GermPoint = 0;

        //----------------------
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-8" style="text-align:center;">
                <h1>2020-as labdarúgó-Európa-bajnokság</h1>
            </div>
            <div class="col-md-4" style="text-align:center;">
                <form method="post">
                    <input type="submit" name="someAction" value="Szimuláció" style="font-size: 30px;" />
                </form>
            </div>
        </div>
        <br><br>

        <div class="row">
            <div class="col-md-7" style="text-align:center;">
                <h1>Csoportmérkőzések</h1>
                <table style="margin-left: auto; margin-right: auto;">
                    <h3>A csoport</h3>
                    <tr>
                        <td style="width: 10%;">
                            Törökország
                            <br>
                            <?php
                            if (isset($_POST['someAction'])) {
                                $firstTeamScore = mt_rand(0, 1);
                                $secondtTeamScore = mt_rand(2, 4);
                                if ($firstTeamScore > $secondtTeamScore) {
                                    $TurkeyMatchNumber += 1;
                                    $TurkeyWin += 1;
                                    $TurkeyPoint += 3;

                                    $ItalyMatchNumber += 1;
                                    $ItalyLose += 1;
                                    $ItalyPoint += 0;
                                }
                                if ($firstTeamScore < $secondtTeamScore) {
                                    $TurkeyMatchNumber += 1;
                                    $TurkeyLose += 1;
                                    $TurkeyPoint += 0;

                                    $ItalyMatchNumber += 1;
                                    $ItalyWin += 1;
                                    $ItalyPoint += 3;
                                }
                                if ($firstTeamScore == $secondtTeamScore) {
                                    $TurkeyMatchNumber += 1;
                                    $TurkeyDraw += 1;
                                    $TurkeyPoint += 1;

                                    $ItalyMatchNumber += 1;
                                    $ItalyDraw += 1;
                                    $ItalyPoint += 1;
                                }
                                $TurkeyScoreDiff += $firstTeamScore - $secondtTeamScore;
                                $ItalyScoreDiff += $secondtTeamScore - $firstTeamScore;
                                echo $firstTeamScore;
                                echo " - ";
                                echo $secondtTeamScore;
                            } ?>
                            <br>
                            Olaszország
                        </td>
                        <td style="width: 10%;">
                            Wales
                            <br>
                            <?php
                            if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['someAction'])) {
                                $firstTeamScore = mt_rand(0, 2);
                                $secondtTeamScore = mt_rand(0, 2);
                                if ($firstTeamScore > $secondtTeamScore) {
                                    $WalesMatchNumber += 1;
                                    $WalesWin += 1;
                                    $WalesPoint += 3;

                                    $SwitzMatchNumber += 1;
                                    $SwitzLose += 1;
                                    $SwitzPoint += 0;
                                }
                                if ($firstTeamScore < $secondtTeamScore) {
                                    $WalesMatchNumber += 1;
                                    $WalesLose += 1;
                                    $WalesPoint += 0;

                                    $SwitzMatchNumber += 1;
                                    $SwitzWin += 1;
                                    $SwitzPoint += 3;
                                }
                                if ($firstTeamScore == $secondtTeamScore) {
                                    $WalesMatchNumber += 1;
                                    $WalesDraw += 1;
                                    $WalesPoint += 1;

                                    $SwitzMatchNumber += 1;
                                    $SwitzDraw += 1;
                                    $SwitzPoint += 1;
                                }
                                $WalesScoreDiff += $firstTeamScore - $secondtTeamScore;
                                $SwitzScoreDiff += $secondtTeamScore - $firstTeamScore;
                                echo $firstTeamScore;
                                echo " - ";
                                echo $secondtTeamScore;
                            }
                            ?>
                            <br>
                            Svájc
                        </td>
                        <td style="width: 10%;">
                            Törökország
                            <br>
                            <?php
                            if (isset($_POST['someAction'])) {
                                $firstTeamScore = mt_rand(0, 1);
                                $secondtTeamScore = mt_rand(0, 2);
                                if ($firstTeamScore > $secondtTeamScore) {
                                    $TurkeyMatchNumber += 1;
                                    $TurkeyWin += 1;
                                    $TurkeyPoint += 3;

                                    $WalesMatchNumber += 1;
                                    $WalesLose += 1;
                                    $WalesPoint += 0;
                                }
                                if ($firstTeamScore < $secondtTeamScore) {
                                    $TurkeyMatchNumber += 1;
                                    $TurkeyLose += 1;
                                    $TurkeyPoint += 0;

                                    $WalesMatchNumber += 1;
                                    $WalesWin += 1;
                                    $WalesPoint += 3;
                                }
                                if ($firstTeamScore == $secondtTeamScore) {
                                    $TurkeyMatchNumber += 1;
                                    $TurkeyDraw += 1;
                                    $TurkeyPoint += 1;

                                    $WalesMatchNumber += 1;
                                    $WalesDraw += 1;
                                    $WalesPoint += 1;
                                }
                                $TurkeyScoreDiff += $firstTeamScore - $secondtTeamScore;
                                $WalesScoreDiff += $secondtTeamScore - $firstTeamScore;
                                echo $firstTeamScore;
                                echo " - ";
                                echo $secondtTeamScore;
                            } ?>
                            <br>
                            Wales
                        </td>
                        <td style="width: 10%;">
                            Olaszország
                            <br>
                            <?php
                            if (isset($_POST['someAction'])) {
                                $firstTeamScore = mt_rand(1, 3);
                                $secondtTeamScore = mt_rand(0, 2);
                                if ($firstTeamScore > $secondtTeamScore) {
                                    $ItalyMatchNumber += 1;
                                    $ItalyWin += 1;
                                    $ItalyPoint += 3;

                                    $SwitzMatchNumber += 1;
                                    $SwitzLose += 1;
                                    $SwitzPoint += 0;
                                }
                                if ($firstTeamScore < $secondtTeamScore) {
                                    $ItalyMatchNumber += 1;
                                    $ItalyLose += 1;
                                    $ItalyPoint += 0;

                                    $SwitzMatchNumber += 1;
                                    $SwitzWin += 1;
                                    $SwitzPoint += 3;
                                }
                                if ($firstTeamScore == $secondtTeamScore) {
                                    $ItalyMatchNumber += 1;
                                    $ItalyDraw += 1;
                                    $ItalyPoint += 1;

                                    $SwitzMatchNumber += 1;
                                    $SwitzDraw += 1;
                                    $SwitzPoint += 1;
                                }
                                $ItalyScoreDiff += $firstTeamScore - $secondtTeamScore;
                                $SwitzScoreDiff += $secondtTeamScore - $firstTeamScore;
                                echo $firstTeamScore;
                                echo " - ";
                                echo $secondtTeamScore;
                            } ?>
                            <br>
                            Svájc
                        </td>
                        <td style="width: 10%;">
                            Svájc
                            <br>
                            <?php
                            if (isset($_POST['someAction'])) {
                                $firstTeamScore = mt_rand(1, 3);
                                $secondtTeamScore = mt_rand(0, 1);
                                if ($firstTeamScore > $secondtTeamScore) {
                                    $SwitzMatchNumber += 1;
                                    $SwitzWin += 1;
                                    $SwitzPoint += 3;

                                    $TurkeyMatchNumber += 1;
                                    $TurkeyLose += 1;
                                    $TurkeyPoint += 0;
                                }
                                if ($firstTeamScore < $secondtTeamScore) {
                                    $SwitzMatchNumber += 1;
                                    $SwitzLose += 1;
                                    $SwitzPoint += 0;

                                    $TurkeyMatchNumber += 1;
                                    $TurkeyWin += 1;
                                    $TurkeyPoint += 3;
                                }
                                if ($firstTeamScore == $secondtTeamScore) {
                                    $SwitzMatchNumber += 1;
                                    $SwitzDraw += 1;
                                    $SwitzPoint += 1;

                                    $TurkeyMatchNumber += 1;
                                    $TurkeyDraw += 1;
                                    $TurkeyPoint += 1;
                                }
                                $SwitzScoreDiff += $firstTeamScore - $secondtTeamScore;
                                $TurkeyScoreDiff += $secondtTeamScore - $firstTeamScore;
                                echo $firstTeamScore;
                                echo " - ";
                                echo $secondtTeamScore;
                            } ?>
                            <br>
                            Törökország
                        </td>
                        <td style="width: 10%;">
                            Olaszország
                            <br>
                            <?php
                            if (isset($_POST['someAction'])) {
                                $firstTeamScore = mt_rand(1, 3);
                                $secondtTeamScore = mt_rand(0, 1);
                                if ($firstTeamScore > $secondtTeamScore) {
                                    $ItalyMatchNumber += 1;
                                    $ItalyWin += 1;
                                    $ItalyPoint += 3;

                                    $WalesMatchNumber += 1;
                                    $WalesLose += 1;
                                    $WalesPoint += 0;
                                }
                                if ($firstTeamScore < $secondtTeamScore) {
                                    $ItalyMatchNumber += 1;
                                    $ItalyLose += 1;
                                    $ItalyPoint += 0;

                                    $WalesMatchNumber += 1;
                                    $WalesWin += 1;
                                    $WalesPoint += 3;
                                }
                                if ($firstTeamScore == $secondtTeamScore) {
                                    $ItalyMatchNumber += 1;
                                    $ItalyDraw += 1;
                                    $ItalyPoint += 1;

                                    $WalesMatchNumber += 1;
                                    $WalesDraw += 1;
                                    $WalesPoint += 1;
                                }
                                $ItalyScoreDiff += $firstTeamScore - $secondtTeamScore;
                                $WalesScoreDiff += $secondtTeamScore - $firstTeamScore;
                                echo $firstTeamScore;
                                echo " - ";
                                echo $secondtTeamScore;
                            } ?>
                            <br>
                            Wales
                        </td>
                    </tr>
                    <br>
                </table>
                <br>
                <table style="margin-left: auto; margin-right: auto;">
                    <h3>B csoport</h3>
                    <tr>
                        <td style="width: 10%;">
                            Dánia
                            <br>
                            <?php
                            if (isset($_POST['someAction'])) {
                                $firstTeamScore = mt_rand(1, 3);
                                $secondtTeamScore = mt_rand(0, 1);
                                if ($firstTeamScore > $secondtTeamScore) {
                                    $DenmarkMatchNumber += 1;
                                    $DenmarkWin += 1;
                                    $DenmarkPoint += 3;

                                    $FinnMatchNumber += 1;
                                    $FinnLose += 1;
                                    $FinnPoint += 0;
                                }
                                if ($firstTeamScore < $secondtTeamScore) {
                                    $DenmarkMatchNumber += 1;
                                    $DenmarkLose += 1;
                                    $DenmarkPoint += 0;

                                    $FinnMatchNumber += 1;
                                    $FinnWin += 1;
                                    $FinnPoint += 3;
                                }
                                if ($firstTeamScore == $secondtTeamScore) {
                                    $DenmarkMatchNumber += 1;
                                    $DenmarkDraw += 1;
                                    $DenmarkPoint += 1;

                                    $FinnMatchNumber += 1;
                                    $FinnDraw += 1;
                                    $FinnPoint += 1;
                                }
                                $DenmarkScoreDiff += $firstTeamScore - $secondtTeamScore;
                                $FinnScoreDiff += $secondtTeamScore - $firstTeamScore;
                                echo $firstTeamScore;
                                echo " - ";
                                echo $secondtTeamScore;
                            } ?>
                            <br>
                            Finnország
                        </td>
                        <td style="width: 10%;">
                            Belgium
                            <br>
                            <?php
                            if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['someAction'])) {
                                $firstTeamScore = mt_rand(2, 4);
                                $secondtTeamScore = mt_rand(0, 1);
                                if ($firstTeamScore > $secondtTeamScore) {
                                    $BelgiumMatchNumber += 1;
                                    $BelgiumWin += 1;
                                    $BelgiumPoint += 3;

                                    $RussiaMatchNumber += 1;
                                    $RussiaLose += 1;
                                    $RussiaPoint += 0;
                                }
                                if ($firstTeamScore < $secondtTeamScore) {
                                    $BelgiumMatchNumber += 1;
                                    $BelgiumLose += 1;
                                    $BelgiumPoint += 0;

                                    $RussiaMatchNumber += 1;
                                    $RussiaWin += 1;
                                    $RussiaPoint += 3;
                                }
                                if ($firstTeamScore == $secondtTeamScore) {
                                    $BelgiumMatchNumber += 1;
                                    $BelgiumDraw += 1;
                                    $BelgiumPoint += 1;

                                    $RussiaMatchNumber += 1;
                                    $RussiaDraw += 1;
                                    $RussiaPoint += 1;
                                }
                                $BelgiumScoreDiff += $firstTeamScore - $secondtTeamScore;
                                $RussiaScoreDiff += $secondtTeamScore - $firstTeamScore;
                                echo $firstTeamScore;
                                echo " - ";
                                echo $secondtTeamScore;
                            }
                            ?>
                            <br>
                            Oroszország
                        </td>
                        <td style="width: 10%;">
                            Finnország
                            <br>
                            <?php
                            if (isset($_POST['someAction'])) {
                                $firstTeamScore = mt_rand(0, 2);
                                $secondtTeamScore = mt_rand(0, 2);
                                if ($firstTeamScore > $secondtTeamScore) {
                                    $FinnMatchNumber += 1;
                                    $FinnWin += 1;
                                    $FinnPoint += 3;

                                    $RussiaMatchNumber += 1;
                                    $RussiaLose += 1;
                                    $RussiaPoint += 0;
                                }
                                if ($firstTeamScore < $secondtTeamScore) {
                                    $FinnMatchNumber += 1;
                                    $FinnLose += 1;
                                    $FinnPoint += 0;

                                    $RussiaMatchNumber += 1;
                                    $RussiaWin += 1;
                                    $RussiaPoint += 3;
                                }
                                if ($firstTeamScore == $secondtTeamScore) {
                                    $FinnMatchNumber += 1;
                                    $FinnDraw += 1;
                                    $FinnPoint += 1;

                                    $RussiaMatchNumber += 1;
                                    $RussiaDraw += 1;
                                    $RussiaPoint += 1;
                                }
                                $FinnScoreDiff += $firstTeamScore - $secondtTeamScore;
                                $RussiaScoreDiff += $secondtTeamScore - $firstTeamScore;
                                echo $firstTeamScore;
                                echo " - ";
                                echo $secondtTeamScore;
                            } ?>
                            <br>
                            Oroszország
                        </td>
                        <td style="width: 10%;">
                            Dánia
                            <br>
                            <?php
                            if (isset($_POST['someAction'])) {
                                $firstTeamScore = mt_rand(0, 2);
                                $secondtTeamScore = mt_rand(1, 3);
                                if ($firstTeamScore > $secondtTeamScore) {
                                    $DenmarkMatchNumber += 1;
                                    $DenmarkWin += 1;
                                    $DenmarkPoint += 3;

                                    $BelgiumMatchNumber += 1;
                                    $BelgiumLose += 1;
                                    $BelgiumPoint += 0;
                                }
                                if ($firstTeamScore < $secondtTeamScore) {
                                    $DenmarkMatchNumber += 1;
                                    $DenmarkLose += 1;
                                    $DenmarkPoint += 0;

                                    $BelgiumMatchNumber += 1;
                                    $BelgiumWin += 1;
                                    $BelgiumPoint += 3;
                                }
                                if ($firstTeamScore == $secondtTeamScore) {
                                    $DenmarkMatchNumber += 1;
                                    $DenmarkDraw += 1;
                                    $DenmarkPoint += 1;

                                    $BelgiumMatchNumber += 1;
                                    $BelgiumDraw += 1;
                                    $BelgiumPoint += 1;
                                }
                                $DenmarkScoreDiff += $firstTeamScore - $secondtTeamScore;
                                $BelgiumScoreDiff += $secondtTeamScore - $firstTeamScore;
                                echo $firstTeamScore;
                                echo " - ";
                                echo $secondtTeamScore;
                            } ?>
                            <br>
                            Belgium
                        </td>
                        <td style="width: 10%;">
                            Oroszország
                            <br>
                            <?php
                            if (isset($_POST['someAction'])) {
                                $firstTeamScore = mt_rand(0, 1);
                                $secondtTeamScore = mt_rand(1, 3);
                                if ($firstTeamScore > $secondtTeamScore) {
                                    $RussiaMatchNumber += 1;
                                    $RussiaWin += 1;
                                    $RussiaPoint += 3;

                                    $DenmarkMatchNumber += 1;
                                    $DenmarkLose += 1;
                                    $DenmarkPoint += 0;
                                }
                                if ($firstTeamScore < $secondtTeamScore) {
                                    $RussiaMatchNumber += 1;
                                    $RussiaLose += 1;
                                    $RussiaPoint += 0;

                                    $DenmarkMatchNumber += 1;
                                    $DenmarkWin += 1;
                                    $DenmarkPoint += 3;
                                }
                                if ($firstTeamScore == $secondtTeamScore) {
                                    $RussiaMatchNumber += 1;
                                    $RussiaDraw += 1;
                                    $RussiaPoint += 1;

                                    $DenmarkMatchNumber += 1;
                                    $DenmarkDraw += 1;
                                    $DenmarkPoint += 1;
                                }
                                $RussiaScoreDiff += $firstTeamScore - $secondtTeamScore;
                                $DenmarkScoreDiff += $secondtTeamScore - $firstTeamScore;
                                echo $firstTeamScore;
                                echo " - ";
                                echo $secondtTeamScore;
                            } ?>
                            <br>
                            Dánia
                        </td>
                        <td style="width: 10%;">
                            Finnország
                            <br>
                            <?php
                            if (isset($_POST['someAction'])) {
                                $firstTeamScore = mt_rand(0, 1);
                                $secondtTeamScore = mt_rand(2, 5);
                                if ($firstTeamScore > $secondtTeamScore) {
                                    $FinnMatchNumber += 1;
                                    $FinnWin += 1;
                                    $FinnPoint += 3;

                                    $BelgiumMatchNumber += 1;
                                    $BelgiumLose += 1;
                                    $BelgiumPoint += 0;
                                }
                                if ($firstTeamScore < $secondtTeamScore) {
                                    $FinnMatchNumber += 1;
                                    $FinnLose += 1;
                                    $FinnPoint += 0;

                                    $BelgiumMatchNumber += 1;
                                    $BelgiumWin += 1;
                                    $BelgiumPoint += 3;
                                }
                                if ($firstTeamScore == $secondtTeamScore) {
                                    $FinnMatchNumber += 1;
                                    $FinnDraw += 1;
                                    $FinnPoint += 1;

                                    $BelgiumMatchNumber += 1;
                                    $BelgiumDraw += 1;
                                    $BelgiumPoint += 1;
                                }
                                $FinnScoreDiff += $firstTeamScore - $secondtTeamScore;
                                $BelgiumScoreDiff += $secondtTeamScore - $firstTeamScore;
                                echo $firstTeamScore;
                                echo " - ";
                                echo $secondtTeamScore;
                            } ?>
                            <br>
                            Belgium
                        </td>
                    </tr>
                </table>
                <br>
                <table style="margin-left: auto; margin-right: auto;">
                    <h3>C csoport</h3>
                    <tr>
                        <td style="width: 10%;">
                            Ausztria
                            <br>
                            <?php
                            if (isset($_POST['someAction'])) {
                                $firstTeamScore = mt_rand(1, 3);
                                $secondtTeamScore = mt_rand(0, 1);
                                if ($firstTeamScore > $secondtTeamScore) {
                                    $AuMatchNumber += 1;
                                    $AuWin += 1;
                                    $AuPoint += 3;

                                    $MacMatchNumber += 1;
                                    $MacLose += 1;
                                    $MacPoint += 0;
                                }
                                if ($firstTeamScore < $secondtTeamScore) {
                                    $AuMatchNumber += 1;
                                    $AuLose += 1;
                                    $AuPoint += 0;

                                    $MacMatchNumber += 1;
                                    $MacWin += 1;
                                    $MacPoint += 3;
                                }
                                if ($firstTeamScore == $secondtTeamScore) {
                                    $AuMatchNumber += 1;
                                    $AuDraw += 1;
                                    $AuPoint += 1;

                                    $MacMatchNumber += 1;
                                    $MacDraw += 1;
                                    $MacPoint += 1;
                                }
                                $AuScoreDiff += $firstTeamScore - $secondtTeamScore;
                                $MacScoreDiff += $secondtTeamScore - $firstTeamScore;
                                echo $firstTeamScore;
                                echo " - ";
                                echo $secondtTeamScore;
                            } ?>
                            <br>
                            Észak-Macedónia
                        </td>
                        <td style="width: 10%;">
                            Hollandia
                            <br>
                            <?php
                            if (isset($_POST['someAction'])) {
                                $firstTeamScore = mt_rand(1, 3);
                                $secondtTeamScore = mt_rand(0, 2);
                                if ($firstTeamScore > $secondtTeamScore) {
                                    $NethMatchNumber += 1;
                                    $NethWin += 1;
                                    $NethPoint += 3;

                                    $UkrMatchNumber += 1;
                                    $UkrLose += 1;
                                    $UkrPoint += 0;
                                }
                                if ($firstTeamScore < $secondtTeamScore) {
                                    $NethMatchNumber += 1;
                                    $NethLose += 1;
                                    $NethPoint += 0;

                                    $UkrMatchNumber += 1;
                                    $UkrWin += 1;
                                    $UkrPoint += 3;
                                }
                                if ($firstTeamScore == $secondtTeamScore) {
                                    $NethMatchNumber += 1;
                                    $NethDraw += 1;
                                    $NethPoint += 1;

                                    $UkrMatchNumber += 1;
                                    $UkrDraw += 1;
                                    $UkrPoint += 1;
                                }
                                $NethScoreDiff += $firstTeamScore - $secondtTeamScore;
                                $UkrScoreDiff += $secondtTeamScore - $firstTeamScore;
                                echo $firstTeamScore;
                                echo " - ";
                                echo $secondtTeamScore;
                            }
                            ?>
                            <br>
                            Ukrajna
                        </td>
                        <td style="width: 10%;">
                            Ukrajna
                            <br>
                            <?php
                            if (isset($_POST['someAction'])) {
                                $firstTeamScore = mt_rand(1, 3);
                                $secondtTeamScore = mt_rand(0, 1);
                                if ($firstTeamScore > $secondtTeamScore) {
                                    $UkrMatchNumber += 1;
                                    $UkrWin += 1;
                                    $UkrPoint += 3;

                                    $MacMatchNumber += 1;
                                    $MacLose += 1;
                                    $MacPoint += 0;
                                }
                                if ($firstTeamScore < $secondtTeamScore) {
                                    $UkrMatchNumber += 1;
                                    $UkrLose += 1;
                                    $UkrPoint += 0;

                                    $MacMatchNumber += 1;
                                    $MacWin += 1;
                                    $MacPoint += 3;
                                }
                                if ($firstTeamScore == $secondtTeamScore) {
                                    $UkrMatchNumber += 1;
                                    $UkrDraw += 1;
                                    $UkrPoint += 1;

                                    $MacMatchNumber += 1;
                                    $MacDraw += 1;
                                    $MacPoint += 1;
                                }
                                $UkrScoreDiff += $firstTeamScore - $secondtTeamScore;
                                $MacScoreDiff += $secondtTeamScore - $firstTeamScore;
                                echo $firstTeamScore;
                                echo " - ";
                                echo $secondtTeamScore;
                            } ?>
                            <br>
                            Észak-Macedónia
                        </td>
                        <td style="width: 10%;">
                            Hollandia
                            <br>
                            <?php
                            if (isset($_POST['someAction'])) {
                                $firstTeamScore = mt_rand(1, 3);
                                $secondtTeamScore = mt_rand(0, 2);
                                if ($firstTeamScore > $secondtTeamScore) {
                                    $NethMatchNumber += 1;
                                    $NethWin += 1;
                                    $NethPoint += 3;

                                    $AuMatchNumber += 1;
                                    $AuLose += 1;
                                    $AuPoint += 0;
                                }
                                if ($firstTeamScore < $secondtTeamScore) {
                                    $NethMatchNumber += 1;
                                    $NethLose += 1;
                                    $NethPoint += 0;

                                    $AuMatchNumber += 1;
                                    $AuWin += 1;
                                    $AuPoint += 3;
                                }
                                if ($firstTeamScore == $secondtTeamScore) {
                                    $NethMatchNumber += 1;
                                    $NethDraw += 1;
                                    $NethPoint += 1;

                                    $AuMatchNumber += 1;
                                    $AuDraw += 1;
                                    $AuPoint += 1;
                                }
                                $NethScoreDiff += $firstTeamScore - $secondtTeamScore;
                                $AuScoreDiff += $secondtTeamScore - $firstTeamScore;
                                echo $firstTeamScore;
                                echo " - ";
                                echo $secondtTeamScore;
                            } ?>
                            <br>
                            Ausztria
                        </td>
                        <td style="width: 10%;">
                            Észak-Macedónia
                            <br>
                            <?php
                            if (isset($_POST['someAction'])) {
                                $firstTeamScore = mt_rand(0, 1);
                                $secondtTeamScore = mt_rand(2, 4);
                                if ($firstTeamScore > $secondtTeamScore) {
                                    $MacMatchNumber += 1;
                                    $MacWin += 1;
                                    $MacPoint += 3;

                                    $NethMatchNumber += 1;
                                    $NethLose += 1;
                                    $NethPoint += 0;
                                }
                                if ($firstTeamScore < $secondtTeamScore) {
                                    $MacMatchNumber += 1;
                                    $MacLose += 1;
                                    $MacPoint += 0;

                                    $NethMatchNumber += 1;
                                    $NethWin += 1;
                                    $NethPoint += 3;
                                }
                                if ($firstTeamScore == $secondtTeamScore) {
                                    $MacMatchNumber += 1;
                                    $MacDraw += 1;
                                    $MacPoint += 1;

                                    $NethMatchNumber += 1;
                                    $NethDraw += 1;
                                    $NethPoint += 1;
                                }
                                $MacScoreDiff += $firstTeamScore - $secondtTeamScore;
                                $NethScoreDiff += $secondtTeamScore - $firstTeamScore;
                                echo $firstTeamScore;
                                echo " - ";
                                echo $secondtTeamScore;
                            } ?>
                            <br>
                            Hollandia
                        </td>
                        <td style="width: 10%;">
                            Ukrajna
                            <br>
                            <?php
                            if (isset($_POST['someAction'])) {
                                $firstTeamScore = mt_rand(0, 2);
                                $secondtTeamScore = mt_rand(0, 2);
                                if ($firstTeamScore > $secondtTeamScore) {
                                    $UkrMatchNumber += 1;
                                    $UkrWin += 1;
                                    $UkrPoint += 3;

                                    $AuMatchNumber += 1;
                                    $AuLose += 1;
                                    $AuPoint += 0;
                                }
                                if ($firstTeamScore < $secondtTeamScore) {
                                    $UkrMatchNumber += 1;
                                    $UkrLose += 1;
                                    $UkrPoint += 0;

                                    $AuMatchNumber += 1;
                                    $AuWin += 1;
                                    $AuPoint += 3;
                                }
                                if ($firstTeamScore == $secondtTeamScore) {
                                    $UkrMatchNumber += 1;
                                    $UkrDraw += 1;
                                    $UkrPoint += 1;

                                    $AuMatchNumber += 1;
                                    $AuDraw += 1;
                                    $AuPoint += 1;
                                }
                                $UkrScoreDiff += $firstTeamScore - $secondtTeamScore;
                                $AuScoreDiff += $secondtTeamScore - $firstTeamScore;
                                echo $firstTeamScore;
                                echo " - ";
                                echo $secondtTeamScore;
                            } ?>
                            <br>
                            Ausztria
                        </td>
                    </tr>
                    <br>
                </table>
                <br>
                <table style="margin-left: auto; margin-right: auto;">
                    <h3>D csoport</h3>
                    <tr>
                        <td style="width: 10%;">
                            Anglia
                            <br>
                            <?php
                            if (isset($_POST['someAction'])) {
                                $firstTeamScore = mt_rand(1, 2);
                                $secondtTeamScore = mt_rand(0, 1);
                                if ($firstTeamScore > $secondtTeamScore) {
                                    $EngMatchNumber += 1;
                                    $EngWin += 1;
                                    $EngPoint += 3;

                                    $CroMatchNumber += 1;
                                    $CroLose += 1;
                                    $CroPoint += 0;
                                }
                                if ($firstTeamScore < $secondtTeamScore) {
                                    $EngMatchNumber += 1;
                                    $EngLose += 1;
                                    $EngPoint += 0;

                                    $CroMatchNumber += 1;
                                    $CroWin += 1;
                                    $CroPoint += 3;
                                }
                                if ($firstTeamScore == $secondtTeamScore) {
                                    $EngMatchNumber += 1;
                                    $EngDraw += 1;
                                    $EngPoint += 1;

                                    $CroMatchNumber += 1;
                                    $CroDraw += 1;
                                    $CroPoint += 1;
                                }
                                $EngScoreDiff += $firstTeamScore - $secondtTeamScore;
                                $CroScoreDiff += $secondtTeamScore - $firstTeamScore;
                                echo $firstTeamScore;
                                echo " - ";
                                echo $secondtTeamScore;
                            } ?>
                            <br>
                            Horvátország
                        </td>
                        <td style="width: 10%;">
                            Skócia
                            <br>
                            <?php
                            if (isset($_POST['someAction'])) {
                                $firstTeamScore = mt_rand(0, 2);
                                $secondtTeamScore = mt_rand(0, 2);
                                if ($firstTeamScore > $secondtTeamScore) {
                                    $ScoMatchNumber += 1;
                                    $ScoWin += 1;
                                    $ScoPoint += 3;

                                    $CzehMatchNumber += 1;
                                    $CzehLose += 1;
                                    $CzehPoint += 0;
                                }
                                if ($firstTeamScore < $secondtTeamScore) {
                                    $ScoMatchNumber += 1;
                                    $ScoLose += 1;
                                    $ScoPoint += 0;

                                    $CzehMatchNumber += 1;
                                    $CzehWin += 1;
                                    $CzehPoint += 3;
                                }
                                if ($firstTeamScore == $secondtTeamScore) {
                                    $ScoMatchNumber += 1;
                                    $ScoDraw += 1;
                                    $ScoPoint += 1;

                                    $CzehMatchNumber += 1;
                                    $CzehDraw += 1;
                                    $CzehPoint += 1;
                                }
                                $ScoScoreDiff += $firstTeamScore - $secondtTeamScore;
                                $CzehScoreDiff += $secondtTeamScore - $firstTeamScore;
                                echo $firstTeamScore;
                                echo " - ";
                                echo $secondtTeamScore;
                            }
                            ?>
                            <br>
                            Csehország
                        </td>
                        <td style="width: 10%;">
                            Horvátország
                            <br>
                            <?php
                            if (isset($_POST['someAction'])) {
                                $firstTeamScore = mt_rand(1, 2);
                                $secondtTeamScore = mt_rand(0, 1);
                                if ($firstTeamScore > $secondtTeamScore) {
                                    $CroMatchNumber += 1;
                                    $CroWin += 1;
                                    $CroPoint += 3;

                                    $CzehMatchNumber += 1;
                                    $CzehLose += 1;
                                    $CzehPoint += 0;
                                }
                                if ($firstTeamScore < $secondtTeamScore) {
                                    $CroMatchNumber += 1;
                                    $CroLose += 1;
                                    $CroPoint += 0;

                                    $CzehMatchNumber += 1;
                                    $CzehWin += 1;
                                    $CzehPoint += 3;
                                }
                                if ($firstTeamScore == $secondtTeamScore) {
                                    $CroMatchNumber += 1;
                                    $CroDraw += 1;
                                    $CroPoint += 1;

                                    $CzehMatchNumber += 1;
                                    $CzehDraw += 1;
                                    $CzehPoint += 1;
                                }
                                $CroScoreDiff += $firstTeamScore - $secondtTeamScore;
                                $CzehScoreDiff += $secondtTeamScore - $firstTeamScore;
                                echo $firstTeamScore;
                                echo " - ";
                                echo $secondtTeamScore;
                            } ?>
                            <br>
                            Csehország
                        </td>
                        <td style="width: 10%;">
                            Anglia
                            <br>
                            <?php
                            if (isset($_POST['someAction'])) {
                                $firstTeamScore = mt_rand(1, 3);
                                $secondtTeamScore = mt_rand(0, 1);
                                if ($firstTeamScore > $secondtTeamScore) {
                                    $EngMatchNumber += 1;
                                    $EngWin += 1;
                                    $EngPoint += 3;

                                    $ScoMatchNumber += 1;
                                    $ScoLose += 1;
                                    $ScoPoint += 0;
                                }
                                if ($firstTeamScore < $secondtTeamScore) {
                                    $EngMatchNumber += 1;
                                    $EngLose += 1;
                                    $EngPoint += 0;

                                    $ScoMatchNumber += 1;
                                    $ScoWin += 1;
                                    $ScoPoint += 3;
                                }
                                if ($firstTeamScore == $secondtTeamScore) {
                                    $EngMatchNumber += 1;
                                    $EngDraw += 1;
                                    $EngPoint += 1;

                                    $ScoMatchNumber += 1;
                                    $ScoDraw += 1;
                                    $ScoPoint += 1;
                                }
                                $EngScoreDiff += $firstTeamScore - $secondtTeamScore;
                                $ScoScoreDiff += $secondtTeamScore - $firstTeamScore;
                                echo $firstTeamScore;
                                echo " - ";
                                echo $secondtTeamScore;
                            } ?>
                            <br>
                            Skócia
                        </td>
                        <td style="width: 10%;">
                            Horvátország
                            <br>
                            <?php
                            if (isset($_POST['someAction'])) {
                                $firstTeamScore = mt_rand(1, 2);
                                $secondtTeamScore = mt_rand(0, 1);
                                if ($firstTeamScore > $secondtTeamScore) {
                                    $CroMatchNumber += 1;
                                    $CroWin += 1;
                                    $CroPoint += 3;

                                    $ScoMatchNumber += 1;
                                    $ScoLose += 1;
                                    $ScoPoint += 0;
                                }
                                if ($firstTeamScore < $secondtTeamScore) {
                                    $CroMatchNumber += 1;
                                    $CroLose += 1;
                                    $CroPoint += 0;

                                    $ScoMatchNumber += 1;
                                    $ScoWin += 1;
                                    $ScoPoint += 3;
                                }
                                if ($firstTeamScore == $secondtTeamScore) {
                                    $CroMatchNumber += 1;
                                    $CroDraw += 1;
                                    $CroPoint += 1;

                                    $ScoMatchNumber += 1;
                                    $ScoDraw += 1;
                                    $ScoPoint += 1;
                                }
                                $CroScoreDiff += $firstTeamScore - $secondtTeamScore;
                                $ScoScoreDiff += $secondtTeamScore - $firstTeamScore;
                                echo $firstTeamScore;
                                echo " - ";
                                echo $secondtTeamScore;
                            } ?>
                            <br>
                            Skócia
                        </td>
                        <td style="width: 10%;">
                            Csehország
                            <br>
                            <?php
                            if (isset($_POST['someAction'])) {
                                $firstTeamScore = mt_rand(0, 1);
                                $secondtTeamScore = mt_rand(1, 2);
                                if ($firstTeamScore > $secondtTeamScore) {
                                    $CzehMatchNumber += 1;
                                    $CzehWin += 1;
                                    $CzehPoint += 3;

                                    $EngMatchNumber += 1;
                                    $EngLose += 1;
                                    $EngPoint += 0;
                                }
                                if ($firstTeamScore < $secondtTeamScore) {
                                    $CzehMatchNumber += 1;
                                    $CzehLose += 1;
                                    $CzehPoint += 0;

                                    $EngMatchNumber += 1;
                                    $EngWin += 1;
                                    $EngPoint += 3;
                                }
                                if ($firstTeamScore == $secondtTeamScore) {
                                    $CzehMatchNumber += 1;
                                    $CzehDraw += 1;
                                    $CzehPoint += 1;

                                    $EngMatchNumber += 1;
                                    $EngDraw += 1;
                                    $EngPoint += 1;
                                }
                                $CzehScoreDiff += $firstTeamScore - $secondtTeamScore;
                                $EngScoreDiff += $secondtTeamScore - $firstTeamScore;
                                echo $firstTeamScore;
                                echo " - ";
                                echo $secondtTeamScore;
                            } ?>
                            <br>
                            Anglia
                        </td>
                    </tr>
                </table>
                <br>
                <table style="margin-left: auto; margin-right: auto;">
                    <h3>E csoport</h3>
                    <tr>
                        <td style="width: 10%;">
                            Lengyelország
                            <br>
                            <?php
                            if (isset($_POST['someAction'])) {
                                $firstTeamScore = mt_rand(0, 2);
                                $secondtTeamScore = mt_rand(0, 1);
                                if ($firstTeamScore > $secondtTeamScore) {
                                    $PolMatchNumber += 1;
                                    $PolWin += 1;
                                    $PolPoint += 3;

                                    $SloMatchNumber += 1;
                                    $SloLose += 1;
                                    $SloPoint += 0;
                                }
                                if ($firstTeamScore < $secondtTeamScore) {
                                    $PolMatchNumber += 1;
                                    $PolLose += 1;
                                    $PolPoint += 0;

                                    $SloMatchNumber += 1;
                                    $SloWin += 1;
                                    $SloPoint += 3;
                                }
                                if ($firstTeamScore == $secondtTeamScore) {
                                    $PolMatchNumber += 1;
                                    $PolDraw += 1;
                                    $PolPoint += 1;

                                    $SloMatchNumber += 1;
                                    $SloDraw += 1;
                                    $SloPoint += 1;
                                }
                                $PolScoreDiff += $firstTeamScore - $secondtTeamScore;
                                $SloScoreDiff += $secondtTeamScore - $firstTeamScore;
                                echo $firstTeamScore;
                                echo " - ";
                                echo $secondtTeamScore;
                            } ?>
                            <br>
                            Szlovákia
                        </td>
                        <td style="width: 10%;">
                            Spanyolország
                            <br>
                            <?php
                            if (isset($_POST['someAction'])) {
                                $firstTeamScore = mt_rand(1, 3);
                                $secondtTeamScore = mt_rand(0, 1);
                                if ($firstTeamScore > $secondtTeamScore) {
                                    $EspMatchNumber += 1;
                                    $EspWin += 1;
                                    $EspPoint += 3;

                                    $SweMatchNumber += 1;
                                    $SweLose += 1;
                                    $SwePoint += 0;
                                }
                                if ($firstTeamScore < $secondtTeamScore) {
                                    $EspMatchNumber += 1;
                                    $EspLose += 1;
                                    $EspPoint += 0;

                                    $SweMatchNumber += 1;
                                    $SweWin += 1;
                                    $SwePoint += 3;
                                }
                                if ($firstTeamScore == $secondtTeamScore) {
                                    $EspMatchNumber += 1;
                                    $EspDraw += 1;
                                    $EspPoint += 1;

                                    $SweMatchNumber += 1;
                                    $SweDraw += 1;
                                    $SwePoint += 1;
                                }
                                $EspScoreDiff += $firstTeamScore - $secondtTeamScore;
                                $SweScoreDiff += $secondtTeamScore - $firstTeamScore;
                                echo $firstTeamScore;
                                echo " - ";
                                echo $secondtTeamScore;
                            }
                            ?>
                            <br>
                            Svédország
                        </td>
                        <td style="width: 10%;">
                            Svédország
                            <br>
                            <?php
                            if (isset($_POST['someAction'])) {
                                $firstTeamScore = mt_rand(0, 2);
                                $secondtTeamScore = mt_rand(0, 1);
                                if ($firstTeamScore > $secondtTeamScore) {
                                    $SweMatchNumber += 1;
                                    $SweWin += 1;
                                    $SwePoint += 3;

                                    $SloMatchNumber += 1;
                                    $SloLose += 1;
                                    $SloPoint += 0;
                                }
                                if ($firstTeamScore < $secondtTeamScore) {
                                    $SweMatchNumber += 1;
                                    $SweLose += 1;
                                    $SwePoint += 0;

                                    $SloMatchNumber += 1;
                                    $SloWin += 1;
                                    $SloPoint += 3;
                                }
                                if ($firstTeamScore == $secondtTeamScore) {
                                    $SweMatchNumber += 1;
                                    $SweDraw += 1;
                                    $SwePoint += 1;

                                    $SloMatchNumber += 1;
                                    $SloDraw += 1;
                                    $SloPoint += 1;
                                }
                                $SweScoreDiff += $firstTeamScore - $secondtTeamScore;
                                $SloScoreDiff += $secondtTeamScore - $firstTeamScore;
                                echo $firstTeamScore;
                                echo " - ";
                                echo $secondtTeamScore;
                            } ?>
                            <br>
                            Szlovákia
                        </td>
                        <td style="width: 10%;">
                            Spanyolország
                            <br>
                            <?php
                            if (isset($_POST['someAction'])) {
                                $firstTeamScore = mt_rand(1, 3);
                                $secondtTeamScore = mt_rand(0, 1);
                                if ($firstTeamScore > $secondtTeamScore) {
                                    $EspMatchNumber += 1;
                                    $EspWin += 1;
                                    $EspPoint += 3;

                                    $PolMatchNumber += 1;
                                    $PolLose += 1;
                                    $PolPoint += 0;
                                }
                                if ($firstTeamScore < $secondtTeamScore) {
                                    $EspMatchNumber += 1;
                                    $EspLose += 1;
                                    $EspPoint += 0;

                                    $PolMatchNumber += 1;
                                    $PolWin += 1;
                                    $PolPoint += 3;
                                }
                                if ($firstTeamScore == $secondtTeamScore) {
                                    $EspMatchNumber += 1;
                                    $EspDraw += 1;
                                    $EspPoint += 1;

                                    $PolMatchNumber += 1;
                                    $PolDraw += 1;
                                    $PolPoint += 1;
                                }
                                $EspScoreDiff += $firstTeamScore - $secondtTeamScore;
                                $PolScoreDiff += $secondtTeamScore - $firstTeamScore;
                                echo $firstTeamScore;
                                echo " - ";
                                echo $secondtTeamScore;
                            } ?>
                            <br>
                            Lengyelország
                        </td>
                        <td style="width: 10%;">
                            Szlovákia
                            <br>
                            <?php
                            if (isset($_POST['someAction'])) {
                                $firstTeamScore = mt_rand(0, 1);
                                $secondtTeamScore = mt_rand(1, 4);
                                if ($firstTeamScore > $secondtTeamScore) {
                                    $SloMatchNumber += 1;
                                    $SloWin += 1;
                                    $SloPoint += 3;

                                    $EspMatchNumber += 1;
                                    $EspLose += 1;
                                    $EspPoint += 0;
                                }
                                if ($firstTeamScore < $secondtTeamScore) {
                                    $SloMatchNumber += 1;
                                    $SloLose += 1;
                                    $SloPoint += 0;

                                    $EspMatchNumber += 1;
                                    $EspWin += 1;
                                    $EspPoint += 3;
                                }
                                if ($firstTeamScore == $secondtTeamScore) {
                                    $SloMatchNumber += 1;
                                    $SloDraw += 1;
                                    $SloPoint += 1;

                                    $EspMatchNumber += 1;
                                    $EspDraw += 1;
                                    $EspPoint += 1;
                                }
                                $SloScoreDiff += $firstTeamScore - $secondtTeamScore;
                                $EspScoreDiff += $secondtTeamScore - $firstTeamScore;
                                echo $firstTeamScore;
                                echo " - ";
                                echo $secondtTeamScore;
                            } ?>
                            <br>
                            Spanyolország
                        </td>
                        <td style="width: 10%;">
                            Svédország
                            <br>
                            <?php
                            if (isset($_POST['someAction'])) {
                                $firstTeamScore = mt_rand(1, 3);
                                $secondtTeamScore = mt_rand(1, 2);
                                if ($firstTeamScore > $secondtTeamScore) {
                                    $SweMatchNumber += 1;
                                    $SweWin += 1;
                                    $SwePoint += 3;

                                    $PolMatchNumber += 1;
                                    $PolLose += 1;
                                    $PolPoint += 0;
                                }
                                if ($firstTeamScore < $secondtTeamScore) {
                                    $SweMatchNumber += 1;
                                    $SweLose += 1;
                                    $SwePoint += 0;

                                    $PolMatchNumber += 1;
                                    $PolWin += 1;
                                    $PolPoint += 3;
                                }
                                if ($firstTeamScore == $secondtTeamScore) {
                                    $SweMatchNumber += 1;
                                    $SweDraw += 1;
                                    $SwePoint += 1;

                                    $PolMatchNumber += 1;
                                    $PolDraw += 1;
                                    $PolPoint += 1;
                                }
                                $SweScoreDiff += $firstTeamScore - $secondtTeamScore;
                                $PolScoreDiff += $secondtTeamScore - $firstTeamScore;
                                echo $firstTeamScore;
                                echo " - ";
                                echo $secondtTeamScore;
                            } ?>
                            <br>
                            Lengyelország
                        </td>
                    </tr>
                    <br>
                </table>
                <br>
                <table style="margin-left: auto; margin-right: auto;">
                    <h3>F csoport</h3>
                    <tr>
                        <td style="width: 10%;">
                            Magyarország
                            <br>
                            <?php
                            if (isset($_POST['someAction'])) {
                                $firstTeamScore = mt_rand(0, 1);
                                $secondtTeamScore = mt_rand(2, 3);
                                if ($firstTeamScore > $secondtTeamScore) {
                                    $HunMatchNumber += 1;
                                    $HunWin += 1;
                                    $HunPoint += 3;

                                    $PorMatchNumber += 1;
                                    $PorLose += 1;
                                    $PorPoint += 0;
                                }
                                if ($firstTeamScore < $secondtTeamScore) {
                                    $HunMatchNumber += 1;
                                    $HunLose += 1;
                                    $HunPoint += 0;

                                    $PorMatchNumber += 1;
                                    $PorWin += 1;
                                    $PorPoint += 3;
                                }
                                if ($firstTeamScore == $secondtTeamScore) {
                                    $HunMatchNumber += 1;
                                    $HunDraw += 1;
                                    $HunPoint += 1;

                                    $PorMatchNumber += 1;
                                    $PorDraw += 1;
                                    $PorPoint += 1;
                                }
                                $HunScoreDiff += $firstTeamScore - $secondtTeamScore;
                                $PorScoreDiff += $secondtTeamScore - $firstTeamScore;
                                echo $firstTeamScore;
                                echo " - ";
                                echo $secondtTeamScore;
                            } ?>
                            <br>
                            Portugália
                        </td>
                        <td style="width: 10%;">
                            Franciaország
                            <br>
                            <?php
                            if (isset($_POST['someAction'])) {
                                $firstTeamScore = mt_rand(2, 3);
                                $secondtTeamScore = mt_rand(1, 3);
                                if ($firstTeamScore > $secondtTeamScore) {
                                    $FranMatchNumber += 1;
                                    $FranWin += 1;
                                    $FranPoint += 3;

                                    $GermMatchNumber += 1;
                                    $GermLose += 1;
                                    $GermPoint += 0;
                                }
                                if ($firstTeamScore < $secondtTeamScore) {
                                    $FranMatchNumber += 1;
                                    $FranLose += 1;
                                    $FranPoint += 0;

                                    $GermMatchNumber += 1;
                                    $GermWin += 1;
                                    $GermPoint += 3;
                                }
                                if ($firstTeamScore == $secondtTeamScore) {
                                    $FranMatchNumber += 1;
                                    $FranDraw += 1;
                                    $FranPoint += 1;

                                    $GermMatchNumber += 1;
                                    $GermDraw += 1;
                                    $GermPoint += 1;
                                }
                                $FranScoreDiff += $firstTeamScore - $secondtTeamScore;
                                $GermScoreDiff += $secondtTeamScore - $firstTeamScore;
                                echo $firstTeamScore;
                                echo " - ";
                                echo $secondtTeamScore;
                            }
                            ?>
                            <br>
                            Németország
                        </td>
                        <td style="width: 10%;">
                            Magyarország
                            <br>
                            <?php
                            if (isset($_POST['someAction'])) {
                                $firstTeamScore = mt_rand(0, 1);
                                $secondtTeamScore = mt_rand(2, 3);
                                if ($firstTeamScore > $secondtTeamScore) {
                                    $HunMatchNumber += 1;
                                    $HunWin += 1;
                                    $HunPoint += 3;

                                    $FranMatchNumber += 1;
                                    $FranLose += 1;
                                    $FranPoint += 0;
                                }
                                if ($firstTeamScore < $secondtTeamScore) {
                                    $HunMatchNumber += 1;
                                    $HunLose += 1;
                                    $HunPoint += 0;

                                    $FranMatchNumber += 1;
                                    $FranWin += 1;
                                    $FranPoint += 3;
                                }
                                if ($firstTeamScore == $secondtTeamScore) {
                                    $HunMatchNumber += 1;
                                    $HunDraw += 1;
                                    $HunPoint += 1;

                                    $FranMatchNumber += 1;
                                    $FranDraw += 1;
                                    $FranPoint += 1;
                                }
                                $HunScoreDiff += $firstTeamScore - $secondtTeamScore;
                                $FranScoreDiff += $secondtTeamScore - $firstTeamScore;
                                echo $firstTeamScore;
                                echo " - ";
                                echo $secondtTeamScore;
                            } ?>
                            <br>
                            Franciaország
                        </td>
                        <td style="width: 10%;">
                            Portugália
                            <br>
                            <?php
                            if (isset($_POST['someAction'])) {
                                $firstTeamScore = mt_rand(1, 3);
                                $secondtTeamScore = mt_rand(0, 3);
                                if ($firstTeamScore > $secondtTeamScore) {
                                    $PorMatchNumber += 1;
                                    $PorWin += 1;
                                    $PorPoint += 3;

                                    $GermMatchNumber += 1;
                                    $GermLose += 1;
                                    $GermPoint += 0;
                                }
                                if ($firstTeamScore < $secondtTeamScore) {
                                    $PorMatchNumber += 1;
                                    $PorLose += 1;
                                    $PorPoint += 0;

                                    $GermMatchNumber += 1;
                                    $GermWin += 1;
                                    $GermPoint += 3;
                                }
                                if ($firstTeamScore == $secondtTeamScore) {
                                    $PorMatchNumber += 1;
                                    $PorDraw += 1;
                                    $PorPoint += 1;

                                    $GermMatchNumber += 1;
                                    $GermDraw += 1;
                                    $GermPoint += 1;
                                }
                                $PorScoreDiff += $firstTeamScore - $secondtTeamScore;
                                $GermScoreDiff += $secondtTeamScore - $firstTeamScore;
                                echo $firstTeamScore;
                                echo " - ";
                                echo $secondtTeamScore;
                            } ?>
                            <br>
                            Németország
                        </td>
                        <td style="width: 10%;">
                            Portugália
                            <br>
                            <?php
                            if (isset($_POST['someAction'])) {
                                $firstTeamScore = mt_rand(0, 2);
                                $secondtTeamScore = mt_rand(0, 2);
                                if ($firstTeamScore > $secondtTeamScore) {
                                    $PorMatchNumber += 1;
                                    $PorWin += 1;
                                    $PorPoint += 3;

                                    $FranMatchNumber += 1;
                                    $FranLose += 1;
                                    $FranPoint += 0;
                                }
                                if ($firstTeamScore < $secondtTeamScore) {
                                    $PorMatchNumber += 1;
                                    $PorLose += 1;
                                    $PorPoint += 0;

                                    $FranMatchNumber += 1;
                                    $FranWin += 1;
                                    $FranPoint += 3;
                                }
                                if ($firstTeamScore == $secondtTeamScore) {
                                    $PorMatchNumber += 1;
                                    $PorDraw += 1;
                                    $PorPoint += 1;

                                    $FranMatchNumber += 1;
                                    $FranDraw += 1;
                                    $FranPoint += 1;
                                }
                                $PorScoreDiff += $firstTeamScore - $secondtTeamScore;
                                $FranScoreDiff += $secondtTeamScore - $firstTeamScore;
                                echo $firstTeamScore;
                                echo " - ";
                                echo $secondtTeamScore;
                            } ?>
                            <br>
                            Franciaország
                        </td>
                        <td style="width: 10%;">
                            Németország
                            <br>
                            <?php
                            if (isset($_POST['someAction'])) {
                                $firstTeamScore = mt_rand(1, 2);
                                $secondtTeamScore = mt_rand(0, 1);
                                if ($firstTeamScore > $secondtTeamScore) {
                                    $GermMatchNumber += 1;
                                    $GermWin += 1;
                                    $GermPoint += 3;

                                    $HunMatchNumber += 1;
                                    $HunLose += 1;
                                    $HunPoint += 0;
                                }
                                if ($firstTeamScore < $secondtTeamScore) {
                                    $GermMatchNumber += 1;
                                    $GermLose += 1;
                                    $GermPoint += 0;

                                    $HunMatchNumber += 1;
                                    $HunWin += 1;
                                    $HunPoint += 3;
                                }
                                if ($firstTeamScore == $secondtTeamScore) {
                                    $GermMatchNumber += 1;
                                    $GermDraw += 1;
                                    $GermPoint += 1;

                                    $HunMatchNumber += 1;
                                    $HunDraw += 1;
                                    $HunPoint += 1;
                                }
                                $GermScoreDiff += $firstTeamScore - $secondtTeamScore;
                                $HunScoreDiff += $secondtTeamScore - $firstTeamScore;
                                echo $firstTeamScore;
                                echo " - ";
                                echo $secondtTeamScore;
                            } ?>
                            <br>
                            Magyarország
                        </td>
                    </tr>
                </table>
                <br>
            </div>

            <?php
                $groupA = array(
                    array("nation" => $Turkey, "rank"=>$TurkeyRank, "overall"=>$TurkeyOverall, "match" => $TurkeyMatchNumber, "win" => $TurkeyWin, "draw" => $TurkeyDraw, "lose" => $TurkeyLose, "diff" => $TurkeyScoreDiff, "point" => $TurkeyPoint),
                    array("nation" => $Italy, "rank"=>$ItalyRank, "overall"=>$ItalyOverall, "match" => $ItalyMatchNumber, "win" => $ItalyWin, "draw" => $ItalyDraw, "lose" => $ItalyLose, "diff" => $ItalyScoreDiff, "point" => $ItalyPoint),
                    array("nation" => $Wales, "rank"=>$WalesRank, "overall"=>$WalesOverall, "match" => $WalesMatchNumber, "win" => $WalesWin, "draw" => $WalesDraw, "lose" => $WalesLose, "diff" => $WalesScoreDiff, "point" => $WalesPoint),
                    array("nation" => $Switz, "rank"=>$SwitzRank, "overall"=>$SwitzOverall, "match" => $SwitzMatchNumber, "win" => $SwitzWin, "draw" => $SwitzDraw, "lose" => $SwitzLose, "diff" => $SwitzScoreDiff, "point" => $SwitzPoint),
                );

                usort($groupA, function ($item1, $item2) {
                    return $item2['rank'] <=> $item1['rank'];
                });
                usort($groupA, function ($item1, $item2) {
                    return $item2['diff'] <=> $item1['diff'];
                });
                usort($groupA, function ($item1, $item2) {
                    return $item2['point'] <=> $item1['point'];
                });    

                $groupB = array(
                    array("nation" =>$Denmark, "rank"=>$DenmarkRank, "overall"=>$DenmarkOverall, "match" => $DenmarkMatchNumber, "win" => $DenmarkWin, "draw" => $DenmarkDraw, "lose" => $DenmarkLose, "diff" => $DenmarkScoreDiff, "point" => $DenmarkPoint),
                    array("nation" => $Belgium, "rank"=>$BelgiumRank, "overall"=>$BelgiumOverall, "match" => $BelgiumMatchNumber, "win" => $BelgiumWin, "draw" => $BelgiumDraw, "lose" => $BelgiumLose, "diff" => $BelgiumScoreDiff, "point" => $BelgiumPoint),
                    array("nation" => $Russia, "rank"=>$RussiaRank, "overall"=>$RussiaOverall, "match" => $RussiaMatchNumber, "win" => $RussiaWin, "draw" => $RussiaDraw, "lose" => $RussiaLose, "diff" => $RussiaScoreDiff, "point" => $RussiaPoint),
                    array("nation" => $Finland, "rank"=>$FinnRank, "overall"=>$FinnOverall, "match" => $FinnMatchNumber, "win" => $FinnWin, "draw" => $FinnDraw, "lose" => $FinnLose, "diff" => $FinnScoreDiff, "point" => $FinnPoint),
                );
                usort($groupB, function ($item1, $item2) {
                    return $item2['rank'] <=> $item1['rank'];
                });
                usort($groupB, function ($item1, $item2) {
                    return $item2['diff'] <=> $item1['diff'];
                });
                usort($groupB, function ($item1, $item2) {
                    return $item2['point'] <=> $item1['point'];
                });

                $groupC = array(
                    array("nation" => $Au, "rank"=>$AuRank, "overall"=>$AuOverall, "match" => $AuMatchNumber, "win" => $AuWin, "draw" => $AuDraw, "lose" => $AuLose, "diff" => $AuScoreDiff, "point" => $AuPoint),
                    array("nation" => $Mac, "rank"=>$MacRank, "overall"=>$MacOverall, "match" => $MacMatchNumber, "win" => $MacWin, "draw" => $MacDraw, "lose" => $MacLose, "diff" => $MacScoreDiff, "point" => $MacPoint),
                    array("nation" => $Neth, "rank"=>$NethRank, "overall"=>$NethOverall, "match" => $NethMatchNumber, "win" => $NethWin, "draw" => $NethDraw, "lose" => $NethLose, "diff" => $NethScoreDiff, "point" => $NethPoint),
                    array("nation" => $Ukr, "rank"=>$UkrRank, "overall"=>$UkrOverall, "match" => $UkrMatchNumber, "win" => $UkrWin, "draw" => $UkrDraw, "lose" => $UkrLose, "diff" => $UkrScoreDiff, "point" => $UkrPoint),
                );
                usort($groupC, function ($item1, $item2) {
                    return $item2['rank'] <=> $item1['rank'];
                });
                usort($groupC, function ($item1, $item2) {
                    return $item2['diff'] <=> $item1['diff'];
                });
                usort($groupC, function ($item1, $item2) {
                    return $item2['point'] <=> $item1['point'];
                });

                $groupD = array(
                    array("nation" => $Eng, "rank"=>$EngRank, "overall"=>$EngOverall, "match" => $EngMatchNumber, "win" => $EngWin, "draw" => $EngDraw, "lose" => $EngLose, "diff" => $EngScoreDiff, "point" => $EngPoint),
                    array("nation" => $Cro, "rank"=>$CroRank, "overall"=>$CroOverall, "match" => $CroMatchNumber, "win" => $CroWin, "draw" => $CroDraw, "lose" => $CroLose, "diff" => $CroScoreDiff, "point" => $CroPoint),
                    array("nation" => $Sco, "rank"=>$ScoRank, "overall"=>$ScoOverall, "match" => $ScoMatchNumber, "win" => $ScoWin, "draw" => $ScoDraw, "lose" => $ScoLose, "diff" => $ScoScoreDiff, "point" => $ScoPoint),
                    array("nation" => $Czeh, "rank"=>$CzehRank, "overall"=>$CzehOverall, "match" => $CzehMatchNumber, "win" => $CzehWin, "draw" => $CzehDraw, "lose" => $CzehLose, "diff" => $CzehScoreDiff, "point" => $CzehPoint),
                );
                usort($groupD, function ($item1, $item2) {
                    return $item2['rank'] <=> $item1['rank'];
                });
                usort($groupD, function ($item1, $item2) {
                    return $item2['diff'] <=> $item1['diff'];
                });
                usort($groupD, function ($item1, $item2) {
                    return $item2['point'] <=> $item1['point'];
                });

                $groupE = array(
                    array("nation" => $Pol, "rank"=>$PolRank, "overall"=>$PolOverall, "match" => $PolMatchNumber, "win" => $PolWin, "draw" => $PolDraw, "lose" => $PolLose, "diff" => $PolScoreDiff, "point" => $PolPoint),
                    array("nation" => $Slo, "rank"=>$SloRank, "overall"=>$SloOverall, "match" => $SloMatchNumber, "win" => $SloWin, "draw" => $SloDraw, "lose" => $SloLose, "diff" => $SloScoreDiff, "point" => $SloPoint),
                    array("nation" => $Esp, "rank"=>$EspRank, "overall"=>$EspOverall, "match" => $EspMatchNumber, "win" => $EspWin, "draw" => $EspDraw, "lose" => $EspLose, "diff" => $EspScoreDiff, "point" => $EspPoint),
                    array("nation" => $Swe, "rank"=>$SweRank, "overall"=>$SweOverall, "match" => $SweMatchNumber, "win" => $SweWin, "draw" => $SweDraw, "lose" => $SweLose, "diff" => $SweScoreDiff, "point" => $SwePoint),
                );
                usort($groupE, function ($item1, $item2) {
                    return $item2['rank'] <=> $item1['rank'];
                });
                usort($groupE, function ($item1, $item2) {
                    return $item2['diff'] <=> $item1['diff'];
                });
                usort($groupE, function ($item1, $item2) {
                    return $item2['point'] <=> $item1['point'];
                });

                $groupF = array(
                    array("nation" => $Hun, "rank"=>$HunRank, "overall"=>$HunOverall, "match" => $HunMatchNumber, "win" => $HunWin, "draw" => $HunDraw, "lose" => $HunLose, "diff" => $HunScoreDiff, "point" => $HunPoint),
                    array("nation" => $Por, "rank"=>$PorRank, "overall"=>$PorOverall, "match" => $PorMatchNumber, "win" => $PorWin, "draw" => $PorDraw, "lose" => $PorLose, "diff" => $PorScoreDiff, "point" => $PorPoint),
                    array("nation" => $Fran, "rank"=>$FranRank, "overall"=>$FranOverall, "match" => $FranMatchNumber, "win" => $FranWin, "draw" => $FranDraw, "lose" => $FranLose, "diff" => $FranScoreDiff, "point" => $FranPoint),
                    array("nation" => $Germ, "rank"=>$GermRank, "overall"=>$GermOverall, "match" => $GermMatchNumber, "win" => $GermWin, "draw" => $GermDraw, "lose" => $GermLose, "diff" => $GermScoreDiff, "point" => $GermPoint),
                );
                usort($groupF, function ($item1, $item2) {
                    return $item2['rank'] <=> $item1['rank'];
                });
                usort($groupF, function ($item1, $item2) {
                    return $item2['diff'] <=> $item1['diff'];
                });
                usort($groupF, function ($item1, $item2) {
                    return $item2['point'] <=> $item1['point'];
                });

                $groupThird = array(
                    array("group"=>"A", "nation" => $groupA[2]['nation'], "rank"=>$groupA[2]['rank'], "overall"=>$groupA[2]['overall'], "match" => $groupA[2]['match'], "win" => $groupA[2]['win'], "draw" => $groupA[2]['draw'], "lose" => $groupA[2]['lose'], "diff" => $groupA[2]['diff'], "point" => $groupA[2]['point']),
                    array("group"=>"B", "nation" => $groupB[2]['nation'], "rank"=>$groupB[2]['rank'], "overall"=>$groupB[2]['overall'], "match" => $groupB[2]['match'], "win" => $groupB[2]['win'], "draw" => $groupB[2]['draw'], "lose" => $groupB[2]['lose'], "diff" => $groupB[2]['diff'], "point" => $groupB[2]['point']),
                    array("group"=>"C", "nation" => $groupC[2]['nation'], "rank"=>$groupC[2]['rank'], "overall"=>$groupC[2]['overall'], "match" => $groupC[2]['match'], "win" => $groupC[2]['win'], "draw" => $groupC[2]['draw'], "lose" => $groupC[2]['lose'], "diff" => $groupC[2]['diff'], "point" => $groupC[2]['point']),
                    array("group"=>"D", "nation" => $groupD[2]['nation'], "rank"=>$groupD[2]['rank'], "overall"=>$groupD[2]['overall'], "match" => $groupD[2]['match'], "win" => $groupD[2]['win'], "draw" => $groupD[2]['draw'], "lose" => $groupD[2]['lose'], "diff" => $groupD[2]['diff'], "point" => $groupD[2]['point']),
                    array("group"=>"E", "nation" => $groupE[2]['nation'], "rank"=>$groupE[2]['rank'], "overall"=>$groupE[2]['overall'], "match" => $groupE[2]['match'], "win" => $groupE[2]['win'], "draw" => $groupE[2]['draw'], "lose" => $groupE[2]['lose'], "diff" => $groupE[2]['diff'], "point" => $groupE[2]['point']),
                    array("group"=>"F", "nation" => $groupF[2]['nation'], "rank"=>$groupF[2]['rank'], "overall"=>$groupF[2]['overall'], "match" => $groupF[2]['match'], "win" => $groupF[2]['win'], "draw" => $groupF[2]['draw'], "lose" => $groupF[2]['lose'], "diff" => $groupF[2]['diff'], "point" => $groupF[2]['point']),
                );
                usort($groupThird, function ($item1, $item2) {
                    return $item2['rank'] <=> $item1['rank'];
                });
                usort($groupThird, function ($item1, $item2) {
                    return $item2['diff'] <=> $item1['diff'];
                });
                usort($groupThird, function ($item1, $item2) {
                    return $item2['point'] <=> $item1['point'];
                });
            ?>

            <div class="col-md-5" style="text-align:center;">
                <h1>Csoportok</h1>
                <table style="margin-left: auto; margin-right: auto;">
                    <h3>A csoport</h3>
                    <tr>
                        <td>Hely</td>
                        <td>Csapat</td>
                        <td>Mérkőzés</td>
                        <td>Győzelem</td>
                        <td>Döntetlen</td>
                        <td>Vereség</td>
                        <td>Gólkülönbség</td>
                        <td>Pont</td>
                    </tr>
                    <tr>
                        <td style="background-color: blue;">1</td>
                        <td><?php echo $groupA[0]['nation']; ?></td>
                        <td><?php echo $groupA[0]['match']; ?></td>
                        <td><?php echo $groupA[0]['win']; ?></td>
                        <td><?php echo $groupA[0]['draw']; ?></td>
                        <td><?php echo $groupA[0]['lose']; ?></td>
                        <td><?php echo $groupA[0]['diff']; ?></td>
                        <td><?php echo $groupA[0]['point']; ?></td>
                    </tr>
                    <tr>
                        <td style="background-color: blue;">2</td>
                        <td><?php echo $groupA[1]['nation']; ?></td>
                        <td><?php echo $groupA[1]['match']; ?></td>
                        <td><?php echo $groupA[1]['win']; ?></td>
                        <td><?php echo $groupA[1]['draw']; ?></td>
                        <td><?php echo $groupA[1]['lose']; ?></td>
                        <td><?php echo $groupA[1]['diff']; ?></td>
                        <td><?php echo $groupA[1]['point']; ?></td>
                    </tr>
                    <tr>
                        <td style="background-color: green;">3</td>
                        <td><?php echo $groupA[2]['nation']; ?></td>
                        <td><?php echo $groupA[2]['match']; ?></td>
                        <td><?php echo $groupA[2]['win']; ?></td>
                        <td><?php echo $groupA[2]['draw']; ?></td>
                        <td><?php echo $groupA[2]['lose']; ?></td>
                        <td><?php echo $groupA[2]['diff']; ?></td>
                        <td><?php echo $groupA[2]['point']; ?></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><?php echo $groupA[3]['nation']; ?></td>
                        <td><?php echo $groupA[3]['match']; ?></td>
                        <td><?php echo $groupA[3]['win']; ?></td>
                        <td><?php echo $groupA[3]['draw']; ?></td>
                        <td><?php echo $groupA[3]['lose']; ?></td>
                        <td><?php echo $groupA[3]['diff']; ?></td>
                        <td><?php echo $groupA[3]['point']; ?></td>
                    </tr>
                </table>
                <br>
                <table style="margin-left: auto; margin-right: auto;">
                    <h3>B csoport</h3>
                    <tr>
                        <td>Hely</td>
                        <td>Csapat</td>
                        <td>Mérkőzés</td>
                        <td>Győzelem</td>
                        <td>Döntetlen</td>
                        <td>Vereség</td>
                        <td>Gólkülönbség</td>
                        <td>Pont</td>
                    </tr>
                    <tr>
                        <td style="background-color: blue;">1</td>
                        <td><?php echo $groupB[0]['nation']; ?></td>
                        <td><?php echo $groupB[0]['match']; ?></td>
                        <td><?php echo $groupB[0]['win']; ?></td>
                        <td><?php echo $groupB[0]['draw']; ?></td>
                        <td><?php echo $groupB[0]['lose']; ?></td>
                        <td><?php echo $groupB[0]['diff']; ?></td>
                        <td><?php echo $groupB[0]['point']; ?></td>
                    </tr>
                    <tr>
                        <td style="background-color: blue;">2</td>
                        <td><?php echo $groupB[1]['nation']; ?></td>
                        <td><?php echo $groupB[1]['match']; ?></td>
                        <td><?php echo $groupB[1]['win']; ?></td>
                        <td><?php echo $groupB[1]['draw']; ?></td>
                        <td><?php echo $groupB[1]['lose']; ?></td>
                        <td><?php echo $groupB[1]['diff']; ?></td>
                        <td><?php echo $groupB[1]['point']; ?></td>
                    </tr>
                    <tr>
                        <td style="background-color: green;">3</td>
                        <td><?php echo $groupB[2]['nation']; ?></td>
                        <td><?php echo $groupB[2]['match']; ?></td>
                        <td><?php echo $groupB[2]['win']; ?></td>
                        <td><?php echo $groupB[2]['draw']; ?></td>
                        <td><?php echo $groupB[2]['lose']; ?></td>
                        <td><?php echo $groupB[2]['diff']; ?></td>
                        <td><?php echo $groupB[2]['point']; ?></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><?php echo $groupB[3]['nation']; ?></td>
                        <td><?php echo $groupB[3]['match']; ?></td>
                        <td><?php echo $groupB[3]['win']; ?></td>
                        <td><?php echo $groupB[3]['draw']; ?></td>
                        <td><?php echo $groupB[3]['lose']; ?></td>
                        <td><?php echo $groupB[3]['diff']; ?></td>
                        <td><?php echo $groupB[3]['point']; ?></td>
                    </tr>
                </table>
                <br>
                <table style="margin-left: auto; margin-right: auto;">
                    <h3>C csoport</h3>
                    <tr>
                        <td>Hely</td>
                        <td>Csapat</td>
                        <td>Mérkőzés</td>
                        <td>Győzelem</td>
                        <td>Döntetlen</td>
                        <td>Vereség</td>
                        <td>Gólkülönbség</td>
                        <td>Pont</td>
                    </tr>
                    <tr>
                        <td style="background-color: blue;">1</td>
                        <td><?php echo $groupC[0]['nation']; ?></td>
                        <td><?php echo $groupC[0]['match']; ?></td>
                        <td><?php echo $groupC[0]['win']; ?></td>
                        <td><?php echo $groupC[0]['draw']; ?></td>
                        <td><?php echo $groupC[0]['lose']; ?></td>
                        <td><?php echo $groupC[0]['diff']; ?></td>
                        <td><?php echo $groupC[0]['point']; ?></td>
                    </tr>
                    <tr>
                        <td style="background-color: blue;">2</td>
                        <td><?php echo $groupC[1]['nation']; ?></td>
                        <td><?php echo $groupC[1]['match']; ?></td>
                        <td><?php echo $groupC[1]['win']; ?></td>
                        <td><?php echo $groupC[1]['draw']; ?></td>
                        <td><?php echo $groupC[1]['lose']; ?></td>
                        <td><?php echo $groupC[1]['diff']; ?></td>
                        <td><?php echo $groupC[1]['point']; ?></td>
                    </tr>
                    <tr>
                        <td style="background-color: green;">3</td>
                        <td><?php echo $groupC[2]['nation']; ?></td>
                        <td><?php echo $groupC[2]['match']; ?></td>
                        <td><?php echo $groupC[2]['win']; ?></td>
                        <td><?php echo $groupC[2]['draw']; ?></td>
                        <td><?php echo $groupC[2]['lose']; ?></td>
                        <td><?php echo $groupC[2]['diff']; ?></td>
                        <td><?php echo $groupC[2]['point']; ?></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><?php echo $groupC[3]['nation']; ?></td>
                        <td><?php echo $groupC[3]['match']; ?></td>
                        <td><?php echo $groupC[3]['win']; ?></td>
                        <td><?php echo $groupC[3]['draw']; ?></td>
                        <td><?php echo $groupC[3]['lose']; ?></td>
                        <td><?php echo $groupC[3]['diff']; ?></td>
                        <td><?php echo $groupC[3]['point']; ?></td>
                    </tr>
                </table>
                <br>
                <table style="margin-left: auto; margin-right: auto;">
                    <h3>D csoport</h3>
                    <tr>
                        <td>Hely</td>
                        <td>Csapat</td>
                        <td>Mérkőzés</td>
                        <td>Győzelem</td>
                        <td>Döntetlen</td>
                        <td>Vereség</td>
                        <td>Gólkülönbség</td>
                        <td>Pont</td>
                    </tr>
                    <tr>
                        <td style="background-color: blue;">1</td>
                        <td><?php echo $groupD[0]['nation']; ?></td>
                        <td><?php echo $groupD[0]['match']; ?></td>
                        <td><?php echo $groupD[0]['win']; ?></td>
                        <td><?php echo $groupD[0]['draw']; ?></td>
                        <td><?php echo $groupD[0]['lose']; ?></td>
                        <td><?php echo $groupD[0]['diff']; ?></td>
                        <td><?php echo $groupD[0]['point']; ?></td>
                    </tr>
                    <tr>
                        <td style="background-color: blue;">2</td>
                        <td><?php echo $groupD[1]['nation']; ?></td>
                        <td><?php echo $groupD[1]['match']; ?></td>
                        <td><?php echo $groupD[1]['win']; ?></td>
                        <td><?php echo $groupD[1]['draw']; ?></td>
                        <td><?php echo $groupD[1]['lose']; ?></td>
                        <td><?php echo $groupD[1]['diff']; ?></td>
                        <td><?php echo $groupD[1]['point']; ?></td>
                    </tr>
                    <tr>
                        <td style="background-color: green;">3</td>
                        <td><?php echo $groupD[2]['nation']; ?></td>
                        <td><?php echo $groupD[2]['match']; ?></td>
                        <td><?php echo $groupD[2]['win']; ?></td>
                        <td><?php echo $groupD[2]['draw']; ?></td>
                        <td><?php echo $groupD[2]['lose']; ?></td>
                        <td><?php echo $groupD[2]['diff']; ?></td>
                        <td><?php echo $groupD[2]['point']; ?></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><?php echo $groupD[3]['nation']; ?></td>
                        <td><?php echo $groupD[3]['match']; ?></td>
                        <td><?php echo $groupD[3]['win']; ?></td>
                        <td><?php echo $groupD[3]['draw']; ?></td>
                        <td><?php echo $groupD[3]['lose']; ?></td>
                        <td><?php echo $groupD[3]['diff']; ?></td>
                        <td><?php echo $groupD[3]['point']; ?></td>
                    </tr>
                </table>
                <br>
                <table style="margin-left: auto; margin-right: auto;">
                    <h3>E csoport</h3>
                    <tr>
                        <td>Hely</td>
                        <td>Csapat</td>
                        <td>Mérkőzés</td>
                        <td>Győzelem</td>
                        <td>Döntetlen</td>
                        <td>Vereség</td>
                        <td>Gólkülönbség</td>
                        <td>Pont</td>
                    </tr>
                    <tr>
                        <td style="background-color: blue;">1</td>
                        <td><?php echo $groupE[0]['nation']; ?></td>
                        <td><?php echo $groupE[0]['match']; ?></td>
                        <td><?php echo $groupE[0]['win']; ?></td>
                        <td><?php echo $groupE[0]['draw']; ?></td>
                        <td><?php echo $groupE[0]['lose']; ?></td>
                        <td><?php echo $groupE[0]['diff']; ?></td>
                        <td><?php echo $groupE[0]['point']; ?></td>
                    </tr>
                    <tr>
                        <td style="background-color: blue;">2</td>
                        <td><?php echo $groupE[1]['nation']; ?></td>
                        <td><?php echo $groupE[1]['match']; ?></td>
                        <td><?php echo $groupE[1]['win']; ?></td>
                        <td><?php echo $groupE[1]['draw']; ?></td>
                        <td><?php echo $groupE[1]['lose']; ?></td>
                        <td><?php echo $groupE[1]['diff']; ?></td>
                        <td><?php echo $groupE[1]['point']; ?></td>
                    </tr>
                    <tr>
                        <td style="background-color: green;">3</td>
                        <td><?php echo $groupE[2]['nation']; ?></td>
                        <td><?php echo $groupE[2]['match']; ?></td>
                        <td><?php echo $groupE[2]['win']; ?></td>
                        <td><?php echo $groupE[2]['draw']; ?></td>
                        <td><?php echo $groupE[2]['lose']; ?></td>
                        <td><?php echo $groupE[2]['diff']; ?></td>
                        <td><?php echo $groupE[2]['point']; ?></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><?php echo $groupE[3]['nation']; ?></td>
                        <td><?php echo $groupE[3]['match']; ?></td>
                        <td><?php echo $groupE[3]['win']; ?></td>
                        <td><?php echo $groupE[3]['draw']; ?></td>
                        <td><?php echo $groupE[3]['lose']; ?></td>
                        <td><?php echo $groupE[3]['diff']; ?></td>
                        <td><?php echo $groupE[3]['point']; ?></td>
                    </tr>
                </table>
                <br>
                <table style="margin-left: auto; margin-right: auto;">
                    <h3>F csoport</h3>
                    <tr>
                        <td>Hely</td>
                        <td>Csapat</td>
                        <td>Mérkőzés</td>
                        <td>Győzelem</td>
                        <td>Döntetlen</td>
                        <td>Vereség</td>
                        <td>Gólkülönbség</td>
                        <td>Pont</td>
                    </tr>
                    <tr>
                        <td style="background-color: blue;">1</td>
                        <td><?php echo $groupF[0]['nation']; ?></td>
                        <td><?php echo $groupF[0]['match']; ?></td>
                        <td><?php echo $groupF[0]['win']; ?></td>
                        <td><?php echo $groupF[0]['draw']; ?></td>
                        <td><?php echo $groupF[0]['lose']; ?></td>
                        <td><?php echo $groupF[0]['diff']; ?></td>
                        <td><?php echo $groupF[0]['point']; ?></td>
                    </tr>
                    <tr>
                        <td style="background-color: blue;">2</td>
                        <td><?php echo $groupF[1]['nation']; ?></td>
                        <td><?php echo $groupF[1]['match']; ?></td>
                        <td><?php echo $groupF[1]['win']; ?></td>
                        <td><?php echo $groupF[1]['draw']; ?></td>
                        <td><?php echo $groupF[1]['lose']; ?></td>
                        <td><?php echo $groupF[1]['diff']; ?></td>
                        <td><?php echo $groupF[1]['point']; ?></td>
                    </tr>
                    <tr>
                        <td style="background-color: green;">3</td>
                        <td><?php echo $groupF[2]['nation']; ?></td>
                        <td><?php echo $groupF[2]['match']; ?></td>
                        <td><?php echo $groupF[2]['win']; ?></td>
                        <td><?php echo $groupF[2]['draw']; ?></td>
                        <td><?php echo $groupF[2]['lose']; ?></td>
                        <td><?php echo $groupF[2]['diff']; ?></td>
                        <td><?php echo $groupF[2]['point']; ?></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><?php echo $groupF[3]['nation']; ?></td>
                        <td><?php echo $groupF[3]['match']; ?></td>
                        <td><?php echo $groupF[3]['win']; ?></td>
                        <td><?php echo $groupF[3]['draw']; ?></td>
                        <td><?php echo $groupF[3]['lose']; ?></td>
                        <td><?php echo $groupF[3]['diff']; ?></td>
                        <td><?php echo $groupF[3]['point']; ?></td>
                    </tr>
                </table>
                <br>
                <table style="margin-left: auto; margin-right: auto;">
                    <h3>Harmadik helyezett csapatok</h3>
                    <tr>
                        <td>Hely</td>
                        <td>Csapat</td>
                        <td>Mérkőzés</td>
                        <td>Győzelem</td>
                        <td>Döntetlen</td>
                        <td>Vereség</td>
                        <td>Gólkülönbség</td>
                        <td>Pont</td>
                    </tr>
                    <tr>
                        <td style="background-color: blue;">1</td>
                        <td><?php echo $groupThird[0]['nation']; ?></td>
                        <td><?php echo $groupThird[0]['match']; ?></td>
                        <td><?php echo $groupThird[0]['win']; ?></td>
                        <td><?php echo $groupThird[0]['draw']; ?></td>
                        <td><?php echo $groupThird[0]['lose']; ?></td>
                        <td><?php echo $groupThird[0]['diff']; ?></td>
                        <td><?php echo $groupThird[0]['point']; ?></td>
                    </tr>
                    <tr>
                        <td style="background-color: blue;">2</td>
                        <td><?php echo $groupThird[1]['nation']; ?></td>
                        <td><?php echo $groupThird[1]['match']; ?></td>
                        <td><?php echo $groupThird[1]['win']; ?></td>
                        <td><?php echo $groupThird[1]['draw']; ?></td>
                        <td><?php echo $groupThird[1]['lose']; ?></td>
                        <td><?php echo $groupThird[1]['diff']; ?></td>
                        <td><?php echo $groupThird[1]['point']; ?></td>
                    </tr>
                    <tr>
                        <td style="background-color: blue;">3</td>
                        <td><?php echo $groupThird[2]['nation']; ?></td>
                        <td><?php echo $groupThird[2]['match']; ?></td>
                        <td><?php echo $groupThird[2]['win']; ?></td>
                        <td><?php echo $groupThird[2]['draw']; ?></td>
                        <td><?php echo $groupThird[2]['lose']; ?></td>
                        <td><?php echo $groupThird[2]['diff']; ?></td>
                        <td><?php echo $groupThird[2]['point']; ?></td>
                    </tr>
                    <tr>
                        <td style="background-color: blue;">4</td>
                        <td><?php echo $groupThird[3]['nation']; ?></td>
                        <td><?php echo $groupThird[3]['match']; ?></td>
                        <td><?php echo $groupThird[3]['win']; ?></td>
                        <td><?php echo $groupThird[3]['draw']; ?></td>
                        <td><?php echo $groupThird[3]['lose']; ?></td>
                        <td><?php echo $groupThird[3]['diff']; ?></td>
                        <td><?php echo $groupThird[3]['point']; ?></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><?php echo $groupThird[4]['nation']; ?></td>
                        <td><?php echo $groupThird[4]['match']; ?></td>
                        <td><?php echo $groupThird[4]['win']; ?></td>
                        <td><?php echo $groupThird[4]['draw']; ?></td>
                        <td><?php echo $groupThird[4]['lose']; ?></td>
                        <td><?php echo $groupThird[4]['diff']; ?></td>
                        <td><?php echo $groupThird[4]['point']; ?></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td><?php echo $groupThird[5]['nation']; ?></td>
                        <td><?php echo $groupThird[5]['match']; ?></td>
                        <td><?php echo $groupThird[5]['win']; ?></td>
                        <td><?php echo $groupThird[5]['draw']; ?></td>
                        <td><?php echo $groupThird[5]['lose']; ?></td>
                        <td><?php echo $groupThird[5]['diff']; ?></td>
                        <td><?php echo $groupThird[5]['point']; ?></td>
                    </tr>
                </table>
                <br>
            </div>
        </div>

        <?php
            $third = array(
                array("nation" => $groupThird[0]['nation'], "group"=>$groupThird[0]['group'], "overall"=>$groupThird[0]['overall']),
                array("nation" => $groupThird[1]['nation'], "group"=>$groupThird[1]['group'], "overall"=>$groupThird[1]['overall']),
                array("nation" => $groupThird[2]['nation'], "group"=>$groupThird[2]['group'], "overall"=>$groupThird[2]['overall']),
                array("nation" => $groupThird[3]['nation'], "group"=>$groupThird[3]['group'], "overall"=>$groupThird[3]['overall']),
            );
            usort($third, function ($item1, $item2) {
                return $item1['group'] <=> $item2['group'];
            });

            $a = $third[0]['group'];
            $b = $third[1]['group'];
            $c = $third[2]['group'];
            $d = $third[3]['group'];

            if($a == "A" && $b == "B" && $c == "C" && $d == "D" ||
                $a == "A" && $b == "B" && $c == "C" && $d == "E" ||
                $a == "A" && $b == "B" && $c == "C" && $d == "F") {
                $firstFromTheThird = $third[0]['nation'];
                $secondFromTheThird = $third[3]['nation'];
                $thirdFromTheThird = $third[1]['nation'];
                $fourthFromTheThird = $third[2]['nation'];

                $firstOverall = $third[0]['overall'];
                $secondOverall = $third[3]['overall'];
                $thirdOverall = $third[1]['overall'];
                $fourthOverall = $third[2]['overall'];
            } 
            if($a == "A" && $b == "B" && $c == "D" && $d == "E" ||
                $a == "A" && $b == "B" && $c == "D" && $d == "F") {
                $firstFromTheThird = $third[2]['nation'];
                $secondFromTheThird = $third[3]['nation'];
                $thirdFromTheThird = $third[0]['nation'];
                $fourthFromTheThird = $third[1]['nation'];

                $firstOverall = $third[2]['overall'];
                $secondOverall = $third[3]['overall'];
                $thirdOverall = $third[0]['overall'];
                $fourthOverall = $third[1]['overall'];
            }
            if($a == "A" && $b == "B" && $c == "E" && $d == "F" ||
                $a == "A" && $b == "C" && $c == "E" && $d == "F" ||
                $a == "A" && $b == "D" && $c == "E" && $d == "F") {
                $firstFromTheThird = $third[2]['nation'];
                $secondFromTheThird = $third[3]['nation'];
                $thirdFromTheThird = $third[1]['nation'];
                $fourthFromTheThird = $third[0]['nation'];

                $firstOverall = $third[2]['overall'];
                $secondOverall = $third[3]['overall'];
                $thirdOverall = $third[1]['overall'];
                $fourthOverall = $third[0]['overall'];
            }
            if($a == "A" && $b == "C" && $c == "D" && $d == "E") {
                $firstFromTheThird = $third[3]['nation'];
                $secondFromTheThird = $third[2]['nation'];
                $thirdFromTheThird = $third[1]['nation'];
                $fourthFromTheThird = $third[0]['nation'];

                $firstOverall = $third[3]['overall'];
                $secondOverall = $third[2]['overall'];
                $thirdOverall = $third[1]['overall'];
                $fourthOverall = $third[0]['overall'];
            }
            if($a == "B" && $b == "C" && $c == "D" && $d == "E") {
                $firstFromTheThird = $third[3]['nation'];
                $secondFromTheThird = $third[2]['nation'];
                $thirdFromTheThird = $third[0]['nation'];
                $fourthFromTheThird = $third[1]['nation'];

                $firstOverall = $third[3]['overall'];
                $secondOverall = $third[2]['overall'];
                $thirdOverall = $third[0]['overall'];
                $fourthOverall = $third[1]['overall'];
            }
            if($a == "A" && $b == "C" && $c == "D" && $d == "F" ||
                $a == "B" && $b == "C" && $c == "D" && $d == "F" ||
                $a == "B" && $b == "C" && $c == "E" && $d == "F" ||
                $a == "B" && $b == "D" && $c == "E" && $d == "F" ||
                $a == "C" && $b == "D" && $c == "E" && $d == "F") {
                $firstFromTheThird = $third[3]['nation'];
                $secondFromTheThird = $third[2]['nation'];
                $thirdFromTheThird = $third[1]['nation'];
                $fourthFromTheThird = $third[0]['nation'];

                $firstOverall = $third[3]['overall'];
                $secondOverall = $third[2]['overall'];
                $thirdOverall = $third[1]['overall'];
                $fourthOverall = $third[0]['overall'];
            }
        ?>

        <div class="row">
            <div class="col" style="text-align:center;">
                <h1>Nyolcaddöntők</h1>
                <table style="margin-left: auto; margin-right: auto;">
                    <tr>
                        <td style="width: 10%;">
                            <?php echo $groupB[0]['nation']; ?>
                            <br>
                            <?php
                                if (isset($_POST['someAction'])) {
                                    if ($groupB[0]['overall'] > $firstOverall) {
                                        $firstTeamScore = mt_rand(1, 3);
                                        $secondtTeamScore = mt_rand(0, 2);
                                    } else if ($groupB[0]['overall'] < $firstOverall) {
                                        $firstTeamScore = mt_rand(0, 1);
                                        $secondtTeamScore = mt_rand(1, 3);
                                    } else if ($groupB[0]['overall'] == $firstOverall) {
                                        $firstTeamScore = mt_rand(0, 2);
                                        $secondtTeamScore = mt_rand(0, 2);
                                    }
                                    if ($firstTeamScore > $secondtTeamScore) {
                                        $firstWinner = $groupB[0]['nation'];
                                        $fifthOverall = $groupB[0]['overall'];
                                    } else if ($firstTeamScore < $secondtTeamScore) {
                                        $firstWinner = $firstFromTheThird;
                                        $fifthOverall = $firstOverall;
                                    } else if ($firstTeamScore == $secondtTeamScore) {
                                        $overtime = true;
                                        do {
                                            $a = mt_rand(0, 1);
                                            $b = mt_rand(0, 1);
                                        } while($a == $b);
                                        $firstTeamScore += $a;
                                        $secondtTeamScore += $b;
                                        if($firstTeamScore != $secondtTeamScore) {
                                           if ($firstTeamScore > $secondtTeamScore) {
                                                $firstWinner = $groupB[0]['nation'];
                                                $fifthOverall = $groupB[0]['overall'];
                                            } else if ($firstTeamScore < $secondtTeamScore) {
                                                $firstWinner = $firstFromTheThird;
                                                $fifthOverall = $firstOverall;
                                            }
                                        } 
                                    }
                                    echo $firstTeamScore;
                                    echo " - ";
                                    echo $secondtTeamScore;
                                }
                            ?>
                            <br>
                            <?php if (isset($firstFromTheThird)) echo $firstFromTheThird;?>
                        </td>
                        <td style="width: 10%;">
                            <?php echo $groupA[0]['nation']; ?>
                            <br>
                            <?php
                                if (isset($_POST['someAction'])) {
                                    if ($groupA[0]['overall'] > $groupC[1]['overall']) {
                                        $firstTeamScore = mt_rand(1, 3);
                                        $secondtTeamScore = mt_rand(0, 2);
                                    } else if ($groupA[0]['overall'] < $groupC[1]['overall']) {
                                        $firstTeamScore = mt_rand(0, 1);
                                        $secondtTeamScore = mt_rand(1, 3);
                                    } else if ($groupA[0]['overall'] == $groupC[1]['overall']) {
                                        $firstTeamScore = mt_rand(0, 2);
                                        $secondtTeamScore = mt_rand(0, 2);
                                    }
                                    if ($firstTeamScore > $secondtTeamScore) {
                                        $secondWinner = $groupA[0]['nation'];
                                        $sixthOverall = $groupA[0]['overall'];
                                    } else if ($firstTeamScore < $secondtTeamScore) {
                                        $secondWinner = $groupC[1]['nation'];
                                        $sixthOverall = $groupC[1]['overall'];
                                    } else if ($firstTeamScore == $secondtTeamScore) {
                                        $overtime = true;
                                        do {
                                            $a = mt_rand(0, 1);
                                            $b = mt_rand(0, 1);
                                        } while($a == $b);
                                        $firstTeamScore += $a;
                                        $secondtTeamScore += $b;
                                        if($firstTeamScore != $secondtTeamScore) {
                                           if ($firstTeamScore > $secondtTeamScore) {
                                                $secondWinner = $groupA[0]['nation'];
                                                $sixthOverall = $groupA[0]['overall'];
                                            } else if ($firstTeamScore < $secondtTeamScore) {
                                                $secondWinner = $groupC[1]['nation'];
                                                $sixthOverall = $groupC[1]['overall'];
                                            }
                                        } 
                                    }
                                    echo $firstTeamScore;
                                    echo " - ";
                                    echo $secondtTeamScore;
                                } 
                            ?>
                            <br>
                            <?php echo $groupC[1]['nation'];?>
                        </td>
                        <td style="width: 10%;">
                            <?php echo $groupF[0]['nation']; ?>
                            <br>
                            <?php
                                if (isset($_POST['someAction'])) {
                                    if ($groupF[0]['overall'] > $fourthOverall) {
                                        $firstTeamScore = mt_rand(1, 3);
                                        $secondtTeamScore = mt_rand(0, 2);
                                    } else if ($groupF[0]['overall'] < $fourthOverall) {
                                        $firstTeamScore = mt_rand(0, 1);
                                        $secondtTeamScore = mt_rand(1, 3);
                                    } else if ($groupF[0]['overall'] == $fourthOverall) {
                                        $firstTeamScore = mt_rand(0, 2);
                                        $secondtTeamScore = mt_rand(0, 2);
                                    }
                                    if ($firstTeamScore > $secondtTeamScore) {
                                        $thirdWinner = $groupF[0]['nation'];
                                        $seventhOverall = $groupF[0]['overall'];
                                    } else if ($firstTeamScore < $secondtTeamScore) {
                                        $thirdWinner = $fourthFromTheThird;
                                        $seventhOverall = $thirdOverall;
                                    } else if ($firstTeamScore == $secondtTeamScore) {
                                        $overtime = true;
                                        do {
                                            $a = mt_rand(0, 1);
                                            $b = mt_rand(0, 1);
                                        } while($a == $b);
                                        $firstTeamScore += $a;
                                        $secondtTeamScore += $b;
                                        if($firstTeamScore != $secondtTeamScore) {
                                        if ($firstTeamScore > $secondtTeamScore) {
                                                $thirdWinner = $groupF[0]['nation'];
                                                $seventhOverall = $groupF[0]['overall'];
                                            } else if ($firstTeamScore < $secondtTeamScore) {
                                                $thirdWinner = $fourthFromTheThird;
                                                $seventhOverall = $thirdOverall;
                                            }
                                        } 
                                    }
                                    echo $firstTeamScore;
                                    echo " - ";
                                    echo $secondtTeamScore;
                                }
                            ?>
                            <br>
                            <?php if (isset($fourthFromTheThird)) echo $fourthFromTheThird; ?>
                        </td>
                        <td style="width: 10%;">
                            <?php echo $groupD[1]['nation']; ?>
                            <br>
                            <?php
                                if (isset($_POST['someAction'])) {
                                    if ($groupD[1]['overall'] > $groupE[1]['overall']) {
                                        $firstTeamScore = mt_rand(1, 3);
                                        $secondtTeamScore = mt_rand(0, 2);
                                    } else if ($groupD[1]['overall'] < $groupE[1]['overall']) {
                                        $firstTeamScore = mt_rand(0, 1);
                                        $secondtTeamScore = mt_rand(1, 3);
                                    } else if ($groupD[1]['overall'] == $groupE[1]['overall']) {
                                        $firstTeamScore = mt_rand(0, 2);
                                        $secondtTeamScore = mt_rand(0, 2);
                                    }
                                    if ($firstTeamScore > $secondtTeamScore) {
                                        $fourthWinner = $groupD[1]['nation'];
                                        $eightOverall = $groupD[1]['overall'];
                                    } else if ($firstTeamScore < $secondtTeamScore) {
                                        $fourthWinner = $groupE[1]['nation'];
                                        $eightOverall = $groupE[1]['overall'];
                                    } else if ($firstTeamScore == $secondtTeamScore) {
                                        $overtime = true;
                                        do {
                                            $a = mt_rand(0, 1);
                                            $b = mt_rand(0, 1);
                                        } while($a == $b);
                                        $firstTeamScore += $a;
                                        $secondtTeamScore += $b;
                                        if($firstTeamScore != $secondtTeamScore) {
                                           if ($firstTeamScore > $secondtTeamScore) {
                                                $fourthWinner = $groupD[1]['nation'];
                                                $eightOverall = $groupD[1]['overall'];
                                            } else if ($firstTeamScore < $secondtTeamScore) {
                                                $fourthWinner = $groupE[1]['nation'];
                                                $eightOverall = $groupE[1]['overall'];
                                            }
                                        } 
                                    }
                                    echo $firstTeamScore;
                                    echo " - ";
                                    echo $secondtTeamScore;
                                } 
                            ?>
                            <br>
                            <?php echo $groupE[1]['nation']; ?>
                        </td>
                        <td style="width: 10%;">
                            <?php echo $groupE[0]['nation']; ?>
                            <br>
                            <?php
                                if (isset($_POST['someAction'])) {
                                    if ($groupE[0]['overall'] > $thirdOverall) {
                                        $firstTeamScore = mt_rand(1, 3);
                                        $secondtTeamScore = mt_rand(0, 2);
                                    } else if ($groupE[0]['overall'] < $thirdOverall) {
                                        $firstTeamScore = mt_rand(0, 1);
                                        $secondtTeamScore = mt_rand(1, 3);
                                    } else if ($groupE[0]['overall'] == $thirdOverall) {
                                        $firstTeamScore = mt_rand(0, 2);
                                        $secondtTeamScore = mt_rand(0, 2);
                                    }
                                    if ($firstTeamScore > $secondtTeamScore) {
                                        $fifthWinner = $groupE[0]['nation'];
                                        $ninthOverall = $groupE[0]['overall'];
                                    } else if ($firstTeamScore < $secondtTeamScore) {
                                        $fifthWinner = $thirdFromTheThird;
                                        $ninthOverall = $fifthOverall;
                                    } else if ($firstTeamScore == $secondtTeamScore) {
                                        $overtime = true;
                                        do {
                                            $a = mt_rand(0, 1);
                                            $b = mt_rand(0, 1);
                                        } while($a == $b);
                                        $firstTeamScore += $a;
                                        $secondtTeamScore += $b;
                                        if($firstTeamScore != $secondtTeamScore) {
                                        if ($firstTeamScore > $secondtTeamScore) {
                                                $fifthWinner = $groupE[0]['nation'];
                                                $ninthOverall = $groupE[0]['overall'];
                                            } else if ($firstTeamScore < $secondtTeamScore) {
                                                $fifthWinner = $thirdFromTheThird;
                                                $ninthOverall = $fifthOverall;
                                            }
                                        } 
                                    }
                                    echo $firstTeamScore;
                                    echo " - ";
                                    echo $secondtTeamScore;
                                }
                            ?>
                            <br>
                            <?php if (isset($thirdFromTheThird)) echo $thirdFromTheThird; ?>
                        </td>
                        <td style="width: 10%;">
                            <?php echo $groupD[0]['nation']; ?>
                            <br>
                            <?php
                                if (isset($_POST['someAction'])) {
                                    if ($groupD[0]['overall'] > $groupF[1]['overall']) {
                                        $firstTeamScore = mt_rand(1, 3);
                                        $secondtTeamScore = mt_rand(0, 2);
                                    } else if ($groupD[0]['overall'] < $groupF[1]['overall']) {
                                        $firstTeamScore = mt_rand(0, 1);
                                        $secondtTeamScore = mt_rand(1, 3);
                                    } else if ($groupD[0]['overall'] == $groupF[1]['overall']) {
                                        $firstTeamScore = mt_rand(0, 2);
                                        $secondtTeamScore = mt_rand(0, 2);
                                    }
                                    if ($firstTeamScore > $secondtTeamScore) {
                                        $sixthWinner = $groupD[0]['nation'];
                                        $tenthOverall = $groupD[0]['overall'];
                                    } else if ($firstTeamScore < $secondtTeamScore) {
                                        $sixthWinner = $groupF[1]['nation'];
                                        $tenthOverall = $groupF[1]['overall'];
                                    } else if ($firstTeamScore == $secondtTeamScore) {
                                        $overtime = true;
                                        do {
                                            $a = mt_rand(0, 1);
                                            $b = mt_rand(0, 1);
                                        } while($a == $b);
                                        $firstTeamScore += $a;
                                        $secondtTeamScore += $b;
                                        if($firstTeamScore != $secondtTeamScore) {
                                           if ($firstTeamScore > $secondtTeamScore) {
                                                $sixthWinner = $groupD[0]['nation'];
                                                $tenthOverall = $groupD[0]['overall'];
                                            } else if ($firstTeamScore < $secondtTeamScore) {
                                                $sixthWinner = $groupF[1]['nation'];
                                                $tenthOverall = $groupF[1]['overall'];
                                            }
                                        } 
                                    }
                                    echo $firstTeamScore;
                                    echo " - ";
                                    echo $secondtTeamScore;
                                } 
                            ?>
                            <br>
                            <?php echo $groupF[1]['nation']; ?>
                        </td>
                        <td style="width: 10%;">
                            <?php echo $groupC[0]['nation']; ?>
                            <br>
                            <?php
                                if (isset($_POST['someAction'])) {
                                    if ($groupC[0]['overall'] > $secondOverall) {
                                        $firstTeamScore = mt_rand(1, 3);
                                        $secondtTeamScore = mt_rand(0, 2);
                                    } else if ($groupC[0]['overall'] < $secondOverall) {
                                        $firstTeamScore = mt_rand(0, 1);
                                        $secondtTeamScore = mt_rand(1, 3);
                                    } else if ($groupC[0]['overall'] == $secondOverall) {
                                        $firstTeamScore = mt_rand(0, 2);
                                        $secondtTeamScore = mt_rand(0, 2);
                                    }
                                    if ($firstTeamScore > $secondtTeamScore) {
                                        $sevenWinner = $groupC[0]['nation'];
                                        $eleventhOverall = $groupC[0]['overall'];
                                    } else if ($firstTeamScore < $secondtTeamScore) {
                                        $sevenWinner = $secondFromTheThird;
                                        $eleventhOverall = $seventhOverall;
                                    } else if ($firstTeamScore == $secondtTeamScore) {
                                        $overtime = true;
                                        do {
                                            $a = mt_rand(0, 1);
                                            $b = mt_rand(0, 1);
                                        } while($a == $b);
                                        $firstTeamScore += $a;
                                        $secondtTeamScore += $b;
                                        if($firstTeamScore != $secondtTeamScore) {
                                        if ($firstTeamScore > $secondtTeamScore) {
                                                $sevenWinner = $groupC[0]['nation'];
                                                $eleventhOverall = $groupC[0]['overall'];
                                            } else if ($firstTeamScore < $secondtTeamScore) {
                                                $sevenWinner = $secondFromTheThird;
                                                $eleventhOverall = $seventhOverall;
                                            }
                                        } 
                                    }
                                    echo $firstTeamScore;
                                    echo " - ";
                                    echo $secondtTeamScore;
                                }
                            ?>
                            <br>
                            <?php if (isset($secondFromTheThird)) echo $secondFromTheThird; ?>
                        </td>
                        <td style="width: 10%;">
                            <?php echo $groupA[1]['nation']; ?>
                            <br>
                            <?php
                                if (isset($_POST['someAction'])) {
                                    if ($groupA[1]['overall'] > $groupB[1]['overall']) {
                                        $firstTeamScore = mt_rand(1, 3);
                                        $secondtTeamScore = mt_rand(0, 2);
                                    } else if ($groupA[1]['overall'] < $groupB[1]['overall']) {
                                        $firstTeamScore = mt_rand(0, 1);
                                        $secondtTeamScore = mt_rand(1, 3);
                                    } else if ($groupA[1]['overall'] == $groupB[1]['overall']) {
                                        $firstTeamScore = mt_rand(0, 2);
                                        $secondtTeamScore = mt_rand(0, 2);
                                    }
                                    if ($firstTeamScore > $secondtTeamScore) {
                                        $eightWinner = $groupA[1]['nation'];
                                        $twelveOverall = $groupA[1]['nation'];
                                    } else if ($firstTeamScore < $secondtTeamScore) {
                                        $eightWinner = $groupB[1]['nation'];
                                        $twelveOverall = $groupB[1]['nation'];
                                    } else if ($firstTeamScore == $secondtTeamScore) {
                                        $overtime = true;
                                        do {
                                            $a = mt_rand(0, 1);
                                            $b = mt_rand(0, 1);
                                        } while($a == $b);
                                        $firstTeamScore += $a;
                                        $secondtTeamScore += $b;
                                        if($firstTeamScore != $secondtTeamScore) {
                                           if ($firstTeamScore > $secondtTeamScore) {
                                                $eightWinner = $groupA[1]['nation'];
                                                $twelveOverall = $groupA[1]['nation'];
                                            } else if ($firstTeamScore < $secondtTeamScore) {
                                                $eightWinner = $groupB[1]['nation'];
                                                $twelveOverall = $groupB[1]['nation'];
                                            }
                                        } 
                                    }
                                    echo $firstTeamScore;
                                    echo " - ";
                                    echo $secondtTeamScore;
                                } 
                            ?>
                            <br>
                            <?php echo $groupB[1]['nation']; ?>
                        </td>
                    </tr>
                    <br>
                </table>
                <br>
            </div>
        </div>

        <div class="row">
            <div class="col" style="text-align:center;">
                <h1>Negyeddöntők</h1>
                <table style="margin-left: auto; margin-right: auto;">
                    <tr>
                        <td style="width: 10%;">
                            <?php if (isset($firstWinner)) echo  $firstWinner ?>
                            <br>
                            <?php
                                if (isset($_POST['someAction'])) {
                                    if ($fifthOverall > $sixthOverall) {
                                        $firstTeamScore = mt_rand(1, 3);
                                        $secondtTeamScore = mt_rand(0, 2);
                                    } else if ($fifthOverall < $sixthOverall) {
                                        $firstTeamScore = mt_rand(0, 1);
                                        $secondtTeamScore = mt_rand(1, 3);
                                    } else if ($fifthOverall == $sixthOverall) {
                                        $firstTeamScore = mt_rand(0, 2);
                                        $secondtTeamScore = mt_rand(0, 2);
                                    }
                                    if ($firstTeamScore > $secondtTeamScore) {
                                        $quarterFirstWinner = $firstWinner;
                                        $quarterFirstOverall = $fifthOverall;
                                    } else if ($firstTeamScore < $secondtTeamScore) {
                                        $quarterFirstWinner = $secondWinner;
                                        $quarterFirstOverall = $sixthOverall;
                                    } else if ($firstTeamScore == $secondtTeamScore) {
                                        $overtime = true;
                                        do {
                                            $a = mt_rand(0, 1);
                                            $b = mt_rand(0, 1);
                                        } while($a == $b);
                                        $firstTeamScore += $a;
                                        $secondtTeamScore += $b;
                                        if($firstTeamScore != $secondtTeamScore) {
                                           if ($firstTeamScore > $secondtTeamScore) {
                                                $quarterFirstWinner = $firstWinner;
                                                $quarterFirstOverall = $fifthOverall;
                                            } else if ($firstTeamScore < $secondtTeamScore) {
                                                $quarterFirstWinner = $secondWinner;
                                                $quarterFirstOverall = $sixthOverall;
                                            }
                                        } 
                                    }
                                    echo $firstTeamScore;
                                    echo " - ";
                                    echo $secondtTeamScore;
                                }
                            ?>
                            <br>
                            <?php if (isset($secondWinner)) echo  $secondWinner ?>
                        </td>
                        <td style="width: 10%;">
                            <?php if (isset($thirdWinner)) echo  $thirdWinner ?>
                            <br>
                            <?php
                                if (isset($_POST['someAction'])) {
                                    if ($seventhOverall > $eightOverall) {
                                        $firstTeamScore = mt_rand(1, 3);
                                        $secondtTeamScore = mt_rand(0, 2);
                                    } else if ($seventhOverall < $eightOverall) {
                                        $firstTeamScore = mt_rand(0, 1);
                                        $secondtTeamScore = mt_rand(1, 3);
                                    } else if ($seventhOverall == $eightOverall) {
                                        $firstTeamScore = mt_rand(0, 2);
                                        $secondtTeamScore = mt_rand(0, 2);
                                    }
                                    if ($firstTeamScore > $secondtTeamScore) {
                                        $quarterSecondWinner = $thirdWinner;
                                        $quarterSecondOverall = $seventhOverall;
                                    } else if ($firstTeamScore < $secondtTeamScore) {
                                        $quarterSecondWinner = $fourthWinner;
                                        $quarterSecondOverall = $eightOverall;
                                    } else if ($firstTeamScore == $secondtTeamScore) {
                                        $overtime = true;
                                        do {
                                            $a = mt_rand(0, 1);
                                            $b = mt_rand(0, 1);
                                        } while($a == $b);
                                        $firstTeamScore += $a;
                                        $secondtTeamScore += $b;
                                        if($firstTeamScore != $secondtTeamScore) {
                                           if ($firstTeamScore > $secondtTeamScore) {
                                                $quarterSecondWinner = $thirdWinner;
                                                $quarterSecondOverall = $seventhOverall;
                                            } else if ($firstTeamScore < $secondtTeamScore) {
                                                $quarterSecondWinner = $fourthWinner;
                                                $quarterSecondOverall = $eightOverall;
                                            }
                                        } 
                                    }
                                    echo $firstTeamScore;
                                    echo " - ";
                                    echo $secondtTeamScore;
                                }
                            ?>
                            <br>
                            <?php if (isset($fourthWinner)) echo  $fourthWinner ?>
                        </td>
                        <td style="width: 10%;">
                            <?php if (isset($fifthWinner)) echo  $fifthWinner ?>
                            <br>
                            <?php
                                if (isset($_POST['someAction'])) {
                                    if ($ninthOverall > $tenthOverall) {
                                        $firstTeamScore = mt_rand(1, 3);
                                        $secondtTeamScore = mt_rand(0, 2);
                                    } else if ($ninthOverall < $tenthOverall) {
                                        $firstTeamScore = mt_rand(0, 1);
                                        $secondtTeamScore = mt_rand(1, 3);
                                    } else if ($ninthOverall == $tenthOverall) {
                                        $firstTeamScore = mt_rand(0, 2);
                                        $secondtTeamScore = mt_rand(0, 2);
                                    }
                                    if ($firstTeamScore > $secondtTeamScore) {
                                        $quarterThirdWinner = $fifthWinner;
                                        $quarterThirdOverall = $ninthOverall;
                                    } else if ($firstTeamScore < $secondtTeamScore) {
                                        $quarterThirdWinner = $sixthWinner;
                                        $quarterThirdOverall = $tenthOverall;
                                    } else if ($firstTeamScore == $secondtTeamScore) {
                                        $overtime = true;
                                        do {
                                            $a = mt_rand(0, 1);
                                            $b = mt_rand(0, 1);
                                        } while($a == $b);
                                        $firstTeamScore += $a;
                                        $secondtTeamScore += $b;
                                        if($firstTeamScore != $secondtTeamScore) {
                                           if ($firstTeamScore > $secondtTeamScore) {
                                                $quarterThirdWinner = $fifthWinner;
                                                $quarterThirdOverall = $ninthOverall;
                                            } else if ($firstTeamScore < $secondtTeamScore) {
                                                $quarterThirdWinner = $sixthWinner;
                                                $quarterThirdOverall = $tenthOverall;
                                            }
                                        } 
                                    }
                                    echo $firstTeamScore;
                                    echo " - ";
                                    echo $secondtTeamScore;
                                }
                            ?>
                            <br>
                            <?php if (isset($sixthWinner)) echo  $sixthWinner ?>
                        </td>
                        <td style="width: 10%;">
                            <?php if (isset($sevenWinner)) echo  $sevenWinner ?>
                            <br>
                            <?php
                                if (isset($_POST['someAction'])) {
                                    if ($eleventhOverall > $twelveOverall) {
                                        $firstTeamScore = mt_rand(1, 3);
                                        $secondtTeamScore = mt_rand(0, 2);
                                    } else if ($eleventhOverall < $twelveOverall) {
                                        $firstTeamScore = mt_rand(0, 1);
                                        $secondtTeamScore = mt_rand(1, 3);
                                    } else if ($eleventhOverall == $twelveOverall) {
                                        $firstTeamScore = mt_rand(0, 2);
                                        $secondtTeamScore = mt_rand(0, 2);
                                    }
                                    if ($firstTeamScore > $secondtTeamScore) {
                                        $quarterFourthWinner = $sevenWinner;
                                        $quarterFourthOverall = $eleventhOverall;
                                    } else if ($firstTeamScore < $secondtTeamScore) {
                                        $quarterFourthWinner = $eightWinner;
                                        $quarterFourthOverall = $twelveOverall;
                                    } else if ($firstTeamScore == $secondtTeamScore) {
                                        $overtime = true;
                                        do {
                                            $a = mt_rand(0, 1);
                                            $b = mt_rand(0, 1);
                                        } while($a == $b);
                                        $firstTeamScore += $a;
                                        $secondtTeamScore += $b;
                                        if($firstTeamScore != $secondtTeamScore) {
                                           if ($firstTeamScore > $secondtTeamScore) {
                                                $quarterFourthWinner = $sevenWinner;
                                                $quarterFourthOverall = $eleventhOverall;
                                            } else if ($firstTeamScore < $secondtTeamScore) {
                                                $quarterFourthWinner = $eightWinner;
                                                $quarterFourthOverall = $twelveOverall;
                                            }
                                        } 
                                    }
                                    echo $firstTeamScore;
                                    echo " - ";
                                    echo $secondtTeamScore;
                                }
                            ?>
                            <br>
                            <?php if (isset($eightWinner)) echo  $eightWinner ?>
                        </td>
                    </tr>
                    <br>
                </table>
                <br>
            </div>
        </div>

        <div class="row">
            <div class="col" style="text-align:center;">
                <h1>Elődöntők</h1>
                <table style="margin-left: auto; margin-right: auto;">
                    <tr>
                        <td style="width: 10%;">
                            <?php echo $quarterFirstWinner; ?>
                            <br>
                            <?php
                                if (isset($_POST['someAction'])) {
                                    if ($quarterFirstOverall > $quarterSecondOverall) {
                                        $firstTeamScore = mt_rand(1, 3);
                                        $secondtTeamScore = mt_rand(0, 2);
                                    } else if ($quarterFirstOverall < $quarterSecondOverall) {
                                        $firstTeamScore = mt_rand(0, 1);
                                        $secondtTeamScore = mt_rand(1, 3);
                                    } else if ($quarterFirstOverall == $quarterSecondOverall) {
                                        $firstTeamScore = mt_rand(0, 2);
                                        $secondtTeamScore = mt_rand(0, 2);
                                    }
                                    if ($firstTeamScore > $secondtTeamScore) {
                                        $semiFinalFirstWinner = $quarterFirstWinner;
                                        $semiFinalFirstOverall = $quarterFirstOverall;
                                    } else if ($firstTeamScore < $secondtTeamScore) {
                                        $semiFinalFirstWinner = $quarterSecondWinner;
                                        $semiFinalFirstOverall = $quarterSecondOverall;
                                    } else if ($firstTeamScore == $secondtTeamScore) {
                                        $overtime = true;
                                        do {
                                            $a = mt_rand(0, 1);
                                            $b = mt_rand(0, 1);
                                        } while($a == $b);
                                        $firstTeamScore += $a;
                                        $secondtTeamScore += $b;
                                        if($firstTeamScore != $secondtTeamScore) {
                                           if ($firstTeamScore > $secondtTeamScore) {
                                                $semiFinalFirstWinner = $quarterFirstWinner;
                                                $semiFinalFirstOverall = $quarterFirstOverall;
                                            } else if ($firstTeamScore < $secondtTeamScore) {
                                                $semiFinalFirstWinner = $quarterSecondWinner;
                                                $semiFinalFirstOverall = $quarterSecondOverall;
                                            }
                                        } 
                                    }
                                    echo $firstTeamScore;
                                    echo " - ";
                                    echo $secondtTeamScore;
                                }
                            ?>
                            <br>
                            <?php echo $quarterSecondWinner; ?>
                        </td>
                        <td style="width: 10%;">
                            <?php echo $quarterThirdWinner; ?>
                            <br>
                            <?php
                                if (isset($_POST['someAction'])) {
                                    if ($quarterThirdOverall > $quarterFourthOverall) {
                                        $firstTeamScore = mt_rand(1, 3);
                                        $secondtTeamScore = mt_rand(0, 2);
                                    } else if ($quarterThirdOverall < $quarterFourthOverall) {
                                        $firstTeamScore = mt_rand(0, 1);
                                        $secondtTeamScore = mt_rand(1, 3);
                                    } else if ($quarterThirdOverall == $quarterFourthOverall) {
                                        $firstTeamScore = mt_rand(0, 2);
                                        $secondtTeamScore = mt_rand(0, 2);
                                    }
                                    if ($firstTeamScore > $secondtTeamScore) {
                                        $semiFinalSecondWinner = $quarterThirdWinner;
                                        $semiFinalSecondOverall = $quarterThirdOverall;
                                    } else if ($firstTeamScore < $secondtTeamScore) {
                                        $semiFinalSecondWinner = $quarterFourthWinner;
                                        $semiFinalSecondOverall = $quarterFourthOverall;
                                    } else if ($firstTeamScore == $secondtTeamScore) {
                                        $overtime = true;
                                        do {
                                            $a = mt_rand(0, 1);
                                            $b = mt_rand(0, 1);
                                        } while($a == $b);
                                        $firstTeamScore += $a;
                                        $secondtTeamScore += $b;
                                        if($firstTeamScore != $secondtTeamScore) {
                                        if ($firstTeamScore > $secondtTeamScore) {
                                                $semiFinalSecondWinner = $quarterThirdWinner;
                                                $semiFinalSecondOverall = $quarterThirdOverall;
                                            } else if ($firstTeamScore < $secondtTeamScore) {
                                                $semiFinalSecondWinner = $quarterFourthWinner;
                                                $semiFinalSecondOverall = $quarterFourthOverall;
                                            }
                                        } 
                                    }
                                    echo $firstTeamScore;
                                    echo " - ";
                                    echo $secondtTeamScore;
                                }
                            ?>
                            <br>
                            <?php echo $quarterFourthWinner; ?>
                        </td>
                    </tr>
                    <br>
                </table>
                <br>
            </div>
        </div>

        <div class="row">
            <div class="col" style="text-align:center;">
                <h1>Döntő</h1>
                <table style="margin-left: auto; margin-right: auto;">
                    <tr>
                        <td style="width: 10%;">
                            <?php echo $semiFinalFirstWinner ?>
                            <br>
                            <?php
                                if (isset($_POST['someAction'])) {
                                    if ($semiFinalFirstOverall > $semiFinalSecondOverall) {
                                        $firstTeamScore = mt_rand(1, 3);
                                        $secondtTeamScore = mt_rand(0, 2);
                                    } else if ($semiFinalFirstOverall < $semiFinalSecondOverall) {
                                        $firstTeamScore = mt_rand(0, 1);
                                        $secondtTeamScore = mt_rand(1, 3);
                                    } else if ($semiFinalFirstOverall == $semiFinalSecondOverall) {
                                        $firstTeamScore = mt_rand(0, 2);
                                        $secondtTeamScore = mt_rand(0, 2);
                                    }
                                    if ($firstTeamScore > $secondtTeamScore) {
                                        $tournamentWinner = $semiFinalFirstWinner;
                                    } else if ($firstTeamScore < $secondtTeamScore) {
                                        $tournamentWinner = $semiFinalSecondWinner;
                                    } else if ($firstTeamScore == $secondtTeamScore) {
                                        $overtime = true;
                                        do {
                                            $a = mt_rand(0, 1);
                                            $b = mt_rand(0, 1);
                                        } while($a == $b);
                                        $firstTeamScore += $a;
                                        $secondtTeamScore += $b;
                                        if($firstTeamScore != $secondtTeamScore) {
                                        if ($firstTeamScore > $secondtTeamScore) {
                                                $tournamentWinner = $semiFinalFirstWinner;
                                            } else if ($firstTeamScore < $secondtTeamScore) {
                                                $tournamentWinner = $semiFinalSecondWinner;
                                            }
                                        } 
                                    }
                                    echo $firstTeamScore;
                                    echo " - ";
                                    echo $secondtTeamScore;
                                }
                            ?>
                            <br>
                            <?php echo $semiFinalSecondWinner ?>
                        </td>
                    </tr>
                    <br>
                </table>
                <br>
            </div>
        </div>

        <div class="row">
            <div class="col" style="text-align:center;">
                <h2>2020-as labdarúgó-Európa-bajnokság győztese: <?php echo $tournamentWinner ?></h2>
            </div>
        </div>

    </div>
</body>
</html>