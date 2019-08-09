<?php
// 导入数据库初始化文件
require "./init/connect.php";
$uscore = $_POST['uscore'];
$usno1 = $_POST['usno1'];
$usno2 = $_POST['usno2'];
$usno3 = $_POST['usno3'];
$usno4 = $_POST['usno4'];
$usno5 = $_POST['usno5'];
$usno6 = $_POST['usno6'];
$usno7 = $_POST['usno7'];
$usno8 = $_POST['usno8'];

// 测试数据
$uscore = '512';

$usno1 = '1016';
$usno2 = '1053';
$usno3 = '1056';
$usno4 = '1058';
$usno5 = '1060';
$usno6 = '1068';
$usno7 = '5019';
$usno8 = '5012';
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
// SQL语句
    $sql = "SELECT * FROM {$tablename} WHERE sno IN ({$usno1},{$usno2},{$usno3},{$usno4},{$usno5},{$usno6},{$usno7},{$usno8})";
    // echo "$sql".'<br>';

	$mysql_result = $db -> query($sql);

    $rows = [];
    $scores=[];
	while($row = $mysql_result->fetch_array(MYSQLI_ASSOC)){
	    $rows[] = $row;
    }
        print_r($rows);
    
    foreach ($rows as $row) {
        if (is_array($row)){
            $scores[] = $row['score'];
        }
    }
    // print_r($scores);
    // foreach ($scores as $value) {
    //     // echo "$value " ;
    //     if ($uscore > $value){
    //         echo "yes";
    //         break;
    //     }
    //     else{
    //         echo "no";
    //     }
    // }
?>
