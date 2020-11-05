<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .re {
            margin-top: 5%
        }
    </style>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <title>Train</title>
</head>

<body>
    <div class="container">
        <div class="re">
            <form method="POST" action="<?php echo site_url('welcome/insert') ?>">
                <div class="form-group">

                    <label>ขบวน</label>
                    <input type="text" name="tarin_id" class="form-control">
                </div> <br>
                <div class="form-group">
                    <label>สถานี</label>
                    <input type="text" name="station" class="form-control">
                </div> <br>
                <div class="form-group">
                    <label>เวลาออก</label>
                    <input type="text" name="outtime" class="form-control">
                </div> <br>
                <div class="form-group">
                    <label>ถึง</label>
                    <input type="text" name="To" class="form-control">
                </div> <br>
                <div class="form-group">
                    <label>ออก</label>
                    <input type="text" name="out" class="form-control">
                </div> <br>
                <div class="form-group">
                    <label>สถานี</label>
                    <input type="text" name="tarinstation" class="form-control">
                </div> <br>
                <div class="form-group">
                    <label>ถึงเวลา</label>
                    <input type="text" name="ittime" class="form-control">
                </div> <br>
                <div class="form-group">
                    <label>หมายเหตุ</label>
                    <input type="text" name="note" class="form-control">
                </div> <br>
                <div align="right">
                    <button type="submit" class="btn btn-primary">ตกลง</button> </div>
            </form>

        </div>
    </div>

</body>

</html>