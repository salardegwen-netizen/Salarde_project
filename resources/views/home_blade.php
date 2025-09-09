<?php
echo '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Hello Purple Black Effect</title>
<style>
  body {
    background-color: black;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
  }
  .hello-text {
    font-size: 5em;
    font-weight: bold;
    color: #9b30ff; /* purple */
    text-shadow:
      2px 2px 5px #000000,
      0 0 10px #9b30ff,
      0 0 20px #9b30ff;
    font-family: Arial, sans-serif;
  }
</style>
</head>
<body>
  <div class="hello-text">Hello World!</div>
</body>
</html>';
?>
