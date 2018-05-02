(function(c,a){var b=function(){var d=this;this.tabs=null;this.activePanel=null;this.selectedItem=null;this.mdSliderToolbar=new MdSliderToolbar(d);this.mdSliderTimeline=new MdSliderTimeline(d);this.textBoxTemplate='<div class="slider-item ui-widget-content item-text" data-top="0" data-left="0" data-width="100" data-height="50" data-borderstyle="solid" data-mdtclass="" data-type="text" data-title="Text" style="width: 100px; height: 50px;"><div>Text</div><span class="sl-tl"></span><span class="sl-tr"></span><span class="sl-bl"></span><span class="sl-br"></span><span class="sl-top"></span><span class="sl-right"></span><span class="sl-bottom"></span><span class="sl-left"></span> </div>';this.imageBoxTemplate='<div class="slider-item ui-widget-content item-image" data-top="0" data-left="0" data-width="100" data-height="50" data-borderstyle="solid" data-mdtclass="" style="height: 80px;width: 80px;" data-type="image"><img width="100%" height="100%" src="http://files.megadrupal.com/other/image.jpg" /><span class="sl-tl"></span><span class="sl-tr"></span><span class="sl-bl"></span><span class="sl-br"></span><span class="sl-top"></span><span class="sl-right"></span><span class="sl-bottom"></span><span class="sl-left"></span></div>';this.videoBoxTemplate='<div class="slider-item ui-widget-content item-video" data-top="0" data-left="0" data-width="100" data-height="50" data-borderstyle="solid" data-mdtclass="" style="height: 80px;width: 80px;" data-type="video"><img width="100%" height="100%" src="http://files.megadrupal.com/other/video.jpg" /><span class="sl-tl"></span><span class="sl-tr"></span><span class="sl-bl"></span><span class="sl-br"></span><span class="sl-top"></span><span class="sl-right"></span><span class="sl-bottom"></span><span class="sl-left"></span></div>';this.tab_counter=c("#md-tabs ul.md-tabs-head li.tab-item").length;this.init=function(){d.initTab();d.initPanel();d.initSliderItem();c(document).keyup(function(h){var i=h.keyCode||h.which;var f=c(h.target).is("input, textarea, select");if(!f&&i==46&&d.selectedItem!=null){var g=d.selectedItem.data("timeline");if(g!=null){g.remove();d.selectedItem.remove();d.triggerChangeSelectItem()}}});c(window).resize(function(){d.resizeWindow()})};this.initTab=function(){d.tabs=c("#md-tabs").tabs({create:function(g,h){d.activePanel=c(h.panel);d.mdSliderTimeline.changeActivePanel();d.triggerChangeSelectItem();d.resizeBackgroundImage()},activate:function(g,h){c(d.activePanel).find(".slider-item.ui-selected").removeClass("ui-selected");d.activePanel=c(h.newPanel);d.mdSliderTimeline.changeActivePanel();d.triggerChangeSelectItem();d.resizeBackgroundImage()},});c(".md-tabs-head li").on({mouseenter:function(){c(this).find(".ui-icon-close").show()},mouseleave:function(){c(this).find(".ui-icon-close").hide()}});c(".md-tabs-head span.ui-icon-close").on("click",function(){var i=c(this);var h=i.prev().attr("href");var j=JSON.parse(c(".settings input",c(h)).val());if(!confirm("Are you sure want to delete this slide? After accepting this slide will be removed completely.")){return}if(j.slide_id==-1){var g=c("li",d.tabs).index(c(this).parent());i.parent().remove();c(h).remove();d.tabs.tabs({active:-1});d.tabs.tabs("refresh")}else{c.post(drupalSettings.MDSlider.jsonConfigURL,{action:"deleteSlide",sid:j.slide_id},function(k){if(k=="OK"){i.parent().remove();c(h).remove();d.tabs.tabs({active:0});d.tabs.tabs("refresh")}})}});d.tabs.find(".ui-tabs-nav").sortable({axis:"x",stop:function(){d.tabs.tabs("refresh")}});c("#slide-setting-dlg").dialog({resizable:false,autoOpen:false,draggable:false,modal:true,width:960,open:function(){var h=c(this).data("tab");if(h){var g=c("input.panelsettings",h).val();(g!="")&&(g=c.stringToObject(g));d.setSlideSettingValue(g)}},buttons:{Save:function(){var j=c(this).data("tab");if(j){var i=d.getSlideSettingValue(),g=c.stringToObject(c("input.panelsettings",j).val()),h=c("input[name=slider_id]").val();i=c.extend(g,i);c("input.panelsettings",j).val(c.objectToString(i));c.post(drupalSettings.MDSlider.jsonConfigURL,{action:"bgSlider",fid:i.background_image,slider_id:h},function(k){if(k){var l=c("<img alt=''>").attr("src",k);c(".md-slide-image img",d.activePanel).remove();c(".md-slide-image",d.activePanel).append(l)}else{c(".md-slide-image img",d.activePanel).remove();c(".md-slide-image",d.activePanel).css("background-color",i.background_color)}c(".md-slide-overlay",d.activePanel).css("background-color",i.background_overlay)})}c(this).dialog("close")},Cancel:function(){c(this).dialog("close")}}});c(".panel-settings-link").on("click",function(){c("#slide-setting-dlg").data("tab",c(this).parent().parent()).dialog("open");return false});c(".random-transition").click(function(){c("#navbar-content-transitions input").removeAttr("checked");for(var h=0;h<3;h++){var g=Math.floor(Math.random()*26)+1;c("#navbar-content-transitions li:eq("+g+") input").attr("checked","checked")}return false});c("#slide-setting-dlg a.delete-thumbnail, #slide-setting-dlg a.delete-background").click(function(g){c(this).parent().hide();if(c(this).hasClass("delete-background")){c(this).parent().next().hide()}if(c(this).parent().parent().hasClass("choose-thumbnail")){c("#slide-setting-dlg #slide-thumbnail").val("-1")}else{c("#slide-setting-dlg #slide-backgroundimage").val("-1")}g.preventDefault()});c("#slide-background-color, #slide-background-overlay","#slide-setting-dlg").spectrum({allowEmpty:true,preferredFormat:"rgb",showAlpha:true,showInput:true});var f=c("#md-slider").mdSlider({defaultTransitions:"fade",height:150,width:290,fullWidth:false,showArrow:true,showLoading:false,slideShow:true,showBullet:true,showThumb:false,slideShowDelay:3000,loop:true,strips:5,responsive:false,defaultTransitionSpeed:1500});c(".panel-clone").on("click",function(){d.cloneTab(c(this).parent().parent());return false})};this.resizeWindow=function(){d.resizeBackgroundImage()};this.resizeBackgroundImage=function(){if(c(".md-slide-wrap",d.activePanel).hasClass("md-fullwidth")){var m=c(".md-slide-image",d.activePanel).width(),h=c(".md-slide-image",d.activePanel).height(),g=c(".md-slide-image img",d.activePanel),j=e(g.attr("src")),i=j.width,f=j.height;if(f>0&&h>0){if((i/f)>(m/h)){var l=m-(h/f)*i;g.css({width:"auto",height:"100%"});if(l<0){g.css({left:(l/2)+"px",top:0})}else{g.css({left:0,top:0})}}else{var k=h-(m/i)*f;g.css({width:"100%",height:"auto"});if(k<0){g.css({top:(k/2)+"px",left:0})}else{g.css({left:0,top:0})}}}}};function e(f){var h=new Image();h.src=f;var g={height:h.height,width:h.width};return g}this.initSliderItem=function(){c("#md-tabs div.slider-item").each(function(){var f=c(this).getItemValues();c(this).setItemStyle(f)})};this.initPanel=function(){c("#add_tab").click(function(){d.addTab();return false});c("#md-tabs .slider-item").each(function(){c(this).data("slidepanel",d).triggerItemEvent()})};this.addTab=function(){d.tab_counter++;var i="Slide "+d.tab_counter,f='<li class="tab-item clearfix"><a class="tab-link" href="#tabs-'+d.tab_counter+'"><span class="tab-text">'+i+'</span></a><span class="ui-icon ui-icon-close">Remove Tab</span></li>',g=c("#dlg-slide-setting").html(),h='<div id="tabs-'+d.tab_counter+'" class="md-tabcontent clearfix">'+g+"</div>";c(f).appendTo("#md-tabs .md-tabs-head");c(h).appendTo("#md-tabs");d.tabs.tabs("refresh");d.tabs.tabs({active:-1})};this.cloneTab=function(g){var f=c.stringToObject(c("input.panelsettings",g).val());d.addTab();d.activePanel=c("#tabs-"+d.tab_counter);c("#tabs-"+d.tab_counter).find(".md-slidewrap").html(g.find(".md-slidewrap").html()).find(".slider-item").remove();f.slide_id=-1;c("input.panelsettings",d.activePanel).val(c.objectToString(f));d.activePanel.data("timelinewidth",g.data("timelinewidth"));d.mdSliderTimeline.setTimelineWidth(g.data("timelinewidth"));c(".slider-item",g).each(function(){d.cloneBoxItem(c(this))});d.tabs.tabs("refresh")};this.cloneBoxItem=function(f){var j=c(f).getItemValues();if(j&&d.activePanel!=null){var i,h=j.type;if(h=="text"){var g=f.find("div:first").html();i=c(d.textBoxTemplate).clone();i.find("div:first").html(g)}else{if(h=="image"){i=c(d.imageBoxTemplate).clone()}else{i=c(d.videoBoxTemplate).clone()}}i.data("slidepanel",d).appendTo(c(".md-objects",d.activePanel));i.setItemValues(j);i.setItemStyle(j);i.setItemHtml(j);i.triggerItemEvent();d.mdSliderTimeline.addTimelineItem(h,i);return true}};this.addBoxItem=function(f){if(this.activePanel!=null){var g;if(f=="text"){g=c(this.textBoxTemplate).clone()}else{if(f=="image"){g=c(this.imageBoxTemplate).clone()}else{g=c(this.videoBoxTemplate).clone()}}d.mdSliderTimeline.addTimelineItem(f,g);g.data("slidepanel",this).appendTo(c(".md-objects",this.activePanel)).triggerItemEvent();d.changeSelectItem(g);d.mdSliderTimeline.triggerChangeOrderItem();d.mdSliderToolbar.focusEdit();return true}return false};this.triggerChangeSelectItem=function(){if(this.activePanel==null){return}var f=c(this.activePanel).find(".slider-item.ui-selected");if(f.length==1){this.selectedItem=f}else{this.selectedItem=null}this.mdSliderToolbar.changeSelectItem(this.selectedItem);this.mdSliderTimeline.changeSelectItem(this.selectedItem)};this.setItemAttribute=function(f,g){if(this.selectedItem!=null){switch(f){case"width":return d.setBoxWidth(this.selectedItem,g);break;case"height":return d.setBoxHeight(this.selectedItem,g);break;case"left":return d.setPositionBoxLeft(this.selectedItem,g);break;case"top":return d.setPositionBoxTop(this.selectedItem,g);break}}};this.setItemSize=function(g,f){d.setBoxWidth(this.selectedItem,g);d.setBoxHeight(this.selectedItem,f)};this.setItemBackground=function(j,k){if(this.selectedItem!=null){c(this.selectedItem).data(c.removeMinusSign(j),k);var g=c(this.selectedItem).data("backgroundcolor");if(g&&g!=""){var i=parseInt(c(this.selectedItem).data("backgroundtransparent"));var h=c.HexToRGB(g);i=i?i:100;var f="rgba("+h.r+","+h.g+","+h.b+","+(i/100)+")";this.selectedItem.css("background-color",f)}else{this.selectedItem.css("backgroundColor","transparent")}}return false};this.setItemFontSize=function(f,g){if(this.selectedItem!=null){c(this.selectedItem).data(c.removeMinusSign(f),g);this.selectedItem.css(f,g+"px")}};this.setItemColor=function(f){if(this.selectedItem!=null){c(this.selectedItem).data("color",f);if(f!=""){this.selectedItem.css("color",f)}else{this.selectedItem.css("color","")}}};this.setItemBorderColor=function(f,g){if(this.selectedItem!=null){c(this.selectedItem).data(c.removeMinusSign(f),g);this.selectedItem.css("border-color",g)}};this.setItemCssPx=function(f,g){if(this.selectedItem!=null){c(this.selectedItem).data(c.removeMinusSign(f),g);this.selectedItem.css(f,g+"px")}};this.setItemCss=function(f,g){if(this.selectedItem!=null){c(this.selectedItem).data(c.removeMinusSign(f),g);this.selectedItem.css(f,g)}};this.setItemStyle=function(g,h){if(this.selectedItem!=null){_tmpSelectedItem=this.selectedItem;c(_tmpSelectedItem).data(g,h);var f=c.map(c(".mdt-style option","#md-toolbar"),function(i){return i.value});c.each(f,function(k,j){_tmpSelectedItem.removeClass(j)});_tmpSelectedItem.addClass(h)}};this.setItemOpacity=function(f,g){if(this.selectedItem!=null){c(this.selectedItem).data(f,g);this.selectedItem.css(f,g/100)}};this.setItemClass=function(f,g){if(this.selectedItem!=null){this.selectedItem.data(f,g);this.selectedItem.addClass(g)}};this.setItemTitle=function(f){if(this.selectedItem!=null){c(this.selectedItem).data("title",f);if(c(this.selectedItem).data("type")=="text"){c(this.selectedItem).find("div").html(f.replace(/\n/g,"<br />"))}this.mdSliderTimeline.changeSelectedItemTitle()}};this.setImageData=function(f,g,h){if(this.selectedItem!=null){c(this.selectedItem).data("title",g);c(this.selectedItem).data("fileid",f);c(this.selectedItem).find("img").attr("src",h).on('load', function(){var l=new Image();l.src=h;var k=l.width,i=l.height,m=d.activePanel.find(".md-objects").width(),j=d.activePanel.find(".md-objects").height();if(i>0&&j>0){if(k>m||i>j){if((k/i)>(m/j)){d.setItemSize(m,i*m/k)}else{d.setItemSize(k*j/i,j)}}else{d.setItemSize(k,i)}d.mdSliderToolbar.changeSelectItem(d.selectedItem)}});d.mdSliderTimeline.changeSelectedItemTitle()}};this.setItemFontWeight=function(f){if(this.selectedItem!=null){c(this.selectedItem).data("fontweight",f);this.selectedItem.css("font-weight",parseInt(f));if(isNaN(f)){this.selectedItem.css("font-style","italic")}else{this.selectedItem.css("font-style","normal")}}};this.setVideoData=function(g,f,h){if(this.selectedItem!=null){c(this.selectedItem).data("title",f);c(this.selectedItem).data("fileid",g);c(this.selectedItem).find("img").attr("src",h).on('load', function(){var l=new Image();l.src=h;var k=l.width,i=l.height,m=d.activePanel.find(".md-objects").width(),j=d.activePanel.find(".md-objects").height();if(i>0&&j>0){if(k>m||i>j){if((k/i)>(m/j)){d.setItemSize(m,i*m/k)}else{d.setItemSize(k*j/i,j)}}else{d.setItemSize(k,i)}d.mdSliderToolbar.changeSelectItem(d.selectedItem)}});d.mdSliderTimeline.changeSelectedItemTitle()}};this.setItemLinkData=function(f){if(this.selectedItem!=null){c(this.selectedItem).data("link",f)}};this.changeBorderPosition=function(f){if(this.selectedItem!=null){c(this.selectedItem).data("borderposition",f);var g=c(this.selectedItem).data("borderstyle");d.changeBorder(f,g)}};this.changeBorderStyle=function(g){if(this.selectedItem!=null){c(this.selectedItem).data("borderstyle",g);var f=c(this.selectedItem).data("borderposition");d.changeBorder(f,g)}};this.changeBorder=function(g,h){if(this.selectedItem!=null){var f="";if(g&1){f=h}else{f="none"}if(g&2){f+=" "+h}else{f+=" none"}if(g&4){f+=" "+h}else{f+=" none"}if(g&8){f+=" "+h}else{f+=" none"}c(this.selectedItem).css("border-style",f)}};this.changeFontFamily=function(f){if(this.selectedItem!=null){c(this.selectedItem).data("fontfamily",f);c(this.selectedItem).css("font-family",f)}};this.alignLeftSelectedBox=function(){var g=c(d.activePanel).find(".slider-item.ui-selected");if(g.length>1){var f=10000;g.each(function(){f=(c(this).position().left<f)?c(this).position().left:f});g.each(function(){d.setPositionBoxLeft(this,f)})}};this.alignRightSelectedBox=function(){var g=c(d.activePanel).find(".slider-item.ui-selected");if(g.length>1){var f=0;g.each(function(){var h=c(this).position().left+c(this).outerWidth();f=(h>f)?h:f});g.each(function(){d.setPositionBoxLeft(this,f-c(this).outerWidth())})}};this.alignCenterSelectedBox=function(){var g=c(d.activePanel).find(".slider-item.ui-selected");if(g.length>1){var f=g.first().position().left+g.first().outerWidth()/2;g.each(function(){d.setPositionBoxLeft(this,f-c(this).outerWidth()/2)})}};this.alignTopSelectedBox=function(){var g=c(d.activePanel).find(".slider-item.ui-selected");if(g.length>1){var f=10000;g.each(function(){f=(c(this).position().top<f)?c(this).position().top:f});g.each(function(){d.setPositionBoxTop(this,f)})}};this.alignBottomSelectedBox=function(){var g=c(d.activePanel).find(".slider-item.ui-selected");if(g.length>1){var f=0;g.each(function(){thisBottom=c(this).position().top+c(this).outerHeight();f=(thisBottom>f)?thisBottom:f});g.each(function(){d.setPositionBoxTop(this,f-c(this).outerHeight())})}};this.alignMiddleSelectedBox=function(){var g=c(d.activePanel).find(".slider-item.ui-selected");if(g.length>1){var f=g.first().position().top+g.first().outerHeight()/2;g.each(function(){d.setPositionBoxTop(this,f-c(this).outerHeight()/2)})}};this.spaceVertical=function(f){var o=c(d.activePanel).find(".slider-item.ui-selected");if(o.length>1){f=parseInt(f);var m=o.length;for(var h=0;h<m-1;h++){for(var g=h+1;g<m;g++){if(c(o[h]).position().top>c(o[g]).position().top){var l=o[h];o[h]=o[g];o[g]=l}}}if(f>0){for(var h=1;h<m;h++){d.setPositionBoxTop(c(o[h]),c(o[h-1]).position().top+c(o[h-1]).outerHeight()+f)}}else{if(m>2){var k=0;for(var h=0;h<m-1;h++){k+=c(o[h]).outerHeight()}f=(c(o[m-1]).position().top-c(o[0]).position().top-k)/(m-1);for(var h=1;h<m-1;h++){d.setPositionBoxTop(c(o[h]),c(o[h-1]).position().top+c(o[h-1]).outerHeight()+f)}}}}};this.spaceHorizontal=function(f){var o=c(d.activePanel).find(".slider-item.ui-selected");if(o.length>1){f=parseInt(f);var m=o.length;for(var h=0;h<m-1;h++){for(var g=h+1;g<m;g++){if(c(o[h]).position().left>c(o[g]).position().left){var l=o[h];o[h]=o[g];o[g]=l}}}if(f>0){for(var h=1;h<m;h++){d.setPositionBoxLeft(c(o[h]),c(o[h-1]).position().left+c(o[h-1]).outerWidth()+f)}}else{if(m>2){var k=0;for(var h=0;h<m-1;h++){k+=c(o[h]).outerWidth()}f=(c(o[m-1]).position().left-c(o[0]).position().left-k)/(m-1);for(var h=1;h<m-1;h++){d.setPositionBoxLeft(c(o[h]),c(o[h-1]).position().left+c(o[h-1]).outerWidth()+f)}}}}};this.setPositionBoxLeft=function(g,h){h=(h>0)?h:0;var f=c(g).parent().width()-c(g).outerWidth(true);if(h>f){h=f}c(g).css("left",h+"px");c(g).data("left",h);return h};this.setPositionBoxTop=function(f,g){g=(g>0)?g:0;var h=c(f).parent().height()-c(f).outerHeight();if(g>h){g=h}c(f).css("top",g+"px");c(f).data("top",g);return g};this.setBoxWidth=function(g,f){if(f>0){var h=c(g).parent().width()-c(g).position().left;if(f>h){f=h}c(g).width(f);c(g).data("width",f);return f}return c(g).width()};this.setBoxHeight=function(g,f){if(f>0){var h=c(g).parent().height()-c(g).position().top;if(f>h){f=h}c(g).height(f);c(g).data("height",f);return f}return c(g).height()};this.triggerChangeSettingItem=function(){d.mdSliderToolbar.changeToolbarValue()};this.changeSelectItem=function(f){c(d.activePanel).find(".slider-item.ui-selected").removeClass("ui-selected");c(f).addClass("ui-selected");this.triggerChangeSelectItem()};this.getAllItemBox=function(){return c("div.slider-item",d.activePanel)};this.changeTimelineValue=function(){d.mdSliderToolbar.changeTimelineValue()};this.setTimelineWidth=function(f){if(d.activePanel){c(d.activePanel).data("timelinewidth",f)}};this.getTimelineWidth=function(){if(d.activePanel){return c(d.activePanel).data("timelinewidth")}return null};this.getSliderData=function(){var f=[];var g=false;c("#md-tabs .ui-tabs-nav a.tab-link").each(function(){var h=c(c(this).attr("href"));if(h.length){g=false;if(h.hasClass("ui-tabs-hide")){h.removeClass("ui-tabs-hide");g=true}var j=c.stringToObject(c("input.panelsettings",h).val());j.timelinewidth=h.data("timelinewidth");var i=[];c("div.slider-item",h).each(function(){i.push(c(this).getItemValues())});f.push({itemsetting:j,boxitems:i});if(g){h.addClass("ui-tabs-hide")}}});return f};this.getSlideSettingValue=function(){var f={background_image:c("#slide-backgroundimage").val(),background_image_alt:c("#custom-bg-alt").val(),custom_thumbnail:c("#slide-thumbnail").val(),custom_thumbnail_alt:c("#custom-thumb-alt").val(),background_color:c("#slide-background-color").val(),background_overlay:c("#slide-background-overlay").val(),disabled:c("#disable-slide").is(":checked")?1:0};var g=[];c("#navbar-content-transitions input:checked").each(function(){g.push(c(this).val())});f.transitions=g;return f};this.setSlideSettingValue=function(g){if(typeof g!="object"){g={}}c.extend({background_image:"-1",background_image_alt:"",background_color:"",background_overlay:"",custom_thumbnail:"-1",custom_thumbnail_alt:"",disabled:0,transitions:[]},g);c("#slide-backgroundimage").val(g.background_image);c("#slide-thumbnail").val(g.custom_thumbnail);if(g.disabled){c("#disable-slide").attr("checked",true)}else{c("#disable-slide").attr("checked",false)}c("#navbar-content-transitions input").attr("checked",false);if(g&&g.transitions){c.each(g.transitions,function(i,h){c("#navbar-content-transitions input[value="+h+"]").attr("checked",true)})}c("#slide-background-color","#slide-setting-dlg").spectrum("set",g.background_color);c("#slide-background-overlay","#slide-setting-dlg").spectrum("set",g.background_overlay);c("#slide-thumbnail-preview").hide();c("#custom-thumb-alt").val(g.custom_thumbnail_alt);if(g&&g.custom_thumbnail!=-1){var f=c("input[name=slider_id]").val();c.post(a.settings.basePath+a.settings.pathPrefix+"?q=admin/structure/md-slider/get-background-image",{fid:g.custom_thumbnail,slider_id:f},function(h){c("#slide-thumbnail-preview img").attr("src",h);c("#slide-thumbnail-preview").show()})}c("#slide-background-preview").hide();c(".custom-bg-alt-info").hide();c("#custom-bg-alt").val(g.background_image_alt);if(g&&g.background_image!=-1){var f=c("input[name=slider_id]").val();c.post(drupalSettings.MDSlider.jsonConfigURL,{action:"bgSlider",fid:g.background_image,slider_id:f},function(h){c("#slide-background-preview img").attr("src",h);c("#slide-background-preview").show();c("#slide-background-preview").next().show()})}}};window.MdSliderPanel=b})(jQuery,Drupal);