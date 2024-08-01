<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php tutorial h yo sa </title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
.container{
    max-width:80%;
    background-color: red;
    margin: auto;
    padding: 23px;;
}
</style>
<body>
    <div class="container">
        <h1>Chalo Pdhte h PHp, Maja Ayga! </h1>
        <p>chlo aage dekhte h , kya seen h balko ka</p>
        <?php

        $age=7;

        if($age>18){
            echo"you can elgible for hn hn boht tej ho rhe ho ";
        }
        
        else if ($age==7){
            echo"na na munna balak h abhi kyoki tu abhi 7 saal ka h";
        } 
        else{
            echo" bache ho abhi";
        }

        //arays in php
        echo"<br>";
       // echo"chlo arrays dekhte h, jese ki: ";
        $languages =array("pyhton","c++","java","html","NODEJS");
        //ECHO $languages[2];
        //echo"<br>";
       // echo"dekte h kitni language likhi hui h ";
       // ECHO count($languages);

       //LOOPS IN PHP
       $a=0;
       while ($a <= 10) {
        echo"<br>the value of a is:";
        echo $a;
        $a++;
       }

       //iterating arrays in php using while loop
       $a=0;
       while ($a < count($languages)) {
        echo"<br>the value of a fromWHILE loop is:";
        echo $languages[$a];
        $a++;
       }


       //iterating arrays in php using do while loop ,iski phli itration jrur exuxute hoti chahe andar ka ruk jaye
       $a=20;
       do {
        echo"<br>the value of a from DO WHILE LOOP is:";
        echo $a;
        $a++;
       }
       while ($a < 10);


       //for loop, updATION COND DENE KI jrurat nhi h toh a++ nhi likha
      for ($a=0; $a < 10; $a++) { 
        echo"<br>the value of a from the FOR LOOP is:";
        echo $a;
      }
 
      //FOR EACH LOOP M.IMP
      foreach ($languages as $value) {
        echo"<br>the value from the FOR  EACH LOOP is:";
        echo $value;
      }

      //FUNCTION ek esa code h joh repetaidly run krwana chahte h program k andar, or koi value return krta h excute ho kr .
       function print5(){
        echo "<br>FIVE";
       }
       print5();
       print5();
       print5();
       print5();

       function print_number($number)
       {
        echo "<br>your number is ";
        echo $number;
       }
       print_number(45);
       print_number(4567);
       print_number(876);
        ?>
    </div>
    
</body>
</html>