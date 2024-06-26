<!DOCTYPE html>
    <html>
    <head>
        <title>Relatório</title>
        <style>
            .chart {
                text-align: center;
            }
        </style>
        <link rel="stylesheet" href="assets/stylesheets/theme.min.css" data-skin="default">
        <link rel="stylesheet" href="assets/stylesheets/custom.css">
    </head>
    <body>
        <h1>Relatório de Vendas</h1>

        <h2>Gráfico sobre os produtos mais vendidos</h2>
        <img src="{{ $data['topSellingProductsChart'] }}" alt="Gráfico de Produtos Mais Vendidos">

        <h2>Gráfico de vendas de cada mês</h2>
        <img src="{{ $data['monthlySalesChart'] }}" alt="Gráfico de Vendas Mensais">
    </body>
</html>
    