<?php 
require_once("db_connect.php");
extract($_POST);

$totalCount = $conn->query("SELECT * FROM `podms_sp_appointment` ")->num_rows;
$search_where = "";
if(!empty($search)){
    $search_where = " where ";
    $search_where .= " complained_id_number LIKE '%{$search['value']}%' ";
    $search_where .= " OR complained_first_name LIKE '%{$search['value']}%' ";
    $search_where .= " OR complained_middle_name LIKE '%{$search['value']}%' ";
    $search_where .= " OR complained_last_name LIKE '%{$search['value']}%' ";
    $search_where .= " OR complained_course LIKE '%{$search['value']}%' ";
    $search_where .= " OR description LIKE '%{$search['value']}%' ";
}
$columns_arr = array(
                     "complained_id_number",
                     "complained_first_name",
                     "complained_middle_name",
                     "complained_last_name",
                     "complained_course",
                     "description",
                     "status"
                    );
$query = $conn->query("SELECT * FROM `podms_sp_appointment` {$search_where} ORDER BY {$columns_arr[$order[0]['column']]} {$order[0]['dir']} limit {$length} offset {$start} ");
$recordsFilterCount = $conn->query("SELECT * FROM `podms_sp_appointment` {$search_where} ")->num_rows;

$recordsTotal= $totalCount;
$recordsFiltered= $recordsFilterCount;
$data = array();
$i= 1 + $start;
while($row = $query->fetch_assoc()){
    $data[] = $row;
}
echo json_encode(array('draw'=>$draw,
                       'recordsTotal'=>$recordsTotal,
                       'recordsFiltered'=>$recordsFiltered,
                       'data'=>$data
                       )
);
