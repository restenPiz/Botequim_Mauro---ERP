// "use strict";

// function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

// function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

// function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

// // Dashboard Demo
// // =============================================================
// var DashboardDemo = /*#__PURE__*/function () {
//   function DashboardDemo() {
//     _classCallCheck(this, DashboardDemo);

//     this.init();
//   }

//   _createClass(DashboardDemo, [{
//     key: "init",
//     value: function init() {
//       // event handlers
//       this.completionTasksChart();
//     }
//   }, {
//     key: "completionTasksChart",
//     value: function completionTasksChart() {
//       var data = {
//         labels: ['22 Mar', '22 Mar', '23 Mar', '24 Mar', '25 Mar', '26 Mar', '27 Mar'],
//         datasets: [{
//           backgroundColor: Looper.getColors('brand').indigo,
//           borderColor: Looper.getColors('brand').indigo,
//           data: [155, 65, 465, 265, 225, 325, 80]
//         }]
//       }; // init chart bar

//       var canvas = $('#completion-tasks')[0].getContext('2d');
//       var chart = new Chart(canvas, {
//         type: 'bar',
//         data: data,
//         options: {
//           responsive: true,
//           legend: {
//             display: false
//           },
//           title: {
//             display: false
//           },
//           scales: {
//             xAxes: [{
//               gridLines: {
//                 display: true,
//                 drawBorder: false,
//                 drawOnChartArea: false
//               },
//               ticks: {
//                 maxRotation: 0,
//                 maxTicksLimit: 3
//               }
//             }],
//             yAxes: [{
//               gridLines: {
//                 display: true,
//                 drawBorder: false
//               },
//               ticks: {
//                 beginAtZero: true,
//                 stepSize: 100
//               }
//             }]
//           }
//         }
//       });
//     }
//   }]);

//   return DashboardDemo;
// }();
// /**
//  * Keep in mind that your scripts may not always be executed after the theme is completely ready,
//  * you might need to observe the `theme:load` event to make sure your scripts are executed after the theme is ready.
//  */


// // $(document).on('theme:init', function () {
// //   new DashboardDemo();
// // });

// "use strict";

// function _classCallCheck(instance, Constructor) {
//   if (!(instance instanceof Constructor)) {
//     throw new TypeError("Cannot call a class as a function");
//   }
// }

// function _defineProperties(target, props) {
//   for (var i = 0; i < props.length; i++) {
//     var descriptor = props[i];
//     descriptor.enumerable = descriptor.enumerable || false;
//     descriptor.configurable = true;
//     if ("value" in descriptor) descriptor.writable = true;
//     Object.defineProperty(target, descriptor.key, descriptor);
//   }
// }

// function _createClass(Constructor, protoProps, staticProps) {
//   if (protoProps) _defineProperties(Constructor.prototype, protoProps);
//   if (staticProps) _defineProperties(Constructor, staticProps);
//   return Constructor;
// }

// var DashboardDemo = /*#__PURE__*/function () {
//   function DashboardDemo() {
//     _classCallCheck(this, DashboardDemo);

//     this.init();
//   }

//   _createClass(DashboardDemo, [{
//     key: "init",
//     value: function init() {
//       this.completionTasksChart();
//     }
//   }, {
//     key: "completionTasksChart",
//     value: function completionTasksChart() {
//       var self = this;

//       $.ajax({
//         url: '/getSalesDates',
//         method: 'GET',
//         success: function (data) {
//           console.log('Sales data:', data); // Log para depuração
          
//           var labels = data.map(function (sale) {
//             return sale.date;
//           });

//           var values = data.map(function (sale) {
//             return sale.total;
//           });

//           var chartData = {
//             labels: labels,
//             datasets: [{
//               backgroundColor: Looper.getColors('brand').indigo,
//               borderColor: Looper.getColors('brand').indigo,
//               data: values
//             }]
//           };

//           var canvas = $('#completion-tasks')[0].getContext('2d');
//           var chart = new Chart(canvas, {
//             type: 'bar',
//             data: chartData,
//             options: {
//               responsive: true,
//               legend: {
//                 display: false
//               },
//               title: {
//                 display: false
//               },
//               scales: {
//                 xAxes: [{
//                   gridLines: {
//                     display: true,
//                     drawBorder: false,
//                     drawOnChartArea: false
//                   },
//                   ticks: {
//                     maxRotation: 0,
//                     maxTicksLimit: 3
//                   }
//                 }],
//                 yAxes: [{
//                   gridLines: {
//                     display: true,
//                     drawBorder: false
//                   },
//                   ticks: {
//                     beginAtZero: true,
//                     stepSize: 100
//                   }
//                 }]
//               }
//             }
//           });
//         },
//         error: function (xhr, status, error) {
//           console.error('Error fetching sales data:', error);
//         }
//       });
//     }
//   }]);

//   return DashboardDemo;
// }();

// $(document).on('theme:init', function () {
//   new DashboardDemo();
// });
$(document).ready(function() {
  // Inicializa o gráfico Chart.js
  const ctx = document.getElementById('topSellingProductsChart').getContext('2d');
  let topSellingProductsChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: [],
          datasets: [{
              label: 'Quantidade Vendida',
              data: [],
              backgroundColor: 'rgba(54, 162, 235, 0.2)',
              borderColor: 'rgba(54, 162, 235, 1)',
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              y: {
                  beginAtZero: true
              }
          }
      }
  });

  // Função para buscar e carregar os dados
  function loadData(period) {
      fetch(`/getTopSellingProducts?period=${period}`)
          .then(response => response.json())
          .then(data => {
              if (Array.isArray(data)) {
                  const tableBody = $('#top-selling-products-table');
                  tableBody.empty(); // Limpar quaisquer dados existentes

                  // Atualiza os dados da tabela
                  data.forEach(product => {
                      const row = `<tr>
                                      <td class="align-middle text-truncate">${product.name}</td>
                                      <td class="align-middle text-center">${product.total_quantity}</td>
                                      <td class="align-middle text-center">
                                      </td>
                                  </tr>`;
                      tableBody.append(row);
                  });

                  // Atualiza os dados do gráfico
                  const labels = data.map(product => product.name);
                  const quantities = data.map(product => product.total_quantity);

                  topSellingProductsChart.data.labels = labels;
                  topSellingProductsChart.data.datasets[0].data = quantities;
                  topSellingProductsChart.update();
              } else {
                  console.error('Data received is not an array');
              }
          })
          .catch(error => {
              console.error('Error fetching top selling products:', error);
          });
  }

  // Carregar dados atuais por padrão
  loadData('current');

  // Adicionar event listeners aos botões do dropdown
  $('.dropdown-menu .custom-control-input').on('click', function() {
      const period = $(this).data('period');
      loadData(period);
  });
});
