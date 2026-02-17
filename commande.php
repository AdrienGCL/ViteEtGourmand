<?php require_once __DIR__. "/templates/header.php"; ?>

        <main>
            <form id="commandeForm" class="row text justify-content-center" action="" method="post">
                <div class="row justify-content-center margin-t-l">
                    <p class="col-auto headline primary-text m-0">Votre commande</p>
                </div>
                <div class="row justify-content-center margin-t-l">
                    <p class="col-auto text white-text m-0">Vos informations</p>
                </div>
                <div class="row justify-content-center margin-t-l">
                    <div class="col-4 bg-white radius-m">
                        <input class="customInput w-100" type="text" name="name" id="nameinput" placeholder="Nom" required>
                    </div>
                </div>
                <div class="row justify-content-center margin-t-l">
                    <div class="col-4 bg-white radius-m">
                        <input class="customInput w-100" type="text" name="firstname" id="firstnameinput" placeholder="Prénom" required>
                    </div>
                </div>
                <div class="row justify-content-center margin-t-l">
                    <div class="col-4 bg-white radius-m">
                        <input class="customInput w-100" type="text" name="mail" id="mailinput" placeholder="Adresse mail" required>
                    </div>
                </div>
                <div class="row justify-content-center margin-t-l">
                    <div class="col-4 bg-white radius-m">
                        <input class="customInput w-100" type="tel" name="phone" id="phoneinput" placeholder="Numéro de téléphone" pattern="[0-9]{10}" required>
                    </div>
                </div>
                <div class="row justify-content-center margin-t-l">
                    <p class="col-auto text white-text m-0">Votre évènement</p>
                </div>
                <div class="row justify-content-center margin-t-l">
                    <div class="col-4 bg-white radius-m">
                        <input class="customInput w-100" type="text" name="adresseprestation" id="adresseprestationinput" placeholder="Adresse de l'évènement" required>
                    </div>
                </div>
                <div class="row justify-content-center margin-t-l">
                    <div class="col-4 bg-white radius-m">
                            <label class="col-auto light-text m-0" for="dateprestationinput">Date de l'évènement</label>
                            <input class="customInput w-100" type="date" name="dateprestation" id="dateprestationinput" required>
                    </div>
                </div>
                <div class="row justify-content-center margin-t-l">
                    <p class="col-auto text white-text m-0">Votre livraison</p>
                </div>
                <div class="row justify-content-center margin-t-l">
                    <div class="col-4 bg-white radius-m">
                            <label class="col-auto light-text m-0" for="datelivraisoninput">Date de livraison souhaitée</label>
                            <input class="customInput w-100" type="date" name="datelivraison" id="datelivraisoninput" required>
                    </div>
                </div>
                <div class="row justify-content-center margin-t-l">
                    <div class="col-4 bg-white radius-m">
                            <label class="col-auto light-text m-0" for="heurelivraisoninput">Heure de livraison souhaitée</label>
                            <input class="customInput w-100" type="time" name="heurelivraison" id="heurelivraisoninput" required>
                    </div>
                </div>
                <div class="row justify-content-center margin-t-l">
                    <div class="col-4 bg-white radius-m">
                        <input class="customInput w-100" type="text" name="adresselivraison" id="adresselivraisoninput" placeholder="Adresse de livraison (si différente)">
                    </div>
                </div>
                <div class="row justify-content-center margin-t-l">
                    <p class="col-auto text white-text m-0">Votre menu</p>
                </div>
                <div class="row justify-content-center margin-t-l">
                    <div class="col-4 bg-white radius-m">
                        <input class="customInput w-100" type="text" name="menu" id="menuinput" placeholder="Menu sélectionné" required>
                    </div>
                </div>
                <div class="row justify-content-center margin-t-l">
                    <div class="col-4 bg-white radius-m">
                        <input class="customInput w-100" type="number" name="quantite" id="quantiteinput" placeholder="Quantité (minimum x)" min="" max="" required>
                    </div>
                </div>
                <div class="d-flex justify-content-center margin-t-l">
                    <svg class="col-10 margin-b-0 p-0" height="2" xmlns="http://www.w3.org/2000/svg">
                        <line class="separator" x1="0" y1="0" x2="100%" y2="0"/>
                        Sorry, your browser does not support inline SVG.
                    </svg>
                </div>
                <div class="row justify-content-center">
                    <div class="col-4">
                        <div class="row justify-content-center margin-t-l">
                            <p class="col-auto headline primary-text text-center m-0">Récapitulatif de votre commande</p>
                        </div>
                        <div class="row justify-content-between margin-t-l">
                            <p class="col-auto text white-text m-0">Menu choisis</p>
                            <p class="col-auto text white-text m-0">Prix/pers</p>
                        </div>
                        <div class="row justify-content-between">
                            <p class="col-auto text white-text m-0">Quantité x</p>
                            <p class="col-auto text white-text m-0">Prix menu</p>
                        </div>
                        <div class="row justify-content-between margin-t-l">
                            <p class="col-auto text white-text m-0">Livraison (distance en km)</p>
                            <p class="col-auto text white-text m-0">Prix livraison</p>
                        </div>
                        <div class="row justify-content-between margin-t-l">
                            <p class="col-auto text white-text m-0">Remise</p>
                            <p class="col-auto text white-text m-0">Montant remise</p>
                        </div>
                        <div class="row justify-content-between margin-t-l">
                            <p class="col-auto headline primary-text m-0">Total</p>
                            <p class="col-auto headline primary-text m-0">Prix total</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center margin-t-l">
                    <div class="col-auto">
                        <p class="col-auto text white-text text-center m-0">Rappel :</p>
                        <p class="col-auto text white-text text-center m-0">Rappel des conditions du menu. Délai, stockage, etc...</p>
                    </div>
                </div>
                <div class="row justify-content-center margin-t-l">
                    <div class="col-auto">
                        <input class="customSubmit bouton text text-decoration-underline" type="submit" name="Commander" value="Commander">
                    </div>
                </div>
            </form>
            <div class="d-flex justify-content-center margin-t-l">
                <svg class="col-10 margin-b-0 p-0" height="2" xmlns="http://www.w3.org/2000/svg">
                    <line class="separator" x1="0" y1="0" x2="100%" y2="0"/>
                    Sorry, your browser does not support inline SVG.
                </svg>
            </div>
        </main>

<?php require_once __DIR__. "/templates/footer.php"; ?>