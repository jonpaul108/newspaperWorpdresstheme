<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
    <header class='headerContainer'>
        <a class='logo'>
            <?php echo wp_get_attachment_image(56, 'small')?>
        </a>
        <nav class='menu'>
            <a>HOME</a>
            <a>ABOUT</a>
            <a>BLOG</a>
            <a>STORE</a>
        </nav>
        <div class='headSocial'>
            <a><img /></a>
            <a><img/></a>
            <a><img/></a>
        </div>  
    </header>
    <div class='shadow'></div>
    <div class='cover'></div> 