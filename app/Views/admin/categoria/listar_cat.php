
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="d-lg-flex">
                            <div>
                                <h5 class="mb-0">Todos las cateforias</h5>
                            </div>
                            <div class="ms-auto my-auto mt-lg-0 mt-4">
                                <div class="ms-auto my-auto">
                                    <a href="<?= base_url('crear_cat'); ?>" class="btn bg-gradient-primary btn-sm mb-0"><i class="fa-solid fa-plus"></i> Nuevo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- End Navbar -->
                    <div class="card-body px-0 pb-0">
                        <div class="table-responsive">
                                <!-- End Navbar -->
                            <table class="table align-items-center mb-0" id="data-list">
                                    <!-- End Navbar -->
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7"> ID_CATEGORIA</th>


                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">NOMBRE_CATEGORIA</th>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">DES_CATEGORIA</th>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">ACCIONES</th>
                                    
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($categoria as $categorias) :  ?>
                                        <tr>

                                            <td><span class="text-xs font-weight-bold"><?= $categorias['ID_CATEGORIA']; ?></span></td>
                                            <td><span class="text-xs font-weight-bold"><?= $categorias['NOMBRE_CATEGORIA']; ?></span></td>
                                            <td><span class="text-xs font-weight-bold"><?= $categorias['DES_CATEGORIA']; ?></span></td>

                                            <td class="text-lg pe-5">
                                                <span type="button" id="options" data-bs-toggle="dropdown"><i class="fa-solid fa-list"></i></span>
                                                <ul class="dropdown-menu" aria-labelledby="options">
                                                    <li><a class="dropdown-item" href="<?= base_url('editar_cat/' . $categorias['ID_CATEGORIA']) ?>">editar</a></li>
                                                    <li><a class="dropdown-item" href="<?= base_url('borrar_cat/' . $categorias['ID_CATEGORIA']) ?>">Eliminar</a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>