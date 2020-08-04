 <?php

 $time = 63;
 $coins = 5;
 $result; 

 if ($time < 120){
    $result = 200;
        if ($coins>20)
        {         
        $coins = $coins*2;
        }
        elseif ($coins > 10 AND $coins <=20)
        {
           $coins = $coins*1.5;
        }  
        else{
            $coins;
        }
}
  elseif ($time >= 120 AND $time < 180){
    $result = 100;
    if ($coins>20)
    {         
    $coins = $coins*2;
    }
    elseif ($coins > 10 AND $coins <=20)
    {
       $coins= $coins*1.5;
    }
    else{
        $coins;
    };
}
else {
    $result = 50;
    if ($coins>20)
    {         
    $coins = $coins*2;
    }
    elseif ($coins > 10 AND $coins <=20)
    {
       $coins= $coins*1.5;
    }
    else{
        $coins;
    }
}
echo 'Tu as gagné ' . $result = $result + $coins .' points! Bravo!';
?>