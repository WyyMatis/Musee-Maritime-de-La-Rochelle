import {useEffect, useState} from "react";

const PictureGallery = () => {

    // Initialisation du tableau qui contiendra les données des bateaux
    let [boats, setBoats] = useState([]);

    useEffect(() => {
        // Déclaration de la fonction asynchrone récupérant les données
        const fetchData = async () => {
            // Récupération des données de tous les bateaux de l'API
            const data = await fetch(`http://localhost:8000/api/boats.json`);
            // Conversion de la requête en JSON
            const json = await data.json();
            // Envoie des données dans un tableau
            setBoats(json);
        }

        // Appele de la fonction récupérant les données
        fetchData()
            // Interception de toutes les erreurs éventuelles
            .catch(console.error);
    }, [])

    // Fonction qui pour chaque bateau affichent ses photos sous forme de galerie
    const renderedBoats = boats.map((boat, index)=>{

        const renderedImages = boat.images.map((image, index) => {
            return (
                <div key={index} className="imageGallery">
                    <img src={"../"+image.fileLocation} />
                </div>
            )
        });

        //affichage du conteneur d'images de chaque bateau
        return(
                <div key={index} className="dataContentContainer">
                    <div className="dataContentTitleContainer">
                        {boat.name}
                    </div>
                    {
                        (boat.images)?<><div className="imageGalleryConstainer">{renderedImages}</div></> :<></>
                    }
                </div>
        )
    });

    return (
        <>
            {renderedBoats}
        </>

    )
}

export default PictureGallery

