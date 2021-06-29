<?php
    $third = array(
        array("nation" => $groupThird[0]['nation'], "group" => $groupThird[0]['group'], "overall" => $groupThird[0]['overall']),
        array("nation" => $groupThird[1]['nation'], "group" => $groupThird[1]['group'], "overall" => $groupThird[1]['overall']),
        array("nation" => $groupThird[2]['nation'], "group" => $groupThird[2]['group'], "overall" => $groupThird[2]['overall']),
        array("nation" => $groupThird[3]['nation'], "group" => $groupThird[3]['group'], "overall" => $groupThird[3]['overall']),
    );
    usort($third, function ($item1, $item2) {
        return $item1['group'] <=> $item2['group'];
    });

    $a = $third[0]['group'];
    $b = $third[1]['group'];
    $c = $third[2]['group'];
    $d = $third[3]['group'];

    if ($a == "A" && $b == "B" && $c == "C" && $d == "D" ||
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
    } else if ($a == "A" && $b == "B" && $c == "D" && $d == "E" ||
                $a == "A" && $b == "B" && $c == "D" && $d == "F") {
        $firstFromTheThird = $third[2]['nation'];
        $secondFromTheThird = $third[3]['nation'];
        $thirdFromTheThird = $third[0]['nation'];
        $fourthFromTheThird = $third[1]['nation'];

        $firstOverall = $third[2]['overall'];
        $secondOverall = $third[3]['overall'];
        $thirdOverall = $third[0]['overall'];
        $fourthOverall = $third[1]['overall'];
    } else if ($a == "A" && $b == "B" && $c == "E" && $d == "F" ||
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
    } else if ($a == "B" && $b == "C" && $c == "D" && $d == "E") {
        $firstFromTheThird = $third[3]['nation'];
        $secondFromTheThird = $third[2]['nation'];
        $thirdFromTheThird = $third[0]['nation'];
        $fourthFromTheThird = $third[1]['nation'];

        $firstOverall = $third[3]['overall'];
        $secondOverall = $third[2]['overall'];
        $thirdOverall = $third[0]['overall'];
        $fourthOverall = $third[1]['overall'];
    } else if ($a == "A" && $b == "C" && $c == "D" && $d == "E" ||
                $a == "A" && $b == "C" && $c == "D" && $d == "F" ||
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