(function () {
    'use strict';

    var nav = document.getElementById('menu-principal');
    var toggle = document.querySelector('.nav-toggle');
    if (!nav || !toggle) return;

    function setOpen(open) {
        nav.classList.toggle('is-open', open);
        toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
        toggle.setAttribute('aria-label', open ? 'Fechar menu' : 'Abrir menu');
    }

    toggle.addEventListener('click', function () {
        setOpen(!nav.classList.contains('is-open'));
    });

    nav.querySelectorAll('a[href^="#"]').forEach(function (link) {
        link.addEventListener('click', function () {
            if (window.matchMedia('(max-width: 768px)').matches) {
                setOpen(false);
            }
        });
    });

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') setOpen(false);
    });

    // Validação leve no cliente (o PHP valida de novo)
    var form = document.querySelector('.contact-form');
    if (form) {
        form.addEventListener('submit', function (e) {
            var nome = form.querySelector('#nome');
            var email = form.querySelector('#email');
            var msg = form.querySelector('#mensagem');
            if (!nome || !email || !msg) return;

            var valid = nome.value.trim() && email.value.trim() && msg.value.trim();
            if (!valid) {
                e.preventDefault();
                msg.focus();
            }
        });
    }
})();
