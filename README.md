PROJECTE GESTIÓ ENTRADES


Francesc Cansino Roig
DAW2




















Descripció del projecte (Per a que serveix l’aplicació desenvolupada)

Gestió Entrades a diversos Espectacles
Descripció de l'aplicació desenvolupada Diagrama E-R Diagrama Relacional Manual usuari de l'aplicació
Descripció del projecte;
El projecte consisteix en desenvolupar una aplicació que consisteix en que qualsevol usuari registrat tingui la facilitat de poder decidir quin espectacle anar, ja sigui entrades a concerts, entrades a espectacles i diferents varietats. En aquest cas l’usuari s'haurà de registrar mitjançant un formulari de registre i omplir les dades bàsiques, una vegada registra’t podrà observar i triar a quin espectacle anar i afegir a la seva agenda . En la pàgina web hi hauran tres botons essencials, afegir espectacle, editar espectacle i eliminar espectacle, llavors qualsevol usuari podrà triar el espectacle que vol anar, editar el espectacle (per exemple la ubicació i les persones que assistiran) o anul-lar/eliminar , que fara referencia a que no pot assistir

Diagrama E-R 



MODEL RELACIONAL

CREATE TABLE `usuarios` (
  `id` int(11) DEFAULT NULL,
  `nombre` varchar(90) NOT NULL,
  `email` varchar(90) NOT NULL,
  `password` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `artistes` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `album` varchar(500) NOT NULL,
  `date` varchar(100) NOT NULL,
  `city` varchar(255) NOT NULL,
  `preu` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




CREATE TABLE `month` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `tipus` varchar(500) NOT NULL,
  `seient` varchar(100) NOT NULL,
  `vip` varchar(255) NOT NULL,
  `preu` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;











Seeders SQL per fer les proves (inserts)

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `password`) VALUES
(NULL, 'cesc', 'cesc@cesc.coom', '$2y$04$72JxqCiZkUwfPWHA97GqzO.tjc538KjLiPH/vLuQSo2aY8Pb.bVC.'),
(NULL, 'alba', 'alba@alba.com', '$2y$04$dRgohi0AR4b5SxBS7ZoZ.ucabksIGsXpFDw.XxzVyIbR.KIRfyzVm'),
(NULL, 'jorge', 'jorge@jorge.com', '$2y$04$lYpQMzPHVLRxzPr9f/4YW.EmYA5JBSihLmOrdr.oaU/gdEffAbDFC'),
(NULL, 'josep', 'josep@josep.com', '$2y$04$uTnLvqIv1Zq9mX2E1WyShegbVea.K68Wm/2yx24i7/CBZtLgI9o4C');




INSERT INTO `artistes` (`id`, `name`, `album`, `date`, `city`, `preu`, `created_at`) VALUES
(1, 'Ariana Grande', 'Positions', '2028-07-15', 'Barcelona', '800', '2023-05-01 12:21:21'),
(2, 'The Weeknd', 'After Hours', '2023-08-22', 'Paris', '95', '2023-05-01 12:21:21'),
(3, 'Ed Sheeran', '÷', '2023-09-05', 'New York', '65', '2023-05-01 12:21:21'),
(4, 'Beyoncé', 'Lemonade', '2023-10-12', 'London', '120', '2023-05-01 12:21:21'),
(5, 'Travis Scott', 'Astroworld', '2023-11-18', 'Los Angeles', '105', '2023-05-01 12:21:21'),
(6, 'Taylor Swift', 'Red (Taylors Version)', '2023-12-25', 'Sydney', '90', '2023-05-01 12:21:21'),
(7, 'Drake', 'Certified Lover Boy', '2024-01-15', 'Toronto', '80', '2023-05-01 12:21:21'),
(8, 'Billie Eilish', 'Happier Than Ever', '2024-02-20', 'Berlin', '75', '2023-05-01 12:21:21'),
(9, 'Post Malone', 'Hollywoods Bleeding', '2024-03-10', 'Tokyo', '95', '2023-05-01 12:21:21'),
(10, 'Coldplay', 'Everyday Life', '2023-06-01', 'Madrid', '75', '2023-05-01 12:21:21'),
(13, 'zxczxc', 'zxczcxx', 'cxc', 'e', 'cv', '2023-05-04 21:09:45'),
(15, 'messi', 'messi', 'messi', 'messi', 'messi', '2023-05-04 22:11:48');






INSERT INTO `month` (`id`, `name`, `tipus`, `seient`, `vip`, `preu`, `created_at`) VALUES
(2, 'The Weeknd', 'After Hours', '2023-08-22', 'Paris', '95', '2023-05-01 12:21:21'),
(4, 'Beyoncé', 'Lemonade', '2023-10-12', 'London', '120', '2023-05-01 12:21:21'),
(5, 'Travis Scott', 'Astroworld', '2023-11-18', 'Los Angeles', '105', '2023-05-01 12:21:21'),
(6, 'Taylor Swift', 'Red (Taylors Version)', '2023-12-25', 'Sydney', '90', '2023-05-01 12:21:21'),
(7, 'Drake', 'Certified Lover Boy', '2024-01-15', 'Toronto', '80', '2023-05-01 12:21:21'),
(8, 'Billie Eilish', 'Happier Than Ever', '2024-02-20', 'Berlin', '75', '2023-05-01 12:21:21'),
(9, 'Post Malone', 'Hollywoods Bleeding', '2024-03-10', 'Tokyo', '95', '2023-05-01 12:21:21'),
(10, 'Coldplay', 'Everyday Life', '2023-06-01', 'Madrid', '75', '2023-05-01 12:21:21'),
(13, 'zxczxc', 'zxczcxx', 'cxc', 'e', 'cv', '2023-05-04 21:09:45'),
(15, 'messi', 'messi', 'messi', 'messi', 'messi', '2023-05-04 22:11:48');













Gestió CRUD online de totes les taules de la base de dades amb paginació





PAGINACIÓ











Aplicació navegable a través de menú principal que permeti accedir a les diferents opcions



















Ús de CSS Bootstrap







Validació de les dades d’entrada de formularis a nivell servidor 




Repoblament de formularis







