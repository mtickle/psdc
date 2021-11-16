<?php
    $newObj = new Incident();
    $charges = $newObj->getIncidentsByDistrict();
    $temp_charge = "";
    $temp_charge_count = "";

	//-------------------------------------------------------------
	//--- Build out the array for the record counts
	foreach($charges as $key => $charge) :
            $temp_charge .= "'". $charge['district'] . "',";
            $temp_charge_count .= "'". $charge['district_count'] . "',";
        endforeach;
        $temp_charge = rtrim($temp_charge, ',');
        $temp_charge_count = rtrim($temp_charge_count, ',');
	//-------------------------------------------------------------
	
?>


<script>

var ctx = document.getElementById('IncidentsByDistrict');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: [<?php echo $temp_charge ?>],
            datasets: [{label: 'District',
            data: [<?php echo $temp_charge_count ?>],
                backgroundColor: ['pink','lightblue','lightgreen','Lavender','AntiqueWhite','Gainsboro'],
                borderColor: ['black'],
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


