 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP bikku</title>
 </head>
 <body>
    <div class="container">
        This is my first php website from bikku

        <?php
        //constraints
        define('PI',3.14);


        echo"<br>";
        echo "<h1> Khamma Ghani sa </h1>";
            echo "  Hello world this is done by bikku using php";
            //secrete algotrithm yha rkh skte h bina kisse pta lage

            $variable =3;
            $variable2 = 4;
            echo"variable";
            echo"variable2";
            Echo $variable+$variable2;
            echo "<h2> Toh chaliye shur krte h  </h2>";
            //operators in php

            //Arthmatical operator
           
            echo"the value of variable + variable2 is ";
            
            echo $variable + $variable2;

            //assignment

            $newVar = $variable+1;
            echo"<br>";
            echo"the value of new variable is ";
            echo $newVar;

            //comparison
            echo"<br>";
            echo " the value of 1==4 is ";
            echo var_dump(1==4);
            echo"<br>";
            echo " the value of 1!==4 is ";
            echo var_dump(1!=4);
            echo"<br>";
            echo " the value of 1<=4 is ";
            echo var_dump(1<=4);
            echo"<br>";
            echo " the value of 1>=4 is ";
            echo var_dump(1>=4);

            //increment/decrement
          echo"<br>";
          echo $variable++;
          echo"<br>";
          echo $variable--;
          echo"<br>";
          echo ++$variable;
          echo"<br>";
          echo --$variable;

            //logical 
           // and (&&)
           // or (||)
           // xor
           echo"<br>";
           $myvar= (true) and (true);
           echo var_dump($myvar);
            

        ?>
        <?php 
        // primary Data Types in php
        // 1. string
        // 2. integer
        // 3. float
        // 4. boolean
        // 5. array
        // 6. object
        echo "<br> DATA TYPES <br>";
        $var = "this is an string";
        echo var_dump($var);
        echo "<br>";

        $var =69.11;
        echo var_dump($var);
        echo "<br>";

        $var =69;
        echo var_dump($var);
        echo "<br>";

        $var =true;
        echo var_dump($var);
        echo "<br>";

        echo PI;
        echo "<br>";
        ?>


         

        <?php 
        echo"<br>";
        echo "Boht boht thanku ";
        echo"<br>";
        echo "Apka sa !";
        ?>
        

    </div>
 </body>
 </html>