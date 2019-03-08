<?php
$server = $_SERVER['SERVER_NAME'];
$root_url = "/";
if($server == "localhost"){
    $root_url = "/reviveclinics/";
}
$logo = "img/logo.jpg";

function rootUrl(){
    global $root_url;
    echo $root_url;
}
function getUrl($hashUri, $pageUri){
    global $server, $root_url;
    $uri = $_SERVER['REQUEST_URI'];
    if($uri == $root_url || $uri == $root_url."index.php"){
        echo "#".$hashUri;
    } else{
        echo $root_url.$pageUri;
    }
}
function getCssLinks($links){
    global $root_url;
    foreach($links as $link)
        echo '<link href="'.$root_url.$link.'" rel="stylesheet" type="text/css" />';
}
function getJsLinks($links){
    global $root_url;
    foreach($links as $link)
        echo '<script src="'.$root_url.'js/'.$link.'.js"></script>';
}
function getLogo(){
    global $root_url, $logo;
    echo '<img src="'.$root_url.$logo.'" alt="logo" height="50" class="pull-left" style="margin-top: -2rem;"/>';
}

?>

<link rel="shortcut icon" type="image/png" href="<?php rootUrl(); ?>img/favicon.png" />
<?php 
$globalCss = [
    'css/bootstrap.min.css',
    'font-awesome/css/font-awesome.min.css',
    'css/style.css',
    'color/yellow.css' // Template Skin
];
getCssLinks($globalCss);
?>

