import PictureGallery from "./PictureGallery"; // Importation du composant de la galerie de photos

//Composant réalisant le rendu de la galerie de photos
const PictureGalleryPage = () => {

    return (
        <>
            <div className="headerContainer">
                <div className="contentTitleHeaderContainer">
                    <p className="titleHeader">Galerie Photos</p>
                </div>
            </div>
            <div className="main">
                <PictureGallery />
            </div>
        </>

    )
}

export default PictureGalleryPage