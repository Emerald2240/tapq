   <!-- Pajinate custom scripts include -->
<script src="js/jquery.pajinate.js"></script>
<script src="vendor\pajinate_jquery.js"></script>
   
   <script type="text/javascript">
        $(document).ready(function() {
            $('#paging_container1').pajinate();
        });

        $(document).ready(function() {
            $('#paging_container2').pajinate();
        });

        $(document).ready(function() {
            $('#paging_container3').pajinate({
                items_per_page: 5,
                item_container_id: '.alt_content',
                nav_panel_id: '.alt_page_navigation'

            });
        });

        $(document).ready(function() {
            $('#paging_container4').pajinate();
        });

        $(document).ready(function() {
            $('#paging_container5').pajinate({
                nav_label_first: '<<',
                nav_label_last: '>>',
                nav_label_prev: '<',
                nav_label_next: '>'
            });
        });

        $(document).ready(function() {
            $('#paging_container6').pajinate({
                start_page: 2,
                items_per_page: 5
            });
        });

        $(document).ready(function() {
            $('#paging_container7').pajinate({
                num_page_links_to_display: 3,
                items_per_page: 6
            });
        });

        $(document).ready(function() {
            $('#paging_container8').pajinate({
                num_page_links_to_display: 3,
                items_per_page: 6
            });
        });

        $(document).ready(function() {
            $('#paging_container9').pajinate({
                num_page_links_to_display: 3,
                items_per_page: 6,
                wrap_around: true,
                show_first_last: false
            });
        });

        $(document).ready(function() {
            $('#paging_container10').pajinate({
                items_per_page: 6,
                abort_on_small_lists: true
            });
        });

        $(document).ready(function() {
            $('#paging_container11').pajinate();
        });
    </script>