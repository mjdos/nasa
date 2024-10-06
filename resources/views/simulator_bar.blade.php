<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráfico de Barras Interativo</title>
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
    <h2>Força Muscular em Função das Amostras</h2>
    <canvas id="myBarChart" width="400" height="150"></canvas>
    <input type="range" id="frequencySlider" min="1" max="160" value="1" step="1">
    <label for="frequencySlider">Frequência: <span id="frequencyValue">1 Hz</span></label>

    <script>
        const ctx = document.getElementById('myBarChart').getContext('2d');

        // Dados de força para cada frequência
        const forceData = {
            1: { "1 Flox HLS": 26.7, "2 Flox HLS": 34.9, "3 Flox HLS": 24.7, "4 Flox HLS": 22.0, "1 KD HLS": 29.3, "2 KD HLS": 29.3, "3 KD HLS": 28.5, "4 KD HLS": 37.3 },
            20: { "1 Flox HLS": 78.4, "2 Flox HLS": 120.4, "3 Flox HLS": 83.9, "4 Flox HLS": 86.5, "1 KD HLS": 106.1, "2 KD HLS": 94.8, "3 KD HLS": 100.8, "4 KD HLS": 104.1 },
            40: { "1 Flox HLS": 125.7, "2 Flox HLS": 167.0, "3 Flox HLS": 143.2, "4 Flox HLS": 98.9, "1 KD HLS": 154.2, "2 KD HLS": 162.5, "3 KD HLS": 162.5, "4 KD HLS": 165.5 },
            80: { "1 Flox HLS": 163.3, "2 Flox HLS": 198.3, "3 Flox HLS": 180.0, "4 Flox HLS": 136.4, "1 KD HLS": 192.3, "2 KD HLS": 208.6, "3 KD HLS": 208.6, "4 KD HLS": 208.7 },
            160: { "1 Flox HLS": 177.6, "2 Flox HLS": 207.5, "3 Flox HLS": 193.7, "4 Flox HLS": 149.5, "1 KD HLS": 202.2, "2 KD HLS": 221.7, "3 KD HLS": 221.7, "4 KD HLS": 222.5 }
        };

        // Cores pastéis para as barras
        const pastelColors = [
            'rgba(255, 182, 193, 0.6)', // Light Pink
            'rgba(173, 216, 230, 0.6)', // Light Blue
            'rgba(144, 238, 144, 0.6)', // Light Green
            'rgba(255, 255, 224, 0.6)', // Light Yellow
            'rgba(255, 160, 122, 0.6)', // Light Salmon
            'rgba(221, 160, 221, 0.6)', // Plum
            'rgba(255, 218, 185, 0.6)', // Peach
            'rgba(240, 230, 140, 0.6)'  // Khaki
        ];

        // Inicializa o gráfico de barras
        const barChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: Object.keys(forceData[1]), // Nomes das amostras
                datasets: [{
                    label: 'Força (N)',
                    data: interpolateAllForces(1), // Dados iniciais com a frequência 1
                    backgroundColor: pastelColors,
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Força (N)'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Amostras'
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
            const newData = interpolateAllForces(frequency);
            barChart.data.datasets[0].data = newData; // Atualiza os dados do gráfico com a nova frequência
            barChart.update(); // Atualiza o gráfico
        });
    </script>
</body>
</html>