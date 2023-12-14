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
              <h5>Editar tipo de habitación</h5>
            </div>

            <div class="card-body">

              <div class="row">
                <div class="col-md-12 col-lg-12">

                  <form action="room_type.php" method="post">

                    <div class="mb-3">
                      <label for="input_nombre" class="form-label">Nombre</label>
                      <input type="text" class="form-control" id="input_nombre">
                    </div>

                    <div class="mb-3">
                      <label for="input_estrella" class="form-label">Estrella</label>
                      <input type="number" class="form-control" id="input_estrella">
                    </div>

                    <div class="mb-3">
                      <input type="submit" class="btn btn-primary form-control" value="Editar">
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