<?php 
require_once("db_connect.php");
extract($_POST);

$totalCount = $conn->query("SELECT * FROM `podms_records` ")->num_rows;
$search_where = "";
if(!empty($search)){
    $search_where = " where ";
    $search_where .= " date LIKE '%{$search['value']}%' ";
    $search_where .= " OR id_number LIKE '%{$search['value']}%' ";
    $search_where .= " OR first_name LIKE '%{$search['value']}%' ";
    $search_where .= " OR middle_name LIKE '%{$search['value']}%' ";
    $search_where .= " OR last_name LIKE '%{$search['value']}%' ";
    $search_where .= " OR course LIKE '%{$search['value']}%' ";
    $search_where .= " OR inci_desc LIKE '%{$search['value']}%' ";
    $search_where .= " OR inci_date LIKE '%{$search['value']}%' ";
    $search_where .= " OR inci_time LIKE '%{$search['value']}%' ";
    $search_where .= " OR violation_level LIKE '%{$search['value']}%' ";
    $search_where .= " OR violation LIKE '%{$search['value']}%' ";
}
$columns_arr = array(
                     "date",
                     "id_number",
                     "first_name",
                     "middle_name",
                     "last_name",
                     "course",
                     "inci_desc",
                     "inci_date",
                     "inci_time",
                     "violation_level",
                     "violation",
                    );
$query = $conn->query("SELECT * FROM `podms_records` {$search_where} ORDER BY {$columns_arr[$order[0]['column']]} {$order[0]['dir']} limit {$length} offset {$start} ");
$recordsFilterCount = $conn->query("SELECT * FROM `podms_records` {$search_where} ")->num_rows;

$recordsTotal= $totalCount;
$recordsFiltered= $recordsFilterCount;
$data = array();
$i= 1 + $start;
while($row = $query->fetch_assoc()){
    // $row['image_name'] = fetch $row['image_name'];
    $data[] = $row;
}
echo json_encode(array('draw'=>$draw,
                       'recordsTotal'=>$recordsTotal,
                       'recordsFiltered'=>$recordsFiltered,
                       'data'=>$data
                       )
);
