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
        <h1>Relatório de Vendas</h1>

        <h2>Gráfico sobre os produtos mais vendidos</h2>
        <img src="{{ $data['topSellingProductsChart'] }}" alt="Gráfico de Produtos Mais Vendidos">

        <h2>Gráfico sobre as quantidades dos produtos</h2>
        <img src="{{ $data['stockQuantityChart'] }}" alt="Gráfico de Quantidade de Produtos">

        <h2>Gráfico sobre produtos com mais saídas</h2>
        <img src="{{ $data['bestSellingProductsChart'] }}" alt="Gráfico de Produtos com Mais Saídas">

        <h2>Gráfico de vendas de cada mês</h2>
        <img src="{{ $data['monthlySalesChart'] }}" alt="Gráfico de Vendas Mensais">
    </body>
</html>
    