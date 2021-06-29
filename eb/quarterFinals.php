<div class="row">
    <div class="col">
        <div class="table-responsive-lg">
            <br>
            <h1>Negyeddöntők</h1>
            <table class="table table-sm">
                <tr>
                    <td>
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
                                } while ($a == $b);
                                $firstTeamScore += $a;
                                $secondtTeamScore += $b;
                                if ($firstTeamScore != $secondtTeamScore) {
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
                    <td>
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
                                } while ($a == $b);
                                $firstTeamScore += $a;
                                $secondtTeamScore += $b;
                                if ($firstTeamScore != $secondtTeamScore) {
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
                    <td>
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
                                } while ($a == $b);
                                $firstTeamScore += $a;
                                $secondtTeamScore += $b;
                                if ($firstTeamScore != $secondtTeamScore) {
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
                    <td>
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
                                } while ($a == $b);
                                $firstTeamScore += $a;
                                $secondtTeamScore += $b;
                                if ($firstTeamScore != $secondtTeamScore) {
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
            </table>
        </div>
    </div>
</div>