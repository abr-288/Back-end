// Importer jQuery
import $ from 'jquery';
window.$ = window.jQuery = $;

// Importer Bootstrap
import 'bootstrap';

// Importer Owl Carousel
import 'owl.carousel/dist/owl.carousel.min';
import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel/dist/assets/owl.theme.default.css';

// Importer meanmenu depuis le fichier local
import './jquery.meanmenu.min';
import '../css/meanmenu.css';

// Importer le loader
import './components/loader';

// Importer le gestionnaire d'images
import './components/image-handler';
import '../css/components/image-fallback.css';

// Importer moment et datetimepicker
import moment from 'moment';
import 'tempusdominus-bootstrap-4';

// Déclarer moment comme variable globale
window.moment = moment;

// Initialisation des composants
$(document).ready(function() {
    // Initialisation du menu meanmenu
    if ($.fn.meanmenu) {
        $('nav').meanmenu({
            meanScreenWidth: "1199",
            meanMenuContainer: '.mobile-menu',
            meanMenuClose: 'X',
            meanMenuOpen: '<span></span><span></span><span></span>',
            meanMenuCloseSize: '18px',
            meanExpandableChildren: true,
            meanMenuContainer: '.mobile-menu',
            onePage: true
        });
    }

    // Initialisation des datepickers
    if ($.fn.datetimepicker) {
        $('.datetimepicker').datetimepicker({
            format: 'DD/MM/YYYY',
            icons: {
                time: 'fa fa-clock',
                date: 'fa fa-calendar',
                up: 'fa fa-chevron-up',
                down: 'fa fa-chevron-down',
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-calendar-check-o',
                clear: 'fa fa-trash',
                close: 'fa fa-times'
            }
        });
    }

    // Initialisation d'Owl Carousel pour le slider principal
    if ($.fn.owlCarousel) {
        $('.banner-slider.owl-carousel').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 1000,
            items: 1,
            navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
            responsive: {
                0: {
                    nav: false
                },
                768: {
                    nav: true
                }
            }
        });

        // Initialisation des carrousels secondaires
        $('.place-slider.owl-carousel, .image-slide.owl-carousel').owlCarousel({
            loop: true,
            margin: 15,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                576: {
                    items: 2
                },
                768: {
                    items: 3,
                    nav: true
                },
                1200: {
                    items: 4
                }
            }
        });
    }

    // Initialisation des tooltips Bootstrap
    if ($.fn.tooltip) {
        $('[data-bs-toggle="tooltip"]').tooltip();
    }

    // Initialisation des popovers Bootstrap
    if ($.fn.popover) {
        $('[data-bs-toggle="popover"]').popover();
    }

    // Initialisation des onglets Bootstrap
    $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {
        // Redémarrer les carrousels lors du changement d'onglet
        $('.owl-carousel').trigger('refresh.owl.carousel');
    });
});

// Gestion du menu mobile
$(window).on('resize', function() {
    if ($(window).width() > 991) {
        $('.mobile-nav').removeClass('menu-open');
    }
});
