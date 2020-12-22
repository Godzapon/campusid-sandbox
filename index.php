<?php 
    $main_page = true;
    $title = 'CampusId\'s PHP sandbox';
    require_once('includes/header.php')
?>
    <?php 
        $path    = 'samples';
        $files = scandir($path);
        foreach ($files as $file) {
            if ($file != '..' && $file != '.') echo "<p><a href='samples/$file'>$file</a></p>";
        }
    ?>
<?php require_once('includes/footer.php') ?>
