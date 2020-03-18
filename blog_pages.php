<!DOCTYPE html>
<html style="scroll-behavior: smooth">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="./default/theme.css">
  <link rel="icon" href="./img/fav.png">
</head>


<body>

  <?php include 'sections/nav.php'; ?>

  <?php include 'sections/blog_core.php'; ?>

  <div class="py-5" style="background-image: url(img/bkgnd-contato.png);	background-position: center;	background-size: cover;	background-repeat: no-repeat;">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">
			
			<?php include 'sections/blog_post.php'; ?>

        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 py-3">

          <?php include 'sections/blog_sidebar.php'; ?>

        </div>
      </div>
    </div>

    <?php include 'sections/footer.php'; ?>

  </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>