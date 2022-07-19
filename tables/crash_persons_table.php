    
<?php
$objPsdc = new Psdc();
$items = $objPsdc->getCrashPersons();
?>
    
    <table id="charge_grid" class="table" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Date of Crash</th>
                <th>Gender</th>
                <th>Race</th>
                <th>Vehicle Type</th>
                <th>Circumstances</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($items as $key => $item) :?>
            <tr>
                <td><?php echo $item['date_of_crash'] ?></td>    
                <td><?php echo $item['gender'] ?></td>
                <td><?php echo $item['race'] ?></td>
                <td><?php echo $item['vehicletype'] ?></td>
                <td><?php echo $item['contributing_circumstance_1'] ?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
