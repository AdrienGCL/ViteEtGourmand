<?php require_once __DIR__. "/templates/header.php"; ?>

        <main>
            <div class="row margin-l-0 margin-t-l justify-content-center">
                <div class="col-10 m-0 p-0">
                    <div class="filter d-flex justify-content-center p-0 tertiary-text">
                        <i class="bi bi-chevron-left margin-l-s"></i>
                        <a class="text-decoration-underline margin-l-s margin-r-s tertiary-text" href="./menus.php">Revenir aux résultats</a>
                    </div>
                </div>
            </div>
            <div class="bg-extra-dark margin-t-l padding-t-l">
                <div class="row justify-content-center">
                    <p class="headline primary-text col-auto margin-b-s">Nom du menu</p>
                </div>
                <div class="row justify-content-center">
                    <p class="text white-text col-auto m-0 mx-3">Quantité minimum</p>
                    <p class="text white-text col-auto m-0 mx-3">Thème</p>
                    <p class="text white-text col-auto m-0 mx-3">Régime</p>
                </div>
                <div class="row justify-content-center margin-t-l">
                    <p class="text white-text col-auto m-0">Description du menu, des différents plats.</p>
                </div>
                <div class="row justify-content-center margin-t-l">
                    <img class="imgPlat p-0 mx-3" src="./assets/images/placeholder.png" alt="photo d'un plat">
                    <img class="imgPlat p-0 mx-3" src="./assets/images/placeholder.png" alt="photo d'un plat">
                    <img class="imgPlat p-0 mx-3" src="./assets/images/placeholder.png" alt="photo d'un plat">
                    <img class="imgPlat p-0 mx-3" src="./assets/images/placeholder.png" alt="photo d'un plat">
                </div>
                <div class="row justify-content-center margin-t-l">
                    <p class="text white-text col-auto m-0">Liste des plats.</p>
                </div>
                <div class="row justify-content-center margin-t-l">
                    <p class="text white-text col-auto m-0">Liste des allergènes.</p>
                </div>
                <div class="row justify-content-center margin-t-l">
                    <p class="text white-text col-auto m-0">Conditions particulières.</p>
                </div>
                <div class="row justify-content-center margin-t-l">
                    <p class="headline secondary-text col-auto m-0">Prix/pers</p>
                </div>
                <div class="row justify-content-center margin-t-l">
                    <p class="text tertiary-text col-auto m-0">Stock disponible</p>
                </div>
                <div class="row justify-content-center margin-t-s">
                    <div class="bouton bg-primary p-0 d-flex justify-content-center">
                        <a class="text dark-text text-decoration-underline m-0 p-0" href="">Commander</a>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <svg class="col-10 margin-t-l margin-b-0 p-0" height="2" xmlns="http://www.w3.org/2000/svg">
                        <line class="separator" x1="0" y1="0" x2="100%" y2="0"/>
                        Sorry, your browser does not support inline SVG.
                    </svg>
                </div>
            </div>
        </main>

<?php require_once __DIR__. "/templates/footer.php"; ?>