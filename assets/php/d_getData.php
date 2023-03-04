<?php 
require_once("db_connect.php");
extract($_POST);

$totalCount = $conn->query("SELECT * FROM `podms_duty` ORDER BY `date` DESC")->num_rows;
$search_where = "";
if(!empty($search)){
    $search_where = " where ";
    $search_where .= " complained_id_number LIKE '%{$search['value']}%' ";
    $search_where .= " OR complained_last_name LIKE '%{$search['value']}%' ";
    $search_where .= " OR complained_first_name LIKE '%{$search['value']}%' ";
    $search_where .= " OR complained_middle_name LIKE '%{$search['value']}%' ";
    $search_where .= " OR complained_section LIKE '%{$search['value']}%' ";
    $search_where .= " OR complained_course LIKE '%{$search['value']}%' ";
    $search_where .= " OR duties LIKE '%{$search['value']}%' ";
    $search_where .= " OR duty_start LIKE '%{$search['value']}%' ";
    $search_where .= " OR duty_end LIKE '%{$search['value']}%' ";
    $search_where .= " OR duty_location LIKE '%{$search['value']}%' ";
}
$columns_arr = array(
                    "complained_id_number",
                    "complained_last_name",
                    "complained_first_name",
                    "complained_middle_name",
                    "complained_section",
                    "complained_course",
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
    $row['fullname'] = $row['complainant_last_name'] . ', ' . $row['complainant_first_name'] . ' ' . $row['complainant_middle_name'];
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
