/**
 *Convert a weight or mass to grams
 *
 * @param weight The weight or mass to be converted
 * @param units The abbreviation for the units in which this weight/mass is measured.
 * @returns The mass in grams.
 */
function convertPoundsToGrams (weight, units) {
	if(unites.toLowerCase()==="lbs"){
		weight = weight * 453.592;
	};
console.log(convertPoundsToGrams(weight:2, units:"lbs"));
