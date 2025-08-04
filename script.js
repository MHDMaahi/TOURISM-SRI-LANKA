document.addEventListener("DOMContentLoaded", function() {
    let menu = document.querySelector('#menu-btn');
    let navbar = document.querySelector('.header .navbar');

    if (menu && navbar) {
        menu.onclick = () => {
            menu.classList.toggle('fa-times'); // Toggle the icon
            navbar.classList.toggle('active'); // Toggle class for the navbar
        };
    }

    window.onscroll = () => {
        menu.classList.remove('fa-times'); // Reset icon on scroll
        navbar.classList.remove('active'); // Hide navbar on scroll
    };
}); 



    // -------------- Hide Navbar on Scroll --------------
    window.onscroll = function () {
        if (menu) {
            menu.classList.remove('fa-times'); // Reset icon on scroll
        }
        if (navbar) {
            navbar.classList.remove('active'); // Hide navbar on scroll
        }
    };

    // -------------- Home Slider Initialization --------------
    var swiperHome = new Swiper(".home-slider", {
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

      // Reviews Slider Initialization
      var swiperReviews = new Swiper(".reviews-slider", {
        loop: true,
        spaceBetween: 20,
        autoHeight: true,
        grabCursor: true,
        breakpoints: {
            640: {
                slidesPerView: 1, // Fixed typo: slidesPerView
            },
            768: {
                slidesPerView: 2, // Fixed typo
            },
            1024: {
                slidesPerView: 3, // Fixed typo
            },
        },
    });


    let loadMoreBtn = document.querySelector('.packages .load-more .btn');
    let currentItem = 4;
    
    if (loadMoreBtn){  // Check if button exists
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