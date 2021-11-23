
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Algo Studio - Dashboard Panel</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/dashboard/dashboard.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Algo Studio</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" title="ke Daftar Produk" href="<?php echo base_url('product/listing'); ?>"><i class="fa fa-power-off"></i></a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">

        <main role="main" class="col-md-12 ml-sm-auto col-lg-12 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Statistik dan Data</h1>

          </div>

          <div class="row">
            <div class="col">
              <canvas class="my-4" id="myChart"></canvas>
            </div>
            <div class="col">
              <canvas class="my-4" id="urChart"></canvas>
            </div>
          </div>     

          <h2>Daftar 10 Penjualan Terakhir</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama Pelanggan</th>
                  <th>Alamat Tujuan</th>
                  <th>Tanggal Transaksi</th>
                  <th>Total Harga</th>
                </tr>
              </thead>
              <tbody>
                <?php $num=1; ?>
                <?php foreach ($trxs as $trx) :?>
                <tr>
                  <td><?php echo $num; ?></td>
                  <td><?php echo $trx['trx_user']; ?></td>
                  <td><?php echo $trx['trx_address']; ?></td>
                  <td><?php echo $trx['trx_datetime']; ?></td>
                  <td><?php echo $trx['trx_total_price']; ?></td>
                </tr>
                <?php $num++; ?>
                <?php endforeach; ?>

              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <?php //echo date('d'); ?>
    <?php $dates = array(); ?>
    <?php $stats = $outstats; ?>
    <?php for ($i=1; $i<=date('d'); $i++): ?>
      <?php array_push($dates, $i); ?>
    <?php endfor; ?>
    <?php //print_r($dates) ; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: <?php echo json_encode($dates); ?>,
          datasets: [{
            data: <?php echo json_encode($stats); ?>,
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>

    <?php $category_names = array(); ?>
    <?php $category_counts = array(); ?>
    <?php foreach ($categories as $category) : ?>
      <?php  array_push($category_names, $category['product_category']); ?>
      <?php  array_push($category_counts, $category['product_count']); ?>
    <?php endforeach; ?>
    <?php //var_dump($category_names); die; ?>
    <?php //var_dump($category_counts); die; ?>
    <script type="text/javascript">
      var ctx = document.getElementById("urChart");
      var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
          labels: <?php echo json_encode($category_names); ?>,
          datasets: [{
            data: <?php echo json_encode($category_counts); ?>,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          responsive: true,
          plugins: {
            legend: {
              position: 'top',
            },
            title: {
              display: true,
              text: 'Persentase Kategori Barang'
            }
          }
        }
      });
    </script>
  </body>
</html>
