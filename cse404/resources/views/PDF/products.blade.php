<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Convert to PDF</title>
	<style type="text/css">
		table{
			border-collapse: collapse;
		}
		td,th{
			border: 1px solid,
		}
		</style>
</head>
<body>
<h1>Invoice</h1>
@php

echo $data{'p_name'};
echo "\n";
echo $data{'p_quan'};
echo "\n";
echo $data{'p_price'};
echo "\n";
echo $data{'total'};

@endphp			

</body>
</html>