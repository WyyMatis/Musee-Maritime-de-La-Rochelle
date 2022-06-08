import './App.css';
import  "./features/windowOnload";
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import Layout from "./features/layout/layout";
import BoatLayout from "./features/layout/boatLayout";
import BoatDetails from "./features/boats/BoatDetails";
import Home from "./features/home/home";
import BoatsListPage from "./features/boatsList/boatsListPage";
import Schedule from "./features/schedule/schedule";
import WeatherPage from "./features/weather/weatherPage";
import BoatDetailsLayout from "./features/layout/BoatDetailsLayout";
import PictureGalleryPage from "./features/pictureGallery/PictureGalleryPage";

function App() {
  return (
      <BrowserRouter>
        <div className="App">
          <Routes>
              <Route path="/" element={<Layout />}>
                  <Route index element={<Home />}/>
                  <Route path="weather" element={<WeatherPage />}/>
                  <Route path="picture_gallery" element={<PictureGalleryPage />}/>
                  <Route path="boats" element={<BoatLayout />}>
                      <Route index element={<BoatsListPage />}/>
                      <Route path=":boatId" element={<BoatDetailsLayout />}>
                          <Route index element={<BoatDetails />} />
                          <Route path="schedule" element={<Schedule />}/>
                      </Route>
                  </Route>
                  <Route path="*" element={<><p>ERREUR : Aucune route correspondante</p></>} />
              </Route>
          </Routes>
        </div>
      </BrowserRouter>
  );
}

export default App;