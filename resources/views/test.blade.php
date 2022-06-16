<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
<form action="/yt" method="post" >
    @csrf
        <legend>Tính tổng hai số</legend>
        
        <div class="form-group">
            <label for="">Nhập số A</label>
            <input type="text" name="hsa" class="form-control" id="" placeholder="">
        </div>
        <div class="form-group">
            <label for="">Nhập số B</label>
            <input type="text" name="hsb" class="form-control" id="" placeholder="">
        </div>
        <div class="form-group">
            <label for="">Tổng</label>
            <input type="number" name="" class="form-control" id="" placeholder="" value="<?php if(isset($sum))echo $sum;?>">
        </div>
        <button type="submit" class="btn btn-primary" >Submit</button>
    </form>
</body>
</html>