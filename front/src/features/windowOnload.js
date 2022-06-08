// fonction permettant d'afficher/cacher la navbar au clic de l'utilisateur
function navBar()
{
    // récupération du bouton pour créer l'evenement au click sur celui-ci
    let bouton = document.getElementById('bouton');

    // récupération du conteneur (avec les liens) a déplier/replier
    let nav = document.getElementById('replier');

    // gestionnaire d'evenement au clic sur le bouton
    bouton.onclick = function(){

        if(nav.style.display==="none"){

            nav.style.display="block";

        }else{
            nav.style.display="none";
        }
    };
}

function buttonEffect()
{
    // récupération du bouton pour créer l'evenement au click sur celui-ci
    let buttonDay = document.getElementById('buttonDay');
    let buttonReservMorn = document.getElementById('buttonReservMorn');
    let buttonReservAfter = document.getElementById('buttonReservAfter');

    let morning = document.getElementById('morning');
    let morningReserv = document.getElementById('morningReserv');

    let afternoon = document.getElementById('afternoon');
    let afternoonReserv = document.getElementById('afternoonReserv');

    // gestionnaire d'evenement au clic sur le bouton
    buttonDay.onclick = function(){

        if(morning.style.display==="none"){
            morning.style.display="flex";
            afternoon.style.display="flex";
        }
        else{
            morning.style.display="none";
            afternoon.style.display="none";
        }
    };

    buttonReservMorn.onclick = function(){

        if(morningReserv.style.display==="none"){
            morningReserv.style.display="flex";
        }
        else{
            morningReserv.style.display="none";
        }
    };

    buttonReservAfter.onclick = function(){

        if(afternoonReserv.style.display==="none"){
            afternoonReserv.style.display="flex";
        }
        else{
            afternoonReserv.style.display="none";
        }
    };
}

window.onload=function (){
    navBar();
    buttonEffect();
};