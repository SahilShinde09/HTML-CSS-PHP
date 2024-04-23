<?php
require('db.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<h2>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>Sr. No.</strong></th>
<th><strong>Name</strong></th>
<th><strong>Year</strong></th>
<th><strong>Company</strong></th>
<th><strong>Package</strong></th>

</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from new_record";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["name"]; ?></td>
<td align="center"><?php echo $row["Year"]; ?></td>
<td align="center"><?php echo $row["company"]; ?></td>
<td align="center"><?php echo $row["package"]; ?></td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>