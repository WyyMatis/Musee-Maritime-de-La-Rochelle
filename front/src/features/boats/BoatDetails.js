import {useEffect, useState} from "react";
import { useParams } from "react-router-dom";
import ArrowForwardIcon from '@mui/icons-material/ArrowForward';

import BoatCharacteristics from "./BoatCharacteristics";
import BoatHistory from "./BoatHistory";
import BoatDescription from "./BoatDescription";
import BoatHeader from "./BoatHeader";
import BoatTestimonials from "./BoatTestimonials";

const BoatDetails = () => {

    let id  = useParams().boatId;

    let [boat, setBoat] = useState([]);

    useEffect(() => {
        // declare the async data fetching function
        const fetchData = async () => {
            // get the data from the api
            const data = await fetch(`http://localhost:8000/api/boats/${id}.json`);
            // convert the data to json
            const json = await data.json();

            // set state with the result
            setBoat(json);
        }

        // call the function
        fetchData()
            // make sure to catch any error
            .catch(console.error);
    }, [id])

    return (
        <>
            <BoatHeader boat={boat} />
            <BoatDescription boat={boat} />
            <BoatHistory boat={boat} />
            <BoatCharacteristics boat={boat} />
            <BoatTestimonials boat={boat} />
            <div className="scheduleButtonContainer">
                <a href={"/boats/"+id+"/schedule"} className="scheduleButton">Planning<span className="arrow"><ArrowForwardIcon/></span></a>
            </div>
        </>

    )
}

export default BoatDetails
