//création du dossier du projet
mkdir nomDuProjet
cd nomDuProjet

//téléchargement des fichiers wordpress
wget http://wordpress.org/latest.tar.gz

//décompression
tar xfz latest.tar.gz

//Suppression du fichier compressé
rm latest.tar.gz

//déplacer le contenu du dossier WordPress dans notre dossier
mv wordpress/* ../nomDuProjet/

//suppression des thèmes inutiles à notre projet
cd wp-content/themes/
rm -rf twenty

// ajout du theme susty
wget https://github.com/jacklenox/susty/archive/master.zip
tar xfz master.zip
rm master.zip

//ajout du starter theme
wget https://gitlab.com/romainPetiot/ihaveagreen/-/archive/master/ihaveagreen-master.tar.gz
rm starterthemesusty-master.zip
rename starterthemesusty-master/ nomDuProjet

//création de la BDD
http://localhost/phpMyAdmin/?lang=fr

//install du projet wordpress
http://localhost/nomDuProjet

//indentifiant BO (phase de dev)
admin:admin

//Dans le BO
Activer le thème I Have a Green

//Dans le fichier wp-config.php, ajouter le code pour générer les logs (juste après wp_debug)
// DEBUG PHP
// -----------------------------------------------------------------------------
$dir_logs = dirname(__FILE__).'/_logs/';
if ( !file_exists($dir_logs) ){ mkdir($dir_logs, 0777);}
ini_set('log_errors', 1);
ini_set('display_errors', 0);
date_default_timezone_set("Europe/Paris");
ini_set('error_log', $dir_logs.'debug-'.date('Ymd').'.log');
ini_set('error_reporting', E_ALL ^ E_NOTICE);

$files = scandir($dir_logs, SCANDIR_SORT_DESCENDING);
if ( count($files) > 5 ) :
    for ( $i = 5; $i < count($files); $i++ ) :
        if ( stripos($files[$i], '.') != 0 ) :
            unlink($dir_logs.$files[$i]);
        endif;
    endfor;
endif;

//Intaller les plugins suivant
ACF - b3JkZXJfaWQ9OTE1Mzh8dHlwZT1kZXZlbG9wZXJ8ZGF0ZT0yMDE2LTEwLTEyIDE0OjMyOjI3
Yoast SEO


//dans un terminal,
cd nomDuProjet
npm install

//fichier package.json
Modifier la ligne des “scripts” sur le start : mettre le bon chemin ‘localhost/nomDuProjet’

//Lancer les 2 scripts (dans deux terminaux)
npm run watch
npm run start //pas obligatoire, permet de rafraichir automatiquement la page après chaque modification de fichier

créer dépot GIT sur https://gitlab.com/
git init
git remote add origin git@gitlab.com:romainPetiot/nomDuProjet.git
git commit -am “initial commit”
git push -u origin master
