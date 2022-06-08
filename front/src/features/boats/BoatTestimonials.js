//Composant affichant la partie sur les témoignages d'un bateau
//On récupère les données d'un bateau de l'API en paramètre du composant pour les afficher

const BoatTestimonials = (props) => {

    let renderTestimonials; //Affichage des témoignages

    /* Dès que les données de l'API sont reçues,
    *  affichage de l'auteur et du titre du témoignages,
    *  puis le contenu du témoignage soit une histoire, soit une image, soit un audio
    * */
    if (props !== undefined)
    {
        if (props.boat.testimonials !== undefined)
        {
            renderTestimonials = props.boat.testimonials.map((testimonial, index) => {
                return (
                    <div key={index} className="dataContentContainer">
                        <div className="dataContentTitleContainer">
                            {
                                (testimonial.picture)?<>{"Photo de "}{testimonial.author}</> :<>{testimonial.author}</>
                            }
                        </div>
                        <p className="testimonialTitle">{testimonial.title}</p>
                        {
                            (testimonial.story)?<p className="testimonialStory">{testimonial.story}</p> :<></>
                        }
                        {
                            (testimonial.picture)?<><div className="testimonialPicture"><img src={"../"+testimonial.picture} alt="image du témoignage"/></div></> :<></>
                        }
                        {
                            (testimonial.audio)?<audio className="testimonialAudio" src={"../"+testimonial.audio} controls preload="auto" /> :<></>
                        }
                    </div>
                )
            })
        }
    }

    return (
        <>
            <div id="WithBarre">
                <div id="SousTitle">
                    <h1>Témoignages</h1>
                </div>
                <div id="Barre"> </div>
            </div>
            <div className="testimonialsContainer">
                {renderTestimonials}
            </div>
        </>
    )
}

export default BoatTestimonials