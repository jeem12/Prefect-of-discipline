<?php 
require_once("db_connect.php");
extract($_POST);

$totalCount = $conn->query("SELECT * FROM `podms_profiling` ")->num_rows;
$search_where = "";
if(!empty($search)){
    $search_where = " where ";
    $search_where .= " id_number LIKE '%{$search['value']}%' ";
    $search_where .= " OR first_name LIKE '%{$search['value']}%' ";
    $search_where .= " OR middle_name LIKE '%{$search['value']}%' ";
    $search_where .= " OR last_name LIKE '%{$search['value']}%' ";
    $search_where .= " OR course LIKE '%{$search['value']}%' ";
    $search_where .= " OR status LIKE '%{$search['value']}%' ";
    $search_where .= " OR date LIKE '%{$search['value']}%' ";
}
$columns_arr = array(
                     "date",
                     "id_number",
                     "first_name",
                     "middle_name",
                     "last_name",
                     "course",
                     "status"
                    );
$query = $conn->query("SELECT * FROM `podms_profiling` {$search_where} ORDER BY {$columns_arr[$order[0]['column']]} {$order[0]['dir']} limit {$length} offset {$start} ");
$recordsFilterCount = $conn->query("SELECT * FROM `podms_profiling` {$search_where} ")->num_rows;

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
