<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>H2R</title>
        <link rel="icon" type="image/x-icon" href="/logo.png">
        <link rel="stylesheet" href="/accueil/accueil.css">
        <link rel="stylesheet" href="/headerEtFooter/headerEtFooter.css">
    </head>

    <body>
        <?php include '../headerEtFooter/header.php'; ?>

        <main>
            <div id="firstScreen">
                <div id="titre">
                    <h1>Custom H2R</h1>
                </div>
                <img src="/image.png" alt="logo">
            </div>

            <div id="content">
                <div id="weAre" class="contentBox">
                    <h2 class="title">We Are</h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus.
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus.
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus.
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus.
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus.
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus.</p>
                </div>

                <div id="ourBestCustoms" class="contentBox">
                    <h2 class="title">Our Best Custom</h2>

                    <div>
                        <img src="/accueil/moto.jpeg" alt="default image" >
                        <img src="/accueil/moto.jpeg" alt="default image" >
                    </div>

                </div>

                <div id="startYourCustom">
                    <h2 class="title">Start Your Custom</h2>

                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus.</p>
                        <a href="/custom"><button type="button">Start</button></a>
                    </div>

                </div>

                <div id="contactUs" class="contentBox">
                    <h2 class="title">Contact us</h2>

                    <div id="contactUsContent">
                        <div id="contactUsImage">
                            <img src="/image.png" alt="default image">
                        </div>
                        <form method="post">
                            <input class="textField" type="email" name="email" placeholder="email" required>
                            <input class="textField" type="text" name="nom" placeholder="First name, Name" required>
                            <textarea class="textField" name="message" placeholder="message" required></textarea>
                            <input type="submit" value="Send">
                        </form>

                        <?php
                            if (isset($_POST["message"])) {
                                $message = "This message has being sent by the contact formular of the site H2R.\r\nThe sender of this message is: " . $_POST["nom"] . "\r\n\r\n";

                                mail("raphaelmatheret@gmail.com",
                                    "contact H2R",
                                    $message . $_POST["message"],
                                    "From:H2R@zron.fr\r\nReply-To:" . $_POST["email"]);
                            }
                        ?>
                    </div>
                </div>
            </div>
        </main>

        <?php include '../headerEtFooter/footer.php'; ?>
    </body>
</html>