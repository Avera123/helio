$('.avTile').hover(function() {
    $('.avFeature').toggleClass('active');
});
$('.firewallTile').hover(function() {
    $('.firewallFeature').toggleClass('active');
});
$('.backupTile').hover(function() {
    $('.backupFeature').toggleClass('active');
});
$('.vulnerabilitiesTile').hover(function() {
    $('.vulnerabilitiesFeature').toggleClass('active');
});
$('.spamfilterTile').hover(function() {
    $('.spamfilterFeature').toggleClass('active');
});
$('.smpTile').hover(function() {
    $('.smpFeature').toggleClass('active');
});
$('.tuneupTile').hover(function() {
    $('.tuneupFeature').toggleClass('active');
});
$('.idpTile').hover(function() {
    $('.idpFeature').toggleClass('active');
});
$('.parentalTile').hover(function() {
    $('.parentalFeature').toggleClass('active');
});

// (function() {
//     var selectors = {
//         nav: '[data-features-nav]',
//         tabs: '[data-features-tabs]',
//         active: '.__active'
//     }
//     var classes = {
//         active: '__active'
//     }
//     $('a', selectors.nav).on('click', function() {
//         var $this = $(this)[0];
//         $(selectors.active, selectors.nav).removeClass(classes.active);
//         $($this).addClass(classes.active);
//         $('div', selectors.tabs).removeClass(classes.active);
//         $($this.hash, selectors.tabs).addClass(classes.active);
//         return false
//     });
// }());
//
// $(".btn-with-icon").on("click", function() {
//     $(".wave-anim").addClass('visible').one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd", function() {
//         $(".wave-anim").removeClass('visible');
//     });
// });