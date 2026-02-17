<?php require_once __DIR__. "/templates/header.php"; ?>

        <main>
            <form id="registerForm" class="row justify-content-center" action="" method="post">
                <div class="row justify-content-center margin-t-l">
                    <p class="col-auto headline primary-text m-0">Inscription</p>
                </div>
                <div class="row justify-content-center margin-t-l">
                    <div class="col-4 bg-white radius-m">
                        <input class="customInput w-100" type="text" name="nameregister" id="nameRegisterinput" placeholder="Nom" required>
                    </div>
                </div>
                <div class="row justify-content-center margin-t-l">
                    <div class="col-4 bg-white radius-m">
                        <input class="customInput w-100" type="text" name="firstnameregister" id="firstnameRegisterinput" placeholder="Prénom" required>
                    </div>
                </div>
                <div class="row justify-content-center margin-t-l">
                    <div class="col-4 bg-white radius-m">
                        <input class="customInput w-100" type="tel" name="phoneregister" id="phoneRegisterinput" placeholder="Numéro de téléphone" pattern="[0-9]{10}" required>
                    </div>
                </div>
                <div class="row justify-content-center margin-t-l">
                    <div class="col-4 bg-white radius-m">
                        <input class="customInput w-100" type="text" name="mail" id="mailinput" placeholder="Adresse mail" required>
                    </div>
                </div>
                <div class="row justify-content-center margin-t-l">
                    <div class="col-4 bg-white radius-m">
                        <input class="customInput w-100" type="password" name="mdpregister" id="mdpRegisterinput" placeholder="Mot de passe" required>
                    </div>
                </div>
                <div class="row justify-content-center margin-t-l">
                    <a class="col-auto text primary-text" href="./connexion.php">Déjà un compte ? Connectez-vous !</a>
                </div>
                <div class="row justify-content-center margin-t-l">
                    <div class="col-auto">
                        <input class="customSubmit btn text text-decoration-underline" type="submit" name="Signin" value="S'inscrire">
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