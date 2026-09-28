const menuButton = document.querySelector('[data-menu-button]');
const mobileMenu = document.querySelector('[data-menu-mobile]');

menuButton?.addEventListener('click', () => {
	const isOpen = menuButton.getAttribute('aria-expanded') === 'true';

	menuButton.setAttribute('aria-expanded', String(!isOpen));
	mobileMenu?.classList.toggle('hidden', isOpen);
});
