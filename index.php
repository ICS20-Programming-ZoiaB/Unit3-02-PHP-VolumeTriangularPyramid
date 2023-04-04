<DOCTYPE html>
<html lang="en-ca">
  <head>

    <!--Meta data-->
    <meta charset="utf-8">
    <meta name="description" content="Volume of Triangular Pyramid">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="ZoiaB">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/android-chrome-512x512.png">
    <link rel="manifest" href="./favicon/android-chrome-512x512.png">

    <!--Stylesheet-->
    <link rel="stylesheet" href="./css/style.css">
    
    <!--MDL theme-->
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.purple-deep_purple.min.css">

    <!--Title-->
    <title>Calculating the Volume of a Triangular Pyramid in PHP</title>
  </head>
  <body>
    <h1>Calculating the Volume of a Triangular Pyramid in PHP with User Input</h1>
    
    <!--Div-->
    <div id="div">
      <h3>Insert your input:</h3>

    <!--Image-->
      <center>
        <img src="./images/pyramid.png" width="300" length="300">
      </center>

    <!--Form for user input-->
      <center>
      <form action="./results.php" method="post" target="display-result">
        <label for="pyramid-height">Pyramid Height (H)</label>
        <input type="float" name="pyramid-height" placeholder="Pyramid height (cm)...">
        <br>
        <br>
        <label for="base-length">Base Length (A)</label>
        <input type="float" name="base-length" placeholder="Base length (cm)...">
        <br>
        <br>
        <label for="base-height">Base Height (B)</label>
        <input type="float" name="base-height" placeholder="Base height (cm)...">
        <br>
        <br>
        <input type="submit" value="Calculate" button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
      </form>
    </div>

    <!--Iframe to display results-->
    <iframe id="display-result" name="display-result"></iframe>
      </center>
  </body>
</html>