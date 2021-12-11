<?php
    $newObj = new Incident();
    $items = $newObj->getCrashDriversByGender();
    $temp_item = "";
    $temp_item_count = "";

	//-------------------------------------------------------------
	//--- Build out the array for the record counts
	foreach($items as $key => $item) :
            $temp_item .= "'". $item['gender'] . "',";
            $temp_item_count .= "'". $item['gender_count'] . "',";
        endforeach;
        $temp_item = rtrim($temp_item, ',');
        $temp_item_count = rtrim($temp_item_count, ',');
	//-------------------------------------------------------------
	
?>


<script>

var ctxGender = document.getElementById('CrashDriversByGenderChart');
    ctxGender.height = 350
    
    var GenderChart = new Chart(ctxGender, {
        type: 'pie',
        data: {
            labels: [<?php echo $temp_item ?>],
            datasets: [{label: 'Crash Driver Gender',
            data: [<?php echo $temp_item_count ?>],
            backgroundColor: ['lightblue','lightgreen'],
            borderColor: ['black'],
            borderWidth: 1
            }]
        },
        options: {
        responsive: true,
        maintainAspectRatio: false,
            plugins: {
                legend: { display: true, position: 'bottom' }
            },
	        indexAxis: 'y',
        }
    });
</script>


