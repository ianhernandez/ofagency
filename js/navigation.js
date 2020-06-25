/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */


/**
 * Pass in an element and its CSS Custom Property that you want the value of.
 * Optionally, you can determine what datatype you get back.
 *
 * @param {String} propKey
 * @param {HTMLELement} element=document.documentElement
 * @param {String} castAs='string'
 * @returns {*}
 */
const getCSSCustomProp = (propKey, element = document.documentElement, castAs = 'string') => {
    let response = getComputedStyle(element).getPropertyValue(propKey);
  
    // Tidy up the string if there's something to work with
    if (response.length) {
      response = response.replace(/\'|"/g, '').trim();
    }
  
    // Convert the response into a whatever type we wanted
    switch (castAs) {
      case 'number':
      case 'int':
        return parseInt(response, 10);
      case 'float':
        return parseFloat(response, 10);
      case 'boolean':
      case 'bool':
        return response === 'true' || response === '1';
    }
  
    // Return the string response by default
    return response;
  };

  
let toggle = document.querySelector('#toggle-nav'),
    menu = document.querySelector('#site-navigation'); // aka .nav
    
toggle.addEventListener('click', function(e) {
    e.preventDefault();
    if (getCSSCustomProp('--menu-display', menu) == 'none') {
        console.log('value is none');
        menu.style.setProperty('--menu-display', 'flex');
        console.log('value has been set to flex');
    }

    else if (getCSSCustomProp('--menu-display', menu) == 'flex') {
        console.log('value is flex');
        menu.style.setProperty('--menu-display', 'none');
        console.log('value has been set to none');
    }

});