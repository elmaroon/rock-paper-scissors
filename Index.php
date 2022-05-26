<?php
//Mohamed ELMANOUNI
//The user can call the function <Play> by selecting his choice from the 3 options.
//Already tested in xampp server on my side and it's working

Play('paper');



function Play($user_throw) 
{

$Selection[0] = "rock";
$Selection[1] = "paper";
$Selection[2] = "scissor";
$random_number = rand(0,2);
$computer_throw =  $Selection[$random_number];
echo "\n\n\n";
echo "The user select $user_throw";
echo "\n\n\n\n";

echo "....-> and the Computer select $computer_throw";
echo "\n\n\n";

if ($user_throw == 'rock') {
            if ($computer_throw == 'rock')
                echo "<h1>No Winner!</h1>";
            if ($computer_throw == 'paper')
                echo "<h1>User lose.</h1>";
            if ($computer_throw == 'scissor')
                echo "<h1>User Win.</h1>";
        }
            
        if ($user_throw == 'paper') {
            if ($computer_throw == 'paper')
                echo "<h1>No Winner!</h1>";
            if ($computer_throw == 'rock')
                echo "<h1>User Win.</h1>";
            if ($computer_throw == 'scissor')
                echo "<h1>User lose.</h1>";
        }
            
        if ($user_throw == 'scissor') {
            if ($computer_throw == 'scissor')
                echo "<h1>No Winner!</h1>";
            if ($computer_throw == 'rock')
                echo "<h1>User lose.</h1>";
            if ($computer_throw == 'paper')
                echo "<h1>User Win.</h1>";
        }


}

?>
