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
          <h2>Blog Post 1</h2>
            <p class="meta">Posted at 11:00 on May 9 by admin</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in tristique turpis, non rutrum ipsum. Suspendisse eleifend sodales neque quis pretium. Vestibulum vehicula rhoncus suscipit. Maecenas in libero non dui ullamcorper laoreet. Quisque commodo ac mauris a ultrices. Fusce mi mi, cursus eleifend imperdiet quis, bibendum non nulla. Mauris tincidunt leo purus, tincidunt lacinia leo maximus non. In eget posuere quam, ac ornare metus. Integer molestie sem egestas luctus sodales.

              Vestibulum vitae arcu purus. Mauris tempor, ex nec tristique efficitur, tortor leo mattis lectus, et sagittis erat velit sed orci. Morbi maximus orci eget luctus elementum. Sed bibendum libero a lobortis viverra. Proin felis nisi, eleifend eget interdum ac, semper vel massa. Ut enim arcu, rhoncus sit amet cursus ut, iaculis ut elit. Phasellus gravida elementum arcu, et maximus felis auctor sed. Vivamus at felis auctor, mollis nunc vitae, vulputate ex. Aliquam feugiat nunc auctor lacinia laoreet. Vestibulum eget odio vitae velit facilisis ullamcorper. Maecenas pretium eu libero non rhoncus. Ut tempus varius dolor ut accumsan. Aliquam fringilla magna id purus pretium, ac pretium libero placerat. In nunc ipsum, iaculis vitae molestie in, pulvinar sit amet mi. Nunc vulputate vestibulum quam, ac venenatis leo bibendum luctus. Nullam semper lorem dui, id efficitur arcu interdum a.</p>

            <a class="button" href="#">Read More</a>
         </article>
      </div>
  </body>
</html>
