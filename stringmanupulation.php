<?php 
     $title = "PHP String Manipulations";
    include 'includes/header.php' ?>
<!--  Andrea Pringle ID# 1917005528 -->
    <h1>PHP String Manipulation</h1>
   
    <?php
    
    $phrase1= "For unto us a child is born, unto us a son is given: 
    and the government shall be upon his shoulder: and his name shall be called Wonderful, Counsellor, 
    The mighty God, The everlasting Father, The Prince of Peace. ";
    $phrase2= "And she shall bring forth a son, and thou shalt call his name Jesus:
         for he shall save his people from their sins. Matthew 1:21 KJV";
         $name= "andrea Pringle";
         $phrase3= "Top Premier League Clubs: Liverpool, City, Aresnal, United, Chelsea, Everton";
         echo "<p> $phrase1  Isaiah 9:6 KJV. <br/>  $phrase2. </p>";
        
    echo "<br/>";
    echo "<p> $phrase3 </p>";
    echo "<hr/>";
    
    echo "Uppercase first letter: " .ucfirst($name). "<br/>";
    echo "Uppercase first letter of each letter: " .ucwords($name). "<br/>";
    echo "Uppercase:  " .strtoupper($name). "<br/>";
    echo "Lowercase:  " .strtolower("YNWA LIVERPOOL LIVERPOOL LIVERPOOL"). "<br/>";
    echo "<hr/>";
    echo "Repeat String: " . str_repeat("a", 5).  "<br/>";
    echo "Repeat String: " . strtoupper(str_repeat("a", 5)).  "<br/>";
    echo 'Get a Substring: ' . substr($name, 3, 5).'<br/>';

        echo 'Get position of string: ' . strpos($name,'w').'<br/>';
        // Returns NULL 
        // echo 'Get position of string: ' . strpos($combine,'z').'<br/>';
        echo 'Find Character "R": ' . strchr($name, 'R').'<br/>';
        echo 'Find Character "r": ' . strchr($name, 'r').'<br/>';
        echo 'Find Character "s": ' . strchr($name, 's').'<br/>';
        echo 'Find Character "e": ' . strchr($name, 'e').'<br/>';

        echo 'Find Length of String: ' . strlen($name) .'<br/>';
        
        echo 'Without Trim: '. "A" . " B C D " . "E" . '<br/>';
        echo 'Trim spaces on both sides: '. "A" . trim(" B C D ") . "E" . '<br/>';
        echo 'Trim spaces to the left: '. "A" . ltrim(" B C D ") . "E" . '<br/>';
        echo 'Trim spaces to the right: '. "A" . rtrim(" B C D ") . "E" . '<br/>';

        echo ' Replace string with another: '. str_replace("Everton", "Tottenham", $phrase3 ) . '<br/>';
    ?>
   
   <?php require 'includes/footer.php' ?>