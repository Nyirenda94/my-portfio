// greeting bar
window.onload = function() {
    // Get the current date
    var currentDate = new Date();
  
    // Get the hour of the current date
    var currentHour = currentDate.getHours();
  
    // Define the greeting based on the current hour
    var greeting;
    if (currentHour < 12) {
      greeting = 'Good morning';
    } else if (currentHour < 18) {
      greeting = 'Good afternoon';
    } else {
      greeting = 'Good evening';
    }
  
    // Display the greeting and date in the HTML container
    var greetingContainer = document.getElementById('greeting');
    greetingContainer.innerHTML = greeting + ', today is ' + currentDate.toDateString();
  };
  // end of greeting window

  // Get the modal
var modal = document.getElementById('form');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// search bar

//get references to the form and input element
const form = document.getElementById("searchForm");
const input = document.getElementById("searchInput");

// Add event listener to the form 
form.addEventListener("submit", function(event){
	event.preventDefault(); //prevent from submission

	//get search query from the input element
	const searchQuery = input.value.trim();

	// perform the search operation (e.g., redirect to search results page)
	performSearch(query);
})

// function to perform the search operation
function performSearch(query) {
	// Implement your search logic here
	// You can redirect to a search results page or display results on the same page
	// For example, you can use window.location.href = "search-results.html?=" + query ; to redirect
	// to a search results page with the query as a parameter
	console.log("Search query:", query);
}
// end search bar
