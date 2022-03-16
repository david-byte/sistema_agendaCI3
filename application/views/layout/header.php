<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= (!isset($title) || empty($title)) ?? "Defaut"; ?></title>

    <!-- Bootstrap -->
    <link href="<?= base_url("assets/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css"); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url("assets/gentelella/vendors/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url("assets/gentelella/vendors/nprogress/nprogress.css"); ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url("assets/gentelella/build/css/custom.min.css"); ?>" rel="stylesheet">
  </head>