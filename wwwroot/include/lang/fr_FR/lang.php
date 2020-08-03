<?php
/**
 * this File is part of OpenVPN-WebAdmin - (c) 2020 OpenVPN-WebAdmin
 *
 * NOTICE OF LICENSE
 *
 * GNU AFFERO GENERAL PUBLIC LICENSE V3
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://www.gnu.org/licenses/agpl-3.0.en.html
 *
 * @fork Original Idea and parts in this script from: https://github.com/Chocobozzz/OpenVPN-Admin
 * 
 * @author    Wutze
 * @copyright 2020 OpenVPN-WebAdmin
 * @link			https://github.com/Wutze/OpenVPN-WebAdmin
 * @see				Internal Documentation ~/doc/
 * @version		1.0.0
 * @todo			new issues report here please https://github.com/Wutze/OpenVPN-WebAdmin/issues
 */

(stripos($_SERVER['PHP_SELF'], basename(__FILE__)) === false) or die('access denied?');
/**
 * Language de_DE
 */

$message['_NO_USER'] = "Nom d'utilisateur inconnu" ;
$message['_SITE_TITLE'] = "Titre de la page" ;
$message['_LANGUGE_ERROR'] = "Erreur dans le fichier de langue" ;

$message ['_HOME'] = "Home" ;
$message['_OVERVIEW'] = "Vue d'ensemble" ;
$message['_INFOS_PLUS'] = "Informations complémentaires" ;

$message['_VIEW'] = "display" ;

$message['_LOGIN'] = "login" ;
$message['_LOGIN_NAME'] = "nom d'utilisateur" ;
$message['_LOGIN_PASS'] = "mot de passe" ;
$message['_LOGIN_DATA'] = "Veuillez entrer les données de connexion" ;
$message['_LOGIN_SAVE'] = "Se souvenir de la connexion" ;
$message ['_LOGOUT'] = "X" ;
$message['_Votre_LOGUE'] = "Votre compte";
$message['_USER_RIGHTS'] = "vos droits d'utilisateur" ;

$message['_SAVE_PW'] = "save" ;
$message['_LOGIN_PASS_CONTROL'] = "Contrôle" ;
$message['_CHANGE_PASS'] = "Changer de mot de passe" ;
$message['_INPUT_NEW_PASS'] = "Nouveau mot de passe" ;
$message['_RETYPE_NEW_PASS'] = "Confirmer le mot de passe" ;
$message['_USER_EMAIL'] = "Votre email" ;
$message['_USER_NAME'] = "Votre nom" ;
$message['_USER_DATA'] = "Changez vos données" ;
$message['_SAVE_USER_DATA'] = "enregistrer les modifications" ;

$message['_VPN_CONFIGS'] = "Configurations" ;
$message['_OSX_CONFIG'] = "Configuration OSX" ;
$message['_WIN_CONFIG'] = "WIN configuration" ;
$message['_LIN_CONFIG'] = "Configuration Android" ;

$message['_SSL_CERTS'] = "certificats SSL" ;
$message['_SSL_CERTS_NEW'] = "New Certificate" ;
$message['_SSL_CERTS_EDIT'] = "Edit Certificate" ;
$message['_SSL_CERTS_LIST'] = "Liste des certificats" ;

$message['_TODAY'] = date('d.m.Y') ;

$message['_VPN_DATA_SAV'] = "Save your .." ;
$message['_VPN_DATA_OSX'] = "OSX-Config" ;
$message['_VPN_DATA_WIN'] = "WIN-Config" ;
$message['_VPN_DATA_LIN'] = "Android/Linux-Config" ;


$message['_USERDATA_EMAIL'] = "eMail" ;
$message['_USERDATA_PASSWORD'] = "Mot de passe" ;
$message['_USERDATA_SAVE'] = "Créer un utilisateur" ;
$message['_USERDATA_ISADMIN'] = "User gets admin rights" ;
$message['_USERDATA_FROM_DATE'] = "Accès à partir de :";
$message['_USERDATA_TO_DATE'] = "Accès jusqu'à :";

$message['_ERROR'] = "Erreur" ;

/** 
 * messages d'erreur
 * @uses class::Get_Lang
 * @param $var + array-id
 * @return Message dans le dialogue modal
 */
$errormessage[1] = $message['_USERDATA_SAVE']." a échoué. ".$message['_LOGIN_NAME']." existe déjà.";
$errormessage[2] = "Fonction non encore disponible. Désolé" ;
$errormessage [3] = "Le nouveau mot de passe n'était pas identique ou vide !";
$errormessage [4] = "Mot de passe changé ! Veuillez vous reconnecter !";

/**
 * gimmick de bas de page du slogan kitchen 
 */
$freedom = array(
                "Ceux qui préfèrent la sécurité à la liberté sont à juste titre des esclaves. (Aristote)",
                "La liberté périra si nous ne méprisons pas tout ce qui tente de nous faire plier sous un joug. (Sénèque)",
                "Ne te laisse pas abattre, sois audacieux, sauvage et merveilleux. (pee-pee Longstocking)",
                "Je préfère une liberté dangereuse à une servitude tranquille. (Rousseau)"
) ;




?>