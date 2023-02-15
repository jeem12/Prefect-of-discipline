<?php 
require_once("db_connect.php");
extract($_POST);

$totalCount = $conn->query("SELECT * FROM `podms_violation` ")->num_rows;
$search_where = "";
if(!empty($search)){
    $search_where = " where ";
    $search_where .= " viol_name LIKE '%{$search['value']}%' ";
    $search_where .= " OR viol_first_off LIKE '%{$search['value']}%' ";
    $search_where .= " OR viol_sec_off LIKE '%{$search['value']}%' ";
    $search_where .= " OR viol_third_off LIKE '%{$search['value']}%' ";
}
$columns_arr = array(
                     "viol_name",
                     "viol_first_off",
                     "viol_sec_off",
                     "viol_third_off"
                    );
$query = $conn->query("SELECT * FROM `podms_violation` {$search_where} ORDER BY {$columns_arr[$order[0]['column']]} {$order[0]['dir']} limit {$length} offset {$start} ");
$recordsFilterCount = $conn->query("SELECT * FROM `podms_violation` {$search_where} ")->num_rows;

$recordsTotal= $totalCount;
$recordsFiltered= $recordsFilterCount;
$data = array();
$i= 1 + $start;
while($row = $query->fetch_assoc()){
    $row['no'] = $i++;
    $row['viol_name'];
    $data[] = $row;
}
echo json_encode(array('draw'=>$draw,
                       'recordsTotal'=>$recordsTotal,
                       'recordsFiltered'=>$recordsFiltered,
                       'data'=>$data
                       )
);
