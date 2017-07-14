/**
 * Created by Julio Cesar on 7/1/2017.
 */
simpleCart({
    cartColumns: [
        { attr: "name" , label:false} ,
        // { attr: "price" , label: "Price", view: 'currency' } ,
        { view: "decrement" , label: false , text: "<i class='fa fa-arrow-circle-down'></i>" } ,
        { attr: "quantity" , label: false } ,
        { view: "increment" , label: false , text: "<i class='fa fa-arrow-circle-up'></i>" } ,
        // { attr: "total" , label: "SubTotal", view: 'currency' } ,
        { view: "remove" , text: "<i class='fa fa-trash'></i>" , label: false }
    ],

});
$(document).ready(function () {
    var cartStr= localStorage.simpleCart_items;

    cartJson =  JSON.parse(cartStr);
   var items=[];
    for (x in cartJson) {
        $.get('index.php?r=product/cart',{code : cartJson[x].name}, function(data)
        {

            items.push(data);

            $('#p-list').append('<tr><td><div class="prod-img"><img style="width: 20%" src="uploads/'+data.image+'" alt=""></div></td><td><div class="prod-name">'+ data.name+
                '</div></td><td><div class="prod-code">'+data.code+'</div></td><td><div class="prod-qty">'+cartJson[x].quantity+'</div></td><td><div class="prod-desc">'+data.description+'</div></td></tr>');
        });


    }


    // console.log(pur);
    $('#w0').on('submit', function (e) {
        e.preventDefault();
        if(items!=''){
            var pur = JSON.stringify(items);
            $('#purchase-product_code').val(pur);
        }
        this.submit();

        if(simpleCart.items().length == 0)
        {
            alert("Yor List is empty please contact whit us by link Contact");
        }
        else {
            if ($('#purchase-phone').val() == '' || $('#purchase-customer_name').val() == ''
            || $('#purchase-email').val() == '' || validateEmail($('#purchase-email').val())==false) {
                return true;
            }else {
                simpleCart.empty();
            }

        }
    });

    function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if(re.test(email)){
            return true;
        }
        return false;
    }



});






