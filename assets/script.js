let previousScrollPosition = 0;
let navigationBarShown = false;
let navigationPressed = false;
let navigationDrawerOpened = false;

function toggleNavigationDrawer() {
	navigationDrawerOpened = !navigationDrawerOpened;
	renderNavigationDrawer();
}

function onNavigationClick() {
	navigationDrawerOpened = false;
	navigationPressed = true;
	renderNavigationDrawer();
}

function renderNavigationBar() {
	const navigationNode = document.getElementById('navigation');

	if (navigationBarShown) {
		navigationNode.classList.remove('hidden');
	} else {
		navigationNode.classList.add('hidden');
	}
}

function renderNavigationDrawer() {
	const drawerNode = document.getElementById('navigation-drawer');

	if (!navigationDrawerOpened) {
		drawerNode.classList.remove('open');
	} else {
		drawerNode.classList.add('open');
	}
}

document.getElementById('navigation-toggler').addEventListener('click', function() {
	toggleNavigationDrawer();
	renderNavigationDrawer();
});

document.getElementById('navigation-drawer').addEventListener('click', function() {
	onNavigationClick()
});

addEventListener('scroll', function() {
	const currentScrollPosition = window.pageYOffset || document.documentElement.scrollTop;

	if (currentScrollPosition > previousScrollPosition) {
		navigationBarShown = false;
	} else {
		if (navigationPressed) {
			navigationBarShown = false;
			setTimeout(() => {
				navigationPressed = false;
			}, 500);
		} else {
			navigationBarShown = true;
		}
	}

	renderNavigationBar();
	renderNavigationDrawer();

	previousScrollPosition = currentScrollPosition;
});
