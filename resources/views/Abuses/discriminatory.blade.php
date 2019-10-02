<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale = 1">
    <title>Discriminatory Abuse</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- <link rel="stylesheet" href="css/bootstrap-image-upload.css"> -->
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/fontawesome-all.js"></script>
</head>
<body>
     <!-- NAVBAR  -->
     <nav class="navbar navbar-expand-lg navbar-light bg-primary py-3">
        <div class="container">
                <a class="navbar-brand text-white" href="index.html">Reporting GBV Cases</a>
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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  background-image: url("img/pinwheel_boy.jpg");
  min-height: 380px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}

/* The container */
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 15px 15px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>
<body>

<form id="regForm" action="{{route('abuses.save')}}" method="post">
  <div class="form-group">
      {{ csrf_field() }}
  <h1>Discriminatory Abuse:</h1> <br />
  <!-- One "tab" for each step in the form: -->
  <div class="tab"><h2>Types of Discriminatory abuse:</h2><br />
                            <tr>
                                <h5>
                                    <label class="container">Unequal treatment based on age, disability, gender reassignment
                                        <input type="checkbox">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            <tr>
                                <h5>
                                    <label class="container">Marriage and civil partnership
                                        <input type="checkbox">
                                      <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            <tr>
                               <h5>
                                    <label class="container">Pregnancy and maternity 
                                        <input type="checkbox">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            <tr>
                                 <h5>
                                    <label class="container">Race, religion and beleuf, sex or sexual orientation 
                                        <input type="checkbox">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                    <label class="container">Verbal abuse, derogatory remarks of inappropriate use of language 
                                        <input type="checkbox">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                   <label class="container">Denying access to communication aids, singer or lip-reader 
                                    <input type="checkbox">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                    <label class="container">Harassment or deliberate exclusion 
                                        <input type="checkbox">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                    <label class="container">Denying basic rights to healthcare, education, employment and criminal justice
                                        <input type="checkbox">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                    <label class="container">Substandard service provision
                                        <input type="checkbox">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
  </div>

  <div class="tab"><h2>Possible indicator of Discriminatory abuse:</h2><br />
                            <tr>
                                <h5>
                                <label class="container">The person appears withdrawn and isolate
                                    <input type="checkbox">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            <tr>
                                <h5>
                                    <label class="container">Expressions of anger, frustration, fear or anxiety
                                        <input type="checkbox">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            <tr>
                               <h5>
                                    <label class="container">The support of offer does not take account of the person's individual needs in terms of a protected characterstic
                                        <input type="checkbox">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            
  </div>
    <div class="tab"><h2>Child identification details</h2>:
      <p><input placeholder="Child's full names" oninput="this.className = ''" name="Child_Name"></p>
      <p><input placeholder="Date of birth" oninput="this.className = ''" name="Birthdate"></p>
      <p><input placeholder="Child address" oninput="this.className = ''" name="Child_Address"></p>
      <p><input placeholder="Contact number" oninput="this.className = ''" name="Contact_Number"></p>
      <p><input placeholder="Ethnicity (ie Aboriginal, kinship group, non-English speaking)" oninput="this.className = ''" name="Ethnicity"></p>
      <p><input placeholder="Who are the parents, do they all live in the same house, are there siblings in the house?" oninput="this.className = ''" name="Parents_Names"></p>
      <p><input placeholder="Alleged perpetrator's name, age, address relationship to child and current whereabouts" oninput="this.className = ''" name="Alleged_Perpetrators_Name"></p>
      <p><input placeholder="Child curent whereabouts" oninput="this.className = ''" name="Child_Whereabouts"></p>
      <p><input placeholder="When is the next contact with the alleged perpetrator" oninput="this.className = ''" name="Next_contact"></p>
      <p><input placeholder="Are there any court orders, apprehended violence or domestic violence oreder in place" oninput="this.className = ''" name="Court_Orders"></p>
    </div>
    <div class="tab"><h2>Notifier details:</h2>
      <p><input placeholder="Your full name" oninput="this.className = ''" name="Notifier_Fullname"></p>
      <p><input placeholder="Job title" oninput="this.className = ''" name="Job_Title"></p>
      <p><input placeholder="Notifier address" oninput="this.className = ''" name="Notifier_Address"></p>
      <p><input placeholder="Notifier contact number" oninput="this.className = ''" name="Notifier_Contact"></p>
      <p><input placeholder="Your relationship to the child" oninput="this.className = ''" name="Relationship"></p>
      <p><input placeholder="Type of contact with the child" oninput="this.className = ''" name="Contact_Family"></p>
      <p><input placeholder="Are you working with the child or family, and if so, in What capacity" oninput="this.className = ''" name="Working_Child"></p>
    </div>
    <div class="tab"><h2>Consiteration:</h2>
      <p><input placeholder="Are the caregivers aware that a report is being made?" oninput="this.className = ''" name="Caregivers_Aware"></p>
      <p><input placeholder="Have you given any expectation of action to the child?" oninput="this.className = ''" name="Expection_Child"></p>
      <p><input placeholder="What action are you expecting the department to take?" oninput="this.className = ''" name="Action_Expecting"></p>
      <p><input placeholder="What action can you take?" oninput="this.className = ''" name="Action_Taken"></p>
      <p><input placeholder="What action have you already taken, what impact has that had and how has it helped?" oninput="this.className = ''" name="Impact_Made"></p>
    </div>
    <div class="tab"><h2>Details of concerns:</h2>
      <p><input placeholder="What has the child disclosed: what was his/her emotional presentation?" oninput="this.className = ''" name="Disclose"></p>
      <p><input placeholder="Who saw or heard what and when?" oninput="this.className = ''" name="Who"></p>
      <p><input placeholder="Size and location of injuries, if any, with descriptions" oninput="this.className = ''" name="Injuries"></p>
      <p><input placeholder="Has the child been seen by a Doctor? if so, provide the name and contact number." oninput="this.className = ''" name="Doctor"></p>
      <p><input placeholder="Has the matter been reported to the police?" oninput="this.className = ''" name="Police"></p>
      <p><input placeholder="Who ealse is aware of the concerns?" oninput="this.className = ''" name="Concerns"></p>
      <p><input placeholder="Are the caregivers protective?" oninput="this.className = ''" name="Caregivers_Protective"></p>
       <p><input placeholder="Describe any caregiver behaviour that is of concern, how often and how severe" oninput="this.className = ''" name="Caregiver_Behaviour"></p>
      <p><input placeholder="Describe any behaviour by the child that is of concern, how often it occurs." oninput="this.className = ''" name="Child_Behaviour"></p>
    </div>
  <div class="tab"><h2>Fimaly history:</h2>
                            <tr>
                                <h5>
                                    <label class="container">Domestic violence 
                                        <input type="checkbox">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            <tr>
                               <h5>
                                    <label class="container">Drug and alcohol use or abuse
                                        <input type="checkbox">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            <tr>
                                <h5>
                                    <label class="container">Violence to people outside the family 
                                        <input type="checkbox">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                    <label class="container">Relevant health factors
                                        <input type="checkbox">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                    <label class="container">Extended family or other support natworks
                                        <input type="checkbox">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                <h5>
                                    <label class="container">Child care arrangements 
                                        <input type="checkbox">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                    <label class="container">Nature of involvement with any agencies 
                                        <input type="checkbox">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                            <tr>
                                <h5>
                                    <label class="container">Mental health issues/presentations and details of diagnosis if known
                                        <input type="checkbox">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                              <tr>
                                <h5>
                                    <label class="container">Physical or intellectual disability
                                        <input type="checkbox">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
  </div>
      <div class="tab"><h2>Concludsion:</h2>
      <p><input placeholder="What prompted you to report" oninput="this.className = ''" name="What_Prompted"></p>
      <p><input placeholder="Are the caregivers aware a report is being made?" oninput="this.className = ''" name="Report_Made"></p>
      <p><input placeholder="Is the child aware a report has been made? What was their response?" oninput="this.className = ''" name="Child_Aware"></p>
    </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</div>
</form>

    <!-- FOOTER -->
    <footer  class="bg-primary py-2">
       <p class="text-center py-2 text-white">Handuah &copy; 2019</p>
    </footer>

</body>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-upload-image.js"></script>

<!-- script for toggle sidebar button -->
<script>

    // $(document).ready(function () {

    //     $('#sidebarCollapse').on('click', function () {
    //         $('#sidebar').toggleClass('active');
    //         $('#content').toggleClass('active');
    //      });

    // });

var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

</body>
</html>
