<?php
// ob_start();
// session_start();
// if (!isset($_SESSION['username_oper']) ||(trim ($_SESSION['username_oper']) == '')) {
//     if((time() - $_SESSION["last_login_time"]) > (24 * 60 * 60)) {
//         header("location: logout");
//         if((time() - $_SESSION["last_login_time"]) > 20){ // 900 = 15 * 60
//             header("location: logout");
//         } 
//         else {
//             $_SESSION["last_login_timestamp"] = time();
//         }
//     } 
//     else {
//         header("location: ../dashboard");
//         exit();
//     }
// }
// $_SESSION["last_login_time"] = time();
echo '<!DOCTYPE html>';
echo '<html lang="en" dir="ltr">';
echo '<head>';
include('../templates/backend/Administrator/views/_meta.php'); //ok
echo '<title> Administrator </title>';
include('../templates/general/backend/layouts/_css.php'); //ok
echo '</head>';
echo '<body>';
echo '<main id="main" class="main">';
include('../templates/backend/Administrator/views/_sidebar.php'); //ok
include('../templates/backend/Administrator/views/_nav.php'); //ok
include('../Administrator/controllers/_function.php'); //ok
// include('../templates/general/backend/layouts/_footer.php'); //ok
echo '</main>';
include('../templates/general/backend/layouts/_js.php'); //ok
echo '</body></html>';

