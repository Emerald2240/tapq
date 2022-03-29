<script src="luckmoshy-bootstrap-pagination/js/jqueryslim.js"></script>
                                <script src="luckmoshy-bootstrap-pagination/js/poppermin.js"></script>
                                <!-- <script src="luckmoshy-bootstrap-pagination/js/bootstrapmin.js"></script> -->
                                <script src="luckmoshy-bootstrap-pagination/js/luckmoshyJqueryPagnation.js"></script>
                                <script>
                                    $('#luckmoshy').luckmoshyPagination({
                                        totalPages: <?php echo $_SESSION['exam']['number_of_questions'] ?>,
                                        // the current page that show on start
                                        startPage: 1,

                                        // maximum visible pages
                                        visiblePages: 10,

                                        initiateStartPageClick: true,

                                        // template for pagination links
                                        href: false,

                                        // variable name in href template for page number
                                        hrefVariable: '{{number}}',

                                        // Text labels
                                        first: 'First',
                                        prev: '<<',
                                        next: '>>',
                                        last: 'Last',

                                        // carousel-style pagination
                                        loop: true,

                                        // callback function
                                        onPageClick: function(event, page) {
                                            $('.page-active').removeClass('page-active');
                                            $('#container-pagnation' + page).addClass('page-active');
                                        },

                                        // pagination Classes
                                        paginationClass: 'pagination',
                                        nextClass: 'next',
                                        prevClass: 'prev',
                                        lastClass: 'last',
                                        firstClass: 'first',
                                        pageClass: 'page-item ',
                                        activeClass: 'active',
                                        disabledClass: 'disabled'

                                    });
                                </script>