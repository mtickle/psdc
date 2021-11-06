<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $newObj = new Incident();
    $charges = $newObj->getTopCharges();
    $temp_charge = "";
    $temp_charge_coun = "";

	//-------------------------------------------------------------
	//--- Build out the array for the record counts
	foreach($charges as $key => $charge) :
                $temp_charge .= "'". $crime['charge'] . "',";
                $temp_charge_count .= "'". $crime['charge_count'] . "',";
        endforeach;
        $temp_charge = rtrim($temp_charge, ',');
        $temp_charge_count = rtrim($temp_charge_count, ',');
	//-------------------------------------------------------------

	// //-------------------------------------------------------------
	// //--- Build out the array for the record counts
	// foreach($charges as $key => $charge) :
    //     $temp_charge_count .= "'". $crime['charge_count'] . "',";
    // endforeach;
    // $temp_charge_count = rtrim($temp_charge_count, ',');
    // //-------------------------------------------------------------
	


?>


<script>

var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [

                
                    <?php echo $temp_charge ?>

		// 'Red'
		// , 'Blue'
		// , 'Yellow'
		// , 'Green'
		// , 'Purple'
		// , 'Orange'
		],
            datasets: [{
		label: 'Arrest Analysis',
                data: [
		<?php echo $temp_charge_count ?>
		//12
		//, 19
		//, 3
		//, 5
		//, 2
		//, 3
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


