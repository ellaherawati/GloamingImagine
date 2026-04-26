// Wishlist Management System
const WISHLIST_KEY = 'gloaming_wishlist';

// Get wishlist from localStorage
function getWishlist() {
    const wishlist = localStorage.getItem(WISHLIST_KEY);
    return wishlist ? JSON.parse(wishlist) : [];
}

// Check if product is in wishlist
function isInWishlist(productId) {
    const wishlist = getWishlist();
    return wishlist.includes(productId);
}

// Add to wishlist
function addToWishlist(productId) {
    let wishlist = getWishlist();
    if (!wishlist.includes(productId)) {
        wishlist.push(productId);
        localStorage.setItem(WISHLIST_KEY, JSON.stringify(wishlist));
        updateWishlistCount();
        return true;
    }
    return false;
}

// Remove from wishlist
function removeFromWishlist(productId) {
    let wishlist = getWishlist();
    wishlist = wishlist.filter(id => id !== productId);
    localStorage.setItem(WISHLIST_KEY, JSON.stringify(wishlist));
    updateWishlistCount();
    return true;
}

// Toggle wishlist (add if not exists, remove if exists)
function toggleWishlist(productId, buttonElement) {
    if (isInWishlist(productId)) {
        removeFromWishlist(productId);
        if (buttonElement) {
            buttonElement.classList.remove('active');
        }
        return false;
    } else {
        addToWishlist(productId);
        if (buttonElement) {
            buttonElement.classList.add('active');
        }
        return true;
    }
}

// Update wishlist count in header
function updateWishlistCount() {
    const wishlist = getWishlist();
    const countElement = document.getElementById('wishlistHeaderCount');
    
    if (countElement) {
        if (wishlist.length > 0) {
            countElement.textContent = wishlist.length;
            countElement.style.display = 'inline-block';
        } else {
            countElement.style.display = 'none';
        }
    }
}

// Initialize wishlist buttons on page load
function initializeWishlistButtons() {
    const wishlistButtons = document.querySelectorAll('.wishlist-btn');
    
    wishlistButtons.forEach(button => {
        const productId = parseInt(button.getAttribute('data-product-id'));
        
        // Set initial state
        if (isInWishlist(productId)) {
            button.classList.add('active');
        } else {
            button.classList.remove('active');
        }
        
        // Remove any existing listeners (if re-initializing)
        button.onclick = null;
        
        // Add click event listener
        button.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            toggleWishlist(productId, button);
        }, false);

        button.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                e.stopPropagation();
                toggleWishlist(productId, button);
            }
        }, false);
    });
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
    updateWishlistCount();
    initializeWishlistButtons();
});
