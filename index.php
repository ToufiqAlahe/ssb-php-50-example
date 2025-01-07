<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  </head>
  <body>
    <div class="container">
      <?php
        /*example-1*/
        echo "<h1>"."My first PHP script!"."</h1>"."<br>";
        echo "<hr>";

        /*example-2*/
        print "<h1>"."My first PHP script with 'print' function."."</h1>"."<br>";
        print "<hr>";

        /*example-3*/
        echo "<h3>"."My PHP version is"."</h3>".phpversion();
        echo "<hr>";
        
        /*example-4*/
        $name= "Rahat";
        echo "<h2>"."His name is ".$name."</h2>";
        echo "<hr>";

        /*example-5*/
        $xi=$yi=$zi="FRUIT";
        echo "<h3>".$xi." ".$yi." ".$zi."</h3>";
        echo "<hr>";

        /*example-6*/       
        $Name = "Tuhin";
        function callingname(){
          //local
          global $Name;
          echo "<h2>"."His nick name is"." ".$Name."</h2>";
        }   
        callingname();
        echo "<hr>";

        /*example-7*/ 
        function myTest() {
          static $x = 0;
          echo $x;
          $x++;
        }
        myTest();
        echo "<br>";
        myTest();
        echo "<br>";
        myTest();
        echo "<hr>";

        /*example-8*/       
        $x1 = "Karim";
        echo $x1."<br>";
        var_dump($x1);
        echo "<hr>";

        /*example-9*/
        $x2 = 2795;
        echo $x2."<br>";
        var_dump($x2);
        echo "<hr>";

        /*example-10*/
        $x3 = 99.349;
        echo $x3."<br>";
        var_dump($x3);
        echo "<hr>";

        /*example-11*/
        $x4= null;
        echo $x4."<br>";
        var_dump($x4);
        echo "<hr>";

        /*example-12*/        
        $x5 = true;
        echo $x5."<br>";
        var_dump($x5);
        echo "<hr>";

        /*example-13*/
        $data1 = array("Rakin","Torun","Karim", 800, 9.09, true);
        echo $data1[2]."<br>";
        var_dump($data1);
        echo "<hr>";

        /*example-14*/        
        $result = array('rakin' =>3.84 , 'tuhin' =>3.57,'karim'=>3.75);
        echo $result['karim']."<br>";
        var_dump($result);
        echo "<hr>";

        /*example-15*/
        $xk=5;
        $xk=(string)$xk;
        echo "After changing the data type,it is ";
        var_dump($xk);
        echo "<hr>";
        
        /*example-16*/ 
        $string1 = "John";
        echo "Hello $string1";
        echo "<hr>";

        /*example-17*/ 
        $string2 = "Johneshberg";
        echo 'Hello $string2';
        echo "<hr>";

        /*example-18*/ 
        $string3 = "toufiq";
        echo strtoupper($string3);
        echo "<hr>";

        /*example-19*/ 
        $string4 = "<H3> MTAJ </H3>";
        echo strtolower($string4);
        echo "<hr>";

        /*example-20*/ 
        $string5 = "Hello World";
        echo strrev($string5);
        echo "<hr>";

        /*example-21*/
        $name1=" My world ";
        echo "<input value='" . $name1 . "'>";
        echo "<br>";
        echo "<input value='" . trim($name1) . "'>"; 
        echo "<hr>";

        /*example-22*/ 
        $string6 = "Hello World";
        echo substr($string6,3,2);
        echo "<hr>";

        /*example-23*/ 
        $string7 = "<h4> Khalid bin Walid is an \"Undefeated\" warrior of his time. </h4>";
        echo $string7;
        echo "<hr>";

        /*example-24*/ 
        $string8 = "<h4> Do you know what it means?\nYes,I know. </h4>";
        echo $string8;
        echo "<hr>";

        /*example-25*/ 
        $num10= 1.9e453;
        var_dump($num10);
        echo "<hr>";

        /*example-26*/ 
        $num11=acos(3);
        var_dump($num11);
        echo "<hr>";

        /*example-27*/        
        $number1 = 98;
        $number2 = 99;
        $result1 = $number1+$number2;
        echo $result1;
        echo "<hr>";

        /*example-28*/
        $number3= 96;
        $number4= 96;
        if ($number3==$number4) {
          echo "equal";
        }
        echo "<br>"."<hr>";

        /*example-29*/
        $number5= 76;
        $number6= 54;
        if ($number5==$number6) {
          echo "equal";
        }else {
          echo "not equal";
        }
        echo "<br>"."<hr>";

        /*example-30*/
        $value1= 98;
        $value2= 98;
        if ($value1===$value2) {
          echo "identical";
        }else{
          echo "not identical";
        }
        echo "<br>"."<hr>";

        /*example-31*/
        $value1= "98";
        $value2= 98;
        if ($value1===$value2) {
          echo "identical";
        }else{
          echo "not identical";
        }
        echo "<br>"."<hr>";

        /*example-32*/        
        $m=90;
        $n=76;
        if ($m==90 and $n==76) {
          echo "It is true.";
        }
        echo "<br>"."<hr>";

        /*example-33*/
        $m=91;
        $n=76;
        if ($m==90 or $n==76) {
          echo "It is false.";
        }
        echo "<br>"."<hr>";

        /*example-34*/
        $favcolor="green";
        switch ($favcolor) {
          case "red":
            echo "My favcolor is red.";
            break;
          case "green":
            echo "My favcolor is green.";
              break;  
          case "blue":
            echo "My favcolor is blue.";
            break;
          default:
            echo "My favcolor is yellow.";
        }
        echo "<br>";

      ?>  
    </div>
     <hr>

    <div class="container">
      <?php 

        /*example-35*/       
       function TextMessage(){
        echo "<h3>"."Php echo function example."."</h3>"."<br>";
        print "<h3>"."Php print function example."."</h3>"."<hr>";
       }
       TextMessage();
      
        /*example-36*/       
       $data1 = "Can you hold it?";
       echo $data1."<br>";
       echo chunk_split($data1,4,"...")."<hr>";

       /*example-37*/
       $data2 = "Can you bring it here?";
       echo $data2."<br>";
       print_r(explode(" ",$data2));
       echo "<hr>";
 
        /*example-38*/       
       $pass1 = " HelloWorld";
       echo $pass1."<br>";
       echo md5($pass1)."<hr>";

        /*example-39*/
       $pass2 = " HelloWorld";
       echo $pass2."<br>";
       echo sha1($pass2)."<hr>";

        /*example-40*/
       $data3 = "Can you hold it?";
       echo $data3."<br>";
       echo str_repeat($data3,5)."<hr>";

       /*example-41*/ 
       $data4 = "Hold it now.";
       echo $data4."<br>";
       echo str_replace("Hold","Catch",$data4)."<hr>";

       /*example-42*/
       $data5 = "Hold it now.";
       echo $data5."<br>";
       echo str_shuffle($data5)."<hr>";

       /*example-43*/       
       $data6 = "Hold it now.";
       echo $data6."<br>";
       print_r(str_split($data6));
       echo "<hr>";

       /*example-44*/ 
       $data7 = "Count my word now.";
       echo $data7."<br>";
       echo str_word_count($data7)."<hr>";

       /*example-45*/ 
       $data8 = "Count my word now.";
       echo $data8."<br>";
       echo strpos($data8,"word")."<hr>";

       /*example-46*/ 
       $data9 = "Count my word now.";
       echo $data9."<br>";
       echo strlen($data9)."<hr>";
       
       /*example-47*/ 
       $num12=7689.36157;// Cast string to int
       echo $num12."<br>";
       $int_cast=(int)$num12;
       echo $int_cast;
       echo "<hr>";

      /*example-48*/
      echo "Which is the lowest number from these: 33,-80,90,22.5,99?"."<br>";
      echo(min(33,-80,90,22.5,99));
      echo "<hr>";

      /*example-49*/
      echo "Which is the highest number from these: 33,80,90,22.5,99?"."<br>";
      echo(max(33,80,90,22.5,99));
      echo "<hr>";

      /*example-50*/
      $aus= -7.62;
      echo "Which is the absolute value of -7.62?"."<br>";
      echo(abs($aus));
      echo "<hr>";

      ?>
    </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>