<?php
    //-------------------------------------------------------------
    //--- PHP Objects
    $newObj = new Incident();
    $items = $newObj->getTopCallAgencies();
    $temp_item = "";
    $temp_item_count = "";
    //-------------------------------------------------------------

	//-------------------------------------------------------------
	//--- Build out the array for the record counts
	foreach($items as $key => $item) :
            $temp_item .= "'". $item['incident'] . "',";
            $temp_item_count .= "'". $item['incident_count'] . "',";
    endforeach;
    $temp_item = rtrim($temp_item, ',');
    $temp_item_count = rtrim($temp_item_count, ',');
	//-------------------------------------------------------------	
?>


<script>

    var ctxCallAgencies = document.getElementById('CallsByAgencyChart');
    ctxCallAgencies.height = 450
    //Chart.defaults.font.size = 12;

var CallsAgencyChart = new Chart(ctxCallAgencies, {
    type: 'bar',
    data: {
        labels: [<?php echo $temp_item ?>],
        datasets: [{
            label: 'Number of Calls',
            data: [<?php echo $temp_item_count ?>],
            backgroundColor: ['lightgreen'],
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