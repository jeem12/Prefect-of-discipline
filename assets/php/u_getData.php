<?php 
require_once("db_connect.php");
extract($_POST);

$totalCount = $conn->query("SELECT * FROM `podms_users` ")->num_rows;
$search_where = "";
if(!empty($search)){
    $search_where = " where ";
    $search_where .= " name LIKE '%{$search['value']}%' ";
    $search_where .= " OR username LIKE '%{$search['value']}%' ";
    $search_where .= " OR position LIKE '%{$search['value']}%' ";
}
$columns_arr = array(
                     "name",
                     "username",
                     "password",
                     "position"
                    );
$query = $conn->query("SELECT * FROM `podms_users` {$search_where} ORDER BY {$columns_arr[$order[0]['column']]} {$order[0]['dir']} limit {$length} offset {$start} ");
$recordsFilterCount = $conn->query("SELECT * FROM `podms_users` {$search_where} ")->num_rows;

$recordsTotal= $totalCount;
$recordsFiltered= $recordsFilterCount;
$data = array();
$i= 1 + $start;
while($row = $query->fetch_assoc()){
    
    $ciphering = "aes-128-ctr";
    $option = 0;
    $decryption_iv = '1234567890123456';
    $decryption_key = 'devanshu';
    $decryption = openssl_decrypt($row['password'], $ciphering, $decryption_key, $option, $decryption_iv);


    $row['pass'] = $decryption;
    $row['position'] = strtoupper($row['position']);
    $row['name'] = strtoupper($row['name']);
    $data[] = $row;
}
echo json_encode(array('draw'=>$draw,
                       'recordsTotal'=>$recordsTotal,
                       'recordsFiltered'=>$recordsFiltered,
                       'data'=>$data
                       )
);
