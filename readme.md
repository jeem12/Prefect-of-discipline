SET @num := 0;

UPDATE your_table SET id = @num := (@num+1);

ALTER TABLE your_table AUTO_INCREMENT =1;

SET @num := 0;

UPDATE reports SET id = @num := (@num+1);

ALTER TABLE reports AUTO_INCREMENT =1;

SELECT DATE(date) as Month, COUNT(id) as Total FROM reports GROUP BY MONTH;

INSERT INTO podms_appointment SELECT * FROM podms_profiling WHERE id = $id;

DELETE FROM podms_profiling WHERE id = $id;

DATABASE PASS: CwF*@JeLgg1Js8A8




 , `duty_start` = '$dutyS' , `duty_end` = '$dutyE' , `duties`='$duty', `duty_location`= '$duty_loc' 