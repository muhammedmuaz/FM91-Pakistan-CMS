   <!-- Required Js -->
   <script src="{{ asset('/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/pcoded.min.js') }}"></script>

<script>
        $(function(){
        $('a').each(function(){
            if ($(this).prop('href') == window.location.href) {
                $(this).addClass('active'); $(this).parents('li').addClass('active');
            }
        });
    });
/*  
	Load more content with jQuery - May 21, 2013
	(c) 2013 @ElmahdiMahmoud
*/

// $(function () {
//     $(".cards-list .card").slice(0, 3).show();
//     $("#loadMore").on('click', function (e) {
//          e.preventDefault();
//         $(".cards-list .card:hidden").slice(0, 3).slideDown();
//         if ($(".cards-list .card:hidden").length == 0) {
//             $(".cards-list .card").fadeOut('slow');
//         }

//     });
// });

// jQuery(document).ready(function($){
//     $(".cards-list .card").slice(0, 3).show();
//     $("#loadMore").on('click', function (e) {
//          e.preventDefault();
//         $(".cards-list .card:hidden").slice(0, 3).slideDown();
//         if ($(".cards-list .card:hidden").length == 0) {
//             $(".cards-list .card").fadeOut('slow');
//         }

//     });
// }

// );

</script>
</body>

</html>
