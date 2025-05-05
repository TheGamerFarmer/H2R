<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Custom</title>
        <link rel="icon" type="image/x-icon" href="/logo.png">
        <link rel="stylesheet" href="/customPage/custom.css">
        <link rel="stylesheet" href="/headerEtFooter/headerEtFooter.css">
    </head>

  <body>
    <?php include '../headerEtFooter/header.php'; ?>

    <main>
      <ul>
        <li><h1>Wheels:</h1></li>
        <li><button class="favorite styled"  type="button">base</button></li>
        <li><button class="favorite styled"  type="button">Wheel1</button></li>
        <li><button class="favorite styled"  type="button">Wheel2</button></li>
        <li><button class="favorite styled"  type="button">Wheel3</button></li>
      </ul>
      <img src="/image.png" alt="exemple">
      <ul>
        <li><h1>Colors:</h1></li>
        <li><button class="favorite styled" id="base" type="button">base</button></li>
        <li><button class="favorite styled" id="red" type="button">red</button></li>
        <li><button class="favorite styled" id="green" type="button">green</button></li>
        <li><button class="favorite styled" id="blue" type="button">blue</button></li>
        <li><button class="favorite styled" id="yellow" type="button">yellow</button></li>
        <li><button class="favorite styled" id="black" type="button">black</button></li>
      </ul>
      <ul>
        <li>
        </li>
      </ul>
    </main>

    <?php include '../headerEtFooter/footer.php'; ?>
  </body>
</html>
