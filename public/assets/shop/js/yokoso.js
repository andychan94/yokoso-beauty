(function ($) {
    'use strict';
    $("#price .field .ui.label").remove();

    var priceMinEl = $("#price_min_price");
    var priceMinVal = priceMinEl.val();
    if ($.trim(priceMinVal).length > 0) {
        priceMinEl.val(parseFloat(priceMinVal.replace(',', '.')));
    }

    var priceMaxEl = $("#price_max_price");
    var priceMaxVal = priceMaxEl.val();
    if ($.trim(priceMaxVal).length > 0) {
        priceMaxEl.val(parseFloat(priceMaxVal.replace(',', '.')));
    }

    $('#yokoso-top-search').dropdown();
    $('#yokoso-top-search-input').on('click touchend', function (e) {
        e.stopPropagation();
    });

    $('.yokoso-add-to-cart').on('click touchend', function (e) {
        var innerModal = "#yokoso-modal-"+$( this ).attr('id');
        $(innerModal).modal('show');
    });
    $('.ui.sidebar').sidebar({
        context: $('.bottom.segment')
    })
        .sidebar('attach events', '#haha');

    $('#yokoso-sidebar')
        .sidebar({
            context: $('#yokoso-bottom-segment')
        })
        .sidebar('attach events', '#yokoso-sidebar-button')
    ;

    var mobileSearchEl = $("#mobile-name");
    var otherSearchEl = $("#other-name");
    $(mobileSearchEl).on('input', function() {
        otherSearchEl.val($(this).val());
    });
    $(otherSearchEl).on('input', function() {
        mobileSearchEl.val($(this).val());
    });

})(jQuery);
