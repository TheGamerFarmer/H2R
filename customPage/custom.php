<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Custom</title>
        <link rel="icon" type="image/x-icon" href="/logo.png">
        <link rel="stylesheet" href="/customPage/custom.css">
        <link rel="stylesheet" href="/headerEtFooter/headerEtFooter.css">
        <script src="/customPage/custom.js"></script>
    </head>

    <body>
        <?php include '../headerEtFooter/header.php'; ?>

        <main>
            <div class="image_container">
                <img class="image expend active" src="/customPage/moto1.jpeg" alt="moto 1">
                <img class="image" src="/customPage/moto2.jpeg" alt="moto 2">
                <img class="image" src="/customPage/moto3.jpeg" alt="moto 3">
                <img class="image" src="/customPage/moto4.jpeg" alt="moto 4">
                <img class="image" src="/customPage/moto5.jpeg" alt="moto 5">
            </div>
            <div id="buttons">
                <div class="buttonsType">
                    <h1>Exhaust pipe</h1>
                    <button onclick="nextImage()" class="button" id="pipe1"></button>
                    <button onclick="nextImage()" class="button" id="pipe2"></button>
                    <button onclick="nextImage()" class="button" id="pipe3"></button>
                    <button onclick="nextImage()" class="button" id="pipe4"></button>
                </div>
                <div class="buttonsType">
                    <h1>Color</h1>
                    <button onclick="nextImage()" class="button" id="red"></button>
                    <button onclick="nextImage()" class="button" id="green"></button>
                    <button onclick="nextImage()" class="button" id="blue"></button>
                    <button onclick="nextImage()" class="button" id="yellow"></button>
                    <button onclick="nextImage()" class="button" id="black"></button>
                </div>
                <div class="buttonsType">
                    <h1>Wheel</h1>
                    <button onclick="nextImage()" class="button" id="wheel1"></button>
                    <button onclick="nextImage()" class="button" id="wheel2"></button>
                    <button onclick="nextImage()" class="button" id="wheel3"></button>
                    <button onclick="nextImage()" class="button" id="wheel4"></button>
                    <button onclick="nextImage()" class="button" id="wheel5"></button>
                    <button onclick="nextImage()" class="button" id="wheel6"></button>
                </div>
            </div>
        </main>

        <?php include '../headerEtFooter/footer.php'; ?>
    </body>
</html>
