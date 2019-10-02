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
         @foreach($complainant_victim_interviews as $complainant_victim_interview)               
        <table class="table table-hover my-5">
        <tr>
            <td><p>Case Number:</p></td>
            <td><span class="description-text">
                {{$complainant_victim_interview->Case_Number}}
                </span>
            </td>
            <td><p>Date:</p></td>
            <td><span class="description-text">
                {{$complainant_victim_interview->Date}}
                </span>
            </td>
            <td><p>Complainant\Victim Name:</p></td>
            <td><span class="description-text">
                {{$complainant_victim_interview->Complainant_Victim_Name}}
                </span>
            </td>
            <td><p>Age:</p></td>
            <td><span class="description-text">
                {{$complainant_victim_interview->Age}}
                </span>
            </td>
            <td><p>Sex:</p></td>
            <td><span class="description-text">
                {{$complainant_victim_interview->Sex}}
                </span>
            </td>
            <td><p>Tribe:</p></td>
            <td><span class="description-text">
                {{$complainant_victim_interview->Tribe}}
                </span>
            </td>
            <td><p>Address:</p></td>
            <td><span class="description-text">  
                {{$complainant_victim_interview->Address}}
                </span>
            </td>
            <td><p>Date of Birth:</p></td>
            <td><span class="description-text">  
                {{$complainant_victim_interview->DOB}}
                </span>
            </td>
            <td><p>Place of Birth:</p></td>
            <td><span class="description-text">  
                {{$complainant_victim_interview->Place_Birth}}
                </span>
            </td>
            <td><p>Nationality:</p></td>
            <td><span class="description-text">  
                {{$medical_referrer->Nationality}}
                </span>
            </td>
            <td><p>Height:</p></td>
            <td><span class="description-text">
                {{$complainant_victim_interview->Height}}
                </span>
            </td>
            <td><p>Weight:</p></td>
            <td><span class="description-text">
                {{$complainant_victim_interview->Weight}}
                </span>
            </td>
            <td><p>Complexion:</p></td>
            <td><span class="description-text">  
                {{$complainant_victim_interview->Complexion}}
                </span>
            </td>
            </td>
            <td><p>Physique:</p></td>
            <td><span class="description-text">  
                {{$complainant_victim_interview->Physique}}
                </span>
            </td>
            <td><p>Contact Number:</p></td>
            <td><span class="description-text">
                    {{$complainant_victim_interview->Contact_Number}}
                </span>
            </td>
            <td><p>Father's Name:</p></td>
            <td><span class="description-text">
                    {{$complainant_victim_interview->Father_Name}}
                </span>
            </td>
            <td><p>Father's Address:</p></td>
            <td><span class="description-text">
                    {{$complainant_victim_interview->Father_Address}}
                </span>
            </td>
            <td><p>Mohter's Name:</p></td>
            <td><span class="description-text">
                    {{$complainant_victim_interview->Mother_Name}}
                </span>
            </td>
            <td><p>Mother's Address:</p></td>
            <td><span class="description-text">
                    {{$complainant_victim_interview->Mother_Name}}
                </span>
            </td>
            <td><p>Date/Time of Interview:</p></td>
            <td><span class="description-text">
                    {{$complainant_victim_interview->Interview}}
                </span>
            </td>
            <td><p>Place of Occurrence:</p></td>
            <td><span class="description-text">
                    {{$complainant_victim_interview->Occurrence}}
                </span>
            </td>
            <td><p>Date/Time Occurrence :</p></td>
            <td><span class="description-text">
                    {{$complainant_victim_interview->Occurrence_Date}}
            </span>
            </td>
            
        <tr>
        <td><p><h4 class="h4 text-center my-2">Free Narrative</h4><hr></p></td>
            <td><span class="description-text">
                    {{$complainant_victim_interview->Free_Narrative}}<br />
                </span>
            </td>
            <td><p>Investigator:</p></td>
            <td><span class="description-text">
                    {{$complainant_victim_interview->Investigator}}
                 </span>
            </td>
            <td><p>Complainant/Victim:</p></td>
            <td><span class="description-text">
                    {{$complainant_victim_interview->Victim_Sign}}
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
        