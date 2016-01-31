/* global Highcharts */

Wee.fn.make('common', {
	init: function() {
		this.$private.renderChart();
	}
}, {
	renderChart: function() {
		var $container = $('ref:chart');

		window.chart = new Highcharts.Chart({
			chart: {
				renderTo: $container[0],
				height: 400
			},
			xAxis: {
				categories: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']
			},

			series: [{
				data: [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6]
			}]
		});

	}
});