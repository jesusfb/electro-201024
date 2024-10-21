<?php include_once 'views/templates/header.php'; ?>

<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
    <div class="col">
        <div class="card radius-10 border-start border-0 border-3 border-info">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-secondary">Total Usuarios</p>
                        <h4 class="my-1 text-info"><?php echo $data['usuarios']['total']; ?></h4>
                        <a class="mb-0 font-13" href="<?php echo BASE_URL . 'usuarios'; ?>">Detalle</a>
                    </div>
                    <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto">
                        <i class='fas fa-user'></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card radius-10 border-start border-0 border-3 border-danger">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-secondary">Total Clientes</p>
                        <h4 class="my-1 text-info"><?php echo $data['clientes']['total']; ?></h4>
                        <a class="mb-0 font-13" href="<?php echo BASE_URL . 'clientes'; ?>">Detalle</a>
                    </div>
                    <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i class='fas fa-users'></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <div class="col">
        <div class="card radius-10 border-start border-0 border-3 border-warning">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-secondary">Total Productos</p>
                        <h4 class="my-1 text-info"><?php echo $data['productos']['total']; ?></h4>
                        <a class="mb-0 font-13" href="<?php echo BASE_URL . 'productos'; ?>">Detalle</a>
                    </div>
                    <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto">
                        <i class='fas fa-list'></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col">
        <div class="card radius-10 border-start border-0 border-3 border-warning">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-secondary">Total Cotizaciónes</p>
                        <h4 class="my-1 text-info"><?php echo $data['productos']['total']; ?></h4>
                        <a class="mb-0 font-13" href="<?php echo BASE_URL . 'cotizaciones'; ?>">Detalle</a>
                    </div>
                    <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto">
                        <i class='fas fa-list'></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end row-->

<?php include_once 'views/templates/footer.php'; ?>