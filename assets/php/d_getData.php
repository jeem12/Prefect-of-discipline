<?php 
require_once("db_connect.php");
extract($_POST);

$totalCount = $conn->query("SELECT * FROM `podms_duty` ORDER BY `date` DESC")->num_rows;
$search_where = "";
if(!empty($search)){
    $search_where = " where ";
    $search_where .= " id_number LIKE '%{$search['value']}%' ";
    $search_where .= " OR last_name LIKE '%{$search['value']}%' ";
    $search_where .= " OR first_name LIKE '%{$search['value']}%' ";
    $search_where .= " OR middle_name LIKE '%{$search['value']}%' ";
    $search_where .= " OR duties LIKE '%{$search['value']}%' ";
    $search_where .= " OR duty_start LIKE '%{$search['value']}%' ";
    $search_where .= " OR duty_end LIKE '%{$search['value']}%' ";
    $search_where .= " OR duty_location LIKE '%{$search['value']}%' ";
}
$columns_arr = array(
                    "id_number",
                    "last_name",
                    "first_name",
                    "middle_name",
                    "duties",
                    "duty_start",
                    "duty_end",
                    "duty_location",
                    );
$query = $conn->query("SELECT * FROM `podms_duty` {$search_where} ORDER BY {$columns_arr[$order[0]['column']]} {$order[0]['dir']} limit {$length} offset {$start} ");
$recordsFilterCount = $conn->query("SELECT * FROM `podms_duty` {$search_where} ")->num_rows;

$recordsTotal= $totalCount;
$recordsFiltered= $recordsFilterCount;
$data = array();
$i= 1 + $start;
while($row = $query->fetch_assoc()){
    //$row['birthdate'] = date("F d, Y",strtotime($row['birthdate']));
    // $row['image'] = base64_encode($row['image']);
    $row['duty_start'] = date("g:i A", strtotime($row['duty_start']));
    $row['duty_end'] = date("g:i A", strtotime($row['duty_end']));
    $row['duties'] = strtoupper($row['duties']);
    $data[] = $row;

}
echo json_encode(array('draw'=>$draw,
                       'recordsTotal'=>$recordsTotal,
                       'recordsFiltered'=>$recordsFiltered,
                       'data'=>$data
                       )
);
