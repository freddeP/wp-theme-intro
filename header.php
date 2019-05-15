<!DOCTYPE html>
<html lang="en">
<head>

<?php 
    // använda wordpress head-funktion som andra plugin kan använda.
    wp_head();
    get_nav_menu_locations();

?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php ?></title>
</head>
<body>

<header>
<?php
    // lägger till möjlighet till navigation i header.php just här! :)
    wp_nav_menu( array("theme_location" => "top-menu"));
?>

</header>
    
