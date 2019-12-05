<!DOCTYPE html>
<html lang="en">
<head>
<title>Rad Animal Store</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Description" content="The Rad Animal store. You'll find quirky, funny, and protesty shirts of your favorite animals. Check out our current selection to find something you'll wear for years.">
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
    <header class='storeHeaderContainer'>
        <nav class='menu'>
            <?php wp_nav_menu(array('theme_location' => 'top-nav')) ?>
        </nav>
    </header>