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
  
  background-image: url("img/images (35).jpg");
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
                <form action="{{route('referrer.save')}}" method="post">
                    <div class="form-group">
                    {{csrf_field()}}
                    <h3 class="h3 text-center my-2">MEDICAL REPORT FORM</h3><hr>
                      <b><label>Survior Code Number:</label></b><input type="text" placeholder="Enter Survivor Code Number Here"  name="Survivor_Code_Number"> <br /> <br>
                      <b><label>Medical Doctor/ Ref. Section Diary Number:</label></b><input type="text" placeholder="Enter Medical Doctor Ref. Station Diary Here" name="Medical_Doctor_Ref"><br /> <br>
                      <b><label>Women  & Childeren Protection Section (WACPS):</label></b><input type="text" placeholder="Enter Women and Childern Protection Section (WACPS) Here"  name="WACPS"> <br /> <br>
                      <b><label>Victim Name:</label></b><input type="text" placeholder="Enter Victim Name Here" name="Victim_Name">
                      <b><label>Age:</label></b><input type="data-target" placeholder="Enter Age Here" name="Age">
                      <b><label>Tribe:</label></b><input type="text" placeholder="Enter Tribe Here"  name="Tribe"> <br /> <br>
                      <b><label>Address:</label></b><input type="text" placeholder="Enter Address Here" name="Address"> <br /> <br>
                      <h4 class="h4 text-center my-2">Brief Summary of Incident</h4><hr>
                      <textarea placeholder="Enter Incidenct Brief Summary Here"  name="Incidenct_Summary" rows="5" cols="150"></textarea> <br /> <br>
                      <b><label>Investigator's Name:</label></b><input placeholder="Enter Investigator Name Here" name="Investigator_Name">
                      <b><label>Date & Time Reported</label></b><input type="date" placeholder="Enter Date Time Reported Here" name="Date_Time_Reported"> <br /> <br>
                      <b><label>Rank:</label></b><input placeholder="Enter Rank Here" name="Rank"> <br /> <br>
                      <b><label>Contact Number:</label></b><input placeholder="Enter Contact Number Here"  name="Contact_Number">
                      <h3 class="h3 text-center my-2">MEDICAL OFFICER'S REMARKS</h3><hr>
                      <textarea placeholder="Enter Medical Officer Remarks Here"  name="Medical_Officer" rows="5" cols="150"></textarea> <br /> <br>
                      <b><label>Focal Person/OIC Name:</label></b><input placeholder="Enter Focal Person/OIC Name Here" name="Focal_Person_Name">
                      <b><label>Focal Person/OIC Signature:</label></b><input placeholder="Enter Focal Person/OIC Signature Here" name="Signature"><br /> <br>
                      <b><label>Contact Number:</label></b><input placeholder="Enter Contact Number" name="Focal_Person_Number">
                    </div>
                    <button type="submit" class="btn btn-primary">Sent Form</button>
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
