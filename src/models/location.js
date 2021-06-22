const mongoose = require('mongoos');
/*
location should have a title, array of comments and array of ratings, and an average rating (Number)
*/

const locationSchema = new mongoose.Schema({
	title: {
		type: String,
		required: true
	},
	comments: {
		type: String,
		enum: ["Poor", "Fair", "Good", "Very Good", "Excellent"],
		default: "Good"
	},
	rating: {
		type: Number,
		required: true,
		min: 1,
		enum: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
		default: 1
	},
	avgRating: {
		type: Number,
		min: 1,
		enum: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
		default: 1
	}
});

const Location = mongoose.model('Location', locationSchema);
module.exports = Location;