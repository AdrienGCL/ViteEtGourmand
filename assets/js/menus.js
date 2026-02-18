const menusFile = "./assets/datas/menus.json";
const menusListeDiv = $("#menusListeDiv");
let menusListe;
let shortMenu="";
let currentMenu;
let currentMenuId;

function initMenus(){
    fetch(menusFile).then(function(response){
        responseClone = response.clone();
        return response.json();
    }).then(json => {
    // initialise les variables
    menusListe = json;

    // Déclenche les fonctions
    createMenuListe();
    getMenuId();
    // console.log(menusListe);
    })
}

function createMenuListe(){
    for(i=0; i<menusListe.length; i++){
        shortMenu = "<div class='menuShort margin-t-l'><div class='row justify-content-center'><p class='headline primary-text col-auto margin-b-s'>"+menusListe[i].titre+"</p></div><div class='row justify-content-center'><p class='text white-text col-auto m-0'>"+menusListe[i].description+"</p></div><div class='row justify-content-center padding-t-l'><p class='text white-text col-auto m-0'>Minimum "+menusListe[i].personnes_min+"</p><p class='headline secondary-text col-auto m-0'>"+menusListe[i].prix_par_personne+"€/personne</p></div><div class='row justify-content-center padding-t-l'><div class='bouton bg-primary p-0 d-flex justify-content-center'><a class='text dark-text text-decoration-underline m-0 p-0' href='./detail_menu.php?id="+menusListe[i].menu_id+"'>Voir le menu</a></div></div><div class='d-flex justify-content-center'><svg class='col-10 margin-t-l margin-b-0 p-0' height='2' xmlns='http://www.w3.org/2000/svg'><line class='separator' x1='0' y1='0' x2='100%' y2='0'/>Sorry, your browser does not support inline SVG.</svg></div></div>"
        $(menusListeDiv).append(shortMenu);
    }
}

function getMenuId(){
    let params = new URLSearchParams(document.location.search);
    if(params.has("id")){
        currentMenu = params.get("id");
        currentMenuId = Number(currentMenu) -1;

        fillMenuInfos();
    }
    else{}
}

function fillMenuInfos(){
    $("#menuTitre").html(menusListe[currentMenuId].titre);
    $("#menuNbMin").html(menusListe[currentMenuId].personnes_min+" personnes minimum");
    $("#menuTheme").html("Thème : "+menusListe[currentMenuId].theme);
    $("#menuRegime").html("Régime : "+menusListe[currentMenuId].regime);
    $("#menuDescription").html(menusListe[currentMenuId].description);
    $("#menuPlats").html(menusListe[currentMenuId].entree +"<br>-<br>"+menusListe[currentMenuId].plat+"<br>-<br>"+menusListe[currentMenuId].dessert);
    
    // $("#menuAllergenes").html(menusListe[currentMenuId].allergenes);

    $("#menuConditions").html("Conditions particulières :<br>"+menusListe[currentMenuId].conditions);
    $("#menuPrix").html(menusListe[currentMenuId].prix_par_personne+"€/personne");
    $("#menuStock").html("Quantité disponible : "+menusListe[currentMenuId].stock);

    $(menusListe[currentMenuId].allergenes).each(function(i){
        $("#menuAllergenes").append("<br>- "+menusListe[currentMenuId].allergenes[i]);
    })

    $(menusListe[currentMenuId].images).each(function(i){
        $("#menuImg").append("<img class='imgPlat p-0 mx-2' src='./assets/images/plats/"+menusListe[currentMenuId].images[i]+"' alt='photo d'un plat'>");
    })
}