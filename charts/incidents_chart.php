<?php

    $newObj = new Incident();
    $crimes = $newObj->getCrimeTypeStats();
    $charges = $newObj->getTopCharges();
    $temp_crime_code = "";
    $temp_crime_description = "";
    $temp_crime_count = "";
    $temp_charge = "";
    $temp_charge_coun = "";

	//-------------------------------------------------------------
	//--- build out the array for the crime code
  	foreach($crimes as $key => $crime) :
		$temp_crime_code .= "'". $crime['crime_code'] . "',";
        $temp_crime_description .= "'". $crime['crime_description'] . "',";
        $temp_crime_count .= "'". $crime['crime_count'] . "',";
    endforeach;
	$temp_crime_code = rtrim($temp_crime_code, ',');
    $temp_crime_description = rtrim($temp_crime_description, ',');
    $temp_crime_count = rtrim($temp_crime_count, ',');
	//-------------------------------------------------------------

?>


<script>

var ctx = document.getElementById('IncidentAnalysis');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                    <?php echo $temp_crime_description ?>
		],
            datasets: [{
		label: 'RPD Incident Analysis',
                data: [
		<?php echo $temp_crime_count ?>
		],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
	indexAxis: 'y',
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

</script>


