<?php
    $page = "schedule";
    $pathUI = './UserInterface/';

    include('./header.php');
    include('./nav.php');

    $page = "schedule";
    $path = './';
    // include($path.'assets/inc/header.php');
    // include($path.'assets/inc/nav.php');
    include("./dbCon.php");

    $conferenceId = 1;


    //QUERY GET CONFERENCE INFO
    // $sql = 'select content from `finalProject` where page="'.$page .'"';
    $sql = 'select * from `Conference` where id='.$conferenceId;
    
    //execute the query
    if($results = $mysqli->query($sql)){
        // printf("select returned %d rows<br/><br/>", $results->num_rows);
    }else{
        echo 'issue with query';
    }

    
    
    if($results){
        while($rowHolder = mysqli_fetch_array($results, MYSQLI_ASSOC)){
            $records[] = $rowHolder;
            
            $confName = $rowHolder['name'];
            $confCity = $rowHolder['city'];
            $confState = $rowHolder['state'];
            $confStart = $rowHolder['startdate'];
            $confEnd = $rowHolder['enddate'];
        }
    }

    //QUERY GET TIMESLOTS OF CONFERENCE
    $sql2 = 'select * from `Timeslot` where conferenceID='.$conferenceId.' ORDER BY starttime, endtime';
    // $sql2 = 'select * from `Timeslot` where conferenceID='.$conferenceId;
    
    //execute the query
    if($results2 = $mysqli->query($sql2)){
        // printf("select returned %d rows<br/><br/>", $results->num_rows);
        // echo 'hello';
    }else{
        echo 'issue with query';
    }
    $dayNames =array();
    $output = '';
    $lastDay ='';
    $lastDayUnique ='';
    $bool = 1;
    if($results2){
        $number = 1;
        while($rowHolder2 = mysqli_fetch_array($results2, MYSQLI_ASSOC)){
            ///////////////////////////////////////////////////////////display tab correctly//////////////////////////////
            $slotStart = $rowHolder2['starttime'];
            $slotEnd = $rowHolder2['endtime'];

            $start = date_create($slotStart);
            $end = date_create($slotEnd);
            $day = date_format($start, 'l');           

            if($day!=$lastDayUnique){              

                $lastDayUnique = $day;

                // $d = [$day=> $number]
                array_push($dayNames, $day);
                $number  +=1;
                
            }

        }
        // var_dump($dayNames);
       
    }

?>




<section id="main-content" class="main-content">
            <div class="main-content-intro">
            </div>
            <div class="main-content-theme">
                <h3>Schedule</h3>
                <div class="tab">
                    <button class="tablinks" onclick="openDay(event, 'Monday')" <?php echo (in_array("Monday", $dayNames))? '' : 'style="display:none;"'?>>Monday</button>
                    <button class="tablinks" onclick="openDay(event, 'Tuesday')" <?php echo (in_array("Tuesday", $dayNames))? '' : 'style="display:none;"'?>>Tuesday</button>
                    <button class="tablinks" onclick="openDay(event, 'Wednesday')" <?php echo (in_array("Wednesday", $dayNames))? '' : 'style="display:none;"'?> >Wednesday</button>
                    <button class="tablinks" onclick="openDay(event, 'Thursday')" <?php echo (in_array("Thursday", $dayNames))? '' : 'style="display:none;"'?> >Thursday</button>
                    <button class="tablinks" onclick="openDay(event, 'Friday')" <?php echo (in_array("Friday", $dayNames))? '' : 'style="display:none;"'?> >Friday</button>
                    <button class="tablinks" onclick="openDay(event, 'Saturday')" <?php echo (in_array("Saturday", $dayNames))? '' : 'style="display:none;"'?> >Saturday</button>
                    <button class="tablinks" onclick="openDay(event, 'Sunday')" <?php echo (in_array("Sunday", $dayNames))? '' : 'style="display:none;"'?> >Sunday</button>
                </div>
                <div class="schedule-header">

                </div>



                <!-- <div id="Monday" class="tabcontent">
                    <h3>Monday</h3>
                    <p>No Events Today!</p>
                </div> -->

<?php

   
    $page = "schedule";
    $path = './';
    // include($path.'assets/inc/header.php');
    // include($path.'assets/inc/nav.php');
    include("./dbCon.php");

    // $conferenceId = 1;


    // //QUERY GET CONFERENCE INFO
    // // $sql = 'select content from `finalProject` where page="'.$page .'"';
    // $sql = 'select * from `Conference` where id='.$conferenceId;
    
    // //execute the query
    // if($results = $mysqli->query($sql)){
    //     // printf("select returned %d rows<br/><br/>", $results->num_rows);
    // }else{
    //     echo 'issue with query';
    // }

    
    
    // if($results){
    //     while($rowHolder = mysqli_fetch_array($results, MYSQLI_ASSOC)){
    //         $records[] = $rowHolder;
            
    //         $confName = $rowHolder['name'];
    //         $confCity = $rowHolder['city'];
    //         $confState = $rowHolder['state'];
    //         $confStart = $rowHolder['startdate'];
    //         $confEnd = $rowHolder['enddate'];
    //     }
    // }

    
    //PRINT CONFERENCE DATES
    // echo "<h1>".$confName."</h1>";
    // echo "<h2>".$confCity.", ". $confState."</h2>";
    // echo "<h2>".$confStart." - ".$confEnd."</h2>";

    // echo "<h1>".date_format($confStart, 'l jS F Y')."</h1>";





    //QUERY GET TIMESLOTS OF CONFERENCE
    $sql2 = 'select * from `Timeslot` where conferenceID='.$conferenceId.' ORDER BY starttime, endtime';
    // $sql2 = 'select * from `Timeslot` where conferenceID='.$conferenceId;
    
    //execute the query
    if($results2 = $mysqli->query($sql2)){
        // printf("select returned %d rows<br/><br/>", $results->num_rows);
        // echo 'hello';
    }else{
        echo 'issue with query';
    }
    $dayNames =array();
    $output = '';
    $lastDay ='';
    $lastDayUnique ='';
    $bool = 1;
    if($results2){
        // $number = 1;
        // while($rowHolder2 = mysqli_fetch_array($results2, MYSQLI_ASSOC)){
        //     ///////////////////////////////////////////////////////////display tab correctly//////////////////////////////
        //     $slotStart = $rowHolder2['starttime'];
        //     $slotEnd = $rowHolder2['endtime'];

        //     $start = date_create($slotStart);
        //     $end = date_create($slotEnd);
        //     $day = date_format($start, 'l');           

        //     if($day!=$lastDayUnique){              

        //         $lastDayUnique = $day;

        //         // $d = [$day=> $number]
        //         array_push($dayNames, $day);
        //         $number  +=1;
                
        //     }

        // }
        // var_dump($dayNames);
        // if (in_array("Friday", $dayNames)) {
        //     echo "Existe Friday";
        // }
        // if (in_array("mac", $dayNames)) {
        //     echo "Existe mac";
        // }
        while($rowHolder2 = mysqli_fetch_array($results2, MYSQLI_ASSOC)){
            $records2[] = $rowHolder2;
            $slotId = (int) $rowHolder2['id'];
            $slotName = $rowHolder2['name'];
            $slotStart = $rowHolder2['starttime'];
            $slotEnd = $rowHolder2['endtime'];

            $start = date_create($slotStart);
            $end = date_create($slotEnd);
            $day = date_format($start, 'l');//save for tab
            $fullDate = date_format($start, 'l jS F Y');//to each day title
            $startHour = date_format($start, 'G:ia');
            $endHour = date_format($end, 'G:ia');
            
            //DISPLAY SLOT TIME
            
            // echo "<h3> PERALTA".$slotStart." - ".$slotEnd."</h3>";
            // 
            // echo "<h3> PAOLA ".date_format($start, 'g:ia \o\n l jS F Y')."</h3>";
            
            // echo "<h3> PAOLA ".$fullDate." day: ".$day."</h3>";
            // echo "<h4>".$slotName."</h4>"; 

            if($day!=$lastDay){
                if($output!=''){
                    $output .='</div>';
                }
                $output .='<div id="'.$day.'" class="tabcontent"> <h3>'.$fullDate.'</h3>';

                echo $output;
                // echo " ";
                $output = '';
                $lastDay = $day;

                
                
                $bool +=1;
            }
            

            
            

            //QUERY 3 getting all the sessions
            // echo "TIMESLOTID: ".$slotId;
            $sql3 = 'select * from `Session` where timeslotID='.$slotId;
            // $sql2 = 'select * from `Timeslot` where conferenceID='.$conferenceId;
            
            //execute the query
            if($results3 = $mysqli->query($sql3)){
                // printf("select returned %d rows<br/><br/>", $results->num_rows);
                // echo 'hello';
            }else{
                echo 'issue with query';
            }

            $count = 1;
            if($results3){
                while($rowHolder3 = mysqli_fetch_array($results3, MYSQLI_ASSOC)){
                    $records3[] = $rowHolder3;
                    $sessionId = (int) $rowHolder3['id'];
                    $sslocation = $rowHolder3['location'];
                    $sstopic = $rowHolder3['topic'];
                    $ssorganizer = $rowHolder3['organizer'];
                    $sspanel = $rowHolder3['panel_participants'];

                    //DISPLAY SESSIONS
                    // echo "<h4>".$count."- ".$sstopic."</h4>";
                    // echo "<h5> Location: ".$sslocation."</h5>";
                    // echo "<p> Organizer: ".$ssorganizer."</p><br>";
                    // // echo $sspanel ==""? "": "<p> Panel: ".$sspanel."</p><br>";
                    // echo "<p> Panel: ".$sspanel."</p><br>";

                    

                    //put: <button class="accordion">3:30 - 4:00 PM: Welcome Session</button>
                    if($count==1){
                        $output .= '<button class="accordion">'.$startHour.' - '.$endHour.': '.$slotName.'</button> <div class="panel">';
                    }
                    $output .= '<h4>'.$count."- ".$sstopic.'</h4>';
                    $output .= "<p> Location: ".$sslocation."</p>";
                    



                    //QUERY 4 getting all the Presentations
                    // $sessionId = 2;

                    $presentations = '';
                    
                    $sql4 = 'select * from `Presentation` where sessionID='.$sessionId;
                    
                    // $sql2 = 'select * from `Timeslot` where conferenceID='.$conferenceId;
                    
                    //execute the query
                    if($results4 = $mysqli->query($sql4)){
                        // printf("select returned %d rows<br/><br/>", $results->num_rows);
                        // echo 'hello';
                    }else{
                        echo 'issue with query';
                    }

                    $count2 = 1;
                    if($results4){
                        while($rowHolder4 = mysqli_fetch_array($results4, MYSQLI_ASSOC)){
                            $records4[] = $rowHolder4;
                            $ppTopic = $rowHolder4['topic'];
                            $ppspeaker = $rowHolder4['speaker'];

                            // echo "Presentation";
                            // echo "</br><p>".$count.".".$count2."- TOPIC PRESENTATION: ".$ppTopic."</p>";
                            // echo "</br><p>PRESENTATION Speakers: ".$ppspeaker."</p>";



                            $presentations .= "<p>    ".$count.".".$count2."- ".$ppTopic."</p>"."<p> Speakers: ".$ppspeaker."</p>";

                            $count2 +=1;

                            // echo 'hello';
                            // var_dump($rowHolder2);
                            // echo $rowHolder2;
                            
                        }
                    }

                    // echo $presentations;
                    if($presentations!=''){
                        $output .=$presentations;                        
                    }
                    $count +=1;
                    
                    // var_dump($results4);
                    // if($results4){
                    //     var_dump($records4);
                    // }

                    
                    
                }
                $output .= '</div>';
            }

            

            

            // echo "<hr>";




            
        }
        $output .='</div>';
        echo $output;
    }

    // var_dump($records2);






    // //QUERY 3 getting all the sessions
    // echo "TIMESLOTID: ".$slotId;
    // $sql3 = 'select * from `Session` where timeslotID='.$slotId;
    // // $sql2 = 'select * from `Timeslot` where conferenceID='.$conferenceId;
    
    // //execute the query
    // if($results3 = $mysqli->query($sql3)){
    //     // printf("select returned %d rows<br/><br/>", $results->num_rows);
    //     // echo 'hello';
    // }else{
    //     echo 'issue with query';
    // }

    // if($results3){
    //     while($rowHolder3 = mysqli_fetch_array($results3, MYSQLI_ASSOC)){
    //         $records3[] = $rowHolder3;
    //         // echo 'hello';
    //         // var_dump($rowHolder2);
    //         // echo $rowHolder2;
            
    //     }
    // }

    // var_dump($records3);


    // //QUERY 4 getting all the sessions
    // $sessionId = 2;
    // echo "TIMESLOTID: ".$sessionId;
    // $sql4 = 'select * from `Presentation` where sessionID='.$sessionId;
    // // $sql2 = 'select * from `Timeslot` where conferenceID='.$conferenceId;
    
    // //execute the query
    // if($results4 = $mysqli->query($sql4)){
    //     // printf("select returned %d rows<br/><br/>", $results->num_rows);
    //     // echo 'hello';
    // }else{
    //     echo 'issue with query';
    // }

    // if($results4){
    //     while($rowHolder4 = mysqli_fetch_array($results4, MYSQLI_ASSOC)){
    //         $records4[] = $rowHolder4;
    //         // echo 'hello';
    //         // var_dump($rowHolder2);
    //         // echo $rowHolder2;
            
    //     }
    // }

    // var_dump($records4);





    //$output = '';

    // foreach($records as $currRecord){
    //     foreach($currRecord as $name=>$value){
    //         $output .=$value;
            
    //     }

    // }
    // echo $output;

    mysqli_close($mysqli);
?>


<?php
   include('./footer.php');
?> 
