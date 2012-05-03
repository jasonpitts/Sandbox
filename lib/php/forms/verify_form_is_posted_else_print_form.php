<?php

/* *****************************************************************
 * Verifies that the request type is POST if not it prints the form
 *  
  ******************************************************************/


if ($_SERVER['REQUEST_METHOD'] != "POST"){ 

    echo "Request was: " .  $_SERVER['REQUEST_METHOD'];
    echo '<br><form target="_self" method="post">  <input type="submit" value="Submit"> </form>';    
    
} else { // if the request was posted correctly process form imput

    echo "Request was: " . $_SERVER['REQUEST_METHOD'] . " process form!";
    
}
?>
