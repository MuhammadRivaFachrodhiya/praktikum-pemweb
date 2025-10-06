document.addEventListener('DOMContentLoaded', function() {
    const modalOverlay = document.getElementById('custom-alert-overlay');
    const modalTitle = document.getElementById('modal-title');
    const modalMessage = document.getElementById('modal-message');
    const closeModalBtn = document.getElementById('modal-close-btn');
    let currentAction = null;

    function showModal(title, message, options = {}) {
        modalTitle.textContent = title;
        modalMessage.textContent = message;
        closeModalBtn.textContent = options.buttonText || 'Mengerti';
        if (currentAction) {
            closeModalBtn.removeEventListener('click', currentAction);
        }
        currentAction = options.action || null;
        if (currentAction) {
            closeModalBtn.addEventListener('click', currentAction);
        }
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

    function handleAddToCart(event) {
        event.preventDefault();
        event.stopPropagation();
        if (isLoggedIn) {
            const card = event.target.closest('.product-card, .promo-card');
            const title = card.querySelector('h3').textContent;
            const artist = card.querySelector('.artist, p').textContent;
            showModal('Berhasil!', `Album "${title}" oleh ${artist} telah ditambahkan ke keranjang.`);
        } else {
            showModal('Anda Belum Login', 'Silakan login terlebih dahulu untuk menambahkan item.', {
                buttonText: 'Login Sekarang',
                action: function() {
                    window.location.href = 'login.php';
                }
            });
        }
    }

    document.querySelectorAll('.add-to-cart-button').forEach(button => {
        button.addEventListener('click', handleAddToCart);
    });
    
    const ctaButton = document.querySelector('.cta-button');
    if (ctaButton && (ctaButton.textContent.toLowerCase().includes('beli') || ctaButton.textContent.toLowerCase().includes('pesan'))) {
        ctaButton.addEventListener('click', handleAddToCart);
    }
    
    document.querySelectorAll('.details-button').forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            event.stopPropagation();
            const card = event.target.closest('.product-card');
            const title = card.querySelector('h3').textContent;
            const artist = card.querySelector('p').textContent;
            showModal('Detail Album', `Ini adalah detail untuk album "${title}" oleh ${artist}.`);
        });
    });

    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && modalOverlay.classList.contains('visible')) {
            hideModal();
        }
    });
});