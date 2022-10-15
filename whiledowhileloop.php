<?php 
     $title = "While Loop";
    include 'includes/header.php' ?>
    <!--  Andrea Pringle ID# 1917005528 -->
    <h1>While Loop</h1> 
   <?php 
   $grade = 0;
   while($grade < 5){
    echo "<p> While loop " .$grade. "</p>";
    $grade++;
   }
   echo "Exit Loop!"
   ?>

<h1> Do While Loop</h1> 
   <?php 
   $grade = 0;
   do {
      echo "<p> Do while " .$grade. "</p>";
      $grade++;
   }while($grade < 2);
   
   ?>
<?php require 'includes/footer.php' ?>