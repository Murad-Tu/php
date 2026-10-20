<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my first php practice
    </title>
    <style>
        span{
           color:red;
        }
        section{
          display: flex;  
          color: red;
          gap:50px;
        }
        nav{
            padding-left: 60px;
        }
    </style>
</head>

<body>
    <?php

use LDAP\Result;

    echo "<h1>web programming involves the following tools</h1>";

   echo" <ul>
        <li>static HTMl</li>
        <li>client web scripting</li>
        <li>server web scripting</li>
    </ul>";

    echo "<div> can you say  <span> \"peace for ethiopia\" </span> please!</div>";

    $Uppercase = "this is information technology department";
     $result = strtoUpper($Uppercase);
    echo "<br/>";
    echo "<span>$result</span>";

    $text= 41;


    
        echo "<h3>The number of character from the above text is <span>$text</span> </h3>";
        $balance = "3,200,456.00" ;
        echo "<p>in commercial bank of ethiopia , i have <span>$balance </span> birr deposit </p>";

        echo "<h2>9.8ms<sup>2</sup>=  <span>10 ms<sup>2</sup></span></h2>";

        $x=7;
        $y=4;
        $temp=0;

        $temp=$x;
        $X=$y;
        $Y=$temp;


        echo "<h2>Before swap <span> X=$x and y=$y</span> , after swap <span> X=$X and Y =$Y</span></h2>";

        echo "<section>
        <div>
            =============== <br/>
                <nav >
                  ||<br/>
                  ||<br/>
                  ||<br/>
                  ||<br/>
                  </nav>
            ==============
        
        </div><br/>
         <div>
            =============== <br/>
    <nav>
                  ||<br/>
                  ||<br/>
                  ||<br/>
                  ||<br/>
        </nav>
        
        </div>
</section>";

    ?>


</body>

</html>