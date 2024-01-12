<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" 
          href="<?php bloginfo('stylesheet_url'); ?>">
  </head>
  <body>
    <header>
      <div class="container">
        <h1><?php bloginfo('name'); ?></h1>
        <span><?php bloginfo('description'); ?></span>
        <div class="h_right">
          <form>
            <input type="text" placeholder="Search..." />
          </form>
        </div>
      </div>
    </header>
    <nav class="nav main-nav">
      <div class="container">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="#">Services</a></li>
        </ul>
      </div>
    </nav>
    <div class="container content">
      <div class="main block">
         <article class="post">

        <?php if(have_posts()) : ?> 
          <?php while(have_posts()) : the_post(); ?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p class="meta">Posted at <?php the_time(); ?> on <?php the_date(); ?> by <?php the_author(); ?></p>
            <?php the_content(); ?>
          <?php endwhile; ?>
        <?php else : ?>
          <?php echo wpautop('Sorry, No posts were found'); ?>
        <?php endif; ?>

            <a class="button" href="#">Read More</a>
          </article>

      </div>
  </body>
</html>
