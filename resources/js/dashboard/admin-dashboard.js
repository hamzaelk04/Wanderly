import Chart from 'chart.js/auto';

let dashboard = document.getElementById('dashboard');

dashboard.classList.remove("text-slate-500", "hover:bg-slate-200/50");
dashboard.classList.add("bg-white", "text-sky-700", "shadow-sm", "rounded-lg");

const resCtx = document.getElementById('reservationsChart').getContext('2d');
const gradient = resCtx.createLinearGradient(0, 0, 0, 300);
gradient.addColorStop(0, 'rgba(0, 93, 144, 0.2)');
gradient.addColorStop(1, 'rgba(0, 93, 144, 0)');

new Chart(resCtx, {
    type: 'line',
    data: {
        labels: ['Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
        datasets: [{
            label: 'Reservations',
            data: [1200, 1900, 1700, 2500, 3200, 2800],
            borderColor: '#005d90',
            borderWidth: 3,
            tension: 0.4,
            fill: true,
            backgroundColor: gradient,
            pointBackgroundColor: '#005d90',
            pointRadius: 0,
            pointHoverRadius: 6
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { display: false } },
        scales: {
            x: { grid: { display: false }, ticks: { color: '#94a3b8', font: { family: 'Inter' } } },
            y: { border: { display: false }, grid: { color: '#f1f5f9' }, ticks: { color: '#94a3b8', font: { family: 'Inter' } } }
        }
    }
});

// Revenue Breakdown Doughnut
const revCtx = document.getElementById('revenueBreakdownChart').getContext('2d');
new Chart(revCtx, {
    type: 'doughnut',
    data: {
        labels: ['Tickets', 'Profit'],
        datasets: [{
            data: [75, 25],
            backgroundColor: ['#0077b6', '#f9ad00'],
            borderWidth: 0,
            hoverOffset: 10
        }]
    },
    options: {
        cutout: '75%',
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { display: false } }
    }
});

// Revenue from Events Bar Chart
const eventCtx = document.getElementById('eventRevenueChart').getContext('2d');
new Chart(eventCtx, {
    type: 'bar',
    data: {
        labels: ['Neon Horizon', 'Hidden Cask', 'Gallery Tour', 'Summit Hike', 'Coastal Sail', 'Jazz Night'],
        datasets: [{
            label: 'Revenue ($)',
            data: [65000, 42000, 38000, 29000, 51000, 20000],
            backgroundColor: [
                '#005d90', '#0077b6', '#006176', '#7f5600', '#0096c7', '#f9ad00'
            ],
            borderRadius: 8,
            barThickness: 40
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { display: false } },
        scales: {
            x: { grid: { display: false }, ticks: { color: '#94a3b8' } },
            y: { border: { display: false }, grid: { color: '#f1f5f9' }, ticks: { color: '#94a3b8' } }
        }
    }
}); 