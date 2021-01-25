<?php
include 'components/header.php';
include 'components/sidenav.php';
?>

<div class="right-section">
    <?php include 'components/topNav.php'; ?>
    <div class="section">
        <div class="title">
            <p>INPUT</p>
        </div>
        <div class="info-region">
            <div class="landing-region" style="padding: 32px;">
                <form action="php/studentForm.php" method="POST" id="studentForm">
                    <?php
                    if ($success == 1) {
                        echo ("<div style='color: green; float: right;'>
                        <i class='fa fa-check-circle'></i> Successfully Inserted Data
                      </div>");
                    } else if ($success == 0) {
                        echo ("<div style='color: red; float: right;'>
                          <i class='fa fa-times-circle'></i> Data Insertion Failed
                        </div>");
                    }
                    ?>
                    <div class="input-section-menu">
                        <h5 class="">Select Course</h5>
                        <select class="form-select form-control" name="selectCourse" id="selectCourse" aria-label="Default select example">
                            <option value="CSE303">CSE303 - Database Management System</option>
                            <!-- <option value="2">Two</option>
                            <option value="3">Three</option> -->
                        </select>
                    </div>
                    <div class="row">
                        <h5 class="pt-3">Student Info</h5>
                        <div class="col-sm-3">
                            <div class="input-section">
                                <div class="input-group">
                                    <!-- <div class="input-group-prepend">
                                        <span class="input-group-text" id="">Student ID</span>
                                    </div> -->
                                    <input type="text" maxlength="7" name="studentID" placeholder="ID" class="form-control" id="studentID">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="input-section">
                                <div class="input-group">
                                    <!-- <div class="input-group-prepend">
                                        <span class="input-group-text" id="">Student ID</span>
                                    </div> -->
                                    <input type="text" maxlength="7" name="courseID" placeholder="Course ID" class="form-control" id="courseID">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="input-section">
                                <div class="input-group">
                                    <!-- <div class="input-group-prepend">
                                        <span class="input-group-text" id="">Student ID</span>
                                    </div> -->
                                    <input type="text" maxlength="1" placeholder="Section" name="section" id="section" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="input-section">
                                <div class="input-group">
                                    <!-- <div class="input-group-prepend">
                                        <span class="input-group-text" id="">Student ID</span>
                                    </div> -->
                                    <input type="text" maxlength="7" placeholder="Semester" name="semester" id="semester" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 class="pt-3">Course Outcome - Total</h5>
                    <div class="input-group pt-3">
                        <!-- <div class="input-group-prepend">
                                <span class="input-group-text" id="">Course Outcomes</span>
                            </div> -->
                        <input type="text" maxlength="3" pattern="[0-9]*" placeholder="CO1 - out of 165" id="totalCO1" name="totalCO1" class="form-control">
                        <input type="text" maxlength="3" placeholder="CO2 - out of 35" id="totalCO2" name="totalCO2" class="form-control">
                        <input type="text" maxlength="3" placeholder="CO3 - out of 50" id="totalCO3" name="totalCO3" class="form-control">
                        <input type="text" maxlength="3" placeholder="CO4 - out of 30" id="totalCO4" name="totalCO4" class="form-control">
                    </div>
                    <div class="submit-btn" style="float: right; margin-top: 32px;">
                        <button type="submit" class="btn-secondary" style="width: 100px; height: 32px; border: none; border-radius: 5px;">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'components/footer.php' ?>