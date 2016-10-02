<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Learn php - Al zaabi </title>
</head>
<body>
  
  
  <ul>
    <?php foreach ($animals as $animal): ?>
    
    <li><strong><?=$animal  ?></strong></li>
    
    <?php endforeach ?>
      
  </ul>
  
  <<h3> You are age is 17 so </h3>  <?php 
  
  if (checkAge(18)) {
    echo ' you are able to eneter the club' ;
  } else {
    echo 'Sorry boy .. you need to wait to be 18 or aboove. ';
  }
  
  ?>
  
  
</body>
</html>