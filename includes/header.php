<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title><?php echo $title; ?></title>
</head>
<body>
  <header>
    <a href="index.php"><h1>Marioclub</h1></a>
  </header>
  <section class="banner">
    <img src="img/banner.jpg" alt="marioclub welcome banner">
    <div class="welcome">
      <h2>Welcome to <br><span>Marioclub 
      <?php 
          if($page == 'news'){echo 'news';} 
          elseif ($page == 'games'){echo 'games';}
          elseif ($page == 'contact'){echo 'contact';}
          else {echo '';}
      
      ?></span></h2>
    </div>
  </section>
  <nav class="main-nav">
    <ul>
      <li><a href="index.php" class="<?php if($page == 'index'){echo 'join';} ?>">Join the club</a></li>
      <li><a href="news.php" class="<?php if($page == 'news'){echo 'join';} ?>">Latest news</a></li>
      <li><a href="games.php" class="<?php if($page == 'games'){echo 'join';} ?>">New games</a></li>
      <li><a href="contact.php" class="<?php if($page == 'contact'){echo 'join';} ?>">Contact</a></li>
    </ul>
  </nav>