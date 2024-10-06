<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráfico de Radar Interativo</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 20px;
        }
        #myRadarChart {
            width: 600px !important; /* Definindo largura */
            height: 600px !important; /* Definindo altura */
        }
    </style>
</head>
<body>
    <h2>Força Muscular em Função das Amostras</h2>
    <canvas id="myRadarChart" width="400" height="400"></canvas>
    <input type="range" id="frequencySlider" min="1" max="160" value="1" step="1">
    <label for="frequencySlider">Frequência: <span id="frequencyValue">1 Hz</span></label>

    <script>
        const ctx = document.getElementById('myRadarChart').getContext('2d');

        // Dados de força para cada frequência
        const forceData = {
            1: { "1 Flox HLS": 26.7, "2 Flox HLS": 34.9, "3 Flox HLS": 24.7, "4 Flox HLS": 22.0, "1 KD HLS": 29.3, "2 KD HLS": 29.3, "3 KD HLS": 28.5, "4 KD HLS": 37.3 },
            20: { "1 Flox HLS": 78.4, "2 Flox HLS": 120.4, "3 Flox HLS": 83.9, "4 Flox HLS": 86.5, "1 KD HLS": 106.1, "2 KD HLS": 94.8, "3 KD HLS": 100.8, "4 KD HLS": 104.1 },
            40: { "1 Flox HLS": 125.7, "2 Flox HLS": 167.0, "3 Flox HLS": 143.2, "4 Flox HLS": 98.9, "1 KD HLS": 154.2, "2 KD HLS": 162.5, "3 KD HLS": 162.5, "4 KD HLS": 165.5 },
            80: { "1 Flox HLS": 163.3, "2 Flox HLS": 198.3, "3 Flox HLS": 180.0, "4 Flox HLS": 136.4, "1 KD HLS": 192.3, "2 KD HLS": 208.6, "3 KD HLS": 208.6, "4 KD HLS": 208.7 },
            160: { "1 Flox HLS": 177.6, "2 Flox HLS": 207.5, "3 Flox HLS": 193.7, "4 Flox HLS": 149.5, "1 KD HLS": 202.2, "2 KD HLS": 221.7, "3 KD HLS": 221.7, "4 KD HLS": 222.5 }
        };

        // Inicializa o gráfico de radar
        const radarChart = new Chart(ctx, {
            type: 'radar',
            data: {
                labels: Object.keys(forceData[1]), // Nomes das amostras
                datasets: [{
                    label: 'Força Muscular',
                    data: interpolateAllForces(1), // Dados iniciais com a frequência 1
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    r: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Força (N)'
                        }
                    }
                }
            }
        });

        // Função para interpolar valores de força para todas as amostras
        function interpolateAllForces(frequency) {
            const interpolatedValues = [];
            for (const sample of Object.keys(forceData[1])) {
                const lowerFreq = Math.floor(frequency / 20) * 20 || 1; // Frequência inferior
                const upperFreq = lowerFreq + 20; // Frequência superior

                // Verifica se as frequências existem
                if (forceData[lowerFreq] && forceData[upperFreq]) {
                    const lowerValue = forceData[lowerFreq][sample];
                    const upperValue = forceData[upperFreq][sample];
                    
                    // Interpolação linear
                    const interpolatedValue = lowerValue + (upperValue - lowerValue) * ((frequency - lowerFreq) / 20);
                    interpolatedValues.push(interpolatedValue);
                } else {
                    interpolatedValues.push(forceData[frequency][sample] || 0); // Se não existir, coloca 0
                }
            }
            return interpolatedValues; // Retorna valores para o gráfico
        }

        // Atualiza o gráfico quando o slider é movido
        document.getElementById('frequencySlider').addEventListener('input', function() {
            const frequency = this.value;
            document.getElementById('frequencyValue').textContent = frequency + ' Hz';
            radarChart.data.datasets[0].data = interpolateAllForces(frequency); // Atualiza os dados do gráfico com a nova frequência
            radarChart.update(); // Atualiza o gráfico
        });
    </script>
</body>
</html>