$(document).ready(function() {
    $(".button-collapse").sideNav();
});
$(document).ready(function() {
    $('#fullpage').fullpage({
        anchors: ['block1', 'block2', 'block3', 'block4', 'block5'],
        menu: '#menu',
        css3: true,
        scrollingSpeed: 1000,

    });
});
//owl2row plugin
;
(function($, window, document, undefined) {
    Owl2row = function(scope) {
        this.owl = scope;
        this.owl.options = $.extend({}, Owl2row.Defaults, this.owl.options);
        //link callback events with owl carousel here

        this.handlers = {
            'initialize.owl.carousel': $.proxy(function(e) {
                if (this.owl.settings.owl2row) {
                    this.build2row(this);
                }
            }, this)
        };

        this.owl.$element.on(this.handlers);
    };

    Owl2row.Defaults = {
        owl2row: false,
        owl2rowTarget: 'item',
        owl2rowContainer: 'owl2row-item',
        owl2rowDirection: 'utd' // ltr
    };

    //mehtods:
    Owl2row.prototype.build2row = function(thisScope) {

        var carousel = $(thisScope.owl.$element);
        var carouselItems = carousel.find('.' + thisScope.owl.options.owl2rowTarget);

        var aEvenElements = [];
        var aOddElements = [];

        $.each(carouselItems, function(index, item) {
            if (index % 2 === 0) {
                aEvenElements.push(item);
            } else {
                aOddElements.push(item);
            }
        });

        carousel.empty();

        switch (thisScope.owl.options.owl2rowDirection) {
            case 'ltr':
                thisScope.leftToright(thisScope, carousel, carouselItems);
                break;

            default:
                thisScope.upTodown(thisScope, aEvenElements, aOddElements, carousel);
        }

    };

    Owl2row.prototype.leftToright = function(thisScope, carousel, carouselItems) {

        var o2wContainerClass = thisScope.owl.options.owl2rowContainer;
        var owlMargin = thisScope.owl.options.margin;

        var carouselItemsLength = carouselItems.length;

        var firsArr = [];
        var secondArr = [];

        //console.log(carouselItemsLength);

        if (carouselItemsLength % 2 === 1) {
            carouselItemsLength = ((carouselItemsLength - 1) / 2) + 1;
        } else {
            carouselItemsLength = carouselItemsLength / 2;
        }

        //console.log(carouselItemsLength);

        $.each(carouselItems, function(index, item) {


            if (index < carouselItemsLength) {
                firsArr.push(item);
            } else {
                secondArr.push(item);
            }
        });

        $.each(firsArr, function(index, item) {
            var rowContainer = $('<div class="' + o2wContainerClass + '"/>');

            var firstRowElement = firsArr[index];
            firstRowElement.style.marginBottom = owlMargin + 'px';

            rowContainer
                .append(firstRowElement)
                .append(secondArr[index]);

            carousel.append(rowContainer);
        });

    };

    Owl2row.prototype.upTodown = function(thisScope, aEvenElements, aOddElements, carousel) {

        var o2wContainerClass = thisScope.owl.options.owl2rowContainer;
        var owlMargin = thisScope.owl.options.margin;

        $.each(aEvenElements, function(index, item) {

            var rowContainer = $('<div class="' + o2wContainerClass + '"/>');
            var evenElement = aEvenElements[index];

            evenElement.style.marginBottom = owlMargin + 'px';

            rowContainer
                .append(evenElement)
                .append(aOddElements[index]);

            carousel.append(rowContainer);
        });
    };

    /**
     * Destroys the plugin.
     */
    Owl2row.prototype.destroy = function() {
        var handler, property;

        for (handler in this.handlers) {
            this.owl.dom.$el.off(handler, this.handlers[handler]);
        }
        for (property in Object.getOwnPropertyNames(this)) {
            typeof this[property] !== 'function' && (this[property] = null);
        }
    };

    $.fn.owlCarousel.Constructor.Plugins['owl2row'] = Owl2row;
})(window.Zepto || window.jQuery, window, document);
//end of owl2row plugin

//init carousel
$(".owl-carousel").owlCarousel({
    stagePadding: 0,
    loop: false,
    autoplay: false,
    nav: true,
    owl2row: true,
    responsive: {
        0: {
            items: 1,
        },
        480: {
            items: 1,
        },
        660: {
            items: 1,
            owl2row: false,
        },
        960: {
            items: 1,
            owl2row: false,
        },
        1400: {
            items: 1,
            owl2row: false,
        },
        1600: {
            items: 2
        }

    }


});
$(".owl-carousel-two").owlCarousel({
    stagePadding: 0,
    loop: false,
    autoplay: false,
    nav: false,
    owl2row: true,
    responsive: {
        0: {
            items: 1,
        },
        480: {
            items: 1,
        },
        660: {
            items: 1,
            owl2row: false,
        },
        960: {
            items: 1,
            owl2row: false,
        },
        1400: {
            items: 1,
            owl2row: false,
        },
        1600: {
            items: 2
        }

    }


});