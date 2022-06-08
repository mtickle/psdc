<?php
    //-------------------------------------------------------------
    //--- PHP Objects
    $newObj = new Incident();
    $crimes = $newObj->getTopCrimeCodes();
    $temp_description = "";
    $temp_count = "";
    //-------------------------------------------------------------\

	//-------------------------------------------------------------
	//--- build out the array for the crime code
  	foreach($crimes as $key => $crime) :
        $temp_description .= "'". $crime['crime_description'] . "',";
        $temp_count .= "'". $crime['incident_count'] . "',";
    	endforeach;
    	$temp_description = rtrim($temp_description, ',');
   	 $temp_count = rtrim($temp_count, ',');
	//-------------------------------------------------------------

?>

<script>

    var ctxCrimeCodesChart = document.getElementById('CrimeCodeAnalysis');
    ctxCrimeCodesChart.height = 350
    Chart.defaults.font.size=12;

    var CrimeCodesChart = new Chart(ctxCrimeCodesChart, {
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


