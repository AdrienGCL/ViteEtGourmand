<?php require_once __DIR__. "/templates/header.php"; ?>

        <main>
            <div class="row justify-content-center margin-t-l">
                <p class="col-auto headline primary-text m-0">Bienvenue [username]</p>
            </div>
            <div class="row justify-content-center margin-t-l">
                <div class="col-10 d-flex">
                    <div class="bouton bg-primary p-0 d-flex justify-content-center">
                        <p class="text dark-text text-decoration-underline m-0 p-0">Mes commandes</p>
                    </div>
                    <div class="bouton primary-border p-0 d-flex justify-content-center margin-l-m">
                        <p class="text primary-text text-decoration-underline m-0 p-0">Mon profil</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center margin-t-l">
                <div class="col-10">
                    <div class="row bg-extra-dark">
                        <div class="row margin-t-l margin-b-l">
                            <p class="col-auto headline primary-text m-0">En attente de validation (nb)</p>
                        </div>
                        <div class="row margin-b-s align-items-center justify-content-between">
                            <a class="col text white-text m-0 fit" href="">Commande n° xxxxx du xx/xx/xxxx</a>
                            <p class="col text white-text m-0 fit text-center">En attente</p>
                            <div class="col d-flex m-0 justify-content-end">
                                <div class="modify-btn primary-border padding-xs radius-m">
                                    <i class="bi bi-pencil-fill primary-text fit"></i>
                                </div>
                                <div class="modify-btn border-tertiary padding-xs radius-m margin-l-s">
                                    <i class="bi bi-trash-fill tertiary-text fit"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center justify-content-between">
                            <a class="col text white-text m-0 fit" href="">Commande n° xxxxx du xx/xx/xxxx</a>
                            <p class="col text white-text m-0 fit text-center">En attente</p>
                            <div class="col d-flex m-0 justify-content-end">
                                <div class="modify-btn primary-border padding-xs radius-m">
                                    <i class="bi bi-pencil-fill primary-text fit"></i>
                                </div>
                                <div class="modify-btn border-tertiary padding-xs radius-m margin-l-s">
                                    <i class="bi bi-trash-fill tertiary-text fit"></i>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center margin-t-l">
                            <svg class="col margin-b-0 p-0" height="2" xmlns="http://www.w3.org/2000/svg">
                                <line class="separator" x1="0" y1="0" x2="100%" y2="0"/>
                                Sorry, your browser does not support inline SVG.
                            </svg>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row margin-t-l margin-b-l">
                            <p class="col-auto headline primary-text m-0">En cours (nb)</p>
                        </div>
                        <div class="row align-items-center justify-content-between">
                            <a class="col text white-text m-0 fit" href="">Commande n° xxxxx du xx/xx/xxxx</a>
                            <p class="col text white-text m-0 fit text-center">En préparation</p>
                            <div class="col d-flex m-0 justify-content-end"></div>
                        </div>
                        <div class="d-flex justify-content-center margin-t-l">
                            <svg class="col margin-b-0 p-0" height="2" xmlns="http://www.w3.org/2000/svg">
                                <line class="separator" x1="0" y1="0" x2="100%" y2="0"/>
                                Sorry, your browser does not support inline SVG.
                            </svg>
                        </div>
                    </div>
                    <div class="row bg-extra-dark">
                        <div class="row margin-t-l margin-b-l">
                            <p class="col-auto headline primary-text m-0">Terminées (nb)</p>
                        </div>
                        <div class="row align-items-center justify-content-between">
                            <a class="col text white-text m-0 fit" href="">Commande n° xxxxx du xx/xx/xxxx</a>
                        </div>
                        <div class="row align-items-center justify-content-between">
                            <a class="col text white-text m-0 fit" href="">Commande n° xxxxx du xx/xx/xxxx</a>
                        </div>
                        <div class="row align-items-center justify-content-between">
                            <a class="col text white-text m-0 fit" href="">Commande n° xxxxx du xx/xx/xxxx</a>
                        </div>
                        <div class="row align-items-center justify-content-between">
                            <a class="col text white-text m-0 fit" href="">Commande n° xxxxx du xx/xx/xxxx</a>
                        </div>
                        <div class="d-flex justify-content-center margin-t-l">
                            <svg class="col margin-b-0 p-0" height="2" xmlns="http://www.w3.org/2000/svg">
                                <line class="separator" x1="0" y1="0" x2="100%" y2="0"/>
                                Sorry, your browser does not support inline SVG.
                            </svg>
                        </div>
                    </div>
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