<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>
/*
This is a fork of Colorbox jQuery plugin
*/
#colorbox, #cboxOverlay, #cboxWrapper{position:absolute; top:0; left:0; z-index:9999; overflow:hidden;}
#cboxWrapper {max-width:none;}
#cboxOverlay{position:fixed; width:100%; height:100%;}
#cboxMiddleLeft, #cboxBottomLeft{clear:left;}
#cboxContent{position:relative;}
#cboxLoadedContent{overflow:auto; -webkit-overflow-scrolling: touch;}
#cboxTitle{margin:0;}
#cboxLoadingOverlay, #cboxLoadingGraphic{position:absolute; top:0; left:0; width:100%; height:100%;}
#cboxPrevious, #cboxNext, #cboxClose, #cboxSlideshow{cursor:pointer;}
.cboxPhoto{float:left; margin:auto; border:0; display:block; max-width:none; -ms-interpolation-mode:bicubic;}
.cboxIframe{width:100%; height:100%; display:block; border:0; padding:0; margin:0;}
#colorbox, #cboxContent, #cboxLoadedContent{box-sizing:content-box; -moz-box-sizing:content-box; -webkit-box-sizing:content-box;}

#cboxOverlay{background:url(<?php echo plugins_url('../../images/overlay.png', __FILE__); ?>) repeat 0 0;}
#colorbox{outline:0;}
    #cboxTopLeft{width:21px; height:21px; background:url(<?php echo plugins_url('../../images/controls.png', __FILE__); ?>) no-repeat -101px 0;}
    #cboxTopRight{width:21px; height:21px; background:url(<?php echo plugins_url('../../images/controls.png', __FILE__); ?>) no-repeat -130px 0;}
    #cboxBottomLeft{width:21px; height:21px; background:url(<?php echo plugins_url('../../images/controls.png', __FILE__); ?>) no-repeat -101px -29px;}
    #cboxBottomRight{width:21px; height:21px; background:url(<?php echo plugins_url('../../images/controls.png', __FILE__); ?>) no-repeat -130px -29px;}
    #cboxMiddleLeft{width:21px; background:url(<?php echo plugins_url('../../images/controls.png', __FILE__); ?>) left top repeat-y;}
    #cboxMiddleRight{width:21px; background:url(<?php echo plugins_url('../../images/controls.png', __FILE__); ?>) right top repeat-y;}
    #cboxTopCenter{height:21px; background:url(<?php echo plugins_url('../../images/border.png', __FILE__); ?>) 0 0 repeat-x;}
    #cboxBottomCenter{height:21px; background:url(<?php echo plugins_url('../../images/border.png', __FILE__); ?>) 0 -29px repeat-x;}
    #cboxContent{background:#fff; overflow:hidden;}
        .cboxIframe{background:#fff;}
        #cboxError{padding:50px; border:1px solid #ccc;}
        #cboxLoadedContent{margin-bottom:28px;}
        #cboxTitle{position:absolute; bottom:4px; left:0; text-align:center; width:100%; color:#949494;}
        #cboxCurrent{position:absolute; bottom:4px; left:58px; color:#949494;}
        #cboxLoadingOverlay{background:url(<?php echo plugins_url('../../images/loading_background.png', __FILE__); ?>) no-repeat center center;}
        #cboxLoadingGraphic{background:url(<?php echo plugins_url('../../images/loading.gif', __FILE__); ?>) no-repeat center center;}

        #cboxPrevious, #cboxNext, #cboxSlideshow, #cboxClose {border:0; padding:0; margin:0; overflow:visible; width:auto; background:none; }
        
        #cboxPrevious:active, #cboxNext:active, #cboxSlideshow:active, #cboxClose:active {outline:0;}

        #cboxSlideshow{position:absolute; bottom:4px; right:30px; color:#0092ef;}
        #cboxPrevious{position:absolute; bottom:0; left:0; background:url(<?php echo plugins_url('../../images/controls.png', __FILE__); ?>) no-repeat -75px 0; width:25px; height:25px; text-indent:-9999px;}
        #cboxPrevious:hover{background-position:-75px -25px;}
        #cboxNext{position:absolute; bottom:0; left:27px; background:url(<?php echo plugins_url('../../images/controls.png', __FILE__); ?>) no-repeat -50px 0; width:25px; height:25px; text-indent:-9999px;}
        #cboxNext:hover{background-position:-50px -25px;}
        #cboxClose{position:absolute; bottom:0; right:0; background:url(<?php echo plugins_url('../../images/controls.png', __FILE__); ?>) no-repeat -25px 0; width:25px; height:25px; text-indent:-9999px;}
        #cboxClose:hover{background-position:-25px -25px;}


.cboxIE #cboxTopLeft,
.cboxIE #cboxTopCenter,
.cboxIE #cboxTopRight,
.cboxIE #cboxBottomLeft,
.cboxIE #cboxBottomCenter,
.cboxIE #cboxBottomRight,
.cboxIE #cboxMiddleLeft,
.cboxIE #cboxMiddleRight {
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#00FFFFFF,endColorstr=#00FFFFFF);
}