$("#slider-direction").noUiSlider({
	start: 20,
	direction: "rtl",
	range: {
		'min': 0,
		'max': 100
	},
	serialization: {
		lower: [
			new Link({
				target: $("#field")
			})
		]
	}
});