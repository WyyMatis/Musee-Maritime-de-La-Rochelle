import {CustomPopup,MapContainer, TileLayer, Marker, Popup } from 'react-leaflet'
import { useState,useEffect } from "react";
import 'leaflet/dist/leaflet.css';
import L from 'leaflet';
import styled from "styled-components";
import icon from 'leaflet/dist/images/marker-icon.png';
import iconShadow from 'leaflet/dist/images/marker-shadow.png';

// ajout d'un icon pour la map, ici on utilise l'icon par default
let DefaultIcon = L.icon({
    iconUrl: icon,
    shadowUrl: iconShadow,
    popupAnchor: [12,0]
});

L.Marker.prototype.options.icon = DefaultIcon;

//fonction qui permet d'afficher la map ainsi que l'emplacement des bateaux en recuperant leurs informations via la base de donnée
const Map = () => {
    let [boats, setBoats] = useState([]);

    //fonction qui permet de recuperer tout les bateaux
    useEffect(()=>{
        fetch("http://localhost:8000/api/boats.json")
            .then(response => response.json())
            .then((value) => {
                setBoats(value);
            })
        },
        [])


    // fonction boats.map qui permet de parcourir tout les bateaux en assignant un marqueur pour chaque bateau
    const renderedBoats = boats.map((boat, index )=>{
        let comeInBoat;
        if (boat.isAvailable == true)
        {
            comeInBoat = <p>Monter à bord : <img src="images/Sign-check-icon.png" id={'validate'}/></p>;
        }
        else
        {
            comeInBoat = <p>Monter à bord : <img src="images/close_box_red.png" id={'close'} /></p>;
        }
            return(
                <Marker key={index} position={[boat.lat,boat.lon]}>
                    <Popup className="request-popup">
                        <div className="titleBoat"> <a href={"/boats/" + boat.id}>{boat.name}</a></div>
                        <p >{boat.description}</p>
                        {comeInBoat}
                    </Popup>
                </Marker>


            )
        });

    // ce return envoie la map zoomé sur le musée maritime
    return (
        <>
            <div className="contentContainer">
                <div className="contentTitleContainer">
                    <p>Map</p>
                </div>
                <div id={"mapContainer"}>
                    <MapContainer
                        center={[46.151009, -1.151626]}
                        zoom={18}
                        scrollWheelZoom={false}>
                        <TileLayer
                            attribution='&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                            url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
                        />
                        {renderedBoats}
                    </MapContainer>
                </div>
            </div>

        </>
    )
}


export default Map
