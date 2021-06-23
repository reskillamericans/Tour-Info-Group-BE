const cityList = require('../models/cities.json');

function seedCities() {
	for (var i = 0; i < countryList.length; i++){
		Location.create({
			name: cityList[i].name,
			type: "city"
		})
	}
	console.log('cities seeded successfully');
}