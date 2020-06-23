/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */

let toggle = document.querySelector('#toggle-nav'),
    menu = document.querySelector('#site-navigation'); // aka .nav
    menuVisibility = getComputedStyle(menu).getPropertyValue('--menu-display')
    console.log(menuVisibility);
    
toggle.addEventListener('click', function(e) {
    
    e.preventDefault();
    let menuVisibility = getComputedStyle(menu).getPropertyValue('--menu-display')
    console.log(menuVisibility);

    if (menuVisibility === 'none') {
        console.log('show menu fucntion');
        menu.style.setProperty('--menu-display', 'flex');
    } else {
        console.log('hiding menu function');
        menu.style.setProperty('--menu-display', 'none');
    }
});