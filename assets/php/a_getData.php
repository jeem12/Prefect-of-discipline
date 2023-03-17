<?php 
require_once("db_connect.php");
extract($_POST);

$totalCount = $conn->query("SELECT * FROM `podms_sp_appointment`")->num_rows;
$search_where = "";
if(!empty($search)){
    $search_where = " where ";
    $search_where .= " date LIKE '%{$search['value']}%' ";
    $search_where .= " OR complainant_id_number LIKE '%{$search['value']}%' ";
    $search_where .= " OR complainant_first_name LIKE '%{$search['value']}%' ";
    $search_where .= " OR complainant_middle_name LIKE '%{$search['value']}%' ";
    $search_where .= " OR complainant_last_name LIKE '%{$search['value']}%' ";
    $search_where .= " OR complainant_course LIKE '%{$search['value']}%' ";
    $search_where .= " OR description LIKE '%{$search['value']}%' ";
}
$columns_arr = array(
                     "date",
                     "complainant_id_number",
                     "complainant_first_name",
                     "complainant_middle_name",
                     "complainant_last_name",
                     "complainant_course",
                     "description",
                     "status"
                    );
// $query = $conn->query("SELECT * FROM `podms_sp_appointment` {$search_where} ORDER BY {$columns_arr[$order[0]['column']]} {$order[0]['dir']} limit {$length} offset {$start} ");
$query = $conn->query("SELECT * FROM podms_sp_appointment {$search_where} ORDER BY {$columns_arr[$order[0]['column']]} DESC limit {$length} offset {$start} ");
$recordsFilterCount = $conn->query("SELECT * FROM `podms_sp_appointment` {$search_where}")->num_rows;

$recordsTotal= $totalCount;
$recordsFiltered= $recordsFilterCount;
$data = array();
$i= 1 + $start;
while($row = $query->fetch_assoc()){
    $row['fullname'] = $row['complainant_last_name'] . ', ' . $row['complainant_first_name'] . ' ' . $row['complainant_middle_name'];
    $row['date'] = date("F d, Y h:i A", strtotime($row['date']));
    $data[] = $row;
}
echo json_encode(array('draw'=>$draw,
                       'recordsTotal'=>$recordsTotal,
                       'recordsFiltered'=>$recordsFiltered,
                       'data'=>$data
                       )
);
