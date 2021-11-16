<?php
   
    $newObj = new Incident();
    $charges = $newObj->getTopCharges();
    $temp_charge = "";
    $temp_charge_count = "";

	//-------------------------------------------------------------
	//--- Build out the array for the record counts
	foreach($charges as $key => $charge) :
            $temp_charge .= "'". $charge['charge'] . "',";
            $temp_charge_count .= "'". $charge['charge_count'] . "',";
    endforeach;
    $temp_charge = rtrim($temp_charge, ',');
    $temp_charge_count = rtrim($temp_charge_count, ',');
	//-------------------------------------------------------------
	
?>


<script>

var ctx = document.getElementById('ArrestsByChargeChart');
    
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                <?php echo $temp_charge ?>
	        ],
            datasets: [{
		label: 'Arrest Analysis',
        data: [<?php echo $temp_charge_count ?>],
                backgroundColor: ['lightblue','lightgreen'],
                borderColor: ['black'],
                borderWidth: 1
            }]
        },
        options: {
	indexAxis: 'y',
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

</script>


