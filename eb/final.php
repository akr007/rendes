<div class="row">
    <div class="col">
        <div class="table-responsive-lg">
            <br>
            <h1>Döntő</h1>
            <table class="table table-sm">
                <tr>
                    <td>
                        <?php if (isset($semiFinalFirstWinner)) echo $semiFinalFirstWinner ?>
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
                                } while ($a == $b);
                                $firstTeamScore += $a;
                                $secondtTeamScore += $b;
                                if ($firstTeamScore != $secondtTeamScore) {
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
                        <?php if (isset($semiFinalSecondWinner)) echo $semiFinalSecondWinner ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>