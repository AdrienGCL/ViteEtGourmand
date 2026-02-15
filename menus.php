<?php require_once __DIR__. "/templates/header.php"; ?>

        <main>
            <section>
                <div class="row m-l-0 m-t-40 justify-content-center">
                    <div class="col-10 m-0 p-0">
                        <div class="filter-d d-flex justify-content-center p-0 tertiary-text">
                            <p class="text-decoration-underline m-l-10">Filtrer</p>
                            <i class="bi bi-chevron-up m-l-10 m-r-10"></i>
                        </div>
                    </div>
                </div>
                <div class="row m-l-0 m-r-0 p-20 justify-content-center bg-secondary d-none">
                    <div class="col-10 m-0 p-0">
                        <div class="row m-0 p-0 justify-content-around">
                            <div class="col-auto d-flex bg-white p-10 m-0 radius-5 border-tertiary">
                                <input class="customInput" type="number" name="minPrice" id="minPrice" min="0" placeholder="Prix min">
                                <label class="dark-text" for="minPrice">€</label>
                            </div>
                            <div class="col-auto d-flex bg-white p-10 m-0 radius-5 border-tertiary">
                                <input class="customInput" type="number" name="maxPrice" id="maxPrice" min="0" placeholder="Prix max">
                                <label class="dark-text" for="maxPrice">€</label>
                            </div>
                            <div class="col-auto d-flex bg-white p-10 m-0 radius-5 border-tertiary">
                                <select class="customInput" name="themeList" id="themeList">
                                    <option value="">Thème</option>
                                    <option value="noel">Noël</option>
                                    <option value="paques">Pâques</option>
                                    <option value="classique">Classique</option>
                                    <option value="evenement">Evènement</option>
                                </select>
                            </div>
                            <div class="col-auto d-flex bg-white p-10 m-0 radius-5 border-tertiary">
                                <select class="customInput" name="regimeList" id="regimeList">
                                    <option value="">Régime</option>
                                    <option value="vegetarien">Végétarien</option>
                                    <option value="vegan">Vegan</option>
                                    <option value="classique">Classique</option>
                                </select>
                            </div>
                            <div class="col-auto d-flex bg-white p-10 m-0 radius-5 border-tertiary">
                                <input class="customInput" type="number" name="nbParts" id="nbParts" min="0" placeholder="Quantité">
                            </div>
                        </div>
                        <div class="row justify-content-center p-t-20">
                        <div class="btn-d bg-dark p-0 d-flex justify-content-center">
                            <a class="text-d primary-text text-decoration-underline m-0 p-0" href="">Rechercher</a>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
            
            <section>
                <div class="menuShort bg-extra-dark m-t-40">
                    <div class="row justify-content-center p-t-40">
                        <p class="headline-d primary-text col-auto m-b-10">Nom du menu</p>
                    </div>
                    <div class="row justify-content-center">
                        <p class="text-d white-text col-auto">Description du menu, des différents plats.</p>
                    </div>
                    <div class="row justify-content-center p-t-40">
                        <p class="text-d white-text col-auto m-0">Quantité minimum</p>
                        <p class="headline-d secondary-text col-auto m-0">Prix/pers</p>
                    </div>
                    <div class="row justify-content-center p-t-40">
                        <div class="btn-d bg-primary p-0 d-flex justify-content-center">
                            <a class="text-d dark-text text-decoration-underline m-0 p-0" href="">Voir le menu</a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <svg class="col-10 m-t-40 m-b-0 p-0" height="2" xmlns="http://www.w3.org/2000/svg">
                            <line class="separator" x1="0" y1="0" x2="100%" y2="0"/>
                            Sorry, your browser does not support inline SVG.
                        </svg>
                    </div>
                </div>
                <div class="menuShort bg-dark">
                    <div class="row justify-content-center p-t-40">
                        <p class="headline-d primary-text col-auto m-b-10">Nom du menu</p>
                    </div>
                    <div class="row justify-content-center">
                        <p class="text-d white-text col-auto">Description du menu, des différents plats.</p>
                    </div>
                    <div class="row justify-content-center p-t-40">
                        <p class="text-d white-text col-auto m-0">Quantité minimum</p>
                        <p class="headline-d secondary-text col-auto m-0">Prix/pers</p>
                    </div>
                    <div class="row justify-content-center p-t-40">
                        <div class="btn-d bg-primary p-0 d-flex justify-content-center">
                            <a class="text-d dark-text text-decoration-underline m-0 p-0" href="">Voir le menu</a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <svg class="col-10 m-t-40 m-b-0 p-0" height="2" xmlns="http://www.w3.org/2000/svg">
                            <line class="separator" x1="0" y1="0" x2="100%" y2="0"/>
                            Sorry, your browser does not support inline SVG.
                        </svg>
                    </div>
                </div>
                <div class="menuShort bg-extra-dark">
                    <div class="row justify-content-center p-t-40">
                        <p class="headline-d primary-text col-auto m-b-10">Nom du menu</p>
                    </div>
                    <div class="row justify-content-center">
                        <p class="text-d white-text col-auto">Description du menu, des différents plats.</p>
                    </div>
                    <div class="row justify-content-center p-t-40">
                        <p class="text-d white-text col-auto m-0">Quantité minimum</p>
                        <p class="headline-d secondary-text col-auto m-0">Prix/pers</p>
                    </div>
                    <div class="row justify-content-center p-t-40">
                        <div class="btn-d bg-primary p-0 d-flex justify-content-center">
                            <a class="text-d dark-text text-decoration-underline m-0 p-0" href="">Voir le menu</a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <svg class="col-10 m-t-40 m-b-0 p-0" height="2" xmlns="http://www.w3.org/2000/svg">
                            <line class="separator" x1="0" y1="0" x2="100%" y2="0"/>
                            Sorry, your browser does not support inline SVG.
                        </svg>
                    </div>
                </div>
            </section>
        </main>

<?php require_once __DIR__. "/templates/footer.php"; ?>