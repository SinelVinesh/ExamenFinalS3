<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('common/header.php');

?>

<div class="d-flex flex-column" id="content-wrapper">
    <div id="content">
        <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
            <div class="container-fluid">
                <button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i
                            class="fas fa-bars"></i></button>
                <ul class="navbar-nav flex-nowrap ms-auto">
                    <div class="d-none d-sm-block topbar-divider"></div>
                    <li class="nav-item dropdown no-arrow">
                        <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                                                   aria-expanded="false" data-bs-toggle="dropdown"
                                                                   href="#"><span
                                        class="d-none d-lg-inline me-2 text-gray-600 small">Utilisateur</span><img
                                        class="border rounded-circle img-profile" src="\"></a>
                            <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
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
            <div class="d-sm-flex justify-content-between align-items-center mb-4">
                <h3 class="text-dark mb-0">Tableaux mensuels des depenses et des entrees</h3>
            </div>
            <form action="<?php echo base_url('resume/filtered') ?>" method="post">
                <input class="form-control tiny_field" type="number" placeholder="Annee" min="2000" max="2022" name="year"><input
                        class="form-control tiny_field" type="number" placeholder="Mois" min="01" max="12" name="month">
                <button class="btn btn-primary" type="submit">Valider</button>
            </form>
            <div class="row">
                <div class="col-6">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h4 class="text-dark mb-0">Depenses</h4>
                    </div>
                    <div class="card shadow" style="margin-top: 20px;">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold"><?php echo $periode['month'].'/'.$periode['year']?></p>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="table-responsive table mt-2" id="dataTable-1" role="grid"
                                     aria-describedby="dataTable_info">
                                    <table class="table my-0" id="dataTable">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Date de la depense</th>
                                            <th>Type</th>
                                            <th>Montant (MGA)</th>
                                            <th>Beneficiaire</th>
                                            <th>% du budget</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($depenses as $depense) {?>
                                        <tr>
                                            <td><?php echo $depense['id_depenses']?></td>
                                            <td><?php echo $depense['date_depenses']?></td>
                                            <td><?php echo $depense['id_categorie']?></td>
                                            <td><?php echo $depense['montant_depenses']?></td>
                                            <td><?php echo $depense['id_benef']?></td>
                                            <td><?php echo $depense['pourcentage']?></td>
                                        </tr>
                                        <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h4 class="text-dark mb-0">Entrees</h4>
                    </div>
                    <div class="card shadow" style="margin-top: 20px;">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold"><?php echo $periode['month'].'/'.$periode['year']?></p>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="table-responsive table mt-2" id="dataTable-2" role="grid"
                                     aria-describedby="dataTable_info">
                                    <table class="table my-0" id="dataTable">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Date de l'entree</th>
                                            <th>Montant (MGA)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($entrees as $entree) {?>
                                        <tr>
                                            <td><?php echo $entree['id'] ?></td>
                                            <td><?php echo $entree['date'] ?></td>
                                            <td><?php echo $entree['montant'] ?></td>
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                        <tfoot>
                                        <tr></tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="d-sm-flex justify-content-between align-items-center mb-4"></div>
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
