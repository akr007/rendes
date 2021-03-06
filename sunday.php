    <?php
        include("header.html");
        include("navbar.html");
        include("footer.html");
    ?>
    <title>Vasárnap</title>
</head>
<body>
    <div class="container">
        <form method="post">
            Dátum:<input type="date" name="date" id="date" required>
            <button type="submit" name="ok">OK</button>
        </form>
        <?php
            if(isset($_POST['ok'])){
                setlocale(LC_ALL,'hungarian');
                // változók
                $monday = "hétfő";
                $tuesday = "kedd";
                $wednesday = "szerda";
                $thursday = "csütörtök";
                $friday = "péntek";
                $saturday = "szombat";
                $sunday = "vasárnap";

                // a megadott dátum és a hozzátartozó nap tárolása
                $date = $_POST['date'];
                $timestamp = strtotime($date);
                $day = date('l', $timestamp);
                
                // jelenlegi dátum
                $currentTime = utf8_encode(strftime("%Y-".date('m', strtotime('0 month'))."-%d %A", time()));
                $currentTime2 = utf8_encode(strftime("%Y-".date('m', strtotime('0 month'))."-%d", time()));

                // ha a megadott dátum 01-re esik, akkor jelenlegi hónapot vesszük
                // ha nem, akkor pedig a következő hónapot
                $lastChar = substr($date, -2);
                if($lastChar == "01" ) {
                    $nextMonth = date('Y-m-01', strtotime('0 month', strtotime($date)));
                    $nextMonthTimeStamp = strtotime($nextMonth);
                    $nextMonthDay = date('l', $nextMonthTimeStamp);
                } else {
                    $nextMonth = date('Y-m-01', strtotime('+1 month', strtotime($date)));
                    $nextMonthTimeStamp = strtotime($nextMonth);
                    $nextMonthDay = date('l', $nextMonthTimeStamp);
                }

                // jelnlegi hónap első napja
                $currentMonth = date('Y-m-01', strtotime('0 month'));
                $currentMonthTimeStamp = strtotime($currentMonth);
                $currentMonthDay = date('l', $currentMonthTimeStamp);

                if($day == "Monday") {
                    $day = $monday;
                }
                if($day == "Tuesday") {
                    $day = $tuesday;
                }
                if($day == "Wednesday") {
                    $day = $wednesday;
                }
                if($day == "Thursday") {
                    $day = $thursday;
                }
                if($day == "Friday") {
                    $day = $friday;
                }
                if($day == "Saturday") {
                    $day = $saturday;
                }
                if($day == "Sunday") {
                    $day = $sunday;
                }

                if($nextMonthDay == "Monday") {
                    $nextMonthDay = $monday;
                }
                if($nextMonthDay == "Tuesday") {
                    $nextMonthDay = $tuesday;
                }
                if($nextMonthDay == "Wednesday") {
                    $nextMonthDay = $wednesday;
                }
                if($nextMonthDay == "Thursday") {
                    $nextMonthDay = $thursday;
                }
                if($nextMonthDay == "Friday") {
                    $nextMonthDay = $friday;
                }
                if($nextMonthDay == "Saturday") {
                    $nextMonthDay = $saturday;
                }
                if($nextMonthDay == "Sunday") {
                    $nextMonthDay = $sunday;
                }

                if($currentMonthDay == "Monday") {
                    $currentMonthDay = $monday;
                }
                if($currentMonthDay == "Tuesday") {
                    $currentMonthDay = $tuesday;
                }
                if($currentMonthDay == "Wednesday") {
                    $currentMonthDay = $wednesday;
                }
                if($currentMonthDay == "Thursday") {
                    $currentMonthDay = $thursday;
                }
                if($currentMonthDay == "Friday") {
                    $currentMonthDay = $friday;
                }
                if($currentMonthDay == "Saturday") {
                    $currentMonthDay = $saturday;
                }
                if($currentMonthDay == "Sunday") {
                    $currentMonthDay = $sunday;
                }
            } 
        ?>
        <p>
            <?php 
                if(isset($_POST['ok'])){
                    echo "Kezdő dátum: ".$date." ".$day;
                    echo "<br />";
                    echo "A kezdő dátum után következő hónap első napja: ".$nextMonth. " ". $nextMonthDay;
                    echo "<br />";
                    echo "<br />";
                    echo "Jelenlegi dátum: ".$currentTime;
                    echo "<br />";
                    echo "A jelenlegi hónap első napja: ".$currentMonth. " ". $currentMonthDay;
                    echo "<br />";
                    echo "<br />";
                
                    $begin = new DateTime($nextMonth); //a megadott dátum utáni hónap
                    $end = new DateTime($currentMonth); // a jelenlegi hónap
                    $end = $end->modify( '+1 day' ); 

                    $interval = new DateInterval('P1D'); //egy nap
                    $daterange = new DatePeriod($begin, $interval ,$end);
                    
                    $sundayCount = 0;
                    $finished = false;
                    //a megadott dátum utáni hónaptól a jelenlegi hónapig
                    foreach($daterange as $dat){
                        $result = $dat->format('Y-m-d');
                        $lastChar = substr($result, -2);
                        // ha 01-re végződik a dátum
                        if($lastChar == "01") {
                            $Day = strtotime($result);
                            $whatDay = date('l', $Day);
                            // és a dátum vasárnap
                            if($whatDay == "Sunday") {
                                // akkor növelni kell a számlálót
                                $sundayCount++;
                            }
                            $finished = true;
                        }
                    }

                    if($finished) {
                        if($sundayCount > 0) {
                            echo $date." dátumtól egészen ".$currentTime2." dátumig bezárólag összesen ".$sundayCount."  olyan vasárnap volt, amely a hónap első napjára esett! ";
                        } else if($sundayCount == 0) {
                            echo $date." dátumtól egészen ".$currentTime2." dátumig bezárólag összesen 0 olyan vasárnap volt, amely a hónap első napjára esett! ";
                        }
                    }
                }
            ?>
        </p>
    </div>
