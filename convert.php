<html>
    <body>
        <?php 
                    
                    $filename = "tv.csv";       
                    // open the file location, append on the new text, or die trying
                    $files = @fopen($filename, "a") or die("Couldn't create file.");
                    //put all array data into csv
                    fputcsv($files, array_keys($_POST));
                    //fputcsv($files, array_keys($_POST['content']));
                    //close connection
                    fputcsv($files, $_POST);
                    fclose($files);        
        ?>
         <p><button method="POST" name="show" id="show" onclick="csv.php">Show Me</button></p>
    </body>
</html>