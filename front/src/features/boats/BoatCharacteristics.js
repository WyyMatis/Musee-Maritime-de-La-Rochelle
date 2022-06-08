const BoatCharacteristics = (props) => {

    return (
        <>
            <div id="WithBarre">
                <div id="SousTitle">
                    <h1>Caractéristiques</h1>
                </div>
                <div id="Barre"> </div>
            </div>
            <table>
                <tbody id="Caracteristiques">
                {
                    props !== undefined ?<tr>
                        {
                            (props.boat.launchYear)?<><th>Année de lancement</th><td>{props.boat.launchYear}</td></> :<></>
                        }
                    </tr> :<></>
                }
                {
                    props !== undefined ?<tr>
                        {
                            (props.boat.type)?<><th>Type</th><td>{props.boat.type}</td></> :<></>
                        }
                    </tr> :<></>
                }
                {
                    props !== undefined ?<tr>
                        {
                            (props.boat.material)?<><th>Matériau</th><td>{props.boat.material}</td></> :<></>
                        }
                    </tr> :<></>
                }
                {
                    props !== undefined ?<tr>
                        {
                            (props.boat.restoration)?<><th>Restauration</th><td>{props.boat.restoration}</td></> :<></>
                        }
                    </tr> :<></>
                }
                {
                    props !== undefined ?<tr>
                        {
                            (props.boat.buyingPrice)?<><th>Prix d'achat</th><td>{props.boat.buyingPrice}</td></> :<></>
                        }
                    </tr> :<></>
                }
                {
                    props !== undefined ?<tr>
                        {
                            (props.boat.length)?<><th>Longueur</th><td>{props.boat.length}</td></> :<></>
                        }
                    </tr> :<></>
                }
                {
                    props !== undefined ?<tr>
                        {
                            (props.boat.maxWidth)?<><th>Maître bau</th><td>{props.boat.maxWidth}</td></> :<></>
                        }
                    </tr> :<></>
                }
                {
                    props !== undefined ?<tr>
                        {
                            (props.boat.maxDraught)?<><th>Tirant d'eau maxi</th><td>{props.boat.maxDraught}</td></> :<></>
                        }
                    </tr> :<></>
                }
                </tbody>
            </table>
        </>

    )
}

export default BoatCharacteristics