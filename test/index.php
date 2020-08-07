<?php
session_start();
$server="localhost";
$user="root";
$password="";
$db ="project";
$conn = new mysqli($server,$user,$password,$db);
if($conn->connect_error){
die("connection failed:".connect_error);
}
$email = $_SESSION['email'];
if(empty($email)){
  header("Location: ../vacancies.php?page=1");
}
?>

<!DOCTYPE html>
<html lang="en" ng-app="josephquiz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CBT Exam</title>
    <!-- Bootstrap css and my own css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" 
        crossorigin="anonymous" -->
         <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body><br>
   <div class="container">
       <?php
       $no = $_SESSION['$_GET[id3]'];
       $select = "SELECT * FROM application WHERE email = '$email' AND job_id = '$no'";
       $res = $conn->query($select);
       while($row = $res->fetch_assoc()){
         echo "<div class='position: absolute;'>";
           echo "<h5>Name: ".$row['firstname']." ".$row['lastname']."</h5>";
           echo "<h5>Job: ".$row['job_name']."</h5>";
           echo "<h5>Email: ".$email."</h5>";
         echo "</div>";

         echo "<div style='position: absolute; right: 30px; top: 60px; border: 3px solid #FFC107; border-radius: 50%; padding: 3px'><img src='../uploads/$row[passport]' height='80' width='80' style='border-radius: 50%;'></div>";
       }
       ?>
     <h2 style="position: absolute; right: 30px; top: 0;" id="timer">Time</h2><br><br>
   </div>

    <div class="container">
        <div ng-controller="listCtrl as list" ng-hide="list.quizMetrics.quizActive || list.quizMetrics.resultsActive">
           <h2>INSTRUCTIONS</h2>
           <ul>
            <li>Read the questions very well before answering it</li>
            <li>Don't leave any question unanswered</li>
            <li>The blue color means answered question</li>
            <li>The red color means unanswered questions</li>
            <li>Confirm your answer before submitting</li>
           </ul><br><br>
        <center>
                <button class="btn btn-warning pull-center"
                    ng-click="list.activateQuiz()" id="start">
                    <strong><h4>Start Test</h4></strong>
                </button>
            </center>
            <!-- row to contain the list of turtles -->
            <div class="row">
             
                                <div class="col-xs-12 top-buffer">
                                	
                              
                
                </div>
            </div>
        </div><!-- List Controller -->

		
        <div ng-controller="quizCtrl as quiz" ng-show="quiz.quizMetrics.quizActive">
              <div class="row">
                <div class="col-xs-8"><br>
                    <h2>Progress:</h2>
                    <div class="btn-toolbar">
                        
                        <button class="btn"
                            ng-repeat="question in quiz.dataService.quizQuestions"
                            ng-class="{'btn-info': question.selected !== null, 'btn-danger': question.selected === null}" 
                            ng-click="quiz.setActiveQuestion($index)">
	                        
                            <span class="fa"
                                ng-class="{'fa-pencil': question.selected !== null, 'fa fa-pencil': question.selected === null}"></span>
                        </button>
                    </div>
                </div>

                <div class="col-xs-4"><br>
                    <div class="row">
                        <h4>Legend:</h4>
                        <div class="col-sm-4">
                            <button class="btn btn-warning">
                                <span class="fa fa-pencil"></span>
                            </button>
                            <p>Answered</p>
                        </div>
                        <div class="col-sm-4">
                            <button class="btn btn-danger">
                                <span class="fa fa-question"></span>
                            </button>
                            <p>Unanswered</p>
                        </div>
                    </div>
                </div>
            </div><!-- progress area -->
            <br><br>
            <div class="row">
                <div class="alert alert-danger"
                    ng-show="quiz.error">
                    Error! You have not answered all of the questions!
                    <button class="close" ng-click="quiz.error = false">&times</button>
                </div>
                <h3>Question:&nbsp;&nbsp;&nbsp;&nbsp;</h3>
                <div class="well well-sm" ng-hide="quiz.finalise">
                    <div class="row">
                        <div class="col-xs-12">
                         
                            <h4>{{quiz.activeQuestion+1 + ". " + quiz.dataService.quizQuestions[quiz.activeQuestion].text}}</h4>
                           
                            <div class="row"
                                ng-if="quiz.dataService.quizQuestions[quiz.activeQuestion].type === 'text'">
                                <div class="col-sm-6" ng-repeat="answer in quiz.dataService.quizQuestions[quiz.activeQuestion].possibilities">
                                    <h4 class="answer"
                                        ng-class="{'bg-info': $index === quiz.dataService.quizQuestions[quiz.activeQuestion].selected}"
                                        ng-click="quiz.selectAnswer($index)">
                                        {{answer.answer}}
                                    </h4>
                                </div>
                            </div>
		                  
                            <div class="row"
                                ng-if="quiz.dataService.quizQuestions[quiz.activeQuestion].type === 'image'">
                               
                                <div class="col-sm-6" ng-repeat="answer in quiz.dataService.quizQuestions[quiz.activeQuestion].possibilities">
                                    <div class="image-answer"
                                        ng-class="{'image-selected': $index === quiz.dataService.quizQuestions[quiz.activeQuestion].selected}"
                                        ng-click="quiz.selectAnswer($index)">
                                        <img ng-src="{{answer.answer}}">
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <!-- ng-click will call the questionAnswered method on the controller -->
                    <button class="btn btn-warning" ng-click="quiz.questionAnswered()">Continue</button>
                </div>

				
                <div class="well well-sm" ng-show="quiz.finalise">
                    <div class="row">
                        <div class="col-xs-12">
                            <h3>Are you sure you want to submit your answers?</h3>
	                            <button class="btn btn-success" ng-click="quiz.finaliseAnswers()">Yes</button>
	                            <button class="btn btn-danger" ng-click="quiz.finalise = false">No</button>
                        </div>
                    </div>
                </div>

                
            </div><!-- question row -->
        </div><!-- quiz controller -->

		
        <div ng-controller="resultsCtrl as results" ng-show="results.quizMetrics.resultsActive">
              <div class="row">
               <div class="col-xs-8">
                   <h2>Results:</h2>
                   <div class="btn-toolbar">
                    	
                       <button class="btn"
                           ng-repeat="question in results.dataService.quizQuestions"
                           ng-class="{'btn-success': question.correct, 'btn-danger': !question.correct}"
                           ng-click="results.setActiveQuestion($index)">
                           
                            <span class="fa"
                                ng-class="{'fa-pencil': question.correct, 'fa-pencil': !question.correct}"></span>
                       </button>
                   </div>
               </div>
               <div class="col-xs-4">
                   <div class="row">
                       <h4>Legend:</h4>
                       <div class="col-sm-4">
                           <button class="btn btn-success">
                               <span class="fa fa-pencil"></span>
                           </button>
                           <p>Correct</p>
                       </div>
                       <div class="col-sm-4">
                           <button class="btn btn-danger">
                               <span class="fa fa-pencil"></span>
                           </button>
                           <p>Incorrect</p>
                       </div>
                   </div>
               </div>
           </div><!-- row -->

			<!-- display the score and percentage to the user -->
           <div class="row" style="display: none;">            
               <div class="col-xs-12 top-buffer">                
                    <h2>You Scored {{results.quizMetrics.numCorrect}} / {{results.dataService.quizQuestions.length}}</h2>
                      <h2><strong>{{results.calculatePerc() | number:2}}%</strong></h2><br><br>
               </div>
           </div><br><br>
          <?php
                $no = $_SESSION['$_GET[id3]'];
                $select = "SELECT * FROM application WHERE email = '$email' AND job_id = '$no'";
                $res = $conn->query($select);
                while($row = $res->fetch_assoc()){
                  $fullName = $row['firstname']." ".$row['lastname'];
                  $job_name = $row['job_name'];
                  echo "<form id='frm'>";
                    echo "<input type='text' name='name' id='name' value='$fullName' style='display: none'>";
                    echo "<input type='text' name='job' id='job' value='$job_name' style='display: none'>";
                    echo "<input type='text' name='score' id='score' value='{{results.calculatePerc() | number:2}}%' style='display: none'>";
                    echo "<button class='btn btn-primary btn-lg' type='button' id='click'>Submit Answer</button>&nbsp;&nbsp;&nbsp;";
                    echo "<button class='btn btn-danger btn-lg' type='submit'  id='click2'> Logout</button>";
                  echo "</form>"; 
                }
          ?>

           <!-- <div class="row">
               <h3>Questions:</h3>
               <div class="well well-sm">
                   <div class="row">
                       <div class="col-xs-12">
		                    
                           <h4>{{results.activeQuestion+1 +". "+results.dataService.quizQuestions[results.activeQuestion].text}}</h4>
                           <div class="row"
                               ng-if="results.dataService.quizQuestions[results.activeQuestion].type === 'text'">
                               <-- ng-repeat being utilised again ->
                               <div class="col-sm-6" ng-repeat="answer in results.dataService.quizQuestions[results.activeQuestion].possibilities">
                                   <h4 class="answer"
                                       ng-class="results.getAnswerClass($index)">
                                       {{answer.answer}}
                                       <p class="pull-right"
                                            ng-show="$index !== results.quizMetrics.correctAnswers[results.activeQuestion] && $index === results.dataService.quizQuestions[results.activeQuestion].selected">Your Answer</p>
                                       <p class="pull-right"
                                            ng-show="$index === results.quizMetrics.correctAnswers[results.activeQuestion]">Correct Answer</p>
                                   </h4>
                               </div>
                           </div><!- row -->

							<!-- more ng-if ->
                           <div class="row"
                               ng-if="results.dataService.quizQuestions[results.activeQuestion].type === 'image'">
                               <!- more ng-repeat ->
                               <div class="col-sm-6" ng-repeat="answer in results.dataService.quizQuestions[results.activeQuestion].possibilities">
                               		<!- ng-class and ng-src ->
                                   <div class="image-answer"
                                       ng-class="results.getAnswerClass($index)">
                                       <img ng-src="{{answer.answer}}">
                                   </div>
                               </div>
                           </div>


                       </div>
                   </div>
               </div>
               <button class="btn btn-primary btn-lg" ng-click="results.reset()">Go Back To Facts</button>
           </div> -->
        </div>



    </div>

    <!-- third party js -->
    <script src="js/angular.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <!-- Our application scripts -->
    <script src="js/app.js"></script>
    <script src="js/controllers/list.js"></script>
    <script src="js/controllers/quiz.js"></script>
    <script src="js/controllers/results.js"></script>
    <script src="js/factories/quizMetrics.js"></script>
    <script src="js/factories/dataservice.js"></script>
    <script>
     	$(function(){
        	var counter = 0;
        	var timeLeft = 63;
        	$("#start").click(function(){
        		$("#timer").html(convertSeconds(timeLeft - counter));
          		function timeIt(){
            		counter++;
            		$("#timer").html(convertSeconds(timeLeft - counter));
            		if(counter == timeLeft){
              			clearInterval(a);
              			alert("Time Up");
              			window.location.assign("../vacancies.php?page=1");
            		}
          		}

          		function convertSeconds(s) {
            		var min = Math.floor(s / 60);
            		var sec = Math.floor(s % 60);
            		if(min == '0'){
            			min = '00';
            		} else if(min == '1'){
              			min = '01';
            		}  else if(min == '2'){
              			min = '02';
            		}  else if(min == '3'){
              			min = '03';
            		}  else if(min == '4'){
              			min = '04';
            		}  else if(min == '5'){
              			min = '05';
            		}  else if(min == '6'){
              			min = '06';
            		}  else if(min == '7'){
              			min = '07';
            		}  else if(min == '8'){
              			min = '08';
            		}  else if(min == '9'){
              			min = '09';
            		}

            		if(sec == '0'){
              			sec = '00';
            		} else if(sec == '1'){
              			sec = '01';
            		}  else if(sec == '2'){
              			sec = '02';
            		}  else if(sec == '3'){
              			sec = '03';
            		}  else if(sec == '4'){
              			sec = '04';
            		}  else if(sec == '5'){
              			sec = '05';
            		}  else if(sec == '6'){
              			sec = '06';
            		}  else if(sec == '7'){
              			sec = '07';
            		}  else if(sec == '8'){
              			sec = '08';
            		}  else if(sec == '9'){
              			sec = '09';
            		}

            		return min + ':' + sec;
          		}
           		var a = setInterval(timeIt, 1000);
       	 	});
          $("#click").click(function(){
            $.ajax({
              url: "insert.php",
              method: "post",
              data: $("#frm").serialize(),
              success:function(d){
                alert(d);
              }              
            });
          });

          $("#click2").click(function(){
            window.location.assign("../vacancies.php?page=1");
          });
      });  
    </script>

</body>
</html>
