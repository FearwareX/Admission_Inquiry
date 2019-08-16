<?php
// 导入数据库初始化文件
require "./init/connect.php";
$uscore = $_POST['uscore'];
$usno = $_POST['usno'];
foreach ($usno as $value){ 
    if(empty($value)){
        $value = 1111;
    }
}
print_r($usno);

// 测试数据
// $uscore = '436';

// $usno1 = '1016';
// $usno2 = '1053';
// $usno3 = '1056';
// $usno4 = '1058';
// $usno5 = '1060';
// $usno6 = '1068';
// $usno7 = '5019';
// $usno8 = '5012';

// 判断文理科和批次选择不同数据表
    if ($_POST['type'] =='ptl_second_li') {
        $tablename = 'ptl_second_li';
    }
    if ($_POST['type'] =='ptl_second_wen') {
        $tablename = 'ptl_second_wen';
    }
    if ($_POST['type'] =='dll_second_li') {
        $tablename = 'dll_second_li';
    }
    if ($_POST['type'] =='dll_second_wen') {
        $tablename = 'dll_second_wen';
    }
    if ($_POST['type'] =='ptl_first_li') {
        $tablename = 'ptl_first_li';
    }
    if ($_POST['type'] =='ptl_first_wen') {
        $tablename = 'ptl_first_wen';
    }
    if ($_POST['type'] =='dll_first_li') {
        $tablename = 'dll_first_li';
    }
    if ($_POST['type'] =='dll_first_wen') {
        $tablename = 'dll_first_wen';
    }
// SQL语句

    // $sql = "SELECT * FROM {$tablename} WHERE sno IN ({$usno1},{$usno2},{$usno3},{$usno4},{$usno5},{$usno6},{$usno7},{$usno8})ORDER BY INSTR(',{$usno1},{$usno2},{$usno3},{$usno4},{$usno5},{$usno6},{$usno7},{$usno8},',CONCAT(',',sno,','))";

    $sql = "SELECT * FROM {$tablename} WHERE sno IN ($usno[0],$usno[1],$usno[2],$usno[3],$usno[4],$usno[5],$usno[6],$usno[7])ORDER BY INSTR(',$usno[0],$usno[1],$usno[2],$usno[3],$usno[4],$usno[5],$usno[6],$usno[7],',CONCAT(',',sno,','))";
    echo "$sql".'<br>';

	$mysql_result = $db -> query($sql);

    $rows = [];
    $scores=[];
	while($row = $mysql_result->fetch_array(MYSQLI_ASSOC)){
	    $rows[] = $row;
    }
        // print_r($rows);
    
    
    // print_r($scores);
    
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>查询结果</title>
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
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel panel-default">
                  <div class="panel-heading">您报考的学校</div>
                  <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>院校代码</th>
                                <th>院校名称</th>
                                <th>院校录取状态</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                foreach ($rows as $row) {
                            ?>
                            <tr>
                                <td><?php echo $row['sno']; ?></td>
                                <td><?php echo $row['sname']; ?></td>
                                <td>
                                    <?php 
                                    
                                    if ($row['score'] == '' || $row['score']== 0|| $row['score'] == null) {
                                        echo "数据无法查询";
                                    }
                                    elseif ($row['score'] <= $uscore) {
                                    echo "<b class='red'>已录取</b>" ;
                                    break;}
                                    else{
                                        echo "未录取";
                                    }
                                ?>
                                </td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                  </table>
                  </div>
                    <!-- <div class="panel-footer">
                        <span class="result_msg">恭喜你已被北京大学录取</span>
                    </div> -->
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    
</body>
</html>