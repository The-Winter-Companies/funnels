
// $.dotFollow = function(){
//     var dot = $('<div class="dot-follow"></div>');
//     var fieldset = $("fieldset:first-child");
//     var delay = false;
//     if (fieldset.is(":visible") && $(window).width() > 1024) {
//         $("body").append(dot);
//     }
//     fieldset.on("change", function() {
//         if (fieldset.is(":visible")) {
//             dot.detach();
//         }
//     });
//
//     fieldset.on("mouseenter", function() {
//         $(document).on("mousemove", function(e) {
//             if (!delay) {
//                 dot.stop(true, true).animate({
//                     top: e.clientY + 10,
//                     left: e.clientX + 10,
//                     rotate: Math.floor(Math.random() * 360) + 'deg'
//                 }, {
//                     duration: 700,
//                 });
//                 delay = true;
//                 setTimeout(function() {
//                     delay = false;
//                 }, 30);
//             }
//         });
//     });
//
//     fieldset.on("mouseleave", function() {
//         $(document).off("mousemove");
//     });
//
//     $(".h-item label").each(function() {
//         $(this).on("mouseenter", function() {
//             if (!dot.hasClass("is-active")) {
//                 dot.addClass("is-active");
//             }
//         });
//         $(this).on("mouseleave", function() {
//             if (dot.hasClass("is-active")) {
//                 dot.removeClass("is-active");
//             }
//         });
//     });
// }

jQuery(document).ready(function () {




});


