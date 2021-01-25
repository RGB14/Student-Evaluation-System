<!DOCTYPE html>
<html>

<head>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">

    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT MGMT</title>
</head>

<body>
    <div class="landing">
        <div class="text-center title text-uppercase" style="color: white; font-size: 32px; padding-top: 64px;">
            <p>STUDENT PERFORMANCE EVALUATION SYSTEM</p>
        </div>
        <div class="login-field text-center align-center">
            <form id="form" action="" method="get">
                <div class="dropdown-list">
                    <select name="login-agent" style="width: 100%">
                        <option value="Faculty">Faculty</option>
                        <option value="Student">Student</option>
                        <option value="Admin">Admin</option>
                        <option value="UGC/IED">UGC/IEB</option>
                    </select>
                </div>
                <div class="card" style="background: #2d2d2d; padding: 16px;">
                    <div class="user-id" style="padding-bottom: 32px;">
                        <label for="id" style="display: block; color: white">ID</label>
                        <input id="id" required style="width: 100%; border: none; background: none; border-bottom: 1px solid white; color: white;" type="text">
                        <div class="user-pass">
                            <label for="password" style="display: block; color: white">Password</label>
                            <input id="password" required style="width: 100%; border: none; background: none; border-bottom: 1px solid white; color: white;" type="password">
                        </div>
                        <div class="login-btn">
                            <button type="submit" style="width: 100px; height: 32px; border: none; border-radius: 5px;">LOGIN</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="./js/index_script.js"></script>
</body>

</html>