<?php include 'components/session-check-index.php' ?>
<?php require '_database/database.php'; ?>
<?php include 'controllers/base/head.php' ?>
<body>	
    <script type="text/javascript"> 
        ChangeIt();
    </script>
<?php include 'controllers/navigation/index-before-login-navigation.php' ?>
    <section id="home" name="home"></section>
        <div id="headerwrap">
            <div class="container">
                <div class="row centered">
                    <div class="col-lg-12">
                    </div>
                    <div class="row">
                    <div class="col-lg-6">
                        <h1><b>Scouting Team 3641</b></h1>
						<h2><b>Welcome to our team!  Have fun Scouting!</b></h2>
                        <br>
                        <?php include 'controllers/form/registration-form.php'?>
                    </div>
                </div>
                <div class="col-lg-8">
                </div>
                <div class="col-lg-2">
                    <br>
                </div>
            </div>
        </div>
    </div>
</body> 
<?php /*include 'login.php'*/?>


