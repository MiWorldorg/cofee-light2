
const lineConfig = {
    type: 'line',
    data: {
      labels: [], // Will be populated dynamically
      datasets: [
        {
          label: 'مجموع فروش',
          data: [], // Will be populated dynamically
          backgroundColor: 'rgba(75, 192, 192, 0.2)',
          borderColor: 'rgba(75, 192, 192, 1)',
          borderWidth: 1,
          fill: false,
        },
      ],
    },
    options: {
      responsive: true,
      scales: {
        x: {
          display: true,
          title: {
            display: true,
            text: 'Sale Date',
          },
        },
        y: {
          display: true,
          title: {
            display: true,
            text: 'Amount',
          },
          beginAtZero: true,
        },
      },
    },
  };

//   // Define the fetchSalesData function to update the chart data
//   const fetchSalesData = () => {
//     try {
//       // Use the amounts and saleDates variables passed from the Blade view
//       lineConfig.data.labels = saleDates;
//       lineConfig.data.datasets[0].data = amounts;

//       // Get the canvas element for the chart
//       const lineCtx = document.getElementById('line');

//       // Initialize or update the chart with the new data
//       if (window.myLine) {
//         window.myLine.data.labels = lineConfig.data.labels;
//         window.myLine.data.datasets[0].data = lineConfig.data.datasets[0].data;
//         window.myLine.update();
//       } else {
//         window.myLine = new Chart(lineCtx, lineConfig);
//       }
//     } catch (error) {
//       console.error('Error fetching sales data:', error);
//     }
//   };

//   // Execute the fetchSalesData function when the script is loaded
//   fetchSalesData();
