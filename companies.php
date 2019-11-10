<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Companies</title>
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/style2.css">
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
						<a href="companies.php" class="active">Companies</a>
					</li>
					<li>
						<a href="Practice.php">Practice</a>
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
			<br>
			<br>
			<br>
			<div class="element2"></div>
			<div class="container">
	      <div class="box">
	        <img id="img"src="imgs/img1.gif" alt="">
	        <h2>Deloitte</h2>
					<p>“Deloitte” is the brand under which tens of thousands of dedicated professionals in independent firms throughout the world collaborate to provide audit, consulting, financial advisory, risk advisory, tax and related services to select clients.</p>
					<a id="a" href="instructions.php">Hire Me</a>
					<a id="b" href="after_hireme.php">About Us</a>
	      </div>
	      <div class="box">
	        <img id="img" src="imgs/img2.gif" alt="">
	        <h2>IBM</h2>
					<p>International Business Machines (IBM), is a global technology company that provides hardware, software, cloud-based services and cognitive computing. Founded in 1911 following the merger of four companies in New York State by Charles Ranlett Flint, it was originally called Computing-Tabulating-Recording Company.
 
</p>
					<a id="a" href="instructions.php">Hire Me</a>
					<a id="b" >About Us</a>
	      </div>

</div>
		</section>

	</body>
</html>
