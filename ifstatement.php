<?php 
     $title = "IF-ELSE Statements";
    include 'includes/header.php' ?>
    <!--  Andrea Pringle ID# 1917005528 -->
    <h1>IF-ELSE Statements</h1>
  <?php
  echo "<h1> If Statement </h1>";
  $grade =80;

  if($grade >= 50){
    echo "<h2 style= 'color:green;'> You have passed </h2>";
  }else
    {
        echo "<h2 style= 'color:red;'> You have failed </h2>";
    }
    echo "<br/>";
  $grade ='C+';
  if($grade == 'A'|| $grade == 'A+'){
    echo "<h2 style= 'color:green;'> Congradulation Bright Sparks!! 
    </h2>";
   }else if($grade == 'B+' || $grade == 'B'){
    echo "<h2 style= 'color:orange;'> Good Job!! 
    </h2>";
}else if($grade == 'C+' || $grade == 'C'){
    echo "<h2 style= 'color:black;'> You bailey scrape through but a pass is a pass 
    </h2>";
  }else
    {
        echo "<h2 style= 'color:red;'> You need to put in some 
        Work!! </h2>";
    }
  ?>  
<?php require 'includes/footer.php' ?>