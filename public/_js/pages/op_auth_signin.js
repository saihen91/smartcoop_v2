/*
 *  Document   : op_auth_signin.js
 *  Author     : pixelcave
 *  Description: Custom JS code used in Sign In Page
 */

class pageAuthSignIn {
  /*
   * Init Sign In Form Validation, for more examples you can check out https://github.com/jzaefferer/jquery-validation
   *
   */
  static initValidation() {
    // Load default options for jQuery Validation plugin
    Dashmix.helpers('jq-validation');

    // Init Form Validation
    jQuery('.js-validation-signin').validate({
      rules: {
        'login-username': {
          required: true,
          minlength: 3
        },
        'login-password': {
          required: true,
          minlength: 5
        }
      },
      messages: {
        'login-username': {
          required: 'Sila masukkan username',
          minlength: 'Your username must consist of at least 3 characters'
        },
        'login-password': {
          required: 'Sila masukkan password',
          minlength: 'Your password must be at least 5 characters long'
        }
      }
    });
  }

  /*
   * Init functionality
   *
   */
  static init() {
    this.initValidation();
  }
}

// Initialize when page loads
Dashmix.onLoad(() => pageAuthSignIn.init());