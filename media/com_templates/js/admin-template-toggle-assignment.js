/**
* PLEASE DO NOT MODIFY THIS FILE. WORK ON THE ES6 VERSION.
* OTHERWISE YOUR CHANGES WILL BE REPLACED ON THE NEXT BUILD.
**/

/**
 * @copyright  (C) 2019 Open Source Matters, Inc. <https://www.joomla.org>
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */
Joomla = window.Joomla || {};

(function (Joomla) {
  Joomla.toggleAll = function () {
    var checkBoxes = [].slice.call(document.querySelectorAll('.chk-menulink'));
    checkBoxes.forEach(function (checkBox) {
      checkBox.checked = !checkBox.checked;
    });
  };

  Joomla.toggleMenutype = function (a) {
    var checkBox = [].slice.call(document.getElementsByClassName("menutype-".concat(a)));
    checkBox.forEach(function (element) {
      element.checked = !element.checked;
    });
  };
})(Joomla);