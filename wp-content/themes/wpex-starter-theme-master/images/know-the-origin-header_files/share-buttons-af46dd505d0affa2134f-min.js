webpackJsonp([42],{4268:function(p,q,e){var m=e(6);YUI.add("squarespace-share-buttons",function(f){function e(a,b){try{var d=a[g.URL_KEYS[b]],c=h.createElement("a");c.href=d;var k=c.pathname.replace(/^\/|\/$/g,"");c.remove();var d='.Share[data-item-path="'+k+'"] .Share-buttons-item[data-service="'+b+'"]',l=f.Object.getValue(a,g.COUNT_KEYS[b])||0,m=h.querySelectorAll(d);Array.prototype.forEach.call(m,function(a){a.querySelector(".Share-buttons-item-count").innerHTML=l})}catch(n){console.error(n)}}
function n(a){this.container=a.container;this.like=a.like;this.ID=a.id;this.PATH=a.path;this.SHARE_LINK=k.Static.SQUARESPACE_CONTEXT.website.baseUrl+"/"+this.PATH;this.shareButtonClickHandler=this.shareButtonClickHandler.bind(this)}var k=f.config.win,h=f.config.win.document,g={CALLBACK_NAMESPACE:"SquarespaceShareButtonCounts"+Date.now(),SERVICE_NAMES:["facebook","linkedin","pinterest"],COUNT_KEYS:{facebook:["share","share_count"],linkedin:["count"],pinterest:["count"]},URL_KEYS:{facebook:"id",linkedin:"url",
pinterest:"url"},API_BASE_URLS:{facebook:"https://graph.facebook.com/?id=",linkedin:"https://www.linkedin.com/countserv/count/share?url=",pinterest:"https://widgets.pinterest.com/v1/urls/count.json?source=6&url="}};k[g.CALLBACK_NAMESPACE]={facebook:function(a){e(a,"facebook")},linkedin:function(a){e(a,"linkedin")},pinterest:function(a){e(a,"pinterest")}};n.prototype={init:function(){g.SERVICE_NAMES.forEach(function(a){this.getCount(a)},this);this.like&&(this.syncLikes(),this.isInLocalStorage(this.like)&&
this.like.classList.add("is-active"));this.container.addEventListener("click",this.shareButtonClickHandler)},destroy:function(){this.container.removeEventListener("click",this.shareButtonClickHandler)},getCount:function(a){var b=h.createElement("script");b.src=[g.API_BASE_URLS[a],this.SHARE_LINK,"&callback=",g.CALLBACK_NAMESPACE,".",a].join("");h.body.appendChild(b);h.body.removeChild(b)},shareButtonClickHandler:function(a){a.preventDefault();for(a=a.target;a.parentElement&&a!==this.container&&!a.classList.contains("Share-buttons-item");)a=
a.parentElement;if(a.getAttribute("data-service"))if(this.like&&a===this.like)this.onLike();else this.onShare(a)},syncLikes:function(a){var b=this.like.querySelector(".Share-buttons-item-label");a||(a=parseInt(this.like.getAttribute("data-like-count"),10));b.innerHTML=1===a?a+m(" Like"):a+m(" Likes");this.like.setAttribute("data-like-count",a)},onLike:function(){if(!this.like.classList.contains("is-active")){var a=[window.location.origin,"/api/content-items/",this.ID,"/sentiment/like","?crumb="+this.readCookie("crumb")].join(""),
b=new XMLHttpRequest;b.onreadystatechange=this.likeRequestHandler.bind(this);b.open("POST",a,!0);b.send()}},likeRequestHandler:function(a){if(!(a.target.readyState!==XMLHttpRequest.DONE||200!==a.target.status))try{!0===JSON.parse(a.target.responseText).commited&&(this.incrementLike(),this.addToLocalStorage(this.like))}catch(b){console.error("ERROR LIKING:",b)}},incrementLike:function(){var a=parseInt(this.like.getAttribute("data-like-count"),10),a=a+1;this.like.classList.add("is-active");this.syncLikes(a)},
onShare:function(a){window.open(a.getAttribute("href"),"Share","width=420,height=230,dialog");if(a=a.querySelector(".Share-buttons-item-count"))a.innerHTML=parseInt(a.innerHTML,10)+1},onSharePopupClose:function(a,b){var d=0,c=setInterval(function(){if(a.closed||150<d)clearInterval(c),this.getCount(b);d++}.bind(this),200)},getLocalStorageKey:function(a){var b=a.getAttribute("data-service");return a===this.like?"squarespace-likes":b?"squarespace-shares-"+b:null},isInLocalStorage:function(a){if(!localStorage||
!JSON)return!1;a=this.getLocalStorageKey(a);if(a=JSON.parse(localStorage.getItem(a)))return!0===a[this.ID]?!0:!1},addToLocalStorage:function(a){if(!localStorage||!JSON)return!1;a=this.getLocalStorageKey(a);var b=JSON.parse(localStorage.getItem(a))||{};b[this.ID]=!0;localStorage.setItem(a,JSON.stringify(b))},readCookie:function(a){a+="=";for(var b=h.cookie.split(";"),d=0;d<b.length;d++){for(var c=b[d];" "===c.charAt(0);)c=c.substring(1,c.length);if(0===c.indexOf(a))return c.substring(a.length,c.length)}return null}};
var l;k.Squarespace.onInitialize(f,function(){l=[];f.all(".Share").each(function(a){a=a.getDOMNode();a=new n({container:a,id:a.getAttribute("data-item-identifier"),path:a.getAttribute("data-item-path"),like:a.querySelector(".Share-buttons-item--like")});a.init();l.push(a)})});k.Squarespace.onDestroy(f,function(){l.forEach(function(a){a.destroy()});l=null})},"1.0",{requires:[]})},7494:function(p,q,e){e(4268)}},[7494]);
