<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale = 1">
    <title>Medical Referre Form</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- <link rel="stylesheet" href="css/bootstrap-image-upload.css"> -->
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/fontawesome-all.js"></script>
</head>
<body>
     <!-- NAVBAR  -->
     <nav class="navbar navbar-expand-lg navbar-light bg-primary py-3">
        <div class="container">
                <a class="navbar-brand text-white" href="index.html">Reporting SGBV Cases</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
        </div>
      </nav>
      <!-- NAVABAR END -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  
  background-image: url("img/images (33).jpg");
  min-height: 100px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
</style>
<body>

<!-- ================ Add form ==================== -->
    <div class="row mb-5">
        <div class="container">
            <div class="card-deck">
                <form action="{{route('interview.save')}}" method="post">
                    <div class="form-group">
                    {{csrf_field()}}
                      <br /><b><label>Case Number:</label></b><input type="number" placeholder="Enter Case Number Here"  name="Case_Number"> 
                      <b><label>Date:</label></b><input type="date" placeholder="Enter Survivor Date Here"  name="Date"><br /> <br>
                  <h3 class="h3 text-center my-2">COMPLAINANT/VICTIM INTERVIEW FORM</h3><hr>
                      <b><label>Complainant/Victim Name:</label></b><input type="text" placeholder="Enter Complainant/Victim Name Here" name="Complainant_Victim_Name">
                      <b><label>Age:</label></b><input type="data-target" placeholder="Enter Age Here" name="Age">
                      <b><label>Sex:</label></b><input type="Sex" placeholder="Enter Sex Here" name="Sex">
                      <b><label>Tribe:</label></b><input type="text" placeholder="Enter Tribe Here"  name="Tribe"><br /> <br>
                      <b><label>Address:</label></b><input type="text" placeholder="Enter Address Here" name="Address">
                      <b><label>Date of Birth:</label></b><input type="date" placeholder="Enter Date of Birth Here" name="DOB"><br /> <br>
                      <b><label>Place of Birth:</label></b><input type="text" placeholder="Enter Place of Birth Here" name="Birth_Place">
                      <b><label>Nationality:</label></b><input type="text" placeholder="Enter Nationality Here" name="Nationality"><br /> <br>
                      <b><label>Height:</label></b><input placeholder="Enter Height Here" name="Height">
                      <b><label>Weight:</label></b><input placeholder="Enter Weight Here" name="Weight">
                      <b><label>Complexion:</label></b><input placeholder="Enter Complexion Here" name="Complexion">
                      <b><label>Build (Physique):</label></b><input placeholder="Build (Physique) Here" name="Physique"><br /> <br>             
                      <b><label>Contact Number:</label></b><input placeholder="Enter Contact Number Here"  name="Contact_Number"><br /> <br>
                      <b><label>Father's Name:</label></b><input placeholder="Enter Father's Name Here" name="Father_Name">
                      <b><label>Father's Address:</label></b><input placeholder="Enter Father's Address Here" name="Father_Address"><br /> <br>
                      <b><label>Mother's Name:</label></b><input placeholder="Enter Mother's Name Here" name="Mother_Name">
                      <b><label>Mother's Address:</label></b><input placeholder="Enter Mother's Address Here" name="Mother_Address"><br /> <br>
                      <b><label>Date/Time of Interview:</label></b><input type="date" placeholder="Enter Date/Time of Interview Here" name="Interview"><br /> <br>
                      <b><label>Place of Occurrence:</label></b><input type="data" placeholder="Enter Place of Occurrence Here" name="Occurrence"><br /> <br>
                      <b><label>Date/Time of Occurence:</label></b><input type="date" placeholder="Enter Date/Time of Occurrence Here" name="Occurrence_Date"><br /> <br>
                      <h3 class="h3 text-center my-2">FREE NARRATIVE</h3><hr>
                      <textarea placeholder="Enter Free Narrative Here"  name="Free_Narrative" rows="5" cols="150"></textarea> <br /> <br>
                      <b><label>Investigator:</label></b><input placeholder="Enter Investigator Name Here" name="Investigator">
                      <b><label>Complainant/Victim:</label></b><input placeholder="Enter Complainant Victim Signature/Name" name="Victim_Sign">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
        </div>
    </div>


 <!-- FOOTER -->
    <footer  class="bg-primary py-1">
       <p class="text-center py-2 text-white">Bolex88 &copy; 2019</p>
    </footer>

</body>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- script for toggle sidebar button -->
<script>
    // $(document).ready(function () {

    //     $('#sidebarCollapse').on('click', function () {
    //         $('#sidebar').toggleClass('active');
    //         $('#content').toggleClass('active');
    //      });

    // });
</script>

<!--[if lt IE 9]--/>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</html>