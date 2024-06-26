<!DOCTYPE html>
<html>
<head>
    <title>Debts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Tabela de Dividas {{ $clients->Name_client }} {{ $clients->Surname }}</h1>
    <table>
        <thead>
            <tr>
                <th>Nome de Producto</th>
                <th>Preço</th>
                <th>Data de Pagamento</th>
                <th>Quantidade</th>
                <th>Valor Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($debits as $debit)
                <tr>
                    <td>{{ $debit->product->product->Product_name }}</td>
                    <td>{{ number_format($debit->Product_price, 2, ',', '.') }} MZN</td>
                    <td>{{ $debit->Date_to_pay }}</td>
                    <td>{{ $debit->Quantity }}</td>
                    <td>{{ number_format($debit->Amount, 2, ',', '.') }} MZN</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
