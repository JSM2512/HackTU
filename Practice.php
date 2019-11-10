<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Practice</title>
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/style3.css">
<!--		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
	</head>
	<script type="text/javascript">
	function menuToggle() {
		var element = document.getElementById("navigation");
		element.classList.toggle("show")
	}

	</script>
	<body>

		<section>
			<div class="header">
				<h2 class="logo">Hire Me</h2>
				<i class="fa fa-bars x2" onclick="menuToggle()"></i>
				<ul id="navigation">
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="companies.php" >Companies</a>
					</li>
					<li>
						<a href="Practice.php" class="active">Practice</a>
					</li>
					<li>
                    <a href="Profile.php">Profile</a>
                </li>
					<li>
						<a href="Contact%20Us.php">Contact Us</a>
					</li>
					<i class="fa fa-times x2" onclick="menuToggle()"></i>
				</ul>
			</div>
			<div class="element2"></div>
			<div class="container">
	      <div class="box">

	        <h2>Computer Science and Engineering(CSE)</h2>
					<p>This test includes testing about operating systems,computer networks,
					numerical analysis, high performance comutations </p>
					<a id="a" href="instructions.php">Start Test</a>

	      </div>
	      <div class="box">
	        <h2>Mechenical Engineering</h2>
					<p>This test includes testing about machinery,hydraulics,mangonel,buggy car etc. </p>
					<a id="a" href="instructions.php">Start Test</a>

	      </div>
				<div class="box">
	        <h2>Civil Engineering</h2>
					<p>This includes testing about material science, construction engineering,structural analysis and design.</p>
					<a id="a" href="instructions.php">Start Test</a>

	      </div>
				<div class="box">
	        <h2>Electrical Engineering</h2>
					<p>This tests about instrumentation,transmission and distribution,microprocessor interfacing.</p>
					<a id="a" href="instructions.php">Start Test</a>

	      </div>

</div>
		</section>

	</body>
</html>
