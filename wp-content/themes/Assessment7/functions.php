<?php

//THEME SUPPORT
function assessment7theme_setup(){
    add_theme_support('menus');
    register_nav_menu('primary', 'Primary Header');
    register_nav_menu('secondary', 'Footer Navigation');
}

//LIMITTING LOGIN ATTEMPTS
function attempted_login($user, $username, $password)
{
    if (get_transient('attempted_login')) {
        $datas = get_transient('attempted_login');

        if ($datas['tried'] >= 5) {

            $until = get_option('_transient_timeout_' . 'attempted_login');

            $time = time_to_go($until);

            return new WP_Error('too_many_tried', sprintf(__('<strong>ERROR</strong>: Your trial limit has been reached, please try after %1$s'), $time));
        }
    }
    return $user;
}

add_filter('authenticate', 'attempted_login', 30, 3);

function login_failed($username)
{
    if (get_transient('attempted_login')) {
        $datas = get_transient('attempted_login');

        $datas['tried']++;

        if ($datas['tried'] <= 3) {
            set_transient('attempted_login', $datas, 300);
        } else {
            $datas = array(
                'tried' => 1
            );
            set_transient('attempted_login', $datas, 300);
            
        }
    }
}

add_action('wp_login_failed', 'login_failed', 10, 1);

function time_to_go($timestamp)
{
    $periods = [
        "second",
        "minute",
        "hour",
        "day",
        "month",
        "year"
    ];

    $lengths = [
        "60",
        "60",
        "24",
        "7",
        "4.35",
        "12",
    ];

    $current_timestamp = time();
    $difference = abs($current_timestamp - $timestamp);

    for ($i = 0; $difference >= $lengths[$i] && $i < count($lengths) - 1; $i++) {
        $difference /= $lengths[$i];
    }

    //COUNT DOWN

    $difference = round($difference);

    if (isset($difference)) {
        if ($difference != 1) {
            $periods[$i] .= "s";
            $output = "$difference $periods[$i]";
            return $output;
        }
    }
}