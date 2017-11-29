<?php
	$servername = "localhost";
	$username = "root";
	$password = "Vatsal&294";
	$dbname = "capstone";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	// echo "Connected successfully";
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Analysis Chart</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="css/nav.css" rel="stylesheet" type="text/css" media="all" />
	<!-- For-Navigation-CSS -->
	<link href="css/lsb.css" rel="stylesheet" type="text/css" media="all">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js"></script>
	<style>
	body {
		overflow-x: hidden;
	}
	</style>
</head>

<body>
	<h1 style="text-align: center; margin-top: 35px;">Analysis: March</h1>
	<?php

	$sql = "SELECT * FROM March";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    $i = 0;
	    $a = 0;
	    $j = -1;
	    $text = '';
	    $op = '';
	    $arr = array();
	    while($row = mysqli_fetch_assoc($result)) {
	    	// echo $row["Id"] . " : " . $row["water_amount"] . "<br>";
     		$a = $a + $row["water_amount"];
     		$i++;
	     	if($i==3) {
	     		$i = 0;
	     		$j++;
	     		$arr[$j] = $a/3;
	     		//echo $j . " : " . $arr[$j] . "<br>";
	     		$op = $op.','.$arr[$j];
	     		$a = 0;
	     	}
	    }
	} else {
	    echo "0 results";
	}
	$text = "<input type='text' style='display: none; width: 100%;' value='".$op."' id='txtVal' name='txtVal'>";
	echo $text;

	mysqli_close($conn);
	?>
	<div style="display: flex; justify-content: center; align-items: center; margin-top: 50px;">
		<div style="width: 400px; height: 400px;">
			<canvas id="myChart" width="400" height="400"></canvas>
		</div>
		<div style="width: 400px; height: 400px; margin-left: 50px;">
			<canvas id="myChart2" width="400" height="430"></canvas>
		</div>
		<div style="width: 400px; height: 400px; margin-left: 50px;">
			<canvas id="myChart3" width="400" height="400"></canvas>
		</div>
	</div>

	<script>
	var z = document.getElementById("txtVal").value;
	var res = z.split(",");
	var Sdata = [];
	for(var i=1;i<res.length;i++) {
		Sdata[i-1] = res[i];
		// alert(Sdata[i-1]);
	}
	// Sdata = [25, 44, 30, 81, 56, 55, 40];
	var ctx = document.getElementById("myChart");
	var myChart = new Chart(ctx, {
		  type: 'line',
		  data: {
		    labels: ["Phase 1", "Phase 2", "Phase 3", "Phase 4", "Phase 5", "Phase 6", "Phase 7"],
		    datasets: [{
		      label: 'Water required',
		      fill: false,
		      lineTension: 0.14,
		      data: Sdata,
		      backgroundColor: [
		        'rgba(255, 99, 132, 0.2)',
		        'rgba(54, 162, 235, 0.2)',
		        'rgba(255, 206, 86, 0.2)',
		        'rgba(75, 192, 192, 0.2)',
		        'rgba(153, 102, 255, 0.2)',
		        'rgba(255, 159, 64, 0.2)'
		      ],
		      borderColor: [
		        'rgba(255,99,132,1)',
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
		    scales: {
		      yAxes: [{
		        ticks: {
		          beginAtZero: true
		        }
		      }]
		    }
		  }
		});
		var ctx2 = document.getElementById("myChart2");
		var myChart = new Chart(ctx2, {
			  type: 'bar',
			  data: {
			    labels: ["Phase 1", "Phase 2", "Phase 3", "Phase 4", "Phase 5", "Phase 6", "Phase 7"],
			    datasets: [{
			      label: 'Water required',
			      fill: false,
			      lineTension: 0.14,
			      data: Sdata,
			      backgroundColor: [
			        'rgba(255, 99, 132, 0.2)',
			        'rgba(54, 162, 235, 0.2)',
			        'rgba(255, 206, 86, 0.2)',
			        'rgba(75, 192, 192, 0.2)',
			        'rgba(153, 102, 255, 0.2)',
			        'rgba(255, 159, 64, 0.2)'
			      ],
			      borderColor: [
			        'rgba(255,99,132,1)',
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
			    scales: {
			      yAxes: [{
			        ticks: {
			          beginAtZero: true
			        }
			      }]
			    }
			  }
			});
		var ctx3 = document.getElementById("myChart3");
		var myChart = new Chart(ctx3, {
		  	type: 'pie',
			data: {
		    labels: ["Phase 1", "Phase 2", "Phase 3", "Phase 4", "Phase 5", "Phase 6", "Phase 7"],
		    datasets: [{
		      label: 'Points',
		      backgroundColor: ['#f1c40f', '#e67e22', '#16a085', '#2980b9', '#ff0000', '#2999b8', '#19a085'], 
		      data: Sdata,
		      borderWidth: 1
		    }]
		  },
		  options: {
		    scales: {
		      yAxes: [{
		        ticks: {
		          beginAtZero: true
		        }
		      }]
		    }
		  }
		});
	</script>
</body>
</html>