<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructions</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style5.css">
    <link rel="stylesheet" href="bootstrap.css">
</head>
<script type="text/javascript">
    function menuToggle() {
        var element = document.getElementById("navigation");
        element.classList.toggle("show")
    }

</script>
 <script>
        function showpreview(file, ref) {

            if ($(file)[0].files[0].size > 2097152) {
                alert("please upload image <=2 MB");
                return;
            }

            if (file.files && file.files[0]) {

                var reader = new FileReader();
                reader.onload = function(e) {
                    $(ref).prop('src', e.target.result);
                }
                reader.readAsDataURL(file.files[0]);
            }

        }

    </script>

<body>
    <section>
        <div class="header">
            <h2 class="logo">Your Logo</h2>
            <i class="fa fa-bars x2" onclick="menuToggle()"></i>
            <ul id="navigation">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="companies.php">Companies</a>
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
        <div class="element2"></div>
        <div class="container">
  	      <div class="box">

  	        <h2>Read The Instructions Carefully</h2>
  					<p>Please make sure that:
you have an active user account at UiB. Log on to webmail.uib.no, miside.uib.no or another UiB-service to see if your account is active.
you remember the password for your UiB-account. If you have forgotten your password, you can change it at sebra.uib.no.
If you are using your personal laptop, please make sure that you have installed the necessary software and programs before the examination day.  It is important that your laptop fulfils the system requirements of the programme.
You must bring your own power supply for use during the examination.
If failure to comply with these recommendations results in technical problems that cause a delay in your examination, you cannot expect to be granted extended time.


Before the examination starts
 Arrive at the examination venue at least 15 minutes before the start of the examination / 35 minutes before a digital examination.
Law: The examination starts at the moment the book control begins, and you must therefore be present by 8.20 a.m. for regular written examinations and 8.10 a.m. at digital examinations.
When using a laptop at digital examinations, the laptop has to be set up as soon as possible. If you are taking a law exam, the laptop must be set up before the book control.
Coats, backpacks, bags, etc. must be placed as directed. Mobile phones, mp3 players, smartwatches and other electronic devices must be turned off and put away, and cannot be stored in coats or pockets.
If support material, other than that which is specifically permitted, is found at or by the desk, it may be treated as an attempt to cheat and relevant procedures for cheating will be followed.
The head invigilator will provide information about examination support materials that you are permitted to use during the examination. All dictionaries must be approved by the faculty before the exam and will be handed out in the exam venue by the invigilators.</p>
  					<a id="a" href="start.php?id=1">Start Test</a>

  	      </div>
        </div>
</body>

</html>
