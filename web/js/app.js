/**
 * Created by Julio Cesar on 7/1/2017.
 */
simpleCart({
    cartColumns: [
        { attr: "name" , label:false} ,
        // { attr: "price" , label: "Price", view: 'currency' } ,
        { view: "decrement" , label: false , text: "-" } ,
        { attr: "quantity" , label: false } ,
        { view: "increment" , label: false , text: "+" } ,
        // { attr: "total" , label: "SubTotal", view: 'currency' } ,
        { view: "remove" , text: "Remove" , label: false }
    ]
});