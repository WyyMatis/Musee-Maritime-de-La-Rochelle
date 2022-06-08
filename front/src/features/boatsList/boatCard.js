import '../../boatsList_style.css';
import {useEffect, useState} from "react";

// Composant affichant une "carte bateau" pour chaque bateau de l'api
const BoatCard = () => {

    // Recuperation des donnees de chaque bateau depuis l'api
    let [boats, setBoats] = useState([]);
    useEffect(()=>{
        fetch("http://localhost:8000/api/boats.json")
            .then(response => response.json())
            .then((value) => {
                setBoats(value);
            })
    }, []);

    // Creation d'une "carte bateau" pour chaque bateau recupere
    const renderedBoats = boats.map((boat, index )=>{
        return(
                <div key={index} className="card">
                    <div className="imageBoatListContainer" style={{backgroundImage:`url(../${boat.images[0].fileLocation})`}}>
                    </div>

                    <div  className="cardTitle">
                        {boat.name}
                    </div>

                    <a href={"/boats/" + boat.id} className="detailsButton">
                        Détails
                    </a>
                </div>
        )
    });

    // Affichage de toutes les "cartes bateau"
    return (
        <>
            {renderedBoats}
        </>
    )
}

export default BoatCard