
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Algo Studio - Product Listing</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/pricing/pricing.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal">Algo Studio</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="<?php echo base_url('dashboard'); ?>">Dashboard</a>
        <a class="p-2 text-dark" href="<?php echo base_url('product/listing'); ?>">Products</a>
      </nav>
      <a class="btn btn-outline-primary" href="#"><i class="fa fa-power-off"></i></a>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Products</h1>
      <p class="lead">The main page of our site which showing the listing of all our products</p>
    </div>

    <div class="container">

      <?php $counter = 1; ?>
      <?php foreach ($products as $product) : ?>
        <?php if ($counter % 3 == 1) : ?>
          <?php echo '<div class="card-deck mb-3 text-center">'; ?>
        <?php endif; ?>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal"><?php echo $product['product_name']; ?></h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><small class="text-muted">Rp</small> <?php echo number_format($product['product_selling_price'],0,',','.'); ?> <small class="text-muted">,-</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li><?php echo $product['product_description']; ?></li>
              <li>(Stok: <?php echo $product['product_stock']; ?>)</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Add to <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>     
        <?php if ($counter % 3 == 0) : ?>
          <?php echo '</div>'; ?>
        <?php endif; ?>
        <?php $counter++; ?>
      <?php endforeach; ?>

      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <img class="mb-2" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted">&copy; 23 November 2021</small>
          </div>
          <div class="col-6 col-md">
            <h5>Admin</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Dashboard</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Products</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Listing</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Us</a></li>
            </ul>
          </div>
        </div>
      </footer>

    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
