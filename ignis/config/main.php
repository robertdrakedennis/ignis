<?php

// This enables the dynamic background
$backstretch['enable'] = true;

// This changes the duration per background. This is in seconds.
$backstretch['duration'] = 5;
// This changes the duration of the fade animation. This is in seconds.
$backstretch['fade'] = 0.5;

// This changes whether the backgrounds are done by list or randomly shown. This value is either 0 or 1.
$backstretch['random'] = 0;

// list all the backgrounds here, please use the same style as the example to avoid errors or complications.
$backstretch['backgrounds'] = [
    'https://i.imgur.com/ukakFAY.jpg',
    'https://i.imgur.com/7ScMT1s.jpg',
    'https://i.imgur.com/ZigXtRx.jpg',
    'https://i.imgur.com/Cgkigto.jpg'
];


/**
 * The available layouts are as shown
 * - 1
 * - 2
 * - legacy
 * You can view the different layouts on the store description
 */

$layout = "2";




//This is where you add extra header links. Please review tutorial if you are unsure of what does what. leave the RIGHT SIDE blank (example "").
$show_header_links = true;
$header_links = [
    [
        "Link" => "http://google.com",
        "Icon" => "google",
        "Title" => "Google"
    ],
    [
        "Link" => "http://twitter.com",
        "Icon" => "twitter",
        "Title" => "Twitter"
    ],
    [
        "Link" => "http://facebook.com",
        "Icon" => "facebook",
        "Title" => "Facebook"
    ]
];



// If you're reading this than you have configured the addon completely.
// IF YOU HAVE NOT ENTIRELY CONFIGURED THIS ADDON I WILL NOT GIVE YOU SUPPORT.
// This is a failsafe due to people slapping the addon in and not actually doing anything with it.
$done = false;

