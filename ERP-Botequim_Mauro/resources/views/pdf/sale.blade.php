<!DOCTYPE html>
<html>
<head>
    <title>Lista de Produtos</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Lista de Produtos</h1>
    <table>
        <thead>
            <tr>
                <th> Nome do Produto </th>
                <th> Quantidade </th>
                <th> Preço de Venda </th>
                <th> Data de Saída </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->stocks->product->Product_name }}</td>
                    <td>{{ $product->Quantity }}</td>
                    <td>{{ number_format($product->Product_price, 2, ',', '.') }} MZN</td>
                    <td>{{ \Carbon\Carbon::parse($product->created_at)->format('d/m/Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
