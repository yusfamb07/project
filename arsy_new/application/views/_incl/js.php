<script type="text/javascript">
  
     $(document).ready(function () {
       $('input:checkbox').removeAttr('checked');
       $.noConflict();  
         $("#example").dataTable({
             "aoColumnDefs": [{ 'bSortable': false, 'aTargets': [3] }],
             "bSort": true,
              "language": {
                      "url": "http://cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
                      "sEmptyTable": "Tidak ada data di database"
                  }   

         });
         var mapboxTiles = L.tileLayer('https://api.maptiler.com/maps/winter/{z}/{x}/{y}.jpg?key=s97Z2YdArOOrTeJpdbZW', {
    });

    map = L.map('map')
        .addLayer(mapboxTiles)
        .setView([-6.9214746005797165, 107.60151065328783], 12);

    setTimeout(() => {
        load_polda();
    }, 1000);

        // Laka Chart
        var options = {
          series: [{
            name: "Kecelakaan",
            data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
        }],
          chart: {
          height: 300,
          type: 'line',
          zoom: {
            enabled: false
          }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'straight'
        },
        
        grid: {
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.5
          },
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
        }
        };

        var chart = new ApexCharts(document.querySelector("#lakachart"), options);
        chart.render();

        // CFR CHART
        var options = {
          series: [{
            name: "CFR",
            data: [45, 52, 38, 24, 33, 26, 21, 20, 6, 8, 15, 10]
          },
          {
            name: "Prediksi",
            data: [35, 41, 62, 42, 13, 18, 29, 37, 36, 51, 32, 35]
          },
          {
            name: 'Target',
            data: [87, 57, 74, 99, 75, 38, 62, 47, 82, 56, 45, 47]
          }
        ],
          chart: {
          height: 308,
          type: 'line',
          zoom: {
            enabled: false
          },
        },
        fill: {
        colors: ['#FFF', '#E91E63', '#9C27B0']
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          width: [5, 7, 5],
          curve: 'straight',
          dashArray: [0, 8, 5]
        },
        legend: {
          tooltipHoverFormatter: function(val, opts) {
            return val + ' - ' + opts.w.globals.series[opts.seriesIndex][opts.dataPointIndex] + ''
          }
        },
        markers: {
          size: 0,
          hover: {
            sizeOffset: 6
          }
        },
        xaxis: {
          categories: ['01 Jan', '02 Jan', '03 Jan', '04 Jan', '05 Jan', '06 Jan', '07 Jan', '08 Jan', '09 Jan',
            '10 Jan', '11 Jan', '12 Jan'
          ],
        },
        tooltip: {
          y: [
            {
              title: {
                formatter: function (val) {
                  return val + " (mins)"
                }
              }
            },
            {
              title: {
                formatter: function (val) {
                  return val + " per session"
                }
              }
            },
            {
              title: {
                formatter: function (val) {
                  return val;
                }
              }
            }
          ]
        },
        grid: {
          borderColor: '#f1f1f1',
        }
        };

        var chart = new ApexCharts(document.querySelector("#cfrchart"), options);
        chart.render();
        
        // Chart Kejadian
        var options = {
        series: [
            {
            name: "Likes",
            data: [4, 3, 10, 9, 29, 19, 22, 9, 12, 7, 19, 5, 13, 9, 17, 2, 7, 5]
            },
            
        ],
        chart: {
            height: 265,
            type: "line",
            events: {
            dataPointSelection: function (e, chart, opt) {
                const tooltipEl = opt.w.globals.tooltip.getElTooltip();

                if (opt.selectedDataPoints[0].length) {
                tooltipEl.classList.add("apexcharts-tooltip-active");
                } else {
                tooltipEl.classList.remove("apexcharts-tooltip-active");
                }
            }
            }
        },
        legend: {
            show: true,
        },
        stroke: {
            width: 4,
            curve: "straight"
        },
        xaxis: {
            type: "datetime",
            categories: [
            "1/11/2000",
            "2/11/2000",
            "3/11/2000",
            "4/11/2000",
            "5/11/2000",
            "6/11/2000",
            "7/11/2000",
            "8/11/2000",
            "9/11/2000",
            "10/11/2000",
            "11/11/2000",
            "12/11/2000",
            "1/11/2001",
            "2/11/2001",
            "3/11/2001",
            "4/11/2001",
            "5/11/2001",
            "6/11/2001"
            ]
        },

        markers: {
            size: 6
        },
        
        tooltip: {
            shared: false,
            intersect: true,
            custom: function ({ series, seriesIndex, dataPointIndex, w }) {
            return (
                '<div class="custom-tooltip">' +
                "<span>" +
                w.config.xaxis.categories[dataPointIndex] +
                ": " +
                series[seriesIndex][dataPointIndex] +
                "  <br /> " +
                '<a href="https://google.com" target="_blank">https://google.com</a>' +
                "</span>" +
                "</div>"
            );
            }
        }
        };

        var chart = new ApexCharts(document.querySelector("#chartkejadian"), options);
        chart.render();
     });

     

     
    </script>