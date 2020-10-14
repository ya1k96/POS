<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h4 class="mt-4"><?php echo $titulo; ?></h4>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>

            <form method="POST" action="<?php echo base_url('/unidades/insertar'); ?>">

                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label for="">Nombre</label>
                            <input type="text" class="form-control" id="nombre" type="text" name="nombre" autofocus required>
                        </div>
                        <div class="col-12 col-sm-6">
                            <label for="">Nombre Corto</label>
                            <input type="text" class="form-control" id="nombre_corto" type="text" name="nombre_corto" required>
                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url('/unidades'); ?>" class="btn btn-primary">Regresar</a>
                <input type="submit" class="btn btn-success" value="Guardar">
            </form>
        </div>
    </main>