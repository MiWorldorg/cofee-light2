const barConfig = {
    type: 'bar',
    data: {
      labels: [], // Will be populated dynamically
      datasets: [
        {
          label: 'Sales Amount',
          data: [], // Will be populated dynamically
          backgroundColor: 'rgba(255, 99, 132, 0.2)',
          borderColor: 'rgba(255, 99, 132, 1)',
          borderWidth: 1,
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
