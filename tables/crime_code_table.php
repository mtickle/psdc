    
<?php
$objIncident = new Incident();
$items = $objIncident->getCrimeCodes();
?>
    
    <table id="charge_grid" class="table" width="100%" cellspacing="0">
        <thead>
            <tr>
               
                <th>Code</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($items as $key => $item) :?>
            <tr>
                <td><?php echo $item['crime_code'] ?></td>
                <td><?php echo $item['crime_description'] ?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
