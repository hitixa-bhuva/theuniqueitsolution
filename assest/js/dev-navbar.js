
const menuButton = document.querySelector('.MuiIconButton-root-nav');
const sidebarOverlay = document.querySelector('.sidebar-overlay');
const body = document.body;
const submenuLinks = document.querySelectorAll('.has-submenu > a');

menuButton.addEventListener('click', () => {
    body.classList.toggle('show-sidebar');
    sidebarOverlay.classList.toggle('active');
});

sidebarOverlay.addEventListener('click', () => {
    body.classList.remove('show-sidebar');
    sidebarOverlay.classList.remove('active');
});

// Handle submenu open/close
submenuLinks.forEach(link => {
    link.addEventListener('click', (e) => {
        e.preventDefault(); // prevent page jump
        const parentLi = link.parentElement;

        // First, close all other open submenus
        document.querySelectorAll('.has-submenu').forEach(item => {
            if (item !== parentLi) {
                item.classList.remove('open');
            }
        });

        // Toggle current submenu
        parentLi.classList.toggle('open');
    });
});