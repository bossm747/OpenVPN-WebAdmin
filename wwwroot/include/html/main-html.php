<?php
/**
 * this File is part of Innovate Hub VPN - (c) 2020 Innovate Hub VPN
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
 * @copyright 2020 Innovate Hub VPN
 * @link			https://github.com/Wutze/Innovate-Hub-VPN
 * @see				Internal Documentation ~/doc/
 * @version		1.5.0
 * @todo			new issues report here please https://github.com/Wutze/Innovate-Hub-VPN/issues
 */

(stripos($_SERVER['PHP_SELF'], basename(__FILE__)) === false) or die('access denied?');

?>
<!-- Start HTML-Code -->
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
<div class="wrapper">
  <!-- Navbar top -->
  <nav class="main-header navbar navbar-expand">
<?php
  /** Navbar Top left */

include(REAL_BASE_DIR."/include/html/content/main-navbar-left.php");
  /** Navbar Top right */
include(REAL_BASE_DIR."/include/html/content/main-navbar-right.php");
?>
  </nav>
  <!-- /.navbar top -->
<?php
/** Sidebar left */
include(REAL_BASE_DIR."/include/html/content/main-sidebar.php");
/** Maincontent all */
include(REAL_BASE_DIR."/include/html/content/main-content.php");

?>
