<?php /* Template Name: Emploi */ get_header(); get_template_part('nav');?>
<main>
    <div class="e_bagarre rellax" data-rellax-speed="6"><img src="<?php echo get_template_directory_uri(); ?>/img/bagarre.png" alt="Personnage qui donne un coup de poing"></div>
    <div class="e_green1 rellax" data-rellax-speed="-4"></div>
    <div class="e_green2 rellax" data-rellax-speed="4"></div>
    <div class="e_yellowcross rellax" data-rellax-speed="-1"><img src="<?php echo get_template_directory_uri(); ?>/img/croix_jaune.png" alt="croix jaune"></div>
    <div class="e_yellowcross2 rellax" data-rellax-speed="-2"><img src="<?php echo get_template_directory_uri(); ?>/img/croix_jaune.png" alt="croix jaune"></div>
    <div class="e_superman rellax" data-rellax-speed="4"><img src="<?php echo get_template_directory_uri(); ?>/img/superman.png" alt="personnage qui vole"></div>
    <div class="e_rectangle rellax" data-rellax-speed="-1"><img src="<?php echo get_template_directory_uri(); ?>/img/rectangle_bleu.png" alt="rectangle bleu"></div>
    <div class="e_rectangle2 rellax" data-rellax-speed="3"><img src="<?php echo get_template_directory_uri(); ?>/img/rectangle_bleu.png" alt="rectangle bleu"></div>
    <section class="e_sec">
        
        <div class="e_titre">
            <h1>Le mode d'emploi</h1>
        <p>Comment devenir un super-communicant ?</p>
    </div>
    
    <div class="e_valeur">
        <h2>Révélons vos valeurs</h2>
        <p>Ensemble, nous révélons le meilleur de vos entreprises et de vos savoir-faire.</p>
    </div>
    <div class="e_hashtags">
        <div class="e_analyser">
            <h5>analyser votre activité</h5>
            <p>#audit #enquête #concurrence</p>
        </div>
        <div class="e_determiner">
            <h5>déterminer votre stratégie de communication</h5>
            <p>animation d'ateliers com'<br>brainstorming</p>
        </div>
    </div>
</section>

<section class="e_creons">
    <div class="e_titre2">
        <h2>Créons la différence</h2>
        <p>Nous mettons notre expertise et notre 
        créativité à votre service pour vous
        permettre de vous démarquer et de vous</p>
    </div>
    <div class="e_hashtags2">
        <div class="e_msg">
            <h5>concevoir le message</h5>
            <p>#pitch commercial #création de contenus<br>#identité visuelle</p>
        </div>
        <div class="e_deter">
            <h5>déterminer le plan de communication</h5>
            <p>quels support ? quels médias ?<br>quand ? quels coûts ?</p>
        </div>
        <div class="e_cre">
            <h5>créer vos supports</h5>
            <p>imprimés, press, digital, réseaux sociaux;<br>vidéos, salons, goodies...</p>
        </div>
        <div class="e_sel">
            <h5>sélectionner et/ou piloter les prestataires</h5>
            <p>digital, imprimer, enseigne, photographie...</p>
        </div>
    </div>
</section>
<div class="e_run rellax" data-rellax-speed="7"><img src="<?php echo get_template_directory_uri(); ?>/img/run.png" alt="croix jaune"></div>
<section class="e_cultiver">
    <hr class="hr1">
    <div class="e_divpasplus">
        <p class="e_pasplus">ne m'en dites pas plus...</p>
        <div class="e_fonrouge">
            <a class="e_costume"href="#">j'enfile mon collant</a>
        </div>
    </div>
    <hr class="hr2">
    <div class="e_titre3">
        <h2>Cultivons vos talents</h2>
        <p>Nous proposons les outils qui
           professionnalisent votre communication
           et mettent en lumière les talents de votre entreprise.</p>
    </div>
    <div class="e_hashtags">
        <div>
            <h5>former vos talents</h5>
            <p>logiciels d'infographie, mise à jour de site web,<br>réseaux sociaux</p>
        </div>
        <div>
            <h5>vous donner de l'autonomie</h5>
            <p>création et utilisation de gabarits<br>outils pratiques</p>
        </div>
        <div>
            <h5>piloter votre communication</h5>
            <p>tableau de bord, pilotage des prestataires</p>
        </div>
        <div>
            <h5>animer votre communication</h5>
            <p>animation de brainstoming<br>comité de rédaction</p>
        </div>
    </div>
    <div class="e_button">
        <a class="e_savoirplus" href="#">en savoir plus</a>
    </div>
    <?php get_footer();?>
</section>
</main>

<script>
    var rellax = new Rellax('.rellax');
</script>
