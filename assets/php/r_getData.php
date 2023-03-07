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

$query = $conn->query("SELECT * , CONCAT('../assets/uploads/', image_name) AS `image_path` FROM `podms_records` {$search_where} ORDER BY {$columns_arr[$order[0]['column']]} {$order[0]['dir']} limit {$length} offset {$start} ");
$recordsFilterCount = $conn->query("SELECT * FROM `podms_records` {$search_where} ")->num_rows;

$recordsTotal= $totalCount;
$recordsFiltered= $recordsFilterCount;
$data = array();
$i= 1 + $start;
while($row = $query->fetch_assoc()){
  $row['fullname'] = $row['complained_last_name'] . ', ' . $row['complained_first_name'] . ' ' . $row['complained_middle_name'];

    $image_name = $row['image_name'];

    // Get the path of the uploads folder on the local server
    $upload_folder = "../assets/uploads/";


// Check if the image file exists in the uploads folder and create HTML code to display the image
if (file_exists($upload_folder . $image_name)) {
    $row['image_data'] = 'Image not found';
} else {

    $row['image_data'] = '<img src="'. $upload_folder . $image_name .'" style="width: 200px; height: 200px;" alt="">';
}

    $data[] = $row;
}

echo json_encode(array('draw'=>$draw,
                       'recordsTotal'=>$recordsTotal,
                       'recordsFiltered'=>$recordsFiltered,
                       'data'=>$data
                       )
);
