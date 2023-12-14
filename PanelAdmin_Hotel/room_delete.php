<!DOCTYPE html>
<html lang="es">

<head>
  <?php include('includes/head.php'); ?>
</head>

<body>

  <?php include('includes/aside.php'); ?>

  <div class="custom-right-panel">

    <?php include('includes/header.php'); ?>

    <div class="custom-main p-4">

      <div class="row">

        <div class="col-12">

          <div class="card bg-light">
            <div class="card-header">
              <h5>Eliminar habitación</h5>
            </div>

            <div class="card-body text-center">

              <div class="row">
                <div class="col-md-12 col-lg-12">

                  <h5 class="card-title">¿Está seguro?</h5>
                  <p class="card-text">Desea eliminar la habitación número 3</p>

                  <div class="row">

                    <div class="col-5 container-fluid">
                      <a class="btn btn-primary w-100" href="room.php">No, volver</a>
                    </div>

                    <div class="col-5 container-fluid">
                      <a class="btn btn-primary w-100" href="room.php">Sí, eliminar esto</a>
                    </div>
                    
                  </div>

                </div>
              </div>

            </div>
          </div>

        </div>



      </div>

    </div>


    <?php include('includes/footer.php'); ?>

  </div>

</body>

</html>