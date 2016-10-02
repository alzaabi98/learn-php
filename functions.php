<?php 
function dd($data) {
  
  echo '<pre>' ;
  
  die(var_dump($data)) ;
  
  echo '</pre>' ;
}


/// check for the age ...


function checkAge($age)  {
  
  if ($age > 18 ) {
    return true ;
  } else {
    
    return false ;
  }
    
  
}