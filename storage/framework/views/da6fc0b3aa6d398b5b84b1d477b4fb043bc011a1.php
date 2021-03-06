<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Como crear URLs Amigables en Laravel </title>

	  <link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" rel="stylesheet">


  </head>

  <body>

    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="http://collectivecloudperu.com"><img src="http://collectivecloudperu.com/img/logo.png" class="img-fluid"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="http://collectivecloudperu.com">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://blog.collectivecloudperu.com" target="_blank">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://collectivecloudperu.com/merchandising/" target="_blank">Merchandising</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
          </li>
          </ul>
          <form name="bencc" method="get" action="http://www.google.com/search" id="bencc" class="form-inline mt-2 mt-md-0" target="_blank">
            <input type="hidden" name="domains" value="blog.collectivecloudperu.com">
            <input type="hidden" name="sitesearch" value="blog.collectivecloudperu.com">
            <input class="form-control mr-sm-2" type="text" placeholder="Buscar..." aria-label="Buscar...">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="document.getElementById('bencc').submit()">Buscar</button>
          </form>
        </div>
      </div>
    </nav>
    </header>

    <!-- P -->
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- 5 -->
	<ins class="adsbygoogle"
	     style="display:block"
	     data-ad-client="ca-pub-2390065838671224"
	     data-ad-slot="2826072263"
	     data-ad-format="auto"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
	<!-- End P -->

    <main role="main">

      <section class="text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Como crear URLs Amigables en Laravel</h1>
          <p class="lead text-muted">Selecciona un producto de la lista para ver sus detalles</p>

        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">

            <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img src="img/<?php echo e($pro->img); ?>" title="<?php echo $pro->nombre; ?>" alt="<?php echo $pro->nombre; ?>">
                <div class="card-body">
                  <p class="card-text"><?php echo $pro->nombre; ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button onclick="location.href='<?php echo e(url('productodetalle', [$pro->url])); ?>'" href="" type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                    </div>
                    <small class="text-muted">Postres</small>
                  </div>
                </div>
              </div>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </div>
          
        </div>
      </div>

    </main>


    <footer class="text-muted">
      	<div align="center">
	        Desarrollado por <a href="http://www.collectivecloudperu.com" target="_blank">Collective Cloud Perú</a>
	    </div>
    </footer>

    <script crossorigin="anonymous" integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script crossorigin="anonymous" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script crossorigin="anonymous" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Chart JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js" integrity="sha256-JG6hsuMjFnQ2spWq0UiaDRJBaarzhFbUxiUTxQDA9Lk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js" integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js" integrity="sha256-J2sc79NPV/osLcIpzL3K8uJyAD7T5gaEFKlLDM18oxY=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js" integrity="sha256-CfcERD4Ov4+lKbWbYqXD6aFM9M51gN4GUEtDhkWABMo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/datos.js"></script>

  </body>
</html>
