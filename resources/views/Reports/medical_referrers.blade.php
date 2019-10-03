<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale = 1">
    <title>Reports</title>
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
      

   <section id="Abuse-list-home">
    <div class="row mb-5">
        <div class="container">
        <div class="card-deck">
         @foreach($medical_referrers as $medical_referrer)
         <h3 class="h3 text-center my-2">MEDICAL REPORT</h3><hr>               
        <table class="table table-hover my-5">
        <tr>
            <td><p>Service Code Number:</p></td>
            <td><span class="description-text">
                {{$medical_referrer->Survivor_Code_Number}}
                </span>
            </td>
            <td><p>Medical Doctor/ Ref. Section Diary Number:</p></td>
            <td><span class="description-text">
                {{$medical_referrer->Medical_Doctor_Ref}}
                </span>
            </td>
            <td><p>Women  & Childeren Protection Section (WACPS):</p></td>
            <td><span class="description-text">
                {{$medical_referrer->WACPS}}
                </span>
            </td>
            <td><p>Victim Name:</p></td>
            <td><span class="description-text">
                {{$medical_referrer->Victim_Name}}
                </span>
            </td>
            <td><p>Age:</p></td>
            <td><span class="description-text">
                {{$medical_referrer->Age}}
                </span>
            </td>
            <td><p>Tribe:</p></td>
            <td><span class="description-text">
                {{$medical_referrer->Tribe}}
                </span>
            </td>
            <td><p>Address:</p></td>
            <td><span class="description-text">  
                {{$medical_referrer->Address}}
                </span>
            </td>
        </tr>
        <tr>
        <td><p><h4 class="h4 text-center my-2">Brief Summary of Incident</h4><hr></p></td>
            <td><span class="description-text">
                    {{$medical_referrer->Incidenct_Summary}}<br />
                </span>
            </td>
            <td><p>Investigator's Name:</p></td>
            <td><span class="description-text">
                    {{$medical_referrer->Investigator_Name}}
                 </span>
            </td>
            <td><p>Date & Time Reported:</p></td>
            <td><span class="description-text">
                    {{$medical_referrer->Date_Time_Reported}}
                </span>
            </td>
            <td><p>Rank:</p></td>
            <td><span class="description-text">
                    {{$medical_referrer->Rank}}
                </span>
            </td>
            <td><p>Contact Number:</p></td>
            <td><span class="description-text">
                    {{$medical_referrer->Contact_Number}}
                </span>
            </td>
        </tr>
        <tr>
        <td><p><h3 class="h3 text-center my-2">MEDICAL OFFICER'S REMARKS</h3><hr></p></td>
            <td><span class="description-text">
                    {{$medical_referrer->Medical_Officer}}
                </span>
            </td>
            <td><p>Focal Person/OIC Name:</p></td>
            <td><span class="description-text">
                    {{$medical_referrer->Focal_Person_Name}}
                </span>
            </td>
            <td><p>Focal Person/OIC Signature:</p></td>
            <td><span class="description-text">
                    {{$medical_referrer->Signature}}
                </span>
            </td>
            <td><p>Contact Number:</p></td>
            <td><span class="description-text">
                    {{$medical_referrer->Focal_Person_Number}}
            </span>
            </td>
        </tr>
        </tbody>
        </table>
            </div>
        </div>
    </div>
                 @endforeach    
                  </section>
                    <a href="{{route('interview.add')}}" class="btn btn-primary"> <span><i class="fas fa-chevron-circle-left"></i></span>Complainant/Victiam Interview Form</a>

                </div>
            </div>
        </div>
     <br /> <br />
</body>
 <!-- FOOTER -->
    <footer  class="bg-primary py-1">
       <p class="text-center py-2 text-white">Handuah &copy; 2019</p>
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
        
