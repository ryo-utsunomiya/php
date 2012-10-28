<?php
require_once 'common/mysql.php';

$query=<<<EOT
SELECT bang, AVG(uria) 
    FROM tb 
WHERE uria >= 50 
    GROUP BY bang
HAVING AVG(uria) >= 120 
    ORDER BY AVG(uria) DESC
EOT;
    
$result = $mysqli->query($query);
while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    echo '社員番号：' . $row['bang'];
    echo '　売上平均：' . round($row['AVG(uria)']) . '<br>';
}