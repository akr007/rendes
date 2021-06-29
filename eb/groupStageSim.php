<div class="col-md-6">
    <h1>Csoportmérkőzések</h1>
    <h2>A csoport</h2>
    <div class="table-responsive-lg">
        <table class="table table-sm">
            <tr>
                <td>
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
                <td>
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
                <td>
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
            </tr>
            <tr>
                <td>
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
                <td>
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
                <td>
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
        </table>
    </div>

    <h2>B csoport</h2>
    <div class="table-responsive-lg">
        <table class="table table-sm">
            <tr>
                <td>
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
                <td>
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
                <td>
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
            </tr>
            <tr>
                <td>
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
                <td>
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
                <td>
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
    </div>

    <h2>C csoport</h2>
    <div class="table-responsive-lg">
        <table class="table table-sm">
            <tr>
                <td>
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
                <td>
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
                <td>
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
            </tr>
            <tr>
                <td>
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
                <td>
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
                <td>
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
        </table>
    </div>

    <h2>D csoport</h2>
    <div class="table-responsive-lg">
        <table class="table table-sm">
            <tr>
                <td>
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
                <td>
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
                <td>
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
            </tr>
            <tr>
                <td>
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
                <td>
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
                <td>
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
    </div>

    <h2>E csoport</h2>
    <div class="table-responsive-lg">
        <table class="table table-sm">
            <tr>
                <td>
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
                <td>
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
                <td>
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
            </tr>
            <tr>
                <td>
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
                <td>
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
                <td>
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
        </table>
    </div>

    <h2>F csoport</h2>
    <div class="table-responsive-lg">
        <table class="table table-sm">
            <tr>
                <td>
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
                <td>
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
                <td>
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
            </tr>
            <tr>
                <td>
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
                <td>
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
                <td>
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
    </div>
</div>