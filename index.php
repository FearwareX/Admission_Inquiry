<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>高考录取查询系统</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/main.css">
<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-sm-12 col-md-10">
            <form action="results.php" method="POST" role="form">
                <legend>新疆高考录取查询工具</legend>
                <!-- <div class="form-group">
                <label for="">选择类别</label>
                <select name="zstype" id="zstype" class="form-control" required="required">
                    <option value="ptl">普通类</option>
                    <option value="dll">单列类</option>
                </select>
                </div> -->

                <div class="form-group">
                <label for="">选择录取批次及科类</label>
                <select name="type" id="type" class="form-control" required="required">
                    <option value="ptl_second_li">普通类理科二批次</option>
                    <option value="ptl_second_wen">普通类文科二批次</option>
                    <option value="dll_second_li">单列类理科二批次</option>
                    <option value="dll_second_wen">单列类文科二批次</option>
                    <option value="ptl_first_li">普通类理科一批次</option>
                    <option value="ptl_first_wen">普通类文科一批次</option>
                    <option value="dll_first_li">单列类理科一批次</option>
                    <option value="dll_first_wen">单列类文科一批次</option>
                </select>
                </div>
                
                <div class="form-group">
                    <label for="">高考分数</label>
                    <input type="text" class="form-control" placeholder="请输入你的高考分数" name="uscore">
                </div>
                <div class="form-group">
                    <label for="">第一志愿</label>
                    <input type="text" class="form-control" placeholder="请输入志愿学校的院校代码" name="usno[]">
                </div>
                <div class="form-group">
                    <label for="">第二志愿</label>
                    <input type="text" class="form-control" placeholder="请输入志愿学校的院校代码" name="usno[]">
                </div>
                <div class="form-group">
                    <label for="">第三志愿</label>
                    <input type="text" class="form-control" placeholder="请输入志愿学校的院校代码" name="usno[]">
                </div>
                <div class="form-group">
                    <label for="">第四志愿</label>
                    <input type="text" class="form-control" placeholder="请输入志愿学校的院校代码" name="usno[]">
                </div>
                <div class="form-group">
                    <label for="">第五志愿</label>
                    <input type="text" class="form-control" placeholder="请输入志愿学校的院校代码" name="usno[]">
                </div>
                <div class="form-group">
                    <label for="">第六志愿</label>
                    <input type="text" class="form-control" placeholder="请输入志愿学校的院校代码" name="usno[]">
                </div>
                <div class="form-group">
                    <label for="">第七志愿</label>
                    <input type="text" class="form-control" placeholder="请输入志愿学校的院校代码" name="usno[]">
                </div>
                <div class="form-group">
                    <label for="">第八志愿</label>
                    <input type="text" class="form-control" placeholder="请输入志愿学校的院校代码" name="usno[]">
                </div>

                <button type="submit" class="btn btn-primary">提交</button>
                <button type="reset" class="btn btn-danger">重置</button>
            </form>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
</body>
</html>