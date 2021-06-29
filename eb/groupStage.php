<?php
    $groupA = array(
        array("nation" => $Turkey, "rank" => $TurkeyRank, "overall" => $TurkeyOverall, "match" => $TurkeyMatchNumber, "win" => $TurkeyWin, "draw" => $TurkeyDraw, "lose" => $TurkeyLose, "diff" => $TurkeyScoreDiff, "point" => $TurkeyPoint),
        array("nation" => $Italy, "rank" => $ItalyRank, "overall" => $ItalyOverall, "match" => $ItalyMatchNumber, "win" => $ItalyWin, "draw" => $ItalyDraw, "lose" => $ItalyLose, "diff" => $ItalyScoreDiff, "point" => $ItalyPoint),
        array("nation" => $Wales, "rank" => $WalesRank, "overall" => $WalesOverall, "match" => $WalesMatchNumber, "win" => $WalesWin, "draw" => $WalesDraw, "lose" => $WalesLose, "diff" => $WalesScoreDiff, "point" => $WalesPoint),
        array("nation" => $Switz, "rank" => $SwitzRank, "overall" => $SwitzOverall, "match" => $SwitzMatchNumber, "win" => $SwitzWin, "draw" => $SwitzDraw, "lose" => $SwitzLose, "diff" => $SwitzScoreDiff, "point" => $SwitzPoint),
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
        array("nation" => $Denmark, "rank" => $DenmarkRank, "overall" => $DenmarkOverall, "match" => $DenmarkMatchNumber, "win" => $DenmarkWin, "draw" => $DenmarkDraw, "lose" => $DenmarkLose, "diff" => $DenmarkScoreDiff, "point" => $DenmarkPoint),
        array("nation" => $Belgium, "rank" => $BelgiumRank, "overall" => $BelgiumOverall, "match" => $BelgiumMatchNumber, "win" => $BelgiumWin, "draw" => $BelgiumDraw, "lose" => $BelgiumLose, "diff" => $BelgiumScoreDiff, "point" => $BelgiumPoint),
        array("nation" => $Russia, "rank" => $RussiaRank, "overall" => $RussiaOverall, "match" => $RussiaMatchNumber, "win" => $RussiaWin, "draw" => $RussiaDraw, "lose" => $RussiaLose, "diff" => $RussiaScoreDiff, "point" => $RussiaPoint),
        array("nation" => $Finland, "rank" => $FinnRank, "overall" => $FinnOverall, "match" => $FinnMatchNumber, "win" => $FinnWin, "draw" => $FinnDraw, "lose" => $FinnLose, "diff" => $FinnScoreDiff, "point" => $FinnPoint),
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
        array("nation" => $Au, "rank" => $AuRank, "overall" => $AuOverall, "match" => $AuMatchNumber, "win" => $AuWin, "draw" => $AuDraw, "lose" => $AuLose, "diff" => $AuScoreDiff, "point" => $AuPoint),
        array("nation" => $Mac, "rank" => $MacRank, "overall" => $MacOverall, "match" => $MacMatchNumber, "win" => $MacWin, "draw" => $MacDraw, "lose" => $MacLose, "diff" => $MacScoreDiff, "point" => $MacPoint),
        array("nation" => $Neth, "rank" => $NethRank, "overall" => $NethOverall, "match" => $NethMatchNumber, "win" => $NethWin, "draw" => $NethDraw, "lose" => $NethLose, "diff" => $NethScoreDiff, "point" => $NethPoint),
        array("nation" => $Ukr, "rank" => $UkrRank, "overall" => $UkrOverall, "match" => $UkrMatchNumber, "win" => $UkrWin, "draw" => $UkrDraw, "lose" => $UkrLose, "diff" => $UkrScoreDiff, "point" => $UkrPoint),
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
        array("nation" => $Eng, "rank" => $EngRank, "overall" => $EngOverall, "match" => $EngMatchNumber, "win" => $EngWin, "draw" => $EngDraw, "lose" => $EngLose, "diff" => $EngScoreDiff, "point" => $EngPoint),
        array("nation" => $Cro, "rank" => $CroRank, "overall" => $CroOverall, "match" => $CroMatchNumber, "win" => $CroWin, "draw" => $CroDraw, "lose" => $CroLose, "diff" => $CroScoreDiff, "point" => $CroPoint),
        array("nation" => $Sco, "rank" => $ScoRank, "overall" => $ScoOverall, "match" => $ScoMatchNumber, "win" => $ScoWin, "draw" => $ScoDraw, "lose" => $ScoLose, "diff" => $ScoScoreDiff, "point" => $ScoPoint),
        array("nation" => $Czeh, "rank" => $CzehRank, "overall" => $CzehOverall, "match" => $CzehMatchNumber, "win" => $CzehWin, "draw" => $CzehDraw, "lose" => $CzehLose, "diff" => $CzehScoreDiff, "point" => $CzehPoint),
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
        array("nation" => $Pol, "rank" => $PolRank, "overall" => $PolOverall, "match" => $PolMatchNumber, "win" => $PolWin, "draw" => $PolDraw, "lose" => $PolLose, "diff" => $PolScoreDiff, "point" => $PolPoint),
        array("nation" => $Slo, "rank" => $SloRank, "overall" => $SloOverall, "match" => $SloMatchNumber, "win" => $SloWin, "draw" => $SloDraw, "lose" => $SloLose, "diff" => $SloScoreDiff, "point" => $SloPoint),
        array("nation" => $Esp, "rank" => $EspRank, "overall" => $EspOverall, "match" => $EspMatchNumber, "win" => $EspWin, "draw" => $EspDraw, "lose" => $EspLose, "diff" => $EspScoreDiff, "point" => $EspPoint),
        array("nation" => $Swe, "rank" => $SweRank, "overall" => $SweOverall, "match" => $SweMatchNumber, "win" => $SweWin, "draw" => $SweDraw, "lose" => $SweLose, "diff" => $SweScoreDiff, "point" => $SwePoint),
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
        array("nation" => $Hun, "rank" => $HunRank, "overall" => $HunOverall, "match" => $HunMatchNumber, "win" => $HunWin, "draw" => $HunDraw, "lose" => $HunLose, "diff" => $HunScoreDiff, "point" => $HunPoint),
        array("nation" => $Por, "rank" => $PorRank, "overall" => $PorOverall, "match" => $PorMatchNumber, "win" => $PorWin, "draw" => $PorDraw, "lose" => $PorLose, "diff" => $PorScoreDiff, "point" => $PorPoint),
        array("nation" => $Fran, "rank" => $FranRank, "overall" => $FranOverall, "match" => $FranMatchNumber, "win" => $FranWin, "draw" => $FranDraw, "lose" => $FranLose, "diff" => $FranScoreDiff, "point" => $FranPoint),
        array("nation" => $Germ, "rank" => $GermRank, "overall" => $GermOverall, "match" => $GermMatchNumber, "win" => $GermWin, "draw" => $GermDraw, "lose" => $GermLose, "diff" => $GermScoreDiff, "point" => $GermPoint),
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
        array("group" => "A", "nation" => $groupA[2]['nation'], "rank" => $groupA[2]['rank'], "overall" => $groupA[2]['overall'], "match" => $groupA[2]['match'], "win" => $groupA[2]['win'], "draw" => $groupA[2]['draw'], "lose" => $groupA[2]['lose'], "diff" => $groupA[2]['diff'], "point" => $groupA[2]['point']),
        array("group" => "B", "nation" => $groupB[2]['nation'], "rank" => $groupB[2]['rank'], "overall" => $groupB[2]['overall'], "match" => $groupB[2]['match'], "win" => $groupB[2]['win'], "draw" => $groupB[2]['draw'], "lose" => $groupB[2]['lose'], "diff" => $groupB[2]['diff'], "point" => $groupB[2]['point']),
        array("group" => "C", "nation" => $groupC[2]['nation'], "rank" => $groupC[2]['rank'], "overall" => $groupC[2]['overall'], "match" => $groupC[2]['match'], "win" => $groupC[2]['win'], "draw" => $groupC[2]['draw'], "lose" => $groupC[2]['lose'], "diff" => $groupC[2]['diff'], "point" => $groupC[2]['point']),
        array("group" => "D", "nation" => $groupD[2]['nation'], "rank" => $groupD[2]['rank'], "overall" => $groupD[2]['overall'], "match" => $groupD[2]['match'], "win" => $groupD[2]['win'], "draw" => $groupD[2]['draw'], "lose" => $groupD[2]['lose'], "diff" => $groupD[2]['diff'], "point" => $groupD[2]['point']),
        array("group" => "E", "nation" => $groupE[2]['nation'], "rank" => $groupE[2]['rank'], "overall" => $groupE[2]['overall'], "match" => $groupE[2]['match'], "win" => $groupE[2]['win'], "draw" => $groupE[2]['draw'], "lose" => $groupE[2]['lose'], "diff" => $groupE[2]['diff'], "point" => $groupE[2]['point']),
        array("group" => "F", "nation" => $groupF[2]['nation'], "rank" => $groupF[2]['rank'], "overall" => $groupF[2]['overall'], "match" => $groupF[2]['match'], "win" => $groupF[2]['win'], "draw" => $groupF[2]['draw'], "lose" => $groupF[2]['lose'], "diff" => $groupF[2]['diff'], "point" => $groupF[2]['point']),
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