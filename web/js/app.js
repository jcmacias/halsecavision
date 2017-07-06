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
    console.log(cartJson);
   var items=[];
    for (x in cartJson) {
        $.get('index.php?r=product/cart',{code : cartJson[x].name}, function(data)
        {
            console.log(data);
            items.push(data);
            console.log(cartJson[x].name);

            $('#p-list').append('<tr><td><div class="prod-img"><img style="width: 20%" src="uploads/'+data.image+'" alt=""></div></td><td><div class="prod-name">'+ data.name+
                '</div></td><td><div class="prod-code">'+data.code+
                '</div></td><td><div class="prod-qty">'+cartJson[x].quantity+'</div></td><td><div class="prod-desc">'+data.description+
                '</div></td></tr>');
        });


    }
    console.log(items);

});






