<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Game Next</title>
    <link rel="icon" type="image/x-icon" href="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="index.css">
  </head>

  <header>
    
    <h1 id="intro">GAME NEXT</h1><p id="intro-p">Find your next favorite title</p>

  </header>
  <body>
    <main>
    <h1>Search by Title</h1>
    <form method="POST" action="search-handler.php">
        <label>Game Title:</label>
        <input type="text" placeholder="Enter Game Title" name="game-title">
        <button type="submit">Submit</button>

    </form>
    <form method="POST" action="wishlist-add.php">
      <button type="submit" id="add-wishlist">Add to Wishlist</button>

    </main>

  </body>




</html>

