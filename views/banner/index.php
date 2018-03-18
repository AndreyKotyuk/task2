<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/template/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="/template/css/blog.css" rel="stylesheet">
     <link href="/template/css/main.css" rel="stylesheet">
          <link href="/template/css/flexslider.css" rel="stylesheet">

     <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
       <script src="/template/js/jquery-3.3.1.min.js"></script>
     <script src="/template/js/slider.js"></script>
     <script src="/template/js/jquery.flexslider.js"></script>
    <script src="/template/js/jquery.flexslider-min.js"></script>

  </head>

  <body>


<!-- Place somewhere in the <body> of your page -->
<div class="flexslider">
  <ul class="slides">
    <li>
      <img src="/template/images/banner/slide1.jpg" />
    </li>
    <li>
      <img src="/template/images/banner/slide2.jpg" />
    </li>
    <li>
      <img src="/template/images/banner/slide3.jpg" />
    </li>
    <li>
      <img src="/template/images/banner/slide4.jpg" />
    </li>
  </ul>
</div>

  <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="/template/js/jquery-3.3.1.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script defer src="/template/js/jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>

</body>
</html>

