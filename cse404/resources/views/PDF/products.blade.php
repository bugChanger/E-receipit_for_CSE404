<!DOCTYPE html>
<html>
<head>
	<title>Convert to PDF</title>
	<style>
		tr.border{
			border: thin solid;
		}
		table, th, td {
			border: 1px solid black;
		}
	</style>
</head>

<body> <!-- style="border: 2px solid #000;" -->

	<center><h1>Company Name</h1></center>
	<p style="float: left;">
		<strong>Payment Method: Cash</strong><br>
	</p>
	<p style="float: right;">@php
		date_default_timezone_set("Asia/Dhaka");
		echo date('d-m-Y')."<br>";
		echo date('H:i:s');
		@endphp
	</p><br>
	<br><br><br>

	<h2 class="panel-title"><strong>Order Summary</strong></h2>

	<table style="cellpadding="10" cellspacing="0" width="100%" style="border: 1px solid #000;">
		<tr>
			<th style="text-align: center;">Product Name</th>
			<th style="text-align: center;">Product Quantity</th> 
			<th style="text-align: center;">Product Price</th>
			<th style="text-align: center;">Total Price</th>
		</tr>
		<tr>
			<td style="text-align: center;">@php echo $data{'p_name'}; @endphp</td>
			<td style="text-align: center;">@php echo $data{'p_quan'}; @endphp</td>
			<td style="text-align: center;">@php echo $data{'p_price'}; @endphp</td>
			<td style="text-align: center;">@php echo $data{'total'}; @endphp</td>
		</tr>

		<tr>
			<td class="thick-line"></td>
			<td class="thick-line"></td>
			<td class="thick-line text-center"><strong>VAT 15%</strong></td>
			<td class="thick-line text-right" style="text-align: center;">0</td>
		</tr>

		<tr>
			<td class="no-line"></td>
			<td class="no-line"></td>
			<td class="no-line text-center"><strong>Total</strong></td>
			<td class="no-line text-right" style="text-align: center;">@php echo $data{'total'}; @endphp</td>
		</tr>

	</table>
	<br>
	<br>
	<center>No human was involved in creating this invoice, so, no signature is needed.</center>	
</body>
</html>

