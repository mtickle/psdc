<?php
    include("crime_type_chart_data.php");
    $newObj = new CrimeTypeStats();
    $crimes = $newObj->getCrimeTypeStats();

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>

<?php foreach($crimes as $key => $crime) :?>

    <?php echo $crime['crime_description'] ?>
    <?php echo $crime['crime_count'] ?>
    <?php endforeach;?>


<script>

var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
		'Red'
		, 'Blue'
		, 'Yellow'
		, 'Green'
		, 'Purple'
		, 'Orange'
		],
            datasets: [{
		label: 'RPD Incident Analysis',
                data: [
		12
		, 19
		, 3
		, 5
		, 2
		, 3
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


