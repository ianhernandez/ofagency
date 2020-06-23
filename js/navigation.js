/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */

let toggle = document.querySelector('#toggle-nav'),
    sidebar = document.querySelector('#site-navigation');

toggle.addEventListener('click', function(e) {
    e.preventDefault();
    if (sidebar.classList.contains('hidden')) {
        sidebar.classList.remove('hidden');
    } else {
        sidebar.classList.add('hidden');
    }
});