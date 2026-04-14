let createEvent = document.getElementById('create-event');

createEvent.classList.remove("text-slate-500", "hover:bg-slate-200/50");
createEvent.classList.add("bg-white", "text-sky-700", "shadow-sm", "rounded-lg");

function addTicket() {
    let ticketIndex = document.querySelectorAll('.ticket-item').length;

    document.getElementById('ticket-button').addEventListener('click', function () {
        const container = document.getElementById('ticket-container');

        const div = document.createElement('div');
        div.className = "ticket-item mt-4 flex flex-col md:flex-row gap-4 p-5 bg-surface-container-low rounded-2xl relative";

        div.innerHTML = `
            <div class="flex-1 space-y-2">
                <label class="text-xs font-bold text-slate-500 uppercase ml-1">Nom du niveau</label>
                <input name="ticket[${ticketIndex}][name]"
                    class="w-full bg-white border-none rounded-xl p-3 focus:ring-2 focus:ring-primary/20 transition-all text-on-surface"
                    placeholder="e.g. VIP Access" type="text" />
            </div>
            <div class="w-full md:w-32 space-y-2">
                <label class="text-xs font-bold text-slate-500 uppercase ml-1">Prix (MAD)</label>
                <input name="ticket[${ticketIndex}][price]"
                    class="w-full bg-white border-none rounded-xl p-3 focus:ring-2 focus:ring-primary/20 transition-all text-on-surface"
                    placeholder="0" type="number" />
            </div>
            <div class="w-full md:w-32 space-y-2">
                <label class="text-xs font-bold text-slate-500 uppercase ml-1">Quantité</label>
                <input name="ticket[${ticketIndex}][quantity]"
                    class="w-full bg-white border-none rounded-xl p-3 focus:ring-2 focus:ring-primary/20 transition-all text-on-surface"
                    placeholder="0" type="number" />
            </div>
            <div class="flex items-end pb-1">
                <button type="button"
                class="remove-ticket w-10 h-10 flex items-center justify-center text-error/40 hover:text-error transition-colors">
                    <span class="material-symbols-outlined" data-icon="delete">delete</span>
                </button>
            </div>
        `

        container.appendChild(div);
        ticketIndex++;

        toggleCapacitySection();
    })
}

function removeTicket() {
    document.addEventListener('click', function (e) {
        if (e.target.closest('.remove-ticket')) {
            const ticketItem = e.target.closest('.ticket-item');
            ticketItem.remove();
            toggleCapacitySection();
        }
    });
}

function toggleCapacitySection() {
    const tickets = document.querySelectorAll('.ticket-item');
    const section = document.getElementById('capacity-section');
    const input = document.getElementById('capacity');

    if (!section || !input) return;

    if (tickets.length > 0) {
        section.classList.add('hidden');
        input.disabled = true;
    } else {
        section.classList.remove('hidden');
        input.disabled = false;
    }
}

function uploadImage() {
    const uploadBox = document.getElementById('upload-image');
    const input = document.getElementById('image-input');
    const grid = document.getElementById('image-grid');

    let allFiles = [];

    uploadBox.addEventListener('click', () => input.click());

    input.addEventListener('change', (e) => {
        const files = Array.from(e.target.files);

        files.forEach(file => {
            if (!file.type.startsWith('image/')) return;

            allFiles.push(file);
            renderImage(file);
        });

        updateInputFiles();
        input.value = "";
    });

    function renderImage(file) {
        const reader = new FileReader();

        reader.onload = function (e) {
            const wrapper = document.createElement('div');
            wrapper.className = "aspect-square rounded-xl overflow-hidden relative group shadow-md";

            wrapper.innerHTML = `
                <img src="${e.target.result}" class="w-full h-full object-cover" />
                <button type="button"
                    class="absolute top-2 right-2 w-7 h-7 bg-white/90 backdrop-blur rounded-full flex items-center justify-center text-error opacity-0 group-hover:opacity-100 transition-opacity">
                    <span class="material-symbols-outlined text-sm" data-icon="close">close</span>
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
}

uploadImage()
toggleCapacitySection();
addTicket()
removeTicket()