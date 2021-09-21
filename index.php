<?php 
    $paragraph = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis quos quae et ea delectus officia ipsa molestias laborum repellat ipsum voluptas, hic a eius impedit numquam minus. Doloribus, rem tempore.';
    $bad_word = $_GET['bad_word'];
     
    $new_par = str_replace('adipisicing', '(***)', $paragraph);
  
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <?php echo $paragraph; 
        echo '<br/>';
        echo 'Lunghezza stringa: ' . strlen($paragraph);
        echo '<br/>';
        var_dump($paragraph);
        
        echo '<hr/>';

        echo $new_par;
        echo '<br/>';
        echo 'Lunghezza nuova stringa: ' . strlen($new_par);
        var_dump($new_par);
        
    ?>
    
</body>
</html>