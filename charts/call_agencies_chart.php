<?php
    //-------------------------------------------------------------
    //--- PHP Objects
    $newObj = new Incident();
    $charges = $newObj->getTopCallAgencies();
    $temp_charge = "";
    $temp_charge_count = "";
    //-------------------------------------------------------------

	//-------------------------------------------------------------
	//--- Build out the array for the record counts
	foreach($charges as $key => $charge) :
            $temp_charge .= "'". $charge['incident'] . "',";
            $temp_charge_count .= "'". $charge['incident_count'] . "',";
    endforeach;
    $temp_charge = rtrim($temp_charge, ',');
    $temp_charge_count = rtrim($temp_charge_count, ',');
	//-------------------------------------------------------------	
?>


<script>

    var ctxCallAgencies = document.getElementById('CallsByAgencyChart');
    ctxCallAgencies.height = 350
    Chart.defaults.font.size = 12;

var CallsAgencyChart = new Chart(ctxCallAgencies, {
    type: 'bar',
    data: {
        labels: [<?php echo $temp_charge ?>],
        datasets: [{
            label: 'Number of Calls',
            data: [<?php echo $temp_charge_count ?>],
            backgroundColor: ['lightblue'],
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