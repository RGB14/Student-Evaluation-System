<?php
include './include/connection.php';

$studentInfoTable = "CREATE TABLE studentinfo (  
        selectCourse VARCHAR(255) NOT NULL,
        studentID INT NOT NULL PRIMARY KEY UNIQUE, 
        courseID VARCHAR(255) NOT NULL, 
        section INT NOT NULL,
        semester VARCHAR(255) NOT NULL,
        totalCO1 INT NOT NULL,
        totalCO2 INT NOT NULL,
        totalCO3 INT NOT NULL,
        totalCO4 INT NOT NULL
    )";

if ($conn->query($studentInfoTable) === TRUE) {
    echo "Table 'studentInfoTable' created successfully<br>";
    header("Location: ../tableForm.php?success=true");
} else {
    echo "Error creating studentInfoTable table: " . $conn->error . "<br>";
    header("Location: ../tableForm.php?success=false");
}

$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <script>
        window.location.replace("http://localhost/stdtmg/tableForm.php");
    </script>
    <title>Dashboard</title>

</head>

<body>

</body>

</html>