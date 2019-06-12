var Script = function () {


  $(function() {
    function checkresponsive() {
      var wSize = window.innerWidth;;
      if (wSize < 767) {
        $("body").removeClass("ml-sidebar");
        $("body").addClass("mobile-eq");
        $("body").removeClass("desktop-eq");
      }
      if (wSize > 768) {
        $("body").removeClass("ms-sidebar");
        $("body").removeClass("mobile-eq");
        $("body").addClass("desktop-eq");
      }
    }
    $(window).on('load', checkresponsive);
    $(window).on('resize', checkresponsive);
  });
  
$('.icon-reorder').on('click',function () {
  if($("body").hasClass("mobile-eq")) {
    $("body").removeClass("mobile-sidebar");
    $("body").toggleClass("ms-sidebar");
  }
});
$('.icon-reorder').on('click',function () {
  if($("body").hasClass("desktop-eq")) {
    $("body").toggleClass("ml-sidebar");
    $(".sub-menu").removeClass("open");
  }
});

  

  
    $('.show-set').on('click',function () {
      $(this).hide();
      $(this).next(".to-set").show();
    });
  
  
    $('.toggle-contact').on('click',function () {
      $(this).toggleClass("active");
      $(".right-chat").toggleClass("active");
    });
  
  
 
   $('#tsob').on('click',function () {
      $(".type-sell-one").addClass("active");
      $(".type-sell-two").removeClass("active");
    });
  $('#tstb').on('click',function () {
      $(".type-sell-two").addClass("active");
      $(".type-sell-one").removeClass("active");
    });
  
  
  
  $("#atob").on('click',function () {
      $(".set-time-at").slideUp("active");
    });
  $('#attb').on('click',function () {
      $(".set-time-at").slideDown("active");
    });
  
  
  $("#name-uce").on('click',function () {
      $(".name-uce").slideToggle("active");
    });
 
  
  
  
  
  
  
  
    jQuery('#sidebar .sub-menu > a').click(function () {
      if(!$("body").hasClass("small-sidebar")) {
        $(this).parents("li").toggleClass("open");
      }
    });
 
    $('.zerosub-menu').click(function () {
      $(this).toggleClass("open");
    });
  
  
       
$(".select-feedback-icons .feeico").click(function(){
  $(".select-feedback-icons .feeico").removeClass("active");
  $(this).addClass("active");
});

     
// custom scrollbar

    $("body").niceScroll({
      styler:"fb",
      cursorcolor:"#DEE4EC",
      cursorwidth: '3',
      cursorborderradius: '0px',
      background: '#404040',
      cursorborder: '',
      zindex:[9999999]
      });


  $(".send-message textarea").niceScroll({styler:"fb",cursorcolor:"#bbb", cursorwidth: '2', cursorborderradius: '0px', background: '#fff', cursorborder: ''});


//    tool tips

    $('.tooltips').tooltip();

//    popovers

    $('.popovers').popover();


}();

   
   $(document).ready(function(){

  // Theme Change = Page Setting
  $(".theme-change .item").click(function(){
    $(".theme-change .item").removeClass("active");
    $(this).addClass("active");
    var bc = $(this).attr("data-color");
    if($("body").hasClass("small-sidebar")) {
      $("body").removeClass();
      $("body").addClass(bc+" small-sidebar");
    }else {
      $("body").removeClass();
      $("body").addClass(bc);
    }
  });



  // choose-design = Page EditStore
  $(".active-design li") .click(function () {
    $(".active-design li").removeClass("active");
    $(this).addClass("active");
  })


    // choose-banner = Page EditStore
    $(".active-banner li") .click(function () {
      $(".active-banner li").removeClass("active");
      $(this).addClass("active");
    })


  // Show Tr next = Page Paid
    $(".toggle-trs").click(function(){
      $(this).find("span").toggleClass("fa-plus");
      $(this).find("span").toggleClass("fa-minus");
      $(this).parents("tr").next("tr").fadeToggle();
    });
     
      $(".toggle-trst").click(function(){
      $(this).find("span").toggleClass("fa-plus");
      $(this).find("span").toggleClass("fa-minus");
      $(this).parents("tr").next().next(".last-trst").fadeToggle();
    });

      $.uploadPreview({
        input_field: "#image-upload", // Default: .image-upload
        preview_box: "#image-preview", // Default: .image-preview
        label_field: "#image-label", // Default: .image-label
        label_default: "انتخاب آرم", // Default: Choose File
        label_selected: "تغییر آرم", // Default: Change File
        no_label: false // Default: false
      });
     
     $('.selectric-op').selectric();
      
      $(".selectric-selectric-op li:nth-child(4)").click(function(){
        $('.bs-fav-modal-md').modal('show')
      })
     
     $('#ssi-upload').ssi_uploader({
        url: 'http://example.com',
        inForm:true
    });
     
     
     $("#prselect-1").click(function(){
       $('.prselect-1').modal('show')
     });
     $("#prselect-2").click(function(){
        $('.prselect-2').modal('show')
     });
     $("#prselect-4").click(function(){
        $('.prselect-4').modal('show')
     });
     
     
      $(".respro").click(function(){
        if($(this).find(".vSwitch").hasClass("on")) {
         $(".resbox").fadeIn();
        }
        else {
          $(".resbox").fadeOut();
        }
      }); 
     

    
});


$('.selectric').selectric();

$('table').tablecheckbox();


