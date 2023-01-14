<?php
    if (isset($_REQUEST['btnCalc'])) {
        $Comm =  (isset($_POST["txtComm"]))?$_POST["txtComm"]:"";
        $Rate = (isset($_POST["txtRate"]))?$_POST["txtRate"]:"";
        $Freq = (isset($_POST["txtFreq"]))?$_POST["txtFreq"]:"";

       

        $SecondCost = $Rate/60;
        $CommCost = $SecondCost*$Comm;
        $DailyCost = $CommCost * $Freq;
        $MonthlyCost = $DailyCost * 30;

        $msg = "Commercial Seconds: ".$Comm.", Commercial Rates: ".$Rate.", Daily Runtime: ".$Freq.", Daily Cost: ".$DailyCost.", Monthly Cost: ".$MonthlyCost;
    }
?>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Commercial Calc</h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="txtComm">Commercial Seconds</label>
                        <input type="number" name="txtComm" id="txtComm" class="form-control"
                            placeholder="Enter Seconds of Commerial" aria-describedby="CommhelpId" required>
                        <small id="CommhelpId" class="text-muted">Commercial Seconds</small>
                    </div>
                    <div class="form-group">
                        <label for="txtRate">Per Minute Rate</label>
                        <input type="number" name="txtRate" id="txtRate" class="form-control"
                            placeholder="Enter Per Minute Rate" aria-describedby="RatehelpId" required>
                        <small id="RatehelpId" class="text-muted">Commercial Rate</small>
                    </div>
                    <div class="form-group">
                        <label for="txtFreq">Daily Frequency</label>
                        <input type="number" name="txtFreq" id="txtFreq" class="form-control"
                            placeholder="Enter Frequency" aria-describedby="FreqhelpId" required>
                        <small id="FreqhelpId" class="text-muted">Daily Runtime</small>
                    </div>
                    <div class="form-group">
                        <input id="btnCalc" name="btnCalc" type="submit" value="Calculate" class="btn btn-md btn-primary"/>
                       

                    </div>
                </form>
            </div>
            <div class="col-md-6">
            <?php
                if (!empty($msg))
                 {                  
            ?>
                
                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Info!</strong> <?php echo $msg; ?>
                </div>
                
            <?php
                }
            ?>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>