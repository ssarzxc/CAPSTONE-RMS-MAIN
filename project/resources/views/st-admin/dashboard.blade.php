@extends ('layouts.guest-navbar')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 justify-start">
    @section('content')
        <!-- LABEL -->
        <div class="container mx-auto mt-4 px-4">
            <div class="flex items-center">
                <div>
                    <h2 class="text-2xl font-bold">Dashboard Overview</h2>
                    <p class="text-gray-500">Welcome to Canopy Farm!</p>
                </div>
            </div>
        </div>
        <!-- END LABEL -->

        <!-- 3 WIDGET BOXES -->
        <div class="container mx-auto mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-4">
            <!-- Reservations Widget -->
            <div class="bg-green-800 text-white rounded-lg p-6 shadow-lg h-32 flex flex-col items-center justify-center">
                <h3 class="text-4xl font-bold">15</h3>
                <p class="text-lg">Total Reservations</p>
                <i class="fas fa-chart-bar text-3xl mt-2"></i>
            </div>

            <!-- Events Widget -->
            <div class="bg-green-600 text-white rounded-lg p-6 shadow-lg h-32 flex flex-col items-center justify-center">
                <h3 class="text-4xl font-bold">5</h3>
                <p class="text-lg">Total Events</p>
                <i class="fas fa-calendar text-3xl mt-2"></i>
            </div>

            <!-- Rooms Available Widget -->
            <div class="bg-green-500 text-white rounded-lg p-6 shadow-lg h-32 flex flex-col items-center justify-center">
                <h3 class="text-4xl font-bold">3</h3>
                <p class="text-lg">Rooms Available</p>
                <i class="fa-solid fa-door-open text-3xl mt-2"></i>
            </div>
        </div>

        <!-- Area Chart Section -->
        <div class="container mx-auto mt-6 px-4 mb-6">
            <div class="bg-white rounded-lg shadow-md">
                <div class="bg-green-800 text-white p-4 rounded-t-lg">
                    <h3 class="text-lg font-semibold">Reservation Growth</h3>
                </div>
                <div class="p-4">
                    <canvas id="areaChart" class="w-full h-60"></canvas>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const ctx = document.getElementById('areaChart').getContext('2d');

                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                        datasets: [{
                            label: 'Reservations',
                            data: [5, 10, 15, 25, 20, 30],
                            backgroundColor: 'rgba(34, 197, 94, 0.5)',
                            borderColor: 'rgba(34, 197, 94, 1)',
                            borderWidth: 2,
                            fill: true,
                            tension: 0.4
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false, // Allow custom sizing
                        aspectRatio: 2, // Makes it more compact
                        plugins: {
                            legend: {
                                display: true
                            }
                        },
                        scales: {
                            x: {
                                grid: {
                                    display: false
                                }
                            },
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            });
        </script>
    @endsection
</body>

</html>
