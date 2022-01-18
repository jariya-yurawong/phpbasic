<?php
error_reporting(0);//ปิด error
$number1 = $_POST["number1"];
$number2 = $_POST["number2"];
$number3 = $_POST["number3"];
$number4 = $_POST["number4"];
$number5 = $_POST["number5"];
?>
<!DOCTYPE html>
<html lang="en">
    <header>
        <!--Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css" >

        <title>number</title>
    </header>
    <body>

    

    <div class="input-group mb-3">
        <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-default">number 1</span>
  </div>
    <input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="number1">
    </div>

    <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">number 2</span>
    </div>
        <input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="number2">
    </div>

    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-default">number 3</span>
    </div>
        <input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="number3">
    </div>

    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-default">number 4</span>
    </div>
        <input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="number4">
    </div>

    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-default">number 5</span>
    </div>
        <input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="number5">
    </div>
    <button type="submit" class="btn btn-primary">send</button>
    <button type="reset" class="btn btn-danger">reset</button>       
            
        </form>
    </div>
    

        <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
<?php
    if(isset($number1)){
        $sum = $number1+$number2+$number3+$number4+$number5 ;
        echo $sum;
    }else{
        echo "ไม่มีข้อมูล";
    }
?>