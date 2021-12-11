<?php
    //-------------------------------------------------------------
    //--- PHP Objects
    $newObj = new Incident();
    $crimes = $newObj->getCrashDriversByAge();
    $temp_crime_description = "";
    $temp_crime_count = "";
    //-------------------------------------------------------------\

	//-------------------------------------------------------------
	//--- build out the array for the crime code
  	foreach($crimes as $key => $crime) :
        $temp_crime_description .= "'". $crime['age'] . "',";
        $temp_crime_count .= "'". $crime['age_count'] . "',";
    	endforeach;
    	$temp_crime_description = rtrim($temp_crime_description, ',');
   	 $temp_crime_count = rtrim($temp_crime_count, ',');
	//-------------------------------------------------------------

?>

<script>

    var ctxIncidents = document.getElementById('CrashDriverAgeAnalysis');
    ctxIncidents.height = 170
    Chart.defaults.font.size=12;

    var IncidentsChart = new Chart(ctxIncidents, {
        type: 'bar',
        data: {
            labels: [<?php echo $temp_crime_description ?>],
            datasets: [{
                label: 'Incidents',
                data: [<?php echo $temp_crime_count ?>],
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


