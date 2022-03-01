<?php
$this->load->view('common/header');
?>
<div class="d-flex flex-column" id="content-wrapper">
    <div id="content">
        <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
            <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                <ul class="navbar-nav flex-nowrap ms-auto">
                    <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                        <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="me-auto navbar-search w-100">
                                <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                    <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <div class="d-none d-sm-block topbar-divider"></div>
                    <li class="nav-item dropdown no-arrow">
                        <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Valerie Luna</span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"></a>
                            <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="d-sm-flex justify-content-between align-items-center mb-4">
                <h3 class="text-dark mb-0">Tableaux Beneficiaire</h3>
            </div>
            <form><select class="form-select">
                    <optgroup label="This is a group">
                        <option value="12" selected="">This is item 1</option>
                        <option value="13">This is item 2</option>
                        <option value="14">This is item 3</option>
                    </optgroup>
                </select><input class="form-control" type="number" placeholder="Year" min="2000" max="2022"><input class="form-control" type="number" placeholder="Month" min="01" max="12"><button class="btn btn-primary" type="button">Valider</button></form>
            <div class="row">
                <div class="col">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h4 class="text-dark mb-0">Depenses par beneficiaire</h4>
                    </div>
                    <div class="card shadow" style="margin-top: 20px;">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold"></p>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                                    <table class="table my-0" id="dataTable">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Date de la depemse</th>
                                            <th>Type</th>
                                            <th>Montant (MGA)</th>
                                            <th>Beneficiaire</th>
                                            <th>% du budget</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>USR0001</td>
                                            <td>20 Juin 2021</td>
                                            <td>Alimentation</td>
                                            <td>60000</td>
                                            <td>Jean</td>
                                            <td>5%</td>
                                        </tr>
                                        <tr>
                                            <td>USR0001</td>
                                            <td>20 Juin 2021</td>
                                            <td>Alimentation</td>
                                            <td>60000</td>
                                            <td>Jean</td>
                                            <td>5%</td>
                                        </tr>
                                        <tr>
                                            <td>USR0001</td>
                                            <td>20 Juin 2021</td>
                                            <td>Alimentation</td>
                                            <td>60000</td>
                                            <td>Jean</td>
                                            <td>5%</td>
                                        </tr>
                                        <tr>
                                            <td>USR0001</td>
                                            <td>20 Juin 2021</td>
                                            <td>Alimentation</td>
                                            <td>60000</td>
                                            <td>Jean</td>
                                            <td>5%</td>
                                        </tr>
                                        <tr>
                                            <td>USR0001</td>
                                            <td>20 Juin 2021</td>
                                            <td>Alimentation</td>
                                            <td>60000</td>
                                            <td>Jean</td>
                                            <td>5%</td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr></tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
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
