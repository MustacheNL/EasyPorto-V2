<footer id="footer"
        class="u-footer--bottom-sticky g-bg-white g-color-gray-dark-v6 g-brd-top g-brd-gray-light-v7 g-pa-20">
    <div class="row align-items-center">
        <div class="col-md-4 g-mb-10 g-mb-0--md">
            <ul class="list-inline text-center text-md-left mb-0">
                <li class="list-inline-item">
                    <a class="g-color-gray-dark-v6 g-color-lightblue-v3--hover"
                       href="https://github.com/MustacheNL/EasyPorto-V2">FAQ</a>
                </li>
                <li class="list-inline-item">
                    <span class="g-color-gray-dark-v6">|</span>
                </li>
                <li class="list-inline-item">
                    <a class="g-color-gray-dark-v6 g-color-lightblue-v3--hover"
                       href="https://github.com/MustacheNL/EasyPorto-V2">Support</a>
                </li>
                <li class="list-inline-item">
                    <span class="g-color-gray-dark-v6">|</span>
                </li>
                <li class="list-inline-item">
                    <a class="g-color-gray-dark-v6 g-color-lightblue-v3--hover"
                       href="https://github.com/MustacheNL/EasyPorto-V2">Contact Nyma</a>
                </li>
            </ul>
        </div>

        <div class="col-md-4 g-mb-10 g-mb-0--md">
            <ul class="list-inline g-font-size-16 text-center mb-0">
                <li class="list-inline-item g-mx-10">
                    <a href="https://github.com/MustacheNL/EasyPorto-V2/"
                       class="g-color-black g-color-lightblue-v3--hover">
                        <i class="fa fa-github"></i>
                    </a>
                </li>
                <li class="list-inline-item g-mx-10">
                    <a href="https://twitter.com/Nymatjeuh"
                       class="g-color-twitter g-color-lightblue-v3--hover">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
            </ul>
        </div>

        <div class="col-md-4 text-center text-md-right">
            <small class="d-block g-font-size-default">&copy; 2018 Nyma Dolatkhahnejad - Alle rechten
                voorbehouden. Mede mogelijk gemaakt door Unfiy (template) en PHP7 <span style="color: red;">♥</span>
            </small>
        </div>
    </div>
</footer>
</div>
</div>
</main>

<script src="../../lib/javascript/ase/jquery/jquery.min.js"></script>
<script src="../../lib/javascript/ase/jquery-migrate/jquery-migrate.min.js"></script>

<script src="../../lib/javascript/ase/popper.min.js"></script>
<script src="../../lib/javascript/ase/bootstrap/bootstrap.min.js"></script>

<script src="../../lib/javascript/ase/cookiejs/jquery.cookie.js"></script>

<script src="../../lib/javascript/ase/jquery-ui/ui/widget.js"></script>
<script src="../../lib/javascript/ase/jquery-ui/ui/version.js"></script>
<script src="../../lib/javascript/ase/jquery-ui/ui/keycode.js"></script>
<script src="../../lib/javascript/ase/jquery-ui/ui/position.js"></script>
<script src="../../lib/javascript/ase/jquery-ui/ui/unique-id.js"></script>
<script src="../../lib/javascript/ase/jquery-ui/ui/safe-active-element.js"></script>

<script src="../../lib/javascript/ase/jquery-ui/ui/widgets/menu.js"></script>
<script src="../../lib/javascript/ase/jquery-ui/ui/widgets/mouse.js"></script>

<script src="../../lib/javascript/ase/jquery-ui/ui/widgets/datepicker.js"></script>

<script src="../../lib/javascript/ase/appear.js"></script>
<script src="../../lib/javascript/ase/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="../../lib/javascript/ase/flatpickr/dist/js/flatpickr.min.js"></script>
<script src="../../lib/javascript/ase/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../../lib/javascript/ase/chartist-js/chartist.min.js"></script>
<script src="../../lib/javascript/ase/chartist-js-tooltip/chartist-plugin-tooltip.js"></script>
<script src="../../lib/javascript/ase/fancybox/jquery.fancybox.min.js"></script>

<script src="../../lib/javascript/ase/hs.core.js"></script>
<script src="../../lib/javascript/ase/components/hs.side-nav.js"></script>
<script src="../../lib/javascript/ase/helpers/hs.hamburgers.js"></script>
<script src="../../lib/javascript/ase/components/hs.range-datepicker.js"></script>
<script src="../../lib/javascript/ase/components/hs.datepicker.js"></script>
<script src="../../lib/javascript/ase/components/hs.dropdown.js"></script>
<script src="../../lib/javascript/ase/components/hs.scrollbar.js"></script>
<script src="../../lib/javascript/ase/components/hs.area-chart.js"></script>
<script src="../../lib/javascript/ase/components/hs.donut-chart.js"></script>
<script src="../../lib/javascript/ase/components/hs.bar-chart.js"></script>
<script src="../../lib/javascript/ase/helpers/hs.focus-state.js"></script>
<script src="../../lib/javascript/ase/components/hs.popup.js"></script>

<script src="../../lib/javascript/ase/custom.js"></script>

<script>
    $(document).on('ready', function () {
        $('.js-select').selectpicker();

        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        $.HSCore.components.HSAreaChart.init('.js-area-chart');
        $.HSCore.components.HSDonutChart.init('.js-donut-chart');
        $.HSCore.components.HSBarChart.init('.js-bar-chart');

        $.HSCore.components.HSSideNav.init('.js-side-nav', {
            afterOpen: function () {
                setTimeout(function () {
                    $.HSCore.components.HSAreaChart.init('.js-area-chart');
                    $.HSCore.components.HSDonutChart.init('.js-donut-chart');
                    $.HSCore.components.HSBarChart.init('.js-bar-chart');
                }, 400);
            },
            afterClose: function () {
                setTimeout(function () {
                    $.HSCore.components.HSAreaChart.init('.js-area-chart');
                    $.HSCore.components.HSDonutChart.init('.js-donut-chart');
                    $.HSCore.components.HSBarChart.init('.js-bar-chart');
                }, 400);
            }
        });

        $.HSCore.components.HSRangeDatepicker.init('#rangeDatepicker, #rangeDatepicker2, #rangeDatepicker3');

        $.HSCore.components.HSDatepicker.init('#datepicker', {
            dayNamesMin: [
                'ZO',
                'MA',
                'DI',
                'WO',
                'DO',
                'VR',
                'ZA'
            ]
        });

        $.HSCore.components.HSRangeDatepicker.init('#dateFrom, #dateTo');

        $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {dropdownHideOnScroll: false});

        $.HSCore.components.HSScrollBar.init($('.js-custom-scroll'));

        $.HSCore.components.HSPopup.init('.js-fancybox', {
            btnTpl: {
                smallBtn: '<button data-fancybox-close class="btn g-pos-abs g-top-25 g-right-30 g-line-height-1 g-bg-transparent g-font-size-16 g-color-gray-light-v3 g-brd-none p-0" title=""><i class="hs-admin-close"></i></button>'
            }
        });
    });
</script>
</body>