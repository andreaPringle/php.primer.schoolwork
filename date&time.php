<?php 
     $title = "Date and Time Manipulation";
    include 'includes/header.php' ?>
    <h1>Date and Time Manipulation</h1>
    <!--  Andrea Pringle ID# 1917005528 -->
    <?php
    $datenow = getdate();
    echo "Today's Date: <br/>";
    echo $datenow['mday'] . "-";
    echo $datenow['mon']. "-";
    echo $datenow['year'];
    echo "<br/> <br/>";
    echo "Today's Date: " . $datenow['mday'] . '/' . $datenow['mon'] . '/'. $datenow['year']. '<br/>';
    echo time() . '<br/>';
    print date("m/d/y G.i:s<br>", time()) . '<br/>';
    echo "<br/>";
    print "Today is ";
    print date("j of F Y, \a\\t g.i a", time());
    ?>
<?php require 'includes/footer.php' ?>