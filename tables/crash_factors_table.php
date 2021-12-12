    
<?php
$objIncident = new Incident();
$crashes = $objIncident->getTopCrashFactors();
?>
    
    <table id="charge_grid" class="table" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Factor</th>
                <th>Count</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($crashes as $key => $crash) :?>
            <tr>
                <td><?php echo $crash['crash_factor'] ?></td>
                <td><?php echo $crash['factor_count'] ?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
