<?php

$visited_town = array(
                        'Algeries'=> 250,
                        'Tiaret' => 300,
                        'Oron' => 400);

$services = array(
                    'First Class' => 55,
                    'Second Class'=> 30);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1>Chose The Town You Want To Visit</h1>
  <form action="check.php" method='get'>
    <?php foreach($visited_town as $ville => $price):?>
        <label>
          <input type='checkbox' value='<?php echo $ville;?>' name='town'>
          <?php echo $ville?>
        </label></br>
    <?php endforeach;?>
    <h1>Chose The class</h1>
    <?php foreach($services as $service => $price):?>
        <input type='radio' id='<?php echo $service;?>' value='<?php echo str_replace(" ","",$service);?>' name='class'>
        <label for='<?php echo $service;?>'><?php echo $service; ?></label></br>
    <?php endforeach;?>
    </br><button type='submit'>Submit</button>
  </form>  
</body>
</html>