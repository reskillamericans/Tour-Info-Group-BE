const mongoose = require('mongoose');

const reviewSchema = new mongoose.Schema({
	name: {
		type: String,
		required: true
	},
	comments: {
		type: [String]
	},
	rating: {
		type: [Number],
		required: true
	}
	avgRating: {
		type: Number,
		required: true,
		min: 1,
		max: 5
	},
	location: {
		type: Schema.Types.ObjectId,
		ref: "Location"
	}
});

const Review = mongoose.model('Review', reviewSchema);
module.exports = Review;