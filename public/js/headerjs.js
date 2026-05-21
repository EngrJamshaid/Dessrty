
        // Search toggle
        const searchBtn = document.getElementById('searchBtn');
        const searchBar = document.getElementById('searchBar');
        let open = false;
        searchBtn.addEventListener('click', () => {
            open = !open;
            searchBar.classList.toggle('open', open);
            searchBtn.querySelector('i').className = open ? 'fa-solid fa-xmark' : 'fa-solid fa-magnifying-glass';
            if (open) searchBar.querySelector('input').focus();
        });

        // Desktop hover dropdowns
        if (window.innerWidth >= 992) {
            document.querySelectorAll('.dropdown').forEach(dd => {
                dd.addEventListener('mouseenter', () => {
                    dd.querySelector('.dropdown-menu').classList.add('show');
                    dd.querySelector('.dropdown-toggle').setAttribute('aria-expanded', 'true');
                });
                dd.addEventListener('mouseleave', () => {
                    dd.querySelector('.dropdown-menu').classList.remove('show');
                    dd.querySelector('.dropdown-toggle').setAttribute('aria-expanded', 'false');
                });
            });
        }


        // footer
            const btn = document.getElementById('scrollTop');
    window.addEventListener('scroll', () => {
        btn.classList.toggle('show', window.scrollY > 200);
    });
    btn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
   