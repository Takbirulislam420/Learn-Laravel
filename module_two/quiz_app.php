<?php 
$score=0;

echo "=== Welcome to our quiz app =====\n";


/// Question one Start
echo "which is true ?\n";
echo "a. A,b,c,d is alphabets\n";
echo "b. a,b,c,d is latter \n";
echo "c. a,b,c,d is sentence\n";
$Answer1=trim(fgets(STDIN));
if($Answer1 == "a"){
    $score++;

}else{
    echo" The correct answer is option [a]\n";
}

/// Question one End
/// Question Two Start
echo "which is true,5+5= ?\n";
echo "a. 10\n";
echo "b. 15 \n";
echo "c. 78\n";
$Answer2=trim(fgets(STDIN));
if($Answer2 == "a"){
    $score++;

}else{
    echo" The correct answer is option [a]\n";
}

/// Question Two End
/// Question Three Start
echo "which is true, 10+10= ?\n";
echo "a.20\n";
echo "b.40\n";
echo "c.50\n";
$Answer3=trim(fgets(STDIN));
if($Answer3 == "a"){
    $score++;

}else{
    echo" The correct answer is option [a]\n";
}

/// Question Three End

echo "You got $score score out of 3";



?>