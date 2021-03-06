/**
* PLEASE DO NOT MODIFY THIS FILE. WORK ON THE ES6 VERSION.
* OTHERWISE YOUR CHANGES WILL BE REPLACED ON THE NEXT BUILD.
**/

/**
 * @copyright  (C) 2020 Open Source Matters, Inc. <https://www.joomla.org>
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */
(function (document, Joomla) {
  'use strict';

  var copyToClipboardFallback = function copyToClipboardFallback(input) {
    input.focus();
    input.select();

    try {
      var copy = document.execCommand('copy');

      if (copy) {
        Joomla.renderMessages({
          message: [Joomla.JText._('PLG_USER_TOKEN_COPY_SUCCESS')]
        });
      } else {
        Joomla.renderMessages({
          error: [Joomla.JText._('PLG_USER_TOKEN_COPY_FAIL')]
        });
      }
    } catch (err) {
      Joomla.renderMessages({
        error: [err]
      });
    }
  };

  var copyToClipboard = function copyToClipboard() {
    var button = document.getElementById('token-copy');
    button.addEventListener('click', function (_ref) {
      var currentTarget = _ref.currentTarget;
      var input = currentTarget.parentNode.previousElementSibling;

      if (!navigator.clipboard) {
        copyToClipboardFallback(input);
        return;
      }

      navigator.clipboard.writeText(input.value).then(function () {
        Joomla.renderMessages({
          message: [Joomla.JText._('PLG_USER_TOKEN_COPY_SUCCESS')]
        });
      }, function () {
        Joomla.renderMessages({
          error: [Joomla.JText._('PLG_USER_TOKEN_COPY_FAIL')]
        });
      });
    });
  };

  var onBoot = function onBoot() {
    copyToClipboard();
    document.removeEventListener('DOMContentLoaded', onBoot);
  };

  document.addEventListener('DOMContentLoaded', onBoot);
})(document, Joomla);