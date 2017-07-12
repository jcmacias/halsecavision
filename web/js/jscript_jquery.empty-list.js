/**
 * Created by glenda on 7/12/2017.
 */

$(document).ready(function () {

    $('.list_empty').on('click', function () {
        alert("Yor List is empty please contact whit us by link Contact");
        if(simpleCart.items().length == 0)
        {
            alert("Yor List is empty please contact whit us by link Contact");
        }
        else {
            if ($('.purchase-form').find('.has-error').length) {
               return;
            }
            else {
                simpleCart.empty();
            }

        }

    });

})
