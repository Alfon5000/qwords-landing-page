/* globals Chart:false, feather:false */

(() => {
    "use strict";

    feather.replace({ "aria-hidden": "true" });

    // Graphs
    const ctx = document.getElementById("myChart");
    // eslint-disable-next-line no-unused-vars
    const myChart = new Chart(ctx, {
        type: "line",
        data: {
            labels: [
                2014, 2015, 2016, 2017, 2018, 2019, 2020, 2021, 2022, 2023,
            ],
            datasets: [
                {
                    // data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
                    data: [51, 53, 52, 52, 54, 53, 51, 53, 52, 52],
                    lineTension: 0,
                    backgroundColor: "transparent",
                    borderColor: "#007bff",
                    borderWidth: 4,
                    pointBackgroundColor: "#007bff",
                },
            ],
        },
        options: {
            scales: {
                yAxes: [
                    {
                        ticks: {
                            beginAtZero: false,
                        },
                    },
                ],
            },
            legend: {
                display: false,
            },
        },
    });
})();
