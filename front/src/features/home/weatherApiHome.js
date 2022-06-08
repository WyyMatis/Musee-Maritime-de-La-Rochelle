import React from 'react';
import {useEffect,useState} from "react";

const WeatherApiHome = () => {
    const url = "https://weather.visualcrossing.com/VisualCrossingWebServices/rest/services/timeline/la%20rochelle/next7days?unitGroup=metric&key=JDBNW7554CZTZM6WLLK72DGKW&contentType=json";

    const [weatherHome, setWeatherHome] = useState(undefined);

    useEffect(() =>{
        fetch(url)
            .then((response) => response.json())
            .then((value) => {
                setWeatherHome(value);
            })
            .catch((err) => {
                console.log(err.message);
            });
    },[]);
    return (
        <>
            <div className="meteoContainer">
                <div className="meteo">
                    <div>Matin</div>
                    {
                        weatherHome!== undefined ? <img className= "imgMeteo" src={'https://raw.githubusercontent.com/visualcrossing/WeatherIcons/main/SVG/2nd%20Set%20-%20Color/'+weatherHome.days[0].hours[8].icon+'.svg'} alt="La météo"/> : <></>
                    }
                    {
                        weatherHome!== undefined ? <div>{weatherHome.days[0].hours[8].temp}°</div> : <></>
                    }
                </div>
                <div className="meteo">
                    <div>Midi</div>
                    {
                        weatherHome!== undefined ? <img className= "imgMeteo" src={'https://raw.githubusercontent.com/visualcrossing/WeatherIcons/main/SVG/2nd%20Set%20-%20Color/'+weatherHome.days[0].hours[16].icon+'.svg'} alt="La météo"/> : <></>
                    }
                    {
                        weatherHome !== undefined ? <div>{weatherHome.days[0].hours[16].temp}°</div> : <></>
                    }
                </div>
            </div>
        </>
    );
};

export default WeatherApiHome;