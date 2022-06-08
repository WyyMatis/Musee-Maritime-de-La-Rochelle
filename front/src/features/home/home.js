import Map from "./map";
import Header from "../header/header";
import PracticalInfo from "./practicalInfo";

const Home = () => {
    return (
        <>
            <Header />
            <div className="main">
                <PracticalInfo />
                <Map/>
            </div>
        </>
    )
}

export default Home
