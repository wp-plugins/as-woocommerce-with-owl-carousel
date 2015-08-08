function selectText(e){if(document.selection){var a=document.body.createTextRange();a.moveToElementText(document.getElementById(e)),a.select()}else if(window.getSelection){var a=document.createRange();a.selectNode(document.getElementById(e)),window.getSelection().addRange(a)}}jQuery(document).ready(function(e){e(".as_woo_owl_save_conf span").click(function(){e(".as_woo_owl_save_conf").fadeOut(800)}),e(".as_woo_owl_show_short_code").hide(),e('.as_woo_owl_btn_style input[type="radio"]').click(function(){var a=e(this).val();e("#as_woo_owl_get_name").attr("as_button_name",a)}),e('ul.as_woo_owl_select_icon li label input[type="radio"]').click(function(){var a=e(this).val();e("#as_icon_data").attr("as_icon_data",a)}),e(".as_woo_owl_add_new").click(function(){var a=e('#carousel_name[type="text"]').val(),a=a.replace(/\s+/g,"");if(""==!a)var a='carousel_name="'+e.trim(a)+'" ';else var a="";var t=e('#items[type="number"]').val(),t=t.replace(/\s+/g,"");if(""==!t)var t='items="'+e.trim(t)+'" ';else var t="";var l=e('#itemsDesktop_one[type="number"]').val(),r=e('#itemsDesktop_two[type="number"]').val();if(""==!l&&""==!r)var o='itemsdesktop="'+l+","+r+'" ';else var o="";var v=e('#itemsDesktopSmall_one[type="number"]').val(),s=e('#itemsDesktopSmall_two[type="number"]').val();if(""==!v&&""==!s)var i='itemsdesktopsmall="'+v+","+s+'" ';else var i="";var n=e('#itemsTablet_one[type="number"]').val(),_=e('#itemsTablet_two[type="number"]').val();if(""==!n&&""==!_)var c='itemstablet="'+n+","+_+'" ';else var c="";var m=e("select#itemsTabletSmall").val();if(""==!m)var m='itemstabletsmall="'+m+'" ';var d=e('#itemsMobile_one[type="number"]').val(),p=e('#itemsMobile_two[type="number"]').val();if(""==!d&&""==!p)var f="itemsmobile="+d+","+p+" ";else var f="";var u=e("select#singleItem").val();if(""==!u)var u='singleitem="'+u+'" ';else var u="";var w=e("select#itemsScaleUp").val();if(""==!w)var w='itemsscaleup="'+w+'" ';else var w="";var y=e('#slideSpeed[type="number"]').val();if(""==!y)var y='slidespeed="'+y+'" ';else var y="";var g=e('#paginationSpeed[type="number"]').val();if(""==!g)var g='paginationspeed="'+g+'" ';else var g="";var b=e('#rewindSpeed[type="number"]').val();if(""==!b)var b='rewindspeed="'+b+'" ';else var b="";var h=e("select#autoPlay").val();if(""==!h)var h='autoplay="'+h+'" ';else var h="";var k=e("select#stopOnHover").val();if(""==!k)var k='stoponhover="'+k+'" ';else var k="";var x=e("select#navigation").val();if(""==!x)var x='navigation="'+x+'" ';else var x="";var S=e('#navigationText_one[type="text"]').val(),T=e('#navigationText_two[type="text"]').val(),S=S.replace(/\s+/g,""),T=T.replace(/\s+/g,"");if(""==!S&&""==!T)var S=e.trim(S),T=e.trim(T),z="navigationtext='\""+S+'","'+T+"\"' ";else var z="";var D=e("select#rewindNav").val();if(""==!D)var D='rewindnav="'+D+'" ';else var D="";var E=e("select#scrollPerPage").val();if(""==!E)var E='scrollperpage="'+E+'" ';var I=e("select#pagination").val();if(""==!I)var I='pagination="'+I+'" ';var L=e("select#paginationNumbers").val();if(""==!L)var L='paginationnumbers="'+L+'" ';var N=e("select#responsive").val();if(""==!N)var N='responsive="'+N+'" ';var P=e("select#lazyLoad").val();if(""==!P)var P='lazyload="'+P+'" ';var R=e("select#lazyFollow").val();if(""==!R)var R='lazyfollow="'+R+'" ';var B=e("select#lazyEffect").val();if(""==!B)var B='lazyeffect="'+B+'" ';var M=e("select#mouseDrag").val();if(""==!M)var M='mousedrag="'+M+'" ';var O=e("select#touchDrag").val();if(""==!O)var O='touchdrag="'+O+'" ';var j=e("select#afterLazyLoad").val();if(""==!j)var j='afterlazyload="'+j+'" ';var F=e("#as_woo_owl_get_name").attr("as_button_name"),F='button="'+F+'" ',H=e("#as_icon_data").attr("as_icon_data"),H='icon="'+H+'" ',Q=e("select#as_woo_owl_add_to_cart").val();if(""==!Q)var Q='add_to_cart="'+Q+'" ';e(".as_woo_owl_show_short_code").fadeIn(200),e(".as_woo_owl_show_short_code").text("[as_featured_product "+a+t+w+o+i+c+m+f+u+y+g+b+h+k+x+z+D+E+I+L+N+P+R+B+M+O+j+F+Q+H+"]")})});

jQuery(document).ready(function($){
//as demo
$('.as_click_show').click(function(){
    $( ".my_status_main" ).animate({
        right: "+=300"
        }, 600, function() {
        // Animation complete.
    });
    $(this).hide(0);
    $('.as_click_hide').show(0);
});

$('.as_click_hide').click(function(){
    $( ".my_status_main" ).animate({
        right: "-=300"
        }, 600, function() {
        // Animation complete.
    });
    $(this).hide(0);
    $('.as_click_show').show(0);
});

});