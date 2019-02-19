<?php
phpinfo();
?>
<input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

pattern="\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]\b"



<script type="text/javascript">
function checkEmail() {

    var email = document.getElementById('txtEmail');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
    email.focus;
    return false;
 }
}</script>

<label for="emailid">Email</label>
<input type="email" id="emailid" name="emailid" placeholder="someone@something.com" onblur="checkEmail()" required>











<script type="text/javascript">
function confirmPass() {
    var pass = document.getElementById("password").value
    var confPass = document.getElementById("password1").value
    if(password != password1) {
        alert('Wrong confirm password !');
    }
}
</script>

<label for="password">Password</label>
<input type="password" id="password" name="password" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}"
title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

<label for="password"> Confirm Password</label>
<input type="password" id="password1" name="password1" placeholder="Confirm Password"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}"
title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
 onblur="confirmPass()"required>















 body {font-family: 'Gothic A1', sans-serif;}

 #backBlur {
     background-color:rgba(0, 0, 0, 0.3);
     position:absolute;
     width:100%;
     height:100%;
     top:0px;
     left:0px;
 }

 #alertBox {
     position:relative;
     width:300px;
     min-height:100px;
     margin-top:50px;
     background-color: white ;
     background-repeat:no-repeat;
     background-position:200px 30px;
     font-family: 'Gothic A1', sans-serif;

 }

 #backBlur > #alertBox {
     position:fixed;
 }

 #alertBox h1 {
     margin:0;
     font:bold 0.9em verdana,arial;

     background-color:#3073BB;
     color:#FFF;
     border-bottom:1px solid #000;
     padding:2px 0 2px 5px;
 }

 #alertBox p {
     font:0.7em verdana,arial;
     height:50px;
     padding-left:5px;
     margin-left:55px;
     font-family: 'Gothic A1', sans-serif;
 }

 #alertBox #closeBtn {
     display:block;
     position:relative;
     margin:5px auto;
     padding:7px;
     border:0 none;
     width:70px;
     font:0.7em verdana,arial;
     text-transform:uppercase;
     text-align:center;
     color:#FFF;
     background-color:#357EBD;
     border-radius: 3px;
     text-decoration:none;
     font-family: 'Gothic A1', sans-serif;
 }


 </style>
   </head>
   <body>
     <link rel="icon" href="images/Favicon-1.png" type="image/gif" sizes="16x16">
     <img src="images/back1.jpg" alt="Loading..." width="100%" height="750px">
     <nav>
     <a href="index.html"name="1">Home</a>
     <a href="work.html" name="2">Work</a>
     <a href="downloads.html" name="3">Downloads</a>
     <a href="contact.html" name="4">Contact</a>
     <a href="signin.html" name="5">SignIn</a>
     </nav>
 <div class="container">
   <form action="registerUser.php">
     <div class="text">
     <h3>SignUp Form </h3>

     <label for="fname">First Name</label>
     <input type="text" id="fname" name="firstname" placeholder="Your Name.." required>
     <label for="lname">Last Name</label>
     <input type="text" id="lname" name="lastname" placeholder="Your Last Name.." required>
     <label for="country">Country</label>
     <select id="country" name="country" required>
       <option value="" ></option>
       <option value="australia">Australia</option>
       <option value="canada">Canada</option>
       <option value="usa">USA</option>
     </select>


     <script type="text/javascript">
          var alertText = "Please Enter a valid email address !";
          var alertTitle = "Invalid email address";
          var alertButtontext = "Ok";
          window.alert = function(alertText){
            createAlert(alertText);
          }
         function createAlert(text) {
                 d = document;
                 // if(d.getElementById("backBlur")) return;

                 mObj = d.getElementsByTagName("body")[0].appendChild(d.createElement("div"));
                 mObj.id = "backBlur";
                 // mObj.style.height = d.documentElement.scrollHeight + "px";

                 alertObj = mObj.appendChild(d.createElement("div"));
                 alertObj.id = "alertBox";
                 if(d.all && !window.opera) alertObj.style.top = document.documentElement.scrollTop + "px";
                 alertObj.style.left = (d.documentElement.scrollWidth - alertObj.offsetWidth)/2 + "px";
                 alertObj.style.visiblity="visible";

                 h1 = alertObj.appendChild(d.createElement("h1"));
                 h1.appendChild(d.createTextNode(alertTitle));

                 msg = alertObj.appendChild(d.createElement("p"));
                 //msg.appendChild(d.createTextNode(text));
                 msg.innerHTML = text;

                 btn = alertObj.appendChild(d.createElement("a"));
                 btn.id = "closeBtn";
                 btn.appendChild(d.createTextNode(alertButtontext));
                 btn.href = "#";
                 btn.focus();
                 btn.onclick = function() { removeCustomAlert();return false; }

                 alertObj.style.display = "block";

             }

             function removeCustomAlert() {
                 document.getElementsByTagName("body")[0].removeChild(document.getElementById("backBlur"));
             }


         function validateEmail(){
           var email = document.getElementById('emailid');
           var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
           if(!filter.test(email.value)){
             alert("Please Enter a valid email address!");
           }
         }

     // function checkEmail() {
     //     // var email = document.getElementById('emailid');
     //     // var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
     //     // if (!filter.test(email.value)) {
     //     //alert('Please provide a valid email address');
     //     var alertText = "Please enter a valid email address !";
     //     var alertTitle = "Invalid email address";
     //     var alertButtontext = "Ok";
     //     window.alert = function(alertText){
     //       createAlert(alertText);
     //     }
     //
     //     email.focus;
     //
     //     return false;
     //  //}
     // }</script>

     <label for="emailid">Email</label>
     <input type="text" id="emailid" name="emailid" placeholder="someone@something.com" onblur="validateEmail()"required>

     <!-- <label for="emailid">Email</label>
     <input type="email" id="emailid" name="emailid" placeholder="someone@something.com"
     pattern="\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}\b" required> -->

     <!-- <label for="emailid">Email</label>
     <input type="email" id="emailid" name="emailid" placeholder="someone@something.com" required> -->

     <!-- <label for="password">Password</label
     <input type="password"  id="password" name="password" placeholder="Enter Password" required> -->

     <!-- <label for="password">Password</label>
     <input type="password" id="password" name="password" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}"
     title="Must contain at least one number and one uppercase and lowercase letter, and at least 5 or more characters" required> -->
     <!-- <script type="text/javascript">
     function confirmPass() {
         var pass = document.getElementById("password").value
         var confPass = document.getElementById("password1").value
         if(password != password1) {
             alert('Wrong password !');
         }
     }
     </script> -->



     <!-- // if(d.all && !window.opera) alertObj.style.top = document.documentElement.scrollTop + "px";
     // alertObj.style.left = (d.documentElement.scrollWidth - alertObj.offsetWidth)/2 + "px";
     // alertObj.style.visiblity="visible"; -->




     <div class="education">
       <ul>
       <li><b>Texas A&M University- Kingsville Expected Graduation- May 2019<b><br>
         Master of Science- Computer Science GPA- 3.9</li>
       <li><b>Sant Gadge Baba Amravati University Graduation- May 2016 <b><br>
         Bachelor of Engineering - Computer Science GPA- 3.7</li>
     </ul>
     </div>
