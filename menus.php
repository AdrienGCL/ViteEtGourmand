<?php require_once __DIR__. "/templates/header.php"; ?>

        <main>
            <div class="row m-l-0 m-t-40 justify-content-center">
                <div class="col-10 m-0 p-0">
                    <div class="filter-d d-flex justify-content-center p-0 primary-text">
                        <p class="text-decoration-underline m-l-10">Filtrer</p>
                        <i class="bi bi-chevron-up m-l-10 m-r-10"></i>
                    </div>
                </div>
            </div>
            <div class="row m-l-0 p-40 justify-content-center bg-primary">
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
                    <div class="row m-0 p-0 justify-content-around"></div>
                </div>
            </div>

            <section>
                <div class="row justify-content-center p-t-40">
                    <div class="col-4 m-r-20 p-0">
                        <img class="img-main" src="./assets/images/equipe.jpg" alt="Photographie de l'équipe">
                    </div>
                    <article class="col-4 m-l-20 p-0">
                        <h2 class="row justify-content-center headline-d primary-text">L'équipe</h2>
                        <p class="mx-0 m-t-40 p-0 text-d white-text">Derrière Vite & Gourmand, il y a avant tout une équipe de professionnels passionnés, animés par le goût de l’excellence et le sens du détail.<br><br>À sa tête, Julie et José mettent leur expertise culinaire et leur parfaite connaissance de l’événementiel au service de prestations sur mesure. Leur maîtrise des techniques traditionnelles, alliée à une créativité constamment renouvelée, leur permet d’imaginer des créations élégantes, équilibrées et raffinées.<br><br>Autour d’eux, une brigade engagée et rigoureuse œuvre chaque jour avec précision et exigence. Cuisiniers, pâtissiers et personnel de service partagent des valeurs communes : sélection attentive des produits, maîtrise des savoir-faire, organisation irréprochable et sens du service attentif.<br><br>Chaque événement est préparé avec soin et coordination afin de garantir une expérience fluide, harmonieuse et mémorable. Chez Vite & Gourmand, l’excellence est avant tout un travail d’équipe.</p>
                    </article>
                </div>
                <div class="row justify-content-center p-t-40">
                    <div class="btn-d bg-primary p-0 d-flex justify-content-center">
                        <a class="text-d dark-text text-decoration-underline m-0 p-0" href="">Commander</a>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <svg class="col-10 m-t-40 m-b-0 p-0" height="2" xmlns="http://www.w3.org/2000/svg">
                        <line class="separator" x1="0" y1="0" x2="100%" y2="0"/>
                        Sorry, your browser does not support inline SVG.
                    </svg>
                </div>
            </section>
        </main>

<?php require_once __DIR__. "/templates/footer.php"; ?>