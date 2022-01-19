<?php
include_once('../class/employee_class.php');
$employee = new Employee();
$page=1;
$search_keyword='';
if(!empty($_POST['page'])){
    $page=$_POST['page'];
}
if(!empty($_POST['search']['keyword'])) {
    $search_keyword = $_POST['search']['keyword'];
    $data=$employee->get_employee($search_keyword,$_POST["page"]);
    $result=$data[1];
}else{
    $data=$employee->get_employee('',$page);
    $result=$data[1];
}
?>