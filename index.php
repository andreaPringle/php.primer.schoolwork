<?php 
        $title = "Index";
        include 'includes/header.php' 
    ?>
    <!--  Andrea Pringle ID# 1917005528 -->
   <h1> Hello World- PHP Primer</h1>
   <h2> Follow each link to the page example </h2>
   <ul> 
    <li> <a href ="array.php" target="_blank"> Array </a> </li>
    <li> <a href ="forloop.php" target="_blank"> For Loop </a> </li>
    <li> <a href ="whiledowhileloop.php" target="_blank"> While/Do While Loop </a> </li>
    <li> <a href ="ifstatement.php" target="_blank"> If Statement </a> </li>
    <li> <a href ="switchstatement.php" target="_blank"> Switch Statement</a> </li>
    <li> <a href ="stringmanupulation.php" target="_blank">String Manipulation </a> </li>
    <li> <a href ="date&time.php" target="_blank">Date & Time Manipulation </a> </li>
    <li> <a href ="functions.php" target="_blank">Functions </a> </li>
   </ul>

   <?php
   //Single Line Comment
   /* Multiple Line Comment*/
    echo "Hello PhP"; 
    echo "<br/>";
    echo "Second";
    ?> 
    <?php
    $name= "Andrea Pringle";
    $age = 22;
    echo "<br/>";
    echo "<br/>";
    echo $name;
    echo "<h2> My name is: " .$name. "</h2>";
    echo "<h2> My age is: " .$age. "</h2>";
     ?>
  <?php require 'includes/footer.php' ?>
