import WeatherApiHome from "./weatherApiHome";

const PracticalInfo = () => {

    let renderState;      /* Variable contenant l'état du musée à afficher */
    let stateColor;       /* Variable contenant la couleur de l'état */
    let renderReOpening;  /* Variable contenant l'heure de réouvertuve du musée pendant la pause de midi */

    let currentDate = new Date(); /* Récupération de la date courante de l'utilisateur */

    /* Si on est lundi le musée affiche 'fermé' en rouge */
    if (currentDate.getDay() == 1)
    {
        renderState = "fermé";
        stateColor = {color: 'red'};
    }
    else
    {
        /* Si on est samedi les horaires sont de 13h30 à 17h30 */
        if (currentDate.getDay() == 6 && currentDate.getHours() >= 13 && currentDate.getHours() <= 18 )
        {
            if (currentDate.getHours() == 13 && currentDate.getMinutes() < 30 || currentDate.getHours() == 18 && currentDate.getMinutes() > 30)
            {
                renderState = "fermé";
                stateColor = {color: 'red'};
            }
            else
            {
                renderState = "ouvert";
                stateColor = {color: 'green'};
            }
        }
        else
        {
            /* Si on est de mardi, mercredi, jeudi vendredi ou dimanche les horaires sont de 10h à 12h30 puis 13h30 à 17h30 */
            if (currentDate.getHours() >= 10 && currentDate.getHours() <= 18)
            {
                /* À la pause de midi on affiche l'heure de réouverture du musée */
                if (currentDate.getHours() == 12 && currentDate.getMinutes() > 30 || currentDate.getHours() == 13 && currentDate.getMinutes() < 30)
                {
                    renderState = "fermé";
                    stateColor = {color: 'red'};
                    renderReOpening = "(Ouvre à 13h30)";
                }
                else if (currentDate.getHours() == 17 && currentDate.getMinutes() > 30)
                {
                    renderState = "fermé";
                    stateColor = {color: 'red'};
                }
                else
                {
                    renderState = "ouvert";
                    stateColor = {color: 'green'};
                }
            }
            else
            {
                renderState = "fermé";
                stateColor = {color: 'red'};
            }
        }
    }

    /* Retourne l'affichage des infos pratiques */
    return (
        <>
            <div className="contentContainer">
                <div className="contentTitleContainer">
                    <p>Infos Pratiques</p>
                </div>
                <WeatherApiHome />
                <p className="infoMusee">Le musée est actuellement <span style={stateColor}>{renderState}</span> ! <span>{renderReOpening}</span></p>
            </div>
        </>
    )
}

export default PracticalInfo
