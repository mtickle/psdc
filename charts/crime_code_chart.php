<?php
    //-------------------------------------------------------------
    //--- PHP Objects
    $newObj = new Incident();
    $crimes = $newObj->getCrimeCodeCounts();
    $temp_description = "";
    $temp_count = "";
    //-------------------------------------------------------------\

	//-------------------------------------------------------------
	//--- build out the array for the crime code
  	foreach($crimes as $key => $crime) :
        $temp_description .= "'". $crime['crime_code_description'] . "',";
        $temp_count .= "'". $crime['crime_code_count'] . "',";
    	endforeach;
    	$temp_description = rtrim($temp_description, ',');
   	 $temp_count = rtrim($temp_count, ',');
	//-------------------------------------------------------------

?>

<script>

    var ctxCrimeCodes = document.getElementById('CrimeCodeAnalysis');
    ctxCrimeCodes.height = 170
    Chart.defaults.font.size=12;

    var IncidentsChart = new Chart(ctxCrimeCodes, {
        type: 'bar',
        data: {
            labels: [<?php echo $temp_description ?>],
            datasets: [{
                label: 'Crime Codes',
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


