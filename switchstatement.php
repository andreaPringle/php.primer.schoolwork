<?php 
     $title = "Switch Statements";
    include 'includes/header.php' ?>
    <h1>Switch Statements</h1>
    <!--  Andrea Pringle ID# 1917005528 -->
    <?php 
    $grade = 'F';
    switch($grade){
        case 'A' : 
            echo "<h2> Congradulation Bright Sparks!! 
            </h2>";
            break;
        case 'B' ;
        echo "<h2 style= 'color:orange;'> Good Job!! 
            </h2>";
            break;
            case 'C' ;
            echo "<h2 style= 'color:black;'> 
            You bailey scrape through but a pass is a pass 
            </h2>";
            break;
            default:
            echo "<h2 style= 'color:red;'> You need to put in some 
        Work!! </h2>";
        break;

    }
    ?>
<?php require 'includes/footer.php' ?>