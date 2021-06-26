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
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
    <title>Football Európa Bajnokság</title>
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

        //----------------------

        $ItalyOverall = 5;
        $SwitzOverall = 4;
        $WalesOverall = 3;
        $TurkeyOverall = 2;

        $BelgiumOverall = 5;
        $DenmarkOverall = 3;
        $FinnOverall = 1;
        $RussiaOverall = 2;

        //----------------------

        $ItalyMatchNumber = 0;
        $TurkeyMatchNumber = 0;
        $WalesMatchNumber = 0;
        $SwitzMatchNumber = 0;

        $BelgiumMatchNumber = 0;
        $DenmarkMatchNumber = 0;
        $FinnMatchNumber = 0;
        $RussiaMatchNumber = 0;

        //----------------------

        $ItalyWin = 0;
        $TurkeyWin = 0;
        $WalesWin = 0;
        $SwitzWin = 0;

        $BelgiumWin = 0;
        $DenmarkWin = 0;
        $FinnWin = 0;
        $RussiaWin = 0;

        //----------------------

        $ItalyDraw = 0;
        $TurkeyDraw = 0;
        $WalesDraw = 0;
        $SwitzDraw = 0;

        $BelgiumDraw = 0;
        $DenmarkDraw = 0;
        $FinnDraw = 0;
        $RussiaDraw = 0;

        //----------------------

        $ItalyLose = 0;
        $TurkeyLose = 0;
        $WalesLose = 0;
        $SwitzLose = 0;

        $BelgiumLose = 0;
        $DenmarkLose = 0;
        $FinnLose = 0;
        $RussiaLose = 0;

        //----------------------

        $ItalyScoreDiff = 0;
        $TurkeyScoreDiff = 0;
        $WalesScoreDiff = 0;
        $SwitzScoreDiff = 0;

        $BelgiumScoreDiff = 0;
        $DenmarkScoreDiff = 0;
        $FinnScoreDiff = 0;
        $RussiaScoreDiff = 0;

        //----------------------

        $ItalyPoint = 0;
        $TurkeyPoint = 0;
        $WalesPoint = 0;
        $SwitzPoint = 0;

        $BelgiumPoint = 0;
        $DenmarkPoint = 0;
        $FinnPoint = 0;
        $RussiaPoint = 0;

        //----------------------
    ?>

    <div class="row centered mx-auto pt-5">
        <div class="col-8">
            <h1>Csoportmérkőzések</h1>
            <table>
                <h3>A csoport</h3>
                <tr>
                    <td style="width: 20%;">
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
                    <td style="width: 20%;">
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
                    <td style="width: 20%;">
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
                    <td style="width: 20%;">
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
                    <td style="width: 20%;">
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
                    <td style="width: 20%;">
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
            <table>
                <h3>B csoport</h3>
                <tr>
                    <td style="width: 20%;">
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
                    <td style="width: 20%;">
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
                    <td style="width: 20%;">
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
                    <td style="width: 20%;">
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
                    <td style="width: 20%;">
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
                    <td style="width: 20%;">
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
            <table>
                <h3>C csoport</h3>
                <tr>
                    <td style="width: 20%;">
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
                    <td style="width: 20%;">
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
                    <td style="width: 20%;">
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
                    <td style="width: 20%;">
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
                    <td style="width: 20%;">
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
                    <td style="width: 20%;">
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
            <table>
                <h3>D csoport</h3>
                <tr>
                    <td style="width: 20%;">
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
                    <td style="width: 20%;">
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
                    <td style="width: 20%;">
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
                    <td style="width: 20%;">
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
                    <td style="width: 20%;">
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
                    <td style="width: 20%;">
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
            <table>
                <h3>E csoport</h3>
                <tr>
                    <td style="width: 20%;">
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
                    <td style="width: 20%;">
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
                    <td style="width: 20%;">
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
                    <td style="width: 20%;">
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
                    <td style="width: 20%;">
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
                    <td style="width: 20%;">
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
            <table>
                <h3>F csoport</h3>
                <tr>
                    <td style="width: 20%;">
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
                    <td style="width: 20%;">
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
                    <td style="width: 20%;">
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
                    <td style="width: 20%;">
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
                    <td style="width: 20%;">
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
                    <td style="width: 20%;">
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
            <h1>Egyenes kiesési szakasz</h1>
        </div>

        <div class="col-2">
            <form method="post">
                <input type="submit" name="someAction" value="Simulate" style="font-size: 30px;" />
            </form>
        </div>

        <?php
            $groupA = array(
                array("nation" => $Turkey, "match" => $TurkeyMatchNumber, "win" => $TurkeyWin, "draw" => $TurkeyDraw, "lose" => $TurkeyLose, "diff" => $TurkeyScoreDiff, "point" => $TurkeyPoint),
                array("nation" => $Italy, "match" => $ItalyMatchNumber, "win" => $ItalyWin, "draw" => $ItalyDraw, "lose" => $ItalyLose, "diff" => $ItalyScoreDiff, "point" => $ItalyPoint),
                array("nation" => $Wales, "match" => $WalesMatchNumber, "win" => $WalesWin, "draw" => $WalesDraw, "lose" => $WalesLose, "diff" => $WalesScoreDiff, "point" => $WalesPoint),
                array("nation" => $Switz, "match" => $SwitzMatchNumber, "win" => $SwitzWin, "draw" => $SwitzDraw, "lose" => $SwitzLose, "diff" => $SwitzScoreDiff, "point" => $SwitzPoint),
            );
            usort($groupA, function ($item1, $item2) {
                return $item2['diff'] <=> $item1['diff'];
            });
            usort($groupA, function ($item1, $item2) {
                return $item2['point'] <=> $item1['point'];
            });

            $groupB = array(
                array("nation" => $Denmark, "match" => $DenmarkMatchNumber, "win" => $DenmarkWin, "draw" => $DenmarkDraw, "lose" => $DenmarkLose, "diff" => $DenmarkScoreDiff, "point" => $DenmarkPoint),
                array("nation" => $Belgium, "match" => $BelgiumMatchNumber, "win" => $BelgiumWin, "draw" => $BelgiumDraw, "lose" => $BelgiumLose, "diff" => $BelgiumScoreDiff, "point" => $BelgiumPoint),
                array("nation" => $Russia, "match" => $RussiaMatchNumber, "win" => $RussiaWin, "draw" => $RussiaDraw, "lose" => $RussiaLose, "diff" => $RussiaScoreDiff, "point" => $RussiaPoint),
                array("nation" => $Finland, "match" => $FinnMatchNumber, "win" => $FinnWin, "draw" => $FinnDraw, "lose" => $FinnLose, "diff" => $FinnScoreDiff, "point" => $FinnPoint),
            );

            usort($groupB, function ($item1, $item2) {
                return $item2['diff'] <=> $item1['diff'];
            });

            usort($groupB, function ($item1, $item2) {
                return $item2['point'] <=> $item1['point'];
            });
        ?>

        <div class="col-2">
            <h1>Csoportok</h1>
            <table>
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
                    <td style="background-color: red;">1</td>
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
            <table>
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
                    <td style="background-color: red;">1</td>
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
            <table>
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
                    <td style="background-color: red;">1</td>
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
            <table>
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
                    <td style="background-color: red;">1</td>
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
            <table>
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
                    <td style="background-color: red;">1</td>
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
            <table>
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
                    <td style="background-color: red;">1</td>
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
        </div>
    </div>
</body>
</html>