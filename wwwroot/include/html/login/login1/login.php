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
 * @version		1.3.0
 * @todo			new issues report here please https://github.com/Wutze/OpenVPN-WebAdmin/issues
 */

(stripos($_SERVER['PHP_SELF'], basename(__FILE__)) === false) or die('access denied?');

include (REAL_BASE_DIR.'/include/html/login/login.functions.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title><?php echo _SITE_NAME; ?> - Secure VPN Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/svg+xml" href="images/favicon.svg">
    <link rel="stylesheet" href="node_modules/admin-lte/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="node_modules/admin-lte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="css/index.css" type="text/css" />
    <style>
      .login-box {
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        border-radius: 8px;
        box-shadow: 0 0 20px rgba(42, 82, 152, 0.3);
      }
      .login-box-msg {
        color: white;
        font-size: 1.1em;
      }
      .input-group-text {
        background-color: rgba(255, 255, 255, 0.1);
        border: none;
        color: white;
      }
      .form-control {
        background-color: rgba(255, 255, 255, 0.9);
        border: none;
      }
      .btn-primary {
        background-color: #1e3c72;
        border: none;
      }
      .btn-primary:hover {
        background-color: #2a5298;
      }
    </style>
  </head>
  <body class="hold-transition login-page">
  <?php echo noscript(); ?>
    <div class="login-box">
      <div class="login-logo">
        <a href="/"><img src="images/logo.svg" alt="<?php echo _SITE_NAME; ?>" style="max-width: 200px; height: auto;" /></a>
      </div>
      <div class="login-box-body">
        <p class="login-box-msg"><?php echo GET_Lang::nachricht("_LOGIN_DATA") ?></p>
        <form action="/" method="post">
          <div class="input-group mb-3">
            <?php echo username()."\n"; ?>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <?php echo password()."\n"; ?>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
              <?php echo hiddenfields()."\n"; ?>
              </div>
            </div>
            <div class="col-4">
              <?php echo button('btn-primary btn-block'); ?>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
