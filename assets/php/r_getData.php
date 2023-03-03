<?php 
require_once("db_connect.php");

// Access POST data directly instead of using extract($_POST)
$search = isset($_POST['search']) ? $_POST['search'] : null;
$order = isset($_POST['order']) ? $_POST['order'] : null;
$start = isset($_POST['start']) ? intval($_POST['start']) : 0;
$length = isset($_POST['length']) ? intval($_POST['length']) : 10;
$draw = isset($_POST['draw']) ? intval($_POST['draw']) : 1;

$totalCount = $conn->query("SELECT * FROM `podms_records` ORDER BY `date` DESC")->num_rows;
$search_where = "";
if(!empty($search)){
    $search_where = " where ";
    $search_where .= " date LIKE '%{$search['value']}%' ";
    $search_where .= " OR complained_id_number LIKE '%{$search['value']}%' ";
    $search_where .= " OR complained_first_name LIKE '%{$search['value']}%' ";
    $search_where .= " OR complained_middle_name LIKE '%{$search['value']}%' ";
    $search_where .= " OR complained_last_name LIKE '%{$search['value']}%' ";
    $search_where .= " OR complained_course LIKE '%{$search['value']}%' ";
    $search_where .= " OR inci_desc LIKE '%{$search['value']}%' ";
    $search_where .= " OR inci_date LIKE '%{$search['value']}%' ";
    $search_where .= " OR inci_time LIKE '%{$search['value']}%' ";
    $search_where .= " OR violation_level LIKE '%{$search['value']}%' ";
    $search_where .= " OR violation LIKE '%{$search['value']}%' ";
}
$columns_arr = array(
                     "date",
                     "complained_id_number",
                     "complained_first_name",
                     "complained_middle_name",
                     "complained_last_name",
                     "complained_course",
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

    $filename = $row['image_name'];
    // $imagePath = '../uploads' . $filename;

    // Check if image exists in local folder
if (file_exists("../uploads/$filename")) {
    // Display image
    $image = base64_encode($filename);
    $row['image'] = "<img src='data:../uploads;base64,$image'>";
  } else {
    $row['image'] = "Image not found";
  }



    // $image = $row['image'];
    $data[] = $row;
}
echo json_encode(array('draw'=>$draw,
                       'recordsTotal'=>$recordsTotal,
                       'recordsFiltered'=>$recordsFiltered,
                       'data'=>$data
                       )
);
