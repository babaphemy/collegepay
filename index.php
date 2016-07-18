
<?php
session_start();
include('head.php');?>
<body ng-app="iswapp">

<div class="container">
	<!-- row 1: navigation -->
    <div class="row" style="text-align: center">
        <div class="col-md-offset-4 col-md-4 col-md-offset-4">
            <h2>LANDING PAGE</h2>
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">COLLEGEPAY TEST</div>
                    <div class="panel-body">
                        <div class="thumbnail">
                            <div class="caption">
                                <h4><span class="glyphicon glyphicon-pushpin"></span>
                                    TUITION SUM: <p>(<span style="color:#F00">N51960</span>)</p>
                                </h4>

                                <?php
                                $tref = mt_rand(100000,999999);
                                $_SESSION['genref'] = $tref;
                                ?>
                                <form method="post" action="confirm.php">
                                    <fieldset class="form-group">
                                        <label for="formGroupExampleInput">Amount Due</label>
                                        <input type="number" class="form-control" value="51960" readonly name="amount" />
                                    </fieldset>
                                    <button type="submit" class="btn btn-info" data-toggle="tooltip">Pay Now >></button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




</div> <!-- end container -->

<!-- javascript -->
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
		$('a.btn-info').tooltip()
	</script>
	<script src="js/angular.min.js"></script>
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/app.js"></script>
	<script src="js/WebpayController.js"></script>
	</body>
</html>