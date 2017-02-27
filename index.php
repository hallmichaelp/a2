<!DOCTYPE html>
<html lang="en">
<head>
  <?php include ('includes/head.php');?>
</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <header>
      <div class="row">
        <div class="twelve columns">
          <h1>Password Creator</h1>
        </div>
      </div>
    </header>

    <h5>Here are the general instructions for creating a password.</h5>

    <form method='post' action='generator.php'>
        <div class="row">
          <div class="twelve columns">
            <label for="length">Password Length:</label>
            <input type="number" id="length" name="password_length" min="5" max="20" value="5" required></input>
          </div>
        </div>

        <div class="row">
          <div class="twelve columns">
            <label for="case">Case:</label>
            <select id="case" name="character_case" required>
              <option value="hard">Upper and Lower Case</option>
              <option value="easy">Lower Case Only</option>
              <option value="moderate">Upper Case Only</option>
            </select>
          </div>
        </div>

        <div class="row">
          <div class="twelve columns">
            <label>Numbers:</label>
            <input type="checkbox" name="numbers"></input>
          </div>
        </div>

        <div class="row">
          <div class="twelve columns">
            <label>Special Characters:</label>
            <input type="checkbox" name="special_characters"></input>
          </div>
        </div>

        <div class="row">
          <div class="twelve columns">
            <input class="button-primary buttonCustom" type="submit" value="Submit">
          </div>
        </div>
      </form>
    </div>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
