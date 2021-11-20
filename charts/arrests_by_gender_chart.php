<?php
    $newObj = new Incident();
    $charges = $newObj->getArrestsByGender();
    $temp_charge = "";
    $temp_charge_count = "";

	//-------------------------------------------------------------
	//--- Build out the array for the record counts
	foreach($charges as $key => $charge) :
            $temp_charge .= "'". $charge['gender'] . "',";
            $temp_charge_count .= "'". $charge['gender_count'] . "',";
        endforeach;
        $temp_charge = rtrim($temp_charge, ',');
        $temp_charge_count = rtrim($temp_charge_count, ',');
	//-------------------------------------------------------------
	
?>


<script>

var ctx = document.getElementById('ArrestsByGenderChart');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: [<?php echo $temp_charge ?>],
            datasets: [{label: 'Arrest Gender',
            data: [<?php echo $temp_charge_count ?>],
            backgroundColor: ['lightblue','lightgreen'],
            borderColor: ['black'],
            borderWidth: 1
            }]
        },
        options: {
            plugins: {
            legend: {
                display: true,
                labels: {
                    color: 'rgb(255, 99, 132)'
                }
            }
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


