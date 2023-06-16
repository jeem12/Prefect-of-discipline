<?php
require_once("db_connect.php");
extract($_POST);

$totalCount = $conn->query("SELECT * FROM `podms_stud_act` ORDER BY `id` DESC ")->num_rows;
$search_where = "";
if (!empty($search)) {
    $search_where = " where ";
    $search_where .= " stud_num LIKE '%{$search['value']}%' ";
    $search_where .= " OR lastname LIKE '%{$search['value']}%' ";
    $search_where .= " OR firstname LIKE '%{$search['value']}%' ";
    $search_where .= " OR middlename LIKE '%{$search['value']}%' ";
    $search_where .= " OR year LIKE '%{$search['value']}%' ";
    $search_where .= " OR course LIKE '%{$search['value']}%' ";
    $search_where .= " OR room LIKE '%{$search['value']}%' ";
    $search_where .= " OR sched LIKE '%{$search['value']}%' ";

}
$columns_arr = array(
    "stud_num",
    "lastname",
    "firstname",
    "middlename",
    "year",
    "course",
    "room",
    "sched"
);
$query = $conn->query("SELECT * FROM `podms_stud_act` {$search_where} ORDER BY {$columns_arr[$order[0]['column']]} {$order[0]['dir']} limit {$length} offset {$start} ");
$recordsFilterCount = $conn->query("SELECT * FROM `podms_stud_act` {$search_where} ")->num_rows;

$recordsTotal = $totalCount;
$recordsFiltered = $recordsFilterCount;
$data = array();
$i = 1 + $start;
while ($row = $query->fetch_assoc()) {
    $row['fullname'] = $row['lastname'] . ', ' . $row['firstname'] . ' ' . $row['middlename'];
    $data[] = $row;
}
echo json_encode(
    array(
        'draw' => $draw,
        'recordsTotal' => $recordsTotal,
        'recordsFiltered' => $recordsFiltered,
        'data' => $data
    )
);