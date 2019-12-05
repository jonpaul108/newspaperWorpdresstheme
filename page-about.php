<?php 
/*
 * Template Name: About Page
 */
get_header();
?>

<div class='aboutPage'>
    <div class='aboutHeroImage'>
        <?php echo wp_get_attachment_image(197, 'full')?> 
        <div class='textContainer'>
            <p>Rad Animal</p>
            <p>Some more text here</p>
        </div>
    </div>
    <main class='mainContent'>
        <h1>this is like my title</h1>
        <p>Description of stuff: Lorem ipsum dolor sit amet, hinc oratio delicatissimi qui ex. Dicunt indoctum iracundia ut mea, convenire gubergren adolescens mei ne. Ius id labore salutatus. Ne cum augue elitr vituperata.
             Mea mollis phaedrum an, sed te viris lucilius. Verterem convenire adolescens in his. At mel postea blandit offendit, mollis pertinacia ad has, duo legendos adolescens in. Dico verterem quaerendum ne his. Nihil decore platonem vel eu. Ex nam sint doming, elitr persequeris cu pro. Cum quis laoreet scriptorem ei, adhuc autem solet in vel, id pri ponderum liberavisse conclusionemque.
        </p>
        <div class='contentImg'>
            <?php echo wp_get_attachment_image(198, 'medium')?> 
        </div>
         <p>Description of stuff: Lorem ipsum dolor sit amet, hinc oratio delicatissimi qui ex. Dicunt indoctum iracundia ut mea, convenire gubergren adolescens mei ne. Ius id labore salutatus. Ne cum augue elitr vituperata.
            Mea mollis phaedrum an, sed te viris lucilius. Verterem convenire adolescens in his. At mel postea blandit offendit, mollis pertinacia ad has, duo legendos adolescens in. Dico verterem quaerendum ne his. Nihil decore platonem vel eu. Ex nam sint doming, elitr persequeris cu pro. Cum quis laoreet scriptorem ei, adhuc autem solet in vel, id pri ponderum liberavisse conclusionemque.
        </p>
    </main>
    <div class='callToAction'>
        <h2>Do this thing</h2>
        <div class='actionBtn' id='action1'>Blog</div>
        <div class='actionBtn' id='action2'>Store</div>
    </div>
</div>

<?php get_footer();?>