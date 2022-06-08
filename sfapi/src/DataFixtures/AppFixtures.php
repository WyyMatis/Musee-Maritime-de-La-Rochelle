<?php

namespace App\DataFixtures;

use App\Entity\Boat;
use App\Entity\Image;
use App\Entity\Testimonial;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        // Boats
        $France1 = new Boat();
        $France1->setName("France 1");
        $France1->setIsAvailable(true);
        $France1->setLat(46.151182);
        $France1->setLon(-1.151787);
        $France1->setDescription("Le 31 décembre 1985, au terme de sa dernière station au point Roméo, la frégate météorologique France 1 rallie le Port de La Pallice. Sa carrière au service de la météorologie s'achève. Patrick Schnepp convainc la municipalité de La Rochelle de racheter la frégate pour en faire le navire amiral du musée maritime de La Rochelle.");
        $France1->setHistory("Le France 1 a assuré ses missions pendant 27 années jusqu'à l'entrée en service des satellites météorologiques en 1985. Il devait alors opérer de longues stations sur les lieux de formation et de passage des pires dépressions au large de l'océan Atlantique. Fouetté par des vents atteignant parfois 100 nœuds (180 km/h), balancé par des creux de 20 mètres, ce navire, quel que soit le temps, a rempli sa mission pendant près de 30 ans, et a fait la pluie et le beau temps pour la Météorologie Nationale. <br/> <br/>
En station au point Roméo, Le France 1 a assuré la station au point géostationnaire R (ou Roméo, 47°N-17°O), situé à 600 miles à l'ouest de La Rochelle et atteint en deux jours et demi dans de bonnes conditions. La relève, effectuée entre vingt-quatre et vingt-six jours auprès de son sistership le France II, était un moment très attendu par l'équipage, d'autant que le nouveau venu apportait le courrier et des vivres frais. Parmi les missions de ce navire, les observations météorologiques représentent une grande part du travail. Mais d'autres services étaient assurés. Sondages hydrologiques, observations ornithologiques pour le suivi des migrations d'oiseaux, observations des mammifères marins et surtout l'assistance aux navires et personnes en danger, l'aide à la navigation aérienne, ainsi que la formation des élèves de l'école de la météorologie.");
        $France1->setNbPersonMax(50);
        $France1->setOpeningHours("10:00-12h30;13h30-17h30");
        $France1->setLaunchYear("1958");
        $France1->setType("Navire météorologique stationnaire");
        $France1->setMaterial("Acier");
        $France1->setBuyingPrice("1,2 MF");
        $France1->setRestoration("2004 à 2005");
        $France1->setLength("76,20 m");
        $France1->setMaxWidth("12,50 m");
        $France1->setMaxDraught("4,40 m");
        $manager->persist($France1);

        $Joshua = new Boat();
        $Joshua->setName("Joshua");
        $Joshua->setIsAvailable(true);
        $Joshua->setLat(46.151482);
        $Joshua->setLon(-1.151353);
        $Joshua->setDescription("Joshua est le ketch du navigateur Bernard Moitessier, construit en 1962 au chantier Meta, avec lequel il participe au Golden Globe Challenge et fait le tour du monde.");
        $Joshua->setHistory("Ketch rouge mythique, derrière lequel se dessine en filigrane la silhouette de Bernard Moitessier, grand écrivain de mer et premier homme à avoir eu dans son sillage un tour du monde et demi sur les mers du globe, en solitaire et sans escale. Ce voilier en acier de 12 mètres a été baptisé Joshua en hommage au célèbre navigateur Joshua Slocum. <br/> <br/>
À son bord, Bernard Moitessier participe en 1968 à la première édition du Golden Globe, première course autour du monde sans escale. Homme et bateau entrent tout droit dans la légende : après avoir doublé les Caps de Bonne Espérance, Lewin et Horn, Moitessier, largement en tête de tous les concurrents, décide de renoncer à la course et change de cap.");
        $Joshua->setNbPersonMax(20);
        $Joshua->setOpeningHours("10:00-12h30;13h30-17h30");
        $Joshua->setLaunchYear("1962");
        $Joshua->setType("Plaisance/voilier/ketch");
        $Joshua->setMaterial("Acier");
        $Joshua->setBuyingPrice("245 000 F (sponsoring)");
        $Joshua->setLength("16 m");
        $Joshua->setMaxWidth("3,68 m");
        $Joshua->setMaxDraught("1,60 m");
        $manager->persist($Joshua);

        $Drague = new Boat();
        $Drague->setName("Drague à vapeur TD6");
        $Drague->setIsAvailable(false);
        $Drague->setLat(46.158765);
        $Drague->setLon(-1.210208);
        $Drague->setDescription("Pour comprendre le fonctionnement de la Drague, nous vous invitons à venir voir dans l'exposition « La Rochelle née de la mer », le film de Hervé Marc « Un dragon nommé cure-molle » qui montre parfaitement la drague en activité.");
        $Drague->setHistory("Cet énorme bâtiment aidera à débarrasser le port de La Rochelle de nombreuses épaves qui l’encombrent. Capable d’extraire 400 m3 de vase par jour à une profondeur de 5.50 m, cet engin mesure 28,50 m de long. N’ayant pas de moteur de propulsion, La drague est remorquée par les porteurs de vase Saint-Marc et Bout Blanc. La carrière de D6 s’achève fin 1987. Elle est alors vouée à la casse. <br/> L’association de sauvegarde « TD6 », présidée par le fondateur du Musée maritime Patrick Schnepp décide de sauver la Drague à vapeur de la ferraille. Elle est classée au titre de Monuments Historiques depuis novembre 1992. ");
        $Drague->setNbPersonMax(50);
        $Drague->setOpeningHours("10:00-12h30;13h30-17h30");
        $Drague->setLaunchYear("1906");
        $Drague->setType("Machine à vapeur");
        $Drague->setMaterial("Acier");
        $Drague->setBuyingPrice("1 franc symbolique, DDE 17");
        $Drague->setRestoration("Travaux de conservation 2008");
        $Drague->setLength("42 m");
        $Drague->setMaxWidth("10 m");
        $Drague->setMaxDraught("1,85 m");
        $manager->persist($Drague);


        $Angoumois = new Boat();
        $Angoumois->setName("Angoumois");
        $Angoumois->setIsAvailable(true);
        $Angoumois->setLat(46.150682);
        $Angoumois->setLon(-1.151594);
        $Angoumois->setHistory("Ce chalutier construit en 1969 par les Ateliers et Chantiers de Dieppe a été commandé par Jean-Claude Menu, Armateur de l’Association Rochelaise de Pêche à Vapeur (ARPV). « L’Angoumois est le deuxième pêche arrière que j’ai fait construire » explique-t-il. « Il a été précédé par le Saintonge. Je voulais des chalutiers de 38 mètres pêche arrière avec rampe et entrepont. Cette disposition n’existait alors que sur les navires de 55 à 65 mètres. Les chantiers de Dieppe ont accepté de les réaliser. Ils se sont révélés d’excellents bateaux. D’ailleurs avec l’Angoumois, je n’ai jamais eu de pépin ». <br/> <br/>
De 1969 à 1978, le chalutier va travailler au nord, à l’ouest de l’Espagne, et à l’ouest du Portugal jusqu’à la latitude des Berlingues. À l’automne cependant, l’Angoumois fréquentait les eaux du sud Irlande.");
        $Angoumois->setNbPersonMax(20);
        $Angoumois->setOpeningHours("10:00-12h30;13h30-17h30");
        $Angoumois->setLaunchYear("1969");
        $Angoumois->setType("Chalutier pêche arrière à pont couvert");
        $Angoumois->setMaterial("Acier");
        $Angoumois->setBuyingPrice("Privé");
        $Angoumois->setRestoration("2009 à 2012");
        $Angoumois->setLength("38 m");
        $Angoumois->setMaxWidth("8,35 m");
        $Angoumois->setMaxDraught("4,35 m");
        $manager->persist($Angoumois);

        $SaintGilles = new Boat();
        $SaintGilles->setName("Saint Giles");
        $SaintGilles->setIsAvailable(true);
        $SaintGilles->setLat(46.151193);
        $SaintGilles->setLon(-1.151581);
        $SaintGilles->setDescription("Utilisé dès les années 60 comme remorqueur, Saint-Gilles servait à guider et tirer les navires entrant ou sortant des quais, principalement entre La Rochelle, Saint-Nazaire et Brest.");
        $SaintGilles->setHistory("Il fut construit en 1958 aux chantiers navals des ACRP à La Rochelle, où il ira par la suite à Saint-Nazaire commencer sa carrière. Il effectuera des remorquages pendant plus de treize ans et retournera à La Rochelle, au port de La Pallice où il sera désarmé en 1989. Après un accident, le président de l'Union des Remorqueurs de l'Océan demande alors au Musée Maritime de La Rochelle d'en assurer la conservation. Le remorqueur sera hissé sur le slipway en septembre 1994 pour une restauration de sa coque et de son pont. L’année d’après, en 1995, Saint-Gilles est classé « monument historique ». <br/> <br/>
Après plusieurs phases de restauration pour pouvoir le rendre à nouveau navigable, il a été remis à l'eau le 18 septembre 2009 et fait ainsi parti de l'un des huit navires de la flotte patrimoniale du musée maritime. <br/> <br/>
Avec sa coque noire et sa cheminée jaune, vous pourrez l’apercevoir près du France 1.");
        $SaintGilles->setNbPersonMax(50);
        $SaintGilles->setOpeningHours("10:00-12h30;13h30-17h30");
        $SaintGilles->setLaunchYear("1958");
        $SaintGilles->setType("Remorqueur portuaire et de haute mer");
        $SaintGilles->setMaterial("Acier");
        $SaintGilles->setBuyingPrice("150 000 F");
        $SaintGilles->setRestoration("2013");
        $SaintGilles->setLength("30,30 m");
        $SaintGilles->setMaxWidth("7,92 m");
        $SaintGilles->setMaxDraught("3,75 m");
        $manager->persist($SaintGilles);

        $Manuel_Joel = new Boat();
        $Manuel_Joel->setName("Manuel Joel");
        $Manuel_Joel->setIsAvailable(true);
        $Manuel_Joel->setLat(46.150715);
        $Manuel_Joel->setLon(-1.151937);
        $Manuel_Joel->setDescription("Amarré au quai du Musée maritime de La Rochelle, le Manuel Joël est un bateau en bois et l'un des derniers témoins des chalutiers pêche latérale, dits « classiques ».");
        $Manuel_Joel->setHistory("Construit en 1955 à l'emplacement actuel du musée maritime de La Rochelle, le Manuel Joël a pêché au large dans les eaux du Golfe de Gascogne jusqu'en 1979, puis a pratiqué la navigation côtière au large des Pertuis charentais. En 1992, après 37 années de navigation, son propriétaire, Henri Teillet, en fait don au musée maritime de La Rochelle. <br/> <br/>
L'aménagement intérieur est équipé d'un magasin, d'une machine, d'un poste d'équipage avec six couchettes, une cuisine à l'arrière de la passerelle, une cale à poissons et 20 tonnes de glace. <br/> <br/>
Reconnaissable par sa coque vert foncé, son liseré jaune et son intérieur crème, ce chalutier rejoint ainsi les unités du Musée maritime qui le fait classer au titre de Monument Historique en septembre 1994. <br/> <br/>
Le 30 mars 2017, le Manuel Joël coule dans le bassin des Chalutiers du musée maritime. Il sera sorti des eaux en mai et renfloué.");
        $Manuel_Joel->setNbPersonMax(35);
        $Manuel_Joel->setOpeningHours("10:00-12h30;13h30-17h30");
        $Manuel_Joel->setLaunchYear("1954");
        $Manuel_Joel->setType("Chalutier classique");
        $Manuel_Joel->setMaterial("Bois chêne");
        $Manuel_Joel->setBuyingPrice("Don");
        $Manuel_Joel->setLength("19,20 m");
        $Manuel_Joel->setMaxWidth("5,85 m");
        $Manuel_Joel->setMaxDraught("3,0 m");
        $manager->persist($Manuel_Joel);

        $Leverger = new Boat();
        $Leverger->setName("Leverger");
        $Leverger->setIsAvailable(true);
        $Leverger->setLat(46.150787);
        $Leverger->setLon(-1.152053);
        $Leverger->setHistory("Les Sociétés de Sauvetage en Mer sont le symbole vivant de la solidarité des gens de la mer, de leur abnégation, de leur courage et de leur dévouement. Cette association a pour vocation de secourir les personnes en mer et sur le littoral. Dès sa création, le musée maritime de La Rochelle a eu à cœur de doter sa flotte patrimoniale d’un canot de la SNSM. Appelés canots tous temps (CTT), ils sont emblématiques de la société de sauvetage car ils sont capables de sortir dans n’importe quelles conditions météorologiques pour effectuer des opérations de sauvetage. <br/> <br/>
À son arrivée à La Rochelle, l’équipe du musée maritime procède à un grand carénage. Le bateau est sorti de l’eau devant le France I, et est entièrement repeint et sa mécanique révisée. Il navigue très souvent pour participer à la sécurité des régates patrimoniales, pour embarquer le comité, ou participer à des hommages de la SNSM et à des manifestations nautiques.");
        $Leverger->setNbPersonMax(40);
        $Leverger->setOpeningHours("10:00-12h30;13h30-17h30");
        $Leverger->setLaunchYear("1954");
        $Leverger->setType("Canot de sauvetage tous temps");
        $Leverger->setMaterial("Acajou/cuivre");
        $Leverger->setBuyingPrice("Don");
        $Leverger->setLength("14,40 m");
        $Leverger->setMaxWidth("4,25 m");
        $manager->persist($Leverger);

        $Vedette_Duperre = new Boat();
        $Vedette_Duperre->setName("Vedette Duperré");
        $Vedette_Duperre->setIsAvailable(true);
        $Vedette_Duperre->setLat(46.151009);
        $Vedette_Duperre->setLon(-1.151626);
        $Vedette_Duperre->setDescription("Ce joli canot symbolise les liens de La Rochelle avec l'ex-escorteur d'escadre Duperré dont la ville était marraine. Confié au Musée maritime en 1994, il est classé au titre des monuments historiques depuis le 6 décembre 2012. Il profite actuellement d'une restauration complète.");
        $Vedette_Duperre->setHistory("Le 1er Juin 1992, l'escorteur d'escadre Duperré, le plus ancien des bâtiments de combat de la Marine prenait sa retraite après 36 ans de bons et loyaux services, et après avoir parcouru plus de 700 000 miles durant plus de 55 000 heures. La Marine Nationale cède alors la vedette de ce bâtiment d'escadre à La Rochelle. <br/> <br/>
Cette vedette est, en réalité, le canot-major de l'escorteur d'escadre Duperré (1954-1992). Construite à Cherboug-Octeville (Manche) en 1954 par la Direction des constructions et armes navales. C'est une vedette à moteur diesel faisant partie de la dotation réglementaire des bâtiments issus du programme naval de l'après-guerre. La drôme des navires de guerre de cette époque comprenait selon la taille des bâtiments, des chaloupes, des baleinières et des canots pour le commandant, les officiers ou les personnalités de passage lors des mouillages sur rade foraine et pour des services divers lors d'escales en France à ou l'étranger.");
        $Vedette_Duperre->setNbPersonMax(35);
        $Vedette_Duperre->setOpeningHours("10:00-12h30;13h30-17h30");
        $Vedette_Duperre->setLaunchYear("1954");
        $Vedette_Duperre->setType("« Canot Major Duperré » Type Vedette");
        $Vedette_Duperre->setMaterial("Bois");
        $Vedette_Duperre->setBuyingPrice("Don");
        $Vedette_Duperre->setLength("2,35 m");
        $Vedette_Duperre->setMaxWidth("4,25 m");
        $Vedette_Duperre->setMaxDraught("1 m");
        $manager->persist($Vedette_Duperre);

        //Testimonial
        $Andre_Lelay = new Testimonial();
        $Andre_Lelay->setAuthor("André Lelay");
        $Andre_Lelay->setTitle("Cuisinier à la pêche");
        $Andre_Lelay->setStory("J'ai été cuisinier à la pêche pendant environ 45 ans. J'ai embarqué sur l'Angoumois dans les années 72 grâce au second qui m'avait demandé : « Dédé, tiens, il manque un cuisinier sur l'Angoumois est-ce que ça t'intéresserait ? », j'ai dit «OK» ! On est allé voir le patron du bateau et l'armement et l'affaire était faite ! je suis resté 4 ans à bord de ce bon bateau. Tout se passait bien et j'étais très content : très bonne ambiance et bon équipage. Ce bateau, comme les trois quart des bateaux de cette époque là, était un pêche arrière. Il a été construit dans les années 68.");
        $Andre_Lelay->setBoat($Angoumois);
        $manager->persist($Andre_Lelay);

        $Lucien_Goupy = new Testimonial();
        $Lucien_Goupy->setAuthor("Lucien Goupy");
        $Lucien_Goupy->setTitle("De 1956 à 1978 à l’Union des Remorqueurs de l’Ouest");
        $Lucien_Goupy->setStory("En arrivant sur le Saint-Gilles, J’étais à la fois maître d’équipage et scaphandrier. Je dégageais une hélice ou une porte de bouée, des bricoles, quoi…Mon premier sauvetage avec le Saint-Gilles, c’était le Donai. Il était au mouillage. Il y a eu un coup de mauvais temps. Il a cassé ses amarres. Il avait même perdu son ancre. On l’a remorqué. J’ai aussi travaillé sur le Bayard, quand le Saint-Gilles est parti à Brest. »");
        $Lucien_Goupy->setBoat($SaintGilles);
        $manager->persist($Lucien_Goupy);

        $Maurice_Garet = new Testimonial();
        $Maurice_Garet->setAuthor("Maurice Garet");
        $Maurice_Garet->setTitle("Renaissance de la drague");
        $Maurice_Garet->setStory("J'espère que l'on pourra un jour remettre à flots cette drague qui a été sauvée de la ferraille par le Musée Maritime. C'est un monument ! Elle est centenaire ! J'en garde des bons souvenirs. Nous étions pratiquement tous issus de la pêche et il y avait une bonne entente entre nous et les ingénieurs de la DDE.");
        $Maurice_Garet->setBoat($Drague);
        $manager->persist($Maurice_Garet);

        $Philippe_Tijou = new Testimonial();
        $Philippe_Tijou->setAuthor("Philippe Tijou");
        $Philippe_Tijou->setTitle("Manuel-Joël - Travaux 2010");
        $Philippe_Tijou->setPicture("images/testimonials/joel.jpeg");
        $Philippe_Tijou->setBoat($Manuel_Joel);
        $manager->persist($Philippe_Tijou);

        $Michel_Bastard = new Testimonial();
        $Michel_Bastard->setAuthor("Michel Bastard");
        $Michel_Bastard->setTitle("Le Maori des Messageries Maritimes, vient saluer le France 1 avant de sombrer 10 heures plus tard, avec tout son équipage (39 hommes). Il n'y eut qu'un seul rescapé.");
        $Michel_Bastard->setPicture("images/testimonials/maori.jpg");
        $Michel_Bastard->setBoat($France1);
        $manager->persist($Michel_Bastard);

        $MarieClaire_Marlin = new Testimonial();
        $MarieClaire_Marlin->setAuthor("Marie-Claire Marlin");
        $MarieClaire_Marlin->setTitle("Joshua et le Belem.");
        $MarieClaire_Marlin->setPicture("images/testimonials/belem_joshua_1.jpg");
        $MarieClaire_Marlin->setBoat($Joshua);
        $manager->persist($MarieClaire_Marlin);

        $son1 = new Testimonial();
        $son1->setAuthor("Microsoft");
        $son1->setTitle("Son Windows XP");
        $son1->setAudio("images/testimonials/son1.mp3");
        $son1->setBoat($Leverger);
        $manager->persist($son1);

        $son2 = new Testimonial();
        $son2->setAuthor("Baloo");
        $son2->setTitle("Il en faut peut pour être heureux");
        $son2->setAudio("images/testimonials/baloo.mp3");
        $son2->setBoat($Vedette_Duperre);
        $manager->persist($son2);

        //Images
        $France1Image = new Image();
        $France1Image->setFileLocation("images/headerBoats/france1Baniere.jpeg");
        $France1Image->setBoat($France1);
        $manager->persist($France1Image);

        $AngoumoisImage = new Image();
        $AngoumoisImage->setFileLocation("images/headerBoats/angoumoisBaniere.jpeg");
        $AngoumoisImage->setBoat($Angoumois);
        $manager->persist($AngoumoisImage);

        $Manuel_JoelImage = new Image();
        $Manuel_JoelImage->setFileLocation("images/headerBoats/manuelJoelBaniere.jpeg");
        $Manuel_JoelImage->setBoat($Manuel_Joel);
        $manager->persist($Manuel_JoelImage);

        $DragueImage = new Image();
        $DragueImage->setFileLocation("images/headerBoats/dragueBaniere.jpeg");
        $DragueImage->setBoat($Drague);
        $manager->persist($DragueImage);

        $SaintGillesImage = new Image();
        $SaintGillesImage->setFileLocation("images/headerBoats/saintGillesBaniere.jpeg");
        $SaintGillesImage->setBoat($SaintGilles);
        $manager->persist($SaintGillesImage);

        $Vedette_DuperreImage = new Image();
        $Vedette_DuperreImage->setFileLocation("images/headerBoats/vedetteDuperreBaniere.jpeg");
        $Vedette_DuperreImage->setBoat($Vedette_Duperre);
        $manager->persist($Vedette_DuperreImage);

        $JoshuaImage = new Image();
        $JoshuaImage->setFileLocation("images/headerBoats/joshuaBaniere.jpeg");
        $JoshuaImage->setBoat($Joshua);
        $manager->persist($JoshuaImage);

        $LevergerImage = new Image();
        $LevergerImage->setFileLocation("images/headerBoats/levergerBaniere.jpeg");
        $LevergerImage->setBoat($Leverger);
        $manager->persist($LevergerImage);

        $manager->flush();
    }
}
