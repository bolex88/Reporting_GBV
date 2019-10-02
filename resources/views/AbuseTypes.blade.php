<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale = 1">
    <title>Physical Abuse</title>
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
  
  background-image: url("img/EveryChild.png");
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
    <h1>Physical Abuse:</h1> <br />
    <!-- One "tab" for each step in the form: -->
    <div class="tab1" ><h2>Types of Physical abuse:</h2><br />
                              <tr>
                                  <h5>
                                      <label class="container">Assault, hitting, slapping, pushing, kicking, hair-pulling, biting, punishing
                                          <input type="checkbox" name="Types_Abuse">
                                            <span class="checkmark"></span>
                                      </label>
                                  </h5>
                              </tr>
                              <tr>
                                  <h5>
                                      <label class="container">Routh handling 
                                          <input type="checkbox" name="Types_Abuse">
                                        <span class="checkmark"></span>
                                      </label>
                                  </h5>
                              </tr>
                              <tr>
                                 <h5>
                                      <label class="container">Scalding and burning 
                                          <input type="checkbox" name="Types_Abuse">
                                            <span class="checkmark"></span>
                                      </label>
                                  </h5>
                              </tr>
                              <tr>
                                   <h5>
                                      <label class="container">Physical punishments 
                                          <input type="checkbox" name="Types_Abuse">
                                            <span class="checkmark"></span>
                                      </label>
                                  </h5>
                              </tr> 
                               <tr>
                                   <h5>
                                      <label class="container">Inappropriate or unlawful use of restraint 
                                          <input type="checkbox" name="Types_Abuse">
                                            <span class="checkmark"></span>
                                      </label>
                                  </h5>
                              </tr> 
                               <tr>
                                   <h5>
                                     <label class="container">Involuntary isolation or confinement 
                                      <input type="checkbox" name="Types_Abuse">
                                            <span class="checkmark"></span>
                                      </label>
                                  </h5>
                              </tr> 
                               <tr>
                                   <h5>
                                      <label class="container">Misuse of medication (e.g, over-sedation) 
                                          <input type="checkbox" name="Types_Abuse">
                                            <span class="checkmark"></span>
                                      </label>
                                  </h5>
                              </tr> 
                               <tr>
                                   <h5>
                                      <label class="container">Forecible feeding or withholding food 
                                          <input type="checkbox" name="Types_Abuse">
                                            <span class="checkmark"></span>
                                      </label>
                                  </h5>
                              </tr> 
                               <tr>
                                   <h5>
                                      <label class="container">Unauthorised restraint, restricting movement (e.g, tying someone to a chair) 
                                          <input type="checkbox" name="Types_Abuse">
                                            <span class="checkmark"></span>
                                      </label>
                                  </h5>
                              </tr> 
    </div>
    <div class="tab2" ><h2>Possible indicator of Physical abuse:</h2><br />
                              <tr>
                                  <h5>
                                  <label class="container">No explanation for injuries or inconsistency with the account what happen 
                                      <input type="checkbox" name="Possible_Indicators">
                                            <span class="checkmark"></span>
                                      </label>
                                  </h5>
                              </tr>
                              <tr>
                                  <h5>
                                      <label class="container">Injuries are inconsistent with the person's lifestyle 
                                          <input type="checkbox" name="Possible_Indicators">
                                            <span class="checkmark"></span>
                                      </label>
                                  </h5>
                              </tr>
                              <tr>
                                 <h5>
                                      <label class="container">Brusing, cuts, welts, burns and/or marks on the body or loss of hair in clumps
                                          <input type="checkbox" name="Possible_Indicators">
                                            <span class="checkmark"></span>
                                      </label>
                                  </h5>
                              </tr>
                              <tr>
                                  <h5>
                                      <label class="container">Frequent injuries 
                                          <input type="checkbox" name="Possible_Indicators">
                                            <span class="checkmark"></span>
                                      </label>
                                  </h5>
                              </tr> 
                               <tr>
                                   <h5>
                                      <label class="container">Unexplained falls
                                          <input type="checkbox" name="Possible_Indicators">
                                            <span class="checkmark"></span>
                                      </label>
                                  </h5>
                              </tr> 
                               <tr>
                                   <h5>
                                      <label class="container">Subdued or changed behaviour in the presence of a particular person
                                          <input type="checkbox" name="Possible_Indicators">
                                            <span class="checkmark"></span>
                                      </label>
                                  </h5>
                              </tr> 
                               <tr>
                                  <h5>
                                      <label class="container">Signs of mainutrition 
                                          <input type="checkbox" name="Possible_Indicators">
                                            <span class="checkmark"></span>
                                      </label>
                                  </h5>
                              </tr> 
                               <tr>
                                   <h5>
                                      <label class="container">Failure to seek medical treatment or frequent changes of GP
                                          <input type="checkbox" name="Possible_Indicators">
                                            <span class="checkmark"></span>
                                      </label>
                                  </h5>
                              </tr> 
                              <tr>
                                  <h5>
                                      <label class="container">Self-harming 
                                          <input type="checkbox" name="Possible_Indicators">
                                            <span class="checkmark"></span>
                                      </label>
                                  </h5>
                              </tr>                       
    </div>

    <h1>Domestic Violence or Abuse:</h1> <br />
  <!-- One "tab" for each step in the form: -->
  <div class="tab3"><h2>Types of Domestic violence or abuse:</h2> <br />
                            <tr>
                                <h5>
                                    <label class="container">Psychological
                                        <input type="checkbox" name="Types_Abuse">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            <tr>
                                <h5>
                                    <label class="container">Physical
                                        <input type="checkbox" name="Types_Abuse">
                                      <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            <tr>
                               <h5>
                                    <label class="container">Sexual
                                        <input type="checkbox" name="Types_Abuse">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            <tr>
                                 <h5>
                                    <label class="container">Financial
                                        <input type="checkbox" name="Types_Abuse">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                    <label class="container">Emotional 
                                        <input type="checkbox" name="Types_Abuse">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                   <label class="container">Honour-based violence 
                                    <input type="checkbox" name="Types_Abuse">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                    <label class="container">Female genital mutilation
                                        <input type="checkbox" name="Types_Abuse">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                    <label class="container">Forced marriage
                                        <input type="checkbox" name="Types_Abuse">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                            
  </div>

  <div class="tab4"><h2>Possible indicator of Domestic violence or abuse:</h2> <br />
                            <tr>
                                <h5>
                                <label class="container">Low self-esteem
                                    <input type="checkbox" name="Possible_Indicators">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            <tr>
                                <h5>
                                    <label class="container">Feeling that the abuse is their fault when it's not
                                        <input type="checkbox" name="Possible_Indicators">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            <tr>
                               <h5>
                                    <label class="container">Physical evidence of violence such as brushing, cuts, broken bones
                                        <input type="checkbox" name="Possible_Indicators">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            <tr>
                                <h5>
                                    <label class="container">Verbal abuse and humiliation in front of others 
                                        <input type="checkbox" name="Possible_Indicators">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                    <label class="container">Fear of home or property
                                        <input type="checkbox" name="Possible_Indicators">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                    <label class="container">SIsolation - not seeing friends and family
                                        <input type="checkbox" name="Possible_Indicators">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                <h5>
                                    <label class="container">Limited access to money
                                        <input type="checkbox" name="Possible_Indicators">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>                     
  </div>

  <h1>Organisational or Instutional Abuse:</h1> <br />
  <!-- One "tab" for each step in the form: -->
  <div class="tab5"><h2>Types of Organisational or instutional abuse:</h2><br />
                            <tr>
                                <h5>
                                    <label class="container">Discouraging visit or the involvement of relatives or friends
                                        <input type="checkbox" name="Types_Abuse">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            <tr>
                                <h5>
                                    <label class="container">Run-down or overcroded establishment
                                        <input type="checkbox" name="Types_Abuse">
                                      <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            <tr>
                               <h5>
                                    <label class="container">Lack of leadership and supervision
                                        <input type="checkbox" name="Types_Abuse">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            <tr>
                                 <h5>
                                    <label class="container">Lack of respect for dignity and privacy 
                                        <input type="checkbox" name="Types_Abuse">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                    <label class="container">Not taking account of individuals' cultural, religious or ethnic needs 
                                        <input type="checkbox" name="Types_Abuse">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                   <label class="container">Failure to respond to abuse appropriately 
                                    <input type="checkbox" name="Types_Abuse">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                    <label class="container">Interference with personal correspondence or communication
                                        <input type="checkbox" name="Types_Abuse">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                    <label class="container">Failure to respond to complaints
                                        <input type="checkbox" name="Types_Abuse">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                    <label class="container">Not offering choise or promiting independence
                                        <input type="checkbox" name="Types_Abuse">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
  </div>

  <div class="tab6"><h2>Possible indicator of Organisational or Instutional abuse:</h2><br />
                            <tr>
                                <h5>
                                <label class="container">Lack of flexibility and choise for people using the service
                                    <input type="checkbox" name="Possible_Indicators">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            <tr>
                                <h5>
                                    <label class="container">Inadequate staffing levels
                                        <input type="checkbox" name="Possible_Indicators">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            <tr>
                               <h5>
                                    <label class="container">Poor standards of care
                                        <input type="checkbox" name="Possible_Indicators">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            <tr>
                                <h5>
                                    <label class="container">Kack of adequate procedures
                                        <input type="checkbox" name="Possible_Indicators">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                    <label class="container">Absence of visitors
                                        <input type="checkbox" name="Possible_Indicators">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                    <label class="container">Few social, recreational and educational activities
                                        <input type="checkbox" name="Possible_Indicators">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                <h5>
                                    <label class="container">Public discussion of personla matters
                                        <input type="checkbox" name="Possible_Indicators">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                    <label class="container">Absence of individual care plan
                                        <input type="checkbox" name="Possible_Indicators">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                            <tr>
                                <h5>
                                    <label class="container">Lack of management overview and support 
                                        <input type="checkbox" name="Possible_Indicators">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                            
  </div>

  <h1>Phsychological or Emotional Abuse:</h1> <br />
  <!-- One "tab" for each step in the form: -->
  <div class="tab7"><h2>Types of Psychological or emotional abuse:</h2><br />
                            <tr>
                                <h5>
                                    <label class="container">Enforced social isolation - preventing someone accessing services, educational and social opportunity and seeing friends 
                                        <input type="checkbox" name="Types_Abuse">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            <tr>
                                <h5>
                                    <label class="container">Remiving mobility or communication aids or intentinally leaving someone unattended when they need assistance 
                                        <input type="checkbox" name="Types_Abuse">
                                      <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            <tr>
                               <h5>
                                    <label class="container">Preventing someone from meeting their religious and cultural needs 
                                        <input type="checkbox" name="Types_Abuse">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            <tr>
                                 <h5>
                                    <label class="container">Preventing the expression of choice and opinion
                                        <input type="checkbox" name="Types_Abuse">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                    <label class="container">Preventing stimulation, meaningful occuption or activities
                                        <input type="checkbox" name="Types_Abuse">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                   <label class="container">Intimidation, coercion, harrassment, use of threats, humiliation, bullying, swearing or verbal abuse
                                    <input type="checkbox" name="Types_Abuse">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                    <label class="container">Addressing a person in a patronising of infantilising way
                                        <input type="checkbox" name="Types_Abuse">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                    <label class="container">Threats of harm or abandonment
                                        <input type="checkbox" name="Types_Abuse">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                    <label class="container">Cyber bullying
                                        <input type="checkbox" name="Types_Abuse">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
  </div>

  <div class="tab8"><h2>Possible indicator of Psychological or emotional abuse:</h2><br/>
                            <tr>
                                <h5>
                                <label class="container">An air of silence when a particular person is present
                                    <input type="checkbox" name="Possible_Indicators">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            <tr>
                                <h5>
                                    <label class="container">Withdrawal or change in the psychological state of the person
                                        <input type="checkbox" name="Possible_Indicators">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            <tr>
                               <h5>
                                    <label class="container">Insomnia
                                        <input type="checkbox" name="Possible_Indicators">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            <tr>
                                <h5>
                                    <label class="container">Low self-esteem
                                        <input type="checkbox" name="Possible_Indicators">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                    <label class="container">Uncooperative and appetite, weight loss/gain
                                        <input type="checkbox" name="Possible_Indicators">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                    <label class="container">Signs of distress: tearfulness, anger
                                        <input type="checkbox" name="Possible_Indicators">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                <h5>
                                    <label class="container">Apparent false claims, by someone involved with the person, to attract unnecessary treatment 
                                        <input type="checkbox" name="Possible_Indicators">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                            
  </div>

  <h1>Discriminatory Abuse:</h1> <br />
  <!-- One "tab" for each step in the form: -->
  <div class="tab9"><h2>Types of Discriminatory abuse:</h2><br />
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

  <div class="tab10"><h2>Possible indicator of Discriminatory abuse:</h2><br />
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

    <h1>Neglect and Acts of Omission:</h1> <br />
  <!-- One "tab" for each step in the form: -->
  <div class="tab11"><h2>Types of Neglect or acts of omission:</h2> <br />
                            <tr>
                                <h5>
                                <label class="container">Failure to provide or allow access to food, shelter, clothing, personal or medical care 
                                    <input type="checkbox">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            <tr>
                                <h5>
                                    <label class="container">Refusal of access to visitors 
                                        <input type="checkbox">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            <tr>
                               <h5>
                                    <label class="container">Ignoring or isolating the person 
                                        <input type="checkbox">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            <tr>
                                 <h5>
                                    <label class="container">Preventing the person from making their own decision 
                                        <input type="checkbox">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                    <label class="container">Preventing access to glasses, hearing aids, dentures, etc type="checkbox">
                                        <input type="checkbox">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                               <tr>
                                 <h5>
                                    <label class="container">Not taking account of educational, social and recreational needs 
                                        <input type="checkbox">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
  </div>

  <div class="tab12"><h2>Possible indicator of Neglect or acts of omission:</h2> <br />
                            <tr>
                                <h5>
                                <label class="container">Very poor personal hygiene
                                    <input type="checkbox">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            <tr>
                                <h5>
                                    <label class="container">Unkempt appearance
                                        <input type="checkbox">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            <tr>
                               <h5>
                                    <label class="container">Lack of essential food, clothing or shelter
                                        <input type="checkbox">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            <tr>
                                <h5>
                                    <label class="container">Malnutrition and/or dehydration 
                                        <input type="checkbox">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                    <label class="container">Living in squalid or unsanitary conditions
                                        <input type="checkbox">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                    <label class="container">SNeglecting household maintenance
                                        <input type="checkbox">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                <h5>
                                    <label class="container">Holarding
                                        <input type="checkbox">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                    <label class="container">Collecting a large number of animals in inappropriate condition
                                        <input type="checkbox">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                            <tr>
                                <h5>
                                    <label class="container">Non-compliance with health or care services
                                        <input type="checkbox">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                            <tr>
                                <h5>
                                    <label class="container">Inability or unwillingness to take medication or treat illness or injury
                                        <input type="checkbox">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
  </div>

  <h1>Sexual Abuse:</h1> <br />
  <!-- One "tab" for each step in the form: -->
  <div class="tab13"><h2>Types of Sexual abuse:</h2> <br />
                            <tr>
                                <h5>
                                <label class="container">Rape, attempted rape, or sexual assault  
                                    <input type="checkbox" name="Types_Abuse">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            <tr>
                                <h5>
                                    <label class="container">Inappropriate touch any where  
                                        <input type="checkbox" name="Types_Abuse">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            <tr>
                               <h5>
                                    <label class="container">Non-consensual mastrubation of either or both person  
                                        <input type="checkbox" name="Types_Abuse">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            <tr>
                                <h5>
                                    <label class="container">Non-consensual sexual penetration or attempted penetration of the (vagina, anus or mouth)  
                                        <input type="checkbox" name="Types_Abuse">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                    <label class="container">Any sexual activity that the person lacks the capacity to concent to  
                                        <input type="checkbox" name="Types_Abuse">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                    <label class="container">Inappropriate looking, sexual teasting or innuendo or sexual harassment 
                                        <input type="checkbox" name="Types_Abuse">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                    <label class="container">Sexual photography or forced use of pornography or witnessing of sexual acts  
                                        <input type="checkbox" name="Types_Abuse">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                    <label class="container">Indecent exposure  
                                        <input type="checkbox" name="Types_Abuse">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
  </div>

  <div class="tab14"><h2>Possible indicator of Sexual abuse:</h2> <br />
   <tr>
                                <h5>
                                <label class="container">Bruising, particularly to the thights, buttocks and upper arms and marks on the neck  
                                    <input type="checkbox" name="Possible_Indicators">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            <tr>
                                <h5>
                                    <label class="container">Torn, stained or bloody underclothing 
                                        <input type="checkbox" name="Possible_Indicators">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            <tr>
                               <h5>
                                    <label class="container">Bleeding, pain or itching in the genital area
                                        <input type="checkbox" name="Possible_Indicators">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr>
                            <tr>
                                <h5>
                                    <label class="container">Foreign bodies in genital or rectal openings 
                                        <input type="checkbox" name="Possible_Indicators">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                    <label class="container">Infections, unexplained genital discharge, or sexual transmitted diseases
                                        <input type="checkbox" name="Possible_Indicators">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                    <label class="container">Pregnancy in a woman who is unable to consent to sexual intercourse
                                        <input type="checkbox" name="Possible_Indicators">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                <h5>
                                    <label class="container">The uncharacterstic use of explicit sexual language or singnificant changes in sexual behaviour or attitude  
                                        <input type="checkbox" name="Possible_Indicators">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                             <tr>
                                 <h5>
                                    <label class="container">Incontinence not related to any medical diagnosis 
                                        <input type="checkbox" name="Possible_Indicators">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                            <tr>
                                <h5>
                                    <label class="container">Self-harming 
                                        <input type="checkbox" name="Possible_Indicators">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                            <tr>
                                <h5>
                                    <label class="container">Poor concentration, withdrawal, sleep disturbance 
                                        <input type="checkbox" name="Possible_Indicators">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                            <tr>
                                <h5>
                                    <label class="container">Excessive fear/apprehension of, or withdrawal from, relationship 
                                        <input type="checkbox" name="Possible_Indicators">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                            <tr>
                                <h5>
                                    <label class="container">Fear of receiving help with personal care 
                                        <input type="checkbox" name="Possible_Indicators">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
                            <tr>
                                <h5>
                                    <label class="container">Reluctance to be alone with a particular person  
                                        <input type="checkbox" name="Possible_Indicators">
                                          <span class="checkmark"></span>
                                    </label>
                                </h5>
                            </tr> 
  </div>
    <div class="tab15"><h2>Child identification details</h2>:
      <p><input placeholder="Child's full names" oninput="this.className = ''" name="Child_Identification_Details"></p>
      <p><input placeholder="Date of birth" oninput="this.className = ''" name="Child_Identification_Details"></p>
      <p><input placeholder="Address" oninput="this.className = ''" name="Child_Identification_Details"></p>
      <p><input placeholder="Contact number" oninput="this.className = ''" name="Child_Identification_Details"></p>
      <p><input placeholder="Ethnicity (ie Aboriginal, kinship group, non-English speaking)" oninput="this.className = ''" name="Child_Identification_Details"></p>
      <p><input placeholder="Who are the parents, do they all live in the same house, are there siblings in the house?" oninput="this.className = ''" name="Child_Identification_Details"></p>
      <p><input placeholder="Alleged perpetrator's name, age, address relationship to child and current whereabouts" oninput="this.className = ''" name="Child_Identification_Detail"></p>
      <p><input placeholder="Child curent whereabouts" oninput="this.className = ''" name="Child_Identification_Details"></p>
      <p><input placeholder="When is the next contact with the alleged perpetrator" oninput="this.className = ''" name="Child_Identification_Details"></p>
      <p><input placeholder="Are there any court orders, apprehended violence or domestic violence oreder in place" oninput="this.className = ''" name="Child_Identification_Details"></p>
    </div>
    <div class="tab16"><h2>Notifier details:</h2>
      <p><input placeholder="Your full name" oninput="this.className = ''" name="Notifier_Details"></p>
      <p><input placeholder="Job title" oninput="this.className = ''" name="Notifier_Details"></p>
      <p><input placeholder="Address" oninput="this.className = ''" name="Notifier_Details"></p>
      <p><input placeholder="Contact number" oninput="this.className = ''" name="Notifier_Details"></p>
      <p><input placeholder="Your relationship to the child" oninput="this.className = ''" name="Notifier_Details"></p>
      <p><input placeholder="Type of contact with the child" oninput="this.className = ''" name="Notifier_Details"></p>
      <p><input placeholder="Are you working with the child or family, and if so, in What capacity" oninput="this.className = ''" name="Notifier_Details"></p>
    </div>
    <div class="tab17"><h2>Consiteration:</h2>
      <p><input placeholder="Are the caregivers aware that a report is being made?" oninput="this.className = ''" name="Consiteration"></p>
      <p><input placeholder="Have you given any expectation of action to the child?" oninput="this.className = ''" name="Consiteration"></p>
      <p><input placeholder="What action are you expecting the department to take?" oninput="this.className = ''" name="Consiteration"></p>
      <p><input placeholder="What action can you take?" oninput="this.className = ''" name="Consiteration"></p>
      <p><input placeholder="What action have you already taken, what impact has that had and how has it helped?" oninput="this.className = ''" name="Consiteration"></p>
    </div>
    <div class="tab18"><h2>Details of concerns:</h2>
      <p><input placeholder="What has the child disclosed: what was his/her emotional presentation?" oninput="this.className = ''" name="Details_Concerns"></p>
      <p><input placeholder="Who saw or heard what and when?" oninput="this.className = ''" name="Details_Concerns"></p>
      <p><input placeholder="Size and location of injuries, if any, with descriptions" oninput="this.className = ''" name="Details_Concerns"></p>
      <p><input placeholder="Has the child been seen by a Doctor? if so, provide the name and contact number." oninput="this.className = ''" name="Details_Concerns"></p>
      <p><input placeholder="Has the matter been reported to the police?" oninput="this.className = ''" name="Details_Concerns"></p>
      <p><input placeholder="Who ealse is aware of the concerns?" oninput="this.className = ''" name="Details_Concerns"></p>
      <p><input placeholder="Are the caregivers protective?" oninput="this.className = ''" name="Details_Concerns"></p>
       <p><input placeholder="Describe any caregiver behaviour that is of concern, how often and how severe" oninput="this.className = ''" name="Details_Concerns"></p>
      <p><input placeholder="Describe any behaviour by the child that is of concern, how often it occurs." oninput="this.className = ''" name="Details_Concerns"></p>
    </div>
    <div class="tab19"><h2>Family history:</h2>
                              <tr>
                                  <h5>
                                      <label class="container">Domestic violence 
                                          <input type="checkbox" name="Family_Historys">
                                            <span class="checkmark"></span>
                                      </label>
                                  </h5>
                              </tr>
                              <tr>
                                 <h5>
                                      <label class="container">Drug and alcohol use or abuse
                                          <input type="checkbox" name="Family_Historys">
                                            <span class="checkmark"></span>
                                      </label>
                                  </h5>
                              </tr>
                              <tr>
                                  <h5>
                                      <label class="container">Violence to people outside the family 
                                          <input type="checkbox" name="Family_Historys">
                                            <span class="checkmark"></span>
                                      </label>
                                  </h5>
                              </tr> 
                               <tr>
                                   <h5>
                                      <label class="container">Relevant health factors
                                          <input type="checkbox" name="Family_Historys">
                                            <span class="checkmark"></span>
                                      </label>
                                  </h5>
                              </tr> 
                               <tr>
                                   <h5>
                                      <label class="container">Extended family or other support natworks
                                          <input type="checkbox" name="Family_Historys">
                                            <span class="checkmark"></span>
                                      </label>
                                  </h5>
                              </tr> 
                               <tr>
                                  <h5>
                                      <label class="container">Child care arrangements 
                                          <input type="checkbox" name="Family_Historys">
                                            <span class="checkmark"></span>
                                      </label>
                                  </h5>
                              </tr> 
                               <tr>
                                   <h5>
                                      <label class="container">Nature of involvement with any agencies 
                                          <input type="checkbox" name="Family_Historys">
                                            <span class="checkmark"></span>
                                      </label>
                                  </h5>
                              </tr> 
                              <tr>
                                  <h5>
                                      <label class="container">Mental health issues/presentations and details of diagnosis if known
                                          <input type="checkbox" name="Family_Historys">
                                            <span class="checkmark"></span>
                                      </label>
                                  </h5>
                              </tr> 
                                <tr>
                                  <h5>
                                      <label class="container">Physical or intellectual disability
                                          <input type="checkbox" name="Family_Historys">
                                            <span class="checkmark"></span>
                                      </label>
                                  </h5>
                              </tr>
    </div>
    <div class="tab20"><h2>Concludsion:</h2>
      <p><input placeholder="What prompted you to report" oninput="this.className = ''" name="Concludsion"></p>
      <p><input placeholder="Are the caregivers aware a report is being made?" oninput="this.className = ''" name="Concludsion"></p>
      <p><input placeholder="Is the child aware a report has been made? What was their response?" oninput="this.className = ''" name="Concludsion"></p>
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

//function myFunction(n) {
  // Get the checkbox
  //var checkBox = document.getElementById("myCheck");
  // Get the output text
  //var text = document.getElementById("text");

  // If the checkbox is checked, display the output text
  //if (checkBox.checked == true){
    //text.style.display = "block";
  //} else {
    //text.style.display = "none";
  //}
//}

function showTab(checkbox) {
  // This function will display the specified tab of the form...
  var checkBox = document.getElementsByClassName("tab");
  checkBox[checkbox].style.display = "block";

  //... and fix the Previous/Next buttons:
  if (checkBox.checked == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (checkbox == (checkBox.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(checkbox)
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
