<?php 
//- Lister tous les projets (T: project) ayant démarré après le 01 Avril 2018 (C: start_date)
$sql = "SELECT * FROM school_year WHERE date_start > '2018-04-01' ";

//- Lister toutes les promos (T: school_year) ayant fini avant le 01 Janvier 2019 (C: date_end)
 $sql= "SELECT * FROM school_year WHERE date_end < '2019-01-01' ";

//- Lister tous les élèves (T: students) ayant pour school_year_id 3
$sql = "SELECT * FROM student WHERE school_year_id = 3 ";

//- Lister tous les élèves (T:students) ayant pour prénom (C:firstname) Arielle
$sql = "SELECT * FROM student WHERE firstname = 'Arielle' ";

//- Lister tous les élèves (T:students) ayant pour nom (C:lastname) Dwight
$sql = "SELECT * FROM student WHERE lastname= 'Dwight' ";

//- Lister tous les élèves (T:students) s'appelant Bronny Boys

//- Lister tous les élèves crées après le 30 décembre 2017 et dont le project_id vaut 1

$sql =  "SELECT * FROM student WHERE creation_date > '2017-12-30' AND project_id = 1 ";

//- Dans project_tag, lister toutes les données ayant pour tag_id 1 ou 2
$sql = "SELECT * FROM student_tag WHERE tag_id = 1 OR tag_id =2 ";

//- Lister tous les tags ayant pour id  2, 3, 4 ou 5
$sql = "SELECT * FROM student_tag WHERE tag_id IN (2,3,4,5)";

//- Lister tous les élèves ayant une adresse email en .com
$sql = "SELECT * FROM student WHERE email LIKE '%.com' ";

//- Lister tous les élèves dont le prénom commence par A
$sql = "SELECT * FROM student WHERE lastname LIKE 'A%' ";

//- Lister tous les élèves dont le nom contient lu
$sql = "SELECT * FROM student WHERE lastname LIKE '%lu%' ";

//- Lister toutes les promos (T:school_year) qui ont commencé entre 2017 et 2019
$sql = "SELECT * FROM school_year WHERE date_start BETWEEN '2017-01-01' AND '2019-12-31' ";

//- Lister grâce à BETWEEN toutes les données dans student_tag ayant pour student_id 1, 2 ou 3
$sql = "SELECT * FROM student_tag WHERE student_id BETWEEN 1 AND 3 ";

//- Afficher toutes les projets mais en donnant un autre nom à la colonne client_name : name_of_my_nightmare
$sql= "SELECT client_name AS name_of_my_nightmare FROM project";

//- Même chose que la consigne précédente, mais en donnant le nom cash_day pour la colonne delivery_date
$sql = "SELECT client_name AS name_of_my_nightmare, delivery_date AS cash_day FROM project";

//- Lister tous les élèves ayant eu un projet (donc un project_id qui a une valeur)
$sql = "SELECT * FROM student WHERE project_id IS NOT NULL ";

//Lister tous les prénoms (C: firstname) dans la table students en enlevant les doublons
$sql = "SELECT DISTINCT firstname FROM student";

//- Lister les 5 derniers élèves à avoir été créé
$sql = "SELECT * FROM student ORDER BY creation_date DESC LIMIT 0,5 ";

//- Afficher les élèves 50 à 100 par ordre alphabétique sur le nom

$sql = "SELECT lastname FROM `student` ORDER BY lastname LIMIT 50 , 100 ";


//- Lister le nombre d'élèves ayant pour project_id 1
$sql = "SELECT * FROM student WHERE project_id = 1 ";

//- Lister le nombre projets ayant commencé après le 10 mars 2018
$sql = "SELECT * FROM student WHERE creation_date > '2018-03-10' ORDER BY creation_date DESC ";

//- Lister dans la table student_tag le nombre de tag_id pour chaque student_id
$sql = "SELECT student_id , COUNT(tag_id) FROM student_tag GROUP BY student_id";

//- A partir de la consigne précédente, n'afficher que les student_id ayant au moins 3 tag_id
$sql = "SELECT student_id , tag_id FROM student_tag GROUP BY student_id HAVING COUNT(tag_id) > 3 ";


// ********************************************* Inserer des données **************************************

//Insérer dans project un nouveau projet avec (name: Pouet, description: Un projet qui pète, client_name:D.Trump, start_date: 2019-04-02)
$sql = "INSERT INTO project(name,description, client_name,start_date) VALUES ("Pouet","Un projet qui pète", "D.Trump","2019-04-02")";

//- Insérer d'un coup plusieurs tags : python, webgl, vuejs
$sql = "INSERT INTO tag(name) VALUES("Python"),("webgl"),("vuejs")";

//- Créer votre promo dans school_year
$sql = "INSERT INTO school_year(name) VALUES("Les spartiates") ";

// *********************************************** UPDATE , DELETE ************************************

// - Modifier la promo Promo Shoshanna MacKeeg pour qu'elle se termine le 12 Juillet 2020

$sql = "UPDATE school_year SET date_end = '2020-07-12' WHERE name LIKE '%Shoshanna MacKeeg%'";


//- Supprimer l'élève Dorita Lewzey
$sql = "DELETE FROM student WHERE firstname LIKE '%Dorita%' AND lastname LIKE '%Lewzey%'";

//- Modifier tous les tags pour qu'ils aient comme description "Développement web"
$sql = "UPDATE tag SET description ='Développement web'";

//- Lister tous les élèves avec le nom de leur projet
$sql = " SELECT * FROM student INNER JOIN project ON student.project_id = project.id"; 

//- Lister tous les élèves dont le projet a commencé avant le 05 février 2018
$sql = "SELECT * FROM student INNER JOIN project ON student.project_id = project.id WHERE creation_date < "2018-02-05" ";

//- Lister tous les élèves faisant partie de la promo "Yard Skyner"
$sql = "SELECT * FROM student INNER JOIN school_year ON student.school_year_id = school_year.id WHERE name LIKE "%Yard Skyner%"  ";