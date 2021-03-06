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
    //-------------------------------------------------------------
    ?>
	


<script>

    var ctxIncidents = document.getElementById('CrashDriverAgeAnalysis');
    ctxIncidents.height = 128
    Chart.defaults.font.size=12;

    var IncidentsChart = new Chart(ctxIncidents, {
        type: 'line',
        data: {
            labels: [<?php echo $temp_item_description ?>],
            datasets: [{
                label: 'Driver\'s Age',
                data: [<?php echo $temp_item_count ?>],
                backgroundColor: ['lightblue'],
                borderColor: ['black'],
                borderWidth: 1,
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


