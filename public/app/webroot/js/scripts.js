$(document).ready(function () {

////////////////////////////////////////
// Plugin Mask Input (only form)
////////////////////////////////////////

if ($("form").length > 0) {

  /*
  Masked Input plugin for jQuery
  Copyright (c) 2007-2011 Josh Bush (digitalbush.com)
  Licensed under the MIT license (http://digitalbush.com/projects/masked-input-plugin/#license)
  Version: 1.3
  */
  (function(a){var b=(a.browser.msie?"paste":"input")+".mask",c=window.orientation!=undefined;a.mask={definitions:{9:"[0-9]",a:"[A-Za-z]","*":"[A-Za-z0-9]"},dataName:"rawMaskFn"},a.fn.extend({caret:function(a,b){if(this.length!=0){if(typeof a=="number"){b=typeof b=="number"?b:a;return this.each(function(){if(this.setSelectionRange)this.setSelectionRange(a,b);else if(this.createTextRange){var c=this.createTextRange();c.collapse(!0),c.moveEnd("character",b),c.moveStart("character",a),c.select()}})}if(this[0].setSelectionRange)a=this[0].selectionStart,b=this[0].selectionEnd;else if(document.selection&&document.selection.createRange){var c=document.selection.createRange();a=0-c.duplicate().moveStart("character",-1e5),b=a+c.text.length}return{begin:a,end:b}}},unmask:function(){return this.trigger("unmask")},mask:function(d,e){if(!d&&this.length>0){var f=a(this[0]);return f.data(a.mask.dataName)()}e=a.extend({placeholder:"_",completed:null},e);var g=a.mask.definitions,h=[],i=d.length,j=null,k=d.length;a.each(d.split(""),function(a,b){b=="?"?(k--,i=a):g[b]?(h.push(new RegExp(g[b])),j==null&&(j=h.length-1)):h.push(null)});return this.trigger("unmask").each(function(){function v(a){var b=f.val(),c=-1;for(var d=0,g=0;d<k;d++)if(h[d]){l[d]=e.placeholder;while(g++<b.length){var m=b.charAt(g-1);if(h[d].test(m)){l[d]=m,c=d;break}}if(g>b.length)break}else l[d]==b.charAt(g)&&d!=i&&(g++,c=d);if(!a&&c+1<i)f.val(""),t(0,k);else if(a||c+1>=i)u(),a||f.val(f.val().substring(0,c+1));return i?d:j}function u(){return f.val(l.join("")).val()}function t(a,b){for(var c=a;c<b&&c<k;c++)h[c]&&(l[c]=e.placeholder)}function s(a){var b=a.which,c=f.caret();if(a.ctrlKey||a.altKey||a.metaKey||b<32)return!0;if(b){c.end-c.begin!=0&&(t(c.begin,c.end),p(c.begin,c.end-1));var d=n(c.begin-1);if(d<k){var g=String.fromCharCode(b);if(h[d].test(g)){q(d),l[d]=g,u();var i=n(d);f.caret(i),e.completed&&i>=k&&e.completed.call(f)}}return!1}}function r(a){var b=a.which;if(b==8||b==46||c&&b==127){var d=f.caret(),e=d.begin,g=d.end;g-e==0&&(e=b!=46?o(e):g=n(e-1),g=b==46?n(g):g),t(e,g),p(e,g-1);return!1}if(b==27){f.val(m),f.caret(0,v());return!1}}function q(a){for(var b=a,c=e.placeholder;b<k;b++)if(h[b]){var d=n(b),f=l[b];l[b]=c;if(d<k&&h[d].test(f))c=f;else break}}function p(a,b){if(!(a<0)){for(var c=a,d=n(b);c<k;c++)if(h[c]){if(d<k&&h[c].test(l[d]))l[c]=l[d],l[d]=e.placeholder;else break;d=n(d)}u(),f.caret(Math.max(j,a))}}function o(a){while(--a>=0&&!h[a]);return a}function n(a){while(++a<=k&&!h[a]);return a}var f=a(this),l=a.map(d.split(""),function(a,b){if(a!="?")return g[a]?e.placeholder:a}),m=f.val();f.data(a.mask.dataName,function(){return a.map(l,function(a,b){return h[b]&&a!=e.placeholder?a:null}).join("")}),f.attr("readonly")||f.one("unmask",function(){f.unbind(".mask").removeData(a.mask.dataName)}).bind("focus.mask",function(){m=f.val();var b=v();u();var c=function(){b==d.length?f.caret(0,b):f.caret(b)};(a.browser.msie?c:function(){setTimeout(c,0)})()}).bind("blur.mask",function(){v(),f.val()!=m&&f.change()}).bind("keydown.mask",r).bind("keypress.mask",s).bind(b,function(){setTimeout(function(){f.caret(v(!0))},0)}),v()})}})})(jQuery)

  $(".mask-cep").mask("99999-999");
  $(".mask-cpf").mask("999.999.999-99");
  $(".mask-cnpj").mask("99.999.999/9999-99");
  $(".mask-data").mask("99/99/9999");
  $('input[type=datetime]').mask("99/99/9999");

  // RG - 8 ou 9 digitos
  $('.mask-rg').focusout(function () {
    var rg, element1;
    element1 = $(this);
    element1.unmask();
    rg = element1.val().replace(/\D/g, '');
    if (rg.length > 8) {
      element1.mask("99.999.999-?9");
    } else {
      element1.mask("9.999.999-9?9");
    }
  }).trigger('focusout');

  // Telefone e Celular - 8 ou 9 digitos
  $('input[type=tel]').focusout(function () {
    var phone, element;
    element = $(this);
    element.unmask();
    phone = element.val().replace(/\D/g, '');
    if (phone.length > 10) {
      element.mask("(99) 99999-999?9");
    } else {
      element.mask("(99) 9999-9999?9");
    }
  }).trigger('focusout');

  $('input, textarea').on('focus', function () {
    $(this).parent().addClass('focus');
  });

  $('input, textarea').on('blur', function () {
    $(this).parent().removeClass('focus');
  });

  $(':required').on('blur', function () {
    if (!$(this).val()) {
      $(this).parent().removeClass('focus').removeClass('valided').addClass('invalid');
    } else {
      $(this).parent().removeClass('focus').removeClass('invalid').addClass('valided');
    }
  });
}

// Mobile Navigation

$('.btn-mobile').on('click', function () {
  $('.mobile').slideToggle();
});


$('.drop-down').on('click', function () {
  if ($(window).width() < 800) {
    // $('.drop-down').toggleClass('close');
    // $('.drop-list').removeClass('drop-active');
    // $(this).next('.drop-list').toggleClass('drop-active');
    $('.drop-list').removeClass('drop-active');
    $(this).next('.drop-list').addClass('drop-active');

    if (!$(this).hasClass('close')) {
      $('.drop-down').removeClass('close');
      $(this).addClass('close');
    } else {
      $(this).removeClass('close');
      $('.drop-list').removeClass('drop-active');
    }

    return false;
  }
});

	// Animacao menu scroll to
	$('.goto').on('click', function(){
		var to = $(this).attr('href'); // $(this) is the clicked link. We store its href.
		$('html, body').animate({ scrollTop: ($(to).offset().top)-90}, 700);
		$('.goto').removeClass("active");
		$(this).addClass("active");
		return false;
	});


});
