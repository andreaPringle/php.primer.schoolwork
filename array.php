<?php 
    $title = "Arrays and Printouts";
    include 'includes/header.php' 
?>
<!--  Andrea Pringle ID# 1917005528 -->
    <h1><?php echo $title ?></h1>
    <?php
    $numbers = array(1,2,3,4,5,6,7,8,9,10);

    echo "LETS COUNT: . $numbers[0] . ", " 
    . $numbers[1] . ", " . $numbers[2] . ",". $numbers[1] . ", ". $numbers[2] 
    . ", ". $numbers[3] . ", ". $numbers[4] . ", ". $numbers[5] . ", "
    . $numbers[6] . ", ". $numbers[7] . ", ". $numbers[8] . ", ". $numbers[9] . ";
    echo "<br/>";
    echo "<br/>";
    echo "10 - 7 = $numbers[2]";
    $size = count($numbers);
    echo "<p> The size of the array is: $size </p>";
    for($count = 0; $count < $size; $count++ ){
        echo "<p> $numbers[$count] </p>";
    }
    ?>
<?php require 'includes/footer.php' ?>