// page('/', index)

page('/savelink/', () =>  {
	console.error('Page not found');
	document.all.iframe.src = "public/index.html"; 
});
page('*', notfound);

page();

// notfound
function notfound () {
	//location.search.slice(1);
	// console.error('Page not found');
}