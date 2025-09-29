document.addEventListener('DOMContentLoaded', function() {
    const modalOverlay = document.getElementById('custom-alert-overlay');
    const modalTitle = document.getElementById('modal-title');
    const modalMessage = document.getElementById('modal-message');
    const closeModalBtn = document.getElementById('modal-close-btn');

    function showModal(title, message) {
        modalTitle.textContent = title;
        modalMessage.textContent = message;
        modalOverlay.classList.add('visible');
    }

    function hideModal() {
        modalOverlay.classList.remove('visible');
    }

    if (closeModalBtn) closeModalBtn.addEventListener('click', hideModal);
    if (modalOverlay) {
        modalOverlay.addEventListener('click', function(event) {
            if (event.target === modalOverlay) hideModal();
        });
    }

    const ctaButton = document.querySelector('.cta-button');
    if (ctaButton) {
        ctaButton.addEventListener('click', function(event) {
            event.preventDefault();
            const albumTitle = document.querySelector('.promo-info h3').textContent;
            const artistName = document.querySelector('.promo-info .artist').textContent;
            
            showModal(
                'Konfirmasi',
                `Album "${albumTitle}" oleh ${artistName} telah ditambahkan ke keranjang Anda.`
            );
        });
    }

    const productCards = document.querySelectorAll('.product-card');
    productCards.forEach(card => {
        const detailsButton = card.querySelector('.details-button');
        const addToCartButton = card.querySelector('.add-to-cart-button');

        if (detailsButton) {
            detailsButton.addEventListener('click', function(event) {
                event.preventDefault();
                event.stopPropagation();
                const title = card.querySelector('h3').textContent;
                const artist = card.querySelector('p').textContent;
                
                showModal(
                    'Detail Album',
                    `Ini adalah detail untuk album "${title}" oleh ${artist}. Fitur lengkap akan segera hadir!`
                );
            });
        }
        
        if (addToCartButton) {
            addToCartButton.addEventListener('click', function(event) {
                event.preventDefault();
                event.stopPropagation();
                const title = card.querySelector('h3').textContent;
                const artist = card.querySelector('p').textContent;

                showModal(
                    'Berhasil!',
                    `Album "${title}" oleh ${artist} telah ditambahkan ke keranjang.`
                );
            });
        }
    });

    const genreLinks = document.querySelectorAll('.genre-links a');
    genreLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const genre = link.textContent;

            showModal(
                'Filter Genre',
                `Anda memilih untuk menampilkan album dengan genre: ${genre}.`
            );
        });
    });

    const searchInput = document.querySelector('.search-bar input');
    if (searchInput) {
        const searchBar = searchInput.parentElement;
        searchInput.addEventListener('focus', () => {
            searchBar.style.border = '1px solid #ffffff';
            searchBar.style.boxShadow = '0 0 5px rgba(255, 255, 255, 0.5)';
        });
        searchInput.addEventListener('blur', () => {
            searchBar.style.border = '1px solid #444';
            searchBar.style.boxShadow = 'none';
        });
    }
});