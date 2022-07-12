<?php
    //-------------------------------------------------------------
    //--- PHP Objects
    $objData = new Psdc();
    $items = $objData->getTop20CrimeCodes();
    $temp_description = "";
    $temp_count = "";
    //-------------------------------------------------------------\

	//-------------------------------------------------------------
	//--- build out the array for the crime code
  	foreach($items as $key => $item) :
        $temp_description .= "'". $item['crime_description'] . "',";
        $temp_count .= "'". $item['crime_count'] . "',";
    endforeach;
    	$temp_description = rtrim($temp_description, ',');
   	    $temp_count = rtrim($temp_count, ',');
	//-------------------------------------------------------------

?>

<script>

    var ctxIncidents = document.getElementById('IncidentsChart');
    ctxIncidents.height = 170
    Chart.defaults.font.size=12;

    var IncidentsChart = new Chart(ctxIncidents, {
        type: 'bar',
        data: {
            labels: [<?php echo $temp_description ?>],
            datasets: [{
                label: 'Incidents',
                data: [<?php echo $temp_count ?>],
                backgroundColor: ['lightblue'],
                borderColor: ['black'],
                borderWidth: 1
            }]
        },
        options: {
	        responsive: true,
	        matainAspectRatio: false,
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


