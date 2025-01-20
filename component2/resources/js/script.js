const track = document.querySelector('.carousel-track');
const slides = Array.from(track.children);
const nextButton = document.querySelector('.next-btn');
const prevButton = document.querySelector('.prev-btn');
const slideWidth = slides[0].getBoundingClientRect().width;

// Arrange the slides next to each other
slides.forEach((slide, index) => {
    slide.style.left = slideWidth * index + 'px';
});

let currentSlideIndex = 0;

// Move to the next slide
nextButton.addEventListener('click', () => {
    if (currentSlideIndex < slides.length - 1) {
        currentSlideIndex++;
    } else {
        currentSlideIndex = 0; // Loop back to the first slide
    }
    const amountToMove = slides[currentSlideIndex].style.left;
    track.style.transform = `translateX(-${amountToMove})`;
});

// Move to the previous slide
prevButton.addEventListener('click', () => {
    if (currentSlideIndex > 0) {
        currentSlideIndex--;
    } else {
        currentSlideIndex = slides.length - 1; // Loop to the last slide
    }
    const amountToMove = slides[currentSlideIndex].style.left;
    track.style.transform = `translateX(-${amountToMove})`;
});


const books = {
    1: {
      cover: "image/book5.jpeg",
      title: "Book Title: The Beginning",
      rating: "★ ★ ★ ★ ☆",
      reviews: "(4.5/10+)",
      price: "Rs. 350",
    },
    2: {
      cover: "image/book2.jpeg",
      title: "Book Title: The Journey",
      rating: "★ ★ ★ ★ ★",
      reviews: "(5.0/15+)",
      price: "Rs. 400",
    },
    3: {
      cover: "image/book3.jpeg",
      title: "Book Title: The Finale",
      rating: "★ ★ ★ ☆ ☆",
      reviews: "(3.8/8+)",
      price: "Rs. 300",
    },
  };
  
  document.querySelectorAll(".series-number").forEach((button) => {
    button.addEventListener("click", () => {
      // Remove active class from all series numbers
      document.querySelectorAll(".series-number").forEach((btn) => btn.classList.remove("active"));
  
      // Add active class to the clicked series number
      button.classList.add("active");
  
      // Get the series number
      const series = button.getAttribute("data-series");
  
      // Update the book details based on the series number
      const book = books[series];
      document.getElementById("book-cover").src = book.cover;
      document.getElementById("book-title").textContent = book.title;
      document.getElementById("book-rating").textContent = book.rating;
      document.getElementById("book-reviews").textContent = book.reviews;
      document.getElementById("book-price").textContent = book.price;
    });
  });
  