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
    })
}

addTicket()