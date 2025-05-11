<?php
    $name1="";
    $phone_number1= "";
    $name2="";
    $phone_number2= "";

while(true){
    echo "\n=============== Project Menu===============\n";
    echo "1. Add contacts\n";
    echo "2. view contacts\n";
    echo "3. exit\n";

    echo "Enter your choose\n";
    $choose=fgets(STDIN);

    if($choose==1){
        if($name1 =="" && $phone_number1 == ""){
            echo "Enter your Name1 for contact 1\n";
            $name1=fgets(STDIN);
            echo "Enter your Phone Number1 for contact 1\n";
            $phone_number1=fgets(STDIN);
        }elseif($name2 == "" && $phone_number2 == ""){
            echo "Enter your Name2 for contact 2\n";
            $name2=fgets(STDIN);
            echo "Enter your Phone Number2 for contact 2\n";
            $phone_number2=fgets(STDIN);
        }else{
            echo "Two contacts already add";
        }
    }elseif($choose== 2){
        echo "================= Show  Contacts =============\n";
        if($name1 != "" && $phone_number1 != ""){
            echo "Contact one name is $name1  and number is  $phone_number1";
        }
        if($name2 != "" && $phone_number2 != ""){
           echo "Contact Two name is $name2  and number is  $phone_number2";
        }
        if($name1 == "" && $name2== ""){
            echo "no Contacts found";
        }

    }elseif($choose== 3){
        echo "you choose $choose";
        break;
    }else{
        echo "Invalid number";
    }

}

?>