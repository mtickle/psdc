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

var ctxGender = document.getElementById('ArrestsByGenderChart');
    ctxGender.height = 350
    Chart.defaults.font.size = 12;

    var GenderChart = new Chart(ctxGender, {
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
                legend: { display: true }
            },
	        indexAxis: 'y',
        }
    });
</script>


