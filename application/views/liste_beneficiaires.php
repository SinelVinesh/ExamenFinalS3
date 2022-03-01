<?php
$this->load->view('common/header');
$designations = [['id'=>'BEN0001','designation'=>'Jean'],['id'=>'BEN0002','designation'=>'Amis'],['id'=>'BEN0003','designation'=>'Famille'],
    ['id'=>'BEN0004','designation'=>'Parents']];
?>
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                <div class="container-fluid">
                    <button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i
                                class="fas fa-bars"></i></button>
                    <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group"></div>
                    </form>
                    <ul class="navbar-nav flex-nowrap ms-auto">
                        <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link"
                                                                            aria-expanded="false"
                                                                            data-bs-toggle="dropdown" href="#"><i
                                        class="fas fa-search"></i></a>
                            <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in"
                                 aria-labelledby="searchDropdown">
                                <form class="me-auto navbar-search w-100">
                                    <div class="input-group"><input class="bg-light form-control border-0 small"
                                                                    type="text" placeholder="Search for ...">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary py-0" type="button"><i
                                                        class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <div class="d-none d-sm-block topbar-divider"></div>
                        <li class="nav-item dropdown no-arrow">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                                                       aria-expanded="false" data-bs-toggle="dropdown"
                                                                       href="#"><span
                                            class="d-none d-lg-inline me-2 text-gray-600 small">Valerie Luna</span><img
                                            class="border rounded-circle img-profile"
                                            src="assets/img/avatars/avatar1.jpeg"></a>
                                <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a
                                            class="dropdown-item" href="#"><i
                                                class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a
                                            class="dropdown-item" href="#"><i
                                                class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a
                                            class="dropdown-item" href="#"><i
                                                class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity
                                        log</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i
                                                class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container-fluid">
                <h3 class="text-dark mb-4">Beneficiaires</h3>
                <div class="card shadow">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 fw-bold">Ajouter un Beneficiaire</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form action="beneficiaires/insert" method="post"><label class="form-label">Designation :</label><input class="form-control"
                                                                                            type="text" name="designation">
                                    <button class="btn btn-primary" type="submit">Ajouter</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow" style="margin-top: 20px;">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 fw-bold">Liste des Beneficiaires</p>
                    </div>
                    <div class="card-body">
                        <form action="beneficiaires/update" method="post">
                            <div class="table-responsive table mt-2" id="dataTable-1" role="grid"
                                 aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Designation</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($designations as $designation) { ?>
                                    <tr>
                                        <td><?php echo $designation['id']?></td>
                                        <td><input name="<?php echo $designation['id']?>" class="form-control" type="text" value="<?php echo $designation['designation']?>"></td>
                                    </tr>
                                    <?php } ?>
                                    </tbody>
                                    <tfoot>
                                    <tr></tr>
                                    </tfoot>
                                </table>
                            </div>
                            <button class="btn btn-primary" type="button">Valider les modifications</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><span>Copyright © Brand 2022</span></div>
            </div>
        </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
<?php
$this->load->view('common/footer');
?>