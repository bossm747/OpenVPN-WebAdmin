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
 * @version		1.5.0
 * @todo			new issues report here please https://github.com/Wutze/OpenVPN-WebAdmin/issues
 */

(stripos($_SERVER['PHP_SELF'], basename(__FILE__)) === false) or die('access denied?');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />

    <title><?php echo _SITE_NAME; ?> - Secure VPN Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Secure VPN access portal for Innovate Hub VPN">
    <link rel="stylesheet" href="node_modules/bootstrap-table/dist/bootstrap-table.min.css" type="text/css" />
    <link rel="stylesheet" href="node_modules/jquery-ui-dist/jquery-ui.min.css" type="text/css" />
    <link rel="stylesheet" href="node_modules/bootstrap-table/dist/extensions/filter-control/bootstrap-table-filter-control.css" type="text/css" />
    <link rel="stylesheet" href="node_modules/admin-lte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="node_modules/flag-icon-css/css/flag-icon.css">
    <link rel="icon" type="image/svg+xml" href="images/favicon.svg">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
<!--    <link rel="stylesheet" href="node_modules/admin-lte/plugins/fontawesome-free/css/all.min.css"> -->
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="node_modules/admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <script src="node_modules/ionicons/dist/ionicons/ionicons.js"></script>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/jquery-ui-dist/jquery-ui.js"></script>
    <link rel="stylesheet" href="css/index.css" type="text/css" />
    <link rel="stylesheet" href="css/background.css" type="text/css" />
  </head>
