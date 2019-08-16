<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//this helps us avoid PHP date errors:
//adjusting the time zone
date_default_timezone_set('America/Los_Angeles');





define('THIS_PAGE',basename($_SERVER['PHP_SELF']));
/*basename removes all directory that we don't want*/


switch(THIS_PAGE){

    case 'index.php':
        $title = "Kevin's WEB120 BIG Final Project Page";
        $logo = 'fas fa-football-ball';
        $PageID = 'Welcome to BIG Project Homepage';
        $class = 'home';
    break;

    case 'research1.php':
        $title = "BIG - Research Page 1";
        $logo = 'fas fa-mobile-alt';
        $PageID = 'Research Page 1';
        $class = 'research1';
    break;
        
    case 'research2.php':
        $title = "BIG - Research Page 2";
        $logo = 'fas fa-images';
        $PageID = 'Research Page 2';
        $class = 'research2';
    break;
        
    case 'research3.php':
        $title = "BIG - Research Page 3";
        $logo = 'fas fa-boxes';
        $PageID = 'Research Page 3';
        $class = 'research3';
    break;
        
    case 'research4.php':
        $title = "BIG - Research Page 4";
        $logo = 'fas fa-shopping-cart';
        $PageID = 'Research Page 4';
        $class = 'research4';
    break;

    case 'calendar.php':
        $title = "BIG - Calendar";
        $logo = 'fas fa-calendar-day';
        $PageID = 'BIG Calendar Page';
        $class = 'calendar';
    break;
        
    case 'findus.php':
        $title = "BIG - Find Us";
        $logo = 'fas fa-map-marked-alt';
        $PageID = 'Find Us Here';
        $class = 'findus';
    break;

    case 'media.php':
        $title = "BIG - Media";
        $logo = 'fas fa-compact-disc';
        $PageID = 'Multimedia to enhance website';
        $class = 'media';
    break;
        
    default:
        $title = THIS_PAGE;
        $logo = 'fas fa-jedi';//no icon by default
        $PageID = 'Welcome';
        $class = 'default';

}

/*Array and Keys*/
/*For Navigation content*/
$nav1['../big/index.php'] = "BIG";
$nav1['../big/media.php'] = "Media";
$nav1['../big/research1.php'] = "Research #1";
$nav1['../big/research2.php'] = "Research #2";
$nav1['../big/research3.php'] = "Research #3";
$nav1['../big/research4.php'] = "Research #4";
$nav1['../big/findus.php'] = "Find Us";
$nav1['../index.php'] = "Kevin's Portal Page";


function makeLinks($nav1)
{
    $myReturn = '';
    foreach($nav1 as $url => $text){
        
        /*Condition for making the highlighted tab for current page*/
        if($url == THIS_PAGE){
            $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";
        }else{
            $myReturn .= "<li><a href=\"$url\">$text</a></li>";
        }
    }
    
    return $myReturn;
}


?>

