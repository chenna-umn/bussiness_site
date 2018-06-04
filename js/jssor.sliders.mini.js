﻿(function(g,f,b,e,c,d,q){/*! Jssor */
$Jssor$=g.$Jssor$=g.$Jssor$||{};new(function(){});var m=function(){var b=this,a={};b.$On=b.addEventListener=function(b,c){if(typeof c!="function")return;if(!a[b])a[b]=[];a[b].push(c)};b.$Off=b.removeEventListener=function(e,d){var b=a[e];if(typeof d!="function")return;else if(!b)return;for(var c=0;c<b.length;c++)if(d==b[c]){b.splice(c,1);return}};b.e=function(e){var c=a[e],d=[];if(!c)return;for(var b=1;b<arguments.length;b++)d.push(arguments[b]);for(var b=0;b<c.length;b++)try{c[b].apply(g,d)}catch(f){}}},h;(function(){h=function(a,b){this.x=typeof a=="number"?a:0;this.y=typeof b=="number"?b:0};})();var l=g.$JssorEasing$={$EaseLinear:function(a){return a},$EaseGoBack:function(a){return 1-b.abs(2-1)},$EaseSwing:function(a){return-b.cos(a*b.PI)/2+.5},$EaseInQuad:function(a){return a*a},$EaseOutQuad:function(a){return-a*(a-2)},$EaseInOutQuad:function(a){return(a*=2)<1?1/2*a*a:-1/2*(--a*(a-2)-1)},$EaseInCubic:function(a){return a*a*a},$EaseOutCubic:function(a){return(a-=1)*a*a+1},$EaseInOutCubic:function(a){return(a*=2)<1?1/2*a*a*a:1/2*((a-=2)*a*a+2)},$EaseInQuart:function(a){return a*a*a*a},$EaseOutQuart:function(a){return-((a-=1)*a*a*a-1)},$EaseInOutQuart:function(a){return(a*=2)<1?1/2*a*a*a*a:-1/2*((a-=2)*a*a*a-2)},$EaseInQuint:function(a){return a*a*a*a*a},$EaseOutQuint:function(a){return(a-=1)*a*a*a*a+1},$EaseInOutQuint:function(a){return(a*=2)<1?1/2*a*a*a*a*a:1/2*((a-=2)*a*a*a*a+2)},$EaseInSine:function(a){return 1-b.cos(a*b.PI/2)},$EaseOutSine:function(a){return b.sin(a*b.PI/2)},$EaseInOutSine:function(a){return-1/2*(b.cos(b.PI*a)-1)},$EaseInExpo:function(a){return a==0?0:b.pow(2,10*(a-1))},$EaseOutExpo:function(a){return a==1?1:-b.pow(2,-10*a)+1},$EaseInOutExpo:function(a){return a==0||a==1?a:(a*=2)<1?1/2*b.pow(2,10*(a-1)):1/2*(-b.pow(2,-10*--a)+2)},$EaseInCirc:function(a){return-(b.sqrt(1-a*a)-1)},$EaseOutCirc:function(a){return b.sqrt(1-(a-=1)*a)},$EaseInOutCirc:function(a){return(a*=2)<1?-1/2*(b.sqrt(1-a*a)-1):1/2*(b.sqrt(1-(a-=2)*a)+1)},$EaseInElastic:function(a){if(!a||a==1)return a;var c=.3,d=.075;return-(b.pow(2,10*(a-=1))*b.sin((a-d)*2*b.PI/c))},$EaseOutElastic:function(a){if(!a||a==1)return a;var c=.3,d=.075;return b.pow(2,-10*a)*b.sin((a-d)*2*b.PI/c)+1},$EaseInOutElastic:function(a){if(!a||a==1)return a;var c=.45,d=.1125;return(a*=2)<1?-.5*b.pow(2,10*(a-=1))*b.sin((a-d)*2*b.PI/c):b.pow(2,-10*(a-=1))*b.sin((a-d)*2*b.PI/c)*.5+1},$EaseInBack:function(a){var b=1.70158;return a*a*((b+1)*a-b)},$EaseOutBack:function(a){var b=1.70158;return(a-=1)*a*((b+1)*a+b)+1},$EaseInOutBack:function(a){var b=1.70158;return(a*=2)<1?1/2*a*a*(((b*=1.525)+1)*a-b):1/2*((a-=2)*a*(((b*=1.525)+1)*a+b)+2)},$EaseInBounce:function(a){return 1-l.$EaseOutBounce(1-a)},$EaseOutBounce:function(a){return a<1/2.75?7.5625*a*a:a<2/2.75?7.5625*(a-=1.5/2.75)*a+.75:a<2.5/2.75?7.5625*(a-=2.25/2.75)*a+.9375:7.5625*(a-=2.625/2.75)*a+.984375},$EaseInOutBounce:function(a){return a<1/2?l.$EaseInBounce(a*2)*.5:l.$EaseOutBounce(a*2-1)*.5+.5},$EaseInWave:function(a){return 1-b.cos(a*b.PI*2)},$EaseOutWave:function(a){return b.sin(a*b.PI*2)},$EaseOutJump:function(a){return 1-((a*=2)<1?(a=1-a)*a*a:(a-=1)*a*a)},$EaseInJump:function(a){return(a*=2)<1?a*a*a:(a=2-a)*a*a}},r={sd:37,pd:39},n={ye:0,se:1,ue:2,te:3,qe:4,xe:5},z=1,v=2,w=4,y=5,j,a=new function(){var i=this,m=n.ye,j=0,s=0,B=0,fb=navigator.appName,k=navigator.userAgent;function F(){if(!m)if(fb=="Microsoft Internet Explorer"&&!!g.attachEvent&&!!g.ActiveXObject){var d=k.indexOf("MSIE");m=n.se;s=parseFloat(k.substring(d+5,k.indexOf(";",d)));/*@cc_on@*/j=f.documentMode||s}else if(fb=="Netscape"&&!!g.addEventListener){var c=k.indexOf("Firefox"),a=k.indexOf("Safari"),h=k.indexOf("Chrome"),b=k.indexOf("AppleWebKit");if(c>=0){m=n.ue;j=parseFloat(k.substring(c+8))}else if(a>=0){var i=k.substring(0,a).lastIndexOf("/");m=h>=0?n.qe:n.te;j=parseFloat(k.substring(i+1,a))}if(b>=0)B=parseFloat(k.substring(b+12))}else{var e=/(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(k);if(e){m=n.xe;j=parseFloat(e[2])}}}function r(){F();return m==z}function I(){return r()&&(j<6||f.compatMode=="BackCompat")}function Z(){F();return m==v}function lb(){F();return m==w}function nb(){F();return m==y}function A(){return r()&&j<9}var D;function t(a){if(!D){p(["transform","WebkitTransform","msTransform","MozTransform","OTransform"],function(b){if(!i.Yb(a.style[b])){D=b;return c}});D=D||"transform"}return D}function db(a){return Object.prototype.toString.call(a)}var L;function p(a,c){if(db(a)=="[object Array]"){for(var b=0;b<a.length;b++)if(c(a[b],b,a))break}else for(var d in a)if(c(a[d],d,a))break}function ob(){if(!L){L={};p(["Boolean","Number","String","Function","Array","Date","RegExp","Object"],function(a){L["[object "+a+"]"]=a.toLowerCase()})}return L}function C(a){return a==e?String(a):ob()[db(a)]||"object"}function eb(b,a){setTimeout(b,a||0)}function K(b,d,c){var a=!b||b=="inherit"?"":b;p(d,function(c){var b=c.exec(a);if(b){var d=a.substr(0,b.index),e=a.substr(b.lastIndex+1,a.length-(b.lastIndex+1));a=d+e}});a=c+(a.indexOf(" ")!=0?" ":"")+a;return a}function ab(b,a){if(j<9)b.style.filter=a}i.yb=r;i.bc=lb;i.jc=nb;i.Cb=A;i.U=function(){return j};i.gc=function(){return B};i.$Delay=eb;i.A=function(a){if(i.ne(a))a=f.getElementById(a);return a};i.ub=function(a){return a?a:g.event};i.Ub=function(a){a=i.ub(a);var b=new h;if(a.type=="DOMMouseScroll"&&Z()&&j<3){b.x=a.screenX;b.y=a.screenY}else if(typeof a.pageX=="number"){b.x=a.pageX;b.y=a.pageY}else if(typeof a.clientX=="number"){b.x=a.clientX+f.body.scrollLeft+f.documentElement.scrollLeft;b.y=a.clientY+f.body.scrollTop+f.documentElement.scrollTop}return b};function G(c,d,a){if(a!=q)c.style[d]=a;else{var b=c.currentStyle||c.style;a=b[d];if(a==""&&g.getComputedStyle){b=c.ownerDocument.defaultView.getComputedStyle(c,e);b&&(a=b.getPropertyValue(d)||b[d])}return a}}function Q(b,c,a,d){if(a!=q){d&&(a+="px");G(b,c,a)}else return parseFloat(G(b,c))}function l(d,a){var b=a&2,c=a?Q:G;return function(e,a){return c(e,d,a,b)}}function kb(b){if(r()&&s<9){var a=/opacity=([^)]*)/.exec(b.style.filter||"");return a?parseFloat(a[1])/100:1}else return parseFloat(b.style.opacity||"1")}function mb(c,a,f){if(r()&&s<9){var h=c.style.filter||"",i=new RegExp(/[\s]*alpha\([^\)]*\)/g),e=b.round(100*a),d="";if(e<100||f)d="alpha(opacity="+e+") ";var g=K(h,[i],d);ab(c,g)}else c.style.opacity=a==1?"":b.round(a*100)/100}i.je=function(b,c){var a=t(b);if(a)b.style[a+"Origin"]=c};i.pe=function(a,c){if(r()&&s<9||s<10&&I())a.style.zoom=c==1?"":c;else{var b=t(a);if(b){var f="scale("+c+")",e=a.style[b],g=new RegExp(/[\s]*scale\(.*?\)/g),d=K(e,[g],f);a.style[b]=d}}};i.oe=function(a){if(!a.style[t(a)]||a.style[t(a)]=="none")a.style[t(a)]="perspective(2000px)"};i.d=function(a,c,d,b){a=i.A(a);if(a.addEventListener){c=="mousewheel"&&a.addEventListener("DOMMouseScroll",d,b);a.addEventListener(c,d,b)}else if(a.attachEvent){a.attachEvent("on"+c,d);b&&a.setCapture&&a.setCapture()}};i.Qc=function(a,c,d,b){a=i.A(a);if(a.removeEventListener){c=="mousewheel"&&a.removeEventListener("DOMMouseScroll",d,b);a.removeEventListener(c,d,b)}else if(a.detachEvent){a.detachEvent("on"+c,d);b&&a.releaseCapture&&a.releaseCapture()}};i.Uc=function(b,a){i.d(A()?f:g,"mouseup",b,a)};i.S=function(a){a=i.ub(a);a.preventDefault&&a.preventDefault();a.cancel=c;a.returnValue=d};i.p=function(e,d){for(var b=[],a=2;a<arguments.length;a++)b.push(arguments[a]);var c=function(){for(var c=b.concat([]),a=0;a<arguments.length;a++)c.push(arguments[a]);return d.apply(e,c)};return c};i.hd=function(a,c){var b=f.createTextNode(c);i.fc(a);a.appendChild(b)};i.fc=function(a){a.innerHTML=""};i.kb=function(c){for(var b=[],a=c.firstChild;a;a=a.nextSibling)a.nodeType==1&&b.push(a);return b};function R(a,c,b,f){if(!b)b="u";for(a=a?a.firstChild:e;a;a=a.nextSibling)if(a.nodeType==1){if(i.G(a,b)==c)return a;if(f){var d=R(a,c,b,f);if(d)return d}}}i.o=R;function W(a,c,d){for(a=a?a.firstChild:e;a;a=a.nextSibling)if(a.nodeType==1){if(a.tagName==c)return a;if(d){var b=W(a,c,d);if(b)return b}}}i.ad=W;i.bd=function(b,a){return b.getElementsByTagName(a)};i.m=function(c){for(var b=1;b<arguments.length;b++){var a=arguments[b];if(a)for(var d in a)c[d]=a[d]}return c};i.Yb=function(a){return C(a)=="undefined"};i.Yc=function(a){return C(a)=="function"};i.ne=function(a){return C(a)=="string"};i.dd=function(a){return!isNaN(parseFloat(a))&&isFinite(a)};i.h=p;i.fb=function(a){return i.Xb("DIV",a)};i.Oc=function(a){return i.Xb("SPAN",a)};i.Xb=function(b,a){a=a||f;return a.createElement(b)};i.N=function(){};i.Tb=function(a,b){return a.getAttribute(b)};i.G=function(a,b){return i.Tb(a,b)||i.Tb(a,"data-"+b)};i.Mc=function(b,c,a){b.setAttribute(c,a)};i.ac=function(a){return a.className};i.Ec=function(b,a){b.className=a||""};i.Y=function(a){return a.parentNode};i.x=function(a){i.z(a,"none")};i.n=function(a,b){i.z(a,b==d?"none":"")};i.xb=function(b,a){b.removeAttribute(a)};i.Zc=function(){return r()&&j<10};i.cd=function(d,c){if(c)d.style.clip="rect("+b.round(c.$Top)+"px "+b.round(c.$Right)+"px "+b.round(c.$Bottom)+"px "+b.round(c.$Left)+"px)";else{var g=d.style.cssText,f=[new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i),new RegExp(/[\s]*cliptop: .*?[;]?/i),new RegExp(/[\s]*clipright: .*?[;]?/i),new RegExp(/[\s]*clipbottom: .*?[;]?/i),new RegExp(/[\s]*clipleft: .*?[;]?/i)],e=K(g,f,"");a.Eb(d,e)}};i.v=function(){return+new Date};i.r=function(b,a){b.appendChild(a)};i.ib=function(c,b,a){c.insertBefore(b,a)};i.Z=function(b,a){b.removeChild(a)};i.Wc=function(b,a){p(a,function(a){i.Z(b,a)})};i.Xc=function(a){i.Wc(a,i.kb(a))};i.mc=function(b,a){var c=f.body;while(a&&b!=a&&c!=a)try{a=a.parentNode}catch(e){return d}return b==a};i.s=function(b,a){return b.cloneNode(a)};function N(b,a,c){a.onload=e;a.abort=e;b&&b(a,c)}i.P=function(d,b){if(i.jc()&&j<11.6||!d)N(b,e);else{var a=new Image;a.onload=i.p(e,N,b,a);a.onabort=i.p(e,N,b,a,c);a.src=d}};i.jd=function(e,b,f){var d=e.length+1;function c(a){d--;if(b&&a&&a.src==b.src)b=a;!d&&f&&f(b)}a.h(e,function(b){a.P(b.src,c)});c()};i.uc=function(d,k,j,i){if(i)d=a.s(d,c);for(var h=a.bd(d,k),f=h.length-1;f>-1;f--){var b=h[f],e=a.s(j,c);a.Ec(e,a.ac(b));a.Eb(e,b.style.cssText);var g=a.Y(b);a.ib(g,e,b);a.Z(g,b)}return d};var E;function qb(b){var g=this,h,e,j;function f(){var c=h;if(e)c+="dn";else if(j)c+="av";a.Ec(b,c)}function k(){E.push(g);e=c;f()}g.fd=function(){e=d;f()};g.Ac=function(a){j=a;f()};b=i.A(b);if(!E){i.Uc(function(){var a=E;E=[];p(a,function(a){a.fd()})});E=[]}h=i.ac(b);a.d(b,"mousedown",k)}i.gb=function(a){return new qb(a)};i.Cc=G;i.O=l("overflow");i.Eb=l("cssText");i.l=l("top",2);i.i=l("left",2);i.g=l("width",2);i.f=l("height",2);i.ve=l("marginLeft",2);i.re=l("marginTop",2);i.t=l("position");i.z=l("display");i.y=l("zIndex",1);i.Mb=function(b,a,c){if(a!=q)mb(b,a,c);else return kb(b)};var P={$Opacity:i.Mb,$Top:i.l,$Left:i.i,Fb:i.g,Nb:i.f,R:i.t,Qf:i.z,$ZIndex:i.y},u;function J(){if(!u)u=i.m({Rf:i.re,Sf:i.ve,$Clip:i.cd},P);return u}i.Rc=J;i.I=function(c,b){var a=J();p(b,function(d,b){a[b]&&a[b](c,d)})};new(function(){})};j=function(n,m,g,O,z,x){n=n||0;var f=this,r,o,p,y,A=0,C,M,L,D,j=0,t=0,E,k=n,i,h,q,u=[],B;function I(b){i+=b;h+=b;k+=b;j+=b;t+=b;a.h(u,function(a){a,a.$Shift(b)})}function N(a,b){var c=a-i+n*b;I(c);return h}function w(w,G){var n=w;if(q&&(n>=h||n<=i))n=((n-i)%q+q)%q+i;if(!E||y||G||j!=n){var p=b.min(n,h);p=b.max(p,i);if(!E||y||G||p!=t){if(x){var d=x;if(z){var s=(p-k)/(m||1);if(g.Sc&&a.bc()&&m)s=b.round(s*m/16)/m*16;if(g.$Reverse)s=1-s;d={};for(var o in x){var R=M[o]||1,J=L[o]||[0,1],l=(s-J[0])/J[1];l=b.min(b.max(l,0),1);l=l*R;var H=b.floor(l);if(l!=H)l-=H;var Q=C[o]||C.lb,I=Q(l),r,K=z[o],F=x[o];if(a.dd(F))r=K+(F-K)*I;else{r=a.m({H:{}},z[o]);a.h(F.H,function(c,b){var a=c*I;r.H[b]=a;r[b]+=a})}d[o]=r}}if(z.$Zoom);if(x.$Clip&&g.$Move){var v=d.$Clip.H,D=(v.$Top||0)+(v.$Bottom||0),A=(v.$Left||0)+(v.$Right||0);d.$Left=(d.$Left||0)+A;d.$Top=(d.$Top||0)+D;d.$Clip.$Left-=A;d.$Clip.$Right-=A;d.$Clip.$Top-=D;d.$Clip.$Bottom-=D}if(d.$Clip&&a.Zc()&&!d.$Clip.$Top&&!d.$Clip.$Left&&d.$Clip.$Right==g.Gb&&d.$Clip.$Bottom==g.Jb)d.$Clip=e;a.h(d,function(b,a){B[a]&&B[a](O,b)})}f.vb(t-k,p-k)}t=p;a.h(u,function(b,c){var a=w<j?u[u.length-c-1]:b;a.C(w,G)});var P=j,N=w;j=n;E=c;f.nb(P,N)}}function F(a,c){c&&a.rc(h,1);h=b.max(h,a.ab());u.push(a)}function H(){if(r){var d=a.v(),e=b.min(d-A,a.jc()?80:20),c=j+e*p;A=d;if(c*p>=o*p)c=o;w(c);if(!y&&c*p>=o*p)J(D);else a.$Delay(H,g.$Interval)}}function v(d,e,g){if(!r){r=c;y=g;D=e;d=b.max(d,i);d=b.min(d,h);o=d;p=o<j?-1:1;f.Fc();A=a.v();H()}}function J(a){if(r){y=r=D=d;f.Ic();a&&a()}}f.$Play=function(a,b,c){v(a?j+a:h,b,c)};f.Hc=function(b,a,c){v(b,a,c)};f.J=function(){J()};f.id=function(a){v(a)};f.F=function(){return j};f.Vb=function(){return o};f.ob=function(){return t};f.C=w;f.lc=function(){w(i,c)};f.$Move=function(a){w(j+a)};f.$IsPlaying=function(){return r};f.Nc=function(a){q=a};f.rc=N;f.$Shift=I;f.Qb=function(a){F(a,0)};f.Kb=function(a){F(a,1)};f.ab=function(){return h};f.nb=a.N;f.Fc=a.N;f.Ic=a.N;f.vb=a.N;f.wb=a.v();g=a.m({$Interval:15},g);q=g.cc;B=a.m({},a.Rc(),g.dc);i=k=n;h=n+m;var M=g.$Round||{},L=g.$During||{};C=a.m({lb:a.Yc(g.$Easing)&&g.$Easing||l.$EaseSwing},g.$Easing)};var s;new function(){;function n(o,ac){var k=this;function wc(){var a=this;j.call(a,-1e8,2e8);a.de=function(){var c=a.ob(),d=b.floor(c),f=u(d),e=c-b.floor(c);return{D:f,le:d,R:e}};a.nb=function(d,a){var e=b.floor(a);if(e!=a&&a>d)e++;Ob(e,c);k.e(n.$EVT_POSITION_CHANGE,u(a),u(d),a,d)}}function vc(){var b=this;j.call(b,0,0,{cc:s});a.h(C,function(a){S&1&&a.Nc(s);b.Kb(a);a.$Shift(sb/Vb)})}function uc(){var a=this,b=Nb.$Elmt;j.call(a,-1,2,{$Easing:l.$EaseLinear,dc:{R:Tb},cc:s},b,{R:1},{R:-1});a.jb=b}function ic(o,m){var a=this,f,g,h,l,b;j.call(a,-1e8,2e8);a.Fc=function(){P=c;U=e;k.e(n.$EVT_SWIPE_START,u(x.F()),x.F())};a.Ic=function(){P=d;l=d;var a=x.de();k.e(n.$EVT_SWIPE_END,u(x.F()),x.F());!a.R&&yc(a.le,q)};a.nb=function(d,c){var a;if(l)a=b;else{a=g;if(h)a=i.$SlideEasing(c/h)*(g-f)+f}x.C(a)};a.hb=function(b,d,c,e){f=b;g=d;h=c;x.C(b);a.C(0);a.Hc(c,e)};a.ge=function(d){l=c;b=d;a.$Play(d,e,c)};a.we=function(a){b=a};x=new wc;x.Qb(o);x.Qb(m)}function jc(){var c=this,b=Sb();a.y(b,0);c.$Elmt=b;c.eb=function(){a.x(b);a.fc(b)}}function tc(p,o){var f=this,t,w,K,x,g,y=[],V,r,X,I,P,F,l,v,h;j.call(f,-B,B+1,{});function E(a){w&&w.zb();t&&t.zb();W(p,a);F=c;t=new M.$Class(p,M,1);w=new M.$Class(p,M);w.lc();t.lc()}function bb(){t.wb<M.wb&&E()}function L(o,q,m){if(!I){I=c;if(g&&m){var e=m.width,b=m.height,l=e,j=b;if(e&&b&&i.$FillMode){if(i.$FillMode&3&&(!(i.$FillMode&4)||e>J||b>H)){var h=d,p=J/H*b/e;if(i.$FillMode&1)h=p>1;else if(i.$FillMode&2)h=p<1;l=h?e*H/b:J;j=h?H:b*J/e}a.g(g,l);a.f(g,j);a.l(g,(H-j)/2);a.i(g,(J-l)/2)}a.t(g,"absolute");k.e(n.$EVT_LOAD_END,Yb)}}a.x(q);o&&o(f)}function Y(b,c,d,e){if(e==U&&q==o&&Q)if(!xc){var a=u(b);z.me(a,o,c,f,d);c.Ad();Z.rc(a,1);Z.C(a);A.hb(b,b,0)}}function eb(b){if(b==U&&q==o){if(!l){var a=e;if(z)if(z.D==o)a=z.he();else z.eb();bb();l=new rc(o,a,f.yd(),f.wd());l.Kc(h)}!l.$IsPlaying()&&l.Ab()}}function S(d,c){if(d==o){if(d!=c)C[c]&&C[c].xd();h&&h.$Enable();var k=U=a.v();f.P(a.p(e,eb,k))}else{var j=b.abs(o-d),g=B+i.$LazyLoading;(!P||j<=g||s-j<=g)&&f.P()}}function fb(){if(q==o&&l){l.J();h&&h.$Quit();h&&h.$Disable();l.Jc()}}function gb(){q==o&&l&&l.J()}function O(b){if(T)a.S(b);else k.e(n.$EVT_CLICK,o,b)}function N(){h=v.pInstance;l&&l.Kc(h)}f.P=function(d,b){b=b||x;if(y.length&&!I){a.n(b);if(!X){X=c;k.e(n.$EVT_LOAD_START);a.h(y,function(b){if(!b.src){b.src=a.G(b,"src2");a.z(b,b["display-origin"])}})}a.jd(y,g,a.p(e,L,d,b))}else L(d,b)};f.od=function(){if(z){var b=z.fe(s);if(b){var f=U=a.v(),c=o+1,d=C[u(c)];return d.P(a.p(e,Y,c,d,b,f),x)}}ab(q+i.$AutoPlaySteps)};f.Bb=function(){S(o,o)};f.xd=function(){h&&h.$Quit();h&&h.$Disable();f.qc();l&&l.ld();l=e;E()};f.Ad=function(){a.x(p)};f.qc=function(){a.n(p)};f.md=function(){h&&h.$Enable()};function W(b,f,e){if(b["jssor-slider"])return;e=e||0;if(!F){if(b.tagName=="IMG"){y.push(b);if(!b.src){P=c;b["display-origin"]=a.z(b);a.x(b)}}a.Cb()&&a.y(b,(a.y(b)||0)+1);if(i.$HWA&&a.gc()>0)(!G||a.gc()<534||!db)&&a.oe(b)}var h=a.kb(b);a.h(h,function(h){var j=a.G(h,"u");if(j=="player"&&!v){v=h;if(v.pInstance)N();else a.d(v,"dataavailable",N)}if(j=="caption"){if(!a.yb()&&!f){var i=a.s(h,c);a.ib(b,i,h);a.Z(b,h);h=i;f=c}}else if(!F&&!e&&!g&&a.G(h,"u")=="image"){g=h;if(g){if(g.tagName=="A"){V=g;a.I(V,R);r=a.s(g,d);a.d(r,"click",O);a.I(r,R);a.z(r,"block");a.Mb(r,0);a.Cc(r,"backgroundColor","#000");g=a.ad(g,"IMG")}g.border=0;a.I(g,R)}}W(h,f,e+1)})}f.vb=function(c,b){var a=B-b;Tb(K,a)};f.yd=function(){return t};f.wd=function(){return w};f.D=o;m.call(f);var D=a.o(p,"thumb");if(D){f.ud=a.s(D,c);a.xb(D,"id");a.x(D)}a.n(p);x=a.s(cb,c);a.y(x,1e3);a.d(p,"click",O);E(c);f.hc=g;f.nc=r;f.jb=K=p;a.r(K,x);k.$On(203,S);k.$On(22,gb);k.$On(24,fb)}function rc(g,r,v,u){var b=this,m=0,x=0,o,h,e,f,l,s,w,t,p=C[g];j.call(b,0,0);function y(){a.Xc(N);Zb&&l&&p.nc&&a.r(N,p.nc);a.n(N,l||!p.hc)}function A(){if(s){s=d;k.e(n.$EVT_ROLLBACK_END,g,e,m,h,e,f);b.C(h)}b.Ab()}function B(a){t=a;b.J();b.Ab()}b.Ab=function(){var a=b.ob();if(!I&&!P&&!t&&q==g){if(!a){if(o&&!l){l=c;b.Jc(c);k.e(n.$EVT_SLIDESHOW_START,g,m,x,o,f)}y()}var d,j=n.$EVT_STATE_CHANGE;if(a!=f)if(a==e)d=f;else if(a==h)d=e;else if(!a)d=h;else if(a>e){s=c;d=e;j=n.$EVT_ROLLBACK_START}else d=b.Vb();k.e(j,g,a,m,h,e,f);var i=Q&&(!Qb||Y);if(a==f)i&&p.od();else(i||a!=e)&&b.Hc(d,A)}};b.ld=function(){z&&z.D==g&&z.eb();var a=b.ob();a<f&&k.e(n.$EVT_STATE_CHANGE,g,-a-1,m,h,e,f)};b.Jc=function(b){r&&a.O(gb,b&&r.ic.$Outside?"":"hidden")};b.vb=function(b,a){if(l&&a>=o){l=d;y();p.qc();z.eb();k.e(n.$EVT_SLIDESHOW_END,g,m,x,o,f)}k.e(n.$EVT_PROGRESS_CHANGE,g,a,m,h,e,f)};b.Kc=function(a){if(a&&!w){w=a;a.$On($JssorPlayer$.Pc,B)}};r&&b.Kb(r);o=b.ab();b.ab();b.Kb(v);h=v.ab();e=h+i.$AutoPlayInterval;u.$Shift(e);b.Qb(u);f=b.ab()}function Tb(c,g){var f=w>0?w:i.$PlayOrientation,d=b.round(xb*g*(f&1)),e=b.round(yb*g*(f>>1&1));if(a.yb()&&a.U()>=10&&a.U()<11)c.style.msTransform="translate("+d+"px, "+e+"px)";else if(a.bc()&&a.U()>=30&&a.U()<34){c.style.WebkitTransition="transform 0s";c.style.WebkitTransform="translate3d("+d+"px, "+e+"px, 0px) perspective(2000px)"}else{a.i(c,d);a.l(c,e)}}function pc(a){T=0;!K&&mc()&&oc(a)}function oc(b){mb=P;I=c;wb=d;U=e;a.d(f,kb,Wb);a.v();Fb=A.Vb();A.J();if(!mb)w=0;if(G){var h=b.touches[0];qb=h.clientX;rb=h.clientY}else{var g=a.Ub(b);qb=g.x;rb=g.y;a.S(b)}E=0;bb=0;fb=0;D=x.F();k.e(n.$EVT_DRAG_START,u(D),D,b)}function Wb(e){if(I&&(!a.Cb()||e.button)){var f;if(G){var n=e.touches;if(n&&n.length>0)f=new h(n[0].clientX,n[0].clientY)}else f=a.Ub(e);if(f){var l=f.x-qb,m=f.y-rb;if(b.floor(D)!=D)w=w||i.$PlayOrientation&K;if((l||m)&&!w){if(K==3)if(b.abs(m)>b.abs(l))w=2;else w=1;else w=K;if(G&&w==1&&b.abs(m)-b.abs(l)>3)wb=c}if(w){var d=m,k=yb;if(w==1){d=l;k=xb}if(!(S&1)){if(d>0){var g=k*q,j=d-g;if(j>0)d=g+b.sqrt(j)*5}if(d<0){var g=k*(s-B-q),j=-d-g;if(j>0)d=-g-b.sqrt(j)*5}}if(E-bb<-2)fb=1;else if(E-bb>2)fb=0;bb=E;E=d;ob=D-E/k/(jb||1);if(E&&w&&!wb){a.S(e);if(!P)A.ge(ob);else A.we(ob)}else a.Cb()&&a.S(e)}}}else Bb(e)}function Bb(h){kc();if(I){I=d;a.v();a.Qc(f,kb,Wb);T=E;T&&a.S(h);A.J();var e=x.F();k.e(n.$EVT_DRAG_END,u(e),e,u(D),D,h);var c=b.floor(D);if(b.abs(E)>=i.$MinDragOffsetToSlide){c=b.floor(e);c+=fb}if(!(S&1))c=b.min(s-B,b.max(c,0));var g=b.abs(c-e);g=1-b.pow(1-g,5);if(!T&&mb)A.id(Fb);else if(e==c){pb.md();pb.Bb()}else A.hb(e,c,g*Pb)}}function hc(a){C[q];q=u(a);pb=C[q];Ob(a);return q}function yc(a,b){w=0;hc(a);k.e(n.$EVT_PARK,u(a),b)}function Ob(b,c){ub=b;a.h(O,function(a){a.Sb(u(b),b,c)})}function mc(){var b=n.wc||0,a=i.$DragOrientation;if(G)a&1&&(a&=1);n.wc|=a;return K=a&~b}function kc(){if(K){n.wc&=~i.$DragOrientation;K=0}}function Sb(){var b=a.fb();a.I(b,R);a.t(b,"absolute");return b}function u(a){return(a%s+s)%s}function ec(a,c){if(c)if(!S){a=b.min(b.max(a+ub,0),s-1);c=d}else if(S&2){a=u(a+ub);c=d}ab(a,i.$SlideDuration,c)}function vb(){a.h(O,function(a){a.Ib(a.db.$ChanceToShow>Y)})}function cc(b){b=a.ub(b);var c=b.target?b.target:b.srcElement,d=b.relatedTarget?b.relatedTarget:b.toElement;if(!a.mc(o,c)||a.mc(o,d))return;Y=1;vb();C[q].Bb()}function bc(){Y=0;vb()}function dc(){R={Fb:J,Nb:H,$Top:0,$Left:0};a.h(W,function(b){a.I(b,R);a.t(b,"absolute");a.O(b,"hidden");a.x(b)});a.I(cb,R)}function hb(b,a){ab(b,a,c)}function ab(h,g,l){if(Lb&&(!I||i.$NaviQuitDrag)){P=c;I=d;A.J();if(a.Yb(g))g=Pb;var f=Cb.ob(),e=h;if(l){e=f+h;if(h>0)e=b.ceil(e);else e=b.floor(e)}if(!(S&1)){e=u(e);e=b.max(0,b.min(e,s-B))}var k=(e-f)%s;e=f+k;var j=f==e?0:g*b.abs(k);j=b.min(j,g*B*1.5);A.hb(f,e,j||1)}}k.$PlayTo=ab;k.$GoTo=function(a){ab(a,1)};k.$Next=function(){hb(1)};k.$Prev=function(){hb(-1)};k.$Pause=function(){Q=d};k.$Play=function(){if(!Q){Q=c;C[q]&&C[q].Bb()}};k.$SetSlideshowTransitions=function(a){i.$SlideshowOptions.$Transitions=a};k.$SetCaptionTransitions=function(b){M.wb=a.v()};k.$SlidesCount=function(){return W.length};k.$CurrentIndex=function(){return q};k.$IsAutoPlaying=function(){return Q};k.$IsDragging=function(){return I};k.$IsSliding=function(){return P};k.$IsMouseOver=function(){return!Y};k.$LastDragSucceded=function(){return T};k.$GetOriginalWidth=function(){return a.g(v||o)};k.$GetOriginalHeight=function(){return a.f(v||o)};k.$GetScaleWidth=function(){return a.g(o)};k.$GetScaleHeight=function(){return a.f(o)};k.$SetScaleWidth=function(c){if(!v){var b=a.s(o,d);a.xb(b,"id");a.t(b,"relative");a.l(b,0);a.i(b,0);a.O(b,"visible");v=a.s(o,d);a.xb(v,"id");a.Eb(v,"");a.t(v,"absolute");a.l(v,0);a.i(v,0);a.g(v,a.g(o));a.f(v,a.f(o));a.je(v,"0 0");a.r(v,b);var f=a.kb(o);a.r(o,v);var e={navigator:X&&X.$Scale==d,arrowleft:L&&L.$Scale==d,arrowright:L&&L.$Scale==d,thumbnavigator:F&&F.$Scale==d,thumbwrapper:F&&F.$Scale==d};a.h(f,function(c){a.r(e[a.G(c,"u")]?o:b,c)});a.n(b);a.n(v)}jb=c/a.g(v);a.pe(v,jb);a.g(o,c);a.f(o,jb*a.f(v));a.h(O,function(a){a.Rb()})};k.zc=function(a){var d=b.ceil(u(sb/Vb)),c=u(a-q+d);if(c>B){if(a-q>s/2)a-=s;else if(a-q<=-s/2)a+=s}else a=q+c-d;return a};m.call(this);k.$Elmt=o=a.A(o);var i=a.m({$FillMode:0,$LazyLoading:1,$StartIndex:0,$AutoPlay:d,$Loop:1,$HWA:c,$NaviQuitDrag:c,$AutoPlaySteps:1,$AutoPlayInterval:3e3,$PauseOnHover:1,$SlideDuration:500,$SlideEasing:l.$EaseOutQuad,$MinDragOffsetToSlide:20,$SlideSpacing:0,$DisplayPieces:1,$ParkingPosition:0,$UISearchMode:1,$PlayOrientation:1,$DragOrientation:1},ac),eb=i.$SlideshowOptions,M=a.m({$Class:t},i.ze),X=i.$BulletNavigatorOptions,L=i.$ArrowNavigatorOptions,F=i.$ThumbnailNavigatorOptions,V=i.$UISearchMode,v,y=a.o(o,"slides",e,V),cb=a.o(o,"loading",e,V)||a.fb(f),Hb=a.o(o,"navigator",e,V),Xb=a.o(o,"arrowleft",e,V),Ub=a.o(o,"arrowright",e,V),Eb=a.o(o,"thumbnavigator",e,V),gc=a.g(y),fc=a.f(y),R,W=[],qc=a.kb(y);a.h(qc,function(b){b.tagName=="DIV"&&!a.G(b,"u")&&W.push(b)});var q=-1,ub,pb,s=W.length,J=i.$SlideWidth||gc,H=i.$SlideHeight||fc,Rb=i.$SlideSpacing,xb=J+Rb,yb=H+Rb,Vb=i.$PlayOrientation==1?xb:yb,B=b.min(i.$DisplayPieces,s),gb,w,K,wb,G,O=[],Kb,Mb,Jb,Zb,xc,Q,Qb=i.$PauseOnHover,Pb=i.$SlideDuration,nb,db,sb,Lb=B<s,S=Lb?i.$Loop:0;if(!(S&1))i.$ParkingPosition=0;if(i.$DisplayPieces>1||i.$ParkingPosition)i.$DragOrientation&=i.$PlayOrientation;var nc=i.$DragOrientation,T,Y=1,P,I,U,qb=0,rb=0,E,bb,fb,Cb,x,Z,A,Nb=new jc,jb;Q=i.$AutoPlay;k.db=ac;dc();o["jssor-slider"]=c;a.y(y,a.y(y)||0);a.t(y,"absolute");gb=a.s(y);a.ib(a.Y(y),gb,y);if(eb){Zb=eb.$ShowLink;nb=eb.$Class;db=B==1&&s>1&&nb&&(!a.yb()||a.U()>=8)}sb=db||B>=s?0:i.$ParkingPosition;var tb=y,C=[],z,N,Ab="mousedown",kb="mousemove",Db="mouseup",ib,D,mb,Fb,ob;if(g.navigator.msPointerEnabled){Ab="MSPointerDown";kb="MSPointerMove";Db="MSPointerUp";ib="MSPointerCancel";if(i.$DragOrientation){var zb="none";if(i.$DragOrientation==1)zb="pan-y";else if(i.$DragOrientation==2)zb="pan-x";a.Mc(tb.style,"-ms-touch-action",zb)}}else if("ontouchstart"in g||"createTouch"in f){G=c;Ab="touchstart";kb="touchmove";Db="touchend";ib="touchcancel"}Z=new uc;if(db)z=new nb(Nb,J,H,eb,G);a.r(gb,Z.jb);a.O(y,"hidden");N=Sb();a.Cc(N,"backgroundColor","#000");a.Mb(N,0);a.ib(tb,N,tb.firstChild);for(var lb=0;lb<W.length;lb++){var sc=W[lb],Yb=new tc(sc,lb);C.push(Yb)}a.x(cb);Cb=new vc;A=new ic(Cb,Z);if(nc){a.d(y,Ab,pc);a.d(f,Db,Bb);ib&&a.d(f,ib,Bb)}Qb&=G?2:1;if(Hb&&X){Kb=new X.$Class(Hb,X);O.push(Kb)}if(L&&Xb&&Ub){Mb=new L.$Class(Xb,Ub,L);O.push(Mb)}if(Eb&&F){F.$StartIndex=i.$StartIndex;Jb=new F.$Class(Eb,F);O.push(Jb)}a.h(O,function(a){a.tb(s,C,cb);a.$On(p.pb,ec)});k.$SetScaleWidth(k.$GetOriginalWidth());a.d(o,"mouseout",cc);a.d(o,"mouseover",bc);vb();i.$ArrowKeyNavigation&&a.d(f,"keydown",function(a){if(a.keyCode==r.sd)hb(-1);else a.keyCode==r.pd&&hb(1)});A.hb(i.$StartIndex,i.$StartIndex,0)}n.$EVT_CLICK=21;n.$EVT_DRAG_START=22;n.$EVT_DRAG_END=23;n.$EVT_SWIPE_START=24;n.$EVT_SWIPE_END=25;n.$EVT_LOAD_START=26;n.$EVT_LOAD_END=27;n.$EVT_POSITION_CHANGE=202;n.$EVT_PARK=203;n.$EVT_SLIDESHOW_START=206;n.$EVT_SLIDESHOW_END=207;n.$EVT_PROGRESS_CHANGE=208;n.$EVT_STATE_CHANGE=209;n.$EVT_ROLLBACK_START=210;n.$EVT_ROLLBACK_END=211;g.$JssorSlider$=s=n};var p={pb:1};g.$JssorBulletNavigator$=function(f,D){var h=this;m.call(h);f=a.A(f);var t,u,s,r,l=0,g,n,k,y,z,j,i,q,o,C=[],A=[];function x(a){a!=-1&&A[a].Ac(a==l)}function v(a){h.e(p.pb,a*n)}h.$Elmt=f;h.Sb=function(a){if(a!=r){var d=l,c=b.floor(a/n);l=c;r=a;x(d);x(c)}};h.Ib=function(b){a.n(f,b)};var B;h.Rb=function(){if(!B||g.$Scale==d){g.$AutoCenter&1&&a.i(f,(a.g(a.Y(f))-u)/2);g.$AutoCenter&2&&a.l(f,(a.f(a.Y(f))-s)/2);B=c}};var w;h.tb=function(D){if(!w){t=b.ceil(D/n);l=0;var p=q+y,r=o+z,m=b.ceil(t/k)-1;u=q+p*(!j?m:k-1);s=o+r*(j?m:k-1);a.g(f,u);a.f(f,s);for(var d=0;d<t;d++){var B=a.Oc();a.hd(B,d+1);var h=a.uc(i,"NumberTemplate",B,c);a.t(h,"absolute");var x=d%(m+1);a.i(h,!j?p*x:d%k*p);a.l(h,j?r*x:b.floor(d/(m+1))*r);a.r(f,h);C[d]=h;g.$ActionMode&1&&a.d(h,"click",a.p(e,v,d));g.$ActionMode&2&&a.d(h,"mouseover",a.p(e,v,d));A[d]=a.gb(h)}w=c}};h.db=g=a.m({$SpacingX:0,$SpacingY:0,$Orientation:1,$ActionMode:1},D);i=a.o(f,"prototype");q=a.g(i);o=a.f(i);a.Z(f,i);n=g.$Steps||1;k=g.$Lanes||1;y=g.$SpacingX;z=g.$SpacingY;j=g.$Orientation-1};g.$JssorArrowNavigator$=function(b,g,s){var f=this;m.call(f);var h,j,q=a.Y(b),o=a.g(b),l=a.f(b);function k(a){f.e(p.pb,a,c)}f.Sb=function(b,a,c){if(c);};f.Ib=function(c){a.n(b,c);a.n(g,c)};var r;f.Rb=function(){if(!r||h.$Scale==d){var f=a.g(q),e=a.f(q);if(h.$AutoCenter&1){a.i(b,(f-o)/2);a.i(g,(f-o)/2)}if(h.$AutoCenter&2){a.l(b,(e-l)/2);a.l(g,(e-l)/2)}r=c}};var n;f.tb=function(d){if(!n){a.d(b,"click",a.p(e,k,-j));a.d(g,"click",a.p(e,k,j));a.gb(b);a.gb(g);n=c}};f.db=h=a.m({$Steps:1},s);j=h.$Steps};g.$JssorThumbnailNavigator$=function(i,A){var h=this,x,l,e,u=[],y,w,f,n,o,t,r,k,q,g,j;m.call(h);i=a.A(i);function z(n,d){var g=this,b,m,k;function o(){m.Ac(l==d)}function i(){if(!q.$LastDragSucceded()){var a=(f-d%f)%f,b=q.zc((d+a)/f),c=b*f-a;h.e(p.pb,c)}}g.D=d;g.ec=o;k=n.ud||n.hc||a.fb();g.jb=b=a.uc(j,"ThumbnailTemplate",k,c);m=a.gb(b);e.$ActionMode&1&&a.d(b,"click",i);e.$ActionMode&2&&a.d(b,"mouseover",i)}h.Sb=function(c,d,e){var a=l;l=c;a!=-1&&u[a].ec();u[c].ec();!e&&q.$PlayTo(q.zc(b.floor(d/f)))};h.Ib=function(b){a.n(i,b)};h.Rb=a.N;var v;h.tb=function(F,D){if(!v){x=F;b.ceil(x/f);l=-1;k=b.min(k,D.length);var h=e.$Orientation&1,p=t+(t+n)*(f-1)*(1-h),m=r+(r+o)*(f-1)*h,C=p+(p+n)*(k-1)*h,A=m+(m+o)*(k-1)*(1-h);a.t(g,"absolute");a.O(g,"hidden");e.$AutoCenter&1&&a.i(g,(y-C)/2);e.$AutoCenter&2&&a.l(g,(w-A)/2);a.g(g,C);a.f(g,A);var j=[];a.h(D,function(l,e){var i=new z(l,e),d=i.jb,c=b.floor(e/f),k=e%f;a.i(d,(t+n)*k*(1-h));a.l(d,(r+o)*k*h);if(!j[c]){j[c]=a.fb();a.r(g,j[c])}a.r(j[c],d);u.push(i)});var E=a.m({$AutoPlay:d,$NaviQuitDrag:d,$SlideWidth:p,$SlideHeight:m,$SlideSpacing:n*h+o*(1-h),$MinDragOffsetToSlide:12,$SlideDuration:200,$PauseOnHover:1,$PlayOrientation:e.$Orientation,$DragOrientation:e.$DisableDrag?0:e.$Orientation},e);q=new s(i,E);v=c}};h.db=e=a.m({$SpacingX:3,$SpacingY:3,$DisplayPieces:1,$Orientation:1,$AutoCenter:3,$ActionMode:1},A);y=a.g(i);w=a.f(i);g=a.o(i,"slides");j=a.o(g,"prototype");t=a.g(j);r=a.f(j);a.Z(g,j);f=e.$Lanes||1;n=e.$SpacingX;o=e.$SpacingY;k=e.$DisplayPieces};function t(){j.call(this,0,0);this.zb=a.N}})(window,document,Math,null,true,false)