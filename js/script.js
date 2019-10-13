$('#forma1').submit(function(event){
    var ime 	= $.trim($('#ime').val());
    var email 	= $.trim($('#email').val());
    var poruka 	= $.trim($('#poruka').val());


    if(ime === ""){
        alert("Polje ime nije popunjeno");
        return false;
    }
    else if(email === ""){
        alert("Polje email nije popunjeno");
        return false;
    }
    else if(poruka === ""){
        alert("Polje poruka nije popunjeno!");
        return false;
    }
});

$( document ).ready(function() {
    $( "#ime").keypress(function(event) {
        var inputValue = event.which;
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)) {
            event.preventDefault();
        }
    });
});