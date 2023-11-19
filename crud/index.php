<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            background: #ffffff;
        }

        header {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            z-index: 1;
            padding: 20px;
        }

        header .navbar {
            max-width: 1280px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .navbar .menu-links {
            display: flex;
            align-items: center;
            list-style: none;
            gap: 30px;
        }

        .navbar .menu-links li a {
            color: #000;
            font-weight: 500;
            text-decoration: none;
            transition: 0.2s ease;
        }

        header .navbar a {
            font-family: 'Poppins';
            font-weight: 800;
            text-decoration-line: none;
            color: #000;
            font-size: 20px;
        }

        .navbar .menu-links .language-item a {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        .navbar .menu-links .language-item span {
            font-size: 1.3rem;
        }

        .navbar .menu-links li a:hover {
            color: #1dbf73;
        }

        .navbar .menu-links .join-btn a {
            border: 1px solid #000;
            padding: 8px 15px;
            border-radius: 4px;
        }

        .navbar .menu-links .join-btn a:hover {
            color: #000;
            border-color: transparent;
            background: #1dbf73;
        }


        .wrapper {

            width: 600px;
            margin-top: 150px;
            margin-left: 400px;
            color: #000;
        }

        table tr td:last-child {
            width: 120px;
            color: #000;
        }
    </style>
    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>

<body>

    <header>
        <nav class="navbar">
            <a href="#">SenjaBaik</a>
            <ul class="menu-links">
                <li><a href="http://localhost/project/index.php">Home</a></li>
                <li><a href="http://localhost/project/loginn/login.php">Member</a></li>
                <li><a href="http://localhost:3000/">About Me</a></li>
                <li><a href="http://localhost/project/loginn/card.php">Card</a></li>
                <!-- <li><a href="login.php">Sign In</a></li>
        <li class="join-btn"><a href="#">Sign Up</a></li> -->
        </nav>
    </header>



    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Employees Details</h2>
                        <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New
                            Employee</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";

                    // Attempt select query execution
                    $sql = "SELECT * FROM employees";
                    if ($result = mysqli_query($link, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            echo '<table class="table table-bordered table-striped">';
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th>#</th>";
                            echo "<th>Name</th>";
                            echo "<th>Address</th>";
                            echo "<th>Salary</th>";
                            echo "<th>Action</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['address'] . "</td>";
                                echo "<td>" . $row['salary'] . "</td>";
                                echo "<td>";
                                echo '<a href="read.php?id=' . $row['id'] . '" class="mr-3" title="View Record" data-
toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                echo '<a href="update.php?id=' . $row['id'] . '" class="mr-3" title="Update Record" data-
toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                echo '<a href="delete.php?id=' . $row['id'] . '" title="Delete Record" data-toggle="tooltip"><span
class="fa fa-trash"></span></a>';
                                echo "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else {
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else {
                        echo "Oops! Something went wrong. Please try again later.";
                    }
                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>