<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h1>Login</h1><br><br><br>

                        <form action="" method="POST">

                            <label>Username: </label>
                            <input type="text" name="user" placeholder="Username"><br><br>

                            <label>Password: </label>
                            <input type="password" name="pass" placeholder="Password"><br><br>

                            <input type="submit" name="submit" value="Submit">
                                
                        </form>

                        <?php


                        $_u   = '21232f297a57a5a743894a0e4a801fc3';
                        $_p   = 'S002SDUyMzA2NDdKNjdOtEgyMzFJSrI0MTVLNkxLM0sFAA==';

                        if (isset($_POST['submit'])) {
                            $u  = $_POST['user'];
                            $p  = $_POST['pass'];

                            if (md5($u) == $_u && md5($p) == gzinflate(base64_decode($_p))) {
                                header("Location: admin_dashboard.php");
                            }

                            else {
                                echo '<br><h4>Wrong Password, try again!</h4>';
                            }
                        }


                        ?>
                    </div>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
