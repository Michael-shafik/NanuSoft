$(document).ready(function(){

    //Price Bundles
    $(".add-price-Bundles").on('click',function(e){
        e.preventDefault();
        const unitFrom = $(".unit-from").val(),
            unitTo = $(".unit-to").val(),
            unitPrice = $(".unit-price").val(),
            fee = $(".fee").val();
        const html = `
                <tr id="priceBundles-row">
                <td><input type="text" class="form-control" name="unit-from[]" value="${unitFrom}"></td>
                <td><input type="text" class="form-control" name="unit-to[]" value="${unitTo}"></td>
                <td><input type="text" class="form-control" name="unit-price[]" value="${unitPrice}"></td>
                <td><input type="text" class="form-control" name="fee[]" value="${fee}"></td>
                <td><button class="btn btn-danger btn-sm Bundles-delete-row"><i class="fa fa-trash"></i>Delete</button></td>
                </tr> `;
        $('.priceBundle-table').append(html);

    });


    //Remove Product BTN
    $('body').on('click','.Bundles-delete-row',function(e){
        e.preventDefault();
        $(this).closest('tr').remove();
    });// end of remove product
});