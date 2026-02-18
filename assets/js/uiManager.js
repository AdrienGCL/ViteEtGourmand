const profilBtn = $("#profilBtn");
const commandesBtn = $("#commandesBtn");
const commandesDiv = $("#commandesDiv");
const profilDiv = $("#profilDiv");

$(commandesBtn).on("click", function(){
    $(commandesBtn).addClass("bg-primary");
    $(commandesBtn).removeClass("primary-border");
    
    $("#commandesBtn > p").removeClass("primary-text");
    $("#commandesBtn > p").addClass("dark-text");

    $(profilBtn).removeClass("bg-primary");
    $(profilBtn).addClass("primary-border");
    
    $("#profilBtn > p").addClass("primary-text");
    $("#profilBtn > p").removeClass("dark-text");

    $(profilDiv).hide();
    $(commandesDiv).show();
})

$(profilBtn).on("click", function(){
    $(profilBtn).addClass("bg-primary");
    $(profilBtn).removeClass("primary-border");
    
    $("#profilBtn > p").removeClass("primary-text");
    $("#profilBtn > p").addClass("dark-text");
    
    $(commandesBtn).removeClass("bg-primary");
    $(commandesBtn).addClass("primary-border");
    
    $("#commandesBtn > p").addClass("primary-text");
    $("#commandesBtn > p").removeClass("dark-text");

    $(profilDiv).removeClass("d-none")
    $(profilDiv).show();
    $(commandesDiv).hide();
})