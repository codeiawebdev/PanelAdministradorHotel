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
              <h5>Añadir cama</h5>
            </div>

            <div class="card-body">

              <div class="row">
                <div class="col-md-12 col-lg-12">

                  <form action="bed.php" method="post">

                    <div class="mb-3">
                      <label for="input_cantidad" class="form-label">Número de camas</label>
                      <input type="number" class="form-control" id="input_cantidad">
                    </div>

                    <div class="mb-3">
                      <input type="submit" class="btn btn-primary form-control" value="Agregar">
                    </div>

                  </form>

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