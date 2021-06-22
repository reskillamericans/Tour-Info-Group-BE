const mongoose = require('mongoose');
/*
location can be a city or a country,
should have a title, 
array of comments, 
array of ratings,
and an average rating (Number)
*/

const locationSchema = new mongoose.Schema({
	location: {
		type: String,
		required: true
	},
	title: {
		type: String,
		required: true
	},
	reviews: [{
		type: Schema.Types.ObjectId,
		ref: "Review"
	}]
});

const Location = mongoose.model('Location', locationSchema);
module.exports = Location;