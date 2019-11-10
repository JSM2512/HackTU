<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style4.css">
    <link rel="stylesheet" href="style/bootstrap.css">
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
            <h2 class="logo">Hire Me</h2>
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
                    <a href="Profile.php" class="active">Profile</a>
                </li>
                
                <li>
                    <a href="Contact%20Us.php">Contact Us</a>
                </li>
                <i class="fa fa-times x2" onclick="menuToggle()"></i>
            </ul>
        </div>
        <div class="element2"></div>

    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container mt-2" id="cont"style="background-color:white;">
        <br>
        <br>
        <div class="row">
            <div class="col-md-10 offset-1 bg-info text-white text-center">
                <h3>Profile</h3>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-10 offset-1">
                <form action="profile-process.php" method="post" enctype="multipart/form-data">

                    <input type="hidden" name="hdn1" id="hdn1">
<!--
                    <input type="hidden" name="hdn2" id="hdn2">
                    <input type="hidden" name="hdn3" id="hdn3">
-->


                    <br>
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="">Full Name <small>*</small></label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                        <div class="col-md-6">
                            <label for="">Father's Name <small>*</small></label>
                            <input type="text" class="form-control" name="fname" id="fname">
                        </div>
                        
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="">Phone No <small>*</small></label>
                            <input type="text" class="form-control" name="mob" id="mob" required>
                        </div>
                        <div class="col-md-6">
                            <label for="">Father's No. <small>*</small></label>
                            <input type="text" class="form-control" name="fmob" id="fmob">
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-md-6">

                            <label for="">Roll No <small>*</small></label>
                            <input type="text" class="form-control" placeholder="year" name="roll" id="roll">
                        </div>
                         <div class="col-md-6">

                            <label for="">Branch <small>*</small></label>
                            <input type="text" class="form-control" placeholder="year" name="brnh" id="brnh">
                        </div>
                        </div>
                        
                       
                        <div class="form-row">
                            <div class="col-md-12">

                            <label for="">Email <small>*</small></label>
                            <input type="text" class="form-control" name="email" id="email">
                        </div>
                        </div>
                
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>


                    <div class="form-row">
                        <div class="col-md-10">
                            <label for="">Residential Address <small>*</small></label>
                            <input type="text" class="form-control" name="add" id="add">
                        </div>
                        <div class="col-md-2">
                            <label for="">Pin<small>*</small></label>
                            <input type="text" class="form-control" name="pin" id="pin">
                        </div>
                    </div>
                    <br>
                    <div class="form-row">

                        <div class="col-md-4">
                            <label for="">State <small>*</small></label>
                            <select name="state" id="state" class="form-control" required>
                                <option value=""></option>
                                <option value="Andhara Pradesh">Andhara Pradesh</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujrat">Gujrat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu Kashmir">Jammu Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerela">Kerela</option>

                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>

                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil nadu">Tamil nadu</option>

                                <option value="Telengana">Telengana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradeshl">Uttar Pradesh</option>

                                <option value="Uttarkhand">Uttarkhand</option>
                                <option value="West Bengal">West Bengal</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">City <small>*</small></label>
                            <input type="text" class="form-control" name="city" id="city" required>
                        </div>
                        <br>
                        <br>

                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="">Resume<small>*</small></label>
                            <input type="file" class="form-control" name="res" id="res" required>
                        </div>
                    </div>

<br>


                    <br>
                    <br>
                    <div class="form-row">
                        <div class="col-md-4 offset-5">
                            <input type="submit" value="Save" class="btn btn-info" style="width:80px;" id="save" name="btn">
                           
                        </div>
                    </div>
                </form>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>
    <br>
    <br>

</body>

</html>
