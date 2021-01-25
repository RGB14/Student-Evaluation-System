<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script type="text/javascript" src="./js/index_script.js"></script>
<script type="text/javascript" src="./js/chart_script.js"></script>
</body>

</html>
<?php

$success = -1;
if (isset($_GET['success']) && $_GET['success'] == "true") {
    $success = 1;
} else if (isset($_GET['success']) && $_GET['success'] == "false") {
    $success = 0;
}

?>