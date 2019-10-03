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
<!--             
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="edit.html" class="btn btn-info btn-lg">Add New Product</a>
                    </li>
                            
                </div> -->
        </div>
      </nav>
      <!-- NAVABAR END -->

   <section id="Abuse-list-home">
                        <div class="row mb-5">
                            <div class="container">
                                <div class="card-deck">
                 @foreach($abuses as $abuse)               
                    <table class="table table-hover my-5">
                        <tbody>
                            <tr>
                                <td><p>Types of Abuse:</p></td>
                                <td><span class="checkmark" name="Types_Abuse">
                                    {{$abuse->Types_Abuse}}
                                </span></td>
                            </tr>
                            <tr>
                                <td><p>Possible Indicators:</p></td>
                                <td><span class="checkmark" name="Possible_Indicators">
                                      {{$abuse->Possible_Indicators}}
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td><p>Child Identification Details:</p></td>
                                <td><span class="description-text">
                                        {{$abuse->Child_Name}}
                                        {{$abuse->Birthdate}}
                                        {{$abuse->Child_Address}}
                                        {{$abuse->Contact_Number}}
                                        {{$abuse->Ethnicity}}
                                        {{$abuse->Parents_Names}}
                                        {{$abuse->Alleged_Perpetrators_Name}}
                                        {{$abuse->Child_Whereabouts}}
                                        {{$abuse->Next_contact}}
                                        {{$abuse->Court_Orders}}
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td><p>Notifier Details:</p></td>
                                <td><span class="description-text">
                                        {{$abuse->Notifier_Fullname}}
                                        {{$abuse->Job_Title}}
                                        {{$abuse->Notifier_Address}}
                                        {{$abuse->Notifier_Contact}}
                                        {{$abuse->Relationship}}
                                        {{$abuse->Contact_Family}}
                                        {{$abuse->Working_Child}}
                                     </span>
                                </td>
                            </tr>
                            <tr>
                                <td><p>Consiteration:</p></td>
                                <td><span class="description-text">
                                        {{$abuse->Caregivers_Aware}}
                                        {{$abuse->Expection_Child}}
                                        {{$abuse->Action_Expecting}}
                                        {{$abuse->Action_Taken}}
                                        {{$abuse->Impact_Made}}
                                    </span>
                                </td>
                            </tr>
                             <tr>
                                <td><p>Details of Concerns</p></td>
                                <td><span class="description-text">
                                        {{$abuse->Disclose}}
                                        {{$abuse->Who}}
                                        {{$abuse->Injuries}}
                                        {{$abuse->Doctor}}
                                        {{$abuse->Police}}
                                        {{$abuse->Concerns}}
                                        {{$abuse->Caregivers_Protective}}
                                        {{$abuse->Caregiver_Behaviour}}
                                        {{$abuse->Child_Behaviour}}
                                    </span>
                                </td>
                            </tr>
                             <tr>
                                <td><p>Family Historys:</p></td>
                                <td><span class="checkmark" name="Family_Historys">
                                        {{$abuse->Family_Historys}}
                                    </span>
                                </td>
                            </tr>
                             <tr>
                                <td><p>Concludsion:</p></td>
                                <td><span class="description-text">
                                        {{$abuse->What_Prompted}}
                                        {{$abuse->Report_Made}}
                                        {{$abuse->Child_Aware}}
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
                    <a href="{{route('referrer.add')}}" class="btn btn-primary"> <span><i class="fas fa-chevron-circle-left"></i></span>Medical Refer Form</a>

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
        
