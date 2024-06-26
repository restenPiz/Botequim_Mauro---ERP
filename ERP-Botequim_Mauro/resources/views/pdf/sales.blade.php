<!DOCTYPE html>
<html>
<head>
    <title>Relatório de Vendas</title>
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
    <h1>Relatório de Vendas</h1>
    <table>
        <thead>
            <tr>
                <th> Nome do Producto </th>
                <th> Quantidade </th>
                <th> Metodo de Pagamento </th>
                <th> Preco de Venda </th>
                <th> Valor Total </th>
                <th> Valor Pago </th>
                <th> Troco </th>
                <th> Data de Venda </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->stocks->product->Product_name }}</td>
                    <td>{{ $product->Quantity }}</td>
                    <td>{{ $product->payments->Name_payment }}</td>
                    <td>{{ number_format($product->Product_price, 2, ',', '.') }} MZN</td>
                    <td>{{ number_format($product->Amount, 2, ',', '.') }} MZN</td>
                    <td>{{ number_format($product->Total_price, 2, ',', '.') }} MZN</td>
                    <td>{{ number_format($product->Total_price - $product->Amount, 2, ',', '.') }} MZN</td>
                    <td>{{ \Carbon\Carbon::parse($product->created_at)->format('d/m/Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
