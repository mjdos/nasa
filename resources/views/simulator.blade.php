<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráfico Interativo com Slider</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 20px;
        }
    </style>
</head>
<body>
    <h2>Muscle Strength as a Function of Samples</h2>
    <canvas id="myChart" width="400" height="200"></canvas>
    <input type="range" id="frequencySlider" min="1" max="160" value="1" step="1">
    <label for="frequencySlider">Frequência: <span id="frequencyValue">1 Hz</span></label>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');

        // Dados de força para cada frequência
        var forceData = {
            1: { "1 Flox HLS": 26.70566543, "2 Flox HLS": 34.91898714, "3 Flox HLS": 24.73366781, "4 Flox HLS": 21.99369813, "1 KD HLS": 29.30977113, "2 KD HLS": 29.33231417, "3 KD HLS": 28.52771494, "4 KD HLS": 37.29269973 },
            20: { "1 Flox HLS": 78.39693702, "2 Flox HLS": 120.3958201, "3 Flox HLS": 83.86911491, "4 Flox HLS": 86.50075593, "1 KD HLS": 106.1200766, "2 KD HLS": 94.83366532, "3 KD HLS": 100.7793215, "4 KD HLS": 104.0595236 },
            40: { "1 Flox HLS": 125.6637849, "2 Flox HLS": 166.991211, "3 Flox HLS": 143.1648458, "4 Flox HLS": 98.90316731, "1 KD HLS": 154.2218582, "2 KD HLS": 162.4660689, "3 KD HLS": 162.4660689, "4 KD HLS": 165.4766096 },
            80: { "1 Flox HLS": 163.3169219, "2 Flox HLS": 198.2620163, "3 Flox HLS": 179.98043, "4 Flox HLS": 136.4106782, "1 KD HLS": 192.2703644, "2 KD HLS": 208.6004217, "3 KD HLS": 208.6004217, "4 KD HLS": 208.6767806 },
            160: { "1 Flox HLS": 177.6476843, "2 Flox HLS": 207.4591881, "3 Flox HLS": 193.7355135, "4 Flox HLS": 149.5145803, "1 KD HLS": 202.1916925, "2 KD HLS": 221.7241216, "3 KD HLS": 221.7241216, "4 KD HLS": 222.5073075 }
        };

        // Inicializa o gráfico
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: Object.keys(forceData[1]), // Nomes das amostras
                datasets: [{
                    label: 'Muscle Strength',
                    data: interpolateAllForces(1), // Dados iniciais com a frequência 1
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                    fill: false,
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Force (N)'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Samples'
                        }
                    }
                }
            }
        });

        // Função para interpolar valores de força para todas as amostras
        function interpolateAllForces(frequency) {
            var interpolatedValues = {};
            for (const [freq, values] of Object.entries(forceData)) {
                for (const [sample, value] of Object.entries(values)) {
                    if (!interpolatedValues[sample]) {
                        interpolatedValues[sample] = 0; // Inicializa se não existir
                    }
                    if (frequency <= 20) {
                        // Interpolação linear
                        interpolatedValues[sample] = value + ((forceData[20][sample] - value) / (20 - 1)) * (frequency - 1);
                    } else if (frequency <= 40) {
                        interpolatedValues[sample] = value + ((forceData[40][sample] - value) / (40 - 20)) * (frequency - 20);
                    } else if (frequency <= 80) {
                        interpolatedValues[sample] = value + ((forceData[80][sample] - value) / (80 - 40)) * (frequency - 40);
                    } else if (frequency <= 160) {
                        interpolatedValues[sample] = value + ((forceData[160][sample] - value) / (160 - 80)) * (frequency - 80);
                    }
                }
            }
            return Object.values(interpolatedValues); // Retorna valores para o gráfico
        }

        // Atualiza o gráfico quando o slider é movido
        document.getElementById('frequencySlider').addEventListener('input', function() {
            var frequency = this.value;
            document.getElementById('frequencyValue').textContent = frequency + ' Hz';
            myChart.data.datasets[0].data = interpolateAllForces(frequency); // Atualiza os dados do gráfico com a nova frequência
            myChart.update(); // Atualiza o gráfico
        });
    </script>
</body>
</html>
