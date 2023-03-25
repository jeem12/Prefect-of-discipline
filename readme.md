SET @num := 0;

UPDATE your_table SET id = @num := (@num+1);

ALTER TABLE your_table AUTO_INCREMENT =1;

SET @num := 0;

UPDATE reports SET id = @num := (@num+1);

ALTER TABLE reports AUTO_INCREMENT =1;

SELECT DATE(date) as Month, COUNT(id) as Total FROM reports GROUP BY MONTH;

INSERT INTO podms_appointment SELECT * FROM podms_profiling WHERE id = $id;

DELETE FROM podms_profiling WHERE id = $id;



<!-- =========================== -->

<?php

$sname= "localhost";
$unmae= "bcps_Username";
$password = "bcps_Password";

$db_name = "bcps_database";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
?>





                  <!-- <table class="table table-borderless datatable" id="bsit">
                    
                    <thead>
                      <tr>
                        <th scope="col">ID Number</th>
                        <th scope="col">Fullname</th>
                        <th scope="col">Section</th>
                        <th scope="col">Course</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Item Description</th>
                        <th scope="col">Date Confiscated</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <td><?= $row['id_number']?></td>
                        <td><?= $row['last_name'] . ', ' . $row['first_name'] . ' ' . $row['middle_name']?></td>
                        <td><?= $row['section']?></td>
                        <td><?= $row['course']?></td>
                        <td><?= $row['item_name']?></td>
                        <td><?= $row['item_desc']?></td>
                        <td><?= $row['date']?></td>
                      </tr>
                      <?php
                                }
                              }
                                ?>
                    </tbody>
                  </table> -->