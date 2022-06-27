<?php
include 'pengaturan/koneksi.php';
include 'template/header.php';
$page = $_GET['page'];
switch ($page) {
    case 'poin';
        include 'poin/poin_read.php';
        break;
    case 'poin_create';
        include 'poin/poin_create.php';
        break;
    case 'poin_edit';
        include 'poin/poin_edit.php';
        break;
    case 'poin_delete';
        include 'poin/poin_delete.php';
        break;
    default;
        include '404.php';
        break;
}
