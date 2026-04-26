// ============ SHOP SIDEBAR LOGIC ============
function syncBodyScrollLock() {
    const shouldLock =
        document.getElementById('shopSidebar')?.classList.contains('open') ||
        document.getElementById('cartSidebar')?.classList.contains('open') ||
        document.getElementById('newsletterModal')?.classList.contains('is-open');

    document.body.style.overflow = shouldLock ? 'hidden' : '';
}

function openShopSidebar() {
    const shopSidebar = document.getElementById('shopSidebar');
    const shopOverlay = document.getElementById('shopOverlay');
    const shopToggle = document.getElementById('shopToggle');

    if (!shopSidebar || !shopOverlay) return;

    shopSidebar.classList.add('open');
    shopOverlay.classList.add('open');
    shopSidebar.setAttribute('aria-hidden', 'false');
    shopOverlay.setAttribute('aria-hidden', 'false');
    if (shopToggle) shopToggle.setAttribute('aria-expanded', 'true');
    syncBodyScrollLock();
    requestAnimationFrame(() => shopSidebar.focus());
}
function closeShopSidebar() {
    const shopSidebar = document.getElementById('shopSidebar');
    const shopOverlay = document.getElementById('shopOverlay');
    const shopToggle = document.getElementById('shopToggle');

    if (!shopSidebar || !shopOverlay) return;

    shopSidebar.classList.remove('open');
    shopOverlay.classList.remove('open');
    shopSidebar.setAttribute('aria-hidden', 'true');
    shopOverlay.setAttribute('aria-hidden', 'true');
    if (shopToggle) shopToggle.setAttribute('aria-expanded', 'false');
    syncBodyScrollLock();
}

function optimizeImages(root) {
    const scope = root || document;
    scope.querySelectorAll('img').forEach(img => {
        if (!img.hasAttribute('decoding')) {
            img.setAttribute('decoding', 'async');
        }

        if (img.dataset.critical !== 'true' && !img.hasAttribute('loading')) {
            img.setAttribute('loading', 'lazy');
        }
    });
}

document.addEventListener('DOMContentLoaded', function () {
    // ============ SEARCH BOX LOGIC WITH AUTOCOMPLETE ============
    var searchToggle = document.getElementById('searchToggle');
    var searchContainer = document.querySelector('.search-container');
    var searchBox = document.getElementById('searchBox');
    var searchInput = document.getElementById('searchInput');
    var searchClose = document.getElementById('searchClose');
    var searchDropdown = document.getElementById('searchDropdown');

    // Load products from centralized data file (products-data.js)
    var products = (typeof DUMMY_PRODUCTS !== 'undefined') ? DUMMY_PRODUCTS : [];

    function openSearch() {
        if (!searchBox || !searchInput) return;
        searchBox.classList.add('active');
        searchBox.setAttribute('aria-hidden', 'false');
        if (searchContainer) searchContainer.classList.add('is-open');
        if (searchToggle) searchToggle.setAttribute('aria-expanded', 'true');
        searchInput.focus();
    }

    function closeSearch() {
        if (!searchBox || !searchInput || !searchDropdown) return;
        searchBox.classList.remove('active');
        searchBox.setAttribute('aria-hidden', 'true');
        searchDropdown.classList.remove('active');
        if (searchContainer) searchContainer.classList.remove('is-open');
        if (searchToggle) searchToggle.setAttribute('aria-expanded', 'false');
        searchInput.value = '';
    }

    if (searchToggle) {
        searchToggle.addEventListener('click', function () {
            if (searchBox && searchBox.classList.contains('active')) {
                closeSearch();
            } else {
                openSearch();
            }
        });
    }

    if (searchClose) {
        searchClose.addEventListener('click', closeSearch);
    }

    // Search input handler
    if (searchInput) {
        searchInput.addEventListener('input', function () {
            var searchTerm = this.value.trim().toLowerCase();

            if (searchTerm.length > 0) {
                // Filter products
                var results = products.filter(function (product) {
                    return product.name.toLowerCase().indexOf(searchTerm) !== -1 ||
                        product.variant.toLowerCase().indexOf(searchTerm) !== -1;
                });

                displaySearchResults(results, searchTerm);
            } else {
                if (searchDropdown) searchDropdown.classList.remove('active');
            }
        });

        // Handle Enter key
        searchInput.addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                var searchTerm = searchInput.value.trim();
                if (searchTerm) {
                    window.location.href = 'search_result.php?q=' + encodeURIComponent(searchTerm);
                }
            }
        });
    }

    function displaySearchResults(results, searchTerm) {
        if (results.length === 0) {
            searchDropdown.innerHTML = '<div class="search-no-results">No products found</div>';
            searchDropdown.classList.add('active');
            return;
        }

        // Show max 5 results in dropdown
        var displayResults = results.slice(0, 5);
        var html = '';

        displayResults.forEach(function (product) {
            html += '<a href="detail.html?id=' + product.id + '" class="search-result-item">';
            html += '<img src="' + product.image + '" alt="' + product.name + '" class="search-result-image">';
            html += '<div class="search-result-info">';
            html += '<div class="search-result-name">' + product.name + '</div>';
            html += '<div class="search-result-variant">' + product.variant + '</div>';
            html += '</div>';
            html += '<div class="search-result-price">' + product.price + '</div>';
            html += '</a>';
        });

        // Add "See All Results" button
        if (results.length > 5) {
            html += '<div class="search-footer">';
            html += '<a href="search_result.php?q=' + encodeURIComponent(searchTerm) + '" class="search-see-all">';
            html += 'SEE ALL ' + results.length + ' RESULTS';
            html += '</a>';
            html += '</div>';
        } else if (results.length > 0) {
            html += '<div class="search-footer">';
            html += '<a href="search_result.php?q=' + encodeURIComponent(searchTerm) + '" class="search-see-all">';
            html += 'SEE ALL RESULTS';
            html += '</a>';
            html += '</div>';
        }

        searchDropdown.innerHTML = html;
        searchDropdown.classList.add('active');
    }

    // Close dropdown when clicking outside
    document.addEventListener('click', function (e) {
        if (!searchBox || !searchToggle || !searchInput || !searchDropdown) return;
        if (!searchBox.contains(e.target) && !searchToggle.contains(e.target)) {
            closeSearch();
        }
    });

    // Close search on ESC key
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
            if (searchBox && searchBox.classList.contains('active')) closeSearch();
            if (document.getElementById('shopSidebar')?.classList.contains('open')) closeShopSidebar();
            if (document.getElementById('cartSidebar')?.classList.contains('open') && typeof closeCart === 'function') {
                closeCart();
            }
            if (document.getElementById('newsletterModal')?.classList.contains('is-open')) closeNewsletterSignup();
        }
    });

    // ============ SHOP SIDEBAR LOGIC ============
    var shopToggle = document.getElementById('shopToggle');
    if (shopToggle) {
        shopToggle.addEventListener('click', function (e) {
            e.preventDefault();
            openShopSidebar();
        });
    }
    var shopClose = document.getElementById('shopClose');
    if (shopClose) shopClose.addEventListener('click', closeShopSidebar);

    var shopOverlay = document.getElementById('shopOverlay');
    if (shopOverlay) {
        shopOverlay.addEventListener('click', function (e) {
            if (e.target === shopOverlay) closeShopSidebar();
        });
    }

    const newsletterModal = document.getElementById('newsletterModal');
    const newsletterClose = document.getElementById('newsletterModalClose');
    const newsletterForm = document.getElementById('newsletterForm');
    const newsletterEmail = document.getElementById('newsletterEmail');
    const newsletterFeedback = document.getElementById('newsletterFeedback');

    if (newsletterClose) {
        newsletterClose.addEventListener('click', closeNewsletterSignup);
    }

    if (newsletterModal) {
        newsletterModal.addEventListener('click', function (e) {
            if (e.target === newsletterModal) closeNewsletterSignup();
        });
    }

    if (newsletterForm && newsletterEmail && newsletterFeedback) {
        newsletterForm.addEventListener('submit', function (e) {
            e.preventDefault();

            const email = newsletterEmail.value.trim();
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!emailPattern.test(email)) {
                newsletterFeedback.textContent = 'Please enter a valid email address.';
                newsletterEmail.focus();
                return;
            }

            const storageKey = 'gloaming_newsletter_signups';
            const signups = JSON.parse(localStorage.getItem(storageKey) || '[]');
            if (!signups.includes(email)) {
                signups.push(email);
                localStorage.setItem(storageKey, JSON.stringify(signups));
            }

            newsletterFeedback.textContent = 'You are on the list. We will keep you posted.';
            newsletterForm.reset();

            window.setTimeout(function () {
                closeNewsletterSignup();
                newsletterFeedback.textContent = '';
            }, 1400);
        });
    }

    optimizeImages(document);
});
// ============================================

function openNewsletterSignup() {
    const modal = document.getElementById('newsletterModal');
    const trigger = document.getElementById('newsletterTrigger');
    const emailInput = document.getElementById('newsletterEmail');
    const feedback = document.getElementById('newsletterFeedback');

    if (!modal) return;

    modal.classList.add('is-open');
    modal.setAttribute('aria-hidden', 'false');
    if (trigger) trigger.setAttribute('aria-expanded', 'true');
    if (feedback) feedback.textContent = '';
    syncBodyScrollLock();
    requestAnimationFrame(() => {
        if (emailInput) emailInput.focus();
    });
}

function closeNewsletterSignup() {
    const modal = document.getElementById('newsletterModal');
    const trigger = document.getElementById('newsletterTrigger');

    if (!modal) return;

    modal.classList.remove('is-open');
    modal.setAttribute('aria-hidden', 'true');
    if (trigger) trigger.setAttribute('aria-expanded', 'false');
    syncBodyScrollLock();
    if (trigger) trigger.focus();
}

// Dark Mode Toggle — smooth animated
(function () {
    const toggleBtn = document.getElementById('darkModeToggle');
    const icon = toggleBtn ? toggleBtn.querySelector('.toggle-icon') : null;
    const label = toggleBtn ? toggleBtn.querySelector('.toggle-label') : null;
    const themeColorMeta = document.querySelector('meta[name="theme-color"]');

    function spawnRipple(x, y, toDark) {
        const size = Math.hypot(window.innerWidth, window.innerHeight) * 2.2;
        const ripple = document.createElement('div');
        ripple.className = 'theme-ripple';
        ripple.style.cssText = `
            width: ${size}px;
            height: ${size}px;
            left: ${x - size / 2}px;
            top:  ${y - size / 2}px;
            background: ${toDark ? '#111' : '#fff'};
            transition: transform 0.7s cubic-bezier(0.4,0,0.2,1),
                        opacity  0.7s cubic-bezier(0.4,0,0.2,1);
        `;
        document.body.appendChild(ripple);
        // Force reflow
        ripple.getBoundingClientRect();
        ripple.classList.add('expanding');
        ripple.addEventListener('transitionend', () => ripple.remove(), { once: true });
    }

    function applyDarkMode(enabled, animate, originX, originY) {
        if (animate && toggleBtn) {
            // Spin the icon
            toggleBtn.classList.remove('spinning');
            void toggleBtn.offsetWidth; // reflow
            toggleBtn.classList.add('spinning');
            toggleBtn.addEventListener('animationend', () => {
                toggleBtn.classList.remove('spinning');
            }, { once: true });

            // Ripple from button center
            const rect = toggleBtn.getBoundingClientRect();
            const cx = originX ?? rect.left + rect.width / 2;
            const cy = originY ?? rect.top + rect.height / 2;
            spawnRipple(cx, cy, enabled);
        }

        // Small delay so ripple starts before theme flips
        setTimeout(() => {
            if (enabled) {
                document.body.classList.add('dark-mode');
                if (icon) icon.textContent = '🌙';
                if (label) label.textContent = 'Light Mode';
                if (themeColorMeta) themeColorMeta.setAttribute('content', '#111111');
            } else {
                document.body.classList.remove('dark-mode');
                if (icon) icon.textContent = '☀️';
                if (label) label.textContent = 'Dark Mode';
                if (themeColorMeta) themeColorMeta.setAttribute('content', '#ffffff');
            }
            if (toggleBtn) toggleBtn.setAttribute('aria-pressed', enabled ? 'true' : 'false');
            localStorage.setItem('darkMode', enabled ? '1' : '0');
        }, animate ? 80 : 0);
    }

    // Restore saved preference (no animation on load)
    const saved = localStorage.getItem('darkMode');
    if (saved === '1') applyDarkMode(true, false);

    if (toggleBtn) {
        toggleBtn.addEventListener('click', function (e) {
            applyDarkMode(!document.body.classList.contains('dark-mode'), true, e.clientX, e.clientY);
        });
    }
})();

// Shipping region selector
const shippingRegion = document.getElementById('shippingRegion');
if (shippingRegion) {
    shippingRegion.addEventListener('change', function () {
        // Reserved for future shipping region logic.
    });
}

// Smooth scroll for anchor links
document.querySelectorAll('a[href="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
    });
});

function initInfiniteCarousel(wrapper, trackId, thumbId) {
    if (!wrapper) return;
    const origItems = Array.from(wrapper.querySelectorAll(':scope > .product-block, :scope > .pns-cat-item'));
    if (!origItems.length) return;
    origItems.forEach(item => {
        const c1 = item.cloneNode(true); const c2 = item.cloneNode(true);
        c1.setAttribute('aria-hidden', 'true'); c2.setAttribute('aria-hidden', 'true');
        wrapper.insertBefore(c1, wrapper.firstChild); wrapper.appendChild(c2);
    });
    const n = origItems.length;
    function setWidth() {
        const items = Array.from(wrapper.querySelectorAll(':scope > .product-block, :scope > .pns-cat-item')).slice(0, n);
        const gap = parseFloat(window.getComputedStyle(wrapper).gap || window.getComputedStyle(wrapper).columnGap) || 0;
        return items.reduce((s, el) => s + el.offsetWidth + gap, 0);
    }
    function jumpToOrigin() {
        wrapper.style.scrollBehavior = 'auto';
        wrapper.scrollLeft = setWidth();
        requestAnimationFrame(updateThumb);
    }
    jumpToOrigin();
    window.addEventListener('resize', jumpToOrigin);
    const track = document.getElementById(trackId);
    const thumb = document.getElementById(thumbId);
    function updateThumb() {
        if (!track || !thumb) return;
        const sw = setWidth(); if (!sw) return;
        const pos = ((wrapper.scrollLeft - sw) % sw + sw) % sw;
        const ratio = pos / sw;
        const trackW = track.offsetWidth;
        const thumbW = Math.max(16, trackW / n);
        thumb.style.width = thumbW + 'px';
        thumb.style.left = (ratio * (trackW - thumbW)) + 'px';
    }
    wrapper.addEventListener('scroll', updateThumb, { passive: true });
    window.addEventListener('resize', updateThumb);
    updateThumb();
    wrapper.addEventListener('scroll', () => {
        const sw = setWidth(); if (!sw) return;
        const sl = wrapper.scrollLeft;
        if (sl >= sw * 2) { wrapper.style.scrollBehavior = 'auto'; wrapper.scrollLeft = sl - sw; }
        if (sl < sw) { wrapper.style.scrollBehavior = 'auto'; wrapper.scrollLeft = sl + sw; }
        requestAnimationFrame(() => { wrapper.style.scrollBehavior = 'smooth'; });
    }, { passive: true });
    let down = false, sx, sl2;
    wrapper.addEventListener('mousedown', e => { down = true; wrapper.classList.add('grabbing'); sx = e.pageX; sl2 = wrapper.scrollLeft; wrapper.style.scrollBehavior = 'auto'; });
    wrapper.addEventListener('mouseleave', () => { down = false; wrapper.classList.remove('grabbing'); });
    wrapper.addEventListener('mouseup', () => { down = false; wrapper.classList.remove('grabbing'); wrapper.style.scrollBehavior = 'smooth'; });
    wrapper.addEventListener('mousemove', e => { if (!down) return; e.preventDefault(); wrapper.scrollLeft = sl2 - (e.pageX - sx) * 1.4; });
    let tx, tsl;
    wrapper.addEventListener('touchstart', e => { tx = e.touches[0].pageX; tsl = wrapper.scrollLeft; wrapper.style.scrollBehavior = 'auto'; }, { passive: true });
    wrapper.addEventListener('touchmove', e => { wrapper.scrollLeft = tsl - (e.touches[0].pageX - tx); }, { passive: true });
    wrapper.addEventListener('touchend', () => { wrapper.style.scrollBehavior = 'smooth'; });
}

function initAutoScroll(wrapper, ms) {
    if (!wrapper) return;
    let timer = null, paused = false;
    function oneItemWidth() {
        const item = wrapper.querySelector('.pns-cat-item');
        return item ? item.offsetWidth : 200;
    }
    function step() { if (!paused) { wrapper.style.scrollBehavior = 'smooth'; wrapper.scrollLeft += oneItemWidth(); } }
    function start() { clearInterval(timer); timer = setInterval(step, ms); }
    function stop() { clearInterval(timer); timer = null; }
    wrapper.addEventListener('mouseenter', () => { paused = true; stop(); });
    wrapper.addEventListener('mouseleave', () => { paused = false; start(); });
    wrapper.addEventListener('touchstart', () => { paused = true; stop(); }, { passive: true });
    wrapper.addEventListener('touchend', () => { paused = false; start(); }, { passive: true });
    start();
}

function switchTab(btn, tabId) {
    document.querySelectorAll('.pns-tab').forEach(t => {
        t.classList.remove('active');
        t.setAttribute('aria-selected', 'false');
    });
    document.querySelectorAll('.pns-tab-content').forEach(t => t.classList.remove('active'));
    btn.classList.add('active');
    btn.setAttribute('aria-selected', 'true');
    document.getElementById('tab-' + tabId).classList.add('active');
    optimizeImages(document.getElementById('tab-' + tabId));
}

document.addEventListener('DOMContentLoaded', function () {
    const wrappers = document.querySelectorAll('.block-wrapper');
    const trackIds = ['sb-track-1', 'sb-track-2'];
    const thumbIds = ['sb-thumb-1', 'sb-thumb-2'];
    wrappers.forEach((w, i) => initInfiniteCarousel(w, trackIds[i], thumbIds[i]));

    const allPrev = document.querySelectorAll('.collection-prev');
    const allNext = document.querySelectorAll('.collection-next');
    wrappers.forEach((w, i) => {
        function cw() { const c = w.querySelector('.product-block'); return c ? c.offsetWidth + 12 : 200; }
        if (allPrev[i]) allPrev[i].addEventListener('click', () => { w.style.scrollBehavior = 'smooth'; w.scrollLeft -= cw(); });
        if (allNext[i]) allNext[i].addEventListener('click', () => { w.style.scrollBehavior = 'smooth'; w.scrollLeft += cw(); });
    });

    const colGrid = document.querySelector('#tab-collections .pns-grid');
    if (colGrid) {
        initInfiniteCarousel(colGrid, 'sb-track-col', 'sb-thumb-col');
        initAutoScroll(colGrid, 5000);
    }

    let lastScrollY = window.pageYOffset;
    let isTicking = false;

    function updateHeaderState() {
        const hero = document.querySelector('.hero');
        if (hero) hero.style.opacity = 1 - (window.pageYOffset / 800);

        const header = document.querySelector('header');
        if (!header) {
            isTicking = false;
            return;
        }

        const currentY = window.pageYOffset;
        const scrollingDown = currentY > lastScrollY;

        if (currentY < 10) {
            header.classList.add('at-top');
            header.classList.remove('scrolled', 'scrolling-down');
        } else if (scrollingDown) {
            header.classList.remove('at-top', 'scrolled');
            header.classList.add('scrolling-down');
        } else {
            header.classList.remove('at-top', 'scrolling-down');
            header.classList.add('scrolled');
        }

        lastScrollY = currentY;
        isTicking = false;
    }

    window.addEventListener('scroll', () => {
        if (isTicking) return;
        isTicking = true;
        window.requestAnimationFrame(updateHeaderState);
    }, { passive: true });

    // Set initial state
    const header = document.querySelector('header');
    if (header) header.classList.add('at-top');

    if (typeof initializeWishlistButtons === 'function') initializeWishlistButtons();
    if (typeof updateWishlistCount === 'function') updateWishlistCount();
});
