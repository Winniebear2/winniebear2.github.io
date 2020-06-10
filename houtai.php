<?php
require("conn.php");
$flag=$_POST['flag'];
//  $flag = 1;
if($flag==3){
    $data = array();
    $date = $_POST['date'];
    $class = $_POST['class'];
    $college = $_POST['college'];
    $tel = $_POST['tel'];
    $Sclass = $_POST['Sclass'];
    $sex = $_POST['sex'];
    $place = $_POST['place'];
    $major = $_POST['major'];
    $Name = $_POST['Name'];
    $Cnumber = $_POST['Cnumber'];
    $sql ="INSERT INTO student VALUES('','".$Name."','".$class."','".$Cnumber."','".$date."','".$sex."','".$Sclass."','".$major."','".$college."','".$tel."','".$place."')";
    $result = $conn->query($sql);
    if ($result>0){
        $data["status"]="注册成功";
        // $json="success";
    }
    else{
        $data["status"]="注册失败";
        // $json="false";
    }
    $json = json_encode($data);
}
if($flag==1){
    $data = array();
    $sql = "SELECT * FROM student";
    $result = $conn->query($sql);
    $i = 0;
    while($row=$result->fetch_assoc()){
        $data[$i]["Name"] = $row["name"];
        $data[$i]["class"] = $row["class"];
        $data[$i]["Cnumber"] = $row["Cnumber"];
        $data[$i]["date"] = $row["date"];
        $data[$i]["sex"] = $row["sex"];
        $data[$i]["Sclass"] = $row["Sclass"];
        $data[$i]["major"] = $row["major"];
        $data[$i]["college"] = $row["college"];
        $data[$i]["tel"] = $row["number"];
        $data[$i]["place"] = $row["place"];
        $i++;
    }
    $json = json_encode($data);
//  echo $data["date"][0];
}
if($flag==2){
    $op = $_POST['op'];
    // $op = 'name';
    $info = $_POST['info'];
    $data = array();
    $sql = "SELECT * FROM student WHERE $op ='$info'";
    $result = $conn->query($sql);
    $i = 0;
    while($row=$result->fetch_assoc()){
        $data[$i]["Name"] = $row["name"];
        $data[$i]["class"] = $row["class"];
        $data[$i]["Cnumber"] = $row["Cnumber"];
        $data[$i]["date"] = $row["date"];
        $data[$i]["sex"] = $row["sex"];
        $data[$i]["Sclass"] = $row["Sclass"];
        $data[$i]["major"] = $row["major"];
        $data[$i]["college"] = $row["college"];
        $data[$i]["tel"] = $row["number"];
        $data[$i]["place"] = $row["place"];
        $i++;
    }
    $json = json_encode($data);
}
if($flag==4){
    $data = array();
    $Cnumber = $_POST['delCnumber'];
    $sql = "DELETE FROM student WHERE Cnumber='".$Cnumber."'";
    $result = $conn->query($sql);
    if($result>=1){
        $data["status"] = "删除成功";
    }
    else{
        $data["status"] = "删除失败";
    }
    $json = json_encode($data);
}
echo $json;
    
?>