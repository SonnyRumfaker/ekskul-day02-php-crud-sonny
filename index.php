<?php

    include __DIR__ . '/view/layout/header.php';
    
    if(isset($_GET['menu']) && $_GET['menu'] == 'dasbor'){
        include __DIR__ . '/view/dashboard.php';    
    }

    else{
        echo "ERROR 404! Halaman tidak ditemukan...";
    }

    include __DIR__ . '/view/layout/footer.php';

