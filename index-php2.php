<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="dist/app.css">
  <title>Document</title>
</head>
<body>
  <header>
    <div class="header">
      <img src="https://gogomagazine.it/wp-content/uploads/2018/01/Spotify-logo.jpg" alt="">
    </div>
  </header>
  <main>
    <div class="boxs">

    </div>
  </main>

  <script id="entry-template" type="text/x-handlebars-template">
   <div class="box">
     <ul>
       <li> <img src={{poster}} alt=""> </li>
       <li> <h3>{{title}}</h3>  </li>
       <li class="author"> {{author}} </li>
       <li> {{year}} </li>
     </ul>
   </div>
 </script>

  <script src="dist/app.js" charset="utf-8"></script>
</body>
</html>
