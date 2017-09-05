<?php
$ada =$_GET['ada'];
include_once('code/config.php');
?>
<?=headerPage() ?>
<body>
<?= menu() ?>
    <div class="container">
        <div class="starter-template">
        
        </div>

        <?php 
echo propiedad();
            include('ADAs/ada'.$ada.'.php');
        ?>
    </div>
<?= pie()?>