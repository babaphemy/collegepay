<?php
session_start();
include('head.php');
include('incs/options.php');
$submittedref = $_POST['txnref'];
$submittedamt = $_SESSION['amt4hash'];


?>


<body>
<?php
$json = dquery($submittedamt, $submittedref);
?>
<div class="container">

    <!-- row 3: article/aside -->
    <div class="row" style="text-align: center">
        <h2>TRANSACTION STATUS (Query Response)</h2>

        <div class="col-md-4">
            <div class="thumbnail">
                <div class="caption">
                    <h4>
                        <span class="glyphicon glyphicon-pushpin"></span>
                        <?php echo($json['ResponseCode']); ?> </h4>
                    <p><?php echo($json['ResponseDescription']); ?></p>
                </div>
            </div>

        </div>
    <div class="col-md-4">


        <div class="thumbnail">
            <div class="caption">
                <P>RAW RESPONSE<br/><?php print_r($json); ?></P>
            </div>
        </div>


    </div>


    <div class="col-md-4">

        <?php

        if ($json['ResponseCode'] == "00"){
        ?>

        <!-- nested row 3a: callouts -->

            <div class="thumbnail">
                <div class="caption">
                    <span class="glyphicon glyphicon-ok"></span>
                    <img src="css/thankyou.jpg" alt="ok"/>






            <?php } else { ?>
                <img src="css/notok.jpg" alt="not ok"/>
            <?php } ?>
                </div>

        </div>

    </div>
    </div>
    </div>
    <!-- end container -->

    <!-- javascript -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $('a.btn-info').tooltip()
    </script>
</body>
</html>