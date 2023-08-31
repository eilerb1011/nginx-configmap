<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      background-color: <?php echo $_SERVER['background']; ?>;
      display: flex;
      flex-direction: column;
      height: 100vh;
      margin: 0;
      align-items: center;
    }
    .banner {
      width: 100%;
      height: 10vh;
      text-align: center;
      background-color: <?php echo $_SERVER['bannercolor']; ?>;
      display: flex;
      align-items: center;
      justify-content: center;
      color: black;
      font-family: Arial, sans-serif;
      font-size: 2em;
    }
    .box-container {
      width: 100%;
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }
    .box {
      width: 20%;
      height: 15vh;
      text-align: center;
      background-color: <?php echo $_SERVER['boxcolor']; ?>;
      display: flex;
      align-items: center;
      justify-content: center;
      color: black;
      font-family: Arial, sans-serif;
      font-size: 1.2em;
    }
  </style>
</head>
<body>
  <div class="banner"><?php echo $_SERVER['banner']; ?></div>
  <div class="box-container">
    <div class="box"><?php echo $_SERVER['word1']; ?></div>
    <div class="box"><?php echo $_SERVER['word2']; ?></div>
    <div class="box"><?php echo $_SERVER['word3']; ?></div>
    <div class="box"><?php echo $_SERVER['word4']; ?></div>
    <div class="box"><?php echo $_SERVER['word5']; ?></div>
  </div>
</body>
</html>
