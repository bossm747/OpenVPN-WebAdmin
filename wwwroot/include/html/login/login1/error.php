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
 * @version		1.2.0
 * @todo			new issues report here please https://github.com/Wutze/OpenVPN-WebAdmin/issues
 */

(stripos($_SERVER['PHP_SELF'], basename(__FILE__)) === false) or die('access denied?');

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Innovate Hub VPN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" href="node_modules/admin-lte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="css/index.css" type="text/css" />
    <script src="node_modules/ionicons/dist/ionicons.js"></script>
  </head>
  <body class="hold-transition login-page">
    <div class="login-box error-msg">
      <div class="login-logo">
          <a href="/"><img src="./images/innovate-hub-logo.png" />&nbsp;<?php echo _SITE_NAME; ?></a>
      </div>
      <div class="login-box-body">
        <p class="login-box-msg"><?php echo GET_Lang::nachricht("_ERROR") ?></p>
        <p class="login-box-msg"><a href="/"><?php echo GET_Lang::nachricht("_HOME") ?></a></p>
      </div>
    </div>
  </body>
</html>
