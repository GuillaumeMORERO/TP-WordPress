<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <?php wp_head(); ?>
</head>
<body>
    <div class="wrapper">
      <!-- emmet: header>h1+p+nav>ul>li*3>a -->
      <header class="left">
        <h1 class="left__title"><a href="index.html" class="left__title-link">O'Clock Students News</a></h1>
        <div class="left__paragraph">
          <h2 class="left__subtitle"><strong class="left__subtitle-strong">Latest news</strong> from our students</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque suscipit nibh quis porttitor. Integer iaculis mi urna, a pulvinar quam adipiscing ut. Vivamus vel vestibulum mauris.
          </p>
        </div>
        <?php
          $menuCode = wp_nav_menu([
            'theme_location' => 'footer',   // le nom du menu déclaré dans functions.php
            'container' => 'nav',           // la balise qui contient le menu
            'menu_class' => 'left__nav',    // la classe de la balise "ul"
            'echo'  => false                // je ne souhaite pas afficher le menu (mais l'avoir dans une variable)
          ]);

          // On modifie le code HTML généré par 
          $menuCode = str_replace('menu-item', 'left__nav-item', $menuCode);
          $menuCode = str_replace('href', 'class="left__nav-link" href', $menuCode);

          echo $menuCode;
        ?>
      </header>
      <main class="right">