<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Pure CSS Landing Page Design</title>
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<script type="text/javascript">
	function menuToggle() {
		var element = document.getElementById("navigation");
		element.classList.toggle("show")
	}

	</script>
	<body>
		<div class="open">
			<div class="layer"></div>
			<div class="layer"></div>
		</div>
		<section>
			<div class="header">
				<h2 class="logo">Hire Me</h2>
				<i class="fa fa-bars x2" onclick="menuToggle()"></i>
				<ul id="navigation">
					<li>
						<a href="index.php" class="active">Home</a>
					</li>
					<li>
						<a href="companies.php" >Companies</a>
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
			<div class="bannerText">
				<h2>Think , Test</h2><br>
				<h3>And  Get  Placed</h3>
				<p>The Placement Cell plays a crucial role in locating job opportunities for Under Graduates and Post Graduates passing out from the college by keeping in touch with reputed firms and industrial establishments. The Placement Cell operates round the year to facilitate contacts between companies and graduates. The number of students placed through the campus interviews is continuously rising. On invitation, many reputed industries visit the institute to conduct interviews.</p>
				<a href="#">Read More</a>
			</div>
			<img src="imgs/bulb.jpg" class="bulb">
			<ul class="sci">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram"></i></a></li>
			</ul>
			<div class="element1"></div>
			<div class="element2"></div>
		</section>

	</body>
</html>
