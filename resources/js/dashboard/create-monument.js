let createEvent = document.getElementById('create-monument');

createEvent.classList.remove("text-slate-500", "hover:bg-slate-200/50");
createEvent.classList.add("bg-white", "text-sky-700", "shadow-sm", "rounded-lg");

const uploadBox = document.getElementById('upload-image');
const input = document.getElementById('image-input');
const grid = document.getElementById('image-grid');
let allFiles = [];
function uploadImage() {

    uploadBox.addEventListener('click', () => input.click());

    input.addEventListener('change', (e) => {
        const files = Array.from(e.target.files);

        files.forEach(file => {
            if (!file.type.startsWith('image/')) return;

            allFiles.push(file);
            renderImage(file);
        })

        updateInputFiles();
    });
}

function renderImage(file) {
    const reader = new FileReader();

    reader.onload = function (e) {
        const wrapper = document.createElement('div');
        wrapper.className = "aspect-square bg-slate-100 rounded-xl overflow-hidden relative group";

        wrapper.innerHTML = `
            <img class="w-full h-full object-cover opacity-60"
            data-alt="magnificent view of the taj mahal at sunrise with soft pink sky and reflection in the water"
            src="${e.target.result}" />
            <button type="button" class="cursor-pointer absolute inset-0 flex items-center justify-center bg-black/20 text-white opacity-0 group-hover:opacity-100 transition-opacity">
                <span class="material-symbols-outlined text-sm">delete</span>
            </button>
            `;

        // Delete image properly
        wrapper.querySelector('button').addEventListener('click', () => {
            allFiles = allFiles.filter(f => f !== file);
            updateInputFiles();
            wrapper.remove();
        });

        const addBox = grid.lastElementChild;
        grid.insertBefore(wrapper, addBox);
    };

    reader.readAsDataURL(file);
}

function updateInputFiles() {
    const dataTransfer = new DataTransfer();

    allFiles.forEach(file => {
        dataTransfer.items.add(file);
    });

    input.files = dataTransfer.files;
}

uploadImage()