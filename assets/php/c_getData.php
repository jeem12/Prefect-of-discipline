<?php 
require_once("db_connect.php");
extract($_POST);

$totalCount = $conn->query("SELECT * FROM `podms_confiscated` ")->num_rows;
$search_where = "";
if(!empty($search)){
    $search_where = " where ";
    $search_where .= " first_name LIKE '%{$search['value']}%' ";
    $search_where .= " OR last_name LIKE '%{$search['value']}%' ";
    $search_where .= " OR section LIKE '%{$search['value']}%' ";
    $search_where .= " OR course LIKE '%{$search['value']}%' ";
    $search_where .= " OR item_name LIKE '%{$search['value']}%' ";
    $search_where .= " OR item_desc LIKE '%{$search['value']}%' ";
    $search_where .= " OR status LIKE '%{$search['value']}%' ";
}
$columns_arr = array(
                     "first_name",
                     "last_name",
                     "section",
                     "course",
                     "item_name",
                     "item_desc",
                     "status",
                    );
$query = $conn->query("SELECT * FROM `podms_confiscated` {$search_where} ORDER BY {$columns_arr[$order[0]['column']]} {$order[0]['dir']} limit {$length} offset {$start} ");
$recordsFilterCount = $conn->query("SELECT * FROM `podms_confiscated` {$search_where} ")->num_rows;

$recordsTotal= $totalCount;
$recordsFiltered= $recordsFilterCount;
$data = array();
$i= 1 + $start;
while($row = $query->fetch_assoc()){
    $row['fullname'] = $row['last_name'] . ', ' . $row['first_name'];
    $data[] = $row;
}
echo json_encode(array('draw'=>$draw,
                       'recordsTotal'=>$recordsTotal,
                       'recordsFiltered'=>$recordsFiltered,
                       'data'=>$data
                       )
);
