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

    <h5>Populate the fields below to generate a random password that you may use.</h5>

    <!-- Form Section -->

    <form method='post' action='generator.php'>
        <div class="row">
          <div class="twelve columns">
            <label for="length">* Password Length:</label>
            <input type="number" id="length" name="password_length" min="5" max="20" value="5" required></input>
            <p class="italic">Length must be between 5 and 20 characters.</p>
          </div>
        </div>

        <div class="row">
          <div class="twelve columns">
            <label for="case">* Letter Case:</label>
            <input type="radio" name="case" value="lower_case" checked> Lower Only</input>
            <input type="radio" name="case" value="mixed_case"> Upper and Lower</input>
          </div>
        </div>

        <div class="row">
          <div class="twelve columns">
            <label>Include:</label>
            <input type="checkbox" name="numbers"> Numbers</input>
            <input type="checkbox" name="special_characters"> Special Characters</input>
          </div>
        </div>

        <div class="row">
          <div class="twelve columns">
            <input class="button-primary buttonCustom" type="submit" value="Submit">
          </div>
        </div>
      </form>

      <p class="italic">* Indicates a required field.</p>

    </div>
  </body>
</html>
