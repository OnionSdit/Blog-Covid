<!-- Core JavaScript
================================================== -->
<script src="/web/js/jquery.min.js"></script>
<script src="/web/js/tether.min.js"></script>
<script src="/web/js/bootstrap.min.js"></script>
<script src="/web/js/custom.js"></script>
{{-- import thu vien axios --}}
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
{{-- thu vien chart js --}}
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
                // GET DATA
                const cases = data.total.internal.cases.toLocaleString();
                const todayCase = " + " + data.today.internal.cases.toLocaleString();

                const treating = data.total.internal.treating.toLocaleString();
                const todayTreating = " " + data.today.internal.treating.toLocaleString();

                const recovered = data.total.internal.recovered.toLocaleString();
                const todayRecovered = " + " + data.today.internal.recovered.toLocaleString();

                const death = data.total.internal.death.toLocaleString();
                const todayDeath = " + " + data.today.internal.death.toLocaleString();

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

        const getWorld = async () => {
            const response = await axios.get(`${BASE_URL}`);
            const data = response.data;

        }
        //Chart
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

        //TABLE
        const renderTable = async () => {
            const response = await axios.get(`${BASE_URL}`);
            const data = response.data;
            const locations = data.locations;

            let html = "";
            locations.map((item) => {
                html += `<div class="row"><span class="city">${item.name}</span><span class="total">${item.cases.toLocaleString()}</span><span
                        class="daynow red">+${item.casesToday.toLocaleString()}</span><span class="die">${item.death.toLocaleString()}</span></div>`
            })
            const tableCovid = document.getElementById("render-table");
            tableCovid.innerHTML = html;
        }

        //run function
        renderTable();
        renderChart();
        getTodoItems();
        getWorld();
    });
</script>
