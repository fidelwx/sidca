// AJAX

$("table tbody tr td a:first-child").click(function()
{
	let total = $(this).parents('tr body > div.uk-offcanvas-content > div.uk-flex.uk-flex-center.uk-flex-middle.uk-height-viewport.uk-position-z-index.uk-position-relative > div.uk-width-1-2\40 s.uk-padding-small.uk-background-secondary.uk-width-medium.uk-overflow-auto > table > tbody > tr > td:nth-child(2)');
	console.log(total[0]);
})