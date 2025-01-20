const uploadBox = document.getElementById("upload-box");
const fileInput = document.getElementById("file-input");
const productForm = document.getElementById("product-form");

// Open file input dialog when clicking on upload box
uploadBox.addEventListener("click", () => {
    fileInput.click();
});

// Show form after image upload
fileInput.addEventListener("change", () => {
    if (fileInput.files.length > 0) {
        const fileName = fileInput.files[0].name;
        uploadBox.innerHTML = `<p>${fileName} uploaded</p>`;
        productForm.style.display = "block";
    }
});

const addButton = document.querySelector(".button");
// Handle Add button click
addButton.addEventListener("click", () => {
    // Validate if all fields are filled
    const title = document.getElementById("title").value.trim();
    const author = document.getElementById("author").value.trim();
    const description = document.getElementById("description").value.trim();
    const stock = document.getElementById("stock").value.trim();
    const price = document.getElementById("price").value.trim();

    if (title && author && description && stock && price) {
        // Display success message
        const successMessage = document.createElement("div");
        successMessage.className = "success-message";
        successMessage.textContent = "Product added successfully!";
        document.body.appendChild(successMessage);

        // Hide the message after 3 seconds
        setTimeout(() => {
            successMessage.remove();
        }, 3000);

        // Clear the form
        document.getElementById("product-form").reset();
        fileInput.value = ""; // Reset file input
        uploadBox.innerHTML = `<i class="fas fa-plus"></i><p>Click to upload</p>`;
        productForm.style.display = "none"; // Hide form after submission
    } else {
        alert("Please fill all fields before adding the product.");
    }
});
        