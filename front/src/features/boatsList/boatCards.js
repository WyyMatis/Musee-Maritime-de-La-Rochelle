import '../../boatsList_style.css';
import BoatCard from "./boatCard";

// Composant contenant toutes les "cartes bateau"
const BoatCards = () => {
    return (
        <>
            <div className="boatCardsContainer">
                <BoatCard/>
            </div>
        </>
    )
}

export default BoatCards