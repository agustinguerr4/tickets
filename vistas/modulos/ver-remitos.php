<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Remitos Guardados<small> - Viejo Almacén</small></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item"><i class="fas fa-users-cog"></i></li>
                        <li class="breadcrumb-item active">Remitos Guardados</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
           


            <div class="modal-body">
                <table class="table table-bordered table-striped dt-responsive tablaRemitosGuardados" width="100%">
                <thead>
                        <tr>
                            <th style="width:10px">#</th>
                            <th>Cliente</th>
                            <th style="width:10%">Fecha</th>
                            <th style="width:10%">Costo</th>
                            <th style="width:7%">Acciones</th>
                        </tr>
                    </thead>


                </table>
                <input type="hidden" value="<?php echo $_SESSION["perfil"];?>" name="perfilOculto" id="perfilOculto">
            </div>
            <!-- /.card-body -->

        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>

<?php

            $eliminarRemito = new ControladorRemitos();
            $eliminarRemito -> ctrEliminarRemito();
        ?>