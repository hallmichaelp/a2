<!-- PHP Initialization Section -->
<?php
# -- Require Password class file
require('Password.php');
# --Instantiate a new password object and pass in form input/call constructor method
$password = new Password($_POST['password_length'], $_POST['case'], !empty($_POST['numbers']), !empty($_POST['special_characters']));
?>

<!-- Start of HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include ('includes/head.php');?>
</head>
<body>

  <!-- Header Section -->

  <div class="container">
    <header>
      <div class="row">
        <div class="twelve columns">
          <h1>Password Generator</h1>
        </div>
      </div>
    </header>

    <!-- Main Output Section -->

    <div class="row">
      <div class="four columns">
          <h5>Your random password is: </h5>
      </div>
      <div class="eight columns">
        <h4 class="password"><?=$password->getUserPassword()?></h4>
      </div>
    </div>

    <div class="row">
      <div class="twelve columns">
        <input class="button" type="submit" value="Try Again" onclick="window.location.href='http://a2.michaelpatrickhall.com/'">
      </div>
    </div>

    <!-- Supplementary Details -->

    <div class="row pushDown">
      <div class="twelve columns">
        <p>Your password includes the following specifications:</p>
      </div>
    </div>

    <div class="row">
      <div class="twelve columns">
        <ul>
          <li>Length: <?=$password->getLength()?></li>
          <li>Case: <?=$password->getCase()?></li>
          <li>Numbers: <?=$password->getNumbers()?></li>
          <li>Special Characters: <?=$password->getSpecialChars();?></li>
        </ul>
      </div>
    </div>
  </div>
</body>
</html>
