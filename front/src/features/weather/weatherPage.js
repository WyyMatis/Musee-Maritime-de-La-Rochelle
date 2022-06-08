import WeatherApi from "./weatherApi";

const WeatherPage = () => {
    /**
     * Appeller dans App.js pour afficher la page qui vas comtenir weatherApi
     */

    return (
        <>
            <div className="headerContainer">
                <div className="contentTitleHeaderContainer">
                    <p className="titleHeader">Météo</p>
                </div>
            </div>
            <div className="main">
                <WeatherApi/>
            </div>
        </>
    );
};

export default WeatherPage;
