var option;
(function(c) {
	var d = "😁 😂 😃 😄 😉 😊 😍 😘 😲 😷 👈 👉 ☝ 👆 👇 ✌ ✋ 👌 👍 ✊ 👊 👋 👏 👐 👣 👀 👂 👃".split(" ");
	c.fn.emojiInit = function(b) {
		option = c.extend({
			targetId: "",
            fontSize: 14,
			faceList: d,
			success: function(a) {},
			error: function(a, b) {}
		}, b);
		option.targetId = c(this).attr("id");
		b = c(this);
		if (void 0 == b || 0 >= b.length) option.error(null, "target object is undefined");
		else {
			option.fontSize = 20 < option.fontSize ? 20 : option.fontSize;
			option.fontSize = 14 > option.fontSize ? 14 : option.fontSize;
			var a = "";
			option.faceList.forEach(function(b) {
				a += "<i onclick='insertAtCaret(\"" + option.targetId + '","' + b + "\",this)' style='font: normal normal normal 14px/1 FontAwesome;cursor: pointer;font-size:" + option.fontSize + "px;display: inline-block;text-align:center;'>" + b + "</i>"
			});
			b.css("width", "100%");
			b.css("padding", "8px 60px 5px 5px");
			b.css("box-sizing", "border-box");
			b.css("resize", "none");
			b.parent().css("position", "relative");
			b.after("<i id='faceEnter' style='padding: 5px;position: absolute;right: 0;top: 0;cursor: pointer;font: normal normal normal 14px/1 FontAwesome;'>😃</i>");
			b.before("<div id='faceBlock'>" + a + "</div>");
			c(document).click(function() {
				c("#faceBlock").fadeOut()
			});
   $("#faceEnter").click(function(){
     $("#faceBlock").fadeToggle();
   })
			c("#faceBlock").click(function(a) {
				a.stopPropagation()
			});
			c("#faceEnter").click(function(a) {
				a.stopPropagation()
			})
		}
	}
})(jQuery);

function insertAtCaret(c, d, b) {
	try {
		$("#faceBlock").hide();
		var a = $("#" + c).get(0);
		if (document.all && a.createTextRange && a.caretPos) {
			var e = a.caretPos;
			e.text = "" == e.text.charAt(e.text.length - 1) ? d + "" : d
		} else if (a.setSelectionRange) {
			var f = a.selectionStart,
				h = a.selectionEnd,
				k = a.value.substring(0, f),
				l = a.value.substring(h);
			a.value = k + d + l;
			a.focus();
			var g = d.length;
			a.setSelectionRange(f + g, f + g);
			a.blur()
		} else a.value += d;
		option.success(b)
	} catch (m) {
		option.error(b, m)
	}
};
