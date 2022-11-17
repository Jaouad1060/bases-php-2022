<?php

 //le fichier indispensable une seule fois configuration.php

// Vérifiez l'existance de la variable de type GET u
if(isset($_GET['p'])){
    
    //   switch
    switch($_GET['p']){
            case 'geo':
                include 'pages/Geographie.php';
                break;
                case 'hist':
                    include 'pages/histoire.php';
                    break;
                        case 'cult':
                            include 'pages/culture.php';
                            break;
                            case 'gal':
                                include 'pages/Galerie.php';
                                break;
                                case 'form':
                                    include 'pages/contact.php';
                                    break;
                                    case 'link':
                                        include 'pages/lien.php';
                                        break;
        default:
            include_once "./pages/homepage.php";
    }
    
}else{
    
    include_once "pages/homepage.php";
}



