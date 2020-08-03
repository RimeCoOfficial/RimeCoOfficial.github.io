// Redirect via Query

var urlParams = new URLSearchParams(window.location.search);
var redirect = urlParams.get('redirect');

// if (redirect == null)
//     redirect = '/dashboard';

if (redirect != null)
    $(function() {
        setTimeout(function () {
            window.location = redirect;
        }, 1000);
    });
