/**
* PLEASE DO NOT MODIFY THIS FILE. WORK ON THE ES6 VERSION.
* OTHERWISE YOUR CHANGES WILL BE REPLACED ON THE NEXT BUILD.
**/

/**
 * @copyright  (C) 2018 Open Source Matters, Inc. <https://www.joomla.org>
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */
(function (document) {
  var batchMenu = document.getElementById('batch-menu-id');
  var batchCopyMove = document.getElementById('batch-copy-move');
  var batchSelector;

  var onChange = function onChange() {
    if (batchSelector.value !== 0 || batchSelector.value !== '') {
      batchCopyMove.classList.remove('hidden');
    } else {
      batchCopyMove.classList.add('hidden');
    }
  };

  if (batchMenu) {
    batchSelector = batchMenu;
  }

  if (batchCopyMove) {
    batchSelector.addEventListener('change', onChange);
  }
})(document);