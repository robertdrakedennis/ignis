<?php
/*
                                 ------------------                                ------------------
                                    ------------------ TUTORIAL AND INFORMATION  ------------------
                                 ------------------                                ------------------
                                                      SCROLL DOWN FOR ACTUAL CONFIG

This is an example of how the card rows work. This will give a definition to each element, please read carefully to avoid problems. $row_1_cards, and row_2_cards works EXACTLY the same.

Hex Color / Web Color Resources: http://www.color-hex.com/ ->> This will give you hex colors to change the color of the Icons
Fontawesome Shortcodes: http://fontawesome.io/icons/ ->> Use the shortcode to change the "Icon" Section of any row / card. DO NOT INCLUDE FA-

$row_1_cards = [
    [
        DO NOT CHANGE THE LEFT YOU WILL BREAK PROMETHEUS.
        ONLY CHANGE THE RIGHT SIDE.
        "Title" => "Example Title", ->>  Title: Changes Card #1's Title.
        "Icon" => "question-circle", ->> Icon: Changes Card #1's Icon Shortcode.
        "Icon-color" => "#FFFFFF", ->>  Icon-color: Changes the Icon color of Card #1.
        "Info" => "I am an example info card, change me.", ->>   Info: Changes the info of Card #1.
        "Link" => "http://google.com", ->> Link: Changes or Adds a link to the bottom of Card #1.
        "Link-Title" => "Click here for more information"  ->> Link Title: Changes the name of the link on Card #1.
    ],
    [

        "Title" => "Example Title", ->>  Title: Changes Card #2's Title.
        "Icon" => "question-circle", ->> Icon: Changes Card #2's Icon Shortcode.
        "Icon-color" => "#FFFFFF", ->>  Icon-color: Changes the Icon color of Card #2.
        "Info" => "I am an example info card, change me.", ->>   Info: Changes the info of Card #2.
        "Link" => "http://google.com", ->> Link: Changes or Adds a link to the bottom of Card #2.
        "Link-Title" => "Click here for more information"  ->> Link Title: Changes the name of the link on Card #2.
    ],
    [
        "Title" => "Example Title", ->>  Title: Changes Card #2's Title.
        "Icon" => "question-circle", ->> Icon: Changes Card #2's Icon Shortcode.
        "Icon-color" => "#FFFFFF", ->>  Icon-color: Changes the Icon color of Card #2.
        "Info" => "I am an example info card, change me.", ->>   Info: Changes the info of Card #2.
        "Link" => "http://google.com", ->> Link: Changes or Adds a link to the bottom of Card #2.
        "Link-Title" => "Click here for more information"  ->> Link Title: Changes the name of the link on Card #2.
    ]
];


$header_links = [
    [
        "Link" => "http://google.com", ->> Changes or Adds a link to Header.
        "Icon" => "google", ->> Changes The Icon for the Header Link (SEE ABOVE HOW TO CHANGE ICONS
        "Title" => "Google" ->> Changes Name of Header Link
    ],
    [
        "Link" => "http://twitter.com", ->> Changes or Adds SECOND link to Header.
        "Icon" => "facebook", ->> Changes The Icon for the  SECOND Header Link (SEE ABOVE HOW TO CHANGE ICONS
        "Title" => "Twitter" ->> Changes Name of SECOND Header Link
    ],
    [
        "Link" => "http://facebook.com", ->> Changes or Adds THIRD link to Header.
        "Icon" => "twitter", ->> Changes The Icon for the  THIRD Header Link (SEE ABOVE HOW TO CHANGE ICONS
        "Title" => "Facebook" ->> ->> Changes Name of SECOND THIRD Link
    ]
];
                                                        ------------------  CONFIG STARTS BELOW LINE ------------------*/

//Display Server Info block?
$show_server_info = true;

//What kind of animation will the server info box have: Read tutorial to find where the animation cheat-sheet website is.
$server_info_animation = "bounceIn";

// URL for Server Logo
$server_logo = "http://i.xtlas.us/images/gbrz3mfw.png";

//Name of Server
$server_name = "A RP Server";

//Info About Server
$about_server = "This server is about having fun and not taking itself too serious, however this does not take away from the fact that we strive for the best in server quality! If you enjoy the survive consider donating!";

//Show Main Row?
$show_main_row = true;

//You can view what animation shortcuts to use here: https://github.com/daneden/animate.css/blob/master/README.md, if you do not want to have an animation, simply leave the contents empty: e.g: "";
$row_1_animation = "bounceIn";

//This is the initial row of cards. There are 3 cards, however you can add more if you want to. It is reccommened to only have the 3 shown here. Please review tutorial if you are unsure of what does what.
$row_1_cards = [
	[
		"Title" => "Have any questions?",
		"Icon" => "question-circle",
		"Icon-color" => "#0275d8",
		"Info" => "Message us on the server or on our forums!",
		"Link" => "Http://google.com",
		"Link-Title" => "Click here to visit our forums"
	],
	[
		"Title" => "Items?",
		"Icon" => "bolt",
		"Icon-color" => "#5cb85c",
		"Info" => "We have tons of items for you to choose from, check our shop! We're sure you'll find something you'll like",
		"Link" => "Http://google.com",
		"Link-Title" => "Click here to buy them"
	],
	[
		"Title" => "Credits?",
		"Icon" => "credit-card",
		"Icon-color" => "#5bc0de",
		"Info" => "They are a ingame currency you buy using real money. Please read our Terms of Service before buying.",
		"Link" => "Http://google.com",
		"Link-Title" => "Click here to read the ToS"
	]
];
//This is the second row of cards. There are 3 cards, however you can add more if you want to. It is reccommened to only have the 3 shown here. Please review tutorial if you are unsure of what does what.
// Please review tutorial if you are unsure of what does what. leave the RIGHT SIDE blank (example "").
//Show second row of cards?
$show_second_row = true;
// Change title for the second row of cards
$row_2_title = "Frequently Asked Questions?";
//Changes the animation of the second row of cards
$row_2_animation = "bounceIn";
$row_2_cards = [
	[
		"Title" => "Can I use something other than paypal?",
		"Icon" => "microphone",
		"Icon-color" => "#5bc0de",
		"Info" => "You can use the debit / credit card options that are used inside of paypal, other than that we unfortunately do not support anything besides paypal currently.",
		"Link" => "http://google.com",
		"Link-Title" => "Click here for more information"
	],
	[
		"Title" => "Do you have any trial memberships?",
		"Icon" => "shopping-cart",
		"Icon-color" => "#d20606",
		"Info" => "We currently offer a 2 week free trial of our most popular membership ranks.",
		"Link" => "http://google.com",
		"Link-Title" => "Click here for more information"
	],
	[
		"Title" => "Can I get a refund?",
		"Icon" => "microphone",
		"Icon-color" => "#d20606",
		"Info" => "No fuck off.",
		"Link" => "http://google.com",
		"Link-Title" => "Click here for more information"
	]
];
