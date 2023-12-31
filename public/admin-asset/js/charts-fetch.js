const fetchSalesData = () => {
    try {

        //Jdate
        // const shamsiDatesWithTime = saleDates.map(gregorianDate => {
        //     const [datePart, timePart] = gregorianDate.split(' '); // Split date and time
        //     const [year, month, day] = datePart.split('-').map(Number);
        //     const [hour, minute, second] = timePart.split(':').map(Number);
        //     const shamsiDate = new JDate([year, month, day]);
        //     return `${shamsiDate.format('YYYY-MM-DD')} ${hour}:${minute}:${second}`; // Format as '1399-10-05 12:30:45'
        //   });


      // Use the amounts and saleDates variables passed from the Blade view
      lineConfig.data.labels = saleDates;
      lineConfig.data.datasets[0].data = amounts;
      barConfig.data.labels = saleDates; // Use the same labels for the bar chart
      barConfig.data.datasets[0].data = amounts; // Use the same data for the bar chart

      // Get the canvas elements for the charts
      const lineCtx = document.getElementById('line');
      const barCtx = document.getElementById('bar');

      // Initialize or update the line chart with the new data
      if (window.myLine) {
        window.myLine.data.labels = lineConfig.data.labels;
        window.myLine.data.datasets[0].data = lineConfig.data.datasets[0].data;
        window.myLine.update();
      } else {
        window.myLine = new Chart(lineCtx, lineConfig);
      }

      // Initialize or update the bar chart with the new data
      if (window.myBar) {
        window.myBar.data.labels = barConfig.data.labels;
        window.myBar.data.datasets[0].data = barConfig.data.datasets[0].data;
        window.myBar.update();
      } else {
        window.myBar = new Chart(barCtx, barConfig);
      }
    } catch (error) {
      console.error('Error fetching sales data:', error);
    }
  };

  // Execute the fetchSalesData function when the script is loaded
  fetchSalesData();
