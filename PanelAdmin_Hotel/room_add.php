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
              <h5>Añadir habitación</h5>
            </div>

            <div class="card-body">

              <div class="row">
                <div class="col-md-12 col-lg-12">

                  <form action="room.php" method="post">

                    <div class="mb-3">
                      <label for="input_tipo" class="form-label">Tipo de habitación</label>
                      <select class="form-select" id="input_tipo" aria-label="Default select example">
                        <option selected>Selecciona un tipo</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>

                    <div class="mb-3">
                      <label for="input_cama" class="form-label">Habitacion Cama</label>
                      <select class="form-select" id="input_cama" aria-label="Default select example">
                        <option selected>Selecciona una cantidad de cama</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>

                    <div class="mb-3">
                      <label for="input_foto" class="form-label">Foto</label>
                      <input type="file" class="form-control" id="input_foto">
                    </div>

                    <div class="mb-3">
                      <label for="input_persona" class="form-label">Persona</label>
                      <input type="number" class="form-control" id="input_persona">
                    </div>

                    <div class="mb-3">
                      <label for="input_precio" class="form-label">Precio</label>
                      <input type="number" class="form-control" id="input_precio">
                    </div>

                    <div class="mb-3">
                      <label for="input_contar" class="form-label">Contar</label>
                      <input type="number" class="form-control" id="input_contar">
                    </div>

                    <div class="mb-3">
                      <label for="input_escala" class="form-label">Tamaño</label>
                      <input type="number" class="form-control" id="input_escala">
                    </div>

                    <div class="mb-3">
                      <label for="input_vista" class="form-label">Vista</label>
                      <input type="text" class="form-control" id="input_vista">
                    </div>

                    <div class="mb-3">
                      <label for="input_etiqueta" class="form-label">Etiqueta</label>
                      <textarea class="form-control" id="input_etiqueta" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                      <p>Descripción</p>
                      <div id="editor_quill"></div>
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