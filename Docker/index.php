<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      background-color: #CCCCFF;
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
      background-color: #D1B48C;
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
      background-color: #D1B48C;
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
  <div class="banner">Words of the Day</div>
  <div class="box-container">
    <div class="box"><?php echo $_ENV['WORD1']; ?></div>
    <div class="box"><?php echo $_ENV['WORD2']; ?></div>
    <div class="box"><?php echo $_ENV['WORD3']; ?></div>
    <div class="box"><?php echo $_ENV['WORD4']; ?></div>
    <div class="box"><?php echo $_ENV['WORD5']; ?></div>
  </div>
</body>
</html>
