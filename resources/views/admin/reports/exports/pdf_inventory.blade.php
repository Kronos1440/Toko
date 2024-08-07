<!DOCTYPE html>
<html>
  	<head>
		<meta charset="utf-8">
		<title>Laporan Inventori</title>
		<style type="text/css">
			table {
				width: 100%;
			}

			table tr td,
			table tr th {
				font-size: 10pt;
				text-align: left;
			}

			table tr:nth-child(even) {
				background-color: #f2f2f2;
			}

			table th, td {
  				border-bottom: 1px solid #ddd;
			}

			table th {
				border-top: 1px solid #ddd;
				height: 40px;
			}

			table td {
				height: 25px;
			}
		</style>
	</head>
  	<body>
		<h2>Laporan Inventori</h2>
		<hr>
		<table>
			<thead>
				<tr>
		<th>Nama</th>
		<th>SKU</th>
		<th>Stok</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($products as $product)
					<tr>    
						<td>{{ $product->name }}</td>
						<td>{{ $product->sku }}</td>
						<td>{{ $product->stock }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</body>
</html>