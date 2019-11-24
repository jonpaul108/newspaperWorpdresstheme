<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
    <header class='headerContainer'>
        <div class='logo'>
        <?php echo wp_get_attachment_image(56, 'small')?>
        </div>
        <nav class='menu'>
            <a>HOME</a>
            <a>ABOUT</a>
            <a>BLOG</a>
            <a>LATEST</a>
        </nav>
        <div class='socialMedia'>
            <a><img /></a>
            <a><img/></a>
            <a><img/></a>
        </div>  
    </header>
    <div class='shadow'></div>
    <div class='cover'></div> 