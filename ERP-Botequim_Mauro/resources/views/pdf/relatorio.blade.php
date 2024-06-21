<!DOCTYPE html>
<html>
<head>
    <title>Relatório</title>
    <style>
        .chart {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Relatório de Produtos</h1>

    <div class="chart">
        <h3>Produtos Mais Vendidos</h3>
        <img src="{{ $data['topSellingProductsChart'] }}" alt="Gráfico de Produtos Mais Vendidos">
    </div>

    <div class="chart">
        <h3>Quantidade de Produtos</h3>
        <img src="{{ $data['stockQuantityChart'] }}" alt="Gráfico de Quantidade de Produtos">
    </div>

    <div class="chart">
        <h3>Produtos com Mais Saídas</h3>
        <img src="{{ $data['bestSellingProductsChart'] }}" alt="Gráfico de Produtos com Mais Saídas">
    </div>
</body>
</html>
