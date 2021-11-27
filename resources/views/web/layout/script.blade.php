<!-- Core JavaScript
================================================== -->
<script src="/web/js/jquery.min.js"></script>
<script src="/web/js/tether.min.js"></script>
<script src="/web/js/bootstrap.min.js"></script>
<script src="/web/js/custom.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>

<script>
    $(document).ready(function() {

        const BASE_URL = 'https://static.pipezero.com/covid/data.json';

        const getTodoItems = async () => {
            try {
                const response = await axios.get(`${BASE_URL}`);
                const data = response.data;

                //cases
                const casesElement = document.getElementById("cases");
                const todayCaseElement = document.getElementById("today-cases");
                //treating
                const treatingElement = document.getElementById("treating");
                const todayTreatingElement = document.getElementById("today-treating");
                //recovered
                const recoveredElement = document.getElementById("recovered");
                const todayRecoveredElement = document.getElementById("today-recovered");
                //death
                const deathElement = document.getElementById("death");
                const todayDeathElement = document.getElementById("today-death");
                //data table
                //DATA
                const cases = data.total.internal.cases;
                const todayCase = " + " + data.today.internal.cases;

                const treating = data.total.internal.treating;
                const todayTreating = " " + data.today.internal.treating;

                const recovered = data.total.internal.recovered;
                const todayRecovered = " + " + data.today.internal.recovered;

                const death = data.total.internal.death;
                const todayDeath = " + " + data.today.internal.death;

                //SET DATA
                casesElement.innerText = cases;
                todayCaseElement.innerText = todayCase;

                treatingElement.innerText = treating;
                todayTreatingElement.innerText = todayTreating;

                recoveredElement.innerText = recovered;
                todayRecoveredElement.innerText = todayRecovered;

                deathElement.innerText = death;
                todayDeathElement.innerText = todayDeath;

            } catch (errors) {
                console.error(errors);
            }
        };

        const renderChart = async () => {
            const response = await axios.get(`${BASE_URL}`);
            const data = response.data;

            const overview = data.overview;

            let state = {
                type: 'bar',
                data: {
                    labels: [],
                    datasets: [{
                        label: '# Số ca mắc',
                        data: [],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
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
            }
            overview.map(item => {
                state.data.labels.push(item.date);
                state.data.datasets[0].data.push(item.cases);
            })

            const ctx = document.getElementById('myChart').getContext('2d');
            const myChart = new Chart(ctx, state);
        }

        const renderTable = async () => {
            const response = await axios.get(`${BASE_URL}`);
            const data = response.data;

            const locations = data.locations;

            let html = "";
            locations.map((item) => {
                html += `<div class="row"><span class="city">${item.name}</span><span class="total">${item.cases}</span><span
                        class="daynow red">+${item.casesToday}</span><span class="die">${item.death}</span></div>`
            })
            const tableCovid = document.getElementById("render-table");
            tableCovid.innerHTML = html;
        }

        // setInterval(function(){ getTodoItems(); }, 3000);
        renderTable();
        renderChart();
        getTodoItems();

    });
</script>
