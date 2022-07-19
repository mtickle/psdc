    
<?php
$objPsdc = new Psdc();
$items = $objPsdc->getCrashPersons();
?>
    
    <table id="charge_grid" class="table" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>vehicletype</th>
                <th>contributing_circumstance_1</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($items as $key => $item) :?>
            <tr>
                <td><?php echo $item['vehicletype'] ?></td>
                <td><?php echo $item['contributing_circumstance_1'] ?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
