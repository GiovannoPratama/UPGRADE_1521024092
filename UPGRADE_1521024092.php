<title>
	Giovanno
</title>
<table border="1">
	<tr>
		<th rowspan="2">INPUT</th>
		<th colspan="5">OUTPUT</th>
	</tr>
	<tr>
		<th>A</th>
		<th>E</th>
		<th>I</th>
		<th>U</th>
		<th>O</th>
	</tr>
	<tr>
		<td>
		<?php
			$Nama="GIOVANNO PRATAMA PUTRA";
			echo $Nama;
		?>
		</td>
		<td>
		<?php
			 $a = substr_count($Nama, "A");
				echo "$a";
		?>
		</td>
		<td>
		<?php
			 $a = substr_count($Nama, "E");
				echo "$a";
		?>
		</td>
		<td>
		<?php
			 $a = substr_count($Nama, "I");
				echo "$a";
		?>
		</td>
		<td>
		<?php
			 $a = substr_count($Nama, "U");
				echo "$a";
		?>
		</td>
		<td>
		<?php
			 $a = substr_count($Nama, "O");
				echo "$a";
		?>
		</td>
	</tr>
</table>