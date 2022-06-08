const BoatDescription = (props) => {

    return (
        <>
            {
                props !== undefined ?<>
                    {
                        (props.boat.description)?<><div id="Description"><p>{props.boat.description}</p></div></> :<></>
                    }</> :<></>
            }
        </>
    )
}

export default BoatDescription