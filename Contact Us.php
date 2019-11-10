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
                    <a href="Profile.php">Profile</a>
                </li>
                <li>
                    <a href="Contact%20Us.php" class="active">Contact Us</a>
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
    <div class="container mt-2" style="background-color:white;">
        <br>
        <br>
        <div class="row">
            <div class="col-md-10 offset-1 text-white text-center" style="background-color:gray">
                <h3>Join Us</h3>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-10 offset-1">
                <form action="comp-process.php" method="post" enctype="multipart/form-data">

                    <input type="hidden" name="hdn1" id="hdn1">
                   

                    <br>
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="">Business/Firm Name <small>*</small></label>
                            <input type="text" class="form-control" name="name" id="name" >
                        </div>
                        <div class="col-md-6">

                            <label for="">Email <small>*</small></label>
                            <input type="text" class="form-control" name="eml" id="eml" >
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-md-8">
                            <label for="">About <small>*</small></label>
                            <input type="text" class="form-control" name="abt" id="abt">
                        </div>
                        <div class="col-md-4">

                            <label for="">Estd <small>*</small></label>
                            <input type="text" class="form-control" placeholder="year" name="estd" id="estd" required pattern="^[0-9]{1}[0-9]{3}$">
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-md-10">
                            <label for="">Office Address <small>*</small></label>
                            <input type="text" class="form-control" name="add" id="add" required>
                        </div>
                        <div class="col-md-2">
                            <label for="">Pin <small>*</small></label>
                            <input type="text" class="form-control" name="pin" id="pin" required>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="col-md-4">
                            <label for="">Office No. <small>*</small></label>
                            <input type="text" class="form-control" name="offno" id="offno" required pattern="^[0-9]{}$">
                        </div>
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
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="">Requiremets <small>*</small></label>
                            <input type="text" class="form-control" name="req" id="req" required>
                        </div>
                    </div>

<br>
                    <center>
                        <h4>Images</h4>
                    </center>
                    <br>
                    <center>
                        <div class="form-row">


                            <div class="col-md-4">
                                <img src="imgs/upload.png" alt="" width="200" height="200" id="pic1">
                                <br>
                                <br>
                                <input style="margin-left:50px;"type="file" accept="image/*" onchange="showpreview(this,pic1);" id="img1" name="img1">
                            </div>


                        </div>

                    </center>


                    <br>
                    <br>
                    <div class="form-row">
                        <div class="col-md-4 offset-5">
                            <input type="submit" value="Save" class="btn btn-info" style="width:80px;" id="save" name="btn" >
                            
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
