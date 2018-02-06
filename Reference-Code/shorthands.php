<?php
  $loggedIn = true;

  if($loggedIn){
    echo 'You are logged in';
  } else {
    echo 'You are NOT logged in';
  }


  echo '<br>';
  echo '<h3>Contidional with (sentence) ? true : false </h3>';
  echo($loggedIn) ? 'You are logged in' : 'You are NOT logged';

  $loggedIn = true;
  $isRegistered = ($loggedIn == true) ? true : false;
  echo "Is Registered? : " . $isRegistered;
  echo '<br>';


  $age = 10;
  $score = 10;

  echo 'You score is: '.($score > 10  ? ($age > 10 ? 'Avarage' : 'Execeptional') : ($age > 10 ? 'Horrible':'Avarage'));

  $list = [1,2,3,4,5];
 ?>

 <!-- THIS IS A VERY UNPRODUCTIVE AND COMPLICATED WAY TO WRITE AND UNDERSTAND PHP FRONT END -->
 <h1>Long and complex way to do front end in php</h1>
 <div>
   <?php if($loggedIn){?>
     <h3>Welcome user</h3>
   <?php } else{?>
     <h3>Welcome guest</h3>
   <?php }?>
 </div>



 <!-- THIS IS THE RIGHT AND ORGANIZED WAY TO DO THIS -->
 <h1>Right way to write php code</h1>
 <div >
   <?php if($loggedIn): ?>
     <h3>Welcome user</h3>
   <?php else: ?>
     <h3>Welcome guest</h3>
   <?php endif; ?>
 </div>

 <h1>Using For Each</h1>
 <div>
   <?php foreach($list as $value): ?>
     <?php echo $value ?>
   <?php endforeach; ?>
 </div>

 <h1>Using simple for</h1>
 <div>
   <?php for($i=0;$i<10;$i++): ?>
     <li><?php echo $i ?></li>
   <?php endfor; ?>
 </div>
