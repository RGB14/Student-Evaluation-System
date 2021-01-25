<?php
include 'components/header.php';
include 'components/sidenav.php';
include './php/fetchData.php';
?>

<div class="right-section">
    <?php include 'components/topNav.php'; ?>
    <div class="section">
        <div class="title">
            <p>REPORT</p>
        </div>
        <div class="info-region" style="height: 127%;">
            <div class="landing-region">
                <form action="" method="GET" id="studentSearch">
                    <div class="input-group mb-3 p-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Search Student ID</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Student ID" id="studentID" name="studentID" aria-label="Student ID" aria-describedby="basic-addon1">
                        <?php include './php/ploMappings.php'; ?>
                    </div>
                </form>
                <div class="display-table mt-3 p-3">
                    <div class="header-title pb-3">
                        <h3 class="float-left d-inline">PLO ACHIEVEMENT - PLO-CO MAPPING FROM CURRICULUM PDF</h3>
                        <h5 class="float-right text-secondary">Student ID: <?php echo $studentID ?></h5>
                    </div>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Course</th>
                                <th scope="col">PLO 1</th>
                                <th scope="col">PLO 2</th>
                                <th scope="col">PLO 3</th>
                                <th scope="col">PLO 4</th>
                                <th scope="col">PLO 5</th>
                                <th scope="col">PLO 6</th>
                                <th scope="col">PLO 7</th>
                                <th scope="col">PLO 8</th>
                                <th scope="col">PLO 9</th>
                                <th scope="col">PLO 10</th>
                                <th scope="col">PLO 11</th>
                                <th scope="col">PLO 12</th>
                                <th scope="col">PLO 13</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="text-primary"><?php echo $course; ?></th>
                                <th scope="row" class="text-muted font-weight-bold"><?php echo $PLO1; ?></th>
                                <th scope="row" class="text-muted font-weight-bold"><?php echo $PLO2; ?></th>
                                <th scope="row" class="text-muted font-weight-bold"><?php echo $PLO3; ?></th>
                                <th scope="row" class="text-muted font-weight-bold"><?php echo $PLO4; ?></th>
                                <th scope="row" class="text-muted font-weight-bold"><?php echo $PLO5; ?></th>
                                <th scope="row" class="text-muted font-weight-bold"><?php echo $PLO6; ?></th>
                                <th scope="row" class="text-muted font-weight-bold"><?php echo $PLO7; ?></th>
                                <th scope="row" class="text-muted font-weight-bold"><?php echo $PLO8; ?></th>
                                <th scope="row" class="text-muted font-weight-bold"><?php echo $PLO9; ?></th>
                                <th scope="row" class="text-muted font-weight-bold"><?php echo $PLO10; ?></th>
                                <th scope="row" class="text-muted font-weight-bold"><?php echo $PLO11; ?></th>
                                <th scope="row" class="text-muted font-weight-bold"><?php echo $PLO12; ?></th>
                                <th scope="row" class="text-muted font-weight-bold"><?php echo $PLO13; ?></th>

                            </tr>
                            <tr>
                                <th scope="row"></th>

                            </tr>
                            <tr>
                                <th scope="row"></th>

                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="display-table mt-3 p-3">
                    <div class="header-title pb-3">
                        <h3 class="float-left d-inline">PO ACHIEVEMENT - EXCEL</h3>
                        <h5 class="float-right text-secondary">Student ID: <?php echo $studentID ?></h5>
                    </div>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Course</th>
                                <th scope="col">PO 1</th>
                                <th scope="col">PO 2</th>
                                <th scope="col">PO 3</th>
                                <th scope="col">PO 4</th>
                                <th scope="col">PO 5</th>
                                <th scope="col">PO 6</th>
                                <th scope="col">PO 7</th>
                                <th scope="col">PO 8</th>
                                <th scope="col">PO 9</th>
                                <th scope="col">PO 10</th>
                                <th scope="col">PO 11</th>
                                <th scope="col">PO 12</th>
                                <th scope="col">PO 13</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="text-primary"><?php echo $course; ?></th>
                                <th scope="row" class="text-muted font-weight-bold"><?php echo $PO1; ?></th>
                                <th scope="row" class="text-muted font-weight-bold"><?php echo $PO2; ?></th>
                                <th scope="row" class="text-muted font-weight-bold"><?php echo $PO3; ?></th>
                                <th scope="row" class="text-muted font-weight-bold"><?php echo $PO4; ?></th>
                                <th scope="row" class="text-muted font-weight-bold"><?php echo $PO5; ?></th>
                                <th scope="row" class="text-muted font-weight-bold"><?php echo $PO6; ?></th>
                                <th scope="row" class="text-muted font-weight-bold"><?php echo $PO7; ?></th>
                                <th scope="row" class="text-muted font-weight-bold"><?php echo $PO8; ?></th>
                                <th scope="row" class="text-muted font-weight-bold"><?php echo $PO9; ?></th>
                                <th scope="row" class="text-muted font-weight-bold"><?php echo $PO10; ?></th>
                                <th scope="row" class="text-muted font-weight-bold"><?php echo $PO11; ?></th>
                                <th scope="row" class="text-muted font-weight-bold"><?php echo $PO12; ?></th>
                                <th scope="row" class="text-muted font-weight-bold"><?php echo $PO13; ?></th>

                            </tr>
                            <tr>
                                <th scope="row"></th>

                            </tr>
                            <tr>
                                <th scope="row"></th>

                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row p-3">
                    <div class="col-sm-6 p-3">
                        <h5 class="p-2 bg-primary text-white">PLO Achievement - EXCEL</h5>
                        <canvas class="shadow-lg" id="po" width="730" height="400"></canvas>
                    </div>
                    <div class="col-sm-6 p-3">
                        <h5 class="p-2 bg-primary text-white">PLO Achievement - PLO-CO MAPPING FROM CURRICULUM PDF</h5>
                        <canvas class="shadow-lg" id="plo" width="730" height="400"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
    var ctx = document.getElementById('po').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13'],
            datasets: [{
                label: 'PLO Achievement',
                data: [
                    <?php echo $p1; ?>,
                    <?php echo $p2; ?>,
                    <?php echo $p3; ?>,
                    <?php echo $p4; ?>,
                    <?php echo $p5; ?>,
                    <?php echo $p6; ?>,
                    <?php echo $p7; ?>,
                    <?php echo $p8; ?>,
                    <?php echo $p9; ?>,
                    <?php echo $p10; ?>,
                    <?php echo $p11; ?>,
                    <?php echo $p12; ?>,
                    <?php echo $p13; ?>
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',

                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',

                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
    //
    var ctx = document.getElementById('plo').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13'],
            datasets: [{
                label: 'PLO Achievement',
                data: [
                    <?php echo $pl1; ?>,
                    <?php echo $pl2; ?>,
                    <?php echo $pl3; ?>,
                    <?php echo $pl4; ?>,
                    <?php echo $pl5; ?>,
                    <?php echo $pl6; ?>,
                    <?php echo $pl7; ?>,
                    <?php echo $pl8; ?>,
                    <?php echo $pl9; ?>,
                    <?php echo $pl10; ?>,
                    <?php echo $pl11; ?>,
                    <?php echo $pl12; ?>,
                    <?php echo $pl13; ?>
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>


<?php include 'components/footer.php' ?>