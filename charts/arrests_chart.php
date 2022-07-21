<?php
    //-------------------------------------------------------------
    //--- PHP Objects
    $newObj = new Incident();
    $charges = $newObj->getTopCharges();
    $temp_charge = "";
    $temp_charge_count = "";
    $temp_color = "";
    //-------------------------------------------------------------

	//-------------------------------------------------------------
	//--- Build out the array for the record counts
	foreach($charges as $key => $charge) :
            $temp_charge .= "'". $charge['charge'] . "',";
            $temp_charge_count .= "'". $charge['charge_count'] . "',";
            $temp_color .= "'". echo( "#%06X", mt_rand( 0, 0xFFFFFF )); . "'";
    endforeach;
    $temp_charge = rtrim($temp_charge, ',');
    $temp_charge_count = rtrim($temp_charge_count, ',');
	//-------------------------------------------------------------	
?>


<script>

    var ctxCharges = document.getElementById('ArrestsByChargeChart');
    ctxCharges.height = 350
    Chart.defaults.font.size = 12;

var ChargesChart = new Chart(ctxCharges, {
    type: 'bar',
    data: {
        labels: [<?php echo $temp_charge ?>],
        datasets: [{
            label: 'Number of Arrests',
            data: [<?php echo $temp_charge_count ?>],
            backgroundColor: [<?php echo $temp_color ?>],
            borderColor: ['black'],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
                legend: { display: true, position: 'bottom' }
            },
        indexAxis: 'y',
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>