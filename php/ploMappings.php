<?php
//GET STUDENT ID & CO-MAPPINGS
$conn = mysqli_connect('localhost', 'root', '', 'spe');
$studentID = $_GET['studentID'];
$fetch = "SELECT `courseID`,`TotalCO1`, `TotalCO2`, `TotalCO3`, `TotalCO4` FROM `studentinfo` WHERE studentinfo.studentID = '$studentID'";
$queryResult = mysqli_query($conn, $fetch);
$course = NULL;
$TotalCO1 = 0;
$TotalCO2 = 0;
$TotalCO3 = 0;
$TotalCO4 = 0;
if ($queryResult->num_rows > 0) {
    while ($row = $queryResult->fetch_assoc()) {
        $course = $row['courseID'];
        $TotalCO1 = $row['TotalCO1'];
        $TotalCO2 = $row['TotalCO2'];
        $TotalCO3 = $row['TotalCO3'];
        $TotalCO4 = $row['TotalCO4'];
    }
}
//CO-MAPPINGS to PLO-MAPPINGS
$CO1percentage = ($TotalCO1 / 165) * 100;
$CO2percentage = ($TotalCO2 / 35) * 100;
$CO3percentage = ($TotalCO3 / 50) * 100;
$CO4percentage = ($TotalCO4 / 30) * 100;
//Definitions - PLO
$PLO1 = NULL;
$PLO2 = NULL;
$PLO3 = NULL;
$PLO4 = NULL;
$PLO5 = NULL;
$PLO6 = NULL;
$PLO7 = NULL;
$PLO8 = NULL;
$PLO9 = NULL;
$PLO10 = NULL;
$PLO11 = NULL;
$PLO12 = NULL;
$PLO13 = NULL;
//Definitions - PO
$PO1 = NULL;
$PO2 = NULL;
$PO3 = NULL;
$PO4 = NULL;
$PO5 = NULL;
$PO6 = NULL;
$PO7 = NULL;
$PO8 = NULL;
$PO9 = NULL;
$PO10 = NULL;
$PO11 = NULL;
$PO12 = NULL;
$PO12 = NULL;
$PO13 = NULL;
$p1 = NULL;
$p2 = NULL;
$p3 = NULL;
$p4 = NULL;
$p5 = NULL;
$p6 = NULL;
$p7 = NULL;
$p8 = NULL;
$p9 = NULL;
$p10 = NULL;
$p11 = NULL;
$p12 = NULL;
$p13 = NULL;
$pl1 = NULL;
$pl2 = NULL;
$pl3 = NULL;
$pl4 = NULL;
$pl5 = NULL;
$pl6 = NULL;
$pl7 = NULL;
$pl8 = NULL;
$pl9 = NULL;
$pl10 = NULL;
$pl11 = NULL;
$pl12 = NULL;
$pl13 = NULL;
//ASSINGMENT - SCREENSHOT
if ($CO2percentage > 40 and $CO3percentage > 40) {
    $PLO1 = 'ACHIEVED';
    $pl1 = TRUE;
}
if ($CO2percentage < 40 and $CO3percentage < 40) {
    $PLO1 = 'FAIL';
    $pl1 = FALSE;
}
if ($CO1percentage > 40 and $CO2percentage > 40) {
    $PLO2 = 'ACHIEVED';
    $pl2 = TRUE;
}
if ($CO1percentage < 40 and $CO2percentage < 40) {
    $PLO2 = 'FAIL';
    $pl2 = FALSE;
}
if ($CO2percentage > 40) {
    $PLO3 = 'ACHIEVED';
    $pl3 = TRUE;
}
if ($CO2percentage < 40) {
    $PLO3 = 'FAIL';
    $pl3 = FALSE;
}
if ($CO1percentage > 40 and $CO3percentage > 40) {
    $PLO4 = 'ACHIEVED';
    $pl4 = TRUE;
}
if ($CO1percentage < 40 and $CO3percentage < 40) {
    $PLO4 = 'FAIL';
    $pl4 = FALSE;
}
if ($CO3percentage > 40) {
    $PLO5 = 'ACHIEVED';
    $pl5 = TRUE;
}
if ($CO3percentage < 40) {
    $PLO5 = 'FAIL';
    $pl5 = FALSE;
}
if ($CO1percentage > 40 and $CO3percentage > 40) {
    $PLO6 = 'ACHIEVED';
    $pl6 = TRUE;
}
if ($CO1percentage < 40 and $CO3percentage < 40) {
    $PLO6 = 'FAIL';
    $pl6 = FALSE;
}
if ($CO3percentage > 40) {
    $PLO7 = 'ACHIEVED';
    $pl7 = TRUE;
}
if ($CO3percentage < 40) {
    $PLO7 = 'FAIL';
    $pl7 = FALSE;
}
if ($CO1percentage > 40) {
    $PLO12 = 'ACHIEVED';
    $pl12 = TRUE;
}
if ($CO1percentage < 40) {
    $PLO12 = 'FAIL';
    $pl12 = FALSE;
}
if ($CO1percentage > 40) {
    $PLO13 = 'ACHIEVED';
    $pl13 = TRUE;
}
if ($CO1percentage < 40) {
    $PLO13 = 'FAIL';
    $pl13 = FALSE;
}
//ASSIGNMENT - PO
if ($CO1percentage > 40) {
    $PO2 = 'ACHIEVED';
    $p2 = TRUE;
}
if ($CO1percentage < 40) {
    $PO2 = 'FAIL';
    $p2 = FALSE;
}
if ($CO2percentage > 40) {
    $PO3 = 'ACHIEVED';
    $p3 = TRUE;
}
if ($CO2percentage < 40) {
    $PO3 = 'FAIL';
    $p3 = FALSE;
}
if ($CO3percentage > 40) {
    $PO4 = 'ACHIEVED';
    $p4 = TRUE;
}
if ($CO3percentage < 40) {
    $PO4 = 'FAIL';
    $p4 = FALSE;
}
if ($CO4percentage > 40) {
    $PO6 = 'ACHIEVED';
    $p6 = TRUE;
}
if ($CO4percentage < 40) {
    $PO6 = 'FAIL';
    $p6 = FALSE;
}
//Total Student Mappings
$fetchSum = "SELECT SUM(`TotalCO1`), SUM(`TotalCO2`), SUM(`TotalCO3`), SUM(`TotalCO4`) AS sumCO1, sumCO2, sumCO3, sumCO4 FROM `studentinfo`";
$queryResult = mysqli_query($conn, $fetchSum);
$course = NULL;
$SumCO1 = 0;
$SumCO2 = 0;
$SumCO3 = 0;
$SumCO4 = 0;
if ($queryResult->num_rows > 0) {
    while ($row = $queryResult->fetch_assoc()) {
        $SumCO1 = $row['sumCO1'];
        $SumCO2 = $row['sumCO2'];
        $SumCO3 = $row['sumCO3'];
        $SumCO4 = $row['sumCO4'];
    }
}
                        //::tao jodi lage::
                        //
                        // $sql = "SELECT `student_id`, `student`.`course_id`, `student`.`plo_number`, (`co-1_achieved_mark` + `co-2_achieved_mark` + `co-3_achieved_mark` + `co-4_achieved_mark` + `co-5_achieved_mark` + `co-6_achieved_mark` + `co-7_achieved_mark` + `co-8_achieved_mark`)AS `total_achieved_plo`, (`course`.`co-1_alotted_mark` + `course`.`co-2_alotted_mark` + `course`.`co-3_alotted_mark` + `course`.`co-4_alotted_mark` + `course`.`co-5_alotted_mark` + `course`.`co-6_alotted_mark` + `course`.`co-7_alotted_mark` + `course`.`co-8_alotted_mark`)AS `total_alotted_plo` FROM `individual_co_plo_map` AS `student` INNER JOIN `course_co_plo_map_section_wise` AS `course` ON `student`.`course_id` = `course`.`course_id` AND `student`.`section` = `course`.`section` AND `student`.`semester` = `course`.`semester` AND `student`.`year` = `course`.`year` AND `student`.`plo_number` = `course`.`plo_number` WHERE student.student_id = '$student_id' GROUP BY course_id, plo_number";
                        // $result = mysqli_query($mysqli, $sql);

                        // if ($result->num_rows > 0) {
                        //     echo "<table class='content-table'><thead><tr><th>Course ID</th><th>PLO Number</th><th>PLO Achieved(%)</th></tr></thead>";
                        //     // output data of each row
                        //     while ($row = $result->fetch_assoc()) {
                        //         echo "<tr><td>" . $row["course_id"] . "</td><td>" . $row["plo_number"] . "</td><td>" . $row["total_achieved_plo"] * 100 / $row["total_alotted_plo"] . "</td></tr>";
                        //     }
                        //     echo "</table>";
                        // } else {
                        //     echo "0 results";
                        // }
