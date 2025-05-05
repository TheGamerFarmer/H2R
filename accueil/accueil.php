<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>H2R</title>
        <link rel="icon" type="image/x-icon" href="/logo.png">
        <link rel="stylesheet" href="/accueil/accueil.css">
        <link rel="stylesheet" href="/headerEtFooter/headerEtFooter.css">
        <script src="/headerEtFooter/footer.js"></script>
    </head>

    <body onload="onLoadFooter()">
        <?php include '../headerEtFooter/header.php'; ?>

        <main>
            <div class="firstScreen">
                <h1>Custom H2R</h1>
                <img src="/image.png" alt="logo">
            </div>
            <div id="weAre">
                <h2>We Are</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus.
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus.
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus.
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus.
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus.
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus.</p>
            </div>
            <h2>Our Best Custom</h2>
            <div id="OurBestCustom">
                
                <div>
                    <img src="/accueil/moto.jpeg" alt="image par défault" >
                    <img src="/accueil/moto.jpeg" alt="image par défault" >
                </div>
                
            </div>
            <h2>Start Your Custom</h2>
            <div id="StartYourCustom">
                <div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus.</p>
                    <button type="button">Commencer</button>
                </div>
                
            </div>
            <h2>Contact us</h2>
            <div id="ContactUs">
                
                <img src="/image.png" alt="image par défault">
                <div>
                    <input id="text" type="text" name="text" placeholder="text">
                    <input id="text" type="text" name="text" placeholder="text">
                    <input id="text" type="text" name="text" placeholder="text">
                    <button type="button">button</button>
                    <button type="button">button</button>
                </div>
                
            </div>

        </main>

        <?php include '../headerEtFooter/footer.php'; ?>
    </body>
</html>