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

        <div class="col-12 toppad">

          <div class="card bg-light">
            <div class="card-header">
              <h5>Datos del tipo de habitación</h5>
            </div>

            <div class="custom-btn-container m-2">
              <a class="btn btn-primary rounded w-100" href="add_room_type.php">Agregar nuevo</a>
            </div>

            <div class="card-body">
  
              <div class="row">
                <div class="col-md-12 col-lg-12">
  
                  <table id="bootstrap-data-table" class="table table-striped table-bordered table-condensed" style="width:100%;">
  
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Estrella</th>
                        <th>Editar</th>
                        <th>Borrar</th>
                      </tr>
                    </thead>
      
                    <tbody>
                      <tr>
                        <td>Habitación Familiar</td>
                        <td>4</td>
                        <td>
                          <a class="btn btn-primary" href="edit_room_type.php">
                            <span class="bx bxs-edit"></span>
                          </a>
                        </td>
                        <td>
                          <a class="btn btn btn-danger" href="delete_room_type.php">
                            <span class="bx bxs-trash"></span>
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  
                  </table>
  
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