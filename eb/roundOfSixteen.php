<div class="row">
    <div class="col">
        <div class="table-responsive-lg">
            <br>
            <h1>Nyolcaddöntők</h1>
            <table class="table table-sm">
                <tr>
                    <td>
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
                                } while ($a == $b);
                                $firstTeamScore += $a;
                                $secondtTeamScore += $b;
                                if ($firstTeamScore != $secondtTeamScore) {
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
                        <?php if (isset($firstFromTheThird)) echo $firstFromTheThird; ?>
                    </td>
                    <td>
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
                                } while ($a == $b);
                                $firstTeamScore += $a;
                                $secondtTeamScore += $b;
                                if ($firstTeamScore != $secondtTeamScore) {
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
                        <?php echo $groupC[1]['nation']; ?>
                    </td>
                    <td>
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
                                } while ($a == $b);
                                $firstTeamScore += $a;
                                $secondtTeamScore += $b;
                                if ($firstTeamScore != $secondtTeamScore) {
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
                    <td>
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
                                } while ($a == $b);
                                $firstTeamScore += $a;
                                $secondtTeamScore += $b;
                                if ($firstTeamScore != $secondtTeamScore) {
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
                    <td>
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
                                } while ($a == $b);
                                $firstTeamScore += $a;
                                $secondtTeamScore += $b;
                                if ($firstTeamScore != $secondtTeamScore) {
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
                    <td>
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
                                } while ($a == $b);
                                $firstTeamScore += $a;
                                $secondtTeamScore += $b;
                                if ($firstTeamScore != $secondtTeamScore) {
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
                    <td>
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
                                } while ($a == $b);
                                $firstTeamScore += $a;
                                $secondtTeamScore += $b;
                                if ($firstTeamScore != $secondtTeamScore) {
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
                    <td>
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
                                } while ($a == $b);
                                $firstTeamScore += $a;
                                $secondtTeamScore += $b;
                                if ($firstTeamScore != $secondtTeamScore) {
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
            </table>
        </div>
    </div>
</div>