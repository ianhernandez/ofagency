/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */

let toggle = document.querySelector('#toggle-nav'),
    menu = document.querySelector('#site-navigation'); // aka .nav


toggle.addEventListener('click', function(e) {
    e.preventDefault();
    let menuVisibility = getComputedStyle(menu).getPropertyValue('--menu-display')
    console.log(menuVisibility);

    if (menuVisibility == 'none') {
        console.log('menuVisibility is checked and it equals none');
        menu.style.setProperty('--menu-display', 'flex');
    } else {
        console.log('menuVisibility is checked and it equals not none');
        menu.style.setProperty('--menu-display', 'none');
    }
});