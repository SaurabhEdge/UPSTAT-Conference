<?php
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

    
    // var_dump($records[0]);
    echo "<h1>".$confName."</h1>";
    echo "<h2>".$confCity.", ". $confState."</h2>";
    // echo "<br>";
    echo "<h2>".$confStart." - ".$confEnd."</h2>";





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

    if($results2){
        while($rowHolder2 = mysqli_fetch_array($results2, MYSQLI_ASSOC)){
            $records2[] = $rowHolder2;
            $slotId = (int) $rowHolder2['id'];
            $slotName = $rowHolder2['name'];
            $slotStart = $rowHolder2['starttime'];
            $slotEnd = $rowHolder2['endtime'];
            
            //DISPLAY SLOT TIME
            echo "<h3>".$slotStart." - ".$slotEnd."</h3>";
            echo "<h4>".$slotName."</h4>"; 
            
            

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
                    echo "<h4>".$count."- ".$sstopic."</h4>";
                    echo "<h5> Location: ".$sslocation."</h5>";
                    echo "<p> Organizer: ".$ssorganizer."</p><br>";
                    // echo $sspanel ==""? "": "<p> Panel: ".$sspanel."</p><br>";
                    echo "<p> Panel: ".$sspanel."</p><br>";

                    $count +=1;



                    //QUERY 4 getting all the Presentations
                    // $sessionId = 2;
                    
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

                            echo "Presentation";
                            echo "</br><p>".$count.".".$count2."- TOPIC PRESENTATION: ".$ppTopic."</p>";
                            echo "</br><p>PRESENTATION Speakers: ".$ppspeaker."</p>";

                            $count2 +=1;

                            // echo 'hello';
                            // var_dump($rowHolder2);
                            // echo $rowHolder2;
                            
                        }
                    }
                    
                    // var_dump($results4);
                    // if($results4){
                    //     var_dump($records4);
                    // }

                    
                    
                }
            }

            

            echo "<hr>";




            
        }
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

<!-- 
<?php
    include($path.'assets/inc/footer.php');
?> -->
