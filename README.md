# Une application pour la gestion d’une bibliothèque

Vous êtes un développeur junior embauché par une collectivité territoriale. 

Vous devez créer une application qui permette aux bibliothécaires de la ville de gérer 
le catalogue de livres ainsi que les prêts et les rendus.

Attention l’application n’est pas accessible aux utilisateurs. 

Seuls les employés des bibliothèques utilisent l’application. 

Quand quelqu’un veut emprunter un livre, il se présente au bureau de l’employé avec sa 
carte de membre qui contient les informations nécessaires à l’enregistrement du prêt.

### L’application permettra de :

- Afficher la liste des livres contenus dans le catalogue ainsi que leur statut 
(disponible ou prêté).

- Ajouter un livre au catalogue.

- Supprimer un livre du catalogue s’il n’est pas emprunté.

- Pouvoir accéder à la fiche descriptive de chaque livre enregistré en BDD.

- Pouvoir modifier le statut de chaque livre de disponible à prêté et de prêté à disponible.
 
Quand un livre est prêté le/la bibliothécaire indique le numéro d’identification unique 
de l’utilisateur afin de savoir qui a emprunté quoi. 

Quand on revient sur la fiche descriptive du livre celle-ci indique maintenant les 
informations du livre ainsi que celles de l’utilisateur qui l’a emprunté.

- Afficher la liste de tous les utilisateurs enregistrés dans le système ainsi que leurs 
informations personnelles et les livres qu’ils ont éventuellement empruntés quand on clique 
sur leur fiche personnelle.

### En plus, on trouvera dans votre projet dans un dossier documentation :

- Un schéma de base de données listant les tables, leur contenu, leurs relations et les
cardinalités..

- Un fichier SQL qui exécuté dans MySQL crée une base de données avec les tables
nécessaires et quelques lignes d’exemple.

- Un schéma de type UseCase et/ou une arborescence fonctionnelle de l’application 
reprenant les fonctionnalités de chaque page.

- Un diagramme de classes qui liste les classes de votre applications, leur contenu et 
leurs relations.

## Spécifications techniques :

- Votre code est organisé selon l'architecture MVC.

- Votre projet est géré à l’aide d’un tableau de type KANBAN où il est découpé en tâches 
avec un temps estimé.

- Vous prenez en compte les problématiques de maintenabilité.

- Vous prenez en compte les problématiques de sécurité liées aux failles standards 
(faille XSS et injection SQL).

- Vous intégrez au possible les transactions dans vos requêtes SQL.

- Vous utilisez PDO pour vous connecter à la base de données.

- Vous privilégiez les jointures aux doubles requêtes. 
Cependant les doubles requêtes sont acceptées dans le cas où les jointures seraient 
trop complexes à mettre en œuvre.

- Vous programmez en orienté objet.

## Pour aller plus loin :

- Pouvoir trier les livres selon leur catégorie grâce à un dropdown 
(par exemple : roman, poésie, aventure…). 

- Proposer un formulaire pour permettre d’ajouter un utilisateur.

- Affiner les formulaires de tri et permettre de trier selon tous les critères existants 
(auteur, date de parution etc).

- Gérer les dates de prêt et de retour afin de toujours savoir exactement le nombres de 
jours restant avant le rendu.

- Avoir accès à une page de détail des informations utilisateur qui liste tous les livres 
que l’utilisateur a emprunté.

- Avoir plusieurs exemplaires d’un même livre en stock.
