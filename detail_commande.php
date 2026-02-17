<?php require_once __DIR__. "/templates/header.php"; ?>

<main>
    <div class="row margin-l-0 margin-t-l justify-content-center">
        <div class="col-10 m-0 p-0">
            <div class="filter d-flex justify-content-center p-0 tertiary-text">
                <i class="bi bi-chevron-left margin-l-s"></i>
                <a class="text-decoration-underline margin-l-s margin-r-s tertiary-text" href="./espace_perso.php">Retour</a>
            </div>
        </div>
    </div>
    <div class="row justify-content-center bg-extra-dark margin-t-l">
        <div class="col-4 margin-t-l margin-b-l">
            <p class="headline primary-text text-center m-0">Commande n°xxxxx</p>
            <p class="text white-text text-center margin-t-s">Etat</p>
            <p class="text white-text text-center margin-t-l">Menu sélectionné</p>
            <p class="text white-text text-center margin-t-s">Quantité</p>
            <p class="text white-text text-center margin-t-s">Date de l'évènement</p>
            <p class="text white-text text-center margin-t-s">Date de livraison</p>
            <p class="text white-text text-center margin-t-s">Heure de livraison</p>
            <p class="text white-text text-center margin-t-s">Adresse de livraison</p>
            <p class="text white-text text-center margin-t-l">Prénom Nom</p>
            <p class="text white-text text-center margin-t-s">Adresse mail</p>
            <p class="text white-text text-center margin-t-s">Numéro de téléphone</p>
            <div class="row justify-content-between margin-t-l">
                <div class="col-auto">
                    <p class="text white-text m-0">Menu choisis</p>
                </div>
                <div class="col-auto">
                    <p class="text white-text text-end m-0">Prix/pers</p>
                </div>
            </div>
            <div class="row justify-content-between margin-t-s">
                <div class="col-auto">
                    <p class="text white-text m-0">Quantité</p>
                </div>
                <div class="col-auto">
                    <p class="text white-text text-end m-0">Prix menu</p>
                </div>
            </div>
            <div class="row justify-content-between margin-t-l">
                <div class="col-auto">
                    <p class="text white-text m-0">Livraison (distance)</p>
                </div>
                <div class="col-auto">
                    <p class="text white-text text-end m-0">Prix livraison</p>
                </div>
            </div>
            <div class="row justify-content-between margin-t-l">
                <div class="col-auto">
                    <p class="text white-text m-0">Remise</p>
                </div>
                <div class="col-auto">
                    <p class="text white-text text-end m-0">Montant remise</p>
                </div>
            </div>
            <div class="row justify-content-between margin-t-l">
                <div class="col-auto">
                    <p class="headline primary-text m-0">Total</p>
                </div>
                <div class="col-auto">
                    <p class="headline primary-text text-end m-0">Prix total</p>
                </div>
            </div>
            <div class="row justify-content-center margin-t-l">
                <div class="modify-btn primary-border radius-m">
                    <i class="bi bi-pencil-fill primary-text fit"></i>
                </div>
                <div class="modify-btn border-tertiary padding-xs radius-m margin-l-s">
                    <i class="bi bi-trash-fill tertiary-text fit"></i>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center margin-t-l">
            <svg class="col-10 margin-b-0 p-0" height="2" xmlns="http://www.w3.org/2000/svg">
                <line class="separator" x1="0" y1="0" x2="100%" y2="0"/>
                Sorry, your browser does not support inline SVG.
            </svg>
        </div>        
    </div>
</main>

<?php require_once __DIR__. "/templates/footer.php"; ?>