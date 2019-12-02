const names = $(
	'Bob', 'Jim', 'Matt', 'Mary', 'Suzy', 'Sarah'
);

const app = document.querySelector('#app');
app.innerHTML = '<ul>' + names.map(function (names) {
	return '<li>' + names + '</li>';
}).join('') + '</ul>';

// Answer
//<!DOCTYPE html>
// <html lang=”end”>
// <head>
//<body>
	//<div id- "names">
	//</div>
//<script src="snap.js"></script>
//</body>
//<html>
	//const names = ['Bob', 'Jim', 'Matt', 'Mary', 'Suzy', 'Sarah'];
//names.map(name =. {
	//let newName = document.createElement("p";
	//newName.innerTet = "Name -" + name;
	//document.getElementById("names").appendChild()
//});
