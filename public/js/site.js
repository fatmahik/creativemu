document.addEventListener('DOMContentLoaded',()=>{const b=document.querySelector('.toggle'),n=document.querySelector('.header nav');b?.addEventListener('click',()=>{const open=n.classList.toggle('open');b.setAttribute('aria-expanded',String(open));});document.querySelectorAll('.navdrop-button').forEach(btn=>btn.addEventListener('click',()=>{const box=btn.closest('.navdrop');const open=box.classList.toggle('open');btn.setAttribute('aria-expanded',String(open));}));document.addEventListener('click',e=>{document.querySelectorAll('.navdrop.open').forEach(box=>{if(!box.contains(e.target)){box.classList.remove('open');box.querySelector('.navdrop-button')?.setAttribute('aria-expanded','false');}})});});

// CREATIVEMU-HOME-POPUP-START
document.addEventListener('DOMContentLoaded', function () {
    const popup = document.getElementById('promoPopup');

    if (!popup) return;

    const closeButton = document.getElementById('closePromo');
    const laterButton = document.getElementById('promoLater');
    const contactButton = document.getElementById('promoContact');

    function closePromo() {
        popup.classList.remove('show');
        popup.setAttribute('aria-hidden', 'true');
        sessionStorage.setItem('creativemuPromoClosed', 'yes');
    }

    function openPromo() {
        if (sessionStorage.getItem('creativemuPromoClosed') === 'yes') return;

        popup.classList.add('show');
        popup.setAttribute('aria-hidden', 'false');
    }

    setTimeout(openPromo, 4000);

    closeButton?.addEventListener('click', closePromo);
    laterButton?.addEventListener('click', closePromo);

    popup.addEventListener('click', function (event) {
        if (event.target === popup) closePromo();
    });

    contactButton?.addEventListener('click', closePromo);

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape' && popup.classList.contains('show')) {
            closePromo();
        }
    });
});
// CREATIVEMU-HOME-POPUP-END

