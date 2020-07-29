
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Quiz</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,700,700i,800,900" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,600,700,800,900" rel="stylesheet">
		<link href="fonts/font-awesome.min.css" rel="stylesheet"/>
		<link href="fonts/etline.css" rel="stylesheet"/>
		<link href="fonts/themify-icons.css" rel="stylesheet"/>
		<link href="css/plugins.css" rel="stylesheet"/>
		<link href="css/lightbox.min.css" rel="stylesheet"/>
		<link href="css/responsive.css" rel="stylesheet"/>
        <link href="css/style.css" rel="stylesheet"/>
        <link rel="stylesheet" href="inc/TimeCircles.css" />
        <style>
            .item h2 {
        text-align:center;
        position: absolute;
        line-height: 125px;
        width: 100%;
    }
    
    svg {
        transform: rotate(-90deg);
    }
    
    .circle_animation {
      stroke-dasharray: 440; /* this value is the pixel circumference of the circle */
      stroke-dashoffset: 440;
      transition: all 1s linear;
    }
            </style>
</head>
<?php 

include 'connect.php';
include 'check.php';

$sid =  $_SESSION['student_email'];


$get = mysqli_query($conn,"SELECT * FROM student_table WHERE email = '$sid' ");

$row =  mysqli_fetch_assoc($get);

$firstname = $row['firstname'];
$lastname  = $row['lastname'];
$middlename = $row['middlename'];
$email= $row['email'];
$phone = $row['phone'];
$mother_maiden_name = $row['mother_maiden_name'];
$favoritesport = $row['favoritesport'];
$petname = $row['petname'];
$favoritefood = $row['favoritefood'];
$state = $row['state'];
$lga = $row['lga'];
$dob = $row['dob'];
$town = $row['town'];



?>
<body id ="myvideo">
<section id="home" class="main_banner v5 banner_bg">
<div class="display_table">
					<div class="display_table_cell">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<div class="banner_content text-left mt-30">
                                    <input id ="id1" type = "hidden" value = "<?php echo $firstname;?>"/>
    <input id ="id2" type = "hidden" value = "<?php echo $lastname;?>"/>
    <input id ="id3" type = "hidden" value = "<?php echo $middlename;?>"/>
    <input id ="id4" type = "hidden" value = "<?php echo $email;?>"/>
    <input id ="id5" type = "hidden" value = "<?php echo $phone;?>"/>
    <input id ="id6" type = "hidden" value = "<?php echo $mother_maiden_name;?>"/>
    <input id ="id7" type = "hidden" value = "<?php echo $favoritesport;?>"/>
    <input id ="id8" type = "hidden" value = "<?php echo $petname;?>"/>
    <input id ="id9" type = "hidden" value = "<?php echo $favoritefood;?>"/>
    <input id ="id10" type = "hidden" value = "<?php echo $state;?>"/>
    <input id ="id11" type = "hidden" value = "<?php echo $lga;?>"/>
    <input id ="id12" type = "hidden" value = "<?php echo $dob;?>"/>
    <input id ="id13" type = "hidden" value = "<?php echo $town;?>"/>
    
                                    <div class="grid">
                                    <div id="quiz"> 
                                       
                                    <div align="center">
                                    
            <h2 align = "center">Intelligent Agent Assesment</h2>
    <div id="CountDownTimer" data-timer="50"  style="max-width:200px; width: 100%; height: 150px;"></div>
    
        </div>
        
            <hr style="margin-bottom: 10px">
           
                <table >
                <p  style = "font-size:20px;" id="question"></p>
                    <tr>
               <td> <button id="btn0"><span id="choice0"></span></button> </td>
               <td> <button id="btn1"><span id="choice1"></span></button></td>
              </tr>
              <tr>
              <td><button id="btn2"><span id="choice2"></span></button> </td>
              <td><button id="btn3"><span id="choice3"></span></button> </td>
                    </tr>
</table>

   
            

            <hr style="margin-top: 0px">
            <footer>
                <p id="progress">Question x of y</p>

            </footer>
            
        <br>
    </div>
    
										
										
									</div>
								</div>
							</div> <!--- END ROW -->
						</div> <!--- END CONTAINER -->
					</div>
				</div>
    
</section>

<script type="text/javascript" src="inc/jquery.min.js"></script>
     <script type="text/javascript" src="inc/TimeCircles.js"></script>
<script>

$("#DateCountdown").TimeCircles();
           $("#CountDownTimer").TimeCircles({ time: { Days: { show: false }, Hours: { show: false },Minutes:{show:false} }});
           $("#PageOpenTimer").TimeCircles();

                setInterval(function(){
               var remaining_second = $("#CountDownTimer").TimeCircles().getTime();
               if(remaining_second <= 0)
               {
                  $("#CountDownTimer").TimeCircles().stop();
                  alert('Your examination time is completed.\nYou are Redirecting to Result page.');
                    showScores();
                  //window.location.assign("result_count.php");
               }
           }, 1000);



</script>
+

<script type="text/javascript">



    
function Quiz(questions) {
    this.score = 0;
    this.questions = questions;
    this.questionIndex = 0;
}

Quiz.prototype.getQuestionIndex = function() {
    return this.questions[this.questionIndex];
}

Quiz.prototype.guess = function(answer) {
    if(this.getQuestionIndex().isCorrectAnswer(answer)) {
        this.score++;
    }

    this.questionIndex++;
}

Quiz.prototype.isEnded = function() {
    return this.questionIndex === this.questions.length;
}


function Question(text, choices, answer) {
    this.text = text;
    this.choices = choices;
    this.answer = answer;
}

Question.prototype.isCorrectAnswer = function(choice) {
    return this.answer === choice;
}


function populate() {
    if(quiz.isEnded()) {
        showScores();
    }
    else {
        // show question
        var element = document.getElementById("question");
        element.innerHTML = quiz.getQuestionIndex().text;

        // show options
        var choices = quiz.getQuestionIndex().choices;
        for(var i = 0; i < choices.length; i++) {
            var element = document.getElementById("choice" + i);
            element.innerHTML = choices[i];
            guess("btn" + i, choices[i]);
        }

        showProgress();
    }
};

function guess(id, guess) {
    var button = document.getElementById(id);
    button.onclick = function() {
        quiz.guess(guess);
        populate();
    }
};


function showProgress() {
    var currentQuestionNumber = quiz.questionIndex + 1;
    var element = document.getElementById("progress");
    element.innerHTML = "Question " + currentQuestionNumber + " of " + quiz.questions.length;
};

function showScores() {
    $("#CountDownTimer").TimeCircles().start();
    var gameOverHTML = "<h1>Result</h1>";
    var  time = "h1>Time</h1>";
    var t = document.getElementById("CountDownTimer").innerHTML;
    var numb = t.match(/\d/g);
    numb = numb.join("");
    var numb = numb.substring(numb.length-2);
    var x = 50  -  parseInt(numb);
    var s = quiz.score;

    gameOverHTML += "<h2 id='score'> Your scores: " + quiz.score + "</h2>";

   
    window.location.href = "new.php?q="+s+"&time="+x;

    gameOverHTML += "<h2 id='time'> Your time: " + x  + "</h2>";
    var element = document.getElementById("quiz");
    element.innerHTML = gameOverHTML;
};
var q1 = document.getElementById("id1").value;
var q2 = document.getElementById("id2").value;
var q3 = document.getElementById("id3").value;
var q4 = document.getElementById("id4").value;
var q5 = document.getElementById("id5").value;
var q6 = document.getElementById("id6").value;
var q7 = document.getElementById("id7").value;
var q8 = document.getElementById("id8").value;
var q9 = document.getElementById("id9").value;
var q10 = document.getElementById("id10").value;
var q11 = document.getElementById("id11").value;
var q12 = document.getElementById("id12").value;
var q13 = document.getElementById("id13").value;


// create questions here
var questions = [
    new Question("What is Your First name ?", ["Janet", "David","John", q1], q1),
    new Question("What is Your Favorite food ?", [q9, "Salad","Fufu", "Rice + Beans"], q9),
    new Question("What is Your Middle Name ?", ["Bisola", "Ahmadu",q3, "Ify"], q3),
    new Question("What is Your Phone number ?", ["09033476621", q5,"08056789034", "07043674210"], q5),
    new Question("What is Your Mother's maiden name ?", ["Chisom", "Chika","Adeola", q6], q6),
    new Question("What is Your Favorite Sport ?", [q7, "Cricket","Baseball", "Swimming"], q7),
    new Question("What is the name of your Local Government ?", ["Alimosho", "Ewekoro",q11, "Aboh Mbaise"], q11),
    new Question("Choose your correct Email Address ?", ["flexy3@gmail.com", q4,"cp2sure@hotmail.com", "gr8mind@yahoo.co.uk"], q4),
    new Question("What is your Petname ?", ["Floxxy", q8,"Gold", "Gentle"], q8),
    new Question("What is Your date of birth ?", ["1995-02-10", "1990-05-08","1985-12-15", q12], q12),
];

// create quiz
var quiz = new Quiz(questions);

// display quiz
populate();

</script>

</body>
</html>
