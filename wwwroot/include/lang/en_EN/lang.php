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
 * Language en_EN
 */

$message['_NO_USER']                = "Unknown user name";
$message['_SITE_TITLE']             = "Innovate Hub VPN";
$message['_LANGUGE_ERROR']          = "Language file error detected";
$message['_NEED_JAVASCRIPT']        = "Please enable JavaScript to continue";

$message['_HOME']                   = "Dashboard";
$message['_OVERVIEW']               = "Network Overview";
$message['_INFOS_PLUS']             = "Additional Details";
$message['_WELCOME']                = "Welcome to Innovate Hub VPN";

$message['_USERS']                  = "User";
$message['_DISK']                   = "Disk";
$message['_SYSTEM']                 = "System";
$message['_ERROR']                  = "Error";
$message['_SAVE']                   = "Save";
$message['_RESTART']                = "Attention! Restart server or clients after changes!";
$message['_NEW']                    = "New";

$message['_U_NAME']                 = "User";
$message['_U_GROUP']                = "Group";
$message['_U_ENABLE']               = "Enable";
$message['_U_FROM']                 = "from";
$message['_U_TO']                   = "to";
$message['_U_ONLINE']               = "Online";
$message['_U_NETIP']                = "User IP-Address";
$message['_U_GATEWAYIP']            = "Gateway IP Server";
$message['_U_EXTEND_VIEW']          = "Advanced view for: ";
$message['_U_TIMESETTINGS']         = "Time limits";
$message['_U_NETSETTINGS']          = "Network";
$message['_U_PLUS']                 = "Other (disable)";

$message['_ATTENTION_FW']           = "You should know what you're doing!";
$message['_ATTENTION_CF']           = "Client and/or server should be restarted after changes";

$message['_VIEW']                   = "view";

$message['_LOGIN']                  = "Login";
$message['_LOGIN_NAME']             = "Username";
$message['_LOGIN_PASS']             = "Password";
$message['_LOGIN_DATA']             = "Sign in to your secure VPN portal";
$message['_LOGIN_SAVE']             = "Keep me signed in";
$message['_LOGOUT']                 = "Sign Out";
$message['_YOUR_LOGIN']             = "My Profile";
$message['_USER_RIGHTS']            = "Your User rights";

$message['_SAVE_PW']                = "Save";
$message['_LOGIN_PASS_CONTROL']     = "Control";
$message['_CHANGE_PASS']            = "change password";
$message['_INPUT_NEW_PASS']         = "New Password";
$message['_RETYPE_NEW_PASS']        = "confirm password";
$message['_USER_EMAIL']             = "Your mailadress";
$message['_USER_NAME']              = "Your Name";
$message['_USER_DATA']              = "change your data";
$message['_SAVE_USER_DATA']         = "save changes";

$message['_VPN_CONFIGS']            = "Configurations";
$message['_OSX_CONFIG']             = "OSX Configuration";
$message['_WIN_CONFIG']             = "WIN Configuration";
$message['_LIN_CONFIG']             = "Android Configuration";

$message['_CONF_SAVED']             = "config saved";
$message['_CONF_SAVE_ERROR']        = "save error";

$message['_SSL_CERTS']              = "SSL-Certificates";
$message['_SSL_CERTS_NEW']          = "new Certificate";
$message['_SSL_CERTS_EDIT']         = "edit certificate";
$message['_SSL_CERTS_LIST']         = "List certificates";

$message['_TODAY']                  = date('Y.m.d');

$message['_VPN_DATA_SAV']           = "Download Configuration";
$message['_VPN_DATA_TT']            = "Get your personalized VPN configuration";
$message['_VPN_DATA_OSX']           = "OSX-Config";
$message['_VPN_DATA_WIN']           = "WIN-Config";
$message['_VPN_DATA_LIN']           = "Android/Linux-Config";
$message['_VPN_CLIENT_SAV']         = "Docu/Download ...";
$message['_VPN_CLIENT_TT']          = "Documentation/Download VPN client ...";
$message['_VPN_CLIENT_OSX']         = "OSX";
$message['_VPN_CLIENT_WIN']         = "WIN";
$message['_VPN_CLIENT_LIN']         = "Andoid";
$message['_VPN_CLIENT_EXT']         = "More information";


$message['_USERDATA_EMAIL']         = "eMail";
$message['_USERDATA_PASSWORD']      = "Password";
$message['_USERDATA_SAVE']          = "create user";
$message['_USERDATA_ISADMIN']       = "User receives full admin rights";
$message['_USERDATA_ISCONFIGADMIN'] = "User receives configuration rights";
$message['_USERDATA_ISLOGADMIN']    = "User gets log view rights";
$message['_USERDATA_ISUSERADMIN']   = "User receives user administration rights";
$message['_USERDATA_ISTLSADMIN']    = "User receives certificate management rights";
$message['_USERDATA_FROM_DATE']     = "Access from:";
$message['_USERDATA_TO_DATE']       = "Access to:";
$message['_USERDATA_NEW_USER']      = "Create a new user";
$message['_USERDATA_USER']          = "User data";
$message['_USERDATA_OPTIONS']       = "Options";


/** 
 * error messages
 * @uses class::Get_Lang
 * @param $var + array-id
 * @return Message in modal dialog
 */
$errormessage[1]                    = $message['_USERDATA_SAVE']." failed or empty password";
$errormessage[2]                    = "Function not yet available. Sorry.";
$errormessage[3]                    = "Newly assigned password was not identical or empty!";
$errormessage[4]                    = "Password changed! Please new Login!";

$freedom = array(
                'Anyone who prefers security over freedom is rightly a slave. (Aristoteles)',
                'Die Freiheit geht zugrunde, wenn wir nicht alles verachten, was uns unter ein Joch beugen will. (Seneca)',
                'Don\'t let it get you down; be bold and wild and wonderful. (Pipi Langstrumpf)',
                'I prefer dangerous freedom to quiet servitude. (Rousseau)'
);



?>
