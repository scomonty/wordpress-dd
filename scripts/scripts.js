window.$ = window.jQuery = require('jquery');
$(function() {
	var navBtn = $('#mobile-nav').data("navShow", "false");
	navBtn.on({
		"onFunc" : function() {
			var $this = $(this);
			$('.topnav').stop().slideDown();
			$this.addClass('active');
			$this.data("navShow", "true");
		},
		"offFunc" : function() {
			var $this = $(this);
			$('.topnav').stop().slideUp();
			$this.removeClass();
			$this.data("navShow", "false");
		},
		'click' : function() {
			var $this = $(this);
			if($this.data("navShow") === "true") {
				$this.trigger("offFunc");
			} else if($this.data("navShow") === "false") {
				$this.trigger("onFunc");
			}
		}
	});
});
