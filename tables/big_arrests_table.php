    
<?php
$objIncident = new Incident();
$items = $objIncident->getArrests();
?>
    
    <table id="charge_grid" class="table" width="100%" cellspacing="0">
        <thead>
            <tr>
               
                <th>Arrested</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>DOB</th>
                <th>Gender</th>
                <th>Race</th>
                <th>Charge</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($items as $key => $item) :?>
            <tr>
            <td><?php echo $item['datearr'] ?></td>
                <td><?php echo $item['firstname'] ?></td>
                <td><?php echo $item['lastname'] ?></td>
                <td><?php echo $item['dob'] ?></td>
                <td><?php echo $item['sex'] ?></td>
                <td><?php echo $item['race'] ?></td>
                <td><?php echo $item['charge'] ?></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
