<!-- resources/views/pdf/products.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Relatório de Produtos</title>
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
    <h1>Relatório de Produtos</h1>
    <table class="table table-striped" style="min-width: 678px">
        <thead>
            <tr>
                <th>Nome do Producto</th>
                <th>Quantidade</th>
                <th>Codigo</th>
                <th>Preco</th>
                <th>Preco de Venda</th>
                <th>Data de Entrada</th>
                <th>Data de Validade</th>
                <th>Categoria</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->Product_name }}</td>
                    <td>{{ $product->Quantity }}</td>
                    <td><span class="badge badge-subtle badge-success">{{ $product->Code }}</span></td>
                    <td>{{ number_format($product->Price, 2, ',', '.') }} MZN</td>
                    <td>{{ number_format($product->Sale_price, 2, ',', '.') }} MZN</td>
                    <td>{{ $product->Entry_date }}</td>
                    <td>{{ $product->Expiry_date }}</td>
                    <td><span class="badge badge-subtle badge-warning">{{ $product->categoria->Category_name }}</span></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
