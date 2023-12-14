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

      <div class="row d-flex align-items-stretch">

        <div class="col-xl-3 col-lg-6 col-md-12 mb-2">
          <div class="card mb-3 h-100">
            <div class="row g-0">
              <div class="col-4 d-flex align-items-center justify-content-center">
                <i class="bx bx-money fs-1"></i>
              </div>
              <div class="col-8">
                <div class="card-body">
                  <h5 class="card-title">1111111</h5>
                  <p class="card-text"><small class="text-muted">Número de reservas</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-12 mb-2">
          <div class="card mb-3 h-100">
            <div class="row g-0">
              <div class="col-4 d-flex align-items-center justify-content-center">
                <i class="bx bx-cart fs-1"></i>
              </div>
              <div class="col-8">
                <div class="card-body">
                  <h5 class="card-title">1111111</h5>
                  <p class="card-text"><small class="text-muted">Número de nuevas reservas</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-12 mb-2">
          <div class="card mb-3 h-100">
            <div class="row g-0">
              <div class="col-4 d-flex align-items-center justify-content-center">
                <i class="bx bx-window-alt fs-1"></i>
              </div>
              <div class="col-8">
                <div class="card-body">
                  <h5 class="card-title">1111111</h5>
                  <p class="card-text"><small class="text-muted">Número de reservas restantes</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-12 mb-2">
          <div class="card mb-3 h-100">
            <div class="row g-0">
              <div class="col-4 d-flex align-items-center justify-content-center">
                <i class="bx bxs-group fs-1"></i>
              </div>
              <div class="col-8">
                <div class="card-body">
                  <h5 class="card-title">1</h5>
                  <p class="card-text"><small class="text-muted">Usuarios</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>


      <div class="row">
        <div class="col-lg-12">
          <div class="card">

            <div class="card-body">
              <h4>Tráfico</h4>
            </div>

            <div class="row">
              <div class="col-xl-8">
                <div class="card-body">
                  <div id="chart1" class="custom-chart"></div>
                </div>
              </div>
              <div class="col-xl-4">
                <div class="card-body">

                  <div class="mb-4">
                    <h5>Visitas</h5>
                    <div>96.930 Usuarios (25%)</div>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                        aria-valuemax="100"></div>
                    </div>
                  </div>

                  <div class="mb-4">
                    <h5>Porcentaje de rebote</h5>
                    <div>3.220 Usuarios (50%)</div>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                        aria-valuemax="100"></div>
                    </div>
                  </div>

                  <div class="mb-4">
                    <h5>Visitantes únicos</h5>
                    <div>29.658 Usuarios (75%)</div>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                        aria-valuemax="100"></div>
                    </div>
                  </div>

                  <div class="mb-4">
                    <h5>Visitantes objetivo</h5>
                    <div>99.658 Usuarios (100%)</div>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                        aria-valuemax="100"></div>
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