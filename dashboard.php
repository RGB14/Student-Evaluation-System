<?php
include 'components/header.php';
include 'components/sidenav.php';
include './php/fetchData.php';

?>

<div class="right-section">
    <?php include 'components/topNav.php'; ?>
    <div class="section">
        <div class="title">
            <p>DASHBOARD</p>
        </div>
        <div class="info-region">
            <div class="landing-region">
                <div class="row p-3">
                    <div class="col-sm-3">
                        <div class="card shadow">
                            <div class="card-body" style="background-color: #ED7D31;">
                                <h5 class="card-title"># of Course: </h5>
                                <p class="card-text">Avg PLO Map: </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card shadow">
                            <div class="card-body" style="background-color: #92D050;">
                                <h5 class="card-title"># of Students: <?php echo strval($studentCounter); ?></h5>
                                <p class="card-text">Avg achieved PLO:</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card shadow">
                            <div class="card-body" style="background-color: #00B0F0;">
                                <h5 class="card-title"># of Faculty: </h5>
                                <p class="card-text">Practicing Semester: </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card shadow">
                            <div class="card-body" style="background-color: #7030A0;">
                                <h5 class="card-title text-white"># of PLO: 13</h5>
                                <p class="card-text text-white">Achieved so far: </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row p-3">
                    <div class="col-sm-4">
                        <h5 class="p-2 bg-primary text-white">PLO Achievement</h5>
                        <canvas class="shadow-lg" id="bar" width="400" height="400"></canvas>
                    </div>
                    <div class="col-sm-4">
                        <h5 class="p-2 bg-secondary text-white">Student Progress</h5>
                        <canvas class="shadow-lg" id="line" width="400" height="400"></canvas>
                    </div>
                    <div class="col-sm-4">
                        <h5 class="p-2 bg-success text-white">Course Progress</h5>
                        <canvas class="shadow-lg" id="line2" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'components/footer.php' ?>