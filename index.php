<html>
  <head>
    <title>Guessing Game for Ayala Janah</title>
  </head>

  <body>
    <h1>Welcome to my guessing game</h1>
    <h3>Print your number</h3>
    <!-- <input></input> -->

    <?php
    	$oldguess = isset($_POST['guess']) ? $_POST['guess'] : '';
    ?>

    <form>

      <p>
        <label for="guess">Enter your number</label>
        <input type="text" name="guess" id="guess"/>
      </p>

      <input type="submit" />
    </form>

    <h3>
    	The number you chose is: 
    </h3>
      
    <?php


      if ( ! isset($_GET['guess']) ) { 
        echo("Missing guess parameter");
      } else if ( strlen($_GET['guess']) < 1 ) {
        echo("Your guess is too short");
      } else if ( ! is_numeric($_GET['guess']) ) {
        echo("Your guess is not a number");
      } else if ( $_GET['guess'] < 42 ) {
        echo("Your guess is too low");
      } else if ( $_GET['guess'] > 42 ) {
        echo("Your guess is too high");
      } else {
        echo("Congratulations - You are right");
      }

   $oldguess = isset($_POST['guess']) ? $_POST['guess'] : '';

    echo ($oldguess);

    ?>

  </body>
</html>