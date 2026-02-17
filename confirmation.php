<?php require_once __DIR__. "/templates/header.php"; ?>

        <main>
            <div class="row justify-content-center margin-t-l">
                <p class="col-auto headline primary-text m-0">Merci pour votre commande !</p>
            </div>
            <div class="row justify-content-center margin-t-l">
                <div class="col-auto">
                    <p class="text white-text text-center m-0">Un récapitulatif de la commande a été envoyé à votre adresse email.</p>
                    <p class="text white-text text-center margin-t-m">Vous pouvez dès à présent suivre l'évolution de votre commande dans votre espace personnel.</p>
                </div>
            </div>
            <div class="row justify-content-center margin-t-l">
                <div class="bouton bg-primary p-0 d-flex justify-content-center">
                    <a class="text dark-text text-decoration-underline m-0 p-0" href="./espace_perso.php">Mon compte</a>
                </div>
            </div>
            <div class="d-flex justify-content-center margin-t-l">
                <svg class="col-10 margin-b-0 p-0" height="2" xmlns="http://www.w3.org/2000/svg">
                    <line class="separator" x1="0" y1="0" x2="100%" y2="0"/>
                    Sorry, your browser does not support inline SVG.
                </svg>
            </div>
        </main>

<?php require_once __DIR__. "/templates/footer.php"; ?>