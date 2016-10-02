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
  
  
</body>
</html>