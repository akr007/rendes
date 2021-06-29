<div class="row">
    <div class="col">
        <div class="table-responsive-lg">
            <br>
            <h1>Elődöntők</h1>
            <table class="table table-sm">
                <tr>
                    <td>
                        <?php if (isset($quarterFirstWinner)) echo $quarterFirstWinner; ?>
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
                                } while ($a == $b);
                                $firstTeamScore += $a;
                                $secondtTeamScore += $b;
                                if ($firstTeamScore != $secondtTeamScore) {
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
                        <?php if (isset($quarterSecondWinner)) echo $quarterSecondWinner; ?>
                    </td>
                    <td>
                        <?php if (isset($quarterThirdWinner)) echo $quarterThirdWinner; ?>
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
                                } while ($a == $b);
                                $firstTeamScore += $a;
                                $secondtTeamScore += $b;
                                if ($firstTeamScore != $secondtTeamScore) {
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
                        <?php if (isset($quarterFourthWinner)) echo $quarterFourthWinner; ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>