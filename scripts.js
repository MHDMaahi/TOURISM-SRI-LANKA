// Get references to the image and the popup elements
const image = document.getElementById("image");
const popup = document.getElementById("popup");
const closeBtn = document.getElementById("close-btn");

// When the image is clicked, show the popup
image.addEventListener("click", function() {
  popup.style.display = "flex";
});

// When the close button is clicked, hide the popup
closeBtn.addEventListener("click", function() {
  popup.style.display = "none";
});

// Optionally, close the popup if the user clicks outside of the popup content
window.addEventListener("click", function(event) {
  if (event.target === popup) {
    popup.style.display = "none";
  }
});

// Package Load More Functionality
let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem = 4;

if (loadMoreBtn) { // Check if button exists
    loadMoreBtn.onclick = () => {
        let boxes = [...document.querySelectorAll('.packages .box-container .box')];

        if (boxes.length > 0) { // Check if boxes exist
            for (let i = currentItem; i < currentItem + 4 && i < boxes.length; i++) {
                boxes[i].style.display = 'inline-block';
            }

            currentItem += 4;
            if (currentItem >= boxes.length) {
                loadMoreBtn.style.display = 'none';
            }
        }
    };
}
