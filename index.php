<?php

// Get random image to display for the idiots who think that wearing a mask hurts you
require('get_random_gif.php');
$randomGif = get_random_gif();

// Links for the bottom area
$bottomLinks = array(
    array(
        'text' => 'Ways to support the Black Lives Matter movement',
        'link' => 'https://blacklivesmatters.carrd.co/',
    ),
    array(
        'text' => 'Made by Jared Martinez',
        'link' => 'https://martinezdesigns.net/',
    ),
    array(
        'text' => 'Source Code',
        'link' => 'https://github.com/SoftTaco97/canmaskshurtyou.com/',
    ),
);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Does wearing a mask affect your health? If so, how?">
  <meta name="twitter:card" content="summary" />
  <meta property="og:type" content="document" />
  <meta property="og:title" content="Can wearing a mask actually harm you?" />
  <meta property="og:url" content="https://canmaskshurtyou.com/" />
  <meta property="og:image" content="https://canmaskshurtyou.com/img/masks.png" />
  <title>Can Masks Hurt You?</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

  <!-- Styling -->
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
    }
    h1 {
      padding: 1em;
      padding-bottom: .25em;
      border-bottom: 1px solid #d3d3d3;
    }
    img {
      box-shadow: 5px 2px 10px 2px #d3d3d3;
      margin-bottom: 1em;
    }
    a {
      text-decoration: none;
      padding: 1em;
    }
    a:first-of-type {
      border-top: 1px solid #d3d3d3;
    }
  </style>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-173961413-1"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-173961413-1');
  </script>
</head>
<body>
  <h1>Can wearing a mask hurt you?</h1>
  <img src="<?php echo $randomGif ?>" alt="Of course not." />
  <?php foreach($bottomLinks as $link): ?>
    <a href="<?php echo $link['link']; ?>" target="_blank"><?php echo $link['text']; ?></a>
  <?php endforeach; ?>
</body>
</html>