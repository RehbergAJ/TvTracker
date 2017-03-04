<!DOCTYPE html>
<html>
<title>Confirmation</title>
    <body>
        <?php 
            //variables
            $first = $_POST["txtFName"];
            $last = $_POST["txtLName"];
            $birth = $_POST["txtBirth"];
            $school = $_POST["txtSchool"];
            $bed = $_POST["txtBed"];
            $wake = $_POST["txtWake"];
            $homework = $_POST["txtHomework"];
            $tv = $_POST["txtTV"];
            $game = $_POST["txtGame"];
            $soc = $_POST["txtSocial"];
            $out = $_POST["txtOut"];
            $timeRemaining = 12 - $school;
            //calculations
            $timeGaming = (($game * 365) * $timeRemaining);
            $homeworkTime = (($homework * 365) * $timeRemaining) ;
            $screenTime = ((($tv + $game) * 365) * $timeRemaining);
            $screen = $tv + $game;
            $homeworkScreen = $homework + $screen;
            $sleepTime = ((12-$bed) + $wake);        
            $awakeTime = 24 - $sleepTime;
            $screenToAwakeTime = (($screen / $awakeTime) * 100);
            $round = round($screenToAwakeTime, 0);    

            if (!file_exists($filename)){
                //don't add it in a function, have it run it on load with everything else, storing it automatically
                $filename = "tv.csv";       
                // open the file location, append on the new text, or die trying
                $files = fopen($filename, "a") or die("Couldn't create file.");
                //put all array data into csv
                fputcsv($files, array_keys($_POST));
            } else {
                //close connection
                fputcsv($files, $_POST);
                fclose($files);    
            }
        ?>            
        
        <div name="content" style="text-align: center; padding-top:15%;">
            <p>Great! Thanks <?php echo $first?> for responding to our survey.</p>
            <p> Just to confirm you are <?php echo $first." ".$last ?>, you were born in <?php echo $birth ?>, and are currently in grade <?php echo $school ?>.</p>
            <p>You have <?php echo $timeRemaining?> years left in school. </p>
            <p>You will also spend <?php echo $homeworkTime ?> hours doing homework until you are finished school. </p>
            <p>You also spend <?php echo $round ?>% of your awake time in front of some sort of media device</p>
            <!--     have to call the onclick as a document write, and then put the php function to be called inside, like a standard call. -->            
            <p><button method="POST" name="show" id="show" onclick="/php/php/csv.php">Show Me</button></p>
        </div>
     
    </body>
</html>