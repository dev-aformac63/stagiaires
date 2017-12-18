<?php
$N=$_GET['N'];

echo 'N : '.$N.'<br/><br/>';
echo '<table>';
echo '<thead>';
echo '<tr>';
echo '<th>A</th>';
echo '<th>B</th>';
echo '<th>C</th>';
echo '<th>D</th>';
echo '</tr>';
echo '</thead>';

echo '<tbody>';
$newline=true;

for($i=0;$i<$N;$i++)
{
	if($i%4 == 0)
	{
		if($i>0) echo '</tr>';
		echo '<tr>';
	}

	echo '<td>'.$i.'</td>';


}
echo '</tbody>';
echo '</table>';