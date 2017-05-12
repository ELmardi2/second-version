// Search box
function active() {
	var searchBar = document.getElementById('am-searchBar');
		if(searchBar.value == 'Search...') {
			searchBar.value = ''
			searchBar.placeholder = 'Search...'
		}

}	

function inactive() {
	var searchBar = document.getElementById('am-searchBar');
		if(searchBar.value == '') {
			searchBar.value = 'Search...'
			searchBar.placeholder = ''
		}
}