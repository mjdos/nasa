<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MicroForce Analytics</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 20px;
        }
        #myPolarChart {
            width: 600px !important; /* Definindo largura */
            height: 600px !important; /* Definindo altura */
        }
    </style>
</head>
<body>
    <div align="center">
        <h2>MicroForce Analytics<br>Soleus specific force production in hindlimb suspended mice</h2>
    </div>
    <canvas id="myPolarChart" width="150" height="150"></canvas>
    <input type="range" id="frequencySlider" min="1" max="160" value="1" step="1">
    <label for="frequencySlider">Frequency: <span id="frequencyValue">1 Hz</span></label>

    <script>
        const ctx = document.getElementById('myPolarChart').getContext('2d');

        // Dados de força para cada frequência
        const forceData = {
            1: [26.7, 34.9, 24.7, 22.0, 29.3, 29.3, 28.5, 37.3],
            20: [78.4, 120.4, 83.9, 86.5, 106.1, 94.8, 100.8, 104.1],
            40: [125.7, 167.0, 143.2, 98.9, 154.2, 162.5, 162.5, 165.5],
            80: [163.3, 198.3, 180.0, 136.4, 192.3, 208.6, 208.6, 208.7],
            160: [177.6, 207.5, 193.7, 149.5, 202.2, 221.7, 221.7, 222.5]
        };

        // Nomes das amostras
        const sampleLabels = ["1 Flox HLS", "2 Flox HLS", "3 Flox HLS", "4 Flox HLS", "1 KD HLS", "2 KD HLS", "3 KD HLS", "4 KD HLS"];

        // Inicializa o gráfico de área polar
        const polarChart = new Chart(ctx, {
            type: 'polarArea',
            data: {
                labels: sampleLabels, // Nomes das amostras
                datasets: [{
                    label: 'Force (N)',
                    data: forceData[1], // Dados iniciais com a frequência 1
                    backgroundColor: [
                        'rgba(255, 182, 193, 0.6)', // Light Pink
                        'rgba(173, 216, 230, 0.6)', // Light Blue
                        'rgba(144, 238, 144, 0.6)', // Light Green
                        'rgba(255, 255, 224, 0.6)', // Light Yellow
                        'rgba(255, 160, 122, 0.6)', // Light Salmon
                        'rgba(221, 160, 221, 0.6)', // Plum
                        'rgba(255, 218, 185, 0.6)', // Peach
                        'rgba(240, 230, 140, 0.6)'  // Khaki
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    r: {
                        pointLabels: {
                            display: true,
                            centerPointLabels: true,
                            font: {
                                size: 18
                            }
                        }
                    }
                }
            }
        });

        // Atualiza o gráfico quando o slider é movido
        document.getElementById('frequencySlider').addEventListener('input', function() {
            const frequency = this.value;
            document.getElementById('frequencyValue').textContent = frequency + ' Hz';
            const newData = forceData[frequency] || forceData[1]; // Usar dados correspondentes à frequência
            polarChart.data.datasets[0].data = newData; // Atualiza os dados do gráfico com a nova frequência
            polarChart.update(); // Atualiza o gráfico
        });
    </script>
</body>
</html>
