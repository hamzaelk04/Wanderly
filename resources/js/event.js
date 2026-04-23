document.addEventListener("DOMContentLoaded", () => {
    const STORAGE_KEY = "favorite_events";

    const modal = document.getElementById("favorites-modal");
    const container = document.getElementById("favorites-container");
    const openBtn = document.getElementById("toggle-favorites");
    const closeBtn = document.getElementById("close-favorites");

    const getFavorites = () =>
        JSON.parse(localStorage.getItem(STORAGE_KEY)) || [];

    const saveFavorites = (favorites) =>
        localStorage.setItem(STORAGE_KEY, JSON.stringify(favorites));

    const isFavorite = (id) => getFavorites().includes(id);

    function toggleFavorite(id) {
        let favorites = getFavorites();

        if (favorites.includes(id)) {
            favorites = favorites.filter(fav => fav !== id);
        } else {
            favorites.push(id);
        }

        saveFavorites(favorites);
        updateUI(id);
    }

    function updateUI(id) {
        const btns = document.querySelectorAll(`.favorite-btn[data-event-id="${id}"]`);

        btns.forEach(btn => {
            const icon = btn.querySelector(".favorite-icon");

            if (isFavorite(id)) {
                icon.textContent = "favorite";
                btn.classList.add("text-red-500");
            } else {
                icon.textContent = "favorite_border";
                btn.classList.remove("text-red-500");
            }
        });
    }

    // Attach click handlers to all favorite buttons
    document.querySelectorAll(".favorite-btn").forEach(btn => {
        btn.addEventListener("click", () => {
            const id = btn.dataset.eventId;
            toggleFavorite(id);
        });
    });

    // Load saved state on page load
    document.querySelectorAll(".favorite-btn").forEach(btn => {
        updateUI(btn.dataset.eventId);
    });

    // ---- MODAL PART (your existing code) ----
    function openModal() {
        renderFavorites();
        modal.classList.remove("hidden");
        modal.classList.add("flex");
    }

    function closeModal() {
        modal.classList.add("hidden");
        modal.classList.remove("flex");
    }

    function renderFavorites() {
        const favorites = getFavorites();
        container.innerHTML = "";

        const cards = document.querySelectorAll(".event-card");

        const favoriteCards = Array.from(cards).filter(card =>
            favorites.includes(card.dataset.eventId)
        );

        if (favoriteCards.length === 0) {
            container.innerHTML = `
            <p class="text-gray-500 col-span-2 text-center">
                No favorites yet.
            </p>
        `;
            return;
        }

        favoriteCards.forEach(card => {
            const id = card.dataset.eventId;
            const title = card.querySelector("h3")?.textContent || "Untitled";

            const miniCard = document.createElement("div");

            miniCard.className =
                "bg-gray-100 hover:bg-gray-200 transition rounded-xl p-3 flex items-center gap-3 cursor-pointer";

            const img = card.querySelector("img")?.src || "";

            miniCard.innerHTML = `
                <img src="${img}" class="w-10 h-10 rounded-lg object-cover flex-shrink-0" />

                <span class="font-semibold text-sm text-gray-800 truncate flex-1">
                    ${title}
                </span>

                <button class="text-red-500 text-sm remove-fav" data-id="${id}">
                    ✕
                </button>
            `;

            container.appendChild(miniCard);
        });

        // allow removing from modal
        container.querySelectorAll(".remove-fav").forEach(btn => {
            btn.addEventListener("click", (e) => {
                const id = btn.dataset.id;

                let favorites = getFavorites().filter(f => f !== id);
                localStorage.setItem(STORAGE_KEY, JSON.stringify(favorites));

                renderFavorites();
                updateUI(id);
            });
        });
    }

    openBtn?.addEventListener("click", openModal);
    closeBtn?.addEventListener("click", closeModal);

    modal?.addEventListener("click", (e) => {
        if (e.target === modal) closeModal();
    });
});