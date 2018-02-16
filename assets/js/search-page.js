tjq(document).ready(function() {
	tjq("#price-range").slider({
		range: true,
		min: 0,
		max: 1000,
		values: [ 100, 800 ],
		slide: function( event, ui ) {
			tjq(".min-price-label").html( "$" + ui.values[ 0 ]);
			tjq(".max-price-label").html( "$" + ui.values[ 1 ]);
		}
	});
	tjq(".min-price-label").html( "$" + tjq("#price-range").slider( "values", 0 ));
	tjq(".max-price-label").html( "$" + tjq("#price-range").slider( "values", 1 ));

	function convertTimeToHHMM(t) {
		var minutes = t % 60;
		var hour = (t - minutes) / 60;
		var timeStr = (hour + "").lpad("0", 2) + ":" + (minutes + "").lpad("0", 2);
		var date = new Date("2014/01/01 " + timeStr + ":00");
		var hhmm = date.toLocaleTimeString(navigator.language, {hour: '2-digit', minute:'2-digit'});
		return hhmm;
	}
	tjq("#flight-times").slider({
		range: true,
		min: 0,
		max: 1440,
		step: 5,
		values: [ 360, 1200 ],
		slide: function( event, ui ) {
			
			tjq(".start-time-label").html( convertTimeToHHMM(ui.values[0]) );
			tjq(".end-time-label").html( convertTimeToHHMM(ui.values[1]) );
		}
	});
	tjq(".start-time-label").html( convertTimeToHHMM(tjq("#flight-times").slider( "values", 0 )) );
	tjq(".end-time-label").html( convertTimeToHHMM(tjq("#flight-times").slider( "values", 1 )) );
});
