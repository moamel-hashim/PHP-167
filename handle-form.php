<?php
if($_POST['hobbies'] == 'select an option') {
  echo '<p> please return and select an option';
} elseif(!empty($_POST['first-name']) && !empty($_POST['email']) && !empty($_POST['last-name']) && !empty($_POST['comments']) && !empty($_POST['codingLanguages']) && !empty($_POST['hobbies'])) {
  echo '<p> Thank you, <b>'.$_POST['first-name']. ' '.$_POST['last-name'].'</b> for the comments: <b>'.$_POST['comments'].'</b></p>
  <p> we will reach out to you at'.$_POST['email'].'</p>';
} else {
  echo '<p>Please go back and fill out the form again.</p>';
}

?>
