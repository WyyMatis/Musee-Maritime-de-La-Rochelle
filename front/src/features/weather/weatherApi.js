import {useEffect, useState} from "react";
import WeatherContainer from "./weatherContainer";

const WeatherApi = () => {
    // URL de l'api météo
    const url = "https://weather.visualcrossing.com/VisualCrossingWebServices/rest/services/timeline/la%20rochelle/next7days?unitGroup=metric&key=JDBNW7554CZTZM6WLLK72DGKW&contentType=json";

    // Creation élément state qui vas contenir le json retouner par l'api
    const [weather, setWeather] = useState(undefined);

    // Fonction useEffect pour lancer la récupration de l'api
    useEffect(() =>{
        fetch(url)
            .then((response) => response.json())
            .then((value) => {
                setWeather(value);
            })
            .catch((err) => {
                console.log(err.message);
            });
    },[]);

    /**
     * Return dans WeatherContainer le contenue de l'api pour les jour 3 prochain jours
     */
    return (
        <>

            {
                weather !== undefined ? <WeatherContainer dayWeather={weather.days[1]} dayName="demain"/> : <></>
            }
            {
                weather !== undefined ? <WeatherContainer dayWeather={weather.days[2]} /> : <></>
            }
            {
                weather !== undefined ? <WeatherContainer dayWeather={weather.days[3]} /> : <></>
            }

        </>
    );
};

export default WeatherApi;
