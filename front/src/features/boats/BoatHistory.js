const BoatHistory = (props) => {

    const historyHTML = props.boat.history;

    return (
        <>
            <div id="WithBarre">
                <div id="SousTitle">
                    <h1>Histoire</h1>
                </div>
                <div id="Barre"> </div>
            </div>
            <div id="History" dangerouslySetInnerHTML={{ __html: historyHTML }} >

            </div>
        </>
    )
}

export default BoatHistory