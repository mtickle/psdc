<?php
    //-------------------------------------------------------------
    //--- PHP Objects
    $newObj = new Incident();
    $calls = $newObj->getTopCalls();
    $temp_call = "";
    $temp_call_count = "";
    //-------------------------------------------------------------

	//-------------------------------------------------------------
	//--- Build out the array for the record counts
	foreach($calls as $key => $call) :
            $temp_call .= "'". $call['incident'] . "',";
            $temp_call_count .= "'". $call['incident_count'] . "',";
    endforeach;
    $temp_call = rtrim($temp_call, ',');
    $temp_call_count = rtrim($temp_call_count, ',');
	//-------------------------------------------------------------	
?>


<script>

    var ctxCalls = document.getElementById('CallsByTypeChart');
    ctxCalls.height = 450
    //Chart.defaults.font.size = 14;

var CallsChart = new Chart(ctxCalls, {
    type: 'bar',
    data: {
        labels: [<?php echo $temp_call ?>],
        datasets: [{
            label: 'Number of Calls',
            data: [<?php echo $temp_call_count ?>],
            //backgroundColor: ['lightblue'],
            borderColor: Utils.CHART_COLORS.red,
            backgroundColor: Utils.transparentize(Utils.CHART_COLORS.red, 0.5),
            //borderColor: ['black'],
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