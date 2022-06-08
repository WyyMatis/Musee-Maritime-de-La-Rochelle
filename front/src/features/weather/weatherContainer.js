const WeatherContainer = (props) => {

    /**
     *  Fonction qui tansforme la date du jour en nom du jour
     * @param dateStr
     * @param locale
     * @returns {string}
     */
    const getDayName = (dateStr, locale) => {
        var date = new Date(dateStr);
        return date.toLocaleDateString(locale, { weekday: 'long' });
    }

    /**
     * affichage de la météo retouner par l'api qui a été mite dans le props
     */
    return (
        <>
            <div className="contentContainer">
                <div className="contentTitleContainer">
                    { //
                        props.dayName == "demain" ? <p>demain</p> : <p> {getDayName(props.dayWeather.datetime)} </p>
                    }
                </div>
                <div className="meteoContainer">
                    <div className="meteo">
                        <div>Matin</div>
                        <img className= "imgMeteo" src={'https://raw.githubusercontent.com/visualcrossing/WeatherIcons/main/SVG/2nd%20Set%20-%20Color/'+props.dayWeather.hours[8].icon+'.svg'} alt="La météo"/>
                        <div>{props.dayWeather.hours[8].temp}°</div>
                    </div>
                    <div className="meteo">
                        <div>Midi</div>
                        <img className="imgMeteo" src={'https://raw.githubusercontent.com/visualcrossing/WeatherIcons/main/SVG/2nd%20Set%20-%20Color/'+props.dayWeather.hours[16].icon+'.svg'} alt="La météo"/>
                        <div>{props.dayWeather.hours[16].temp}°</div>
                    </div>
                </div>
            </div>
        </>
    );
};

export default WeatherContainer;
