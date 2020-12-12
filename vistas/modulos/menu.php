        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->

                
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fab fas fa-id-card"></i>
                        <p>Remitos</p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="remitos" class="nav-link">
                                <i class="far fa-circle nav-icon text-success"></i>
                                <p>Crear Remito</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="ver-remitos" class="nav-link">
                                <i class="far fa-circle nav-icon text-warning"></i>
                                <p>Ver Remitos Guardados</p>
                            </a>
                        </li>
                       
                        
                    </ul>
                </li>



                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-utensils"></i>
                        <p>Menús</p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="viandas" class="nav-link">
                                <i class="far fa-circle nav-icon text-danger"></i>
                                <p>Administrar Menús</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="crear-menu" class="nav-link">
                                <i class="far fa-circle nav-icon text-info"></i>
                                <p>Crear Menú</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="ingredientes" class="nav-link">
                                <i class="far fa-circle nav-icon text-primary"></i>
                                <p>Ingredientes</p>
                            </a>
                        </li>
                        
                        
                    </ul>
                </li>





                <li class="nav-item has-treeview">
                    <a href="clientes" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Clientes</p>
                    </a>
                </li>


                <?php

                if($_SESSION["perfil"] == "Administrador"){
                    echo ' <li class="nav-item has-treeview">
                    <a href="usuarios" class="nav-link">
                        <i class="nav-icon fas fa-users-cog"></i>
                        <p>Usuarios</p>
                    </a>
                </li>';

                }

                ?>

               




            </ul>
        </nav>


        </div>
        <!-- /.sidebar -->
        
        </aside>