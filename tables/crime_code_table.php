    
<?php
$objIncident = new Incident();
$items = $objIncident->getCrimeCodes();
?>
    
    <table id="charge_grid" class="table" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Code</th>
                <th>Description</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($items as $key => $item) :?>
            <tr>
                <td><?php echo $item['crime_code'] ?></td>
                <td><?php echo $item['crime_description'] ?></td>
                <td><a href="crime_code_explorer_code.php?crime_code=<?php echo $item['crime_code'] ?>">View</a></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
