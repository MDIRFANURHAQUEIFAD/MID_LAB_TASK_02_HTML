<?php
$ARRAY = array (
array(1,2,3,'A'),
array(1,2,'B','C'),
array(1,'D','E','F')
);
for($i=0;$i<3;$i++){
for($j=0;$i<4;$j++){
echo "$ARRAY[$i][$j]";
}
echo "\n";
}
?>