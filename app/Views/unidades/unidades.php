<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h4 class="mt-4"><?php echo $titulo; ?></h4>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>
            <div>
                <p>
                    <a href="<?php echo base_url('/unidades/nuevo'); ?>" class="btn btn-info">
                        agregar
                    </a>
                    <a href="<?php echo base_url('/unidades/eliminados'); ?>" class="btn btn-warning">
                        eliminados
                    </a>
                </p>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    DataTable Example
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Nombre Corto</th>
                                    <th>Activo</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($datos as $item) :?>
                                    <tr>
                                        <td><?php echo $item['nombre'];?></td>
                                        <td><?php echo $item['nombre_corto'];?></td>
                                        <td><?php echo $item['activo'];?></td>
                                        <td><a href="<?php echo base_url('/unidades/editar').'/'.$item['id']; ?>" class="btn btn-warning">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a href="<?php echo base_url('/unidades/eliminar').'/'.$item['id']; ?>" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    