<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Page de Connexion</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/fontawesome-all.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/fontawesome5-overrides.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/untitled.css') ?>">
</head>
<?php if(!isset($login)) {?>
<body id="page-top">
<div id="wrapper">
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
        <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                <div class="sidebar-brand-text mx-3"><span>Brand</span></div>
            </a>
            <hr class="sidebar-divider my-0">
            <ul class="navbar-nav text-light" id="accordionSidebar">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('resume')?>"><i class="fas fa-user"></i><span>Depenses/Entrees</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('resume/beneficiaire')?>"><i class="fas fa-user"></i><span>Recapitulatif beneficiaire</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('resume/categorie')?>"><i class="fas fa-user"></i><span>Evolution Categorie</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('beneficiaires')?>"><i class="fas fa-user"></i><span>Gestion des beneficiaires</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('categorie/insertion')?>"><i class="fas fa-user"></i><span>Gestion des categories</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('salaire')?>"><i class="fas fa-user"></i><span>Gestion des salaires</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('utilisateurs')?>"><i class="fas fa-user"></i><span>Gestion des utilisateurs</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('depense/ajout')?>"><i class="fas fa-user"></i><span>Ajouter une depense</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('entree/ajout')?>"><i class="fas fa-user"></i><span>Ajouter une entree imprevue</span></a>
                </li>
                <?php if(!isset($logged)) { ?>
                <li class="nav-item"><a class="nav-link" href="<?php echo site_url('connexion/user')?>">Se connecter en temps qu'utilisateur</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo site_url('connexion/admin')?>">Se connecter en temps qu'administrateur</a></li>
                <?php } ?>

            </ul>
            <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
        </div>
    </nav>
<?php } ?>