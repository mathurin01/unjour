<?php
// src/Qd/UnjourBundle/DataFixtures/ORM/Chronos.php

namespace Qd\UnjourBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Qd\UnjourBundle\Entity\Chrono;

class Chronos implements FixtureInterface
{
// Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {

        $mytab = array(
            10=> array('1914-08-01', '0000-00-00', 'L\'Allemagne déclare la guerre à la Russie.'),
11=> array('1914-08-01', '0000-00-00', 'Mobilisation générale en Allemagne.'),
12=> array('1914-08-02', '0000-00-00', 'Mobilisation générale en France.'),
13=> array('1914-08-02', '0000-00-00', 'Le Luxembourg est envahi par les troupes allemandes.'),
14=> array('1914-08-02', '0000-00-00', 'Ultimatum allemand à la Belgique, en vue d\'utiliser le territoire belge pour attaquer la France. Refus belge.'),
15=> array('1914-08-03', '0000-00-00', 'L\'Allemagne déclare la guerre à la France et à la Belgique'),
16=> array('1914-08-03', '0000-00-00', 'Premier bombardement aérien à Lunéville.'),
17=> array('1914-08-03', '0000-00-00', 'Les troupes allemandes pénètrent en Belgique par la région d\'Aix-la-Chapelle. Le roi des Belges lance un appel à la France et à la Grande-Bretagne, invoquant le traité de 1831 qui garantit la Belgique contre toute invasion et/ou annexion.'),
18=> array('1914-08-04', '1914-08-16', 'En Belgique : les forts de Liège appuyés par l\'armée belge combattant dans les intervalles se défendent avec acharnement.'),
19=> array('1914-08-04', '0000-00-00', 'Le Royaume-Uni répond favorablement à l\'appel du roi Albert 1er de Belgique et déclare la guerre à l\'Allemagne après la violation par les troupes allemandes de la neutralité belge prescrite par un traité que l\'Allemagne vient de renier en le traitant de « chiffon de papier » .'),
20=> array('1914-08-04', '0000-00-00', 'La France répond favorablement à l\'appel du roi des Belges, Raymond Poincaré président de la République française appelle à l\'Union sacrée devant les deux chambres parlementaires qui votent les crédits de guerre à l’unanimité.'),
21=> array('1914-08-04', '0000-00-00', 'Les députés allemands sociaux-démocrates, majoritaires, votent à l’unanimité les crédits de la guerre au Reichstag malgré leurs engagements contre la course aux armements.'),
22=> array('1914-08-06', '0000-00-00', 'L’Autriche-Hongrie déclare la guerre à la Russie.'),
23=> array('1914-08-06', '0000-00-00', 'Les troupes françaises font une offensive par le sud de l\'Alsace.'),
24=> array('1914-08-07', '0000-00-00', 'Thann, sous domination allemande depuis 1871, est libérée et devient, jusqu\'à la fin de la guerre, la capitale d\'une portion de territoire alsacien redevenue française.'),
25=> array('1914-08-08', '0000-00-00', 'Les Français poursuivent l\'offensive vers Mulhouse qui est reprise par les Allemands deux jours plus tard.'),
26=> array('1914-08-08', '0000-00-00', 'Union sacrée en Russie : la Douma vote les crédits de guerre. Division des socialistes (ralliement à l’Union sacrée, internationalisme, défaitisme).'),
27=> array('1914-08-11', '0000-00-00', 'La France déclare la guerre à l’Autriche-Hongrie.'),
28=> array('1914-08-12', '0000-00-00', 'Mobilisation générale en Russie.'),
29=> array('1914-08-12', '0000-00-00', 'Victoire de l\'armée belge dans une bataille de cavalerie où les Belges sont appuyés par de l\'infanterie. C\'est une bataille d\'arrêt, la bataille de Haelen, au bord de la Gette qui permet de sauver le gros de l\'armée belge en retraite vers la place forte d\'Anvers où elle possède ses approvisionnements en munitions et en vivres.'),
30=> array('1914-08-14', '0000-00-00', 'En Lorraine, début de la Bataille de Morhange.'),
31=> array('1914-08-15', '0000-00-00', 'Création de l’Office des matières premières de guerre en Allemagne dirigée par Walter Rathenau, président d\'AEG.'),
32=> array('1914-08-16', '0000-00-00', 'Prise de Liège par les troupes allemandes, la ville n\'étant plus défendue après la chute des forts.'),
33=> array('1914-08-17', '0000-00-00', 'Offensive russe en Prusse orientale.'),
34=> array('1914-08-17', '0000-00-00', 'Victoire allemande à la bataille de Stalluponen.'),
35=> array('1914-08-19', '0000-00-00', 'Les troupes allemandes entrent à Bruxelles.'),
36=> array('1914-08-19', '0000-00-00', 'En Alsace, les Français reprennent l\'offensive autour de Mulhouse et se rencontrent à Dornach.'),
37=> array('1914-08-19', '0000-00-00', 'Échec de la percée française en Lorraine 19-20 août). Les IIIe et IVe armées se replient derrière la Meuse.'),
38=> array('1914-08-19', '0000-00-00', 'Woodrow Wilson, président des États-Unis d\'Amérique, proclame la neutralité de son pays dans le conflit.'),
39=> array('1914-08-20', '0000-00-00', 'Échecs autrichiens sur le front russe à Gumbinnen face aux troupes du général Paul von Rennenkampf.'),
40=> array('1914-08-20', '0000-00-00', 'Chute des forts de Namur. À la suite de quoi, l’armée belge du sud ne pouvant rejoindre le corps belge principal se replie sur la France tandis que le gros des Belges continue à reculer tout en combattant pour gagner la place forte d\'Anvers.'),
41=> array('1914-08-21', '0000-00-00', 'La France perd la Bataille des Frontières 21-23 août).'),
42=> array('1914-08-21', '0000-00-00', 'Lors de la contre-attaque à Morhange, la Ire armée du général Auguste Dubail et de la IIe armée françaises du général de Castelnau sont obligée de se replier.'),
43=> array('1914-08-21', '0000-00-00', 'début de la Bataille de Charleroi.'),
44=> array('1914-08-21', '0000-00-00', 'Bataille des Ardennes : repli de la IVe armée française du général de Langle de Cary.'),
45=> array('1914-08-22', '0000-00-00', 'Massacre de Tamines, en Belgique, où les troupes allemandes ravagent la ville, tuant et blessant des centaines de civils.'),
46=> array('1914-08-23', '0000-00-00', 'Fin de la Bataille de Charleroi : repli de la Ve armée française du général Charles Lanrezac.'),
47=> array('1914-08-23', '0000-00-00', 'Bataille de Mons : repli des troupes britanniques.'),
48=> array('1914-08-24', '0000-00-00', 'Échecs autrichiens de Conrad von Hötzendorf sur le front serbe dans les monts Cer.'),
49=> array('1914-08-24', '0000-00-00', 'Bataille de la trouée de Charmes'),
50=> array('1914-08-24', '0000-00-00', 'Début de la Grande Retraite'),
51=> array('1914-08-25', '1914-08-26', 'Première sortie de l\'armée belge du camp retranché d\'Anvers, retenant 150 000 soldats allemands avec une importante artillerie de siège, soulageant ainsi la pression sur l\'armée française suivant le rôle assigné par le général Joffre à l\'armée belge.'),
52=> array('1914-08-25', '0000-00-00', 'Repli des Alliés sur le Grand-Couronné au nord-est de Nancy.'),
53=> array('1914-08-25', '0000-00-00', 'Bataille de Rozelieures.'),
54=> array('1914-08-25', '0000-00-00', 'Fin de la bataille de Lorraine qui se termine par un statu quo.'),
55=> array('1914-08-26', '1914-08-31', 'Bataille de Tannenberg : les Allemands stoppent l\'offensive russe.'),
56=> array('1914-08-26', '0000-00-00', 'Poursuite de la retraite de l\'aile gauche française.'),
57=> array('1914-08-26', '0000-00-00', 'Constitution de la VIe armée française du général Maunoury placée au Nord-Est de Paris, à l\'extrême gauche du dispositif allié.'),
58=> array('1914-08-26', '0000-00-00', 'Le général Gallieni nommé gouverneur de Paris.'),
59=> array('1914-08-26', '0000-00-00', 'Démission du gouvernement français présidé par René Viviani qui forme un ministère de Défense Nationale . L\'Union sacrée se concrétise en France par l\'entrée des socialistes au gouvernement avec Delcassé aux Affaires étrangères et Millerand à la Guerre.'),
60=> array('1914-08-26', '0000-00-00', 'Capitulation des troupes coloniales allemandes à Kamina au Togo.'),
61=> array('1914-08-28', '0000-00-00', 'Début du siège de Maubeuge.'),
62=> array('1914-08-29', '0000-00-00', 'Bataille de Guise : La Ve armée française du général Lanrezac fait face à l\'aile droite allemande et évite aux troupes britanniques d\'être encerclées.'),
63=> array('1914-08-29', '1914-09-02', 'Le gouvernement français quitte Paris menacée par l\'avancée allemande et s\'installe à Bordeaux laissant la capitale sous le gouvernement militaire du général Gallieni.'),
64=> array('1914-08-31', '0000-00-00', 'Les Franco-Britanniques franchissent la Marne.'),
65=> array('1914-08-31', '0000-00-00', 'L\'aile droite allemande, Ire armée du général von Kluck et IIe armée du général Bülow, atteint Compiègne et La Fère.'),
66=> array('1914-08-31', '0000-00-00', 'Les Allemands sont signalés à Roye et Noyon, à proximité de Senlis.'),
68=> array('1914-09-03', '0000-00-00', 'Offensive russe en Galicie orientale : prise de Lvov (Galicie autrichienne).'),
69=> array('1914-09-03', '0000-00-00', 'Von Kluck passe la Marne à Château-Thierry avec son aile gauche.'),
70=> array('1914-09-03', '0000-00-00', 'Le général Lanrezac est remplacé au commandement de la Ve armée par le général Franchet d\'Esperey.'),
71=> array('1914-09-04', '0000-00-00', 'L\'armée allemande occupe Reims.'),
72=> array('1914-09-04', '0000-00-00', 'le général Gallieni réquisitionne les taxis parisiens pour le transport des troupes.'),
73=> array('1914-09-04', '0000-00-00', 'Le général Gallieni donne l\'ordre au général Maunoury, commandant de la VIe armée de se porter le lendemain au nord de Meaux pour attaquer le flanc droit de la Ire armée du général von Kluck.'),
74=> array('1914-09-05', '0000-00-00', 'Deuxième sortie de l\'armée belge d\'Anvers.'),
75=> array('1914-09-06', '0000-00-00', 'Première bataille de la Marne, menée par Maunoury, von Kluck ramène sa droite au nord de la Marne. Les Anglais et Franchet d\'Esperey le suivent.'),
76=> array('1914-09-07', '0000-00-00', 'von Kluck replie son centre sur l\'Ourcq. Une brèche se forme entre lui et la IIe armée de von Bülow. Von Kluck doit faire face à Maunoury sur sa droite, à Franchet d\'Esperey sur sa gauche. von Bülow est attaqué au centre et sur sa droite par Franchet d\'Esperey et menacé sur son aile gauche par la IXe armée de Foch.'),
77=> array('1914-09-08', '0000-00-00', 'Victoire allemande des lacs de Mazurie en Pologne sur les Russes, qui confirme la victoire allemande de Tannenberg (Stebark) (fin le 15 septembre). Les Russes se replient vers la frontière russo-allemande originelle.'),
78=> array('1914-09-08', '0000-00-00', 'Maubeuge est prise par les troupes allemandes.'),
79=> array('1914-09-08', '0000-00-00', 'Les Russes écrasent les Autrichiens à Lemberg (fin le 12 septembre).'),
80=> array('1914-09-08', '0000-00-00', 'Occupation de la Galicie orientale jusqu’au San et contrôle des cols des Carpates par l\'armée russe en octobre.'),
81=> array('1914-09-09', '0000-00-00', 'Le général von Moltke ordonne la retraite des armées de l\'aile droite allemande et l\'arrêt de l\'offensive contre le Grand-Couronné où Castelnau résiste depuis le 5.'),
82=> array('1914-09-10', '1914-09-13', 'Retraite générale des armées allemandes jusqu’à l’Aisne, la Vesle et la Suippe.'),
83=> array('1914-09-28', '0000-00-00', 'Siège d\'Anvers. Après la chute des deux ceintures fortifiées entourant la ville à distance, les troupes allemandes commencent l\'attaque du noyau urbain.'),
84=> array('1914-10-01', '1914-10-09', 'Bataille d\'Arras'),
85=> array('1914-10-03', '0000-00-00', 'Un premier contingent canadien (de 32 000 hommes) est mobilisé pour aller se battre en Europe.'),
86=> array('1914-10-04', '0000-00-00', 'Publication en Allemagne du Manifeste des 93 qui montre le soutien univoque des intellectuels allemands à la politique impériale.'),
87=> array('1914-10-05', '0000-00-00', 'Premier duel aérien de la guerre près de Reims : un biplace Aviatik allemand est abattu à la mitrailleuse par des Français à bord d\'un avion Voisin.'),
88=> array('1914-10-09', '0000-00-00', 'L\'armée belge se retire d\'Anvers. Les derniers forts de la rive gauche, protégeant la retraite vers la côte, succombent un à un.'),
89=> array('1914-10-19', '0000-00-00', '« Course à la mer » entre les Allemands, les Belges, les Français et les Britanniques (oct.-nov.), les Allemands cherchent à atteindre Dunkerque, Boulogne-sur-Mer et Calais.'),
90=> array('1914-10-19', '0000-00-00', 'Bataille de l\'Yser derrière les inondations tendues par les Belges (fin le 17 novembre).'),
91=> array('1914-10-20', '0000-00-00', 'Les Allemands battent en retraite devant les Russes dans la boucle de la Vistule.'),
92=> array('1914-10-27', '0000-00-00', 'Bataille d\'Ypres. Vaste offensive allemande déclenchée au nord, à l’est et au sud d’Ypres en Belgique.'),
93=> array('1914-10-29', '1914-11-20', 'Les Turcs bombardent les côtes russes de la mer Noire.'),
94=> array('1914-11-01', '0000-00-00', 'Von Hindenburg devient commandant en chef des armées allemandes sur le front de l’Est.'),
95=> array('1914-11-02', '0000-00-00', 'La Serbie déclare la guerre à l\'Empire ottoman qui a rejoint les Allemands et les Autrichiens.'),
96=> array('1914-11-03', '0000-00-00', 'L’amirauté britannique fait miner la mer du Nord déclarée « zone de guerre ». Le Royaume-Uni fait confiance à sa marine pour protéger le pays et établir un blocus économique. Il ne possède en effet qu’une armée de métier de 250 000 hommes dispersés à travers le monde dont 60 000 seulement sont prêts à partir pour la France.'),
97=> array('1914-11-05', '0000-00-00', 'Les Britanniques annexent Chypre, qu\'ils administraient jusque-là sous souveraineté ottomane.'),
98=> array('1914-11-06', '0000-00-00', 'Blocus économique de l’Allemagne.'),
99=> array('1914-11-10', '0000-00-00', 'Les Russes doivent cesser l’offensive devant la poussée des troupes allemandes sur Lodz.'),
100=> array('1914-11-15', '0000-00-00', 'Mêlée des Flandres. Victoire des armées française, britannique et belge autour d’Ypres et de Dixmude.'),
102=> array('1914-12-06', '0000-00-00', 'Prise de Lodz par les Allemands. L\'offensive allemande en Pologne russe est arrêtée devant Varsovie.'),
103=> array('1914-12-07', '0000-00-00', 'Victoire serbe du général Putnik : les Austro-hongrois doivent se replier vers Belgrade.'),
104=> array('1914-12-08', '0000-00-00', 'Retour du gouvernement français à Paris.'),
105=> array('1914-12-15', '0000-00-00', 'La IVe armée française lance l’offensive en Champagne.'),
106=> array('1914-12-15', '0000-00-00', 'Guerre des tranchées 650 km), de la mer du Nord à la Suisse.'),
107=> array('1914-12-15', '0000-00-00', 'Le roi de Serbie rentre à Belgrade.'),
108=> array('1914-12-25', '0000-00-00', 'Des militaires allemands, britanniques et français sympathisent dans les tranchées lors de la Trêve de Noël.'),
109=> array('1914-12-25', '0000-00-00', 'Après s’être opposés à la guerre, (les chefs politiques hongrois) soutiennent l’effort de guerre autrichien principalement parce qu’ils craignent qu’une victoire russe n’entraîne la sécession des minorités slaves de Hongrie, puis le démantèlement du pays. 3 800 000 soldats seront mobilisés en Hongrie ; 661 000 seront tués, plus de 700 000 blessés et autant faits prisonniers.'),
1118=> array('1914-08-02', '00:00:00', 'L\'Italie déclare sa neutralité.'),
1119=> array('1914-08-01', '00:00:00', 'L\'Allemagne et l\'Empire ottoman signent un traité secret d\'alliance.'),
1120=> array('1914-08-02', '00:00:00', 'Escarmouche à Joncherey , première action militaire sur le front occidental.\nMort du premier soldat Français.', 1, 'soldat', 1),
1121=> array('1914-08-04', '00:00:00', 'Les États-Unis proclame la neutralité.'),
1122=> array('1914-08-05', '00:00:00', 'Le Monténégro déclare la guerre à l\'Autriche-Hongrie.'),
1123=> array('1914-08-05', '00:00:00', 'L\'Empire ottoman ferme le détroit des Dardanelles.'),
1124=> array('1914-08-06', '00:00:00', 'La Serbie déclare la guerre à l\'Allemagne.'),
1125=> array('1914-08-07', '00:00:00', 'Le Corps expéditionnaire britannique arrive en France.'),
1126=> array('1914-08-09', '00:00:00', 'Le Monténégro déclare la guerre à l\'Allemagne.'),
1127=> array('1914-08-09', '00:00:00', 'La campagne du Togo commence.'),
1128=> array('1914-08-12', '00:00:00', 'The Royaume-Uni déclare la guerre à l\'Autriche-Hongrie.'),
1129=> array('1914-08-19', '1914-08-16', 'Les Serbes battent les Austro-Hongrois à la bataille de Cer.'),
1130=> array('1914-08-20', '00:00:00', 'Les Allemands attaquent les Russes en Prusse orientale, la bataille de Gumbinnen. L\'attaque est un échec en plus d\'être une déviation du plan Schlieffen.'),
1131=> array('1914-08-20', '00:00:00', 'Les Allemands occupent Bruxelles).'),
1132=> array('1914-08-20', '00:00:00', 'Bataille de Morhange (bataille de Lorraine).'),
1133=> array('1914-08-20', '00:00:00', 'Bataille de Sarrebourg (bataille de Lorraine).'),
1134=> array('1914-08-21', '1914-08-23', 'Bataille des Ardennes (bataille des frontières).'),
1135=> array('1914-08-22', '00:00:00', 'L\'Autriche-Hongrie déclare la guerre à la Belgique.'),
1136=> array('1914-08-23', '00:00:00', 'Le Japon déclare la guerre à l\'Allemagne.'),
1137=> array('1914-08-23', '00:00:00', 'Bataille de Mons (bataille des frontières).'),
1138=> array('1914-08-23', '1914-08-30', 'Bataille de Tannenberg : l\'armée russe subit une lourde défaite par les Allemands.'),
1139=> array('1914-08-23', '1914-09-11', 'bataille de Lemberg. Les Russes capturer Lviv.'),
1140=> array('1914-08-23', '1914-08-25', 'Bataille de Krasnik (bataille de Lemberg). La Première armée austro-hongroise à l\'encontre du quatrième armée russe.'),
1141=> array('1914-08-24', '00:00:00', 'Combat d\'Elouges.'),
1142=> array('1914-08-24', '00:00:00', 'Bataille de la Mortagne, (bataille de Lorraine).'),
1143=> array('1914-08-07', '1914-08-24', 'Les Allemands assiégent et capturent la forteresse de Maubeuge.'),
1144=> array('1914-08-25', '00:00:00', 'Le Japon déclare la guerre à l\'Autriche-Hongrie.'),
1145=> array('1914-08-26', '00:00:00', 'Britanniques et Français conquièrent Togo, un protectorat allemand en Afrique de l\'Ouest.'),
1146=> array('1914-08-26', '1914-08-27', 'Bataille du Cateau. Retraite des Alliés.'),
1147=> array('1914-08-26', '1914-08-30', 'Bataille de Gnila Lipa , (bataille de Lemberg).'),
1148=> array('1914-08-26', '1914-08-02', 'Bataille de Komarov (bataille de Lemberg).'),
1149=> array('1914-08-27', '00:00:00', 'Bataille de Étreux.'),
1150=> array('1914-08-27', '1914-11-07', 'Bataille de Tsingtao : les forces britanniques et japonaises capturent le port sous contrôle allemand de Tsingtao en Chine.'),
1151=> array('1914-08-28', '00:00:00', 'le Royal Navy gagne la première bataille de Heligoland, en mer du Nord.'),
1152=> array('1914-08-29', '1914-08-30', 'Bataille de Saint-Quentin, alias bataille de Guise. Retraite des Alliés.'),
1153=> array('1914-08-30', '00:00:00', 'La Nouvelle-Zélande occupe le Samoa allemand (plus tard Samoa occidentales).'),
1154=> array('1914-09-01', '00:00:00', 'Combat de Nery.'),
1155=> array('1914-09-02', '1914-09-11', 'Défaite austro-hongroise à la bataille de Rava Russka (bataille de Lemberg).'),
1156=> array('1914-09-04', '1914-09-13', 'Bataille de Grand Couronne (bataille des frontières).'),
1157=> array('1914-09-05', '1914-09-12', 'Première bataille de la Marne . L\'avance allemande sur Paris est arrêté , marquant l\'échec du plan Schlieffen.'),
1158=> array('1914-09-05', '1914-09-12', 'Bataille de l\'Ourcq (première bataille de la Marne).'),
1159=> array('1914-09-05', '1914-09-12', 'Bataille des Deux Morins (première bataille de la Marne).'),
1160=> array('1914-09-06', '1914-09-12 ', 'Bataille des marais de Saint- Gond (première bataille de la Marne).'),
1161=> array('1914-09-06', '1914-09-12 ', 'Bataille de Vitry (première bataille de la Marne).'),
1162=> array('1914-09-06', '1914-09-12 ', 'Bataille de Revigny (première bataille de la Marne).'),
1163=> array('1914-09-06', '1914-10-04', 'Bataille de la Drina.'),
1164=> array('1914-09-09', '00:00:00', 'Theobald von Bethmann Hollweg énonce les buts de guerre de l\'Allemagne.'),
1166=> array('1914-09-13', '1915-07-01', 'Les troupes de l\'Union d\'Afrique du Sud commencent la conquète des colonnies Allemandes.'),
1167=> array('1914-09-13', '1914-09-28', 'La première bataille de l\'Aisne se termine une stabilisation du front . La course à la mer commence.'),
1168=> array('1914-09-14', '00:00:00', 'Erich von Falkenhayn remplace Helmuth von Moltke "le Jeune" en tant que chef d\'état-major allemand.'),
1169=> array('1914-09-19', '1914-10-11', 'Bataille de Flirey.'),
1170=> array('1914-09-20', '00:00:00', 'Bataille de Zanzibar, victoire de la marine allemande.'),
1171=> array('1914-09-02', '1914-09-22', 'Première bataille de Picardie.'),
1172=> array('1914-09-24', '1915-03-22', 'Début du siège de Przemysl (Pologne).'),
1173=> array('1914-09-25', '1914-09-29', 'Première bataille d\'Albert.'),
1174=> array('1914-09-31', '1914-10-29', 'Bataille de la Vistule.'),
1175=> array('1914-10-11', '1915-07-20', 'Début des combats de la bataille de Rufiji Delta.'),
1176=> array('1914-10-10', '1914-11-02', 'Bataille de La Bassée.'),
1177=> array('1914-10-12', '1914-11-02', 'Première bataille de Messines.'),
1178=> array('1914-10-13', '1914-11-02', 'Bataille d\'Armentières.'),
1179=> array('1914-10-16', '1914-10-31', 'Bataille de l\'Yser. Les forces françaises et belges sécurisent le littoral de la Belgique.'),
1180=> array('1914-11-01', '00:00:00', 'La Russie déclare la guerre à l\'Empire ottoman.'),
1181=> array('1914-11-01', '00:00:00', 'Bataille de Coronel. Première défaite de la Navy depuis 1812. L\'escadre de croiseurs allemands de Von Spee anéanti l\'escadron de la Marine royale sous le commandement de Christopher Cradock.'),
1182=> array('1914-11-02', '00:00:00 ', 'Le Royaume-Uni commence le blocus naval de l\'Allemagne.'),
1183=> array('1914-11-02', '1914-11-16', 'L\'offensive Bergmann s , premier engagement militaire dans le Caucase de la Première Guerre mondiale.'),
1184=> array('1914-11-03', '00:00:00', 'Le Monténégro déclare la guerre à l\'Empire ottoman.'),
1185=> array('1914-11-03', '1914-11-05', 'Victoire des forces coloniales allemandes de Von Lettow-Vorbeck sur les Britanniques à la bataille de Tanga, Afrique orientale allemande.'),
1186=> array('1914-11-05', '00:00:00', 'La France et le Royaume-Uni déclarent la guerre à l\'Empire ottoman.'),
1187=> array('1914-11-09', '00:00:00', 'Bataille des îles Cocos, au nord-est de l\'océan Indien. Le croiseur australien Sydney détruit le croiseur allemand Emden.'),
1188=> array('1914-11-11', '00:00:00', 'Le sultan Mehmed V déclare le Jihad sur les Alliés.'),
1189=> array('1914-11-11', '1914-11-21', 'Bataille de Bassora.'),
1190=> array('1914-11-15', '1914-12-16', 'Bataille de Kolubara (ou bataille de Suvodor), l\'armée Austro-Hongroise quitte la Serbie.'),
1191=> array('1914-12-17', '1915-01-13', 'Première bataille de l\'Artois'),
1192=> array('1914-12-08', '00:00:00', 'Battaille des Malouines. L\'escadre des croiseurs allemand du vice-amiral Von Spee est anéanti par la Royal Navy.'),
1193=> array('1914-12-10', '00:00:00', 'Offensive allemande sur la côte 60, Ypres.'),
1194=> array('1914-12-16', '00:00:00', 'Raid de la flotte allemande sur Scarborough et Hartlepool, Angleterre.'),
1195=> array('1914-12-18', '1914-12-22', 'Bataille de Givenchy.'),
1196=> array('1914-12-20', '00:00:00', 'Début des combats à Perthes.'),
1197=> array('1914-12-20', '1915-03-17', 'Première bataille de Champagne.'),
1198=> array('1914-12-22', '1915-01-02', 'Les Russes remportent la bataille de Sarikamis.'),
1199=> array('1914-12-18', '1915-01-25', 'Bataille d\'Ardahan.')
);

        foreach($mytab as $i => $tab)
        {
            // On crée la chrono
            $chrono[$i] = new Chrono();
            $chrono[$i]->setDatedeb(new \DateTime($tab[0]));
            $chrono[$i]->setDatefin(new \DateTime($tab[1]));
            $chrono[$i]->setDescr($tab[2]);
            $chrono[$i]->setPres($tab[2]);
            $chrono[$i]->setBilan("indefini");
            $chrono[$i]->setSource(1);
            $chrono[$i]->setTagsid(1);
            $chrono[$i]->setActeursid(1);
            $chrono[$i]->setphotosid(1);

            // On la persiste
            $manager->persist($chrono[$i]);
        }


        // On déclenche l'enregistrement
        $manager->flush();
    }
}



