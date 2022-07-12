<?php
    $newObj = new Psdc();
    $items = $newObj->getCrimeCodesByDistrict();
    $temp_description = "";
    $temp_count = "";

	//-------------------------------------------------------------
	//--- Build out the array for the record counts
	foreach($items as $key => $item) :
            $temp_description .= "'". $item['district'] . "',";
           $temp_count .= "'". $item['district_count'] . "',";
        endforeach;
        $temp_description = rtrim($temp_description, ',');
       $temp_count = rtrim($temp_description_count, ',');
	//-------------------------------------------------------------
	
?>


<script>

var ctxDistricts = document.getElementById('IncidentsByDistrict');
ctxDistricts.height = 350

    var DistrictsChart = new Chart(ctxDistricts, {
        type: 'pie',
        data: {
            labels: [<?php echo $temp_description ?>],
            datasets: [{label: 'District',
                data: [<?php echo$temp_count ?>],
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


