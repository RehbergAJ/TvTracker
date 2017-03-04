<!DOCTYPE html>
<html>
    <body>
        <div>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" id="export-form">
            <input type="hidden" value='' id='hidden-type' name='ExportType'/>
        </form>
            <table id="" class="table table-striped table-bordered">
                <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Birth</th>
                        <th>Time Left</th>
                        <th>Home work remaining</th>
                        <th>Percentage of time spent in front of a media device</th>
                </tr>
                <tbody>
                <?php foreach($data as $row):?>
                <tr>
                <td><?php echo $row [$first]?></td>
                <td><?php echo $row [$last]?></td>
                <td><?php echo $row [$birth]?></td>
                <td><?php echo $row [$timeRemaining]?></td>
                <td><?php echo $row [$homeworkTime]?></td>
                <td><?php echo $row [$round]?></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>              
    </body>
</html>