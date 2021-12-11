<?php
    //-------------------------------------------------------------
    //--- PHP Objects
    $newObj = new Incident();
    $items = $newObj->getCrashDriversByAge();
    $temp_item_description = "";
    $temp_item_count = "";
    //-------------------------------------------------------------\

	//-------------------------------------------------------------
	//--- build out the array for the crime code
  	foreach($items as $key => $item) :
        $temp_item_description .= "'". $item['age'] . "',";
        $temp_item_count .= "'". $item['age_count'] . "',";
    	endforeach;
    	$temp_item_description = rtrim($temp_item_description, ',');
   	    $temp_item_count = rtrim($temp_item_count, ',');
    ?>
	//-------------------------------------------------------------


<script>

    var ctxIncidents = document.getElementById('CrashDriverAgeAnalysis');
    ctxIncidents.height = 170
    Chart.defaults.font.size=12;

    var IncidentsChart = new Chart(ctxIncidents, {
        type: 'line',
        data: {
            labels: [<?php echo $temp_item_description ?>],
            datasets: [{
                label: 'Crashes',
                data: [<?php echo $temp_item_count ?>],
                borderColor: ['black'],
                borderWidth: 1,
                backgroundColor: Utils.transparentize(Utils.CHART_COLORS.red, 0.5),
            }]
        },
        options: {
	        responsive: true,
	        matainAspectRatio: false,
            plugins: {
                legend: { display: true, position: 'bottom' }
            }
        }
    });

</script>


