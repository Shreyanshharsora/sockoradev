<?php
use Illuminate\Support\Str;

function pr($data){
    echo '<pre>';
    print_r($data);
}

function getCurrentControllerAction() {
    $routeArray = Str::parseCallback(Route::currentRouteAction(), null);    
    $controller = '';
    $action = '';
    if (last($routeArray) != null) {
        $controller = str_replace('Controller', '', class_basename(head($routeArray)));      
        $action = str_replace(['get', 'post', 'patch', 'put', 'delete'], '', last($routeArray));
        return $controller . '||' . $action;
    }
    return '';
}

define('JS_VERSION', '?ver=v.0.0.4');
define('CSS_VERSION', '?ver=v.0.0.5');
define('HTML_VERSION', '?ver=v.0.0.3');

$SITE_URL = $SITE_URL = env('APP_URL');

define('CONTACT_EMAIL_ID', 'testing.demo@gmail.com');
define('LABEL_SITE_NAME', 'Sockora Admin');
define('SITE_NAME', 'Sockora Admin');
define('SITE_URL', $SITE_URL);
define('SITE_YEAR', '2018');
define('ASSET_URL', SITE_URL."assets/");
define('WWW_ROOT', $_SERVER['DOCUMENT_ROOT']);
define('REC_PER_PAGE', '10');
define('ERR_PWS', 'Invalid Email or Password.');
define('ERR_USERNAME_PWS', 'Invalid Username or Password.');
define('INVALID_EMAIL', 'Invalid email address.');
define('PWD_SENT', 'Password has been successfully sent.');
define('PASSWORD_SUCCESS', 'Password has been set successfully');
define('PROFILE_SUCCESS', 'Your personal information is successfully updated!');
define('DEFAULT_IMG_PATH', 'img/');
define('USER_PROFILE_IMAGE_PATH', 'files/profile/');
define('USER_PROFILE_THUMB_IMAGE_PATH', 'files/profile/thumb/');
define('ADMIN_PROFILE_IMG_PATH_URL', 'files/admin_profile/');
define('TEMP_IMG_PATH', 'files/temp/');
define('LINE_ITEM_IMG', 'files/line_item/');
define('LINE_ITEM_FILES', 'files/line_item_files/');
define('INVALID_USERNAME_OR_PASSWORD', 'Email Id and Password do not match. Please try again!');
define('EXCEL_FORMAT', 'xlsx');
define('EMAIL_LIMIT', 1);
define('ACTIVE_STATUS', 'Active');
define('INACTIVE_STATUS', 'Inactive');

define('DELETE_STATUS', 1);