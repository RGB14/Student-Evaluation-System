<body>
    <div class="side-nav">
        <div class="top-section">
            <div class="text-center title">
                <p>STUDENT PERFORMANCE EVALUATION SYSTEM</p>
            </div>
            <div class="logo">
                <img src="img/iub_logo.png" alt="">
            </div>
        </div>
        <div class="bottom-section">
            <ul>
                <li><i class="bi bi-house-door-fill"></i><a href="dashboard.php">DASHBOARD</a></li>
                <li><i class="bi bi-input-cursor-text"></i><a href="student-input.php">STUDENT INPUT</a></li>
                <li><i class="bi bi-clipboard-check"></i><a href="report.php">REPORT</a></li>
                <li><i class="bi bi-clipboard-check"></i><a href="tableForm.php">CREATE TABLES</a></li>
            </ul>

        </div>
    </div>

    <?php

    $success = -1;
    if (isset($_GET['success']) && $_GET['success'] == "true") {
        $success = 1;
    } else if (isset($_GET['success']) && $_GET['success'] == "false") {
        $success = 0;
    }

    ?>