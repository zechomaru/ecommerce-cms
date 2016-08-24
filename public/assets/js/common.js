var currentoffice = 1;
var officeInterval;
//var menu_cloned;

$(document).ready(function() {


//    menu_cloned = $('#menu-md').eq(0).clone(true);
//    slideshow_clone = $('.slideshow').eq(0).clone();
//
//    $('.slideshow').eq(0).remove();
//    $('#menu-md').eq(0).remove();
//
//    $('.slideshow').eq(1).after(menu_cloned);
//


    /* Search */
    $('.button-search').bind('click', function() {
        url = $('base').attr('href') + 'index.php?route=product/search';

        var search = $('input[name=\'search\']').attr('value');

        if (search) {
            url += '&search=' + encodeURIComponent(search);
        }

        location = url;
    });

    $('#header input[name=\'search\']').bind('keydown', function(e) {
        if (e.keyCode == 13) {
            url = $('base').attr('href') + 'index.php?route=product/search';

            var search = $('input[name=\'search\']').attr('value');

            if (search) {
                url += '&search=' + encodeURIComponent(search);
            }

            location = url;
        }
    });

    $('#toggle-menu').click(function(e){
        $(this).toggleClass('active-navbar');
        $('#nav').slideToggle(400);
    });

    /* Ajax Cart */
    $('#cart > .heading a').live('click', function() {
        $('#cart').addClass('active');

        $('#cart').load('index.php?route=module/cart #cart > *');

        $('#cart').live('mouseleave', function() {
            $(this).removeClass('active');
        });
    });

    /* Mega Menu */
    $('#xmenu ul > li > a + div').each(function(index, element) {
        // IE6 & IE7 Fixes
        if ($.browser.msie && ($.browser.version == 7 || $.browser.version == 6)) {
            var category = $(element).find('a');
            var columns = $(element).find('ul').length;

            $(element).css('width', (columns * 143) + 'px');
            $(element).find('ul').css('float', 'left');
        }

        var menu = $('#menu').offset();
        var dropdown = $(this).parent().offset();

        i = (dropdown.left + $(this).outerWidth()) - (menu.left + $('#menu').outerWidth());

        if (i > 0) {
            $(this).css('margin-left', '-' + (i + 5) + 'px');
        }
    });
    //deja el evento de abrir el menu de la barra lateral con Click en vez de hover
    $('.toggle-menu').click(function(){
        $(this).next('ul').slideToggle(500);
    });
    $('.arrowR ul li ul li a').each(function(index) {
        var clase = $(this).hasClass('active');
        if(clase == true){
            $(this).closest('ul').show();
        }
    });
    // IE6 & IE7 Fixes
    if ($.browser.msie) {
        if ($.browser.version <= 6) {
            $('#column-left + #column-right + #content, #column-left + #content').css('margin-left', '195px');

            $('#column-right + #content').css('margin-right', '195px');

            $('.box-category ul li a.active + ul').css('display', 'block');
        }

        if ($.browser.version <= 7) {
            $('#menu > ul > li').bind('mouseover', function() {
                $(this).addClass('active');
            });

            $('#menu > ul > li').bind('mouseout', function() {
                $(this).removeClass('active');
            });
        }
    }

    $('.success img, .warning img, .attention img, .information img').live('click', function() {
        $(this).parent().fadeOut('slow', function() {
            $(this).remove();
            $('#notification_container').hide();
        });
    });


    $('#content.home map area').mouseover(function() {
        clearInterval(officeInterval);
        $('.offices .office').hide();
        $('#' + $(this).data('office')).show();
    })


    if($('#content.home .offices').size() != 0) {

        $('.offices .office').eq(0).show();
        activateIntervalOffice();
    }

    $('.home .offices .office').mouseover(function() {
        clearInterval(officeInterval);
    })

    $('.home .offices .office').mouseout(function() {
        activateIntervalOffice();
    })


    $('#content.home map area').mouseout(function() {
        console.debug('ass');
        activateIntervalOffice();
    })



    if($('.bxslider').size() > 0) {
        $('.bxslider').bxSlider({
            auto: true,
            controls: false
        });
    }


    //TOGGLE FOOTER
    /*
    $('#up-footer').click(function() {

        $('#footer').fadeToggle(function(){
            if ($('#footer').is(':visible')) {
                $('#up-footer').text('ocultar');
                $('body').delay(400).scrollTo('#anclaje-footer');
            }else{
                $('#up-footer').text('más información');
            };
        });
    })
    */


    $('#toggle-search').click(function(){
        $('#search').slideToggle();
    })

    $('body').on('blur', '.quantity .cantidadProductos', function(e){
        $('#loadingmsg').css('opacity', 1);
        var minimo     = $(this).attr('min'),
            paso       = $(this).attr('step'),
            cantidad   = $(this).val(),
            temp       = 0,
            total      = 0;
        temp = cantidad / minimo;
        total = Math.ceil(temp) * minimo;
        $(this).val(total)
        $(this).parents('form').submit();
    });


});


function activateIntervalOffice() {

        officeInterval = setInterval(function() {

            $('.offices .office').hide(500);
            $('.offices .office').eq(currentoffice).show(500);

            currentoffice++;

            if($('.offices .office').eq(currentoffice).size() == 0) {
                currentoffice = 0;
            }

        }, 2500)
}

function getURLVar(key) {
    var value = [];

    var query = String(document.location).split('?');

    if (query[1]) {
        var part = query[1].split('&');

        for (i = 0; i < part.length; i++) {
            var data = part[i].split('=');

            if (data[0] && data[1]) {
                value[data[0]] = data[1];
            }
        }

        if (value[key]) {
            return value[key];
        } else {
            return '';
        }
    }
}

function addToCart(product_id, quantity) {

//    $('#notification').html('<div class="warning">Carro temporalmente deshabilitado - Luego podrás hacer tus compras en la web de Gobantes</div>');
//  $('#notification_container').show();
//    $('.success').fadeIn('slow');
//  $('html, body').animate({ scrollTop: 0 }, 'slow');
//    return false;

    quantity = typeof(quantity) != 'undefined' ? quantity : 1;

    $.ajax({
        url: 'index.php?route=checkout/cart/add',
        type: 'post',
        data: 'product_id=' + product_id + '&quantity=' + quantity,
        dataType: 'json',
        success: function(json) {
            $('.success, .warning, .attention, .information, .error').remove();

            if (json['redirect']) {
                location = json['redirect'];
            }

            if (json['success']) {
                $('#notification').html('<div class="success" style="display: none;">' + json['success'] + '<img src="catalog/view/theme/default/image/close.png" alt="" class="close" /></div>');
                $('#notification_container').show();
                $('.success').fadeIn('slow');

                $('#cart-total').html(json['total']);

                $('html, body').animate({ scrollTop: 0 }, 'slow');
            }
        }
    });
}
function addToWishList(product_id) {
    $.ajax({
        url: 'index.php?route=account/wishlist/add',
        type: 'post',
        data: 'product_id=' + product_id,
        dataType: 'json',
        success: function(json) {
            $('.success, .warning, .attention, .information').remove();

            if (json['success']) {
                $('#notification').html('<div class="success" style="display: none;">' + json['success'] + '<img src="catalog/view/theme/default/image/close.png" alt="" class="close" /></div>');
                $('#notification_container').show();
                $('.success').fadeIn('slow');

                $('#wishlist-total').html(json['total']);

                $('html, body').animate({ scrollTop: 0 }, 'slow');
            }
        }
    });
}

function addToCompare(product_id) {
    $.ajax({
        url: 'index.php?route=product/compare/add',
        type: 'post',
        data: 'product_id=' + product_id,
        dataType: 'json',
        success: function(json) {
            $('.success, .warning, .attention, .information').remove();

            if (json['success']) {
                $('#notification').html('<div class="success" style="display: none;">' + json['success'] + '<img src="catalog/view/theme/default/image/close.png" alt="" class="close" /></div>');
                $('#notification_container').show();
                $('.success').fadeIn('slow');

                $('#compare-total').html(json['total']);

                $('html, body').animate({ scrollTop: 0 }, 'slow');
            }
        }
    });
}