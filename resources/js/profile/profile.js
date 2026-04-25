document.addEventListener("DOMContentLoaded", () => {
    const uploadBox = document.getElementById("upload-box");
    const fileInput = document.getElementById("profileImageInput");
    const previewImage = document.getElementById("profileImagePreview");

    // Open file picker when clicking avatar
    uploadBox.addEventListener("click", () => {
        fileInput.click();
    });

    // Preview selected image
    fileInput.addEventListener("change", (event) => {
        const file = event.target.files[0];

        if (!file) return;

        // Optional: validate file type
        if (!file.type.startsWith("image/")) {
            alert("Please select a valid image file.");
            return;
        }

        const reader = new FileReader();

        reader.onload = function (e) {
            previewImage.src = e.target.result;
        };

        reader.readAsDataURL(file);
    });
});