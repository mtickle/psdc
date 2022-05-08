<?php
    $newObj = new Incident();
    $incidents = $objIncident->getDistrictIncidentsByCrimeCode($_GET["crime_code"]);
    $temp_charge = "";
    $temp_charge_count = "";

	//-------------------------------------------------------------
	//--- Build out the array for the record counts
	foreach($incidents as $key => $charge) :
            $temp_charge .= "'". $charge['district'] . "',";
            $temp_charge_count .= "'". $charge['district_count'] . "',";
        endforeach;
        $temp_charge = rtrim($temp_charge, ',');
        $temp_charge_count = rtrim($temp_charge_count, ',');
	//-------------------------------------------------------------
	
?>


<script>

var ctxDistricts = document.getElementById('IncidentsByDistrict');
ctxDistricts.height = 350

    var DistrictsChart = new Chart(ctxDistricts, {
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
     	    responsive: true,
	        maintainAspectRatio: false,
            plugins: {
                legend: { display: true, position: 'bottom' }
            },
	        indexAxis: 'y'
            }
        
    });
</script>


