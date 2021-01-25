<?php
include 'components/header.php';
include 'components/sidenav.php';
?>
<div class="right-section">
    <?php include 'components/topNav.php'; ?>
    <div class="section">
        <div class="title">
            <p>CREATE TABLES</p>
        </div>
        <div class="info-region">
            <div class="landing-region" style="padding: 32px;">
                <a class="btn btn-dark" href=".\php\createTable.php">CREATE STUDENT INFO TABLE</a>
                <?php
                if ($success == 1) {
                    echo ("<div style='color: green; float: right;'>
                     <h4><i class='bi bi-check'></i>Table Successfully Created</h4>
                      </div>");
                } else if ($success == 0) {
                    echo ("<div style='color: red; float: right;'>
                           <h4><i class='bi bi-x'></i>Table Already Exists</h4>
                        </div>");
                }
                ?>

                <?php include 'components/footer.php' ?>