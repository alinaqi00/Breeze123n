@extends('admin.layouts.app')

@section('content')
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="container">
            <h2>Dashboard</h2>

            <div class="row my-4">
                <!-- Combined Chart and Line Chart on the same line -->
                <div class="col-md-6 mb-4">
                    <div class="card shadow">
                        <div class="card-header">
                            <strong class="card-title mb-0">Bar Chart</strong>
                        </div>
                        <div class="card-body">
                            <canvas id="combinedChart" width="400" height="200"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="card shadow">
                        <div class="card-header">
                            <strong class="card-title mb-0">Line Chart</strong>
                        </div>
                        <div class="card-body">
                            <canvas id="lineChart" width="400" height="200"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Doughnut Chart below the line charts -->
                <div class="col-md-12 mb-4">
                    <div class="card shadow">
                        <div class="card-header">
                            <strong class="card-title mb-0">Doughnut Chart</strong>
                        </div>
                        <div class="card-body">
                            <canvas id="doughnutChart" width="400" height="200"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Include Chart.js library -->
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <!-- Chart Script -->
            <script>
                // Fetch analytics data from your controller (replace this with actual data)
                let analyticsData = @json($analyticsData);

                // Sample data for Combined Chart
                let combinedChartData = {
                    labels: ['Posts', 'Products', 'Team Members'],
                    datasets: [{
                        data: [analyticsData.postData, analyticsData.productData, analyticsData.teamData],
                        backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
                        hoverBackgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
                        borderWidth: 1,
                    }]
                };

                // Sample data for Line Chart
                let lineChartData = {
                    labels: ['Posts', 'Products', 'Team Members'],
                    datasets: [{
                        label: 'Line Chart Data',
                        data: [analyticsData.postData, analyticsData.productData, analyticsData.teamData],
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 2,
                        fill: false,
                    }]
                };

                // Sample data for Doughnut Chart
                let doughnutChartData = {
                    labels: ['Posts', 'Products', 'Team Members'],
                    datasets: [{
                        data: [analyticsData.postData, analyticsData.productData, analyticsData.teamData],
                        backgroundColor: ['red', 'blue', 'green'],
                    }]
                };

                // Get the canvas elements
                let combinedChartCanvas = document.getElementById('combinedChart').getContext('2d');
                let lineChartCanvas = document.getElementById('lineChart').getContext('2d');
                let doughnutChartCanvas = document.getElementById('doughnutChart').getContext('2d');

                // Create the combined bar chart
                let combinedChart = new Chart(combinedChartCanvas, {
                    type: 'bar',
                    data: combinedChartData,
                    options: {
                        // Add more options as needed
                        scales: {
                            x: {
                                grid: {
                                    display: false,
                                },
                            },
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    stepSize: 10,
                                    callback: function (value) {
                                        return value + '%';
                                    },
                                },
                            },
                        },
                        plugins: {
                            legend: {
                                display: false,
                            },
                            title: {
                                display: true,
                                text: 'Combined Chart',
                                font: {
                                    size: 16,
                                },
                            },
                        },
                    },
                });

                // Create the Line Chart (initially hidden)
                let lineChart = new Chart(lineChartCanvas, {
                    type: 'line',
                    data: lineChartData,
                    options: {
                        // Add more options as needed
                    },
                    hidden: true,
                });

                // Create the Doughnut Chart (initially hidden)
                let doughnutChart = new Chart(doughnutChartCanvas, {
                    type: 'doughnut',
                    data: doughnutChartData,
                    options: {
                        // Add more options as needed
                    },
                });

                // Function to toggle visibility of charts
                function toggleChart(chartName) {
                    combinedChart.hidden = chartName !== 'combinedChart';
                    lineChart.hidden = chartName !== 'lineChart';
                    doughnutChart.hidden = chartName !== 'doughnutChart';
                }
            </script>
        </div>
    </div>
</main>
@endsection
