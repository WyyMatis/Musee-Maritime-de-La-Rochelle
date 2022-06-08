import {Link} from "react-router-dom";

const Navbar = () => {
    return (
        <>
            {/*Creation de la navbar avec 2 éléments principaux : */}
            {/* - le conteneur contenant tout les liens et pouvant être replier */}
            {/* - la balise image présente toujours et permettant de déplier le conteneur au clic */}
            {/* La navbar est présente sur toutes les pages*/}
            <div className="Navbar">
                {/*On cache par défaut (replie) la navbar grâce au display */}
                <div id="replier" style={{display: 'none'}}>
                    <div><Link to={"/"}>Accueil</Link></div>
                    <div><Link to={"/weather"}>Météo</Link></div>
                    <div><Link to={"/boats"}>Liste bateau "la flotte"</Link></div>
                    <div><Link to={"/picture_gallery"}>Galerie de photos</Link></div>
                </div>
                {/*La source de l'image contient la variable d'environnement "process.env.PUBLIC_URL" */}
                {/*afin d'avoir accès au logo via n'importe quel page et évitant les problèmes d'accès*/}
                <div id="bouton">
                    <img src={process.env.PUBLIC_URL + '/menu.png'} width={"25px"} height={"25px"}/>
                </div>
            </div>

        </>
    )
}

export default Navbar

