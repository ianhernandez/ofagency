/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */

let toggle = document.querySelector('#toggle-nav'),
    menu = document.querySelector('#site-navigation'); // aka .nav


toggle.addEventListener('click', function(e) {
    console.log('toggle nav clicked');
    console.log(getComputedStyle(menu).getPropertyValue('--menu-display'));
    e.preventDefault();
    


    
    if (menu.classList.contains('hidden')) {
        menu.classList.remove('hidden');
    } else {
        menu.classList.add('hidden');
    }
});