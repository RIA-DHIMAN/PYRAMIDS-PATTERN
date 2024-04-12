<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .heading{
            font-family:cursive;
            text-align:center;text-decoration:underline dotted 5px;margin-top:10px;
        }
        .container{
            margin:20px;
            padding: 16px;
    font-size: 30px;
    background-color: darkgrey;
    font-family:cursive;
    color:white;
    
        }
    </style>
    <div class="heading"><h1>PYRAMID'S-PATTERN</h1></div>
    <div class="container">
    <h4>LEFT FACED STAR PYRAMID:-</h4>
         <!-- first  -->
         <?php
        $r=6;
    for( $i=0;$i<$r;$i++){
    for ( $j=0; $j<$i; $j++){
        echo"*";
    }
    echo"<br>"
    ;}
        ?>
    <!-- first-end  -->
    </div>
    <br><br>
    <div class="container">
    <h4>LEFT FACED STAR PYRAMID (downward):-</h4>
        <!-- second  -->
        <?php
    $n=5;
    for( $i=5;$i>0;$i--){
        for ( $j=$i; $j>0; $j--){
            echo"*";
        }
        echo"<br>"
    ;}
        ?>
        <!-- second-end  -->
        </div>
        <br><br>
        <div class="container">
        <h4>RIGHT FACED STAR PYRAMID:- </h4>
         <!-- third   -->
    <?php
    for ($i = 1; $i < 6; $i++)   
    {  
     for ($j = 5; $j >= $i; $j--)   
     {  
         echo "&nbsp;&nbsp;";   
     }  
     for ($k = 1; $k <= $i; $k++)  
     {  
         echo "*"; 
     }  
    echo "<br>";   
    }  
    ?>
    <!-- third-end  -->
    </div>
    <br><br>
    <div class="container">
    <h4>RIGHT FACED STAR PYRAMID (triangle):- </h4>
    <!-- fourth-start  -->

<?php
        
        $r=7;
for( $i=0;$i<$r;$i++){
    for ( $j=0; $j<$i; $j++){
        echo"*";
    }
    echo"<br>"
;}
$n=5;
    for( $i=5;$i>0;$i--){
        for ( $j=$i; $j>0; $j--){
            echo"*";
        }
        echo"<br>"
    ;}
        ?>
        <br><br>
        <!-- fourth-end  -->
        </div>
        <br><br>
        <div class="container">
        <h4> STAR PYRAMID (triangle):- </h4>
        <!-- fifth  -->
        <?php
       for($i=0;$i<=8;$i++){  
        for($k=8;$k>=$i;$k--){  
        echo "&nbsp ";  
        }  
        for($j=1;$j<=$i;$j++){  
        echo "* &nbsp";  
        }  
        echo "<br>";  
        }   
        ?>
        <!-- fifth -end  -->
        </div>
        <br><br>
        <div class="container">
         <!-- sixth  -->
         <h4> HUT OF STAR PYRAMID:-</h4>
         <?php
       for($i=0;$i<=7;$i++){  
        for($k=6;$k>=$i;$k--){  
        echo "&nbsp;&nbsp;";  
        }  
        for($j=1;$j<=$i;$j++){  
        echo "*&nbsp;&nbsp;";  
        }  
        echo "<br>";  
        }   
    for ($i=0;$i<3;$i++){
        for($j=0;$j<3;$j++){// left rectangle //
            echo "&nbsp;*";
        }
             for($j=0;$j<("2*n-7");$j++){// center space //
            echo "&nbsp;&nbsp;";
        }
        for($j=0;$j<3;$j++){ // right rectangle //
        echo "&nbsp;*";
        }
        echo "<br>";
    }
        ?>
        <!-- sixth end  -->
        </div>
        <br><br>
        <div class="container">
        <h4>DIAMOND OF STAR PYRAMID:- </h4>
        <!-- seventh  -->
        <?php
       for($i=0;$i<=5;$i++){  
        for($k=5;$k>=$i;$k--){  
        echo "&nbsp ";  
        }  
        for($j=1;$j<=$i;$j++){  
        echo "* &nbsp";  
        }  
        echo "<br>";  
        }  
        for($i=4;$i>=1;$i--){  
        for($k=5;$k>=$i;$k--){  
        echo "&nbsp; ";  
        }  
        for($j=1;$j<=$i;$j++){  
        echo "* &nbsp";  
        }  
        echo "<br>";  
        }
        ?>
        <!-- seventh end  -->
        </div>
        <br><br>
        <div class="container">
        <h4>LEFT FACED NUMBER PYRAMID:-  </h4>
        <!-- eight  -->
        <?php
$n = 1; /*Initializing starting number*/
for ($i = 0; $i < 5; $i++)
{
    for ($j = 0; $j <= $i; $j++ )
    {
        echo $n." ";
    }
    $n = $n + 1;
    echo "<br/>";
}
?>
        <!-- eight end  -->
        </div>
        <br><br>
        <div class="container">
        <h4>LEFT FACED NUMBER PYRAMID (1-15):-</h4>
        <!-- nine  -->
        <?php
$n = 1; /*Initializing starting number*/
for ($i = 0; $i < 5; $i++)
{
    for ($j = 0; $j <= $i; $j++ )
    {
        echo $n." ";
        $n = $n + 1;
    }
    echo "<br/>";
}
?>
        <!-- nine end  -->
        </div>
        <br><br>
        <div class="container">
        <h4>RIGHT FACED STAR PYRAMID:-</h4>
        <!-- ten  -->
        <?php  
for($i=5; $i>=1; $i--)  
{  
if($i%2 != 0)  
{  
for($j=5; $j>=$i; $j--)  
{  
echo "* ";  
}  
echo "<br>";  
}  
}  
for($i=2; $i<=5; $i++)  
{  
 if($i%2 != 0)  
{  
 for($j=5; $j>=$i; $j--)  
{  
echo "* ";  
}  
echo "<br>";  
}  
}  
?> 
        <!-- ten end  -->
        </div>
        <br><br>
        <div class="container">
        <h4> STAR PYRAMID (downward - triangle):-</h4>
        <!-- eleven  -->
        <?php
for($i=6;$i>=1;$i--){  
    for($k=5;$k>=$i;$k--){  
    echo "&nbsp; ";  
    }  
    for($j=1;$j<=$i;$j++){  
    echo "* &nbsp";  
    }  
    echo "<br>";  
    }
?> 

        <!-- eleven end  -->
    </div>
    <br><br>
    <div class="container">
        <h4>SQUARE STAR PYRAMID:-</h4>
        <!-- twelve  -->
        <?php
        for($i=0;$i<5;$i++){
            for($j=1;$j<9;$j++){
                echo "*";
            }
            echo "<br>";
        }
?>

        <!-- twelve end  -->
    </div>
    <br><br>
    <div class="container">
        <h4>LEFT ARROW STAR PYRAMID:-</h4>
        <!-- THIRTEEN  -->
        <?php
        $r=5;
      for ($i = 1; $i <= $r; $i++)   
      {  
          for ($j = $i; $j < $r; $j++)   
          {  
              echo (" &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");   
          }  
          for ($k = 1; $k <= $i; $k++)  
          {  
              echo ("*"); // print the Star  
          }  
          echo ("<br>");   
      }  
      for ($i = 1; $i <= $r; ++$i)   
      {  
          for ($j = 2; $j <= $i; $j++)  
          {  
              printf(" &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");   
          }  
          for ($k = $i; $k <= $r; $k++)  
          {  
              echo("*"); // print the Star  
          }  
          echo ("<br>");   
      }
         
?>
        <!-- THIRTEEN end  -->
    </div>
    <br><br>
    <div class="container">
        <h4>NUMBER STAR PYRAMID (triangle):-</h4>
        <!-- fourteen -->
        <?php
       $n=1; /*Initializing starting number*/
       for ($i=0;$i<=4;$i++)
       {
           for ($k=5;$k>=$i;$k-- )
           {
            echo "&nbsp; ";
           }
           for ($j=1;$j<=$i;$j++){
           echo $n.'&nbsp;';
           $n = $n + 1;
           }
           echo "<br>";
       }
       ?>
        <!-- fourteen end  -->
    </div>
    <br><br>



</body>
</html>