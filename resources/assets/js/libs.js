!function(t,e){"use strict";"object"==typeof module&&"object"==typeof module.exports?module.exports=t.document?e(t,!0):function(t){if(!t.document)throw new Error("jQuery requires a window with a document");return e(t)}:e(t)}("undefined"!=typeof window?window:this,function(_,t){"use strict";var e=[],T=_.document,i=Object.getPrototypeOf,a=e.slice,g=e.concat,l=e.push,s=e.indexOf,n={},o=n.toString,f=n.hasOwnProperty,r=f.toString,c=r.call(Object),m={};function v(t,e){var n=(e=e||T).createElement("script");n.text=t,e.head.appendChild(n).parentNode.removeChild(n)}function u(t,e){return e.toUpperCase()}var d="3.2.1",S=function(t,e){return new S.fn.init(t,e)},h=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,p=/^-ms-/,y=/-([a-z])/g;function b(t){var e=!!t&&"length"in t&&t.length,n=S.type(t);return"function"!==n&&!S.isWindow(t)&&("array"===n||0===e||"number"==typeof e&&0<e&&e-1 in t)}S.fn=S.prototype={jquery:d,constructor:S,length:0,toArray:function(){return a.call(this)},get:function(t){return null==t?a.call(this):t<0?this[t+this.length]:this[t]},pushStack:function(t){var e=S.merge(this.constructor(),t);return e.prevObject=this,e},each:function(t){return S.each(this,t)},map:function(n){return this.pushStack(S.map(this,function(t,e){return n.call(t,e,t)}))},slice:function(){return this.pushStack(a.apply(this,arguments))},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},eq:function(t){var e=this.length,n=+t+(t<0?e:0);return this.pushStack(0<=n&&n<e?[this[n]]:[])},end:function(){return this.prevObject||this.constructor()},push:l,sort:e.sort,splice:e.splice},S.extend=S.fn.extend=function(){var t,e,n,i,s,o,r=arguments[0]||{},a=1,l=arguments.length,c=!1;for("boolean"==typeof r&&(c=r,r=arguments[a]||{},a++),"object"==typeof r||S.isFunction(r)||(r={}),a===l&&(r=this,a--);a<l;a++)if(null!=(t=arguments[a]))for(e in t)n=r[e],r!==(i=t[e])&&(c&&i&&(S.isPlainObject(i)||(s=Array.isArray(i)))?(o=s?(s=!1,n&&Array.isArray(n)?n:[]):n&&S.isPlainObject(n)?n:{},r[e]=S.extend(c,o,i)):void 0!==i&&(r[e]=i));return r},S.extend({expando:"jQuery"+(d+Math.random()).replace(/\D/g,""),isReady:!0,error:function(t){throw new Error(t)},noop:function(){},isFunction:function(t){return"function"===S.type(t)},isWindow:function(t){return null!=t&&t===t.window},isNumeric:function(t){var e=S.type(t);return("number"===e||"string"===e)&&!isNaN(t-parseFloat(t))},isPlainObject:function(t){var e,n;return!(!t||"[object Object]"!==o.call(t)||(e=i(t))&&("function"!=typeof(n=f.call(e,"constructor")&&e.constructor)||r.call(n)!==c))},isEmptyObject:function(t){var e;for(e in t)return!1;return!0},type:function(t){return null==t?t+"":"object"==typeof t||"function"==typeof t?n[o.call(t)]||"object":typeof t},globalEval:function(t){v(t)},camelCase:function(t){return t.replace(p,"ms-").replace(y,u)},each:function(t,e){var n,i=0;if(b(t))for(n=t.length;i<n&&!1!==e.call(t[i],i,t[i]);i++);else for(i in t)if(!1===e.call(t[i],i,t[i]))break;return t},trim:function(t){return null==t?"":(t+"").replace(h,"")},makeArray:function(t,e){var n=e||[];return null!=t&&(b(Object(t))?S.merge(n,"string"==typeof t?[t]:t):l.call(n,t)),n},inArray:function(t,e,n){return null==e?-1:s.call(e,t,n)},merge:function(t,e){for(var n=+e.length,i=0,s=t.length;i<n;i++)t[s++]=e[i];return t.length=s,t},grep:function(t,e,n){for(var i=[],s=0,o=t.length,r=!n;s<o;s++)!e(t[s],s)!=r&&i.push(t[s]);return i},map:function(t,e,n){var i,s,o=0,r=[];if(b(t))for(i=t.length;o<i;o++)null!=(s=e(t[o],o,n))&&r.push(s);else for(o in t)null!=(s=e(t[o],o,n))&&r.push(s);return g.apply([],r)},guid:1,proxy:function(t,e){var n,i,s;if("string"==typeof e&&(n=t[e],e=t,t=n),S.isFunction(t))return i=a.call(arguments,2),(s=function(){return t.apply(e||this,i.concat(a.call(arguments)))}).guid=t.guid=t.guid||S.guid++,s},now:Date.now,support:m}),"function"==typeof Symbol&&(S.fn[Symbol.iterator]=e[Symbol.iterator]),S.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "),function(t,e){n["[object "+e+"]"]=e.toLowerCase()});var x=function(n){function d(t,e,n){var i="0x"+e-65536;return i!=i||n?e:i<0?String.fromCharCode(65536+i):String.fromCharCode(i>>10|55296,1023&i|56320)}function s(){C()}var t,p,x,o,r,f,h,g,w,l,c,C,_,a,T,m,u,v,y,S="sizzle"+ +new Date,b=n.document,k=0,i=0,$=rt(),E=rt(),P=rt(),j=function(t,e){return t===e&&(c=!0),0},A={}.hasOwnProperty,e=[],D=e.pop,M=e.push,L=e.push,q=e.slice,F=function(t,e){for(var n=0,i=t.length;n<i;n++)if(t[n]===e)return n;return-1},N="checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",z="[\\x20\\t\\r\\n\\f]",I="(?:\\\\.|[\\w-]|[^\0-\\xa0])+",H="\\["+z+"*("+I+")(?:"+z+"*([*^$|!~]?=)"+z+"*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|("+I+"))|)"+z+"*\\]",R=":("+I+")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|"+H+")*)|.*)\\)|)",O=new RegExp(z+"+","g"),B=new RegExp("^"+z+"+|((?:^|[^\\\\])(?:\\\\.)*)"+z+"+$","g"),W=new RegExp("^"+z+"*,"+z+"*"),V=new RegExp("^"+z+"*([>+~]|"+z+")"+z+"*"),X=new RegExp("="+z+"*([^\\]'\"]*?)"+z+"*\\]","g"),Y=new RegExp(R),U=new RegExp("^"+I+"$"),Z={ID:new RegExp("^#("+I+")"),CLASS:new RegExp("^\\.("+I+")"),TAG:new RegExp("^("+I+"|[*])"),ATTR:new RegExp("^"+H),PSEUDO:new RegExp("^"+R),CHILD:new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\("+z+"*(even|odd|(([+-]|)(\\d*)n|)"+z+"*(?:([+-]|)"+z+"*(\\d+)|))"+z+"*\\)|)","i"),bool:new RegExp("^(?:"+N+")$","i"),needsContext:new RegExp("^"+z+"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\("+z+"*((?:-\\d)?\\d*)"+z+"*\\)|)(?=[^-]|$)","i")},Q=/^(?:input|select|textarea|button)$/i,G=/^h\d$/i,K=/^[^{]+\{\s*\[native \w/,J=/^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,tt=/[+~]/,et=new RegExp("\\\\([\\da-f]{1,6}"+z+"?|("+z+")|.)","ig"),nt=/([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,it=function(t,e){return e?"\0"===t?"�":t.slice(0,-1)+"\\"+t.charCodeAt(t.length-1).toString(16)+" ":"\\"+t},st=yt(function(t){return!0===t.disabled&&("form"in t||"label"in t)},{dir:"parentNode",next:"legend"});try{L.apply(e=q.call(b.childNodes),b.childNodes),e[b.childNodes.length].nodeType}catch(t){L={apply:e.length?function(t,e){M.apply(t,q.call(e))}:function(t,e){for(var n=t.length,i=0;t[n++]=e[i++];);t.length=n-1}}}function ot(t,e,n,i){var s,o,r,a,l,c,u,d=e&&e.ownerDocument,h=e?e.nodeType:9;if(n=n||[],"string"!=typeof t||!t||1!==h&&9!==h&&11!==h)return n;if(!i&&((e?e.ownerDocument||e:b)!==_&&C(e),e=e||_,T)){if(11!==h&&(l=J.exec(t)))if(s=l[1]){if(9===h){if(!(r=e.getElementById(s)))return n;if(r.id===s)return n.push(r),n}else if(d&&(r=d.getElementById(s))&&y(e,r)&&r.id===s)return n.push(r),n}else{if(l[2])return L.apply(n,e.getElementsByTagName(t)),n;if((s=l[3])&&p.getElementsByClassName&&e.getElementsByClassName)return L.apply(n,e.getElementsByClassName(s)),n}if(p.qsa&&!P[t+" "]&&(!m||!m.test(t))){if(1!==h)d=e,u=t;else if("object"!==e.nodeName.toLowerCase()){for((a=e.getAttribute("id"))?a=a.replace(nt,it):e.setAttribute("id",a=S),o=(c=f(t)).length;o--;)c[o]="#"+a+" "+vt(c[o]);u=c.join(","),d=tt.test(t)&&gt(e.parentNode)||e}if(u)try{return L.apply(n,d.querySelectorAll(u)),n}catch(t){}finally{a===S&&e.removeAttribute("id")}}}return g(t.replace(B,"$1"),e,n,i)}function rt(){var i=[];return function t(e,n){return i.push(e+" ")>x.cacheLength&&delete t[i.shift()],t[e+" "]=n}}function at(t){return t[S]=!0,t}function lt(t){var e=_.createElement("fieldset");try{return!!t(e)}catch(t){return!1}finally{e.parentNode&&e.parentNode.removeChild(e),e=null}}function ct(t,e){for(var n=t.split("|"),i=n.length;i--;)x.attrHandle[n[i]]=e}function ut(t,e){var n=e&&t,i=n&&1===t.nodeType&&1===e.nodeType&&t.sourceIndex-e.sourceIndex;if(i)return i;if(n)for(;n=n.nextSibling;)if(n===e)return-1;return t?1:-1}function dt(e){return function(t){return"input"===t.nodeName.toLowerCase()&&t.type===e}}function ht(n){return function(t){var e=t.nodeName.toLowerCase();return("input"===e||"button"===e)&&t.type===n}}function pt(e){return function(t){return"form"in t?t.parentNode&&!1===t.disabled?"label"in t?"label"in t.parentNode?t.parentNode.disabled===e:t.disabled===e:t.isDisabled===e||t.isDisabled!==!e&&st(t)===e:t.disabled===e:"label"in t&&t.disabled===e}}function ft(r){return at(function(o){return o=+o,at(function(t,e){for(var n,i=r([],t.length,o),s=i.length;s--;)t[n=i[s]]&&(t[n]=!(e[n]=t[n]))})})}function gt(t){return t&&void 0!==t.getElementsByTagName&&t}for(t in p=ot.support={},r=ot.isXML=function(t){var e=t&&(t.ownerDocument||t).documentElement;return!!e&&"HTML"!==e.nodeName},C=ot.setDocument=function(t){var e,n,i=t?t.ownerDocument||t:b;return i!==_&&9===i.nodeType&&i.documentElement&&(a=(_=i).documentElement,T=!r(_),b!==_&&(n=_.defaultView)&&n.top!==n&&(n.addEventListener?n.addEventListener("unload",s,!1):n.attachEvent&&n.attachEvent("onunload",s)),p.attributes=lt(function(t){return t.className="i",!t.getAttribute("className")}),p.getElementsByTagName=lt(function(t){return t.appendChild(_.createComment("")),!t.getElementsByTagName("*").length}),p.getElementsByClassName=K.test(_.getElementsByClassName),p.getById=lt(function(t){return a.appendChild(t).id=S,!_.getElementsByName||!_.getElementsByName(S).length}),p.getById?(x.filter.ID=function(t){var e=t.replace(et,d);return function(t){return t.getAttribute("id")===e}},x.find.ID=function(t,e){if(void 0!==e.getElementById&&T){var n=e.getElementById(t);return n?[n]:[]}}):(x.filter.ID=function(t){var n=t.replace(et,d);return function(t){var e=void 0!==t.getAttributeNode&&t.getAttributeNode("id");return e&&e.value===n}},x.find.ID=function(t,e){if(void 0!==e.getElementById&&T){var n,i,s,o=e.getElementById(t);if(o){if((n=o.getAttributeNode("id"))&&n.value===t)return[o];for(s=e.getElementsByName(t),i=0;o=s[i++];)if((n=o.getAttributeNode("id"))&&n.value===t)return[o]}return[]}}),x.find.TAG=p.getElementsByTagName?function(t,e){return void 0!==e.getElementsByTagName?e.getElementsByTagName(t):p.qsa?e.querySelectorAll(t):void 0}:function(t,e){var n,i=[],s=0,o=e.getElementsByTagName(t);if("*"!==t)return o;for(;n=o[s++];)1===n.nodeType&&i.push(n);return i},x.find.CLASS=p.getElementsByClassName&&function(t,e){if(void 0!==e.getElementsByClassName&&T)return e.getElementsByClassName(t)},u=[],m=[],(p.qsa=K.test(_.querySelectorAll))&&(lt(function(t){a.appendChild(t).innerHTML="<a id='"+S+"'></a><select id='"+S+"-\r\\' msallowcapture=''><option selected=''></option></select>",t.querySelectorAll("[msallowcapture^='']").length&&m.push("[*^$]="+z+"*(?:''|\"\")"),t.querySelectorAll("[selected]").length||m.push("\\["+z+"*(?:value|"+N+")"),t.querySelectorAll("[id~="+S+"-]").length||m.push("~="),t.querySelectorAll(":checked").length||m.push(":checked"),t.querySelectorAll("a#"+S+"+*").length||m.push(".#.+[+~]")}),lt(function(t){t.innerHTML="<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";var e=_.createElement("input");e.setAttribute("type","hidden"),t.appendChild(e).setAttribute("name","D"),t.querySelectorAll("[name=d]").length&&m.push("name"+z+"*[*^$|!~]?="),2!==t.querySelectorAll(":enabled").length&&m.push(":enabled",":disabled"),a.appendChild(t).disabled=!0,2!==t.querySelectorAll(":disabled").length&&m.push(":enabled",":disabled"),t.querySelectorAll("*,:x"),m.push(",.*:")})),(p.matchesSelector=K.test(v=a.matches||a.webkitMatchesSelector||a.mozMatchesSelector||a.oMatchesSelector||a.msMatchesSelector))&&lt(function(t){p.disconnectedMatch=v.call(t,"*"),v.call(t,"[s!='']:x"),u.push("!=",R)}),m=m.length&&new RegExp(m.join("|")),u=u.length&&new RegExp(u.join("|")),e=K.test(a.compareDocumentPosition),y=e||K.test(a.contains)?function(t,e){var n=9===t.nodeType?t.documentElement:t,i=e&&e.parentNode;return t===i||!(!i||1!==i.nodeType||!(n.contains?n.contains(i):t.compareDocumentPosition&&16&t.compareDocumentPosition(i)))}:function(t,e){if(e)for(;e=e.parentNode;)if(e===t)return!0;return!1},j=e?function(t,e){if(t===e)return c=!0,0;var n=!t.compareDocumentPosition-!e.compareDocumentPosition;return n||(1&(n=(t.ownerDocument||t)===(e.ownerDocument||e)?t.compareDocumentPosition(e):1)||!p.sortDetached&&e.compareDocumentPosition(t)===n?t===_||t.ownerDocument===b&&y(b,t)?-1:e===_||e.ownerDocument===b&&y(b,e)?1:l?F(l,t)-F(l,e):0:4&n?-1:1)}:function(t,e){if(t===e)return c=!0,0;var n,i=0,s=t.parentNode,o=e.parentNode,r=[t],a=[e];if(!s||!o)return t===_?-1:e===_?1:s?-1:o?1:l?F(l,t)-F(l,e):0;if(s===o)return ut(t,e);for(n=t;n=n.parentNode;)r.unshift(n);for(n=e;n=n.parentNode;)a.unshift(n);for(;r[i]===a[i];)i++;return i?ut(r[i],a[i]):r[i]===b?-1:a[i]===b?1:0}),_},ot.matches=function(t,e){return ot(t,null,null,e)},ot.matchesSelector=function(t,e){if((t.ownerDocument||t)!==_&&C(t),e=e.replace(X,"='$1']"),p.matchesSelector&&T&&!P[e+" "]&&(!u||!u.test(e))&&(!m||!m.test(e)))try{var n=v.call(t,e);if(n||p.disconnectedMatch||t.document&&11!==t.document.nodeType)return n}catch(t){}return 0<ot(e,_,null,[t]).length},ot.contains=function(t,e){return(t.ownerDocument||t)!==_&&C(t),y(t,e)},ot.attr=function(t,e){(t.ownerDocument||t)!==_&&C(t);var n=x.attrHandle[e.toLowerCase()],i=n&&A.call(x.attrHandle,e.toLowerCase())?n(t,e,!T):void 0;return void 0!==i?i:p.attributes||!T?t.getAttribute(e):(i=t.getAttributeNode(e))&&i.specified?i.value:null},ot.escape=function(t){return(t+"").replace(nt,it)},ot.error=function(t){throw new Error("Syntax error, unrecognized expression: "+t)},ot.uniqueSort=function(t){var e,n=[],i=0,s=0;if(c=!p.detectDuplicates,l=!p.sortStable&&t.slice(0),t.sort(j),c){for(;e=t[s++];)e===t[s]&&(i=n.push(s));for(;i--;)t.splice(n[i],1)}return l=null,t},o=ot.getText=function(t){var e,n="",i=0,s=t.nodeType;if(s){if(1===s||9===s||11===s){if("string"==typeof t.textContent)return t.textContent;for(t=t.firstChild;t;t=t.nextSibling)n+=o(t)}else if(3===s||4===s)return t.nodeValue}else for(;e=t[i++];)n+=o(e);return n},(x=ot.selectors={cacheLength:50,createPseudo:at,match:Z,attrHandle:{},find:{},relative:{">":{dir:"parentNode",first:!0}," ":{dir:"parentNode"},"+":{dir:"previousSibling",first:!0},"~":{dir:"previousSibling"}},preFilter:{ATTR:function(t){return t[1]=t[1].replace(et,d),t[3]=(t[3]||t[4]||t[5]||"").replace(et,d),"~="===t[2]&&(t[3]=" "+t[3]+" "),t.slice(0,4)},CHILD:function(t){return t[1]=t[1].toLowerCase(),"nth"===t[1].slice(0,3)?(t[3]||ot.error(t[0]),t[4]=+(t[4]?t[5]+(t[6]||1):2*("even"===t[3]||"odd"===t[3])),t[5]=+(t[7]+t[8]||"odd"===t[3])):t[3]&&ot.error(t[0]),t},PSEUDO:function(t){var e,n=!t[6]&&t[2];return Z.CHILD.test(t[0])?null:(t[3]?t[2]=t[4]||t[5]||"":n&&Y.test(n)&&(e=f(n,!0))&&(e=n.indexOf(")",n.length-e)-n.length)&&(t[0]=t[0].slice(0,e),t[2]=n.slice(0,e)),t.slice(0,3))}},filter:{TAG:function(t){var e=t.replace(et,d).toLowerCase();return"*"===t?function(){return!0}:function(t){return t.nodeName&&t.nodeName.toLowerCase()===e}},CLASS:function(t){var e=$[t+" "];return e||(e=new RegExp("(^|"+z+")"+t+"("+z+"|$)"))&&$(t,function(t){return e.test("string"==typeof t.className&&t.className||void 0!==t.getAttribute&&t.getAttribute("class")||"")})},ATTR:function(n,i,s){return function(t){var e=ot.attr(t,n);return null==e?"!="===i:!i||(e+="","="===i?e===s:"!="===i?e!==s:"^="===i?s&&0===e.indexOf(s):"*="===i?s&&-1<e.indexOf(s):"$="===i?s&&e.slice(-s.length)===s:"~="===i?-1<(" "+e.replace(O," ")+" ").indexOf(s):"|="===i&&(e===s||e.slice(0,s.length+1)===s+"-"))}},CHILD:function(f,t,e,g,m){var v="nth"!==f.slice(0,3),y="last"!==f.slice(-4),b="of-type"===t;return 1===g&&0===m?function(t){return!!t.parentNode}:function(t,e,n){var i,s,o,r,a,l,c=v!=y?"nextSibling":"previousSibling",u=t.parentNode,d=b&&t.nodeName.toLowerCase(),h=!n&&!b,p=!1;if(u){if(v){for(;c;){for(r=t;r=r[c];)if(b?r.nodeName.toLowerCase()===d:1===r.nodeType)return!1;l=c="only"===f&&!l&&"nextSibling"}return!0}if(l=[y?u.firstChild:u.lastChild],y&&h){for(p=(a=(i=(s=(o=(r=u)[S]||(r[S]={}))[r.uniqueID]||(o[r.uniqueID]={}))[f]||[])[0]===k&&i[1])&&i[2],r=a&&u.childNodes[a];r=++a&&r&&r[c]||(p=a=0)||l.pop();)if(1===r.nodeType&&++p&&r===t){s[f]=[k,a,p];break}}else if(h&&(p=a=(i=(s=(o=(r=t)[S]||(r[S]={}))[r.uniqueID]||(o[r.uniqueID]={}))[f]||[])[0]===k&&i[1]),!1===p)for(;(r=++a&&r&&r[c]||(p=a=0)||l.pop())&&((b?r.nodeName.toLowerCase()!==d:1!==r.nodeType)||!++p||(h&&((s=(o=r[S]||(r[S]={}))[r.uniqueID]||(o[r.uniqueID]={}))[f]=[k,p]),r!==t)););return(p-=m)===g||p%g==0&&0<=p/g}}},PSEUDO:function(t,o){var e,r=x.pseudos[t]||x.setFilters[t.toLowerCase()]||ot.error("unsupported pseudo: "+t);return r[S]?r(o):1<r.length?(e=[t,t,"",o],x.setFilters.hasOwnProperty(t.toLowerCase())?at(function(t,e){for(var n,i=r(t,o),s=i.length;s--;)t[n=F(t,i[s])]=!(e[n]=i[s])}):function(t){return r(t,0,e)}):r}},pseudos:{not:at(function(t){var i=[],s=[],a=h(t.replace(B,"$1"));return a[S]?at(function(t,e,n,i){for(var s,o=a(t,null,i,[]),r=t.length;r--;)(s=o[r])&&(t[r]=!(e[r]=s))}):function(t,e,n){return i[0]=t,a(i,null,n,s),i[0]=null,!s.pop()}}),has:at(function(e){return function(t){return 0<ot(e,t).length}}),contains:at(function(e){return e=e.replace(et,d),function(t){return-1<(t.textContent||t.innerText||o(t)).indexOf(e)}}),lang:at(function(n){return U.test(n||"")||ot.error("unsupported lang: "+n),n=n.replace(et,d).toLowerCase(),function(t){var e;do{if(e=T?t.lang:t.getAttribute("xml:lang")||t.getAttribute("lang"))return(e=e.toLowerCase())===n||0===e.indexOf(n+"-")}while((t=t.parentNode)&&1===t.nodeType);return!1}}),target:function(t){var e=n.location&&n.location.hash;return e&&e.slice(1)===t.id},root:function(t){return t===a},focus:function(t){return t===_.activeElement&&(!_.hasFocus||_.hasFocus())&&!!(t.type||t.href||~t.tabIndex)},enabled:pt(!1),disabled:pt(!0),checked:function(t){var e=t.nodeName.toLowerCase();return"input"===e&&!!t.checked||"option"===e&&!!t.selected},selected:function(t){return t.parentNode&&t.parentNode.selectedIndex,!0===t.selected},empty:function(t){for(t=t.firstChild;t;t=t.nextSibling)if(t.nodeType<6)return!1;return!0},parent:function(t){return!x.pseudos.empty(t)},header:function(t){return G.test(t.nodeName)},input:function(t){return Q.test(t.nodeName)},button:function(t){var e=t.nodeName.toLowerCase();return"input"===e&&"button"===t.type||"button"===e},text:function(t){var e;return"input"===t.nodeName.toLowerCase()&&"text"===t.type&&(null==(e=t.getAttribute("type"))||"text"===e.toLowerCase())},first:ft(function(){return[0]}),last:ft(function(t,e){return[e-1]}),eq:ft(function(t,e,n){return[n<0?n+e:n]}),even:ft(function(t,e){for(var n=0;n<e;n+=2)t.push(n);return t}),odd:ft(function(t,e){for(var n=1;n<e;n+=2)t.push(n);return t}),lt:ft(function(t,e,n){for(var i=n<0?n+e:n;0<=--i;)t.push(i);return t}),gt:ft(function(t,e,n){for(var i=n<0?n+e:n;++i<e;)t.push(i);return t})}}).pseudos.nth=x.pseudos.eq,{radio:!0,checkbox:!0,file:!0,password:!0,image:!0})x.pseudos[t]=dt(t);for(t in{submit:!0,reset:!0})x.pseudos[t]=ht(t);function mt(){}function vt(t){for(var e=0,n=t.length,i="";e<n;e++)i+=t[e].value;return i}function yt(a,t,e){var l=t.dir,c=t.next,u=c||l,d=e&&"parentNode"===u,h=i++;return t.first?function(t,e,n){for(;t=t[l];)if(1===t.nodeType||d)return a(t,e,n);return!1}:function(t,e,n){var i,s,o,r=[k,h];if(n){for(;t=t[l];)if((1===t.nodeType||d)&&a(t,e,n))return!0}else for(;t=t[l];)if(1===t.nodeType||d)if(s=(o=t[S]||(t[S]={}))[t.uniqueID]||(o[t.uniqueID]={}),c&&c===t.nodeName.toLowerCase())t=t[l]||t;else{if((i=s[u])&&i[0]===k&&i[1]===h)return r[2]=i[2];if((s[u]=r)[2]=a(t,e,n))return!0}return!1}}function bt(s){return 1<s.length?function(t,e,n){for(var i=s.length;i--;)if(!s[i](t,e,n))return!1;return!0}:s[0]}function xt(t,e,n,i,s){for(var o,r=[],a=0,l=t.length,c=null!=e;a<l;a++)(o=t[a])&&(n&&!n(o,i,s)||(r.push(o),c&&e.push(a)));return r}function wt(p,f,g,m,v,t){return m&&!m[S]&&(m=wt(m)),v&&!v[S]&&(v=wt(v,t)),at(function(t,e,n,i){var s,o,r,a=[],l=[],c=e.length,u=t||function(t,e,n){for(var i=0,s=e.length;i<s;i++)ot(t,e[i],n);return n}(f||"*",n.nodeType?[n]:n,[]),d=!p||!t&&f?u:xt(u,a,p,n,i),h=g?v||(t?p:c||m)?[]:e:d;if(g&&g(d,h,n,i),m)for(s=xt(h,l),m(s,[],n,i),o=s.length;o--;)(r=s[o])&&(h[l[o]]=!(d[l[o]]=r));if(t){if(v||p){if(v){for(s=[],o=h.length;o--;)(r=h[o])&&s.push(d[o]=r);v(null,h=[],s,i)}for(o=h.length;o--;)(r=h[o])&&-1<(s=v?F(t,r):a[o])&&(t[s]=!(e[s]=r))}}else h=xt(h===e?h.splice(c,h.length):h),v?v(null,e,h,i):L.apply(e,h)})}function Ct(t){for(var s,e,n,i=t.length,o=x.relative[t[0].type],r=o||x.relative[" "],a=o?1:0,l=yt(function(t){return t===s},r,!0),c=yt(function(t){return-1<F(s,t)},r,!0),u=[function(t,e,n){var i=!o&&(n||e!==w)||((s=e).nodeType?l:c)(t,e,n);return s=null,i}];a<i;a++)if(e=x.relative[t[a].type])u=[yt(bt(u),e)];else{if((e=x.filter[t[a].type].apply(null,t[a].matches))[S]){for(n=++a;n<i&&!x.relative[t[n].type];n++);return wt(1<a&&bt(u),1<a&&vt(t.slice(0,a-1).concat({value:" "===t[a-2].type?"*":""})).replace(B,"$1"),e,a<n&&Ct(t.slice(a,n)),n<i&&Ct(t=t.slice(n)),n<i&&vt(t))}u.push(e)}return bt(u)}function _t(m,v){function t(t,e,n,i,s){var o,r,a,l=0,c="0",u=t&&[],d=[],h=w,p=t||b&&x.find.TAG("*",s),f=k+=null==h?1:Math.random()||.1,g=p.length;for(s&&(w=e===_||e||s);c!==g&&null!=(o=p[c]);c++){if(b&&o){for(r=0,e||o.ownerDocument===_||(C(o),n=!T);a=m[r++];)if(a(o,e||_,n)){i.push(o);break}s&&(k=f)}y&&((o=!a&&o)&&l--,t&&u.push(o))}if(l+=c,y&&c!==l){for(r=0;a=v[r++];)a(u,d,e,n);if(t){if(0<l)for(;c--;)u[c]||d[c]||(d[c]=D.call(i));d=xt(d)}L.apply(i,d),s&&!t&&0<d.length&&1<l+v.length&&ot.uniqueSort(i)}return s&&(k=f,w=h),u}var y=0<v.length,b=0<m.length;return y?at(t):t}return mt.prototype=x.filters=x.pseudos,x.setFilters=new mt,f=ot.tokenize=function(t,e){var n,i,s,o,r,a,l,c=E[t+" "];if(c)return e?0:c.slice(0);for(r=t,a=[],l=x.preFilter;r;){for(o in n&&!(i=W.exec(r))||(i&&(r=r.slice(i[0].length)||r),a.push(s=[])),n=!1,(i=V.exec(r))&&(n=i.shift(),s.push({value:n,type:i[0].replace(B," ")}),r=r.slice(n.length)),x.filter)!(i=Z[o].exec(r))||l[o]&&!(i=l[o](i))||(n=i.shift(),s.push({value:n,type:o,matches:i}),r=r.slice(n.length));if(!n)break}return e?r.length:r?ot.error(t):E(t,a).slice(0)},h=ot.compile=function(t,e){var n,i=[],s=[],o=P[t+" "];if(!o){for(n=(e=e||f(t)).length;n--;)(o=Ct(e[n]))[S]?i.push(o):s.push(o);(o=P(t,_t(s,i))).selector=t}return o},g=ot.select=function(t,e,n,i){var s,o,r,a,l,c="function"==typeof t&&t,u=!i&&f(t=c.selector||t);if(n=n||[],1===u.length){if(2<(o=u[0]=u[0].slice(0)).length&&"ID"===(r=o[0]).type&&9===e.nodeType&&T&&x.relative[o[1].type]){if(!(e=(x.find.ID(r.matches[0].replace(et,d),e)||[])[0]))return n;c&&(e=e.parentNode),t=t.slice(o.shift().value.length)}for(s=Z.needsContext.test(t)?0:o.length;s--&&(r=o[s],!x.relative[a=r.type]);)if((l=x.find[a])&&(i=l(r.matches[0].replace(et,d),tt.test(o[0].type)&&gt(e.parentNode)||e))){if(o.splice(s,1),!(t=i.length&&vt(o)))return L.apply(n,i),n;break}}return(c||h(t,u))(i,e,!T,n,!e||tt.test(t)&&gt(e.parentNode)||e),n},p.sortStable=S.split("").sort(j).join("")===S,p.detectDuplicates=!!c,C(),p.sortDetached=lt(function(t){return 1&t.compareDocumentPosition(_.createElement("fieldset"))}),lt(function(t){return t.innerHTML="<a href='#'></a>","#"===t.firstChild.getAttribute("href")})||ct("type|href|height|width",function(t,e,n){if(!n)return t.getAttribute(e,"type"===e.toLowerCase()?1:2)}),p.attributes&&lt(function(t){return t.innerHTML="<input/>",t.firstChild.setAttribute("value",""),""===t.firstChild.getAttribute("value")})||ct("value",function(t,e,n){if(!n&&"input"===t.nodeName.toLowerCase())return t.defaultValue}),lt(function(t){return null==t.getAttribute("disabled")})||ct(N,function(t,e,n){var i;if(!n)return!0===t[e]?e.toLowerCase():(i=t.getAttributeNode(e))&&i.specified?i.value:null}),ot}(_);S.find=x,S.expr=x.selectors,S.expr[":"]=S.expr.pseudos,S.uniqueSort=S.unique=x.uniqueSort,S.text=x.getText,S.isXMLDoc=x.isXML,S.contains=x.contains,S.escapeSelector=x.escape;function w(t,e,n){for(var i=[],s=void 0!==n;(t=t[e])&&9!==t.nodeType;)if(1===t.nodeType){if(s&&S(t).is(n))break;i.push(t)}return i}function C(t,e){for(var n=[];t;t=t.nextSibling)1===t.nodeType&&t!==e&&n.push(t);return n}var k=S.expr.match.needsContext;function $(t,e){return t.nodeName&&t.nodeName.toLowerCase()===e.toLowerCase()}var E=/^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i,P=/^.[^:#\[\.,]*$/;function j(t,n,i){return S.isFunction(n)?S.grep(t,function(t,e){return!!n.call(t,e,t)!==i}):n.nodeType?S.grep(t,function(t){return t===n!==i}):"string"!=typeof n?S.grep(t,function(t){return-1<s.call(n,t)!==i}):P.test(n)?S.filter(n,t,i):(n=S.filter(n,t),S.grep(t,function(t){return-1<s.call(n,t)!==i&&1===t.nodeType}))}S.filter=function(t,e,n){var i=e[0];return n&&(t=":not("+t+")"),1===e.length&&1===i.nodeType?S.find.matchesSelector(i,t)?[i]:[]:S.find.matches(t,S.grep(e,function(t){return 1===t.nodeType}))},S.fn.extend({find:function(t){var e,n,i=this.length,s=this;if("string"!=typeof t)return this.pushStack(S(t).filter(function(){for(e=0;e<i;e++)if(S.contains(s[e],this))return!0}));for(n=this.pushStack([]),e=0;e<i;e++)S.find(t,s[e],n);return 1<i?S.uniqueSort(n):n},filter:function(t){return this.pushStack(j(this,t||[],!1))},not:function(t){return this.pushStack(j(this,t||[],!0))},is:function(t){return!!j(this,"string"==typeof t&&k.test(t)?S(t):t||[],!1).length}});var A,D=/^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;(S.fn.init=function(t,e,n){var i,s;if(!t)return this;if(n=n||A,"string"!=typeof t)return t.nodeType?(this[0]=t,this.length=1,this):S.isFunction(t)?void 0!==n.ready?n.ready(t):t(S):S.makeArray(t,this);if(!(i="<"===t[0]&&">"===t[t.length-1]&&3<=t.length?[null,t,null]:D.exec(t))||!i[1]&&e)return!e||e.jquery?(e||n).find(t):this.constructor(e).find(t);if(i[1]){if(e=e instanceof S?e[0]:e,S.merge(this,S.parseHTML(i[1],e&&e.nodeType?e.ownerDocument||e:T,!0)),E.test(i[1])&&S.isPlainObject(e))for(i in e)S.isFunction(this[i])?this[i](e[i]):this.attr(i,e[i]);return this}return(s=T.getElementById(i[2]))&&(this[0]=s,this.length=1),this}).prototype=S.fn,A=S(T);var M=/^(?:parents|prev(?:Until|All))/,L={children:!0,contents:!0,next:!0,prev:!0};function q(t,e){for(;(t=t[e])&&1!==t.nodeType;);return t}S.fn.extend({has:function(t){var e=S(t,this),n=e.length;return this.filter(function(){for(var t=0;t<n;t++)if(S.contains(this,e[t]))return!0})},closest:function(t,e){var n,i=0,s=this.length,o=[],r="string"!=typeof t&&S(t);if(!k.test(t))for(;i<s;i++)for(n=this[i];n&&n!==e;n=n.parentNode)if(n.nodeType<11&&(r?-1<r.index(n):1===n.nodeType&&S.find.matchesSelector(n,t))){o.push(n);break}return this.pushStack(1<o.length?S.uniqueSort(o):o)},index:function(t){return t?"string"==typeof t?s.call(S(t),this[0]):s.call(this,t.jquery?t[0]:t):this[0]&&this[0].parentNode?this.first().prevAll().length:-1},add:function(t,e){return this.pushStack(S.uniqueSort(S.merge(this.get(),S(t,e))))},addBack:function(t){return this.add(null==t?this.prevObject:this.prevObject.filter(t))}}),S.each({parent:function(t){var e=t.parentNode;return e&&11!==e.nodeType?e:null},parents:function(t){return w(t,"parentNode")},parentsUntil:function(t,e,n){return w(t,"parentNode",n)},next:function(t){return q(t,"nextSibling")},prev:function(t){return q(t,"previousSibling")},nextAll:function(t){return w(t,"nextSibling")},prevAll:function(t){return w(t,"previousSibling")},nextUntil:function(t,e,n){return w(t,"nextSibling",n)},prevUntil:function(t,e,n){return w(t,"previousSibling",n)},siblings:function(t){return C((t.parentNode||{}).firstChild,t)},children:function(t){return C(t.firstChild)},contents:function(t){return $(t,"iframe")?t.contentDocument:($(t,"template")&&(t=t.content||t),S.merge([],t.childNodes))}},function(i,s){S.fn[i]=function(t,e){var n=S.map(this,s,t);return"Until"!==i.slice(-5)&&(e=t),e&&"string"==typeof e&&(n=S.filter(e,n)),1<this.length&&(L[i]||S.uniqueSort(n),M.test(i)&&n.reverse()),this.pushStack(n)}});var F=/[^\x20\t\r\n\f]+/g;function N(t){return t}function z(t){throw t}function I(t,e,n,i){var s;try{t&&S.isFunction(s=t.promise)?s.call(t).done(e).fail(n):t&&S.isFunction(s=t.then)?s.call(t,e,n):e.apply(void 0,[t].slice(i))}catch(t){n.apply(void 0,[t])}}S.Callbacks=function(i){var t,n;i="string"==typeof i?(t=i,n={},S.each(t.match(F)||[],function(t,e){n[e]=!0}),n):S.extend({},i);function s(){for(a=a||i.once,r=o=!0;c.length;u=-1)for(e=c.shift();++u<l.length;)!1===l[u].apply(e[0],e[1])&&i.stopOnFalse&&(u=l.length,e=!1);i.memory||(e=!1),o=!1,a&&(l=e?[]:"")}var o,e,r,a,l=[],c=[],u=-1,d={add:function(){return l&&(e&&!o&&(u=l.length-1,c.push(e)),function n(t){S.each(t,function(t,e){S.isFunction(e)?i.unique&&d.has(e)||l.push(e):e&&e.length&&"string"!==S.type(e)&&n(e)})}(arguments),e&&!o&&s()),this},remove:function(){return S.each(arguments,function(t,e){for(var n;-1<(n=S.inArray(e,l,n));)l.splice(n,1),n<=u&&u--}),this},has:function(t){return t?-1<S.inArray(t,l):0<l.length},empty:function(){return l=l&&[],this},disable:function(){return a=c=[],l=e="",this},disabled:function(){return!l},lock:function(){return a=c=[],e||o||(l=e=""),this},locked:function(){return!!a},fireWith:function(t,e){return a||(e=[t,(e=e||[]).slice?e.slice():e],c.push(e),o||s()),this},fire:function(){return d.fireWith(this,arguments),this},fired:function(){return!!r}};return d},S.extend({Deferred:function(t){var o=[["notify","progress",S.Callbacks("memory"),S.Callbacks("memory"),2],["resolve","done",S.Callbacks("once memory"),S.Callbacks("once memory"),0,"resolved"],["reject","fail",S.Callbacks("once memory"),S.Callbacks("once memory"),1,"rejected"]],s="pending",r={state:function(){return s},always:function(){return a.done(arguments).fail(arguments),this},catch:function(t){return r.then(null,t)},pipe:function(){var s=arguments;return S.Deferred(function(i){S.each(o,function(t,e){var n=S.isFunction(s[e[4]])&&s[e[4]];a[e[1]](function(){var t=n&&n.apply(this,arguments);t&&S.isFunction(t.promise)?t.promise().progress(i.notify).done(i.resolve).fail(i.reject):i[e[0]+"With"](this,n?[t]:arguments)})}),s=null}).promise()},then:function(e,n,i){var l=0;function c(s,o,r,a){return function(){function t(){var t,e;if(!(s<l)){if((t=r.apply(n,i))===o.promise())throw new TypeError("Thenable self-resolution");e=t&&("object"==typeof t||"function"==typeof t)&&t.then,S.isFunction(e)?a?e.call(t,c(l,o,N,a),c(l,o,z,a)):(l++,e.call(t,c(l,o,N,a),c(l,o,z,a),c(l,o,N,o.notifyWith))):(r!==N&&(n=void 0,i=[t]),(a||o.resolveWith)(n,i))}}var n=this,i=arguments,e=a?t:function(){try{t()}catch(t){S.Deferred.exceptionHook&&S.Deferred.exceptionHook(t,e.stackTrace),l<=s+1&&(r!==z&&(n=void 0,i=[t]),o.rejectWith(n,i))}};s?e():(S.Deferred.getStackHook&&(e.stackTrace=S.Deferred.getStackHook()),_.setTimeout(e))}}return S.Deferred(function(t){o[0][3].add(c(0,t,S.isFunction(i)?i:N,t.notifyWith)),o[1][3].add(c(0,t,S.isFunction(e)?e:N)),o[2][3].add(c(0,t,S.isFunction(n)?n:z))}).promise()},promise:function(t){return null!=t?S.extend(t,r):r}},a={};return S.each(o,function(t,e){var n=e[2],i=e[5];r[e[1]]=n.add,i&&n.add(function(){s=i},o[3-t][2].disable,o[0][2].lock),n.add(e[3].fire),a[e[0]]=function(){return a[e[0]+"With"](this===a?void 0:this,arguments),this},a[e[0]+"With"]=n.fireWith}),r.promise(a),t&&t.call(a,a),a},when:function(t){function e(e){return function(t){s[e]=this,o[e]=1<arguments.length?a.call(arguments):t,--n||r.resolveWith(s,o)}}var n=arguments.length,i=n,s=Array(i),o=a.call(arguments),r=S.Deferred();if(n<=1&&(I(t,r.done(e(i)).resolve,r.reject,!n),"pending"===r.state()||S.isFunction(o[i]&&o[i].then)))return r.then();for(;i--;)I(o[i],e(i),r.reject);return r.promise()}});var H=/^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;S.Deferred.exceptionHook=function(t,e){_.console&&_.console.warn&&t&&H.test(t.name)&&_.console.warn("jQuery.Deferred exception: "+t.message,t.stack,e)},S.readyException=function(t){_.setTimeout(function(){throw t})};var R=S.Deferred();function O(){T.removeEventListener("DOMContentLoaded",O),_.removeEventListener("load",O),S.ready()}S.fn.ready=function(t){return R.then(t).catch(function(t){S.readyException(t)}),this},S.extend({isReady:!1,readyWait:1,ready:function(t){(!0===t?--S.readyWait:S.isReady)||((S.isReady=!0)!==t&&0<--S.readyWait||R.resolveWith(T,[S]))}}),S.ready.then=R.then,"complete"===T.readyState||"loading"!==T.readyState&&!T.documentElement.doScroll?_.setTimeout(S.ready):(T.addEventListener("DOMContentLoaded",O),_.addEventListener("load",O));function B(t){return 1===t.nodeType||9===t.nodeType||!+t.nodeType}var W=function(t,e,n,i,s,o,r){var a=0,l=t.length,c=null==n;if("object"===S.type(n))for(a in s=!0,n)W(t,e,a,n[a],!0,o,r);else if(void 0!==i&&(s=!0,S.isFunction(i)||(r=!0),c&&(e=r?(e.call(t,i),null):(c=e,function(t,e,n){return c.call(S(t),n)})),e))for(;a<l;a++)e(t[a],n,r?i:i.call(t[a],a,e(t[a],n)));return s?t:c?e.call(t):l?e(t[0],n):o};function V(){this.expando=S.expando+V.uid++}V.uid=1,V.prototype={cache:function(t){var e=t[this.expando];return e||(e={},B(t)&&(t.nodeType?t[this.expando]=e:Object.defineProperty(t,this.expando,{value:e,configurable:!0}))),e},set:function(t,e,n){var i,s=this.cache(t);if("string"==typeof e)s[S.camelCase(e)]=n;else for(i in e)s[S.camelCase(i)]=e[i];return s},get:function(t,e){return void 0===e?this.cache(t):t[this.expando]&&t[this.expando][S.camelCase(e)]},access:function(t,e,n){return void 0===e||e&&"string"==typeof e&&void 0===n?this.get(t,e):(this.set(t,e,n),void 0!==n?n:e)},remove:function(t,e){var n,i=t[this.expando];if(void 0!==i){if(void 0!==e){n=(e=Array.isArray(e)?e.map(S.camelCase):(e=S.camelCase(e))in i?[e]:e.match(F)||[]).length;for(;n--;)delete i[e[n]]}void 0!==e&&!S.isEmptyObject(i)||(t.nodeType?t[this.expando]=void 0:delete t[this.expando])}},hasData:function(t){var e=t[this.expando];return void 0!==e&&!S.isEmptyObject(e)}};var X=new V,Y=new V,U=/^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,Z=/[A-Z]/g;function Q(t,e,n){var i,s;if(void 0===n&&1===t.nodeType)if(i="data-"+e.replace(Z,"-$&").toLowerCase(),"string"==typeof(n=t.getAttribute(i))){try{n="true"===(s=n)||"false"!==s&&("null"===s?null:s===+s+""?+s:U.test(s)?JSON.parse(s):s)}catch(t){}Y.set(t,e,n)}else n=void 0;return n}S.extend({hasData:function(t){return Y.hasData(t)||X.hasData(t)},data:function(t,e,n){return Y.access(t,e,n)},removeData:function(t,e){Y.remove(t,e)},_data:function(t,e,n){return X.access(t,e,n)},_removeData:function(t,e){X.remove(t,e)}}),S.fn.extend({data:function(n,t){var e,i,s,o=this[0],r=o&&o.attributes;if(void 0!==n)return"object"==typeof n?this.each(function(){Y.set(this,n)}):W(this,function(t){var e;if(o&&void 0===t){if(void 0!==(e=Y.get(o,n)))return e;if(void 0!==(e=Q(o,n)))return e}else this.each(function(){Y.set(this,n,t)})},null,t,1<arguments.length,null,!0);if(this.length&&(s=Y.get(o),1===o.nodeType&&!X.get(o,"hasDataAttrs"))){for(e=r.length;e--;)r[e]&&(0===(i=r[e].name).indexOf("data-")&&(i=S.camelCase(i.slice(5)),Q(o,i,s[i])));X.set(o,"hasDataAttrs",!0)}return s},removeData:function(t){return this.each(function(){Y.remove(this,t)})}}),S.extend({queue:function(t,e,n){var i;if(t)return e=(e||"fx")+"queue",i=X.get(t,e),n&&(!i||Array.isArray(n)?i=X.access(t,e,S.makeArray(n)):i.push(n)),i||[]},dequeue:function(t,e){e=e||"fx";var n=S.queue(t,e),i=n.length,s=n.shift(),o=S._queueHooks(t,e);"inprogress"===s&&(s=n.shift(),i--),s&&("fx"===e&&n.unshift("inprogress"),delete o.stop,s.call(t,function(){S.dequeue(t,e)},o)),!i&&o&&o.empty.fire()},_queueHooks:function(t,e){var n=e+"queueHooks";return X.get(t,n)||X.access(t,n,{empty:S.Callbacks("once memory").add(function(){X.remove(t,[e+"queue",n])})})}}),S.fn.extend({queue:function(e,n){var t=2;return"string"!=typeof e&&(n=e,e="fx",t--),arguments.length<t?S.queue(this[0],e):void 0===n?this:this.each(function(){var t=S.queue(this,e,n);S._queueHooks(this,e),"fx"===e&&"inprogress"!==t[0]&&S.dequeue(this,e)})},dequeue:function(t){return this.each(function(){S.dequeue(this,t)})},clearQueue:function(t){return this.queue(t||"fx",[])},promise:function(t,e){function n(){--s||o.resolveWith(r,[r])}var i,s=1,o=S.Deferred(),r=this,a=this.length;for("string"!=typeof t&&(e=t,t=void 0),t=t||"fx";a--;)(i=X.get(r[a],t+"queueHooks"))&&i.empty&&(s++,i.empty.add(n));return n(),o.promise(e)}});function G(t,e,n,i){var s,o,r={};for(o in e)r[o]=t.style[o],t.style[o]=e[o];for(o in s=n.apply(t,i||[]),e)t.style[o]=r[o];return s}var K=/[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,J=new RegExp("^(?:([+-])=|)("+K+")([a-z%]*)$","i"),tt=["Top","Right","Bottom","Left"],et=function(t,e){return"none"===(t=e||t).style.display||""===t.style.display&&S.contains(t.ownerDocument,t)&&"none"===S.css(t,"display")};function nt(t,e,n,i){var s,o=1,r=20,a=i?function(){return i.cur()}:function(){return S.css(t,e,"")},l=a(),c=n&&n[3]||(S.cssNumber[e]?"":"px"),u=(S.cssNumber[e]||"px"!==c&&+l)&&J.exec(S.css(t,e));if(u&&u[3]!==c)for(c=c||u[3],n=n||[],u=+l||1;u/=o=o||".5",S.style(t,e,u+c),o!==(o=a()/l)&&1!==o&&--r;);return n&&(u=+u||+l||0,s=n[1]?u+(n[1]+1)*n[2]:+n[2],i&&(i.unit=c,i.start=u,i.end=s)),s}var it={};function st(t,e){for(var n,i,s=[],o=0,r=t.length;o<r;o++)(i=t[o]).style&&(n=i.style.display,e?("none"===n&&(s[o]=X.get(i,"display")||null,s[o]||(i.style.display="")),""===i.style.display&&et(i)&&(s[o]=(d=c=l=void 0,c=(a=i).ownerDocument,u=a.nodeName,(d=it[u])||(l=c.body.appendChild(c.createElement(u)),d=S.css(l,"display"),l.parentNode.removeChild(l),"none"===d&&(d="block"),it[u]=d)))):"none"!==n&&(s[o]="none",X.set(i,"display",n)));var a,l,c,u,d;for(o=0;o<r;o++)null!=s[o]&&(t[o].style.display=s[o]);return t}S.fn.extend({show:function(){return st(this,!0)},hide:function(){return st(this)},toggle:function(t){return"boolean"==typeof t?t?this.show():this.hide():this.each(function(){et(this)?S(this).show():S(this).hide()})}});var ot=/^(?:checkbox|radio)$/i,rt=/<([a-z][^\/\0>\x20\t\r\n\f]+)/i,at=/^$|\/(?:java|ecma)script/i,lt={option:[1,"<select multiple='multiple'>","</select>"],thead:[1,"<table>","</table>"],col:[2,"<table><colgroup>","</colgroup></table>"],tr:[2,"<table><tbody>","</tbody></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],_default:[0,"",""]};function ct(t,e){var n;return n=void 0!==t.getElementsByTagName?t.getElementsByTagName(e||"*"):void 0!==t.querySelectorAll?t.querySelectorAll(e||"*"):[],void 0===e||e&&$(t,e)?S.merge([t],n):n}function ut(t,e){for(var n=0,i=t.length;n<i;n++)X.set(t[n],"globalEval",!e||X.get(e[n],"globalEval"))}lt.optgroup=lt.option,lt.tbody=lt.tfoot=lt.colgroup=lt.caption=lt.thead,lt.th=lt.td;var dt,ht,pt=/<|&#?\w+;/;function ft(t,e,n,i,s){for(var o,r,a,l,c,u,d=e.createDocumentFragment(),h=[],p=0,f=t.length;p<f;p++)if((o=t[p])||0===o)if("object"===S.type(o))S.merge(h,o.nodeType?[o]:o);else if(pt.test(o)){for(r=r||d.appendChild(e.createElement("div")),a=(rt.exec(o)||["",""])[1].toLowerCase(),l=lt[a]||lt._default,r.innerHTML=l[1]+S.htmlPrefilter(o)+l[2],u=l[0];u--;)r=r.lastChild;S.merge(h,r.childNodes),(r=d.firstChild).textContent=""}else h.push(e.createTextNode(o));for(d.textContent="",p=0;o=h[p++];)if(i&&-1<S.inArray(o,i))s&&s.push(o);else if(c=S.contains(o.ownerDocument,o),r=ct(d.appendChild(o),"script"),c&&ut(r),n)for(u=0;o=r[u++];)at.test(o.type||"")&&n.push(o);return d}dt=T.createDocumentFragment().appendChild(T.createElement("div")),(ht=T.createElement("input")).setAttribute("type","radio"),ht.setAttribute("checked","checked"),ht.setAttribute("name","t"),dt.appendChild(ht),m.checkClone=dt.cloneNode(!0).cloneNode(!0).lastChild.checked,dt.innerHTML="<textarea>x</textarea>",m.noCloneChecked=!!dt.cloneNode(!0).lastChild.defaultValue;var gt=T.documentElement,mt=/^key/,vt=/^(?:mouse|pointer|contextmenu|drag|drop)|click/,yt=/^([^.]*)(?:\.(.+)|)/;function bt(){return!0}function xt(){return!1}function wt(){try{return T.activeElement}catch(t){}}function Ct(t,e,n,i,s,o){var r,a;if("object"==typeof e){for(a in"string"!=typeof n&&(i=i||n,n=void 0),e)Ct(t,a,n,i,e[a],o);return t}if(null==i&&null==s?(s=n,i=n=void 0):null==s&&("string"==typeof n?(s=i,i=void 0):(s=i,i=n,n=void 0)),!1===s)s=xt;else if(!s)return t;return 1===o&&(r=s,(s=function(t){return S().off(t),r.apply(this,arguments)}).guid=r.guid||(r.guid=S.guid++)),t.each(function(){S.event.add(this,e,s,i,n)})}S.event={global:{},add:function(e,t,n,i,s){var o,r,a,l,c,u,d,h,p,f,g,m=X.get(e);if(m)for(n.handler&&(n=(o=n).handler,s=o.selector),s&&S.find.matchesSelector(gt,s),n.guid||(n.guid=S.guid++),(l=m.events)||(l=m.events={}),(r=m.handle)||(r=m.handle=function(t){return void 0!==S&&S.event.triggered!==t.type?S.event.dispatch.apply(e,arguments):void 0}),c=(t=(t||"").match(F)||[""]).length;c--;)p=g=(a=yt.exec(t[c])||[])[1],f=(a[2]||"").split(".").sort(),p&&(d=S.event.special[p]||{},p=(s?d.delegateType:d.bindType)||p,d=S.event.special[p]||{},u=S.extend({type:p,origType:g,data:i,handler:n,guid:n.guid,selector:s,needsContext:s&&S.expr.match.needsContext.test(s),namespace:f.join(".")},o),(h=l[p])||((h=l[p]=[]).delegateCount=0,d.setup&&!1!==d.setup.call(e,i,f,r)||e.addEventListener&&e.addEventListener(p,r)),d.add&&(d.add.call(e,u),u.handler.guid||(u.handler.guid=n.guid)),s?h.splice(h.delegateCount++,0,u):h.push(u),S.event.global[p]=!0)},remove:function(t,e,n,i,s){var o,r,a,l,c,u,d,h,p,f,g,m=X.hasData(t)&&X.get(t);if(m&&(l=m.events)){for(c=(e=(e||"").match(F)||[""]).length;c--;)if(p=g=(a=yt.exec(e[c])||[])[1],f=(a[2]||"").split(".").sort(),p){for(d=S.event.special[p]||{},h=l[p=(i?d.delegateType:d.bindType)||p]||[],a=a[2]&&new RegExp("(^|\\.)"+f.join("\\.(?:.*\\.|)")+"(\\.|$)"),r=o=h.length;o--;)u=h[o],!s&&g!==u.origType||n&&n.guid!==u.guid||a&&!a.test(u.namespace)||i&&i!==u.selector&&("**"!==i||!u.selector)||(h.splice(o,1),u.selector&&h.delegateCount--,d.remove&&d.remove.call(t,u));r&&!h.length&&(d.teardown&&!1!==d.teardown.call(t,f,m.handle)||S.removeEvent(t,p,m.handle),delete l[p])}else for(p in l)S.event.remove(t,p+e[c],n,i,!0);S.isEmptyObject(l)&&X.remove(t,"handle events")}},dispatch:function(t){var e,n,i,s,o,r,a=S.event.fix(t),l=new Array(arguments.length),c=(X.get(this,"events")||{})[a.type]||[],u=S.event.special[a.type]||{};for(l[0]=a,e=1;e<arguments.length;e++)l[e]=arguments[e];if(a.delegateTarget=this,!u.preDispatch||!1!==u.preDispatch.call(this,a)){for(r=S.event.handlers.call(this,a,c),e=0;(s=r[e++])&&!a.isPropagationStopped();)for(a.currentTarget=s.elem,n=0;(o=s.handlers[n++])&&!a.isImmediatePropagationStopped();)a.rnamespace&&!a.rnamespace.test(o.namespace)||(a.handleObj=o,a.data=o.data,void 0!==(i=((S.event.special[o.origType]||{}).handle||o.handler).apply(s.elem,l))&&!1===(a.result=i)&&(a.preventDefault(),a.stopPropagation()));return u.postDispatch&&u.postDispatch.call(this,a),a.result}},handlers:function(t,e){var n,i,s,o,r,a=[],l=e.delegateCount,c=t.target;if(l&&c.nodeType&&!("click"===t.type&&1<=t.button))for(;c!==this;c=c.parentNode||this)if(1===c.nodeType&&("click"!==t.type||!0!==c.disabled)){for(o=[],r={},n=0;n<l;n++)void 0===r[s=(i=e[n]).selector+" "]&&(r[s]=i.needsContext?-1<S(s,this).index(c):S.find(s,this,null,[c]).length),r[s]&&o.push(i);o.length&&a.push({elem:c,handlers:o})}return c=this,l<e.length&&a.push({elem:c,handlers:e.slice(l)}),a},addProp:function(e,t){Object.defineProperty(S.Event.prototype,e,{enumerable:!0,configurable:!0,get:S.isFunction(t)?function(){if(this.originalEvent)return t(this.originalEvent)}:function(){if(this.originalEvent)return this.originalEvent[e]},set:function(t){Object.defineProperty(this,e,{enumerable:!0,configurable:!0,writable:!0,value:t})}})},fix:function(t){return t[S.expando]?t:new S.Event(t)},special:{load:{noBubble:!0},focus:{trigger:function(){if(this!==wt()&&this.focus)return this.focus(),!1},delegateType:"focusin"},blur:{trigger:function(){if(this===wt()&&this.blur)return this.blur(),!1},delegateType:"focusout"},click:{trigger:function(){if("checkbox"===this.type&&this.click&&$(this,"input"))return this.click(),!1},_default:function(t){return $(t.target,"a")}},beforeunload:{postDispatch:function(t){void 0!==t.result&&t.originalEvent&&(t.originalEvent.returnValue=t.result)}}}},S.removeEvent=function(t,e,n){t.removeEventListener&&t.removeEventListener(e,n)},S.Event=function(t,e){return this instanceof S.Event?(t&&t.type?(this.originalEvent=t,this.type=t.type,this.isDefaultPrevented=t.defaultPrevented||void 0===t.defaultPrevented&&!1===t.returnValue?bt:xt,this.target=t.target&&3===t.target.nodeType?t.target.parentNode:t.target,this.currentTarget=t.currentTarget,this.relatedTarget=t.relatedTarget):this.type=t,e&&S.extend(this,e),this.timeStamp=t&&t.timeStamp||S.now(),void(this[S.expando]=!0)):new S.Event(t,e)},S.Event.prototype={constructor:S.Event,isDefaultPrevented:xt,isPropagationStopped:xt,isImmediatePropagationStopped:xt,isSimulated:!1,preventDefault:function(){var t=this.originalEvent;this.isDefaultPrevented=bt,t&&!this.isSimulated&&t.preventDefault()},stopPropagation:function(){var t=this.originalEvent;this.isPropagationStopped=bt,t&&!this.isSimulated&&t.stopPropagation()},stopImmediatePropagation:function(){var t=this.originalEvent;this.isImmediatePropagationStopped=bt,t&&!this.isSimulated&&t.stopImmediatePropagation(),this.stopPropagation()}},S.each({altKey:!0,bubbles:!0,cancelable:!0,changedTouches:!0,ctrlKey:!0,detail:!0,eventPhase:!0,metaKey:!0,pageX:!0,pageY:!0,shiftKey:!0,view:!0,char:!0,charCode:!0,key:!0,keyCode:!0,button:!0,buttons:!0,clientX:!0,clientY:!0,offsetX:!0,offsetY:!0,pointerId:!0,pointerType:!0,screenX:!0,screenY:!0,targetTouches:!0,toElement:!0,touches:!0,which:function(t){var e=t.button;return null==t.which&&mt.test(t.type)?null!=t.charCode?t.charCode:t.keyCode:!t.which&&void 0!==e&&vt.test(t.type)?1&e?1:2&e?3:4&e?2:0:t.which}},S.event.addProp),S.each({mouseenter:"mouseover",mouseleave:"mouseout",pointerenter:"pointerover",pointerleave:"pointerout"},function(t,s){S.event.special[t]={delegateType:s,bindType:s,handle:function(t){var e,n=t.relatedTarget,i=t.handleObj;return n&&(n===this||S.contains(this,n))||(t.type=i.origType,e=i.handler.apply(this,arguments),t.type=s),e}}}),S.fn.extend({on:function(t,e,n,i){return Ct(this,t,e,n,i)},one:function(t,e,n,i){return Ct(this,t,e,n,i,1)},off:function(t,e,n){var i,s;if(t&&t.preventDefault&&t.handleObj)return i=t.handleObj,S(t.delegateTarget).off(i.namespace?i.origType+"."+i.namespace:i.origType,i.selector,i.handler),this;if("object"!=typeof t)return!1!==e&&"function"!=typeof e||(n=e,e=void 0),!1===n&&(n=xt),this.each(function(){S.event.remove(this,t,n,e)});for(s in t)this.off(s,e,t[s]);return this}});var _t=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\/\0>\x20\t\r\n\f]*)[^>]*)\/>/gi,Tt=/<script|<style|<link/i,St=/checked\s*(?:[^=]|=\s*.checked.)/i,kt=/^true\/(.*)/,$t=/^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;function Et(t,e){return $(t,"table")&&$(11!==e.nodeType?e:e.firstChild,"tr")&&S(">tbody",t)[0]||t}function Pt(t){return t.type=(null!==t.getAttribute("type"))+"/"+t.type,t}function jt(t){var e=kt.exec(t.type);return e?t.type=e[1]:t.removeAttribute("type"),t}function At(t,e){var n,i,s,o,r,a,l,c;if(1===e.nodeType){if(X.hasData(t)&&(o=X.access(t),r=X.set(e,o),c=o.events))for(s in delete r.handle,r.events={},c)for(n=0,i=c[s].length;n<i;n++)S.event.add(e,s,c[s][n]);Y.hasData(t)&&(a=Y.access(t),l=S.extend({},a),Y.set(e,l))}}function Dt(n,i,s,o){i=g.apply([],i);var t,e,r,a,l,c,u=0,d=n.length,h=d-1,p=i[0],f=S.isFunction(p);if(f||1<d&&"string"==typeof p&&!m.checkClone&&St.test(p))return n.each(function(t){var e=n.eq(t);f&&(i[0]=p.call(this,t,e.html())),Dt(e,i,s,o)});if(d&&(e=(t=ft(i,n[0].ownerDocument,!1,n,o)).firstChild,1===t.childNodes.length&&(t=e),e||o)){for(a=(r=S.map(ct(t,"script"),Pt)).length;u<d;u++)l=t,u!==h&&(l=S.clone(l,!0,!0),a&&S.merge(r,ct(l,"script"))),s.call(n[u],l,u);if(a)for(c=r[r.length-1].ownerDocument,S.map(r,jt),u=0;u<a;u++)l=r[u],at.test(l.type||"")&&!X.access(l,"globalEval")&&S.contains(c,l)&&(l.src?S._evalUrl&&S._evalUrl(l.src):v(l.textContent.replace($t,""),c))}return n}function Mt(t,e,n){for(var i,s=e?S.filter(e,t):t,o=0;null!=(i=s[o]);o++)n||1!==i.nodeType||S.cleanData(ct(i)),i.parentNode&&(n&&S.contains(i.ownerDocument,i)&&ut(ct(i,"script")),i.parentNode.removeChild(i));return t}S.extend({htmlPrefilter:function(t){return t.replace(_t,"<$1></$2>")},clone:function(t,e,n){var i,s,o,r,a,l,c,u=t.cloneNode(!0),d=S.contains(t.ownerDocument,t);if(!(m.noCloneChecked||1!==t.nodeType&&11!==t.nodeType||S.isXMLDoc(t)))for(r=ct(u),i=0,s=(o=ct(t)).length;i<s;i++)a=o[i],l=r[i],"input"===(c=l.nodeName.toLowerCase())&&ot.test(a.type)?l.checked=a.checked:"input"!==c&&"textarea"!==c||(l.defaultValue=a.defaultValue);if(e)if(n)for(o=o||ct(t),r=r||ct(u),i=0,s=o.length;i<s;i++)At(o[i],r[i]);else At(t,u);return 0<(r=ct(u,"script")).length&&ut(r,!d&&ct(t,"script")),u},cleanData:function(t){for(var e,n,i,s=S.event.special,o=0;void 0!==(n=t[o]);o++)if(B(n)){if(e=n[X.expando]){if(e.events)for(i in e.events)s[i]?S.event.remove(n,i):S.removeEvent(n,i,e.handle);n[X.expando]=void 0}n[Y.expando]&&(n[Y.expando]=void 0)}}}),S.fn.extend({detach:function(t){return Mt(this,t,!0)},remove:function(t){return Mt(this,t)},text:function(t){return W(this,function(t){return void 0===t?S.text(this):this.empty().each(function(){1!==this.nodeType&&11!==this.nodeType&&9!==this.nodeType||(this.textContent=t)})},null,t,arguments.length)},append:function(){return Dt(this,arguments,function(t){1!==this.nodeType&&11!==this.nodeType&&9!==this.nodeType||Et(this,t).appendChild(t)})},prepend:function(){return Dt(this,arguments,function(t){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var e=Et(this,t);e.insertBefore(t,e.firstChild)}})},before:function(){return Dt(this,arguments,function(t){this.parentNode&&this.parentNode.insertBefore(t,this)})},after:function(){return Dt(this,arguments,function(t){this.parentNode&&this.parentNode.insertBefore(t,this.nextSibling)})},empty:function(){for(var t,e=0;null!=(t=this[e]);e++)1===t.nodeType&&(S.cleanData(ct(t,!1)),t.textContent="");return this},clone:function(t,e){return t=null!=t&&t,e=null==e?t:e,this.map(function(){return S.clone(this,t,e)})},html:function(t){return W(this,function(t){var e=this[0]||{},n=0,i=this.length;if(void 0===t&&1===e.nodeType)return e.innerHTML;if("string"==typeof t&&!Tt.test(t)&&!lt[(rt.exec(t)||["",""])[1].toLowerCase()]){t=S.htmlPrefilter(t);try{for(;n<i;n++)1===(e=this[n]||{}).nodeType&&(S.cleanData(ct(e,!1)),e.innerHTML=t);e=0}catch(t){}}e&&this.empty().append(t)},null,t,arguments.length)},replaceWith:function(){var n=[];return Dt(this,arguments,function(t){var e=this.parentNode;S.inArray(this,n)<0&&(S.cleanData(ct(this)),e&&e.replaceChild(t,this))},n)}}),S.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(t,r){S.fn[t]=function(t){for(var e,n=[],i=S(t),s=i.length-1,o=0;o<=s;o++)e=o===s?this:this.clone(!0),S(i[o])[r](e),l.apply(n,e.get());return this.pushStack(n)}});var Lt,qt,Ft,Nt,zt,It,Ht=/^margin/,Rt=new RegExp("^("+K+")(?!px)[a-z%]+$","i"),Ot=function(t){var e=t.ownerDocument.defaultView;return e&&e.opener||(e=_),e.getComputedStyle(t)};function Bt(){if(It){It.style.cssText="box-sizing:border-box;position:relative;display:block;margin:auto;border:1px;padding:1px;top:1%;width:50%",It.innerHTML="",gt.appendChild(zt);var t=_.getComputedStyle(It);Lt="1%"!==t.top,Nt="2px"===t.marginLeft,qt="4px"===t.width,It.style.marginRight="50%",Ft="4px"===t.marginRight,gt.removeChild(zt),It=null}}function Wt(t,e,n){var i,s,o,r,a=t.style;return(n=n||Ot(t))&&(""!==(r=n.getPropertyValue(e)||n[e])||S.contains(t.ownerDocument,t)||(r=S.style(t,e)),!m.pixelMarginRight()&&Rt.test(r)&&Ht.test(e)&&(i=a.width,s=a.minWidth,o=a.maxWidth,a.minWidth=a.maxWidth=a.width=r,r=n.width,a.width=i,a.minWidth=s,a.maxWidth=o)),void 0!==r?r+"":r}function Vt(t,e){return{get:function(){return t()?void delete this.get:(this.get=e).apply(this,arguments)}}}zt=T.createElement("div"),(It=T.createElement("div")).style&&(It.style.backgroundClip="content-box",It.cloneNode(!0).style.backgroundClip="",m.clearCloneStyle="content-box"===It.style.backgroundClip,zt.style.cssText="border:0;width:8px;height:0;top:0;left:-9999px;padding:0;margin-top:1px;position:absolute",zt.appendChild(It),S.extend(m,{pixelPosition:function(){return Bt(),Lt},boxSizingReliable:function(){return Bt(),qt},pixelMarginRight:function(){return Bt(),Ft},reliableMarginLeft:function(){return Bt(),Nt}}));var Xt=/^(none|table(?!-c[ea]).+)/,Yt=/^--/,Ut={position:"absolute",visibility:"hidden",display:"block"},Zt={letterSpacing:"0",fontWeight:"400"},Qt=["Webkit","Moz","ms"],Gt=T.createElement("div").style;function Kt(t){var e=S.cssProps[t];return e=e||(S.cssProps[t]=function(t){if(t in Gt)return t;for(var e=t[0].toUpperCase()+t.slice(1),n=Qt.length;n--;)if((t=Qt[n]+e)in Gt)return t}(t)||t)}function Jt(t,e,n){var i=J.exec(e);return i?Math.max(0,i[2]-(n||0))+(i[3]||"px"):e}function te(t,e,n,i,s){var o,r=0;for(o=n===(i?"border":"content")?4:"width"===e?1:0;o<4;o+=2)"margin"===n&&(r+=S.css(t,n+tt[o],!0,s)),i?("content"===n&&(r-=S.css(t,"padding"+tt[o],!0,s)),"margin"!==n&&(r-=S.css(t,"border"+tt[o]+"Width",!0,s))):(r+=S.css(t,"padding"+tt[o],!0,s),"padding"!==n&&(r+=S.css(t,"border"+tt[o]+"Width",!0,s)));return r}function ee(t,e,n){var i,s=Ot(t),o=Wt(t,e,s),r="border-box"===S.css(t,"boxSizing",!1,s);return Rt.test(o)?o:(i=r&&(m.boxSizingReliable()||o===t.style[e]),"auto"===o&&(o=t["offset"+e[0].toUpperCase()+e.slice(1)]),(o=parseFloat(o)||0)+te(t,e,n||(r?"border":"content"),i,s)+"px")}function ne(t,e,n,i,s){return new ne.prototype.init(t,e,n,i,s)}S.extend({cssHooks:{opacity:{get:function(t,e){if(e){var n=Wt(t,"opacity");return""===n?"1":n}}}},cssNumber:{animationIterationCount:!0,columnCount:!0,fillOpacity:!0,flexGrow:!0,flexShrink:!0,fontWeight:!0,lineHeight:!0,opacity:!0,order:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{float:"cssFloat"},style:function(t,e,n,i){if(t&&3!==t.nodeType&&8!==t.nodeType&&t.style){var s,o,r,a=S.camelCase(e),l=Yt.test(e),c=t.style;return l||(e=Kt(a)),r=S.cssHooks[e]||S.cssHooks[a],void 0===n?r&&"get"in r&&void 0!==(s=r.get(t,!1,i))?s:c[e]:("string"===(o=typeof n)&&(s=J.exec(n))&&s[1]&&(n=nt(t,e,s),o="number"),void(null!=n&&n==n&&("number"===o&&(n+=s&&s[3]||(S.cssNumber[a]?"":"px")),m.clearCloneStyle||""!==n||0!==e.indexOf("background")||(c[e]="inherit"),r&&"set"in r&&void 0===(n=r.set(t,n,i))||(l?c.setProperty(e,n):c[e]=n))))}},css:function(t,e,n,i){var s,o,r,a=S.camelCase(e);return Yt.test(e)||(e=Kt(a)),(r=S.cssHooks[e]||S.cssHooks[a])&&"get"in r&&(s=r.get(t,!0,n)),void 0===s&&(s=Wt(t,e,i)),"normal"===s&&e in Zt&&(s=Zt[e]),""===n||n?(o=parseFloat(s),!0===n||isFinite(o)?o||0:s):s}}),S.each(["height","width"],function(t,r){S.cssHooks[r]={get:function(t,e,n){if(e)return!Xt.test(S.css(t,"display"))||t.getClientRects().length&&t.getBoundingClientRect().width?ee(t,r,n):G(t,Ut,function(){return ee(t,r,n)})},set:function(t,e,n){var i,s=n&&Ot(t),o=n&&te(t,r,n,"border-box"===S.css(t,"boxSizing",!1,s),s);return o&&(i=J.exec(e))&&"px"!==(i[3]||"px")&&(t.style[r]=e,e=S.css(t,r)),Jt(0,e,o)}}}),S.cssHooks.marginLeft=Vt(m.reliableMarginLeft,function(t,e){if(e)return(parseFloat(Wt(t,"marginLeft"))||t.getBoundingClientRect().left-G(t,{marginLeft:0},function(){return t.getBoundingClientRect().left}))+"px"}),S.each({margin:"",padding:"",border:"Width"},function(s,o){S.cssHooks[s+o]={expand:function(t){for(var e=0,n={},i="string"==typeof t?t.split(" "):[t];e<4;e++)n[s+tt[e]+o]=i[e]||i[e-2]||i[0];return n}},Ht.test(s)||(S.cssHooks[s+o].set=Jt)}),S.fn.extend({css:function(t,e){return W(this,function(t,e,n){var i,s,o={},r=0;if(Array.isArray(e)){for(i=Ot(t),s=e.length;r<s;r++)o[e[r]]=S.css(t,e[r],!1,i);return o}return void 0!==n?S.style(t,e,n):S.css(t,e)},t,e,1<arguments.length)}}),((S.Tween=ne).prototype={constructor:ne,init:function(t,e,n,i,s,o){this.elem=t,this.prop=n,this.easing=s||S.easing._default,this.options=e,this.start=this.now=this.cur(),this.end=i,this.unit=o||(S.cssNumber[n]?"":"px")},cur:function(){var t=ne.propHooks[this.prop];return t&&t.get?t.get(this):ne.propHooks._default.get(this)},run:function(t){var e,n=ne.propHooks[this.prop];return this.options.duration?this.pos=e=S.easing[this.easing](t,this.options.duration*t,0,1,this.options.duration):this.pos=e=t,this.now=(this.end-this.start)*e+this.start,this.options.step&&this.options.step.call(this.elem,this.now,this),n&&n.set?n.set(this):ne.propHooks._default.set(this),this}}).init.prototype=ne.prototype,(ne.propHooks={_default:{get:function(t){var e;return 1!==t.elem.nodeType||null!=t.elem[t.prop]&&null==t.elem.style[t.prop]?t.elem[t.prop]:(e=S.css(t.elem,t.prop,""))&&"auto"!==e?e:0},set:function(t){S.fx.step[t.prop]?S.fx.step[t.prop](t):1!==t.elem.nodeType||null==t.elem.style[S.cssProps[t.prop]]&&!S.cssHooks[t.prop]?t.elem[t.prop]=t.now:S.style(t.elem,t.prop,t.now+t.unit)}}}).scrollTop=ne.propHooks.scrollLeft={set:function(t){t.elem.nodeType&&t.elem.parentNode&&(t.elem[t.prop]=t.now)}},S.easing={linear:function(t){return t},swing:function(t){return.5-Math.cos(t*Math.PI)/2},_default:"swing"},S.fx=ne.prototype.init,S.fx.step={};var ie,se,oe,re,ae=/^(?:toggle|show|hide)$/,le=/queueHooks$/;function ce(){se&&(!1===T.hidden&&_.requestAnimationFrame?_.requestAnimationFrame(ce):_.setTimeout(ce,S.fx.interval),S.fx.tick())}function ue(){return _.setTimeout(function(){ie=void 0}),ie=S.now()}function de(t,e){var n,i=0,s={height:t};for(e=e?1:0;i<4;i+=2-e)s["margin"+(n=tt[i])]=s["padding"+n]=t;return e&&(s.opacity=s.width=t),s}function he(t,e,n){for(var i,s=(pe.tweeners[e]||[]).concat(pe.tweeners["*"]),o=0,r=s.length;o<r;o++)if(i=s[o].call(n,e,t))return i}function pe(o,t,e){var n,r,i=0,s=pe.prefilters.length,a=S.Deferred().always(function(){delete l.elem}),l=function(){if(r)return!1;for(var t=ie||ue(),e=Math.max(0,c.startTime+c.duration-t),n=1-(e/c.duration||0),i=0,s=c.tweens.length;i<s;i++)c.tweens[i].run(n);return a.notifyWith(o,[c,n,e]),n<1&&s?e:(s||a.notifyWith(o,[c,1,0]),a.resolveWith(o,[c]),!1)},c=a.promise({elem:o,props:S.extend({},t),opts:S.extend(!0,{specialEasing:{},easing:S.easing._default},e),originalProperties:t,originalOptions:e,startTime:ie||ue(),duration:e.duration,tweens:[],createTween:function(t,e){var n=S.Tween(o,c.opts,t,e,c.opts.specialEasing[t]||c.opts.easing);return c.tweens.push(n),n},stop:function(t){var e=0,n=t?c.tweens.length:0;if(r)return this;for(r=!0;e<n;e++)c.tweens[e].run(1);return t?(a.notifyWith(o,[c,1,0]),a.resolveWith(o,[c,t])):a.rejectWith(o,[c,t]),this}}),u=c.props;for(function(t,e){var n,i,s,o,r;for(n in t)if(s=e[i=S.camelCase(n)],o=t[n],Array.isArray(o)&&(s=o[1],o=t[n]=o[0]),n!==i&&(t[i]=o,delete t[n]),(r=S.cssHooks[i])&&"expand"in r)for(n in o=r.expand(o),delete t[i],o)n in t||(t[n]=o[n],e[n]=s);else e[i]=s}(u,c.opts.specialEasing);i<s;i++)if(n=pe.prefilters[i].call(c,o,u,c.opts))return S.isFunction(n.stop)&&(S._queueHooks(c.elem,c.opts.queue).stop=S.proxy(n.stop,n)),n;return S.map(u,he,c),S.isFunction(c.opts.start)&&c.opts.start.call(o,c),c.progress(c.opts.progress).done(c.opts.done,c.opts.complete).fail(c.opts.fail).always(c.opts.always),S.fx.timer(S.extend(l,{elem:o,anim:c,queue:c.opts.queue})),c}S.Animation=S.extend(pe,{tweeners:{"*":[function(t,e){var n=this.createTween(t,e);return nt(n.elem,t,J.exec(e),n),n}]},tweener:function(t,e){for(var n,i=0,s=(t=S.isFunction(t)?(e=t,["*"]):t.match(F)).length;i<s;i++)n=t[i],pe.tweeners[n]=pe.tweeners[n]||[],pe.tweeners[n].unshift(e)},prefilters:[function(t,e,n){var i,s,o,r,a,l,c,u,d="width"in e||"height"in e,h=this,p={},f=t.style,g=t.nodeType&&et(t),m=X.get(t,"fxshow");for(i in n.queue||(null==(r=S._queueHooks(t,"fx")).unqueued&&(r.unqueued=0,a=r.empty.fire,r.empty.fire=function(){r.unqueued||a()}),r.unqueued++,h.always(function(){h.always(function(){r.unqueued--,S.queue(t,"fx").length||r.empty.fire()})})),e)if(s=e[i],ae.test(s)){if(delete e[i],o=o||"toggle"===s,s===(g?"hide":"show")){if("show"!==s||!m||void 0===m[i])continue;g=!0}p[i]=m&&m[i]||S.style(t,i)}if((l=!S.isEmptyObject(e))||!S.isEmptyObject(p))for(i in d&&1===t.nodeType&&(n.overflow=[f.overflow,f.overflowX,f.overflowY],null==(c=m&&m.display)&&(c=X.get(t,"display")),"none"===(u=S.css(t,"display"))&&(c?u=c:(st([t],!0),c=t.style.display||c,u=S.css(t,"display"),st([t]))),("inline"===u||"inline-block"===u&&null!=c)&&"none"===S.css(t,"float")&&(l||(h.done(function(){f.display=c}),null==c&&(u=f.display,c="none"===u?"":u)),f.display="inline-block")),n.overflow&&(f.overflow="hidden",h.always(function(){f.overflow=n.overflow[0],f.overflowX=n.overflow[1],f.overflowY=n.overflow[2]})),l=!1,p)l||(m?"hidden"in m&&(g=m.hidden):m=X.access(t,"fxshow",{display:c}),o&&(m.hidden=!g),g&&st([t],!0),h.done(function(){for(i in g||st([t]),X.remove(t,"fxshow"),p)S.style(t,i,p[i])})),l=he(g?m[i]:0,i,h),i in m||(m[i]=l.start,g&&(l.end=l.start,l.start=0))}],prefilter:function(t,e){e?pe.prefilters.unshift(t):pe.prefilters.push(t)}}),S.speed=function(t,e,n){var i=t&&"object"==typeof t?S.extend({},t):{complete:n||!n&&e||S.isFunction(t)&&t,duration:t,easing:n&&e||e&&!S.isFunction(e)&&e};return S.fx.off?i.duration=0:"number"!=typeof i.duration&&(i.duration in S.fx.speeds?i.duration=S.fx.speeds[i.duration]:i.duration=S.fx.speeds._default),null!=i.queue&&!0!==i.queue||(i.queue="fx"),i.old=i.complete,i.complete=function(){S.isFunction(i.old)&&i.old.call(this),i.queue&&S.dequeue(this,i.queue)},i},S.fn.extend({fadeTo:function(t,e,n,i){return this.filter(et).css("opacity",0).show().end().animate({opacity:e},t,n,i)},animate:function(e,t,n,i){function s(){var t=pe(this,S.extend({},e),r);(o||X.get(this,"finish"))&&t.stop(!0)}var o=S.isEmptyObject(e),r=S.speed(t,n,i);return s.finish=s,o||!1===r.queue?this.each(s):this.queue(r.queue,s)},stop:function(s,t,o){function r(t){var e=t.stop;delete t.stop,e(o)}return"string"!=typeof s&&(o=t,t=s,s=void 0),t&&!1!==s&&this.queue(s||"fx",[]),this.each(function(){var t=!0,e=null!=s&&s+"queueHooks",n=S.timers,i=X.get(this);if(e)i[e]&&i[e].stop&&r(i[e]);else for(e in i)i[e]&&i[e].stop&&le.test(e)&&r(i[e]);for(e=n.length;e--;)n[e].elem!==this||null!=s&&n[e].queue!==s||(n[e].anim.stop(o),t=!1,n.splice(e,1));!t&&o||S.dequeue(this,s)})},finish:function(r){return!1!==r&&(r=r||"fx"),this.each(function(){var t,e=X.get(this),n=e[r+"queue"],i=e[r+"queueHooks"],s=S.timers,o=n?n.length:0;for(e.finish=!0,S.queue(this,r,[]),i&&i.stop&&i.stop.call(this,!0),t=s.length;t--;)s[t].elem===this&&s[t].queue===r&&(s[t].anim.stop(!0),s.splice(t,1));for(t=0;t<o;t++)n[t]&&n[t].finish&&n[t].finish.call(this);delete e.finish})}}),S.each(["toggle","show","hide"],function(t,i){var s=S.fn[i];S.fn[i]=function(t,e,n){return null==t||"boolean"==typeof t?s.apply(this,arguments):this.animate(de(i,!0),t,e,n)}}),S.each({slideDown:de("show"),slideUp:de("hide"),slideToggle:de("toggle"),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(t,i){S.fn[t]=function(t,e,n){return this.animate(i,t,e,n)}}),S.timers=[],S.fx.tick=function(){var t,e=0,n=S.timers;for(ie=S.now();e<n.length;e++)(t=n[e])()||n[e]!==t||n.splice(e--,1);n.length||S.fx.stop(),ie=void 0},S.fx.timer=function(t){S.timers.push(t),S.fx.start()},S.fx.interval=13,S.fx.start=function(){se||(se=!0,ce())},S.fx.stop=function(){se=null},S.fx.speeds={slow:600,fast:200,_default:400},S.fn.delay=function(i,t){return i=S.fx&&S.fx.speeds[i]||i,t=t||"fx",this.queue(t,function(t,e){var n=_.setTimeout(t,i);e.stop=function(){_.clearTimeout(n)}})},oe=T.createElement("input"),re=T.createElement("select").appendChild(T.createElement("option")),oe.type="checkbox",m.checkOn=""!==oe.value,m.optSelected=re.selected,(oe=T.createElement("input")).value="t",oe.type="radio",m.radioValue="t"===oe.value;var fe,ge=S.expr.attrHandle;S.fn.extend({attr:function(t,e){return W(this,S.attr,t,e,1<arguments.length)},removeAttr:function(t){return this.each(function(){S.removeAttr(this,t)})}}),S.extend({attr:function(t,e,n){var i,s,o=t.nodeType;if(3!==o&&8!==o&&2!==o)return void 0===t.getAttribute?S.prop(t,e,n):(1===o&&S.isXMLDoc(t)||(s=S.attrHooks[e.toLowerCase()]||(S.expr.match.bool.test(e)?fe:void 0)),void 0!==n?null===n?void S.removeAttr(t,e):s&&"set"in s&&void 0!==(i=s.set(t,n,e))?i:(t.setAttribute(e,n+""),n):s&&"get"in s&&null!==(i=s.get(t,e))?i:null==(i=S.find.attr(t,e))?void 0:i)},attrHooks:{type:{set:function(t,e){if(!m.radioValue&&"radio"===e&&$(t,"input")){var n=t.value;return t.setAttribute("type",e),n&&(t.value=n),e}}}},removeAttr:function(t,e){var n,i=0,s=e&&e.match(F);if(s&&1===t.nodeType)for(;n=s[i++];)t.removeAttribute(n)}}),fe={set:function(t,e,n){return!1===e?S.removeAttr(t,n):t.setAttribute(n,n),n}},S.each(S.expr.match.bool.source.match(/\w+/g),function(t,e){var r=ge[e]||S.find.attr;ge[e]=function(t,e,n){var i,s,o=e.toLowerCase();return n||(s=ge[o],ge[o]=i,i=null!=r(t,e,n)?o:null,ge[o]=s),i}});var me=/^(?:input|select|textarea|button)$/i,ve=/^(?:a|area)$/i;function ye(t){return(t.match(F)||[]).join(" ")}function be(t){return t.getAttribute&&t.getAttribute("class")||""}S.fn.extend({prop:function(t,e){return W(this,S.prop,t,e,1<arguments.length)},removeProp:function(t){return this.each(function(){delete this[S.propFix[t]||t]})}}),S.extend({prop:function(t,e,n){var i,s,o=t.nodeType;if(3!==o&&8!==o&&2!==o)return 1===o&&S.isXMLDoc(t)||(e=S.propFix[e]||e,s=S.propHooks[e]),void 0!==n?s&&"set"in s&&void 0!==(i=s.set(t,n,e))?i:t[e]=n:s&&"get"in s&&null!==(i=s.get(t,e))?i:t[e]},propHooks:{tabIndex:{get:function(t){var e=S.find.attr(t,"tabindex");return e?parseInt(e,10):me.test(t.nodeName)||ve.test(t.nodeName)&&t.href?0:-1}}},propFix:{for:"htmlFor",class:"className"}}),m.optSelected||(S.propHooks.selected={get:function(t){var e=t.parentNode;return e&&e.parentNode&&e.parentNode.selectedIndex,null},set:function(t){var e=t.parentNode;e&&(e.selectedIndex,e.parentNode&&e.parentNode.selectedIndex)}}),S.each(["tabIndex","readOnly","maxLength","cellSpacing","cellPadding","rowSpan","colSpan","useMap","frameBorder","contentEditable"],function(){S.propFix[this.toLowerCase()]=this}),S.fn.extend({addClass:function(e){var t,n,i,s,o,r,a,l=0;if(S.isFunction(e))return this.each(function(t){S(this).addClass(e.call(this,t,be(this)))});if("string"==typeof e&&e)for(t=e.match(F)||[];n=this[l++];)if(s=be(n),i=1===n.nodeType&&" "+ye(s)+" "){for(r=0;o=t[r++];)i.indexOf(" "+o+" ")<0&&(i+=o+" ");s!==(a=ye(i))&&n.setAttribute("class",a)}return this},removeClass:function(e){var t,n,i,s,o,r,a,l=0;if(S.isFunction(e))return this.each(function(t){S(this).removeClass(e.call(this,t,be(this)))});if(!arguments.length)return this.attr("class","");if("string"==typeof e&&e)for(t=e.match(F)||[];n=this[l++];)if(s=be(n),i=1===n.nodeType&&" "+ye(s)+" "){for(r=0;o=t[r++];)for(;-1<i.indexOf(" "+o+" ");)i=i.replace(" "+o+" "," ");s!==(a=ye(i))&&n.setAttribute("class",a)}return this},toggleClass:function(s,e){var o=typeof s;return"boolean"==typeof e&&"string"==o?e?this.addClass(s):this.removeClass(s):S.isFunction(s)?this.each(function(t){S(this).toggleClass(s.call(this,t,be(this),e),e)}):this.each(function(){var t,e,n,i;if("string"==o)for(e=0,n=S(this),i=s.match(F)||[];t=i[e++];)n.hasClass(t)?n.removeClass(t):n.addClass(t);else void 0!==s&&"boolean"!=o||((t=be(this))&&X.set(this,"__className__",t),this.setAttribute&&this.setAttribute("class",!t&&!1!==s&&X.get(this,"__className__")||""))})},hasClass:function(t){var e,n,i=0;for(e=" "+t+" ";n=this[i++];)if(1===n.nodeType&&-1<(" "+ye(be(n))+" ").indexOf(e))return!0;return!1}});var xe=/\r/g;S.fn.extend({val:function(n){var i,t,s,e=this[0];return arguments.length?(s=S.isFunction(n),this.each(function(t){var e;1===this.nodeType&&(null==(e=s?n.call(this,t,S(this).val()):n)?e="":"number"==typeof e?e+="":Array.isArray(e)&&(e=S.map(e,function(t){return null==t?"":t+""})),(i=S.valHooks[this.type]||S.valHooks[this.nodeName.toLowerCase()])&&"set"in i&&void 0!==i.set(this,e,"value")||(this.value=e))})):e?(i=S.valHooks[e.type]||S.valHooks[e.nodeName.toLowerCase()])&&"get"in i&&void 0!==(t=i.get(e,"value"))?t:"string"==typeof(t=e.value)?t.replace(xe,""):null==t?"":t:void 0}}),S.extend({valHooks:{option:{get:function(t){var e=S.find.attr(t,"value");return null!=e?e:ye(S.text(t))}},select:{get:function(t){var e,n,i,s=t.options,o=t.selectedIndex,r="select-one"===t.type,a=r?null:[],l=r?o+1:s.length;for(i=o<0?l:r?o:0;i<l;i++)if(((n=s[i]).selected||i===o)&&!n.disabled&&(!n.parentNode.disabled||!$(n.parentNode,"optgroup"))){if(e=S(n).val(),r)return e;a.push(e)}return a},set:function(t,e){for(var n,i,s=t.options,o=S.makeArray(e),r=s.length;r--;)((i=s[r]).selected=-1<S.inArray(S.valHooks.option.get(i),o))&&(n=!0);return n||(t.selectedIndex=-1),o}}}}),S.each(["radio","checkbox"],function(){S.valHooks[this]={set:function(t,e){if(Array.isArray(e))return t.checked=-1<S.inArray(S(t).val(),e)}},m.checkOn||(S.valHooks[this].get=function(t){return null===t.getAttribute("value")?"on":t.value})});var we=/^(?:focusinfocus|focusoutblur)$/;S.extend(S.event,{trigger:function(t,e,n,i){var s,o,r,a,l,c,u,d=[n||T],h=f.call(t,"type")?t.type:t,p=f.call(t,"namespace")?t.namespace.split("."):[];if(o=r=n=n||T,3!==n.nodeType&&8!==n.nodeType&&!we.test(h+S.event.triggered)&&(-1<h.indexOf(".")&&(h=(p=h.split(".")).shift(),p.sort()),l=h.indexOf(":")<0&&"on"+h,(t=t[S.expando]?t:new S.Event(h,"object"==typeof t&&t)).isTrigger=i?2:3,t.namespace=p.join("."),t.rnamespace=t.namespace?new RegExp("(^|\\.)"+p.join("\\.(?:.*\\.|)")+"(\\.|$)"):null,t.result=void 0,t.target||(t.target=n),e=null==e?[t]:S.makeArray(e,[t]),u=S.event.special[h]||{},i||!u.trigger||!1!==u.trigger.apply(n,e))){if(!i&&!u.noBubble&&!S.isWindow(n)){for(a=u.delegateType||h,we.test(a+h)||(o=o.parentNode);o;o=o.parentNode)d.push(o),r=o;r===(n.ownerDocument||T)&&d.push(r.defaultView||r.parentWindow||_)}for(s=0;(o=d[s++])&&!t.isPropagationStopped();)t.type=1<s?a:u.bindType||h,(c=(X.get(o,"events")||{})[t.type]&&X.get(o,"handle"))&&c.apply(o,e),(c=l&&o[l])&&c.apply&&B(o)&&(t.result=c.apply(o,e),!1===t.result&&t.preventDefault());return t.type=h,i||t.isDefaultPrevented()||u._default&&!1!==u._default.apply(d.pop(),e)||!B(n)||l&&S.isFunction(n[h])&&!S.isWindow(n)&&((r=n[l])&&(n[l]=null),n[S.event.triggered=h](),S.event.triggered=void 0,r&&(n[l]=r)),t.result}},simulate:function(t,e,n){var i=S.extend(new S.Event,n,{type:t,isSimulated:!0});S.event.trigger(i,null,e)}}),S.fn.extend({trigger:function(t,e){return this.each(function(){S.event.trigger(t,e,this)})},triggerHandler:function(t,e){var n=this[0];if(n)return S.event.trigger(t,e,n,!0)}}),S.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "),function(t,n){S.fn[n]=function(t,e){return 0<arguments.length?this.on(n,null,t,e):this.trigger(n)}}),S.fn.extend({hover:function(t,e){return this.mouseenter(t).mouseleave(e||t)}}),m.focusin="onfocusin"in _,m.focusin||S.each({focus:"focusin",blur:"focusout"},function(n,i){function s(t){S.event.simulate(i,t.target,S.event.fix(t))}S.event.special[i]={setup:function(){var t=this.ownerDocument||this,e=X.access(t,i);e||t.addEventListener(n,s,!0),X.access(t,i,(e||0)+1)},teardown:function(){var t=this.ownerDocument||this,e=X.access(t,i)-1;e?X.access(t,i,e):(t.removeEventListener(n,s,!0),X.remove(t,i))}}});var Ce=_.location,_e=S.now(),Te=/\?/;S.parseXML=function(t){var e;if(!t||"string"!=typeof t)return null;try{e=(new _.DOMParser).parseFromString(t,"text/xml")}catch(t){e=void 0}return e&&!e.getElementsByTagName("parsererror").length||S.error("Invalid XML: "+t),e};var Se=/\[\]$/,ke=/\r?\n/g,$e=/^(?:submit|button|image|reset|file)$/i,Ee=/^(?:input|select|textarea|keygen)/i;function Pe(n,t,i,s){var e;if(Array.isArray(t))S.each(t,function(t,e){i||Se.test(n)?s(n,e):Pe(n+"["+("object"==typeof e&&null!=e?t:"")+"]",e,i,s)});else if(i||"object"!==S.type(t))s(n,t);else for(e in t)Pe(n+"["+e+"]",t[e],i,s)}S.param=function(t,e){function n(t,e){var n=S.isFunction(e)?e():e;s[s.length]=encodeURIComponent(t)+"="+encodeURIComponent(null==n?"":n)}var i,s=[];if(Array.isArray(t)||t.jquery&&!S.isPlainObject(t))S.each(t,function(){n(this.name,this.value)});else for(i in t)Pe(i,t[i],e,n);return s.join("&")},S.fn.extend({serialize:function(){return S.param(this.serializeArray())},serializeArray:function(){return this.map(function(){var t=S.prop(this,"elements");return t?S.makeArray(t):this}).filter(function(){var t=this.type;return this.name&&!S(this).is(":disabled")&&Ee.test(this.nodeName)&&!$e.test(t)&&(this.checked||!ot.test(t))}).map(function(t,e){var n=S(this).val();return null==n?null:Array.isArray(n)?S.map(n,function(t){return{name:e.name,value:t.replace(ke,"\r\n")}}):{name:e.name,value:n.replace(ke,"\r\n")}}).get()}});var je=/%20/g,Ae=/#.*$/,De=/([?&])_=[^&]*/,Me=/^(.*?):[ \t]*([^\r\n]*)$/gm,Le=/^(?:GET|HEAD)$/,qe=/^\/\//,Fe={},Ne={},ze="*/".concat("*"),Ie=T.createElement("a");function He(o){return function(t,e){"string"!=typeof t&&(e=t,t="*");var n,i=0,s=t.toLowerCase().match(F)||[];if(S.isFunction(e))for(;n=s[i++];)"+"===n[0]?(n=n.slice(1)||"*",(o[n]=o[n]||[]).unshift(e)):(o[n]=o[n]||[]).push(e)}}function Re(e,s,o,r){var a={},l=e===Ne;function c(t){var i;return a[t]=!0,S.each(e[t]||[],function(t,e){var n=e(s,o,r);return"string"!=typeof n||l||a[n]?l?!(i=n):void 0:(s.dataTypes.unshift(n),c(n),!1)}),i}return c(s.dataTypes[0])||!a["*"]&&c("*")}function Oe(t,e){var n,i,s=S.ajaxSettings.flatOptions||{};for(n in e)void 0!==e[n]&&((s[n]?t:i=i||{})[n]=e[n]);return i&&S.extend(!0,t,i),t}Ie.href=Ce.href,S.extend({active:0,lastModified:{},etag:{},ajaxSettings:{url:Ce.href,type:"GET",isLocal:/^(?:about|app|app-storage|.+-extension|file|res|widget):$/.test(Ce.protocol),global:!0,processData:!0,async:!0,contentType:"application/x-www-form-urlencoded; charset=UTF-8",accepts:{"*":ze,text:"text/plain",html:"text/html",xml:"application/xml, text/xml",json:"application/json, text/javascript"},contents:{xml:/\bxml\b/,html:/\bhtml/,json:/\bjson\b/},responseFields:{xml:"responseXML",text:"responseText",json:"responseJSON"},converters:{"* text":String,"text html":!0,"text json":JSON.parse,"text xml":S.parseXML},flatOptions:{url:!0,context:!0}},ajaxSetup:function(t,e){return e?Oe(Oe(t,S.ajaxSettings),e):Oe(S.ajaxSettings,t)},ajaxPrefilter:He(Fe),ajaxTransport:He(Ne),ajax:function(t,e){"object"==typeof t&&(e=t,t=void 0),e=e||{};var u,d,h,n,p,i,f,g,s,o,m=S.ajaxSetup({},e),v=m.context||m,y=m.context&&(v.nodeType||v.jquery)?S(v):S.event,b=S.Deferred(),x=S.Callbacks("once memory"),w=m.statusCode||{},r={},a={},l="canceled",C={readyState:0,getResponseHeader:function(t){var e;if(f){if(!n)for(n={};e=Me.exec(h);)n[e[1].toLowerCase()]=e[2];e=n[t.toLowerCase()]}return null==e?null:e},getAllResponseHeaders:function(){return f?h:null},setRequestHeader:function(t,e){return null==f&&(t=a[t.toLowerCase()]=a[t.toLowerCase()]||t,r[t]=e),this},overrideMimeType:function(t){return null==f&&(m.mimeType=t),this},statusCode:function(t){var e;if(t)if(f)C.always(t[C.status]);else for(e in t)w[e]=[w[e],t[e]];return this},abort:function(t){var e=t||l;return u&&u.abort(e),c(0,e),this}};if(b.promise(C),m.url=((t||m.url||Ce.href)+"").replace(qe,Ce.protocol+"//"),m.type=e.method||e.type||m.method||m.type,m.dataTypes=(m.dataType||"*").toLowerCase().match(F)||[""],null==m.crossDomain){i=T.createElement("a");try{i.href=m.url,i.href=i.href,m.crossDomain=Ie.protocol+"//"+Ie.host!=i.protocol+"//"+i.host}catch(t){m.crossDomain=!0}}if(m.data&&m.processData&&"string"!=typeof m.data&&(m.data=S.param(m.data,m.traditional)),Re(Fe,m,e,C),f)return C;for(s in(g=S.event&&m.global)&&0==S.active++&&S.event.trigger("ajaxStart"),m.type=m.type.toUpperCase(),m.hasContent=!Le.test(m.type),d=m.url.replace(Ae,""),m.hasContent?m.data&&m.processData&&0===(m.contentType||"").indexOf("application/x-www-form-urlencoded")&&(m.data=m.data.replace(je,"+")):(o=m.url.slice(d.length),m.data&&(d+=(Te.test(d)?"&":"?")+m.data,delete m.data),!1===m.cache&&(d=d.replace(De,"$1"),o=(Te.test(d)?"&":"?")+"_="+_e+++o),m.url=d+o),m.ifModified&&(S.lastModified[d]&&C.setRequestHeader("If-Modified-Since",S.lastModified[d]),S.etag[d]&&C.setRequestHeader("If-None-Match",S.etag[d])),(m.data&&m.hasContent&&!1!==m.contentType||e.contentType)&&C.setRequestHeader("Content-Type",m.contentType),C.setRequestHeader("Accept",m.dataTypes[0]&&m.accepts[m.dataTypes[0]]?m.accepts[m.dataTypes[0]]+("*"!==m.dataTypes[0]?", "+ze+"; q=0.01":""):m.accepts["*"]),m.headers)C.setRequestHeader(s,m.headers[s]);if(m.beforeSend&&(!1===m.beforeSend.call(v,C,m)||f))return C.abort();if(l="abort",x.add(m.complete),C.done(m.success),C.fail(m.error),u=Re(Ne,m,e,C)){if(C.readyState=1,g&&y.trigger("ajaxSend",[C,m]),f)return C;m.async&&0<m.timeout&&(p=_.setTimeout(function(){C.abort("timeout")},m.timeout));try{f=!1,u.send(r,c)}catch(t){if(f)throw t;c(-1,t)}}else c(-1,"No Transport");function c(t,e,n,i){var s,o,r,a,l,c=e;f||(f=!0,p&&_.clearTimeout(p),u=void 0,h=i||"",C.readyState=0<t?4:0,s=200<=t&&t<300||304===t,n&&(a=function(t,e,n){for(var i,s,o,r,a=t.contents,l=t.dataTypes;"*"===l[0];)l.shift(),void 0===i&&(i=t.mimeType||e.getResponseHeader("Content-Type"));if(i)for(s in a)if(a[s]&&a[s].test(i)){l.unshift(s);break}if(l[0]in n)o=l[0];else{for(s in n){if(!l[0]||t.converters[s+" "+l[0]]){o=s;break}r=r||s}o=o||r}if(o)return o!==l[0]&&l.unshift(o),n[o]}(m,C,n)),a=function(t,e,n,i){var s,o,r,a,l,c={},u=t.dataTypes.slice();if(u[1])for(r in t.converters)c[r.toLowerCase()]=t.converters[r];for(o=u.shift();o;)if(t.responseFields[o]&&(n[t.responseFields[o]]=e),!l&&i&&t.dataFilter&&(e=t.dataFilter(e,t.dataType)),l=o,o=u.shift())if("*"===o)o=l;else if("*"!==l&&l!==o){if(!(r=c[l+" "+o]||c["* "+o]))for(s in c)if((a=s.split(" "))[1]===o&&(r=c[l+" "+a[0]]||c["* "+a[0]])){!0===r?r=c[s]:!0!==c[s]&&(o=a[0],u.unshift(a[1]));break}if(!0!==r)if(r&&t.throws)e=r(e);else try{e=r(e)}catch(t){return{state:"parsererror",error:r?t:"No conversion from "+l+" to "+o}}}return{state:"success",data:e}}(m,a,C,s),s?(m.ifModified&&((l=C.getResponseHeader("Last-Modified"))&&(S.lastModified[d]=l),(l=C.getResponseHeader("etag"))&&(S.etag[d]=l)),204===t||"HEAD"===m.type?c="nocontent":304===t?c="notmodified":(c=a.state,o=a.data,s=!(r=a.error))):(r=c,!t&&c||(c="error",t<0&&(t=0))),C.status=t,C.statusText=(e||c)+"",s?b.resolveWith(v,[o,c,C]):b.rejectWith(v,[C,c,r]),C.statusCode(w),w=void 0,g&&y.trigger(s?"ajaxSuccess":"ajaxError",[C,m,s?o:r]),x.fireWith(v,[C,c]),g&&(y.trigger("ajaxComplete",[C,m]),--S.active||S.event.trigger("ajaxStop")))}return C},getJSON:function(t,e,n){return S.get(t,e,n,"json")},getScript:function(t,e){return S.get(t,void 0,e,"script")}}),S.each(["get","post"],function(t,s){S[s]=function(t,e,n,i){return S.isFunction(e)&&(i=i||n,n=e,e=void 0),S.ajax(S.extend({url:t,type:s,dataType:i,data:e,success:n},S.isPlainObject(t)&&t))}}),S._evalUrl=function(t){return S.ajax({url:t,type:"GET",dataType:"script",cache:!0,async:!1,global:!1,throws:!0})},S.fn.extend({wrapAll:function(t){var e;return this[0]&&(S.isFunction(t)&&(t=t.call(this[0])),e=S(t,this[0].ownerDocument).eq(0).clone(!0),this[0].parentNode&&e.insertBefore(this[0]),e.map(function(){for(var t=this;t.firstElementChild;)t=t.firstElementChild;return t}).append(this)),this},wrapInner:function(n){return S.isFunction(n)?this.each(function(t){S(this).wrapInner(n.call(this,t))}):this.each(function(){var t=S(this),e=t.contents();e.length?e.wrapAll(n):t.append(n)})},wrap:function(e){var n=S.isFunction(e);return this.each(function(t){S(this).wrapAll(n?e.call(this,t):e)})},unwrap:function(t){return this.parent(t).not("body").each(function(){S(this).replaceWith(this.childNodes)}),this}}),S.expr.pseudos.hidden=function(t){return!S.expr.pseudos.visible(t)},S.expr.pseudos.visible=function(t){return!!(t.offsetWidth||t.offsetHeight||t.getClientRects().length)},S.ajaxSettings.xhr=function(){try{return new _.XMLHttpRequest}catch(t){}};var Be={0:200,1223:204},We=S.ajaxSettings.xhr();m.cors=!!We&&"withCredentials"in We,m.ajax=We=!!We,S.ajaxTransport(function(s){var o,r;if(m.cors||We&&!s.crossDomain)return{send:function(t,e){var n,i=s.xhr();if(i.open(s.type,s.url,s.async,s.username,s.password),s.xhrFields)for(n in s.xhrFields)i[n]=s.xhrFields[n];for(n in s.mimeType&&i.overrideMimeType&&i.overrideMimeType(s.mimeType),s.crossDomain||t["X-Requested-With"]||(t["X-Requested-With"]="XMLHttpRequest"),t)i.setRequestHeader(n,t[n]);o=function(t){return function(){o&&(o=r=i.onload=i.onerror=i.onabort=i.onreadystatechange=null,"abort"===t?i.abort():"error"===t?"number"!=typeof i.status?e(0,"error"):e(i.status,i.statusText):e(Be[i.status]||i.status,i.statusText,"text"!==(i.responseType||"text")||"string"!=typeof i.responseText?{binary:i.response}:{text:i.responseText},i.getAllResponseHeaders()))}},i.onload=o(),r=i.onerror=o("error"),void 0!==i.onabort?i.onabort=r:i.onreadystatechange=function(){4===i.readyState&&_.setTimeout(function(){o&&r()})},o=o("abort");try{i.send(s.hasContent&&s.data||null)}catch(t){if(o)throw t}},abort:function(){o&&o()}}}),S.ajaxPrefilter(function(t){t.crossDomain&&(t.contents.script=!1)}),S.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/\b(?:java|ecma)script\b/},converters:{"text script":function(t){return S.globalEval(t),t}}}),S.ajaxPrefilter("script",function(t){void 0===t.cache&&(t.cache=!1),t.crossDomain&&(t.type="GET")}),S.ajaxTransport("script",function(n){var i,s;if(n.crossDomain)return{send:function(t,e){i=S("<script>").prop({charset:n.scriptCharset,src:n.url}).on("load error",s=function(t){i.remove(),s=null,t&&e("error"===t.type?404:200,t.type)}),T.head.appendChild(i[0])},abort:function(){s&&s()}}});var Ve,Xe=[],Ye=/(=)\?(?=&|$)|\?\?/;S.ajaxSetup({jsonp:"callback",jsonpCallback:function(){var t=Xe.pop()||S.expando+"_"+_e++;return this[t]=!0,t}}),S.ajaxPrefilter("json jsonp",function(t,e,n){var i,s,o,r=!1!==t.jsonp&&(Ye.test(t.url)?"url":"string"==typeof t.data&&0===(t.contentType||"").indexOf("application/x-www-form-urlencoded")&&Ye.test(t.data)&&"data");if(r||"jsonp"===t.dataTypes[0])return i=t.jsonpCallback=S.isFunction(t.jsonpCallback)?t.jsonpCallback():t.jsonpCallback,r?t[r]=t[r].replace(Ye,"$1"+i):!1!==t.jsonp&&(t.url+=(Te.test(t.url)?"&":"?")+t.jsonp+"="+i),t.converters["script json"]=function(){return o||S.error(i+" was not called"),o[0]},t.dataTypes[0]="json",s=_[i],_[i]=function(){o=arguments},n.always(function(){void 0===s?S(_).removeProp(i):_[i]=s,t[i]&&(t.jsonpCallback=e.jsonpCallback,Xe.push(i)),o&&S.isFunction(s)&&s(o[0]),o=s=void 0}),"script"}),m.createHTMLDocument=((Ve=T.implementation.createHTMLDocument("").body).innerHTML="<form></form><form></form>",2===Ve.childNodes.length),S.parseHTML=function(t,e,n){return"string"!=typeof t?[]:("boolean"==typeof e&&(n=e,e=!1),e||(m.createHTMLDocument?((i=(e=T.implementation.createHTMLDocument("")).createElement("base")).href=T.location.href,e.head.appendChild(i)):e=T),o=!n&&[],(s=E.exec(t))?[e.createElement(s[1])]:(s=ft([t],e,o),o&&o.length&&S(o).remove(),S.merge([],s.childNodes)));var i,s,o},S.fn.load=function(t,e,n){var i,s,o,r=this,a=t.indexOf(" ");return-1<a&&(i=ye(t.slice(a)),t=t.slice(0,a)),S.isFunction(e)?(n=e,e=void 0):e&&"object"==typeof e&&(s="POST"),0<r.length&&S.ajax({url:t,type:s||"GET",dataType:"html",data:e}).done(function(t){o=arguments,r.html(i?S("<div>").append(S.parseHTML(t)).find(i):t)}).always(n&&function(t,e){r.each(function(){n.apply(this,o||[t.responseText,e,t])})}),this},S.each(["ajaxStart","ajaxStop","ajaxComplete","ajaxError","ajaxSuccess","ajaxSend"],function(t,e){S.fn[e]=function(t){return this.on(e,t)}}),S.expr.pseudos.animated=function(e){return S.grep(S.timers,function(t){return e===t.elem}).length},S.offset={setOffset:function(t,e,n){var i,s,o,r,a,l,c=S.css(t,"position"),u=S(t),d={};"static"===c&&(t.style.position="relative"),a=u.offset(),o=S.css(t,"top"),l=S.css(t,"left"),s=("absolute"===c||"fixed"===c)&&-1<(o+l).indexOf("auto")?(r=(i=u.position()).top,i.left):(r=parseFloat(o)||0,parseFloat(l)||0),S.isFunction(e)&&(e=e.call(t,n,S.extend({},a))),null!=e.top&&(d.top=e.top-a.top+r),null!=e.left&&(d.left=e.left-a.left+s),"using"in e?e.using.call(t,d):u.css(d)}},S.fn.extend({offset:function(e){if(arguments.length)return void 0===e?this:this.each(function(t){S.offset.setOffset(this,e,t)});var t,n,i,s,o=this[0];return o?o.getClientRects().length?(i=o.getBoundingClientRect(),n=(t=o.ownerDocument).documentElement,s=t.defaultView,{top:i.top+s.pageYOffset-n.clientTop,left:i.left+s.pageXOffset-n.clientLeft}):{top:0,left:0}:void 0},position:function(){if(this[0]){var t,e,n=this[0],i={top:0,left:0};return"fixed"===S.css(n,"position")?e=n.getBoundingClientRect():(t=this.offsetParent(),e=this.offset(),$(t[0],"html")||(i=t.offset()),i={top:i.top+S.css(t[0],"borderTopWidth",!0),left:i.left+S.css(t[0],"borderLeftWidth",!0)}),{top:e.top-i.top-S.css(n,"marginTop",!0),left:e.left-i.left-S.css(n,"marginLeft",!0)}}},offsetParent:function(){return this.map(function(){for(var t=this.offsetParent;t&&"static"===S.css(t,"position");)t=t.offsetParent;return t||gt})}}),S.each({scrollLeft:"pageXOffset",scrollTop:"pageYOffset"},function(e,s){var o="pageYOffset"===s;S.fn[e]=function(t){return W(this,function(t,e,n){var i;return S.isWindow(t)?i=t:9===t.nodeType&&(i=t.defaultView),void 0===n?i?i[s]:t[e]:void(i?i.scrollTo(o?i.pageXOffset:n,o?n:i.pageYOffset):t[e]=n)},e,t,arguments.length)}}),S.each(["top","left"],function(t,n){S.cssHooks[n]=Vt(m.pixelPosition,function(t,e){if(e)return e=Wt(t,n),Rt.test(e)?S(t).position()[n]+"px":e})}),S.each({Height:"height",Width:"width"},function(r,a){S.each({padding:"inner"+r,content:a,"":"outer"+r},function(i,o){S.fn[o]=function(t,e){var n=arguments.length&&(i||"boolean"!=typeof t),s=i||(!0===t||!0===e?"margin":"border");return W(this,function(t,e,n){var i;return S.isWindow(t)?0===o.indexOf("outer")?t["inner"+r]:t.document.documentElement["client"+r]:9===t.nodeType?(i=t.documentElement,Math.max(t.body["scroll"+r],i["scroll"+r],t.body["offset"+r],i["offset"+r],i["client"+r])):void 0===n?S.css(t,e,s):S.style(t,e,n,s)},a,n?t:void 0,n)}})}),S.fn.extend({bind:function(t,e,n){return this.on(t,null,e,n)},unbind:function(t,e){return this.off(t,null,e)},delegate:function(t,e,n,i){return this.on(e,t,n,i)},undelegate:function(t,e,n){return 1===arguments.length?this.off(t,"**"):this.off(e,t||"**",n)}}),S.holdReady=function(t){t?S.readyWait++:S.ready(!0)},S.isArray=Array.isArray,S.parseJSON=JSON.parse,S.nodeName=$,"function"==typeof define&&define.amd&&define("jquery",[],function(){return S});var Ue=_.jQuery,Ze=_.$;return S.noConflict=function(t){return _.$===S&&(_.$=Ze),t&&_.jQuery===S&&(_.jQuery=Ue),S},t||(_.jQuery=_.$=S),S}),function(t,r){function a(){var t=f.elements;return"string"==typeof t?t.split(" "):t}function l(t){var e=p[t[o]];return e||(e={},h++,t[o]=h,p[h]=e),e}function c(t,e,n){return e=e||r,d?e.createElement(t):(e=(n=n||l(e)).cache[t]?n.cache[t].cloneNode():s.test(t)?(n.cache[t]=n.createElem(t)).cloneNode():n.createElem(t)).canHaveChildren&&!i.test(t)?n.frag.appendChild(e):e}function e(t){var e,n,i=l(t=t||r);if(f.shivCSS&&!u&&!i.hasCSS){var s,o=t;s=o.createElement("p"),o=o.getElementsByTagName("head")[0]||o.documentElement,s.innerHTML="x<style>article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}</style>",s=o.insertBefore(s.lastChild,o.firstChild),i.hasCSS=!!s}return d||(e=t,(n=i).cache||(n.cache={},n.createElem=e.createElement,n.createFrag=e.createDocumentFragment,n.frag=n.createFrag()),e.createElement=function(t){return f.shivMethods?c(t,e,n):n.createElem(t)},e.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+a().join().replace(/[\w\-]+/g,function(t){return n.createElem(t),n.frag.createElement(t),'c("'+t+'")'})+");return n}")(f,n.frag)),t}var u,d,n=t.html5||{},i=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,s=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,o="_html5shiv",h=0,p={};!function(){try{var t,e=r.createElement("a");if(e.innerHTML="<xyz></xyz>",u="hidden"in e,!(t=1==e.childNodes.length)){r.createElement("a");var n=r.createDocumentFragment();t=void 0===n.cloneNode||void 0===n.createDocumentFragment||void 0===n.createElement}d=t}catch(t){d=u=!0}}();var f={elements:n.elements||"abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output progress section summary template time video",version:"3.7.0",shivCSS:!1!==n.shivCSS,supportsUnknownElements:d,shivMethods:!1!==n.shivMethods,type:"default",shivDocument:e,createElement:c,createDocumentFragment:function(t,e){if(t=t||r,d)return t.createDocumentFragment();for(var n=(e=e||l(t)).frag.cloneNode(),i=0,s=a(),o=s.length;i<o;i++)n.createElement(s[i]);return n}};t.html5=f,e(r)}(this,document),function(t,e){"function"==typeof define&&define.amd?define([],function(){return t.svg4everybody=e()}):"object"==typeof module&&module.exports?module.exports=e():t.svg4everybody=e()}(this,function(){function m(t,e,n){if(n){var i=document.createDocumentFragment(),s=!e.hasAttribute("viewBox")&&n.getAttribute("viewBox");s&&e.setAttribute("viewBox",s);for(var o=n.cloneNode(!0);o.childNodes.length;)i.appendChild(o.firstChild);t.appendChild(i)}}function v(i){i.onreadystatechange=function(){if(4===i.readyState){var n=i._cachedDocument;n||((n=i._cachedDocument=document.implementation.createHTMLDocument("")).body.innerHTML=i.responseText,i._cachedTarget={}),i._embeds.splice(0).map(function(t){var e=i._cachedTarget[t.id];e=e||(i._cachedTarget[t.id]=n.getElementById(t.id)),m(t.parent,t.svg,e)})}},i.onreadystatechange()}function y(t){for(var e=t;"svg"!==e.nodeName.toLowerCase()&&(e=e.parentNode););return e}return function(t){var u,d=Object(t),e=window.top!==window.self;u="polyfill"in d?d.polyfill:/\bTrident\/[567]\b|\bMSIE (?:9|10)\.0\b/.test(navigator.userAgent)||(navigator.userAgent.match(/\bEdge\/12\.(\d+)\b/)||[])[1]<10547||(navigator.userAgent.match(/\bAppleWebKit\/(\d+)\b/)||[])[1]<537||/\bEdge\/.(\d+)\b/.test(navigator.userAgent)&&e;var h={},p=window.requestAnimationFrame||setTimeout,f=document.getElementsByTagName("use"),g=0;u&&function t(){for(var e=0;e<f.length;){var n=f[e],i=n.parentNode,s=y(i),o=n.getAttribute("xlink:href")||n.getAttribute("href");if(!o&&d.attributeName&&(o=n.getAttribute(d.attributeName)),s&&o){if(u)if(!d.validate||d.validate(o,s,n)){i.removeChild(n);var r=o.split("#"),a=r.shift(),l=r.join("#");if(a.length){var c=h[a];c||((c=h[a]=new XMLHttpRequest).open("GET",a),c.send(),c._embeds=[]),c._embeds.push({parent:i,svg:s,id:l}),v(c)}else m(i,s,document.getElementById(l))}else++e,++g}else++e}(!f.length||0<f.length-g)&&p(t,67)}()}}),function(t){"function"==typeof define&&define.amd?define(["jquery"],t):"object"==typeof exports?module.exports=t($||require("jquery")):t(jQuery)}(function(F){"use strict";function s(t,e){this.element=t,this.options=F.extend({},i,e);var n=this.options.locale;void 0!==this.options.locales[n]&&F.extend(this.options,this.options.locales[n]),this.init()}function N(t){if(!F(t.target).parents().hasClass("jq-selectbox")&&"OPTION"!=t.target.nodeName&&F("div.jq-selectbox.opened").length){var e=F("div.jq-selectbox.opened"),n=F("div.jq-selectbox__search input",e),i=F("div.jq-selectbox__dropdown",e);e.find("select").data("_"+o).options.onSelectClosed.call(e),n.length&&n.val("").keyup(),i.hide().find("li.sel").addClass("selected"),e.removeClass("focused opened dropup dropdown")}}var o="styler",i={idSuffix:"-styler",filePlaceholder:"Файл не выбран",fileBrowse:"Обзор...",fileNumber:"Выбрано файлов: %s",selectPlaceholder:"Выберите...",selectSearch:!1,selectSearchLimit:10,selectSearchNotFound:"Совпадений не найдено",selectSearchPlaceholder:"Поиск...",selectVisibleOptions:0,selectSmartPositioning:!0,locale:"ru",locales:{en:{filePlaceholder:"No file selected",fileBrowse:"Browse...",fileNumber:"Selected files: %s",selectPlaceholder:"Select...",selectSearchNotFound:"No matches found",selectSearchPlaceholder:"Search..."}},onSelectOpened:function(){},onSelectClosed:function(){},onFormStyled:function(){}};s.prototype={init:function(){function D(){void 0!==M.attr("id")&&""!==M.attr("id")&&(this.id=M.attr("id")+L.idSuffix),this.title=M.attr("title"),this.classes=M.attr("class"),this.data=M.data()}var M=F(this.element),L=this.options,q=!(!navigator.userAgent.match(/(iPad|iPhone|iPod)/i)||navigator.userAgent.match(/(Windows\sPhone)/i)),t=!(!navigator.userAgent.match(/Android/i)||navigator.userAgent.match(/(Windows\sPhone)/i));if(M.is(":checkbox")){var e=function(){var t=new D,e=F('<div class="jq-checkbox"><div class="jq-checkbox__div"></div></div>').attr({id:t.id,title:t.title}).addClass(t.classes).data(t.data);M.after(e).prependTo(e),M.is(":checked")&&e.addClass("checked"),M.is(":disabled")&&e.addClass("disabled"),e.click(function(t){t.preventDefault(),M.triggerHandler("click"),e.is(".disabled")||(M.is(":checked")?(M.prop("checked",!1),e.removeClass("checked")):(M.prop("checked",!0),e.addClass("checked")),M.focus().change())}),M.closest("label").add('label[for="'+M.attr("id")+'"]').on("click.styler",function(t){F(t.target).is("a")||F(t.target).closest(e).length||(e.triggerHandler("click"),t.preventDefault())}),M.on("change.styler",function(){M.is(":checked")?e.addClass("checked"):e.removeClass("checked")}).on("keydown.styler",function(t){32==t.which&&e.click()}).on("focus.styler",function(){e.is(".disabled")||e.addClass("focused")}).on("blur.styler",function(){e.removeClass("focused")})};e(),M.on("refresh",function(){M.closest("label").add('label[for="'+M.attr("id")+'"]').off(".styler"),M.off(".styler").parent().before(M).remove(),e()})}else if(M.is(":radio")){var n=function(){var t=new D,n=F('<div class="jq-radio"><div class="jq-radio__div"></div></div>').attr({id:t.id,title:t.title}).addClass(t.classes).data(t.data);M.after(n).prependTo(n),M.is(":checked")&&n.addClass("checked"),M.is(":disabled")&&n.addClass("disabled"),F.fn.commonParents=function(){var t=this;return t.first().parents().filter(function(){return F(this).find(t).length===t.length})},F.fn.commonParent=function(){return F(this).commonParents().first()},n.click(function(t){if(t.preventDefault(),M.triggerHandler("click"),!n.is(".disabled")){var e=F('input[name="'+M.attr("name")+'"]');e.commonParent().find(e).prop("checked",!1).parent().removeClass("checked"),M.prop("checked",!0).parent().addClass("checked"),M.focus().change()}}),M.closest("label").add('label[for="'+M.attr("id")+'"]').on("click.styler",function(t){F(t.target).is("a")||F(t.target).closest(n).length||(n.triggerHandler("click"),t.preventDefault())}),M.on("change.styler",function(){M.parent().addClass("checked")}).on("focus.styler",function(){n.is(".disabled")||n.addClass("focused")}).on("blur.styler",function(){n.removeClass("focused")})};n(),M.on("refresh",function(){M.closest("label").add('label[for="'+M.attr("id")+'"]').off(".styler"),M.off(".styler").parent().before(M).remove(),n()})}else if(M.is(":file")){var i=function(){var t=new D,i=M.data("placeholder");void 0===i&&(i=L.filePlaceholder);var e=M.data("browse");void 0!==e&&""!==e||(e=L.fileBrowse);var s=F('<div class="jq-file"><div class="jq-file__name">'+i+'</div><div class="jq-file__browse">'+e+"</div></div>").attr({id:t.id,title:t.title}).addClass(t.classes).data(t.data);M.after(s).appendTo(s),M.is(":disabled")&&s.addClass("disabled");var n=M.val(),o=F("div.jq-file__name",s);n&&o.text(n.replace(/.+[\\\/]/,"")),M.on("change.styler",function(){var t=M.val();if(M.is("[multiple]")){t="";var e=M[0].files.length;if(0<e){var n=M.data("number");void 0===n&&(n=L.fileNumber),t=n=n.replace("%s",e)}}o.text(t.replace(/.+[\\\/]/,"")),""===t?(o.text(i),s.removeClass("changed")):s.addClass("changed")}).on("focus.styler",function(){s.addClass("focused")}).on("blur.styler",function(){s.removeClass("focused")}).on("click.styler",function(){s.removeClass("focused")})};i(),M.on("refresh",function(){M.off(".styler").parent().before(M).remove(),i()})}else if(M.is('input[type="number"]')){var s=function(){var t=new D,e=F('<div class="jq-number"><div class="jq-number__spin minus"></div><div class="jq-number__spin plus"></div></div>').attr({id:t.id,title:t.title}).addClass(t.classes).data(t.data);M.after(e).prependTo(e).wrap('<div class="jq-number__field"></div>'),M.is(":disabled")&&e.addClass("disabled");var o,r,a,n=null,i=null;void 0!==M.attr("min")&&(o=M.attr("min")),void 0!==M.attr("max")&&(r=M.attr("max")),a=void 0!==M.attr("step")&&F.isNumeric(M.attr("step"))?Number(M.attr("step")):Number(1);function s(t){var e,n=M.val();F.isNumeric(n)||(n=0,M.val("0")),t.is(".minus")?e=Number(n)-a:t.is(".plus")&&(e=Number(n)+a);var i=(a.toString().split(".")[1]||[]).length;if(0<i){for(var s="1";s.length<=i;)s+="0";e=Math.round(e*s)/s}F.isNumeric(o)&&F.isNumeric(r)?o<=e&&e<=r&&M.val(e):F.isNumeric(o)&&!F.isNumeric(r)?o<=e&&M.val(e):(F.isNumeric(o)||!F.isNumeric(r)||e<=r)&&M.val(e)}e.is(".disabled")||(e.on("mousedown","div.jq-number__spin",function(){var t=F(this);s(t),n=setTimeout(function(){i=setInterval(function(){s(t)},40)},350)}).on("mouseup mouseout","div.jq-number__spin",function(){clearTimeout(n),clearInterval(i)}).on("mouseup","div.jq-number__spin",function(){M.change().trigger("input")}),M.on("focus.styler",function(){e.addClass("focused")}).on("blur.styler",function(){e.removeClass("focused")}))};s(),M.on("refresh",function(){M.off(".styler").closest(".jq-number").before(M).remove(),s()})}else if(M.is("select")){var o=function(){function E(e){var n=e.prop("scrollHeight")-e.outerHeight(),i=null,s=null;e.off("mousewheel DOMMouseScroll").on("mousewheel DOMMouseScroll",function(t){i=t.originalEvent.detail<0||0<t.originalEvent.wheelDelta?1:-1,((s=e.scrollTop())>=n&&i<0||s<=0&&0<i)&&(t.stopPropagation(),t.preventDefault())})}function P(){for(var t=0;t<j.length;t++){var e=j.eq(t),n="",i="",s="",o="",r="",a="",l="",c="",u="";e.prop("selected")&&(i="selected sel"),e.is(":disabled")&&(i="disabled"),e.is(":selected:disabled")&&(i="selected sel disabled"),void 0!==e.attr("id")&&""!==e.attr("id")&&(o=' id="'+e.attr("id")+L.idSuffix+'"'),void 0!==e.attr("title")&&""!==j.attr("title")&&(r=' title="'+e.attr("title")+'"'),void 0!==e.attr("class")&&(l=" "+e.attr("class"),u=' data-jqfs-class="'+e.attr("class")+'"');var d=e.data();for(var h in d)""!==d[h]&&(a+=" data-"+h+'="'+d[h]+'"');i+l!==""&&(s=' class="'+i+l+'"'),n="<li"+u+a+s+r+o+">"+e.html()+"</li>",e.parent().is("optgroup")&&(void 0!==e.parent().attr("class")&&(c=" "+e.parent().attr("class")),n="<li"+u+a+' class="'+i+l+" option"+c+'"'+r+o+">"+e.html()+"</li>",e.is(":first-child")&&(n='<li class="optgroup'+c+'">'+e.parent().attr("label")+"</li>"+n)),A+=n}}var j=F("option",M),A="";if(M.is("[multiple]")){if(t||q)return;!function(){var t=new D,e=F('<div class="jq-select-multiple jqselect"></div>').attr({id:t.id,title:t.title}).addClass(t.classes).data(t.data);M.after(e),P(),e.append("<ul>"+A+"</ul>");var n=F("ul",e),s=F("li",e),i=M.attr("size"),o=n.outerHeight(),r=s.outerHeight();void 0!==i&&0<i?n.css({height:r*i}):n.css({height:4*r}),o>e.height()&&(n.css("overflowY","scroll"),E(n),s.filter(".selected").length&&n.scrollTop(n.scrollTop()+s.filter(".selected").position().top)),M.prependTo(e),M.is(":disabled")?(e.addClass("disabled"),j.each(function(){F(this).is(":selected")&&s.eq(F(this).index()).addClass("selected")})):(s.filter(":not(.disabled):not(.optgroup)").click(function(t){M.focus();var e=F(this);if(t.ctrlKey||t.metaKey||e.addClass("selected"),t.shiftKey||e.addClass("first"),t.ctrlKey||t.metaKey||t.shiftKey||e.siblings().removeClass("selected first"),(t.ctrlKey||t.metaKey)&&(e.is(".selected")?e.removeClass("selected first"):e.addClass("selected first"),e.siblings().removeClass("first")),t.shiftKey){var n=!1,i=!1;e.siblings().removeClass("selected").siblings(".first").addClass("selected"),e.prevAll().each(function(){F(this).is(".first")&&(n=!0)}),e.nextAll().each(function(){F(this).is(".first")&&(i=!0)}),n&&e.prevAll().each(function(){if(F(this).is(".selected"))return!1;F(this).not(".disabled, .optgroup").addClass("selected")}),i&&e.nextAll().each(function(){if(F(this).is(".selected"))return!1;F(this).not(".disabled, .optgroup").addClass("selected")}),1==s.filter(".selected").length&&e.addClass("first")}j.prop("selected",!1),s.filter(".selected").each(function(){var t=F(this),e=t.index();t.is(".option")&&(e-=t.prevAll(".optgroup").length),j.eq(e).prop("selected",!0)}),M.change()}),j.each(function(t){F(this).data("optionIndex",t)}),M.on("change.styler",function(){s.removeClass("selected");var e=[];j.filter(":selected").each(function(){e.push(F(this).data("optionIndex"))}),s.not(".optgroup").filter(function(t){return-1<F.inArray(t,e)}).addClass("selected")}).on("focus.styler",function(){e.addClass("focused")}).on("blur.styler",function(){e.removeClass("focused")}),o>e.height()&&M.on("keydown.styler",function(t){38!=t.which&&37!=t.which&&33!=t.which||n.scrollTop(n.scrollTop()+s.filter(".selected").position().top-r),40!=t.which&&39!=t.which&&34!=t.which||n.scrollTop(n.scrollTop()+s.filter(".selected:last").position().top-n.innerHeight()+2*r)}))}()}else!function(){var t=new D,e="",n=M.data("placeholder"),i=M.data("search"),s=M.data("search-limit"),o=M.data("search-not-found"),r=M.data("search-placeholder"),l=M.data("smart-positioning");void 0===n&&(n=L.selectPlaceholder),void 0!==i&&""!==i||(i=L.selectSearch),void 0!==s&&""!==s||(s=L.selectSearchLimit),void 0!==o&&""!==o||(o=L.selectSearchNotFound),void 0===r&&(r=L.selectSearchPlaceholder),void 0!==l&&""!==l||(l=L.selectSmartPositioning);var c=F('<div class="jq-selectbox jqselect"><div class="jq-selectbox__select"><div class="jq-selectbox__select-text"></div><div class="jq-selectbox__trigger"><div class="jq-selectbox__trigger-arrow"></div></div></div></div>').attr({id:t.id,title:t.title}).addClass(t.classes).data(t.data);M.after(c).prependTo(c);var u=c.css("z-index");u=0<u?u:1;var a=F("div.jq-selectbox__select",c),d=F("div.jq-selectbox__select-text",c),h=j.filter(":selected");P(),i&&(e='<div class="jq-selectbox__search"><input type="search" autocomplete="off" placeholder="'+r+'"></div><div class="jq-selectbox__not-found">'+o+"</div>");var p=F('<div class="jq-selectbox__dropdown">'+e+"<ul>"+A+"</ul></div>");c.append(p);var f=F("ul",p),g=F("li",p),m=F("input",p),v=F("div.jq-selectbox__not-found",p).hide();g.length<s&&m.parent().hide(),""===j.first().text()&&j.first().is(":selected")&&!1!==n?d.text(n).addClass("placeholder"):d.text(h.text());var y=0,b=0;if(g.css({display:"inline-block"}),g.each(function(){var t=F(this);t.innerWidth()>y&&(y=t.innerWidth(),b=t.width())}),g.css({display:""}),d.is(".placeholder")&&d.width()>y)d.width(d.width());else{var x=c.clone().appendTo("body").width("auto"),w=x.outerWidth();x.remove(),w==c.outerWidth()&&d.width(b)}y>c.width()&&p.width(y),""===j.first().text()&&""!==M.data("placeholder")&&g.first().hide();var C=c.outerHeight(!0),_=m.parent().outerHeight(!0)||0,T=f.css("max-height"),S=g.filter(".selected");if(S.length<1&&g.first().addClass("selected sel"),void 0===g.data("li-height")){var k=g.outerHeight();!1!==n&&(k=g.eq(1).outerHeight()),g.data("li-height",k)}var $=p.css("top");if("auto"==p.css("left")&&p.css({left:0}),"auto"==p.css("top")&&(p.css({top:C}),$=C),p.hide(),S.length&&(j.first().text()!=h.text()&&c.addClass("changed"),c.data("jqfs-class",S.data("jqfs-class")),c.addClass(S.data("jqfs-class"))),M.is(":disabled"))return c.addClass("disabled");a.click(function(){if(F("div.jq-selectbox").filter(".opened").length&&L.onSelectClosed.call(F("div.jq-selectbox").filter(".opened")),M.focus(),!q){var e=F(window),n=g.data("li-height"),i=c.offset().top,s=e.height()-C-(i-e.scrollTop()),t=M.data("visible-options");void 0!==t&&""!==t||(t=L.selectVisibleOptions);var o=5*n,r=n*t;0<t&&t<6&&(o=r),0===t&&(r="auto");var a=function(){p.height("auto").css({bottom:"auto",top:$});function t(){f.css("max-height",Math.floor((s-20-_)/n)*n)}t(),f.css("max-height",r),"none"!=T&&f.css("max-height",T),s<p.outerHeight()+20&&t()};!0===l||1===l?o+_+20<s?(a(),c.removeClass("dropup").addClass("dropdown")):(function(){p.height("auto").css({top:"auto",bottom:$});function t(){f.css("max-height",Math.floor((i-e.scrollTop()-20-_)/n)*n)}t(),f.css("max-height",r),"none"!=T&&f.css("max-height",T),i-e.scrollTop()-20<p.outerHeight()+20&&t()}(),c.removeClass("dropdown").addClass("dropup")):!1===l||0===l?o+_+20<s&&(a(),c.removeClass("dropup").addClass("dropdown")):(p.height("auto").css({bottom:"auto",top:$}),f.css("max-height",r),"none"!=T&&f.css("max-height",T)),c.offset().left+p.outerWidth()>e.width()&&p.css({left:"auto",right:0}),F("div.jqselect").css({zIndex:u-1}).removeClass("opened"),c.css({zIndex:u}),p.is(":hidden")?(F("div.jq-selectbox__dropdown:visible").hide(),p.show(),c.addClass("opened focused"),L.onSelectOpened.call(c)):(p.hide(),c.removeClass("opened dropup dropdown"),F("div.jq-selectbox").filter(".opened").length&&L.onSelectClosed.call(c)),m.length&&(m.val("").keyup(),v.hide(),m.keyup(function(){var t=F(this).val();g.each(function(){F(this).html().match(new RegExp(".*?"+t+".*?","i"))?F(this).show():F(this).hide()}),""===j.first().text()&&""!==M.data("placeholder")&&g.first().hide(),g.filter(":visible").length<1?v.show():v.hide()})),g.filter(".selected").length&&(""===M.val()?f.scrollTop(0):(f.innerHeight()/n%2!=0&&(n/=2),f.scrollTop(f.scrollTop()+g.filter(".selected").position().top-f.innerHeight()/2+n))),E(f)}}),g.hover(function(){F(this).siblings().removeClass("selected")});g.filter(".selected").text();g.filter(":not(.disabled):not(.optgroup)").click(function(){M.focus();var t=F(this),e=t.text();if(!t.is(".selected")){var n=t.index();n-=t.prevAll(".optgroup").length,t.addClass("selected sel").siblings().removeClass("selected sel"),j.prop("selected",!1).eq(n).prop("selected",!0),d.text(e),c.data("jqfs-class")&&c.removeClass(c.data("jqfs-class")),c.data("jqfs-class",t.data("jqfs-class")),c.addClass(t.data("jqfs-class")),M.change()}p.hide(),c.removeClass("opened dropup dropdown"),L.onSelectClosed.call(c)}),p.mouseout(function(){F("li.sel",p).addClass("selected")}),M.on("change.styler",function(){d.text(j.filter(":selected").text()).removeClass("placeholder"),g.removeClass("selected sel").not(".optgroup").eq(M[0].selectedIndex).addClass("selected sel"),j.first().text()!=g.filter(".selected").text()?c.addClass("changed"):c.removeClass("changed")}).on("focus.styler",function(){c.addClass("focused"),F("div.jqselect").not(".focused").removeClass("opened dropup dropdown").find("div.jq-selectbox__dropdown").hide()}).on("blur.styler",function(){c.removeClass("focused")}).on("keydown.styler keyup.styler",function(t){var e=g.data("li-height");""===M.val()?d.text(n).addClass("placeholder"):d.text(j.filter(":selected").text()),g.removeClass("selected sel").not(".optgroup").eq(M[0].selectedIndex).addClass("selected sel"),38!=t.which&&37!=t.which&&33!=t.which&&36!=t.which||(""===M.val()?f.scrollTop(0):f.scrollTop(f.scrollTop()+g.filter(".selected").position().top)),40!=t.which&&39!=t.which&&34!=t.which&&35!=t.which||f.scrollTop(f.scrollTop()+g.filter(".selected").position().top-f.innerHeight()+e),13==t.which&&(t.preventDefault(),p.hide(),c.removeClass("opened dropup dropdown"),L.onSelectClosed.call(c))}).on("keydown.styler",function(t){32==t.which&&(t.preventDefault(),a.click())}),N.registered||(F(document).on("click",N),N.registered=!0)}()};o(),M.on("refresh",function(){M.off(".styler").parent().before(M).remove(),o()})}else M.is(":reset")&&M.on("click",function(){setTimeout(function(){M.closest("form").find("input, select").trigger("refresh")},1)})},destroy:function(){var t=F(this.element);t.is(":checkbox")||t.is(":radio")?(t.removeData("_"+o).off(".styler refresh").removeAttr("style").parent().before(t).remove(),t.closest("label").add('label[for="'+t.attr("id")+'"]').off(".styler")):t.is('input[type="number"]')?t.removeData("_"+o).off(".styler refresh").closest(".jq-number").before(t).remove():(t.is(":file")||t.is("select"))&&t.removeData("_"+o).off(".styler refresh").removeAttr("style").parent().before(t).remove()}},F.fn[o]=function(e){var n,i=arguments;return void 0===e||"object"==typeof e?(this.each(function(){F.data(this,"_"+o)||F.data(this,"_"+o,new s(this,e))}).promise().done(function(){var t=F(this[0]).data("_"+o);t&&t.options.onFormStyled.call()}),this):"string"==typeof e&&"_"!==e[0]&&"init"!==e?(this.each(function(){var t=F.data(this,"_"+o);t instanceof s&&"function"==typeof t[e]&&(n=t[e].apply(t,Array.prototype.slice.call(i,1)))}),void 0!==n?n:this):void 0},N.registered=!1}),function(l,d,g){"use strict";function n(t,e){var n,i,s,o=[],r=0;t&&t.isDefaultPrevented()||(t.preventDefault(),e=e||{},t&&t.data&&(e=u(t.data.options,e)),n=e.$target||g(t.currentTarget).trigger("blur"),(s=g.fancybox.getInstance())&&s.$trigger&&s.$trigger.is(n)||(o=e.selector?g(e.selector):(i=n.attr("data-fancybox")||"")?(o=t.data?t.data.items:[]).length?o.filter('[data-fancybox="'+i+'"]'):g('[data-fancybox="'+i+'"]'):[n],(r=g(o).index(n))<0&&(r=0),(s=g.fancybox.open(o,e,r)).$trigger=n))}if(l.console=l.console||{info:function(t){}},g){if(g.fn.fancybox)return console.info("fancyBox already initialized");var t={closeExisting:!1,loop:!1,gutter:50,keyboard:!0,preventCaptionOverlap:!0,arrows:!0,infobar:!0,smallBtn:"auto",toolbar:"auto",buttons:["zoom","slideShow","thumbs","close"],idleTime:3,protect:!1,modal:!1,image:{preload:!1},ajax:{settings:{data:{fancybox:!0}}},iframe:{tpl:'<iframe id="fancybox-frame{rnd}" name="fancybox-frame{rnd}" class="fancybox-iframe" allowfullscreen="allowfullscreen" allow="autoplay; fullscreen" src=""></iframe>',preload:!0,css:{},attr:{scrolling:"auto"}},video:{tpl:'<video class="fancybox-video" controls controlsList="nodownload" poster="{{poster}}"><source src="{{src}}" type="{{format}}" />Sorry, your browser doesn\'t support embedded videos, <a href="{{src}}">download</a> and watch with your favorite video player!</video>',format:"",autoStart:!0},defaultType:"image",animationEffect:"zoom",animationDuration:366,zoomOpacity:"auto",transitionEffect:"fade",transitionDuration:366,slideClass:"",baseClass:"",baseTpl:'<div class="fancybox-container" role="dialog" tabindex="-1"><div class="fancybox-bg"></div><div class="fancybox-inner"><div class="fancybox-infobar"><span data-fancybox-index></span>&nbsp;/&nbsp;<span data-fancybox-count></span></div><div class="fancybox-toolbar">{{buttons}}</div><div class="fancybox-navigation">{{arrows}}</div><div class="fancybox-stage"></div><div class="fancybox-caption"><div class="fancybox-caption__body"></div></div></div></div>',spinnerTpl:'<div class="fancybox-loading"></div>',errorTpl:'<div class="fancybox-error"><p>{{ERROR}}</p></div>',btnTpl:{download:'<a download data-fancybox-download class="fancybox-button fancybox-button--download" title="{{DOWNLOAD}}" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.62 17.09V19H5.38v-1.91zm-2.97-6.96L17 11.45l-5 4.87-5-4.87 1.36-1.32 2.68 2.64V5h1.92v7.77z"/></svg></a>',zoom:'<button data-fancybox-zoom class="fancybox-button fancybox-button--zoom" title="{{ZOOM}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.7 17.3l-3-3a5.9 5.9 0 0 0-.6-7.6 5.9 5.9 0 0 0-8.4 0 5.9 5.9 0 0 0 0 8.4 5.9 5.9 0 0 0 7.7.7l3 3a1 1 0 0 0 1.3 0c.4-.5.4-1 0-1.5zM8.1 13.8a4 4 0 0 1 0-5.7 4 4 0 0 1 5.7 0 4 4 0 0 1 0 5.7 4 4 0 0 1-5.7 0z"/></svg></button>',close:'<button data-fancybox-close class="fancybox-button fancybox-button--close" title="{{CLOSE}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 10.6L6.6 5.2 5.2 6.6l5.4 5.4-5.4 5.4 1.4 1.4 5.4-5.4 5.4 5.4 1.4-1.4-5.4-5.4 5.4-5.4-1.4-1.4-5.4 5.4z"/></svg></button>',arrowLeft:'<button data-fancybox-prev class="fancybox-button fancybox-button--arrow_left" title="{{PREV}}"><div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M11.28 15.7l-1.34 1.37L5 12l4.94-5.07 1.34 1.38-2.68 2.72H19v1.94H8.6z"/></svg></div></button>',arrowRight:'<button data-fancybox-next class="fancybox-button fancybox-button--arrow_right" title="{{NEXT}}"><div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15.4 12.97l-2.68 2.72 1.34 1.38L19 12l-4.94-5.07-1.34 1.38 2.68 2.72H5v1.94z"/></svg></div></button>',smallBtn:'<button type="button" data-fancybox-close class="fancybox-button fancybox-close-small" title="{{CLOSE}}"><svg xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 24 24"><path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"/></svg></button>'},parentEl:"body",hideScrollbar:!0,autoFocus:!0,backFocus:!0,trapFocus:!0,fullScreen:{autoStart:!1},touch:{vertical:!0,momentum:!0},hash:null,media:{},slideShow:{autoStart:!1,speed:3e3},thumbs:{autoStart:!1,hideOnClose:!0,parentEl:".fancybox-container",axis:"y"},wheel:"auto",onInit:g.noop,beforeLoad:g.noop,afterLoad:g.noop,beforeShow:g.noop,afterShow:g.noop,beforeClose:g.noop,afterClose:g.noop,onActivate:g.noop,onDeactivate:g.noop,clickContent:function(t,e){return"image"===t.type&&"zoom"},clickSlide:"close",clickOutside:"close",dblclickContent:!1,dblclickSlide:!1,dblclickOutside:!1,mobile:{preventCaptionOverlap:!1,idleTime:!1,clickContent:function(t,e){return"image"===t.type&&"toggleControls"},clickSlide:function(t,e){return"image"===t.type?"toggleControls":"close"},dblclickContent:function(t,e){return"image"===t.type&&"zoom"},dblclickSlide:function(t,e){return"image"===t.type&&"zoom"}},lang:"en",i18n:{en:{CLOSE:"Close",NEXT:"Next",PREV:"Previous",ERROR:"The requested content cannot be loaded. <br/> Please try again later.",PLAY_START:"Start slideshow",PLAY_STOP:"Pause slideshow",FULL_SCREEN:"Full screen",THUMBS:"Thumbnails",DOWNLOAD:"Download",SHARE:"Share",ZOOM:"Zoom"},de:{CLOSE:"Schlie&szlig;en",NEXT:"Weiter",PREV:"Zur&uuml;ck",ERROR:"Die angeforderten Daten konnten nicht geladen werden. <br/> Bitte versuchen Sie es sp&auml;ter nochmal.",PLAY_START:"Diaschau starten",PLAY_STOP:"Diaschau beenden",FULL_SCREEN:"Vollbild",THUMBS:"Vorschaubilder",DOWNLOAD:"Herunterladen",SHARE:"Teilen",ZOOM:"Vergr&ouml;&szlig;ern"}}},s=g(l),r=g(d),o=0,h=l.requestAnimationFrame||l.webkitRequestAnimationFrame||l.mozRequestAnimationFrame||l.oRequestAnimationFrame||function(t){return l.setTimeout(t,1e3/60)},e=l.cancelAnimationFrame||l.webkitCancelAnimationFrame||l.mozCancelAnimationFrame||l.oCancelAnimationFrame||function(t){l.clearTimeout(t)},c=function(){var t,e=d.createElement("fakeelement"),n={transition:"transitionend",OTransition:"oTransitionEnd",MozTransition:"transitionend",WebkitTransition:"webkitTransitionEnd"};for(t in n)if(void 0!==e.style[t])return n[t];return"transitionend"}(),p=function(t){return t&&t.length&&t[0].offsetHeight},u=function(t,e){var n=g.extend(!0,{},t,e);return g.each(e,function(t,e){g.isArray(e)&&(n[t]=e)}),n},i=function(t,e,n){var i=this;i.opts=u({index:n},g.fancybox.defaults),g.isPlainObject(e)&&(i.opts=u(i.opts,e)),g.fancybox.isMobile&&(i.opts=u(i.opts,i.opts.mobile)),i.id=i.opts.id||++o,i.currIndex=parseInt(i.opts.index,10)||0,i.prevIndex=null,i.prevPos=null,i.currPos=0,i.firstRun=!0,i.group=[],i.slides={},i.addContent(t),i.group.length&&i.init()};g.extend(i.prototype,{init:function(){var e,n,i=this,s=i.group[i.currIndex].opts;s.closeExisting&&g.fancybox.close(!0),g("body").addClass("fancybox-active"),!g.fancybox.getInstance()&&!1!==s.hideScrollbar&&!g.fancybox.isMobile&&d.body.scrollHeight>l.innerHeight&&(g("head").append('<style id="fancybox-style-noscroll" type="text/css">.compensate-for-scrollbar{margin-right:'+(l.innerWidth-d.documentElement.clientWidth)+"px;}</style>"),g("body").addClass("compensate-for-scrollbar")),n="",g.each(s.buttons,function(t,e){n+=s.btnTpl[e]||""}),e=g(i.translate(i,s.baseTpl.replace("{{buttons}}",n).replace("{{arrows}}",s.btnTpl.arrowLeft+s.btnTpl.arrowRight))).attr("id","fancybox-container-"+i.id).addClass(s.baseClass).data("FancyBox",i).appendTo(s.parentEl),i.$refs={container:e},["bg","inner","infobar","toolbar","stage","caption","navigation"].forEach(function(t){i.$refs[t]=e.find(".fancybox-"+t)}),i.trigger("onInit"),i.activate(),i.jumpTo(i.currIndex)},translate:function(t,e){var n=t.opts.i18n[t.opts.lang]||t.opts.i18n.en;return e.replace(/\{\{(\w+)\}\}/g,function(t,e){return void 0===n[e]?t:n[e]})},addContent:function(t){var e,c=this,n=g.makeArray(t);g.each(n,function(t,e){var n,i,s,o,r,a={},l={};g.isPlainObject(e)?l=(a=e).opts||e:"object"===g.type(e)&&g(e).length?(l=(n=g(e)).data()||{},(l=g.extend(!0,{},l,l.options)).$orig=n,a.src=c.opts.src||l.src||n.attr("href"),a.type||a.src||(a.type="inline",a.src=e)):a={type:"html",src:e+""},a.opts=g.extend(!0,{},c.opts,l),g.isArray(l.buttons)&&(a.opts.buttons=l.buttons),g.fancybox.isMobile&&a.opts.mobile&&(a.opts=u(a.opts,a.opts.mobile)),i=a.type||a.opts.type,o=a.src||"",!i&&o&&((s=o.match(/\.(mp4|mov|ogv|webm)((\?|#).*)?$/i))?(i="video",a.opts.video.format||(a.opts.video.format="video/"+("ogv"===s[1]?"ogg":s[1]))):o.match(/(^data:image\/[a-z0-9+\/=]*,)|(\.(jp(e|g|eg)|gif|png|bmp|webp|svg|ico)((\?|#).*)?$)/i)?i="image":o.match(/\.(pdf)((\?|#).*)?$/i)?(i="iframe",a=g.extend(!0,a,{contentType:"pdf",opts:{iframe:{preload:!1}}})):"#"===o.charAt(0)&&(i="inline")),i?a.type=i:c.trigger("objectNeedsType",a),a.contentType||(a.contentType=-1<g.inArray(a.type,["html","inline","ajax"])?"html":a.type),a.index=c.group.length,"auto"==a.opts.smallBtn&&(a.opts.smallBtn=-1<g.inArray(a.type,["html","inline","ajax"])),"auto"===a.opts.toolbar&&(a.opts.toolbar=!a.opts.smallBtn),a.$thumb=a.opts.$thumb||null,a.opts.$trigger&&a.index===c.opts.index&&(a.$thumb=a.opts.$trigger.find("img:first"),a.$thumb.length&&(a.opts.$orig=a.opts.$trigger)),a.$thumb&&a.$thumb.length||!a.opts.$orig||(a.$thumb=a.opts.$orig.find("img:first")),a.$thumb&&!a.$thumb.length&&(a.$thumb=null),a.thumb=a.opts.thumb||(a.$thumb?a.$thumb[0].src:null),"function"===g.type(a.opts.caption)&&(a.opts.caption=a.opts.caption.apply(e,[c,a])),"function"===g.type(c.opts.caption)&&(a.opts.caption=c.opts.caption.apply(e,[c,a])),a.opts.caption instanceof g||(a.opts.caption=void 0===a.opts.caption?"":a.opts.caption+""),"ajax"!==a.type||1<(r=o.split(/\s+/,2)).length&&(a.src=r.shift(),a.opts.filter=r.shift()),a.opts.modal&&(a.opts=g.extend(!0,a.opts,{trapFocus:!0,infobar:0,toolbar:0,smallBtn:0,keyboard:0,slideShow:0,fullScreen:0,thumbs:0,touch:0,clickContent:!1,clickSlide:!1,clickOutside:!1,dblclickContent:!1,dblclickSlide:!1,dblclickOutside:!1})),c.group.push(a)}),Object.keys(c.slides).length&&(c.updateControls(),(e=c.Thumbs)&&e.isActive&&(e.create(),e.focus()))},addEvents:function(){var i=this;i.removeEvents(),i.$refs.container.on("click.fb-close","[data-fancybox-close]",function(t){t.stopPropagation(),t.preventDefault(),i.close(t)}).on("touchstart.fb-prev click.fb-prev","[data-fancybox-prev]",function(t){t.stopPropagation(),t.preventDefault(),i.previous()}).on("touchstart.fb-next click.fb-next","[data-fancybox-next]",function(t){t.stopPropagation(),t.preventDefault(),i.next()}).on("click.fb","[data-fancybox-zoom]",function(t){i[i.isScaledDown()?"scaleToActual":"scaleToFit"]()}),s.on("orientationchange.fb resize.fb",function(t){t&&t.originalEvent&&"resize"===t.originalEvent.type?(i.requestId&&e(i.requestId),i.requestId=h(function(){i.update(t)})):(i.current&&"iframe"===i.current.type&&i.$refs.stage.hide(),setTimeout(function(){i.$refs.stage.show(),i.update(t)},g.fancybox.isMobile?600:250))}),r.on("keydown.fb",function(t){var e=(g.fancybox?g.fancybox.getInstance():null).current,n=t.keyCode||t.which;if(9!=n)return!e.opts.keyboard||t.ctrlKey||t.altKey||t.shiftKey||g(t.target).is("input,textarea,video,audio,select")?void 0:8===n||27===n?(t.preventDefault(),void i.close(t)):37===n||38===n?(t.preventDefault(),void i.previous()):39===n||40===n?(t.preventDefault(),void i.next()):void i.trigger("afterKeydown",t,n);e.opts.trapFocus&&i.focus(t)}),i.group[i.currIndex].opts.idleTime&&(i.idleSecondsCounter=0,r.on("mousemove.fb-idle mouseleave.fb-idle mousedown.fb-idle touchstart.fb-idle touchmove.fb-idle scroll.fb-idle keydown.fb-idle",function(t){i.idleSecondsCounter=0,i.isIdle&&i.showControls(),i.isIdle=!1}),i.idleInterval=l.setInterval(function(){++i.idleSecondsCounter>=i.group[i.currIndex].opts.idleTime&&!i.isDragging&&(i.isIdle=!0,i.idleSecondsCounter=0,i.hideControls())},1e3))},removeEvents:function(){s.off("orientationchange.fb resize.fb"),r.off("keydown.fb .fb-idle"),this.$refs.container.off(".fb-close .fb-prev .fb-next"),this.idleInterval&&(l.clearInterval(this.idleInterval),this.idleInterval=null)},previous:function(t){return this.jumpTo(this.currPos-1,t)},next:function(t){return this.jumpTo(this.currPos+1,t)},jumpTo:function(t,i){var e,n,s,o,r,a,l,c,u,d=this,h=d.group.length;if(!(d.isDragging||d.isClosing||d.isAnimating&&d.firstRun)){if(t=parseInt(t,10),!(s=d.current?d.current.opts.loop:d.opts.loop)&&(t<0||h<=t))return!1;if(e=d.firstRun=!Object.keys(d.slides).length,r=d.current,d.prevIndex=d.currIndex,d.prevPos=d.currPos,o=d.createSlide(t),1<h&&((s||o.index<h-1)&&d.createSlide(t+1),(s||0<o.index)&&d.createSlide(t-1)),d.current=o,d.currIndex=o.index,d.currPos=o.pos,d.trigger("beforeShow",e),d.updateControls(),o.forcedDuration=void 0,g.isNumeric(i)?o.forcedDuration=i:i=o.opts[e?"animationDuration":"transitionDuration"],i=parseInt(i,10),n=d.isMoved(o),o.$slide.addClass("fancybox-slide--current"),e)return o.opts.animationEffect&&i&&d.$refs.container.css("transition-duration",i+"ms"),d.$refs.container.addClass("fancybox-is-open").trigger("focus"),d.loadSlide(o),void d.preload("image");a=g.fancybox.getTranslate(r.$slide),l=g.fancybox.getTranslate(d.$refs.stage),g.each(d.slides,function(t,e){g.fancybox.stop(e.$slide,!0)}),r.pos!==o.pos&&(r.isComplete=!1),r.$slide.removeClass("fancybox-slide--complete fancybox-slide--current"),n?(u=a.left-(r.pos*a.width+r.pos*r.opts.gutter),g.each(d.slides,function(t,e){e.$slide.removeClass("fancybox-animated").removeClass(function(t,e){return(e.match(/(^|\s)fancybox-fx-\S+/g)||[]).join(" ")});var n=e.pos*a.width+e.pos*e.opts.gutter;g.fancybox.setTranslate(e.$slide,{top:0,left:n-l.left+u}),e.pos!==o.pos&&e.$slide.addClass("fancybox-slide--"+(e.pos>o.pos?"next":"previous")),p(e.$slide),g.fancybox.animate(e.$slide,{top:0,left:(e.pos-o.pos)*a.width+(e.pos-o.pos)*e.opts.gutter},i,function(){e.$slide.css({transform:"",opacity:""}).removeClass("fancybox-slide--next fancybox-slide--previous"),e.pos===d.currPos&&d.complete()})})):i&&o.opts.transitionEffect&&(c="fancybox-animated fancybox-fx-"+o.opts.transitionEffect,r.$slide.addClass("fancybox-slide--"+(r.pos>o.pos?"next":"previous")),g.fancybox.animate(r.$slide,c,i,function(){r.$slide.removeClass(c).removeClass("fancybox-slide--next fancybox-slide--previous")},!1)),o.isLoaded?d.revealContent(o):d.loadSlide(o),d.preload("image")}},createSlide:function(t){var e,n,i=this;return n=(n=t%i.group.length)<0?i.group.length+n:n,!i.slides[t]&&i.group[n]&&(e=g('<div class="fancybox-slide"></div>').appendTo(i.$refs.stage),i.slides[t]=g.extend(!0,{},i.group[n],{pos:t,$slide:e,isLoaded:!1}),i.updateSlide(i.slides[t])),i.slides[t]},scaleToActual:function(t,e,n){var i,s,o,r,a,l=this,c=l.current,u=c.$content,d=g.fancybox.getTranslate(c.$slide).width,h=g.fancybox.getTranslate(c.$slide).height,p=c.width,f=c.height;l.isAnimating||l.isMoved()||!u||"image"!=c.type||!c.isLoaded||c.hasError||(l.isAnimating=!0,g.fancybox.stop(u),t=void 0===t?.5*d:t,e=void 0===e?.5*h:e,(i=g.fancybox.getTranslate(u)).top-=g.fancybox.getTranslate(c.$slide).top,i.left-=g.fancybox.getTranslate(c.$slide).left,r=p/i.width,a=f/i.height,s=.5*d-.5*p,o=.5*h-.5*f,d<p&&(0<(s=i.left*r-(t*r-t))&&(s=0),s<d-p&&(s=d-p)),h<f&&(0<(o=i.top*a-(e*a-e))&&(o=0),o<h-f&&(o=h-f)),l.updateCursor(p,f),g.fancybox.animate(u,{top:o,left:s,scaleX:r,scaleY:a},n||366,function(){l.isAnimating=!1}),l.SlideShow&&l.SlideShow.isActive&&l.SlideShow.stop())},scaleToFit:function(t){var e,n=this,i=n.current,s=i.$content;n.isAnimating||n.isMoved()||!s||"image"!=i.type||!i.isLoaded||i.hasError||(n.isAnimating=!0,g.fancybox.stop(s),e=n.getFitPos(i),n.updateCursor(e.width,e.height),g.fancybox.animate(s,{top:e.top,left:e.left,scaleX:e.width/s.width(),scaleY:e.height/s.height()},t||366,function(){n.isAnimating=!1}))},getFitPos:function(t){var e,n,i,s,o=t.$content,r=t.$slide,a=t.width||t.opts.width,l=t.height||t.opts.height,c={};return!!(t.isLoaded&&o&&o.length)&&(e=g.fancybox.getTranslate(this.$refs.stage).width,n=g.fancybox.getTranslate(this.$refs.stage).height,e-=parseFloat(r.css("paddingLeft"))+parseFloat(r.css("paddingRight"))+parseFloat(o.css("marginLeft"))+parseFloat(o.css("marginRight")),n-=parseFloat(r.css("paddingTop"))+parseFloat(r.css("paddingBottom"))+parseFloat(o.css("marginTop"))+parseFloat(o.css("marginBottom")),a&&l||(a=e,l=n),e-.5<(a*=i=Math.min(1,e/a,n/l))&&(a=e),n-.5<(l*=i)&&(l=n),"image"===t.type?(c.top=Math.floor(.5*(n-l))+parseFloat(r.css("paddingTop")),c.left=Math.floor(.5*(e-a))+parseFloat(r.css("paddingLeft"))):"video"===t.contentType&&(a/(s=t.opts.width&&t.opts.height?a/l:t.opts.ratio||16/9)<l?l=a/s:l*s<a&&(a=l*s)),c.width=a,c.height=l,c)},update:function(n){var i=this;g.each(i.slides,function(t,e){i.updateSlide(e,n)})},updateSlide:function(t,e){var n=this,i=t&&t.$content,s=t.width||t.opts.width,o=t.height||t.opts.height,r=t.$slide;n.adjustCaption(t),i&&(s||o||"video"===t.contentType)&&!t.hasError&&(g.fancybox.stop(i),g.fancybox.setTranslate(i,n.getFitPos(t)),t.pos===n.currPos&&(n.isAnimating=!1,n.updateCursor())),n.adjustLayout(t),r.length&&(r.trigger("refresh"),t.pos===n.currPos&&n.$refs.toolbar.add(n.$refs.navigation.find(".fancybox-button--arrow_right")).toggleClass("compensate-for-scrollbar",r.get(0).scrollHeight>r.get(0).clientHeight)),n.trigger("onUpdate",t,e)},centerSlide:function(t){var e=this,n=e.current,i=n.$slide;!e.isClosing&&n&&(i.siblings().css({transform:"",opacity:""}),i.parent().children().removeClass("fancybox-slide--previous fancybox-slide--next"),g.fancybox.animate(i,{top:0,left:0,opacity:1},void 0===t?0:t,function(){i.css({transform:"",opacity:""}),n.isComplete||e.complete()},!1))},isMoved:function(t){var e,n,i=t||this.current;return!!i&&(n=g.fancybox.getTranslate(this.$refs.stage),e=g.fancybox.getTranslate(i.$slide),!i.$slide.hasClass("fancybox-animated")&&(.5<Math.abs(e.top-n.top)||.5<Math.abs(e.left-n.left)))},updateCursor:function(t,e){var n,i,s=this,o=s.current,r=s.$refs.container;o&&!s.isClosing&&s.Guestures&&(r.removeClass("fancybox-is-zoomable fancybox-can-zoomIn fancybox-can-zoomOut fancybox-can-swipe fancybox-can-pan"),i=!!(n=s.canPan(t,e))||s.isZoomable(),r.toggleClass("fancybox-is-zoomable",i),g("[data-fancybox-zoom]").prop("disabled",!i),n?r.addClass("fancybox-can-pan"):i&&("zoom"===o.opts.clickContent||g.isFunction(o.opts.clickContent)&&"zoom"==o.opts.clickContent(o))?r.addClass("fancybox-can-zoomIn"):o.opts.touch&&(o.opts.touch.vertical||1<s.group.length)&&"video"!==o.contentType&&r.addClass("fancybox-can-swipe"))},isZoomable:function(){var t,e=this.current;if(e&&!this.isClosing&&"image"===e.type&&!e.hasError){if(!e.isLoaded)return!0;if((t=this.getFitPos(e))&&(e.width>t.width||e.height>t.height))return!0}return!1},isScaledDown:function(t,e){var n=!1,i=this.current,s=i.$content;return void 0!==t&&void 0!==e?n=t<i.width&&e<i.height:s&&(n=(n=g.fancybox.getTranslate(s)).width<i.width&&n.height<i.height),n},canPan:function(t,e){var n=this.current,i=null,s=!1;return"image"===n.type&&(n.isComplete||t&&e)&&!n.hasError&&(s=this.getFitPos(n),void 0!==t&&void 0!==e?i={width:t,height:e}:n.isComplete&&(i=g.fancybox.getTranslate(n.$content)),i&&s&&(s=1.5<Math.abs(i.width-s.width)||1.5<Math.abs(i.height-s.height))),s},loadSlide:function(n){var t,e,i,s=this;if(!n.isLoading&&!n.isLoaded){if(!(n.isLoading=!0)===s.trigger("beforeLoad",n))return n.isLoading=!1;switch(t=n.type,(e=n.$slide).off("refresh").trigger("onReset").addClass(n.opts.slideClass),t){case"image":s.setImage(n);break;case"iframe":s.setIframe(n);break;case"html":s.setContent(n,n.src||n.content);break;case"video":s.setContent(n,n.opts.video.tpl.replace(/\{\{src\}\}/gi,n.src).replace("{{format}}",n.opts.videoFormat||n.opts.video.format||"").replace("{{poster}}",n.thumb||""));break;case"inline":g(n.src).length?s.setContent(n,g(n.src)):s.setError(n);break;case"ajax":s.showLoading(n),i=g.ajax(g.extend({},n.opts.ajax.settings,{url:n.src,success:function(t,e){"success"===e&&s.setContent(n,t)},error:function(t,e){t&&"abort"!==e&&s.setError(n)}})),e.one("onReset",function(){i.abort()});break;default:s.setError(n)}return!0}},setImage:function(e){var t,n=this;setTimeout(function(){var t=e.$image;n.isClosing||!e.isLoading||t&&t.length&&t[0].complete||e.hasError||n.showLoading(e)},50),n.checkSrcset(e),e.$content=g('<div class="fancybox-content"></div>').addClass("fancybox-is-hidden").appendTo(e.$slide.addClass("fancybox-slide--image")),!1!==e.opts.preload&&e.opts.width&&e.opts.height&&e.thumb&&(e.width=e.opts.width,e.height=e.opts.height,(t=d.createElement("img")).onerror=function(){g(this).remove(),e.$ghost=null},t.onload=function(){n.afterLoad(e)},e.$ghost=g(t).addClass("fancybox-image").appendTo(e.$content).attr("src",e.thumb)),n.setBigImage(e)},checkSrcset:function(t){var e,n,i,s,o=t.opts.srcset||t.opts.image.srcset;if(o){i=l.devicePixelRatio||1,s=l.innerWidth*i,(n=o.split(",").map(function(t){var i={};return t.trim().split(/\s+/).forEach(function(t,e){var n=parseInt(t.substring(0,t.length-1),10);if(0===e)return i.url=t;n&&(i.value=n,i.postfix=t[t.length-1])}),i})).sort(function(t,e){return t.value-e.value});for(var r=0;r<n.length;r++){var a=n[r];if("w"===a.postfix&&a.value>=s||"x"===a.postfix&&a.value>=i){e=a;break}}!e&&n.length&&(e=n[n.length-1]),e&&(t.src=e.url,t.width&&t.height&&"w"==e.postfix&&(t.height=t.width/t.height*e.value,t.width=e.value),t.opts.srcset=o)}},setBigImage:function(e){var n=this,t=d.createElement("img"),i=g(t);e.$image=i.one("error",function(){n.setError(e)}).one("load",function(){var t;e.$ghost||(n.resolveImageSlideSize(e,this.naturalWidth,this.naturalHeight),n.afterLoad(e)),n.isClosing||(e.opts.srcset&&((t=e.opts.sizes)&&"auto"!==t||(t=(1<e.width/e.height&&1<s.width()/s.height()?"100":Math.round(e.width/e.height*100))+"vw"),i.attr("sizes",t).attr("srcset",e.opts.srcset)),e.$ghost&&setTimeout(function(){e.$ghost&&!n.isClosing&&e.$ghost.hide()},Math.min(300,Math.max(1e3,e.height/1600))),n.hideLoading(e))}).addClass("fancybox-image").attr("src",e.src).appendTo(e.$content),(t.complete||"complete"==t.readyState)&&i.naturalWidth&&i.naturalHeight?i.trigger("load"):t.error&&i.trigger("error")},resolveImageSlideSize:function(t,e,n){var i=parseInt(t.opts.width,10),s=parseInt(t.opts.height,10);t.width=e,t.height=n,0<i&&(t.width=i,t.height=Math.floor(i*n/e)),0<s&&(t.width=Math.floor(s*e/n),t.height=s)},setIframe:function(s){var o,e=this,r=s.opts.iframe,a=s.$slide;s.$content=g('<div class="fancybox-content'+(r.preload?" fancybox-is-hidden":"")+'"></div>').css(r.css).appendTo(a),a.addClass("fancybox-slide--"+s.contentType),s.$iframe=o=g(r.tpl.replace(/\{rnd\}/g,(new Date).getTime())).attr(r.attr).appendTo(s.$content),r.preload?(e.showLoading(s),o.on("load.fb error.fb",function(t){this.isReady=1,s.$slide.trigger("refresh"),e.afterLoad(s)}),a.on("refresh.fb",function(){var t,e=s.$content,n=r.css.width,i=r.css.height;if(1===o[0].isReady){try{t=o.contents().find("body")}catch(t){}t&&t.length&&t.children().length&&(a.css("overflow","visible"),e.css({width:"100%","max-width":"100%",height:"9999px"}),void 0===n&&(n=Math.ceil(Math.max(t[0].clientWidth,t.outerWidth(!0)))),e.css("width",n||"").css("max-width",""),void 0===i&&(i=Math.ceil(Math.max(t[0].clientHeight,t.outerHeight(!0)))),e.css("height",i||""),a.css("overflow","auto")),e.removeClass("fancybox-is-hidden")}})):e.afterLoad(s),o.attr("src",s.src),a.one("onReset",function(){try{g(this).find("iframe").hide().unbind().attr("src","//about:blank")}catch(t){}g(this).off("refresh.fb").empty(),s.isLoaded=!1,s.isRevealed=!1})},setContent:function(t,e){var n;this.isClosing||(this.hideLoading(t),t.$content&&g.fancybox.stop(t.$content),t.$slide.empty(),(n=e)&&n.hasOwnProperty&&n instanceof g&&e.parent().length?((e.hasClass("fancybox-content")||e.parent().hasClass("fancybox-content"))&&e.parents(".fancybox-slide").trigger("onReset"),t.$placeholder=g("<div>").hide().insertAfter(e),e.css("display","inline-block")):t.hasError||("string"===g.type(e)&&(e=g("<div>").append(g.trim(e)).contents()),t.opts.filter&&(e=g("<div>").html(e).find(t.opts.filter))),t.$slide.one("onReset",function(){g(this).find("video,audio").trigger("pause"),t.$placeholder&&(t.$placeholder.after(e.removeClass("fancybox-content").hide()).remove(),t.$placeholder=null),t.$smallBtn&&(t.$smallBtn.remove(),t.$smallBtn=null),t.hasError||(g(this).empty(),t.isLoaded=!1,t.isRevealed=!1)}),g(e).appendTo(t.$slide),g(e).is("video,audio")&&(g(e).addClass("fancybox-video"),g(e).wrap("<div></div>"),t.contentType="video",t.opts.width=t.opts.width||g(e).attr("width"),t.opts.height=t.opts.height||g(e).attr("height")),t.$content=t.$slide.children().filter("div,form,main,video,audio,article,.fancybox-content").first(),t.$content.siblings().hide(),t.$content.length||(t.$content=t.$slide.wrapInner("<div></div>").children().first()),t.$content.addClass("fancybox-content"),t.$slide.addClass("fancybox-slide--"+t.contentType),this.afterLoad(t))},setError:function(t){t.hasError=!0,t.$slide.trigger("onReset").removeClass("fancybox-slide--"+t.contentType).addClass("fancybox-slide--error"),t.contentType="html",this.setContent(t,this.translate(t,t.opts.errorTpl)),t.pos===this.currPos&&(this.isAnimating=!1)},showLoading:function(t){(t=t||this.current)&&!t.$spinner&&(t.$spinner=g(this.translate(this,this.opts.spinnerTpl)).appendTo(t.$slide).hide().fadeIn("fast"))},hideLoading:function(t){(t=t||this.current)&&t.$spinner&&(t.$spinner.stop().remove(),delete t.$spinner)},afterLoad:function(t){var e=this;e.isClosing||(t.isLoading=!1,t.isLoaded=!0,e.trigger("afterLoad",t),e.hideLoading(t),!t.opts.smallBtn||t.$smallBtn&&t.$smallBtn.length||(t.$smallBtn=g(e.translate(t,t.opts.btnTpl.smallBtn)).appendTo(t.$content)),t.opts.protect&&t.$content&&!t.hasError&&(t.$content.on("contextmenu.fb",function(t){return 2==t.button&&t.preventDefault(),!0}),"image"===t.type&&g('<div class="fancybox-spaceball"></div>').appendTo(t.$content)),e.adjustCaption(t),e.adjustLayout(t),t.pos===e.currPos&&e.updateCursor(),e.revealContent(t))},adjustCaption:function(t){var e,n=this,i=t||n.current,s=i.opts.caption,o=i.opts.preventCaptionOverlap,r=n.$refs.caption,a=!1;r.toggleClass("fancybox-caption--separate",o),o&&s&&s.length&&(i.pos!==n.currPos?((e=r.clone().appendTo(r.parent())).children().eq(0).empty().html(s),a=e.outerHeight(!0),e.empty().remove()):n.$caption&&(a=n.$caption.outerHeight(!0)),i.$slide.css("padding-bottom",a||""))},adjustLayout:function(t){var e,n,i,s,o=t||this.current;o.isLoaded&&!0!==o.opts.disableLayoutFix&&(o.$content.css("margin-bottom",""),o.$content.outerHeight()>o.$slide.height()+.5&&(i=o.$slide[0].style["padding-bottom"],s=o.$slide.css("padding-bottom"),0<parseFloat(s)&&(e=o.$slide[0].scrollHeight,o.$slide.css("padding-bottom",0),Math.abs(e-o.$slide[0].scrollHeight)<1&&(n=s),o.$slide.css("padding-bottom",i))),o.$content.css("margin-bottom",n))},revealContent:function(t){var e,n,i,s,o=this,r=t.$slide,a=!1,l=!1,c=o.isMoved(t),u=t.isRevealed;return t.isRevealed=!0,e=t.opts[o.firstRun?"animationEffect":"transitionEffect"],i=t.opts[o.firstRun?"animationDuration":"transitionDuration"],i=parseInt(void 0===t.forcedDuration?i:t.forcedDuration,10),!c&&t.pos===o.currPos&&i||(e=!1),"zoom"===e&&(t.pos===o.currPos&&i&&"image"===t.type&&!t.hasError&&(l=o.getThumbPos(t))?a=o.getFitPos(t):e="fade"),"zoom"===e?(o.isAnimating=!0,a.scaleX=a.width/l.width,a.scaleY=a.height/l.height,"auto"==(s=t.opts.zoomOpacity)&&(s=.1<Math.abs(t.width/t.height-l.width/l.height)),s&&(l.opacity=.1,a.opacity=1),g.fancybox.setTranslate(t.$content.removeClass("fancybox-is-hidden"),l),p(t.$content),void g.fancybox.animate(t.$content,a,i,function(){o.isAnimating=!1,o.complete()})):(o.updateSlide(t),e?(g.fancybox.stop(r),n="fancybox-slide--"+(t.pos>=o.prevPos?"next":"previous")+" fancybox-animated fancybox-fx-"+e,r.addClass(n).removeClass("fancybox-slide--current"),t.$content.removeClass("fancybox-is-hidden"),p(r),"image"!==t.type&&t.$content.hide().show(0),void g.fancybox.animate(r,"fancybox-slide--current",i,function(){r.removeClass(n).css({transform:"",opacity:""}),t.pos===o.currPos&&o.complete()},!0)):(t.$content.removeClass("fancybox-is-hidden"),u||!c||"image"!==t.type||t.hasError||t.$content.hide().fadeIn("fast"),void(t.pos===o.currPos&&o.complete())))},getThumbPos:function(t){var e,n,i,s,o,r,a,l,c=!1,u=t.$thumb;return!(!u||(!(r=u[0])||r.ownerDocument!==d||(g(".fancybox-container").css("pointer-events","none"),a={x:r.getBoundingClientRect().left+r.offsetWidth/2,y:r.getBoundingClientRect().top+r.offsetHeight/2},l=d.elementFromPoint(a.x,a.y)===r,g(".fancybox-container").css("pointer-events",""),!l)))&&(e=g.fancybox.getTranslate(u),n=parseFloat(u.css("border-top-width")||0),i=parseFloat(u.css("border-right-width")||0),s=parseFloat(u.css("border-bottom-width")||0),o=parseFloat(u.css("border-left-width")||0),c={top:e.top+n,left:e.left+o,width:e.width-i-o,height:e.height-n-s,scaleX:1,scaleY:1},0<e.width&&0<e.height&&c)},complete:function(){var t,n=this,e=n.current,i={};!n.isMoved()&&e.isLoaded&&(e.isComplete||(e.isComplete=!0,e.$slide.siblings().trigger("onReset"),n.preload("inline"),p(e.$slide),e.$slide.addClass("fancybox-slide--complete"),g.each(n.slides,function(t,e){e.pos>=n.currPos-1&&e.pos<=n.currPos+1?i[e.pos]=e:e&&(g.fancybox.stop(e.$slide),e.$slide.off().remove())}),n.slides=i),n.isAnimating=!1,n.updateCursor(),n.trigger("afterShow"),e.opts.video.autoStart&&e.$slide.find("video,audio").filter(":visible:first").trigger("play").one("ended",function(){Document.exitFullscreen?Document.exitFullscreen():this.webkitExitFullscreen&&this.webkitExitFullscreen(),n.next()}),e.opts.autoFocus&&"html"===e.contentType&&((t=e.$content.find("input[autofocus]:enabled:visible:first")).length?t.trigger("focus"):n.focus(null,!0)),e.$slide.scrollTop(0).scrollLeft(0))},preload:function(t){var e,n,i=this;i.group.length<2||(n=i.slides[i.currPos+1],(e=i.slides[i.currPos-1])&&e.type===t&&i.loadSlide(e),n&&n.type===t&&i.loadSlide(n))},focus:function(t,e){var n,i,s=this,o=["a[href]","area[href]",'input:not([disabled]):not([type="hidden"]):not([aria-hidden])',"select:not([disabled]):not([aria-hidden])","textarea:not([disabled]):not([aria-hidden])","button:not([disabled]):not([aria-hidden])","iframe","object","embed","video","audio","[contenteditable]",'[tabindex]:not([tabindex^="-"])'].join(",");s.isClosing||((n=(n=!t&&s.current&&s.current.isComplete?s.current.$slide.find("*:visible"+(e?":not(.fancybox-close-small)":"")):s.$refs.container.find("*:visible")).filter(o).filter(function(){return"hidden"!==g(this).css("visibility")&&!g(this).hasClass("disabled")})).length?(i=n.index(d.activeElement),t&&t.shiftKey?(i<0||0==i)&&(t.preventDefault(),n.eq(n.length-1).trigger("focus")):(i<0||i==n.length-1)&&(t&&t.preventDefault(),n.eq(0).trigger("focus"))):s.$refs.container.trigger("focus"))},activate:function(){var e=this;g(".fancybox-container").each(function(){var t=g(this).data("FancyBox");t&&t.id!==e.id&&!t.isClosing&&(t.trigger("onDeactivate"),t.removeEvents(),t.isVisible=!1)}),e.isVisible=!0,(e.current||e.isIdle)&&(e.update(),e.updateControls()),e.trigger("onActivate"),e.addEvents()},close:function(t,e){function n(){u.cleanUp(t)}var i,s,o,r,a,l,c,u=this,d=u.current;return!u.isClosing&&(!(u.isClosing=!0)===u.trigger("beforeClose",t)?(u.isClosing=!1,h(function(){u.update()}),!1):(u.removeEvents(),o=d.$content,i=d.opts.animationEffect,s=g.isNumeric(e)?e:i?d.opts.animationDuration:0,d.$slide.removeClass("fancybox-slide--complete fancybox-slide--next fancybox-slide--previous fancybox-animated"),!0!==t?g.fancybox.stop(d.$slide):i=!1,d.$slide.siblings().trigger("onReset").remove(),s&&u.$refs.container.removeClass("fancybox-is-open").addClass("fancybox-is-closing").css("transition-duration",s+"ms"),u.hideLoading(d),u.hideControls(!0),u.updateCursor(),"zoom"!==i||o&&s&&"image"===d.type&&!u.isMoved()&&!d.hasError&&(c=u.getThumbPos(d))||(i="fade"),"zoom"===i?(g.fancybox.stop(o),l={top:(r=g.fancybox.getTranslate(o)).top,left:r.left,scaleX:r.width/c.width,scaleY:r.height/c.height,width:c.width,height:c.height},"auto"==(a=d.opts.zoomOpacity)&&(a=.1<Math.abs(d.width/d.height-c.width/c.height)),a&&(c.opacity=0),g.fancybox.setTranslate(o,l),p(o),g.fancybox.animate(o,c,s,n)):i&&s?g.fancybox.animate(d.$slide.addClass("fancybox-slide--previous").removeClass("fancybox-slide--current"),"fancybox-animated fancybox-fx-"+i,s,n):!0===t?setTimeout(n,s):n(),!0))},cleanUp:function(t){var e,n,i,s=this,o=s.current.opts.$orig;s.current.$slide.trigger("onReset"),s.$refs.container.empty().remove(),s.trigger("afterClose",t),s.current.opts.backFocus&&(o&&o.length&&o.is(":visible")||(o=s.$trigger),o&&o.length&&(n=l.scrollX,i=l.scrollY,o.trigger("focus"),g("html, body").scrollTop(i).scrollLeft(n))),s.current=null,(e=g.fancybox.getInstance())?e.activate():(g("body").removeClass("fancybox-active compensate-for-scrollbar"),g("#fancybox-style-noscroll").remove())},trigger:function(t,e){var n,i=Array.prototype.slice.call(arguments,1),s=this,o=e&&e.opts?e:s.current;if(o?i.unshift(o):o=s,i.unshift(s),g.isFunction(o.opts[t])&&(n=o.opts[t].apply(o,i)),!1===n)return n;"afterClose"!==t&&s.$refs?s.$refs.container.trigger(t+".fb",i):r.trigger(t+".fb",i)},updateControls:function(){var t=this,e=t.current,n=e.index,i=t.$refs.container,s=t.$refs.caption,o=e.opts.caption;e.$slide.trigger("refresh"),o&&o.length?(t.$caption=s).children().eq(0).html(o):t.$caption=null,t.hasHiddenControls||t.isIdle||t.showControls(),i.find("[data-fancybox-count]").html(t.group.length),i.find("[data-fancybox-index]").html(n+1),i.find("[data-fancybox-prev]").prop("disabled",!e.opts.loop&&n<=0),i.find("[data-fancybox-next]").prop("disabled",!e.opts.loop&&n>=t.group.length-1),"image"===e.type?i.find("[data-fancybox-zoom]").show().end().find("[data-fancybox-download]").attr("href",e.opts.image.src||e.src).show():e.opts.toolbar&&i.find("[data-fancybox-download],[data-fancybox-zoom]").hide(),g(d.activeElement).is(":hidden,[disabled]")&&t.$refs.container.trigger("focus")},hideControls:function(t){var e=["infobar","toolbar","nav"];!t&&this.current.opts.preventCaptionOverlap||e.push("caption"),this.$refs.container.removeClass(e.map(function(t){return"fancybox-show-"+t}).join(" ")),this.hasHiddenControls=!0},showControls:function(){var t=this,e=t.current?t.current.opts:t.opts,n=t.$refs.container;t.hasHiddenControls=!1,t.idleSecondsCounter=0,n.toggleClass("fancybox-show-toolbar",!(!e.toolbar||!e.buttons)).toggleClass("fancybox-show-infobar",!!(e.infobar&&1<t.group.length)).toggleClass("fancybox-show-caption",!!t.$caption).toggleClass("fancybox-show-nav",!!(e.arrows&&1<t.group.length)).toggleClass("fancybox-is-modal",!!e.modal)},toggleControls:function(){this.hasHiddenControls?this.showControls():this.hideControls()}}),g.fancybox={version:"3.5.7",defaults:t,getInstance:function(t){var e=g('.fancybox-container:not(".fancybox-is-closing"):last').data("FancyBox"),n=Array.prototype.slice.call(arguments,1);return e instanceof i&&("string"===g.type(t)?e[t].apply(e,n):"function"===g.type(t)&&t.apply(e,n),e)},open:function(t,e,n){return new i(t,e,n)},close:function(t){var e=this.getInstance();e&&(e.close(),!0===t&&this.close(t))},destroy:function(){this.close(!0),r.add("body").off("click.fb-start","**")},isMobile:/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),use3d:(f=d.createElement("div"),l.getComputedStyle&&l.getComputedStyle(f)&&l.getComputedStyle(f).getPropertyValue("transform")&&!(d.documentMode&&d.documentMode<11)),getTranslate:function(t){var e;return!(!t||!t.length)&&{top:(e=t[0].getBoundingClientRect()).top||0,left:e.left||0,width:e.width,height:e.height,opacity:parseFloat(t.css("opacity"))}},setTranslate:function(t,e){var n="",i={};if(t&&e)return void 0===e.left&&void 0===e.top||(n=(void 0===e.left?t.position().left:e.left)+"px, "+(void 0===e.top?t.position().top:e.top)+"px",n=this.use3d?"translate3d("+n+", 0px)":"translate("+n+")"),void 0!==e.scaleX&&void 0!==e.scaleY?n+=" scale("+e.scaleX+", "+e.scaleY+")":void 0!==e.scaleX&&(n+=" scaleX("+e.scaleX+")"),n.length&&(i.transform=n),void 0!==e.opacity&&(i.opacity=e.opacity),void 0!==e.width&&(i.width=e.width),void 0!==e.height&&(i.height=e.height),t.css(i)},animate:function(e,n,i,s,o){var r,a=this;g.isFunction(i)&&(s=i,i=null),a.stop(e),r=a.getTranslate(e),e.on(c,function(t){t&&t.originalEvent&&(!e.is(t.originalEvent.target)||"z-index"==t.originalEvent.propertyName)||(a.stop(e),g.isNumeric(i)&&e.css("transition-duration",""),g.isPlainObject(n)?void 0!==n.scaleX&&void 0!==n.scaleY&&a.setTranslate(e,{top:n.top,left:n.left,width:r.width*n.scaleX,height:r.height*n.scaleY,scaleX:1,scaleY:1}):!0!==o&&e.removeClass(n),g.isFunction(s)&&s(t))}),g.isNumeric(i)&&e.css("transition-duration",i+"ms"),g.isPlainObject(n)?(void 0!==n.scaleX&&void 0!==n.scaleY&&(delete n.width,delete n.height,e.parent().hasClass("fancybox-slide--image")&&e.parent().addClass("fancybox-is-scaling")),g.fancybox.setTranslate(e,n)):e.addClass(n),e.data("timer",setTimeout(function(){e.trigger(c)},i+33))},stop:function(t,e){t&&t.length&&(clearTimeout(t.data("timer")),e&&t.trigger(c),t.off(c).css("transition-duration",""),t.parent().removeClass("fancybox-is-scaling"))}},g.fn.fancybox=function(t){var e;return(e=(t=t||{}).selector||!1)?g("body").off("click.fb-start",e).on("click.fb-start",e,{options:t},n):this.off("click.fb-start").on("click.fb-start",{items:this,options:t},n),this},r.on("click.fb-start","[data-fancybox]",n),r.on("click.fb-start","[data-fancybox-trigger]",function(t){g('[data-fancybox="'+g(this).attr("data-fancybox-trigger")+'"]').eq(g(this).attr("data-fancybox-index")||0).trigger("click.fb-start",{$trigger:g(this)})}),a=null,r.on("mousedown mouseup focus blur",".fancybox-button",function(t){switch(t.type){case"mousedown":a=g(this);break;case"mouseup":a=null;break;case"focusin":g(".fancybox-button").removeClass("fancybox-focus"),g(this).is(a)||g(this).is("[disabled]")||g(this).addClass("fancybox-focus");break;case"focusout":g(".fancybox-button").removeClass("fancybox-focus")}})}var a,f}(window,document,jQuery),function(p){"use strict";function f(n,t,e){if(n)return e=e||"","object"===p.type(e)&&(e=p.param(e,!0)),p.each(t,function(t,e){n=n.replace("$"+t,e||"")}),e.length&&(n+=(0<n.indexOf("?")?"&":"?")+e),n}var i={youtube:{matcher:/(youtube\.com|youtu\.be|youtube\-nocookie\.com)\/(watch\?(.*&)?v=|v\/|u\/|embed\/?)?(videoseries\?list=(.*)|[\w-]{11}|\?listType=(.*)&list=(.*))(.*)/i,params:{autoplay:1,autohide:1,fs:1,rel:0,hd:1,wmode:"transparent",enablejsapi:1,html5:1},paramPlace:8,type:"iframe",url:"https://www.youtube-nocookie.com/embed/$4",thumb:"https://img.youtube.com/vi/$4/hqdefault.jpg"},vimeo:{matcher:/^.+vimeo.com\/(.*\/)?([\d]+)(.*)?/,params:{autoplay:1,hd:1,show_title:1,show_byline:1,show_portrait:0,fullscreen:1},paramPlace:3,type:"iframe",url:"//player.vimeo.com/video/$2"},instagram:{matcher:/(instagr\.am|instagram\.com)\/p\/([a-zA-Z0-9_\-]+)\/?/i,type:"image",url:"//$1/p/$2/media/?size=l"},gmap_place:{matcher:/(maps\.)?google\.([a-z]{2,3}(\.[a-z]{2})?)\/(((maps\/(place\/(.*)\/)?\@(.*),(\d+.?\d+?)z))|(\?ll=))(.*)?/i,type:"iframe",url:function(t){return"//maps.google."+t[2]+"/?ll="+(t[9]?t[9]+"&z="+Math.floor(t[10])+(t[12]?t[12].replace(/^\//,"&"):""):t[12]+"").replace(/\?/,"&")+"&output="+(t[12]&&0<t[12].indexOf("layer=c")?"svembed":"embed")}},gmap_search:{matcher:/(maps\.)?google\.([a-z]{2,3}(\.[a-z]{2})?)\/(maps\/search\/)(.*)/i,type:"iframe",url:function(t){return"//maps.google."+t[2]+"/maps?q="+t[5].replace("query=","q=").replace("api=1","")+"&output=embed"}}};p(document).on("objectNeedsType.fb",function(t,e,s){var n,o,r,a,l,c,u,d=s.src||"",h=!1;n=p.extend(!0,{},i,s.opts.media),p.each(n,function(t,e){if(r=d.match(e.matcher)){if(h=e.type,u=t,c={},e.paramPlace&&r[e.paramPlace]){"?"==(l=r[e.paramPlace])[0]&&(l=l.substring(1)),l=l.split("&");for(var n=0;n<l.length;++n){var i=l[n].split("=",2);2==i.length&&(c[i[0]]=decodeURIComponent(i[1].replace(/\+/g," ")))}}return a=p.extend(!0,{},e.params,s.opts[t],c),d="function"===p.type(e.url)?e.url.call(this,r,a,s):f(e.url,r,a),o="function"===p.type(e.thumb)?e.thumb.call(this,r,a,s):f(e.thumb,r),"youtube"===t?d=d.replace(/&t=((\d+)m)?(\d+)s/,function(t,e,n,i){return"&start="+((n?60*parseInt(n,10):0)+parseInt(i,10))}):"vimeo"===t&&(d=d.replace("&%23","#")),!1}}),h?(s.opts.thumb||s.opts.$thumb&&s.opts.$thumb.length||(s.opts.thumb=o),"iframe"===h&&(s.opts=p.extend(!0,s.opts,{iframe:{preload:!1,attr:{scrolling:"no"}}})),p.extend(s,{type:h,src:d,origSrc:s.src,contentSource:u,contentType:"image"===h?"image":"gmap_place"==u||"gmap_search"==u?"map":"video"})):d&&(s.type=s.opts.defaultType)});var s={youtube:{src:"https://www.youtube.com/iframe_api",class:"YT",loading:!1,loaded:!1},vimeo:{src:"https://player.vimeo.com/api/player.js",class:"Vimeo",loading:!1,loaded:!1},load:function(t){var e,n=this;this[t].loaded?setTimeout(function(){n.done(t)}):this[t].loading||(this[t].loading=!0,(e=document.createElement("script")).type="text/javascript",e.src=this[t].src,"youtube"===t?window.onYouTubeIframeAPIReady=function(){n[t].loaded=!0,n.done(t)}:e.onload=function(){n[t].loaded=!0,n.done(t)},document.body.appendChild(e))},done:function(t){var e,n;"youtube"===t&&delete window.onYouTubeIframeAPIReady,(e=p.fancybox.getInstance())&&(n=e.current.$content.find("iframe"),"youtube"===t&&void 0!==YT&&YT?new YT.Player(n.attr("id"),{events:{onStateChange:function(t){0==t.data&&e.next()}}}):"vimeo"===t&&void 0!==Vimeo&&Vimeo&&new Vimeo.Player(n).on("ended",function(){e.next()}))}};p(document).on({"afterShow.fb":function(t,e,n){1<e.group.length&&("youtube"===n.contentSource||"vimeo"===n.contentSource)&&s.load(n.contentSource)}})}(jQuery),function(g,l,m){"use strict";function u(t){var e=[];for(var n in t=(t=t.originalEvent||t||g.e).touches&&t.touches.length?t.touches:t.changedTouches&&t.changedTouches.length?t.changedTouches:[t])t[n].pageX?e.push({x:t[n].pageX,y:t[n].pageY}):t[n].clientX&&e.push({x:t[n].clientX,y:t[n].clientY});return e}function v(t,e,n){return e&&t?"x"===n?t.x-e.x:"y"===n?t.y-e.y:Math.sqrt(Math.pow(t.x-e.x,2)+Math.pow(t.y-e.y,2)):0}function c(t){if(t.is('a,area,button,[role="button"],input,label,select,summary,textarea,video,audio,iframe')||m.isFunction(t.get(0).onclick)||t.data("selectable"))return 1;for(var e=0,n=t[0].attributes,i=n.length;e<i;e++)if("data-fancybox-"===n[e].nodeName.substr(0,14))return 1}function d(t){for(var e=!1;(n=t.get(0),0,i=g.getComputedStyle(n)["overflow-y"],s=g.getComputedStyle(n)["overflow-x"],o=("scroll"===i||"auto"===i)&&n.scrollHeight>n.clientHeight,r=("scroll"===s||"auto"===s)&&n.scrollWidth>n.clientWidth,!(e=o||r))&&((t=t.parent()).length&&!t.hasClass("fancybox-stage")&&!t.is("body")););var n,i,s,o,r;return e}function n(t){var e=this;e.instance=t,e.$bg=t.$refs.bg,e.$stage=t.$refs.stage,e.$container=t.$refs.container,e.destroy(),e.$container.on("touchstart.fb.touch mousedown.fb.touch",m.proxy(e,"ontouchstart"))}var y=g.requestAnimationFrame||g.webkitRequestAnimationFrame||g.mozRequestAnimationFrame||g.oRequestAnimationFrame||function(t){return g.setTimeout(t,1e3/60)},b=g.cancelAnimationFrame||g.webkitCancelAnimationFrame||g.mozCancelAnimationFrame||g.oCancelAnimationFrame||function(t){g.clearTimeout(t)};n.prototype.destroy=function(){var t=this;t.$container.off(".fb.touch"),m(l).off(".fb.touch"),t.requestId&&(b(t.requestId),t.requestId=null),t.tapped&&(clearTimeout(t.tapped),t.tapped=null)},n.prototype.ontouchstart=function(t){var e=this,n=m(t.target),i=e.instance,s=i.current,o=s.$slide,r=s.$content,a="touchstart"==t.type;if(a&&e.$container.off("mousedown.fb.touch"),(!t.originalEvent||2!=t.originalEvent.button)&&o.length&&n.length&&!c(n)&&!c(n.parent())&&(n.is("img")||!(t.originalEvent.clientX>n[0].clientWidth+n.offset().left))){if(!s||i.isAnimating||s.$slide.hasClass("fancybox-animated"))return t.stopPropagation(),void t.preventDefault();e.realPoints=e.startPoints=u(t),e.startPoints.length&&(s.touch&&t.stopPropagation(),e.startEvent=t,e.canTap=!0,e.$target=n,e.$content=r,e.opts=s.opts.touch,e.isPanning=!1,e.isSwiping=!1,e.isZooming=!1,e.isScrolling=!1,e.canPan=i.canPan(),e.startTime=(new Date).getTime(),e.distanceX=e.distanceY=e.distance=0,e.canvasWidth=Math.round(o[0].clientWidth),e.canvasHeight=Math.round(o[0].clientHeight),e.contentLastPos=null,e.contentStartPos=m.fancybox.getTranslate(e.$content)||{top:0,left:0},e.sliderStartPos=m.fancybox.getTranslate(o),e.stagePos=m.fancybox.getTranslate(i.$refs.stage),e.sliderStartPos.top-=e.stagePos.top,e.sliderStartPos.left-=e.stagePos.left,e.contentStartPos.top-=e.stagePos.top,e.contentStartPos.left-=e.stagePos.left,m(l).off(".fb.touch").on(a?"touchend.fb.touch touchcancel.fb.touch":"mouseup.fb.touch mouseleave.fb.touch",m.proxy(e,"ontouchend")).on(a?"touchmove.fb.touch":"mousemove.fb.touch",m.proxy(e,"ontouchmove")),m.fancybox.isMobile&&l.addEventListener("scroll",e.onscroll,!0),((e.opts||e.canPan)&&(n.is(e.$stage)||e.$stage.find(n).length)||(n.is(".fancybox-image")&&t.preventDefault(),m.fancybox.isMobile&&n.parents(".fancybox-caption").length))&&(e.isScrollable=d(n)||d(n.parent()),m.fancybox.isMobile&&e.isScrollable||t.preventDefault(),1!==e.startPoints.length&&!s.hasError||(e.canPan?(m.fancybox.stop(e.$content),e.isPanning=!0):e.isSwiping=!0,e.$container.addClass("fancybox-is-grabbing")),2===e.startPoints.length&&"image"===s.type&&(s.isLoaded||s.$ghost)&&(e.canTap=!1,e.isSwiping=!1,e.isPanning=!1,e.isZooming=!0,m.fancybox.stop(e.$content),e.centerPointStartX=.5*(e.startPoints[0].x+e.startPoints[1].x)-m(g).scrollLeft(),e.centerPointStartY=.5*(e.startPoints[0].y+e.startPoints[1].y)-m(g).scrollTop(),e.percentageOfImageAtPinchPointX=(e.centerPointStartX-e.contentStartPos.left)/e.contentStartPos.width,e.percentageOfImageAtPinchPointY=(e.centerPointStartY-e.contentStartPos.top)/e.contentStartPos.height,e.startDistanceBetweenFingers=v(e.startPoints[0],e.startPoints[1]))))}},n.prototype.onscroll=function(t){this.isScrolling=!0,l.removeEventListener("scroll",this.onscroll,!0)},n.prototype.ontouchmove=function(t){var e=this;return void 0!==t.originalEvent.buttons&&0===t.originalEvent.buttons?void e.ontouchend(t):e.isScrolling?void(e.canTap=!1):(e.newPoints=u(t),void((e.opts||e.canPan)&&e.newPoints.length&&e.newPoints.length&&(e.isSwiping&&!0===e.isSwiping||t.preventDefault(),e.distanceX=v(e.newPoints[0],e.startPoints[0],"x"),e.distanceY=v(e.newPoints[0],e.startPoints[0],"y"),e.distance=v(e.newPoints[0],e.startPoints[0]),0<e.distance&&(e.isSwiping?e.onSwipe(t):e.isPanning?e.onPan():e.isZooming&&e.onZoom()))))},n.prototype.onSwipe=function(t){var e,s=this,o=s.instance,n=s.isSwiping,i=s.sliderStartPos.left||0;if(!0!==n)"x"==n&&(0<s.distanceX&&(s.instance.group.length<2||0===s.instance.current.index&&!s.instance.current.opts.loop)?i+=Math.pow(s.distanceX,.8):s.distanceX<0&&(s.instance.group.length<2||s.instance.current.index===s.instance.group.length-1&&!s.instance.current.opts.loop)?i-=Math.pow(-s.distanceX,.8):i+=s.distanceX),s.sliderLastPos={top:"x"==n?0:s.sliderStartPos.top+s.distanceY,left:i},s.requestId&&(b(s.requestId),s.requestId=null),s.requestId=y(function(){s.sliderLastPos&&(m.each(s.instance.slides,function(t,e){var n=e.pos-s.instance.currPos;m.fancybox.setTranslate(e.$slide,{top:s.sliderLastPos.top,left:s.sliderLastPos.left+n*s.canvasWidth+n*e.opts.gutter})}),s.$container.addClass("fancybox-is-sliding"))});else if(10<Math.abs(s.distance)){if(s.canTap=!1,o.group.length<2&&s.opts.vertical?s.isSwiping="y":o.isDragging||!1===s.opts.vertical||"auto"===s.opts.vertical&&800<m(g).width()?s.isSwiping="x":(e=Math.abs(180*Math.atan2(s.distanceY,s.distanceX)/Math.PI),s.isSwiping=45<e&&e<135?"y":"x"),"y"===s.isSwiping&&m.fancybox.isMobile&&s.isScrollable)return void(s.isScrolling=!0);o.isDragging=s.isSwiping,s.startPoints=s.newPoints,m.each(o.slides,function(t,e){var n,i;m.fancybox.stop(e.$slide),n=m.fancybox.getTranslate(e.$slide),i=m.fancybox.getTranslate(o.$refs.stage),e.$slide.css({transform:"",opacity:"","transition-duration":""}).removeClass("fancybox-animated").removeClass(function(t,e){return(e.match(/(^|\s)fancybox-fx-\S+/g)||[]).join(" ")}),e.pos===o.current.pos&&(s.sliderStartPos.top=n.top-i.top,s.sliderStartPos.left=n.left-i.left),m.fancybox.setTranslate(e.$slide,{top:n.top-i.top,left:n.left-i.left})}),o.SlideShow&&o.SlideShow.isActive&&o.SlideShow.stop()}},n.prototype.onPan=function(){var t=this;v(t.newPoints[0],t.realPoints[0])<(m.fancybox.isMobile?10:5)?t.startPoints=t.newPoints:(t.canTap=!1,t.contentLastPos=t.limitMovement(),t.requestId&&b(t.requestId),t.requestId=y(function(){m.fancybox.setTranslate(t.$content,t.contentLastPos)}))},n.prototype.limitMovement=function(){var t,e,n,i,s,o,r=this,a=r.canvasWidth,l=r.canvasHeight,c=r.distanceX,u=r.distanceY,d=r.contentStartPos,h=d.left,p=d.top,f=d.width,g=d.height;return s=a<f?h+c:h,o=p+u,t=Math.max(0,.5*a-.5*f),e=Math.max(0,.5*l-.5*g),n=Math.min(a-f,.5*a-.5*f),i=Math.min(l-g,.5*l-.5*g),0<c&&t<s&&(s=t-1+Math.pow(-t+h+c,.8)||0),c<0&&s<n&&(s=n+1-Math.pow(n-h-c,.8)||0),0<u&&e<o&&(o=e-1+Math.pow(-e+p+u,.8)||0),u<0&&o<i&&(o=i+1-Math.pow(i-p-u,.8)||0),{top:o,left:s}},n.prototype.limitPosition=function(t,e,n,i){var s=this.canvasWidth,o=this.canvasHeight;return t=s<n?(t=0<t?0:t)<s-n?s-n:t:Math.max(0,s/2-n/2),{top:e=o<i?(e=0<e?0:e)<o-i?o-i:e:Math.max(0,o/2-i/2),left:t}},n.prototype.onZoom=function(){var t=this,e=t.contentStartPos,n=e.width,i=e.height,s=e.left,o=e.top,r=v(t.newPoints[0],t.newPoints[1])/t.startDistanceBetweenFingers,a=Math.floor(n*r),l=Math.floor(i*r),c=(n-a)*t.percentageOfImageAtPinchPointX,u=(i-l)*t.percentageOfImageAtPinchPointY,d=(t.newPoints[0].x+t.newPoints[1].x)/2-m(g).scrollLeft(),h=(t.newPoints[0].y+t.newPoints[1].y)/2-m(g).scrollTop(),p=d-t.centerPointStartX,f={top:o+(u+(h-t.centerPointStartY)),left:s+(c+p),scaleX:r,scaleY:r};t.canTap=!1,t.newWidth=a,t.newHeight=l,t.contentLastPos=f,t.requestId&&b(t.requestId),t.requestId=y(function(){m.fancybox.setTranslate(t.$content,t.contentLastPos)})},n.prototype.ontouchend=function(t){var e=this,n=e.isSwiping,i=e.isPanning,s=e.isZooming,o=e.isScrolling;if(e.endPoints=u(t),e.dMs=Math.max((new Date).getTime()-e.startTime,1),e.$container.removeClass("fancybox-is-grabbing"),m(l).off(".fb.touch"),l.removeEventListener("scroll",e.onscroll,!0),e.requestId&&(b(e.requestId),e.requestId=null),e.isSwiping=!1,e.isPanning=!1,e.isZooming=!1,e.isScrolling=!1,e.instance.isDragging=!1,e.canTap)return e.onTap(t);e.speed=100,e.velocityX=e.distanceX/e.dMs*.5,e.velocityY=e.distanceY/e.dMs*.5,i?e.endPanning():s?e.endZooming():e.endSwiping(n,o)},n.prototype.endSwiping=function(t,e){var n=this,i=!1,s=n.instance.group.length,o=Math.abs(n.distanceX),r="x"==t&&1<s&&(130<n.dMs&&10<o||50<o);n.sliderLastPos=null,"y"==t&&!e&&50<Math.abs(n.distanceY)?(m.fancybox.animate(n.instance.current.$slide,{top:n.sliderStartPos.top+n.distanceY+150*n.velocityY,opacity:0},200),i=n.instance.close(!0,250)):r&&0<n.distanceX?i=n.instance.previous(300):r&&n.distanceX<0&&(i=n.instance.next(300)),!1!==i||"x"!=t&&"y"!=t||n.instance.centerSlide(200),n.$container.removeClass("fancybox-is-sliding")},n.prototype.endPanning=function(){var t,e,n,i=this;i.contentLastPos&&(e=!1===i.opts.momentum||350<i.dMs?(t=i.contentLastPos.left,i.contentLastPos.top):(t=i.contentLastPos.left+500*i.velocityX,i.contentLastPos.top+500*i.velocityY),(n=i.limitPosition(t,e,i.contentStartPos.width,i.contentStartPos.height)).width=i.contentStartPos.width,n.height=i.contentStartPos.height,m.fancybox.animate(i.$content,n,366))},n.prototype.endZooming=function(){var t,e,n,i,s=this,o=s.instance.current,r=s.newWidth,a=s.newHeight;s.contentLastPos&&(t=s.contentLastPos.left,i={top:e=s.contentLastPos.top,left:t,width:r,height:a,scaleX:1,scaleY:1},m.fancybox.setTranslate(s.$content,i),r<s.canvasWidth&&a<s.canvasHeight?s.instance.scaleToFit(150):r>o.width||a>o.height?s.instance.scaleToActual(s.centerPointStartX,s.centerPointStartY,150):(n=s.limitPosition(t,e,r,a),m.fancybox.animate(s.$content,n,150)))},n.prototype.onTap=function(n){function t(t){var e=r.opts[t];if(m.isFunction(e)&&(e=e.apply(o,[r,n])),e)switch(e){case"close":o.close(i.startEvent);break;case"toggleControls":o.toggleControls();break;case"next":o.next();break;case"nextOrClose":1<o.group.length?o.next():o.close(i.startEvent);break;case"zoom":"image"==r.type&&(r.isLoaded||r.$ghost)&&(o.canPan()?o.scaleToFit():o.isScaledDown()?o.scaleToActual(l,c):o.group.length<2&&o.close(i.startEvent))}}var e,i=this,s=m(n.target),o=i.instance,r=o.current,a=n&&u(n)||i.startPoints,l=a[0]?a[0].x-m(g).scrollLeft()-i.stagePos.left:0,c=a[0]?a[0].y-m(g).scrollTop()-i.stagePos.top:0;if((!n.originalEvent||2!=n.originalEvent.button)&&(s.is("img")||!(l>s[0].clientWidth+s.offset().left))){if(s.is(".fancybox-bg,.fancybox-inner,.fancybox-outer,.fancybox-container"))e="Outside";else if(s.is(".fancybox-slide"))e="Slide";else{if(!o.current.$content||!o.current.$content.find(s).addBack().filter(s).length)return;e="Content"}if(i.tapped){if(clearTimeout(i.tapped),i.tapped=null,50<Math.abs(l-i.tapX)||50<Math.abs(c-i.tapY))return this;t("dblclick"+e)}else i.tapX=l,i.tapY=c,r.opts["dblclick"+e]&&r.opts["dblclick"+e]!==r.opts["click"+e]?i.tapped=setTimeout(function(){i.tapped=null,o.isAnimating||t("click"+e)},500):t("click"+e);return this}},m(l).on("onActivate.fb",function(t,e){e&&!e.Guestures&&(e.Guestures=new n(e))}).on("beforeClose.fb",function(t,e){e&&e.Guestures&&e.Guestures.destroy()})}(window,document,jQuery),function(r,a){"use strict";a.extend(!0,a.fancybox.defaults,{btnTpl:{slideShow:'<button data-fancybox-play class="fancybox-button fancybox-button--play" title="{{PLAY_START}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M6.5 5.4v13.2l11-6.6z"/></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8.33 5.75h2.2v12.5h-2.2V5.75zm5.15 0h2.2v12.5h-2.2V5.75z"/></svg></button>'},slideShow:{autoStart:!1,speed:3e3,progress:!0}});function n(t){this.instance=t,this.init()}a.extend(n.prototype,{timer:null,isActive:!1,$button:null,init:function(){var t=this,e=t.instance,n=e.group[e.currIndex].opts.slideShow;t.$button=e.$refs.toolbar.find("[data-fancybox-play]").on("click",function(){t.toggle()}),e.group.length<2||!n?t.$button.hide():n.progress&&(t.$progress=a('<div class="fancybox-progress"></div>').appendTo(e.$refs.inner))},set:function(t){var e=this,n=e.instance,i=n.current;i&&(!0===t||i.opts.loop||n.currIndex<n.group.length-1)?e.isActive&&"video"!==i.contentType&&(e.$progress&&a.fancybox.animate(e.$progress.show(),{scaleX:1},i.opts.slideShow.speed),e.timer=setTimeout(function(){n.current.opts.loop||n.current.index!=n.group.length-1?n.next():n.jumpTo(0)},i.opts.slideShow.speed)):(e.stop(),n.idleSecondsCounter=0,n.showControls())},clear:function(){clearTimeout(this.timer),this.timer=null,this.$progress&&this.$progress.removeAttr("style").hide()},start:function(){var t=this,e=t.instance.current;e&&(t.$button.attr("title",(e.opts.i18n[e.opts.lang]||e.opts.i18n.en).PLAY_STOP).removeClass("fancybox-button--play").addClass("fancybox-button--pause"),t.isActive=!0,e.isComplete&&t.set(!0),t.instance.trigger("onSlideShowChange",!0))},stop:function(){var t=this,e=t.instance.current;t.clear(),t.$button.attr("title",(e.opts.i18n[e.opts.lang]||e.opts.i18n.en).PLAY_START).removeClass("fancybox-button--pause").addClass("fancybox-button--play"),t.isActive=!1,t.instance.trigger("onSlideShowChange",!1),t.$progress&&t.$progress.removeAttr("style").hide()},toggle:function(){this.isActive?this.stop():this.start()}}),a(r).on({"onInit.fb":function(t,e){e&&!e.SlideShow&&(e.SlideShow=new n(e))},"beforeShow.fb":function(t,e,n,i){var s=e&&e.SlideShow;i?s&&n.opts.slideShow.autoStart&&s.start():s&&s.isActive&&s.clear()},"afterShow.fb":function(t,e,n){var i=e&&e.SlideShow;i&&i.isActive&&i.set()},"afterKeydown.fb":function(t,e,n,i,s){var o=e&&e.SlideShow;!o||!n.opts.slideShow||80!==s&&32!==s||a(r.activeElement).is("button,a,input")||(i.preventDefault(),o.toggle())},"beforeClose.fb onDeactivate.fb":function(t,e){var n=e&&e.SlideShow;n&&n.stop()}}),a(r).on("visibilitychange",function(){var t=a.fancybox.getInstance(),e=t&&t.SlideShow;e&&e.isActive&&(r.hidden?e.clear():e.set())})}(document,jQuery),function(o,n){"use strict";var i=function(){for(var t=[["requestFullscreen","exitFullscreen","fullscreenElement","fullscreenEnabled","fullscreenchange","fullscreenerror"],["webkitRequestFullscreen","webkitExitFullscreen","webkitFullscreenElement","webkitFullscreenEnabled","webkitfullscreenchange","webkitfullscreenerror"],["webkitRequestFullScreen","webkitCancelFullScreen","webkitCurrentFullScreenElement","webkitCancelFullScreen","webkitfullscreenchange","webkitfullscreenerror"],["mozRequestFullScreen","mozCancelFullScreen","mozFullScreenElement","mozFullScreenEnabled","mozfullscreenchange","mozfullscreenerror"],["msRequestFullscreen","msExitFullscreen","msFullscreenElement","msFullscreenEnabled","MSFullscreenChange","MSFullscreenError"]],e={},n=0;n<t.length;n++){var i=t[n];if(i&&i[1]in o){for(var s=0;s<i.length;s++)e[t[0][s]]=i[s];return e}}return!1}();if(i){var s={request:function(t){(t=t||o.documentElement)[i.requestFullscreen](t.ALLOW_KEYBOARD_INPUT)},exit:function(){o[i.exitFullscreen]()},toggle:function(t){t=t||o.documentElement,this.isFullscreen()?this.exit():this.request(t)},isFullscreen:function(){return Boolean(o[i.fullscreenElement])},enabled:function(){return Boolean(o[i.fullscreenEnabled])}};n.extend(!0,n.fancybox.defaults,{btnTpl:{fullScreen:'<button data-fancybox-fullscreen class="fancybox-button fancybox-button--fsenter" title="{{FULL_SCREEN}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z"/></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5 16h3v3h2v-5H5zm3-8H5v2h5V5H8zm6 11h2v-3h3v-2h-5zm2-11V5h-2v5h5V8z"/></svg></button>'},fullScreen:{autoStart:!1}}),n(o).on(i.fullscreenchange,function(){var t=s.isFullscreen(),e=n.fancybox.getInstance();e&&(e.current&&"image"===e.current.type&&e.isAnimating&&(e.isAnimating=!1,e.update(!0,!0,0),e.isComplete||e.complete()),e.trigger("onFullscreenChange",t),e.$refs.container.toggleClass("fancybox-is-fullscreen",t),e.$refs.toolbar.find("[data-fancybox-fullscreen]").toggleClass("fancybox-button--fsenter",!t).toggleClass("fancybox-button--fsexit",t))})}n(o).on({"onInit.fb":function(t,e){i?e&&e.group[e.currIndex].opts.fullScreen?(e.$refs.container.on("click.fb-fullscreen","[data-fancybox-fullscreen]",function(t){t.stopPropagation(),t.preventDefault(),s.toggle()}),e.opts.fullScreen&&!0===e.opts.fullScreen.autoStart&&s.request(),e.FullScreen=s):e&&e.$refs.toolbar.find("[data-fancybox-fullscreen]").hide():e.$refs.toolbar.find("[data-fancybox-fullscreen]").remove()},"afterKeydown.fb":function(t,e,n,i,s){e&&e.FullScreen&&70===s&&(i.preventDefault(),e.FullScreen.toggle())},"beforeClose.fb":function(t,e){e&&e.FullScreen&&e.$refs.container.hasClass("fancybox-is-fullscreen")&&s.exit()}})}(document,jQuery),function(t,o){"use strict";var r="fancybox-thumbs";o.fancybox.defaults=o.extend(!0,{btnTpl:{thumbs:'<button data-fancybox-thumbs class="fancybox-button fancybox-button--thumbs" title="{{THUMBS}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M14.59 14.59h3.76v3.76h-3.76v-3.76zm-4.47 0h3.76v3.76h-3.76v-3.76zm-4.47 0h3.76v3.76H5.65v-3.76zm8.94-4.47h3.76v3.76h-3.76v-3.76zm-4.47 0h3.76v3.76h-3.76v-3.76zm-4.47 0h3.76v3.76H5.65v-3.76zm8.94-4.47h3.76v3.76h-3.76V5.65zm-4.47 0h3.76v3.76h-3.76V5.65zm-4.47 0h3.76v3.76H5.65V5.65z"/></svg></button>'},thumbs:{autoStart:!1,hideOnClose:!0,parentEl:".fancybox-container",axis:"y"}},o.fancybox.defaults);function i(t){this.init(t)}o.extend(i.prototype,{$button:null,$grid:null,$list:null,isVisible:!1,isActive:!1,init:function(t){var e=this,n=t.group,i=0;e.instance=t,e.opts=n[t.currIndex].opts.thumbs,(t.Thumbs=e).$button=t.$refs.toolbar.find("[data-fancybox-thumbs]");for(var s=0,o=n.length;s<o&&(n[s].thumb&&i++,!(1<i));s++);1<i&&e.opts?(e.$button.removeAttr("style").on("click",function(){e.toggle()}),e.isActive=!0):e.$button.hide()},create:function(){var n,t=this,e=t.instance,i=t.opts.parentEl,s=[];t.$grid||(t.$grid=o('<div class="'+r+" "+r+"-"+t.opts.axis+'"></div>').appendTo(e.$refs.container.find(i).addBack().filter(i)),t.$grid.on("click","a",function(){e.jumpTo(o(this).attr("data-index"))})),t.$list||(t.$list=o('<div class="'+r+'__list">').appendTo(t.$grid)),o.each(e.group,function(t,e){(n=e.thumb)||"image"!==e.type||(n=e.src),s.push('<a href="javascript:;" tabindex="0" data-index="'+t+'"'+(n&&n.length?' style="background-image:url('+n+')"':'class="fancybox-thumbs-missing"')+"></a>")}),t.$list[0].innerHTML=s.join(""),"x"===t.opts.axis&&t.$list.width(parseInt(t.$grid.css("padding-right"),10)+e.group.length*t.$list.children().eq(0).outerWidth(!0))},focus:function(t){var e,n,i=this,s=i.$list,o=i.$grid;i.instance.current&&(n=(e=s.children().removeClass("fancybox-thumbs-active").filter('[data-index="'+i.instance.current.index+'"]').addClass("fancybox-thumbs-active")).position(),"y"===i.opts.axis&&(n.top<0||n.top>s.height()-e.outerHeight())?s.stop().animate({scrollTop:s.scrollTop()+n.top},t):"x"===i.opts.axis&&(n.left<o.scrollLeft()||n.left>o.scrollLeft()+(o.width()-e.outerWidth()))&&s.parent().stop().animate({scrollLeft:n.left},t))},update:function(){var t=this;t.instance.$refs.container.toggleClass("fancybox-show-thumbs",this.isVisible),t.isVisible?(t.$grid||t.create(),t.instance.trigger("onThumbsShow"),t.focus(0)):t.$grid&&t.instance.trigger("onThumbsHide"),t.instance.update()},hide:function(){this.isVisible=!1,this.update()},show:function(){this.isVisible=!0,this.update()},toggle:function(){this.isVisible=!this.isVisible,this.update()}}),o(t).on({"onInit.fb":function(t,e){var n;!e||e.Thumbs||(n=new i(e)).isActive&&!0===n.opts.autoStart&&n.show()},"beforeShow.fb":function(t,e,n,i){var s=e&&e.Thumbs;s&&s.isVisible&&s.focus(i?0:250)},"afterKeydown.fb":function(t,e,n,i,s){var o=e&&e.Thumbs;o&&o.isActive&&71===s&&(i.preventDefault(),o.toggle())},"beforeClose.fb":function(t,e){var n=e&&e.Thumbs;n&&n.isVisible&&!1!==n.opts.hideOnClose&&n.$grid.hide()}})}(document,jQuery),function(t,o){"use strict";o.extend(!0,o.fancybox.defaults,{btnTpl:{share:'<button data-fancybox-share class="fancybox-button fancybox-button--share" title="{{SHARE}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M2.55 19c1.4-8.4 9.1-9.8 11.9-9.8V5l7 7-7 6.3v-3.5c-2.8 0-10.5 2.1-11.9 4.2z"/></svg></button>'},share:{url:function(t,e){return!t.currentHash&&"inline"!==e.type&&"html"!==e.type&&(e.origSrc||e.src)||window.location},tpl:'<div class="fancybox-share"><h1>{{SHARE}}</h1><p><a class="fancybox-share__button fancybox-share__button--fb" href="https://www.facebook.com/sharer/sharer.php?u={{url}}"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m287 456v-299c0-21 6-35 35-35h38v-63c-7-1-29-3-55-3-54 0-91 33-91 94v306m143-254h-205v72h196" /></svg><span>Facebook</span></a><a class="fancybox-share__button fancybox-share__button--tw" href="https://twitter.com/intent/tweet?url={{url}}&text={{descr}}"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m456 133c-14 7-31 11-47 13 17-10 30-27 37-46-15 10-34 16-52 20-61-62-157-7-141 75-68-3-129-35-169-85-22 37-11 86 26 109-13 0-26-4-37-9 0 39 28 72 65 80-12 3-25 4-37 2 10 33 41 57 77 57-42 30-77 38-122 34 170 111 378-32 359-208 16-11 30-25 41-42z" /></svg><span>Twitter</span></a><a class="fancybox-share__button fancybox-share__button--pt" href="https://www.pinterest.com/pin/create/button/?url={{url}}&description={{descr}}&media={{media}}"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m265 56c-109 0-164 78-164 144 0 39 15 74 47 87 5 2 10 0 12-5l4-19c2-6 1-8-3-13-9-11-15-25-15-45 0-58 43-110 113-110 62 0 96 38 96 88 0 67-30 122-73 122-24 0-42-19-36-44 6-29 20-60 20-81 0-19-10-35-31-35-25 0-44 26-44 60 0 21 7 36 7 36l-30 125c-8 37-1 83 0 87 0 3 4 4 5 2 2-3 32-39 42-75l16-64c8 16 31 29 56 29 74 0 124-67 124-157 0-69-58-132-146-132z" fill="#fff"/></svg><span>Pinterest</span></a></p><p><input class="fancybox-share__input" type="text" value="{{url_raw}}" onclick="select()" /></p></div>'}}),o(t).on("click","[data-fancybox-share]",function(){var t,e,n,i=o.fancybox.getInstance(),s=i.current||null;s&&("function"===o.type(s.opts.share.url)&&(t=s.opts.share.url.apply(s,[i,s])),e=s.opts.share.tpl.replace(/\{\{media\}\}/g,"image"===s.type?encodeURIComponent(s.src):"").replace(/\{\{url\}\}/g,encodeURIComponent(t)).replace(/\{\{url_raw\}\}/g,(n={"&":"&amp;","<":"&lt;",">":"&gt;",'"':"&quot;","'":"&#39;","/":"&#x2F;","`":"&#x60;","=":"&#x3D;"},String(t).replace(/[&<>"'`=\/]/g,function(t){return n[t]}))).replace(/\{\{descr\}\}/g,i.$caption?encodeURIComponent(i.$caption.text()):""),o.fancybox.open({src:i.translate(i,e),type:"html",opts:{touch:!1,animationEffect:!1,afterLoad:function(t,e){i.$refs.container.one("beforeClose.fb",function(){t.close(null,0)}),e.$content.find(".fancybox-share__button").click(function(){return window.open(this.href,"Share","width=550, height=450"),!1})},mobile:{autoFocus:!1}}}))})}(document,jQuery),function(o,r,s){"use strict";function a(){var t=o.location.hash.substr(1),e=t.split("-"),n=1<e.length&&/^\+?\d+$/.test(e[e.length-1])&&parseInt(e.pop(-1),10)||1;return{hash:t,index:n<1?1:n,gallery:e.join("-")}}function e(t){""!==t.gallery&&s("[data-fancybox='"+s.escapeSelector(t.gallery)+"']").eq(t.index-1).focus().trigger("click.fb-start")}function l(t){var e,n;return!!t&&(""!==(n=(e=t.current?t.current.opts:t.opts).hash||(e.$orig?e.$orig.data("fancybox")||e.$orig.data("fancybox-trigger"):""))&&n)}s.escapeSelector||(s.escapeSelector=function(t){return(t+"").replace(/([\0-\x1f\x7f]|^-?\d)|^-$|[^\x80-\uFFFF\w-]/g,function(t,e){return e?"\0"===t?"�":t.slice(0,-1)+"\\"+t.charCodeAt(t.length-1).toString(16)+" ":"\\"+t})}),s(function(){!1!==s.fancybox.defaults.hash&&(s(r).on({"onInit.fb":function(t,e){var n,i;!1!==e.group[e.currIndex].opts.hash&&(n=a(),(i=l(e))&&n.gallery&&i==n.gallery&&(e.currIndex=n.index-1))},"beforeShow.fb":function(t,e,n,i){var s;n&&!1!==n.opts.hash&&(s=l(e))&&(e.currentHash=s+(1<e.group.length?"-"+(n.index+1):""),o.location.hash!=="#"+e.currentHash&&(i&&!e.origHash&&(e.origHash=o.location.hash),e.hashTimer&&clearTimeout(e.hashTimer),e.hashTimer=setTimeout(function(){"replaceState"in o.history?(o.history[i?"pushState":"replaceState"]({},r.title,o.location.pathname+o.location.search+"#"+e.currentHash),i&&(e.hasCreatedHistory=!0)):o.location.hash=e.currentHash,e.hashTimer=null},300)))},"beforeClose.fb":function(t,e,n){n&&!1!==n.opts.hash&&(clearTimeout(e.hashTimer),e.currentHash&&e.hasCreatedHistory?o.history.back():e.currentHash&&("replaceState"in o.history?o.history.replaceState({},r.title,o.location.pathname+o.location.search+(e.origHash||"")):o.location.hash=e.origHash),e.currentHash=null)}}),s(o).on("hashchange.fb",function(){var t=a(),i=null;s.each(s(".fancybox-container").get().reverse(),function(t,e){var n=s(e).data("FancyBox");if(n&&n.currentHash)return i=n,!1}),i?i.currentHash===t.gallery+"-"+t.index||1===t.index&&i.currentHash==t.gallery||(i.currentHash=null,i.close()):""!==t.gallery&&e(t)}),setTimeout(function(){s.fancybox.getInstance()||e(a())},50))})}(window,document,jQuery),function(t,e){"use strict";var s=(new Date).getTime();e(t).on({"onInit.fb":function(t,i,e){i.$refs.stage.on("mousewheel DOMMouseScroll wheel MozMousePixelScroll",function(t){var e=i.current,n=(new Date).getTime();i.group.length<2||!1===e.opts.wheel||"auto"===e.opts.wheel&&"image"!==e.type||(t.preventDefault(),t.stopPropagation(),e.$slide.hasClass("fancybox-animated")||(t=t.originalEvent||t,n-s<250||(s=n,i[(-t.deltaY||-t.deltaX||t.wheelDelta||-t.detail)<0?"next":"previous"]())))})}})}(document,jQuery),function(l,n,s,a){function c(t,e){this.settings=null,this.options=l.extend({},c.Defaults,e),this.$element=l(t),this._handlers={},this._plugins={},this._supress={},this._current=null,this._speed=null,this._coordinates=[],this._breakpoint=null,this._width=null,this._items=[],this._clones=[],this._mergers=[],this._widths=[],this._invalidated={},this._pipe=[],this._drag={time:null,target:null,pointer:null,stage:{start:null,current:null},direction:null},this._states={current:{},tags:{initializing:["busy"],animating:["busy"],dragging:["interacting"]}},l.each(["onResize","onThrottledResize"],l.proxy(function(t,e){this._handlers[e]=l.proxy(this[e],this)},this)),l.each(c.Plugins,l.proxy(function(t,e){this._plugins[t.charAt(0).toLowerCase()+t.slice(1)]=new e(this)},this)),l.each(c.Workers,l.proxy(function(t,e){this._pipe.push({filter:e.filter,run:l.proxy(e.run,this)})},this)),this.setup(),this.initialize()}c.Defaults={items:3,loop:!1,center:!1,rewind:!1,checkVisibility:!0,mouseDrag:!0,touchDrag:!0,pullDrag:!0,freeDrag:!1,margin:0,stagePadding:0,merge:!1,mergeFit:!0,autoWidth:!1,startPosition:0,rtl:!1,smartSpeed:250,fluidSpeed:!1,dragEndSpeed:!1,responsive:{},responsiveRefreshRate:200,responsiveBaseElement:n,fallbackEasing:"swing",slideTransition:"",info:!1,nestedItemSelector:!1,itemElement:"div",stageElement:"div",refreshClass:"owl-refresh",loadedClass:"owl-loaded",loadingClass:"owl-loading",rtlClass:"owl-rtl",responsiveClass:"owl-responsive",dragClass:"owl-drag",itemClass:"owl-item",stageClass:"owl-stage",stageOuterClass:"owl-stage-outer",grabClass:"owl-grab"},c.Width={Default:"default",Inner:"inner",Outer:"outer"},c.Type={Event:"event",State:"state"},c.Plugins={},c.Workers=[{filter:["width","settings"],run:function(){this._width=this.$element.width()}},{filter:["width","items","settings"],run:function(t){t.current=this._items&&this._items[this.relative(this._current)]}},{filter:["items","settings"],run:function(){this.$stage.children(".cloned").remove()}},{filter:["width","items","settings"],run:function(t){var e=this.settings.margin||"",n=!this.settings.autoWidth,i=this.settings.rtl,s={width:"auto","margin-left":i?e:"","margin-right":i?"":e};n||this.$stage.children().css(s),t.css=s}},{filter:["width","items","settings"],run:function(t){var e=(this.width()/this.settings.items).toFixed(3)-this.settings.margin,n=null,i=this._items.length,s=!this.settings.autoWidth,o=[];for(t.items={merge:!1,width:e};i--;)n=this._mergers[i],n=this.settings.mergeFit&&Math.min(n,this.settings.items)||n,t.items.merge=1<n||t.items.merge,o[i]=s?e*n:this._items[i].width();this._widths=o}},{filter:["items","settings"],run:function(){var t=[],e=this._items,n=this.settings,i=Math.max(2*n.items,4),s=2*Math.ceil(e.length/2),o=n.loop&&e.length?n.rewind?i:Math.max(i,s):0,r="",a="";for(o/=2;0<o;)t.push(this.normalize(t.length/2,!0)),r+=e[t[t.length-1]][0].outerHTML,t.push(this.normalize(e.length-1-(t.length-1)/2,!0)),a=e[t[t.length-1]][0].outerHTML+a,--o;this._clones=t,l(r).addClass("cloned").appendTo(this.$stage),l(a).addClass("cloned").prependTo(this.$stage)}},{filter:["width","items","settings"],run:function(){for(var t=this.settings.rtl?1:-1,e=this._clones.length+this._items.length,n=-1,i=0,s=0,o=[];++n<e;)i=o[n-1]||0,s=this._widths[this.relative(n)]+this.settings.margin,o.push(i+s*t);this._coordinates=o}},{filter:["width","items","settings"],run:function(){var t=this.settings.stagePadding,e=this._coordinates,n={width:Math.ceil(Math.abs(e[e.length-1]))+2*t,"padding-left":t||"","padding-right":t||""};this.$stage.css(n)}},{filter:["width","items","settings"],run:function(t){var e=this._coordinates.length,n=!this.settings.autoWidth,i=this.$stage.children();if(n&&t.items.merge)for(;e--;)t.css.width=this._widths[this.relative(e)],i.eq(e).css(t.css);else n&&(t.css.width=t.items.width,i.css(t.css))}},{filter:["items"],run:function(){this._coordinates.length<1&&this.$stage.removeAttr("style")}},{filter:["width","items","settings"],run:function(t){t.current=t.current?this.$stage.children().index(t.current):0,t.current=Math.max(this.minimum(),Math.min(this.maximum(),t.current)),this.reset(t.current)}},{filter:["position"],run:function(){this.animate(this.coordinates(this._current))}},{filter:["width","position","items","settings"],run:function(){var t,e,n,i,s=this.settings.rtl?1:-1,o=2*this.settings.stagePadding,r=this.coordinates(this.current())+o,a=r+this.width()*s,l=[];for(n=0,i=this._coordinates.length;n<i;n++)t=this._coordinates[n-1]||0,e=Math.abs(this._coordinates[n])+o*s,(this.op(t,"<=",r)&&this.op(t,">",a)||this.op(e,"<",r)&&this.op(e,">",a))&&l.push(n);this.$stage.children(".active").removeClass("active"),this.$stage.children(":eq("+l.join("), :eq(")+")").addClass("active"),this.$stage.children(".center").removeClass("center"),this.settings.center&&this.$stage.children().eq(this.current()).addClass("center")}}],c.prototype.initializeStage=function(){this.$stage=this.$element.find("."+this.settings.stageClass),this.$stage.length||(this.$element.addClass(this.options.loadingClass),this.$stage=l("<"+this.settings.stageElement+">",{class:this.settings.stageClass}).wrap(l("<div/>",{class:this.settings.stageOuterClass})),this.$element.append(this.$stage.parent()))},c.prototype.initializeItems=function(){var t=this.$element.find(".owl-item");if(t.length)return this._items=t.get().map(function(t){return l(t)}),this._mergers=this._items.map(function(){return 1}),void this.refresh();this.replace(this.$element.children().not(this.$stage.parent())),this.isVisible()?this.refresh():this.invalidate("width"),this.$element.removeClass(this.options.loadingClass).addClass(this.options.loadedClass)},c.prototype.initialize=function(){var t,e,n;this.enter("initializing"),this.trigger("initialize"),this.$element.toggleClass(this.settings.rtlClass,this.settings.rtl),this.settings.autoWidth&&!this.is("pre-loading")&&(t=this.$element.find("img"),e=this.settings.nestedItemSelector?"."+this.settings.nestedItemSelector:a,n=this.$element.children(e).width(),t.length&&n<=0&&this.preloadAutoWidthImages(t));this.initializeStage(),this.initializeItems(),this.registerEventHandlers(),this.leave("initializing"),this.trigger("initialized")},c.prototype.isVisible=function(){return!this.settings.checkVisibility||this.$element.is(":visible")},c.prototype.setup=function(){var e=this.viewport(),t=this.options.responsive,n=-1,i=null;t?(l.each(t,function(t){t<=e&&n<t&&(n=Number(t))}),"function"==typeof(i=l.extend({},this.options,t[n])).stagePadding&&(i.stagePadding=i.stagePadding()),delete i.responsive,i.responsiveClass&&this.$element.attr("class",this.$element.attr("class").replace(new RegExp("("+this.options.responsiveClass+"-)\\S+\\s","g"),"$1"+n))):i=l.extend({},this.options),this.trigger("change",{property:{name:"settings",value:i}}),this._breakpoint=n,this.settings=i,this.invalidate("settings"),this.trigger("changed",{property:{name:"settings",value:this.settings}})},c.prototype.optionsLogic=function(){this.settings.autoWidth&&(this.settings.stagePadding=!1,this.settings.merge=!1)},c.prototype.prepare=function(t){var e=this.trigger("prepare",{content:t});return e.data||(e.data=l("<"+this.settings.itemElement+"/>").addClass(this.options.itemClass).append(t)),this.trigger("prepared",{content:e.data}),e.data},c.prototype.update=function(){for(var t=0,e=this._pipe.length,n=l.proxy(function(t){return this[t]},this._invalidated),i={};t<e;)(this._invalidated.all||0<l.grep(this._pipe[t].filter,n).length)&&this._pipe[t].run(i),t++;this._invalidated={},this.is("valid")||this.enter("valid")},c.prototype.width=function(t){switch(t=t||c.Width.Default){case c.Width.Inner:case c.Width.Outer:return this._width;default:return this._width-2*this.settings.stagePadding+this.settings.margin}},c.prototype.refresh=function(){this.enter("refreshing"),this.trigger("refresh"),this.setup(),this.optionsLogic(),this.$element.addClass(this.options.refreshClass),this.update(),this.$element.removeClass(this.options.refreshClass),this.leave("refreshing"),this.trigger("refreshed")},c.prototype.onThrottledResize=function(){n.clearTimeout(this.resizeTimer),this.resizeTimer=n.setTimeout(this._handlers.onResize,this.settings.responsiveRefreshRate)},c.prototype.onResize=function(){return!!this._items.length&&this._width!==this.$element.width()&&!!this.isVisible()&&(this.enter("resizing"),this.trigger("resize").isDefaultPrevented()?(this.leave("resizing"),!1):(this.invalidate("width"),this.refresh(),this.leave("resizing"),void this.trigger("resized")))},c.prototype.registerEventHandlers=function(){l.support.transition&&this.$stage.on(l.support.transition.end+".owl.core",l.proxy(this.onTransitionEnd,this)),!1!==this.settings.responsive&&this.on(n,"resize",this._handlers.onThrottledResize),this.settings.mouseDrag&&(this.$element.addClass(this.options.dragClass),this.$stage.on("mousedown.owl.core",l.proxy(this.onDragStart,this)),this.$stage.on("dragstart.owl.core selectstart.owl.core",function(){return!1})),this.settings.touchDrag&&(this.$stage.on("touchstart.owl.core",l.proxy(this.onDragStart,this)),this.$stage.on("touchcancel.owl.core",l.proxy(this.onDragEnd,this)))},c.prototype.onDragStart=function(t){var e=null;3!==t.which&&(e=l.support.transform?{x:(e=this.$stage.css("transform").replace(/.*\(|\)| /g,"").split(","))[16===e.length?12:4],y:e[16===e.length?13:5]}:(e=this.$stage.position(),{x:this.settings.rtl?e.left+this.$stage.width()-this.width()+this.settings.margin:e.left,y:e.top}),this.is("animating")&&(l.support.transform?this.animate(e.x):this.$stage.stop(),this.invalidate("position")),this.$element.toggleClass(this.options.grabClass,"mousedown"===t.type),this.speed(0),this._drag.time=(new Date).getTime(),this._drag.target=l(t.target),this._drag.stage.start=e,this._drag.stage.current=e,this._drag.pointer=this.pointer(t),l(s).on("mouseup.owl.core touchend.owl.core",l.proxy(this.onDragEnd,this)),l(s).one("mousemove.owl.core touchmove.owl.core",l.proxy(function(t){var e=this.difference(this._drag.pointer,this.pointer(t));l(s).on("mousemove.owl.core touchmove.owl.core",l.proxy(this.onDragMove,this)),Math.abs(e.x)<Math.abs(e.y)&&this.is("valid")||(t.preventDefault(),this.enter("dragging"),this.trigger("drag"))},this)))},c.prototype.onDragMove=function(t){var e=null,n=null,i=null,s=this.difference(this._drag.pointer,this.pointer(t)),o=this.difference(this._drag.stage.start,s);this.is("dragging")&&(t.preventDefault(),this.settings.loop?(e=this.coordinates(this.minimum()),n=this.coordinates(this.maximum()+1)-e,o.x=((o.x-e)%n+n)%n+e):(e=this.settings.rtl?this.coordinates(this.maximum()):this.coordinates(this.minimum()),n=this.settings.rtl?this.coordinates(this.minimum()):this.coordinates(this.maximum()),i=this.settings.pullDrag?-1*s.x/5:0,o.x=Math.max(Math.min(o.x,e+i),n+i)),this._drag.stage.current=o,this.animate(o.x))},c.prototype.onDragEnd=function(t){var e=this.difference(this._drag.pointer,this.pointer(t)),n=this._drag.stage.current,i=0<e.x^this.settings.rtl?"left":"right";l(s).off(".owl.core"),this.$element.removeClass(this.options.grabClass),(0!==e.x&&this.is("dragging")||!this.is("valid"))&&(this.speed(this.settings.dragEndSpeed||this.settings.smartSpeed),this.current(this.closest(n.x,0!==e.x?i:this._drag.direction)),this.invalidate("position"),this.update(),this._drag.direction=i,(3<Math.abs(e.x)||300<(new Date).getTime()-this._drag.time)&&this._drag.target.one("click.owl.core",function(){return!1})),this.is("dragging")&&(this.leave("dragging"),this.trigger("dragged"))},c.prototype.closest=function(n,i){var s=-1,o=this.width(),r=this.coordinates();return this.settings.freeDrag||l.each(r,l.proxy(function(t,e){return"left"===i&&e-30<n&&n<e+30?s=t:"right"===i&&e-o-30<n&&n<e-o+30?s=t+1:this.op(n,"<",e)&&this.op(n,">",r[t+1]!==a?r[t+1]:e-o)&&(s="left"===i?t+1:t),-1===s},this)),this.settings.loop||(this.op(n,">",r[this.minimum()])?s=n=this.minimum():this.op(n,"<",r[this.maximum()])&&(s=n=this.maximum())),s},c.prototype.animate=function(t){var e=0<this.speed();this.is("animating")&&this.onTransitionEnd(),e&&(this.enter("animating"),this.trigger("translate")),l.support.transform3d&&l.support.transition?this.$stage.css({transform:"translate3d("+t+"px,0px,0px)",transition:this.speed()/1e3+"s"+(this.settings.slideTransition?" "+this.settings.slideTransition:"")}):e?this.$stage.animate({left:t+"px"},this.speed(),this.settings.fallbackEasing,l.proxy(this.onTransitionEnd,this)):this.$stage.css({left:t+"px"})},c.prototype.is=function(t){return this._states.current[t]&&0<this._states.current[t]},c.prototype.current=function(t){if(t===a)return this._current;if(0===this._items.length)return a;if(t=this.normalize(t),this._current!==t){var e=this.trigger("change",{property:{name:"position",value:t}});e.data!==a&&(t=this.normalize(e.data)),this._current=t,this.invalidate("position"),this.trigger("changed",{property:{name:"position",value:this._current}})}return this._current},c.prototype.invalidate=function(t){return"string"===l.type(t)&&(this._invalidated[t]=!0,this.is("valid")&&this.leave("valid")),l.map(this._invalidated,function(t,e){return e})},c.prototype.reset=function(t){(t=this.normalize(t))!==a&&(this._speed=0,this._current=t,this.suppress(["translate","translated"]),this.animate(this.coordinates(t)),this.release(["translate","translated"]))},c.prototype.normalize=function(t,e){var n=this._items.length,i=e?0:this._clones.length;return!this.isNumeric(t)||n<1?t=a:(t<0||n+i<=t)&&(t=((t-i/2)%n+n)%n+i/2),t},c.prototype.relative=function(t){return t-=this._clones.length/2,this.normalize(t,!0)},c.prototype.maximum=function(t){var e,n,i,s=this.settings,o=this._coordinates.length;if(s.loop)o=this._clones.length/2+this._items.length-1;else if(s.autoWidth||s.merge){if(e=this._items.length)for(n=this._items[--e].width(),i=this.$element.width();e--&&!((n+=this._items[e].width()+this.settings.margin)>i););o=e+1}else o=s.center?this._items.length-1:this._items.length-s.items;return t&&(o-=this._clones.length/2),Math.max(o,0)},c.prototype.minimum=function(t){return t?0:this._clones.length/2},c.prototype.items=function(t){return t===a?this._items.slice():(t=this.normalize(t,!0),this._items[t])},c.prototype.mergers=function(t){return t===a?this._mergers.slice():(t=this.normalize(t,!0),this._mergers[t])},c.prototype.clones=function(n){function i(t){return t%2==0?s+t/2:e-(t+1)/2}var e=this._clones.length/2,s=e+this._items.length;return n===a?l.map(this._clones,function(t,e){return i(e)}):l.map(this._clones,function(t,e){return t===n?i(e):null})},c.prototype.speed=function(t){return t!==a&&(this._speed=t),this._speed},c.prototype.coordinates=function(t){var e,n=1,i=t-1;return t===a?l.map(this._coordinates,l.proxy(function(t,e){return this.coordinates(e)},this)):(this.settings.center?(this.settings.rtl&&(n=-1,i=t+1),e=this._coordinates[t],e+=(this.width()-e+(this._coordinates[i]||0))/2*n):e=this._coordinates[i]||0,e=Math.ceil(e))},c.prototype.duration=function(t,e,n){return 0===n?0:Math.min(Math.max(Math.abs(e-t),1),6)*Math.abs(n||this.settings.smartSpeed)},c.prototype.to=function(t,e){var n=this.current(),i=null,s=t-this.relative(n),o=(0<s)-(s<0),r=this._items.length,a=this.minimum(),l=this.maximum();this.settings.loop?(!this.settings.rewind&&Math.abs(s)>r/2&&(s+=-1*o*r),(i=(((t=n+s)-a)%r+r)%r+a)!==t&&i-s<=l&&0<i-s&&(n=i-s,t=i,this.reset(n))):t=this.settings.rewind?(t%(l+=1)+l)%l:Math.max(a,Math.min(l,t)),this.speed(this.duration(n,t,e)),this.current(t),this.isVisible()&&this.update()},c.prototype.next=function(t){t=t||!1,this.to(this.relative(this.current())+1,t)},c.prototype.prev=function(t){t=t||!1,this.to(this.relative(this.current())-1,t)},c.prototype.onTransitionEnd=function(t){if(t!==a&&(t.stopPropagation(),(t.target||t.srcElement||t.originalTarget)!==this.$stage.get(0)))return!1;this.leave("animating"),this.trigger("translated")},c.prototype.viewport=function(){var t;return this.options.responsiveBaseElement!==n?t=l(this.options.responsiveBaseElement).width():n.innerWidth?t=n.innerWidth:s.documentElement&&s.documentElement.clientWidth?t=s.documentElement.clientWidth:console.warn("Can not detect viewport width."),t},c.prototype.replace=function(t){this.$stage.empty(),this._items=[],t=t&&(t instanceof jQuery?t:l(t)),this.settings.nestedItemSelector&&(t=t.find("."+this.settings.nestedItemSelector)),t.filter(function(){return 1===this.nodeType}).each(l.proxy(function(t,e){e=this.prepare(e),this.$stage.append(e),this._items.push(e),this._mergers.push(+e.find("[data-merge]").addBack("[data-merge]").attr("data-merge")||1)},this)),this.reset(this.isNumeric(this.settings.startPosition)?this.settings.startPosition:0),this.invalidate("items")},c.prototype.add=function(t,e){var n=this.relative(this._current);e=e===a?this._items.length:this.normalize(e,!0),t=t instanceof jQuery?t:l(t),this.trigger("add",{content:t,position:e}),t=this.prepare(t),0===this._items.length||e===this._items.length?(0===this._items.length&&this.$stage.append(t),0!==this._items.length&&this._items[e-1].after(t),this._items.push(t),this._mergers.push(+t.find("[data-merge]").addBack("[data-merge]").attr("data-merge")||1)):(this._items[e].before(t),this._items.splice(e,0,t),this._mergers.splice(e,0,+t.find("[data-merge]").addBack("[data-merge]").attr("data-merge")||1)),this._items[n]&&this.reset(this._items[n].index()),this.invalidate("items"),this.trigger("added",{content:t,position:e})},c.prototype.remove=function(t){(t=this.normalize(t,!0))!==a&&(this.trigger("remove",{content:this._items[t],position:t}),this._items[t].remove(),this._items.splice(t,1),this._mergers.splice(t,1),this.invalidate("items"),this.trigger("removed",{content:null,position:t}))},c.prototype.preloadAutoWidthImages=function(t){t.each(l.proxy(function(t,e){this.enter("pre-loading"),e=l(e),l(new Image).one("load",l.proxy(function(t){e.attr("src",t.target.src),e.css("opacity",1),this.leave("pre-loading"),this.is("pre-loading")||this.is("initializing")||this.refresh()},this)).attr("src",e.attr("src")||e.attr("data-src")||e.attr("data-src-retina"))},this))},c.prototype.destroy=function(){for(var t in this.$element.off(".owl.core"),this.$stage.off(".owl.core"),l(s).off(".owl.core"),!1!==this.settings.responsive&&(n.clearTimeout(this.resizeTimer),this.off(n,"resize",this._handlers.onThrottledResize)),this._plugins)this._plugins[t].destroy();this.$stage.children(".cloned").remove(),this.$stage.unwrap(),this.$stage.children().contents().unwrap(),this.$stage.children().unwrap(),this.$stage.remove(),this.$element.removeClass(this.options.refreshClass).removeClass(this.options.loadingClass).removeClass(this.options.loadedClass).removeClass(this.options.rtlClass).removeClass(this.options.dragClass).removeClass(this.options.grabClass).attr("class",this.$element.attr("class").replace(new RegExp(this.options.responsiveClass+"-\\S+\\s","g"),"")).removeData("owl.carousel")},c.prototype.op=function(t,e,n){var i=this.settings.rtl;switch(e){case"<":return i?n<t:t<n;case">":return i?t<n:n<t;case">=":return i?t<=n:n<=t;case"<=":return i?n<=t:t<=n}},c.prototype.on=function(t,e,n,i){t.addEventListener?t.addEventListener(e,n,i):t.attachEvent&&t.attachEvent("on"+e,n)},c.prototype.off=function(t,e,n,i){t.removeEventListener?t.removeEventListener(e,n,i):t.detachEvent&&t.detachEvent("on"+e,n)},c.prototype.trigger=function(t,e,n,i,s){var o={item:{count:this._items.length,index:this.current()}},r=l.camelCase(l.grep(["on",t,n],function(t){return t}).join("-").toLowerCase()),a=l.Event([t,"owl",n||"carousel"].join(".").toLowerCase(),l.extend({relatedTarget:this},o,e));return this._supress[t]||(l.each(this._plugins,function(t,e){e.onTrigger&&e.onTrigger(a)}),this.register({type:c.Type.Event,name:t}),this.$element.trigger(a),this.settings&&"function"==typeof this.settings[r]&&this.settings[r].call(this,a)),a},c.prototype.enter=function(t){l.each([t].concat(this._states.tags[t]||[]),l.proxy(function(t,e){this._states.current[e]===a&&(this._states.current[e]=0),this._states.current[e]++},this))},c.prototype.leave=function(t){l.each([t].concat(this._states.tags[t]||[]),l.proxy(function(t,e){this._states.current[e]--},this))},c.prototype.register=function(n){if(n.type===c.Type.Event){if(l.event.special[n.name]||(l.event.special[n.name]={}),!l.event.special[n.name].owl){var e=l.event.special[n.name]._default;l.event.special[n.name]._default=function(t){return!e||!e.apply||t.namespace&&-1!==t.namespace.indexOf("owl")?t.namespace&&-1<t.namespace.indexOf("owl"):e.apply(this,arguments)},l.event.special[n.name].owl=!0}}else n.type===c.Type.State&&(this._states.tags[n.name]?this._states.tags[n.name]=this._states.tags[n.name].concat(n.tags):this._states.tags[n.name]=n.tags,this._states.tags[n.name]=l.grep(this._states.tags[n.name],l.proxy(function(t,e){return l.inArray(t,this._states.tags[n.name])===e},this)))},c.prototype.suppress=function(t){l.each(t,l.proxy(function(t,e){this._supress[e]=!0},this))},c.prototype.release=function(t){l.each(t,l.proxy(function(t,e){delete this._supress[e]},this))},c.prototype.pointer=function(t){var e={x:null,y:null};return(t=(t=t.originalEvent||t||n.event).touches&&t.touches.length?t.touches[0]:t.changedTouches&&t.changedTouches.length?t.changedTouches[0]:t).pageX?(e.x=t.pageX,e.y=t.pageY):(e.x=t.clientX,e.y=t.clientY),e},c.prototype.isNumeric=function(t){return!isNaN(parseFloat(t))},c.prototype.difference=function(t,e){return{x:t.x-e.x,y:t.y-e.y}},l.fn.owlCarousel=function(e){var i=Array.prototype.slice.call(arguments,1);return this.each(function(){var t=l(this),n=t.data("owl.carousel");n||(n=new c(this,"object"==typeof e&&e),t.data("owl.carousel",n),l.each(["next","prev","to","destroy","refresh","replace","add","remove"],function(t,e){n.register({type:c.Type.Event,name:e}),n.$element.on(e+".owl.carousel.core",l.proxy(function(t){t.namespace&&t.relatedTarget!==this&&(this.suppress([e]),n[e].apply(this,[].slice.call(arguments,1)),this.release([e]))},n))})),"string"==typeof e&&"_"!==e.charAt(0)&&n[e].apply(n,i)})},l.fn.owlCarousel.Constructor=c}(window.Zepto||window.jQuery,window,document),function(e,n){var i=function(t){this._core=t,this._interval=null,this._visible=null,this._handlers={"initialized.owl.carousel":e.proxy(function(t){t.namespace&&this._core.settings.autoRefresh&&this.watch()},this)},this._core.options=e.extend({},i.Defaults,this._core.options),this._core.$element.on(this._handlers)};i.Defaults={autoRefresh:!0,autoRefreshInterval:500},i.prototype.watch=function(){this._interval||(this._visible=this._core.isVisible(),this._interval=n.setInterval(e.proxy(this.refresh,this),this._core.settings.autoRefreshInterval))},i.prototype.refresh=function(){this._core.isVisible()!==this._visible&&(this._visible=!this._visible,this._core.$element.toggleClass("owl-hidden",!this._visible),this._visible&&this._core.invalidate("width")&&this._core.refresh())},i.prototype.destroy=function(){var t,e;for(t in n.clearInterval(this._interval),this._handlers)this._core.$element.off(t,this._handlers[t]);for(e in Object.getOwnPropertyNames(this))"function"!=typeof this[e]&&(this[e]=null)},e.fn.owlCarousel.Constructor.Plugins.AutoRefresh=i}(window.Zepto||window.jQuery,window,document),function(a,o){var e=function(t){this._core=t,this._loaded=[],this._handlers={"initialized.owl.carousel change.owl.carousel resized.owl.carousel":a.proxy(function(t){if(t.namespace&&this._core.settings&&this._core.settings.lazyLoad&&(t.property&&"position"==t.property.name||"initialized"==t.type)){var e=this._core.settings,n=e.center&&Math.ceil(e.items/2)||e.items,i=e.center&&-1*n||0,s=(t.property&&void 0!==t.property.value?t.property.value:this._core.current())+i,o=this._core.clones().length,r=a.proxy(function(t,e){this.load(e)},this);for(0<e.lazyLoadEager&&(n+=e.lazyLoadEager,e.loop&&(s-=e.lazyLoadEager,n++));i++<n;)this.load(o/2+this._core.relative(s)),o&&a.each(this._core.clones(this._core.relative(s)),r),s++}},this)},this._core.options=a.extend({},e.Defaults,this._core.options),this._core.$element.on(this._handlers)};e.Defaults={lazyLoad:!1,lazyLoadEager:0},e.prototype.load=function(t){var e=this._core.$stage.children().eq(t),n=e&&e.find(".owl-lazy");!n||-1<a.inArray(e.get(0),this._loaded)||(n.each(a.proxy(function(t,e){var n,i=a(e),s=1<o.devicePixelRatio&&i.attr("data-src-retina")||i.attr("data-src")||i.attr("data-srcset");this._core.trigger("load",{element:i,url:s},"lazy"),i.is("img")?i.one("load.owl.lazy",a.proxy(function(){i.css("opacity",1),this._core.trigger("loaded",{element:i,url:s},"lazy")},this)).attr("src",s):i.is("source")?i.one("load.owl.lazy",a.proxy(function(){this._core.trigger("loaded",{element:i,url:s},"lazy")},this)).attr("srcset",s):((n=new Image).onload=a.proxy(function(){i.css({"background-image":'url("'+s+'")',opacity:"1"}),this._core.trigger("loaded",{element:i,url:s},"lazy")},this),n.src=s)},this)),this._loaded.push(e.get(0)))},e.prototype.destroy=function(){var t,e;for(t in this.handlers)this._core.$element.off(t,this.handlers[t]);for(e in Object.getOwnPropertyNames(this))"function"!=typeof this[e]&&(this[e]=null)},a.fn.owlCarousel.Constructor.Plugins.Lazy=e}(window.Zepto||window.jQuery,window,document),function(r,n){var i=function(t){this._core=t,this._previousHeight=null,this._handlers={"initialized.owl.carousel refreshed.owl.carousel":r.proxy(function(t){t.namespace&&this._core.settings.autoHeight&&this.update()},this),"changed.owl.carousel":r.proxy(function(t){t.namespace&&this._core.settings.autoHeight&&"position"===t.property.name&&this.update()},this),"loaded.owl.lazy":r.proxy(function(t){t.namespace&&this._core.settings.autoHeight&&t.element.closest("."+this._core.settings.itemClass).index()===this._core.current()&&this.update()},this)},this._core.options=r.extend({},i.Defaults,this._core.options),this._core.$element.on(this._handlers),this._intervalId=null;var e=this;r(n).on("load",function(){e._core.settings.autoHeight&&e.update()}),r(n).resize(function(){e._core.settings.autoHeight&&(null!=e._intervalId&&clearTimeout(e._intervalId),e._intervalId=setTimeout(function(){e.update()},250))})};i.Defaults={autoHeight:!1,autoHeightClass:"owl-height"},i.prototype.update=function(){var t=this._core._current,e=t+this._core.settings.items,n=this._core.settings.lazyLoad,i=this._core.$stage.children().toArray().slice(t,e),s=[],o=0;r.each(i,function(t,e){s.push(r(e).height())}),(o=Math.max.apply(null,s))<=1&&n&&this._previousHeight&&(o=this._previousHeight),this._previousHeight=o,this._core.$stage.parent().height(o).addClass(this._core.settings.autoHeightClass)},i.prototype.destroy=function(){var t,e;for(t in this._handlers)this._core.$element.off(t,this._handlers[t]);for(e in Object.getOwnPropertyNames(this))"function"!=typeof this[e]&&(this[e]=null)},r.fn.owlCarousel.Constructor.Plugins.AutoHeight=i}(window.Zepto||window.jQuery,window,document),function(u,e){var n=function(t){this._core=t,this._videos={},this._playing=null,this._handlers={"initialized.owl.carousel":u.proxy(function(t){t.namespace&&this._core.register({type:"state",name:"playing",tags:["interacting"]})},this),"resize.owl.carousel":u.proxy(function(t){t.namespace&&this._core.settings.video&&this.isInFullScreen()&&t.preventDefault()},this),"refreshed.owl.carousel":u.proxy(function(t){t.namespace&&this._core.is("resizing")&&this._core.$stage.find(".cloned .owl-video-frame").remove()},this),"changed.owl.carousel":u.proxy(function(t){t.namespace&&"position"===t.property.name&&this._playing&&this.stop()},this),"prepared.owl.carousel":u.proxy(function(t){if(t.namespace){var e=u(t.content).find(".owl-video");e.length&&(e.css("display","none"),this.fetch(e,u(t.content)))}},this)},this._core.options=u.extend({},n.Defaults,this._core.options),this._core.$element.on(this._handlers),this._core.$element.on("click.owl.video",".owl-video-play-icon",u.proxy(function(t){this.play(t)},this))};n.Defaults={video:!1,videoHeight:!1,videoWidth:!1},n.prototype.fetch=function(t,e){var n=t.attr("data-vimeo-id")?"vimeo":t.attr("data-vzaar-id")?"vzaar":"youtube",i=t.attr("data-vimeo-id")||t.attr("data-youtube-id")||t.attr("data-vzaar-id"),s=t.attr("data-width")||this._core.settings.videoWidth,o=t.attr("data-height")||this._core.settings.videoHeight,r=t.attr("href");if(!r)throw new Error("Missing video URL.");if(-1<(i=r.match(/(http:|https:|)\/\/(player.|www.|app.)?(vimeo\.com|youtu(be\.com|\.be|be\.googleapis\.com|be\-nocookie\.com)|vzaar\.com)\/(video\/|videos\/|embed\/|channels\/.+\/|groups\/.+\/|watch\?v=|v\/)?([A-Za-z0-9._%-]*)(\&\S+)?/))[3].indexOf("youtu"))n="youtube";else if(-1<i[3].indexOf("vimeo"))n="vimeo";else{if(!(-1<i[3].indexOf("vzaar")))throw new Error("Video URL not supported.");n="vzaar"}i=i[6],this._videos[r]={type:n,id:i,width:s,height:o},e.attr("data-video",r),this.thumbnail(t,this._videos[r])},n.prototype.thumbnail=function(e,t){function n(t){i=c.lazyLoad?u("<div/>",{class:"owl-video-tn "+l,srcType:t}):u("<div/>",{class:"owl-video-tn",style:"opacity:1;background-image:url("+t+")"}),e.after(i),e.after('<div class="owl-video-play-icon"></div>')}var i,s,o=t.width&&t.height?"width:"+t.width+"px;height:"+t.height+"px;":"",r=e.find("img"),a="src",l="",c=this._core.settings;if(e.wrap(u("<div/>",{class:"owl-video-wrapper",style:o})),this._core.settings.lazyLoad&&(a="data-src",l="owl-lazy"),r.length)return n(r.attr(a)),r.remove(),!1;"youtube"===t.type?(s="//img.youtube.com/vi/"+t.id+"/hqdefault.jpg",n(s)):"vimeo"===t.type?u.ajax({type:"GET",url:"//vimeo.com/api/v2/video/"+t.id+".json",jsonp:"callback",dataType:"jsonp",success:function(t){s=t[0].thumbnail_large,n(s)}}):"vzaar"===t.type&&u.ajax({type:"GET",url:"//vzaar.com/api/videos/"+t.id+".json",jsonp:"callback",dataType:"jsonp",success:function(t){s=t.framegrab_url,n(s)}})},n.prototype.stop=function(){this._core.trigger("stop",null,"video"),this._playing.find(".owl-video-frame").remove(),this._playing.removeClass("owl-video-playing"),this._playing=null,this._core.leave("playing"),this._core.trigger("stopped",null,"video")},n.prototype.play=function(t){var e,n=u(t.target).closest("."+this._core.settings.itemClass),i=this._videos[n.attr("data-video")],s=i.width||"100%",o=i.height||this._core.$stage.height();this._playing||(this._core.enter("playing"),this._core.trigger("play",null,"video"),n=this._core.items(this._core.relative(n.index())),this._core.reset(n.index()),(e=u('<iframe frameborder="0" allowfullscreen mozallowfullscreen webkitAllowFullScreen ></iframe>')).attr("height",o),e.attr("width",s),"youtube"===i.type?e.attr("src","//www.youtube.com/embed/"+i.id+"?autoplay=1&rel=0&v="+i.id):"vimeo"===i.type?e.attr("src","//player.vimeo.com/video/"+i.id+"?autoplay=1"):"vzaar"===i.type&&e.attr("src","//view.vzaar.com/"+i.id+"/player?autoplay=true"),u(e).wrap('<div class="owl-video-frame" />').insertAfter(n.find(".owl-video")),this._playing=n.addClass("owl-video-playing"))},n.prototype.isInFullScreen=function(){var t=e.fullscreenElement||e.mozFullScreenElement||e.webkitFullscreenElement;return t&&u(t).parent().hasClass("owl-video-frame")},n.prototype.destroy=function(){var t,e;for(t in this._core.$element.off("click.owl.video"),this._handlers)this._core.$element.off(t,this._handlers[t]);for(e in Object.getOwnPropertyNames(this))"function"!=typeof this[e]&&(this[e]=null)},u.fn.owlCarousel.Constructor.Plugins.Video=n}(window.Zepto||window.jQuery,(window,document)),function(r){var e=function(t){this.core=t,this.core.options=r.extend({},e.Defaults,this.core.options),this.swapping=!0,this.previous=void 0,this.next=void 0,this.handlers={"change.owl.carousel":r.proxy(function(t){t.namespace&&"position"==t.property.name&&(this.previous=this.core.current(),this.next=t.property.value)},this),"drag.owl.carousel dragged.owl.carousel translated.owl.carousel":r.proxy(function(t){t.namespace&&(this.swapping="translated"==t.type)},this),"translate.owl.carousel":r.proxy(function(t){t.namespace&&this.swapping&&(this.core.options.animateOut||this.core.options.animateIn)&&this.swap()},this)},this.core.$element.on(this.handlers)};e.Defaults={animateOut:!1,animateIn:!1},e.prototype.swap=function(){if(1===this.core.settings.items&&r.support.animation&&r.support.transition){this.core.speed(0);var t,e=r.proxy(this.clear,this),n=this.core.$stage.children().eq(this.previous),i=this.core.$stage.children().eq(this.next),s=this.core.settings.animateIn,o=this.core.settings.animateOut;this.core.current()!==this.previous&&(o&&(t=this.core.coordinates(this.previous)-this.core.coordinates(this.next),n.one(r.support.animation.end,e).css({left:t+"px"}).addClass("animated owl-animated-out").addClass(o)),s&&i.one(r.support.animation.end,e).addClass("animated owl-animated-in").addClass(s))}},e.prototype.clear=function(t){r(t.target).css({left:""}).removeClass("animated owl-animated-out owl-animated-in").removeClass(this.core.settings.animateIn).removeClass(this.core.settings.animateOut),this.core.onTransitionEnd()},e.prototype.destroy=function(){var t,e;for(t in this.handlers)this.core.$element.off(t,this.handlers[t]);for(e in Object.getOwnPropertyNames(this))"function"!=typeof this[e]&&(this[e]=null)},r.fn.owlCarousel.Constructor.Plugins.Animate=e}(window.Zepto||window.jQuery,(window,document)),function(i,s,e){var n=function(t){this._core=t,this._call=null,this._time=0,this._timeout=0,this._paused=!0,this._handlers={"changed.owl.carousel":i.proxy(function(t){t.namespace&&"settings"===t.property.name?this._core.settings.autoplay?this.play():this.stop():t.namespace&&"position"===t.property.name&&this._paused&&(this._time=0)},this),"initialized.owl.carousel":i.proxy(function(t){t.namespace&&this._core.settings.autoplay&&this.play()},this),"play.owl.autoplay":i.proxy(function(t,e,n){t.namespace&&this.play(e,n)},this),"stop.owl.autoplay":i.proxy(function(t){t.namespace&&this.stop()},this),"mouseover.owl.autoplay":i.proxy(function(){this._core.settings.autoplayHoverPause&&this._core.is("rotating")&&this.pause()},this),"mouseleave.owl.autoplay":i.proxy(function(){this._core.settings.autoplayHoverPause&&this._core.is("rotating")&&this.play()},this),"touchstart.owl.core":i.proxy(function(){this._core.settings.autoplayHoverPause&&this._core.is("rotating")&&this.pause()},this),"touchend.owl.core":i.proxy(function(){this._core.settings.autoplayHoverPause&&this.play()},this)},this._core.$element.on(this._handlers),this._core.options=i.extend({},n.Defaults,this._core.options)};n.Defaults={autoplay:!1,autoplayTimeout:5e3,autoplayHoverPause:!1,autoplaySpeed:!1},n.prototype._next=function(t){this._call=s.setTimeout(i.proxy(this._next,this,t),this._timeout*(Math.round(this.read()/this._timeout)+1)-this.read()),this._core.is("interacting")||e.hidden||this._core.next(t||this._core.settings.autoplaySpeed)},n.prototype.read=function(){return(new Date).getTime()-this._time},n.prototype.play=function(t,e){var n;this._core.is("rotating")||this._core.enter("rotating"),t=t||this._core.settings.autoplayTimeout,n=Math.min(this._time%(this._timeout||t),t),this._paused?(this._time=this.read(),this._paused=!1):s.clearTimeout(this._call),this._time+=this.read()%t-n,this._timeout=t,this._call=s.setTimeout(i.proxy(this._next,this,e),t-n)},n.prototype.stop=function(){this._core.is("rotating")&&(this._time=0,this._paused=!0,s.clearTimeout(this._call),this._core.leave("rotating"))},n.prototype.pause=function(){this._core.is("rotating")&&!this._paused&&(this._time=this.read(),this._paused=!0,s.clearTimeout(this._call))},n.prototype.destroy=function(){var t,e;for(t in this.stop(),this._handlers)this._core.$element.off(t,this._handlers[t]);for(e in Object.getOwnPropertyNames(this))"function"!=typeof this[e]&&(this[e]=null)},i.fn.owlCarousel.Constructor.Plugins.autoplay=n}(window.Zepto||window.jQuery,window,document),function(o){"use strict";var e=function(t){this._core=t,this._initialized=!1,this._pages=[],this._controls={},this._templates=[],this.$element=this._core.$element,this._overrides={next:this._core.next,prev:this._core.prev,to:this._core.to},this._handlers={"prepared.owl.carousel":o.proxy(function(t){t.namespace&&this._core.settings.dotsData&&this._templates.push('<div class="'+this._core.settings.dotClass+'">'+o(t.content).find("[data-dot]").addBack("[data-dot]").attr("data-dot")+"</div>")},this),"added.owl.carousel":o.proxy(function(t){t.namespace&&this._core.settings.dotsData&&this._templates.splice(t.position,0,this._templates.pop())},this),"remove.owl.carousel":o.proxy(function(t){t.namespace&&this._core.settings.dotsData&&this._templates.splice(t.position,1)},this),"changed.owl.carousel":o.proxy(function(t){t.namespace&&"position"==t.property.name&&this.draw()},this),"initialized.owl.carousel":o.proxy(function(t){t.namespace&&!this._initialized&&(this._core.trigger("initialize",null,"navigation"),this.initialize(),this.update(),this.draw(),this._initialized=!0,this._core.trigger("initialized",null,"navigation"))},this),"refreshed.owl.carousel":o.proxy(function(t){t.namespace&&this._initialized&&(this._core.trigger("refresh",null,"navigation"),this.update(),this.draw(),this._core.trigger("refreshed",null,"navigation"))},this)},this._core.options=o.extend({},e.Defaults,this._core.options),this.$element.on(this._handlers)};e.Defaults={nav:!1,navText:['<span aria-label="Previous">&#x2039;</span>','<span aria-label="Next">&#x203a;</span>'],navSpeed:!1,navElement:'button type="button" role="presentation"',navContainer:!1,navContainerClass:"owl-nav",navClass:["owl-prev","owl-next"],slideBy:1,dotClass:"owl-dot",dotsClass:"owl-dots",dots:!0,dotsEach:!1,dotsData:!1,dotsSpeed:!1,dotsContainer:!1},e.prototype.initialize=function(){var t,n=this._core.settings;for(t in this._controls.$relative=(n.navContainer?o(n.navContainer):o("<div>").addClass(n.navContainerClass).appendTo(this.$element)).addClass("disabled"),this._controls.$previous=o("<"+n.navElement+">").addClass(n.navClass[0]).html(n.navText[0]).prependTo(this._controls.$relative).on("click",o.proxy(function(t){this.prev(n.navSpeed)},this)),this._controls.$next=o("<"+n.navElement+">").addClass(n.navClass[1]).html(n.navText[1]).appendTo(this._controls.$relative).on("click",o.proxy(function(t){this.next(n.navSpeed)},this)),n.dotsData||(this._templates=[o('<button role="button">').addClass(n.dotClass).append(o("<span>")).prop("outerHTML")]),this._controls.$absolute=(n.dotsContainer?o(n.dotsContainer):o("<div>").addClass(n.dotsClass).appendTo(this.$element)).addClass("disabled"),this._controls.$absolute.on("click","button",o.proxy(function(t){var e=o(t.target).parent().is(this._controls.$absolute)?o(t.target).index():o(t.target).parent().index();t.preventDefault(),this.to(e,n.dotsSpeed)},this)),this._overrides)this._core[t]=o.proxy(this[t],this)},e.prototype.destroy=function(){var t,e,n,i,s;for(t in s=this._core.settings,this._handlers)this.$element.off(t,this._handlers[t]);for(e in this._controls)"$relative"===e&&s.navContainer?this._controls[e].html(""):this._controls[e].remove();for(i in this.overides)this._core[i]=this._overrides[i];for(n in Object.getOwnPropertyNames(this))"function"!=typeof this[n]&&(this[n]=null)},e.prototype.update=function(){var t,e,n=this._core.clones().length/2,i=n+this._core.items().length,s=this._core.maximum(!0),o=this._core.settings,r=o.center||o.autoWidth||o.dotsData?1:o.dotsEach||o.items;if("page"!==o.slideBy&&(o.slideBy=Math.min(o.slideBy,o.items)),o.dots||"page"==o.slideBy)for(this._pages=[],t=n,e=0;t<i;t++){if(r<=e||0===e){if(this._pages.push({start:Math.min(s,t-n),end:t-n+r-1}),Math.min(s,t-n)===s)break;e=0,0}e+=this._core.mergers(this._core.relative(t))}},e.prototype.draw=function(){var t,e=this._core.settings,n=this._core.items().length<=e.items,i=this._core.relative(this._core.current()),s=e.loop||e.rewind;this._controls.$relative.toggleClass("disabled",!e.nav||n),e.nav&&(this._controls.$previous.toggleClass("disabled",!s&&i<=this._core.minimum(!0)),this._controls.$next.toggleClass("disabled",!s&&i>=this._core.maximum(!0))),this._controls.$absolute.toggleClass("disabled",!e.dots||n),e.dots&&(t=this._pages.length-this._controls.$absolute.children().length,e.dotsData&&0!=t?this._controls.$absolute.html(this._templates.join("")):0<t?this._controls.$absolute.append(new Array(1+t).join(this._templates[0])):t<0&&this._controls.$absolute.children().slice(t).remove(),this._controls.$absolute.find(".active").removeClass("active"),this._controls.$absolute.children().eq(o.inArray(this.current(),this._pages)).addClass("active"))},e.prototype.onTrigger=function(t){var e=this._core.settings;t.page={index:o.inArray(this.current(),this._pages),count:this._pages.length,size:e&&(e.center||e.autoWidth||e.dotsData?1:e.dotsEach||e.items)}},e.prototype.current=function(){var n=this._core.relative(this._core.current());return o.grep(this._pages,o.proxy(function(t,e){return t.start<=n&&t.end>=n},this)).pop()},e.prototype.getPosition=function(t){var e,n,i=this._core.settings;return"page"==i.slideBy?(e=o.inArray(this.current(),this._pages),n=this._pages.length,t?++e:--e,e=this._pages[(e%n+n)%n].start):(e=this._core.relative(this._core.current()),n=this._core.items().length,t?e+=i.slideBy:e-=i.slideBy),e},e.prototype.next=function(t){o.proxy(this._overrides.to,this._core)(this.getPosition(!0),t)},e.prototype.prev=function(t){o.proxy(this._overrides.to,this._core)(this.getPosition(!1),t)},e.prototype.to=function(t,e,n){var i;!n&&this._pages.length?(i=this._pages.length,o.proxy(this._overrides.to,this._core)(this._pages[(t%i+i)%i].start,e)):o.proxy(this._overrides.to,this._core)(t,e)},o.fn.owlCarousel.Constructor.Plugins.Navigation=e}(window.Zepto||window.jQuery,(window,document)),function(i,s){"use strict";var e=function(t){this._core=t,this._hashes={},this.$element=this._core.$element,this._handlers={"initialized.owl.carousel":i.proxy(function(t){t.namespace&&"URLHash"===this._core.settings.startPosition&&i(s).trigger("hashchange.owl.navigation")},this),"prepared.owl.carousel":i.proxy(function(t){if(t.namespace){var e=i(t.content).find("[data-hash]").addBack("[data-hash]").attr("data-hash");if(!e)return;this._hashes[e]=t.content}},this),"changed.owl.carousel":i.proxy(function(t){if(t.namespace&&"position"===t.property.name){var n=this._core.items(this._core.relative(this._core.current())),e=i.map(this._hashes,function(t,e){return t===n?e:null}).join();if(!e||s.location.hash.slice(1)===e)return;s.location.hash=e}},this)},this._core.options=i.extend({},e.Defaults,this._core.options),this.$element.on(this._handlers),i(s).on("hashchange.owl.navigation",i.proxy(function(t){var e=s.location.hash.substring(1),n=this._core.$stage.children(),i=this._hashes[e]&&n.index(this._hashes[e]);void 0!==i&&i!==this._core.current()&&this._core.to(this._core.relative(i),!1,!0)},this))};e.Defaults={URLhashListener:!1},e.prototype.destroy=function(){var t,e;for(t in i(s).off("hashchange.owl.navigation"),this._handlers)this._core.$element.off(t,this._handlers[t]);for(e in Object.getOwnPropertyNames(this))"function"!=typeof this[e]&&(this[e]=null)},i.fn.owlCarousel.Constructor.Plugins.Hash=e}(window.Zepto||window.jQuery,window,document),function(s,o){function e(t,n){var i=!1,e=t.charAt(0).toUpperCase()+t.slice(1);return s.each((t+" "+a.join(e+" ")+e).split(" "),function(t,e){if(r[e]!==o)return i=!n||e,!1}),i}function t(t){return e(t,!0)}var r=s("<support>").get(0).style,a="Webkit Moz O ms".split(" "),n={transition:{end:{WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd",transition:"transitionend"}},animation:{end:{WebkitAnimation:"webkitAnimationEnd",MozAnimation:"animationend",OAnimation:"oAnimationEnd",animation:"animationend"}}},i=function(){return!!e("transform")},l=function(){return!!e("perspective")},c=function(){return!!e("animation")};!function(){return!!e("transition")}()||(s.support.transition=new String(t("transition")),s.support.transition.end=n.transition.end[s.support.transition]),c()&&(s.support.animation=new String(t("animation")),s.support.animation.end=n.animation.end[s.support.animation]),i()&&(s.support.transform=new String(t("transform")),s.support.transform3d=l())}(window.Zepto||window.jQuery,(window,void document)),function(t){"function"==typeof define&&define.amd?define(["jquery"],t):"object"==typeof module&&module.exports?module.exports=t(require("jquery")):t(jQuery)}(function(u){u.extend(u.fn,{validate:function(t){if(this.length){var i=u.data(this[0],"validator");return i||(this.attr("novalidate","novalidate"),i=new u.validator(t,this[0]),u.data(this[0],"validator",i),i.settings.onsubmit&&(this.on("click.validate",":submit",function(t){i.submitButton=t.currentTarget,u(this).hasClass("cancel")&&(i.cancelSubmit=!0),void 0!==u(this).attr("formnovalidate")&&(i.cancelSubmit=!0)}),this.on("submit.validate",function(n){function t(){var t,e;return i.submitButton&&(i.settings.submitHandler||i.formSubmitted)&&(t=u("<input type='hidden'/>").attr("name",i.submitButton.name).val(u(i.submitButton).val()).appendTo(i.currentForm)),!i.settings.submitHandler||(e=i.settings.submitHandler.call(i,i.currentForm,n),t&&t.remove(),void 0!==e&&e)}return i.settings.debug&&n.preventDefault(),i.cancelSubmit?(i.cancelSubmit=!1,t()):i.form()?i.pendingRequest?!(i.formSubmitted=!0):t():(i.focusInvalid(),!1)})),i)}t&&t.debug&&window.console&&console.warn("Nothing selected, can't validate, returning nothing.")},valid:function(){var t,e,n;return u(this[0]).is("form")?t=this.validate().form():(n=[],t=!0,e=u(this[0].form).validate(),this.each(function(){(t=e.element(this)&&t)||(n=n.concat(e.errorList))}),e.errorList=n),t},rules:function(t,e){var n,i,s,o,r,a,l=this[0];if(null!=l&&(!l.form&&l.hasAttribute("contenteditable")&&(l.form=this.closest("form")[0],l.name=this.attr("name")),null!=l.form)){if(t)switch(n=u.data(l.form,"validator").settings,i=n.rules,s=u.validator.staticRules(l),t){case"add":u.extend(s,u.validator.normalizeRule(e)),delete s.messages,i[l.name]=s,e.messages&&(n.messages[l.name]=u.extend(n.messages[l.name],e.messages));break;case"remove":return e?(a={},u.each(e.split(/\s/),function(t,e){a[e]=s[e],delete s[e]}),a):(delete i[l.name],s)}return(o=u.validator.normalizeRules(u.extend({},u.validator.classRules(l),u.validator.attributeRules(l),u.validator.dataRules(l),u.validator.staticRules(l)),l)).required&&(r=o.required,delete o.required,o=u.extend({required:r},o)),o.remote&&(r=o.remote,delete o.remote,o=u.extend(o,{remote:r})),o}}}),u.extend(u.expr.pseudos||u.expr[":"],{blank:function(t){return!u.trim(""+u(t).val())},filled:function(t){var e=u(t).val();return null!==e&&!!u.trim(""+e)},unchecked:function(t){return!u(t).prop("checked")}}),u.validator=function(t,e){this.settings=u.extend(!0,{},u.validator.defaults,t),this.currentForm=e,this.init()},u.validator.format=function(n,t){return 1===arguments.length?function(){var t=u.makeArray(arguments);return t.unshift(n),u.validator.format.apply(this,t)}:(void 0===t||(2<arguments.length&&t.constructor!==Array&&(t=u.makeArray(arguments).slice(1)),t.constructor!==Array&&(t=[t]),u.each(t,function(t,e){n=n.replace(new RegExp("\\{"+t+"\\}","g"),function(){return e})})),n)},u.extend(u.validator,{defaults:{messages:{},groups:{},rules:{},errorClass:"error",pendingClass:"pending",validClass:"valid",errorElement:"label",focusCleanup:!1,focusInvalid:!0,errorContainer:u([]),errorLabelContainer:u([]),onsubmit:!0,ignore:":hidden",ignoreTitle:!1,onfocusin:function(t){this.lastActive=t,this.settings.focusCleanup&&(this.settings.unhighlight&&this.settings.unhighlight.call(this,t,this.settings.errorClass,this.settings.validClass),this.hideThese(this.errorsFor(t)))},onfocusout:function(t){this.checkable(t)||!(t.name in this.submitted)&&this.optional(t)||this.element(t)},onkeyup:function(t,e){9===e.which&&""===this.elementValue(t)||-1!==u.inArray(e.keyCode,[16,17,18,20,35,36,37,38,39,40,45,144,225])||(t.name in this.submitted||t.name in this.invalid)&&this.element(t)},onclick:function(t){t.name in this.submitted?this.element(t):t.parentNode.name in this.submitted&&this.element(t.parentNode)},highlight:function(t,e,n){"radio"===t.type?this.findByName(t.name).addClass(e).removeClass(n):u(t).addClass(e).removeClass(n)},unhighlight:function(t,e,n){"radio"===t.type?this.findByName(t.name).removeClass(e).addClass(n):u(t).removeClass(e).addClass(n)}},setDefaults:function(t){u.extend(u.validator.defaults,t)},messages:{required:"This field is required.",remote:"Please fix this field.",email:"Please enter a valid email address.",url:"Please enter a valid URL.",date:"Please enter a valid date.",dateISO:"Please enter a valid date (ISO).",number:"Please enter a valid number.",digits:"Please enter only digits.",equalTo:"Please enter the same value again.",maxlength:u.validator.format("Please enter no more than {0} characters."),minlength:u.validator.format("Please enter at least {0} characters."),rangelength:u.validator.format("Please enter a value between {0} and {1} characters long."),range:u.validator.format("Please enter a value between {0} and {1}."),max:u.validator.format("Please enter a value less than or equal to {0}."),min:u.validator.format("Please enter a value greater than or equal to {0}."),step:u.validator.format("Please enter a multiple of {0}.")},autoCreateRanges:!1,prototype:{init:function(){function t(t){!this.form&&this.hasAttribute("contenteditable")&&(this.form=u(this).closest("form")[0],this.name=u(this).attr("name"));var e=u.data(this.form,"validator"),n="on"+t.type.replace(/^validate/,""),i=e.settings;i[n]&&!u(this).is(i.ignore)&&i[n].call(e,this,t)}this.labelContainer=u(this.settings.errorLabelContainer),this.errorContext=this.labelContainer.length&&this.labelContainer||u(this.currentForm),this.containers=u(this.settings.errorContainer).add(this.settings.errorLabelContainer),this.submitted={},this.valueCache={},this.pendingRequest=0,this.pending={},this.invalid={},this.reset();var n,i=this.groups={};u.each(this.settings.groups,function(n,t){"string"==typeof t&&(t=t.split(/\s/)),u.each(t,function(t,e){i[e]=n})}),n=this.settings.rules,u.each(n,function(t,e){n[t]=u.validator.normalizeRule(e)}),u(this.currentForm).on("focusin.validate focusout.validate keyup.validate",":text, [type='password'], [type='file'], select, textarea, [type='number'], [type='search'], [type='tel'], [type='url'], [type='email'], [type='datetime'], [type='date'], [type='month'], [type='week'], [type='time'], [type='datetime-local'], [type='range'], [type='color'], [type='radio'], [type='checkbox'], [contenteditable], [type='button']",t).on("click.validate","select, option, [type='radio'], [type='checkbox']",t),this.settings.invalidHandler&&u(this.currentForm).on("invalid-form.validate",this.settings.invalidHandler)},form:function(){return this.checkForm(),u.extend(this.submitted,this.errorMap),this.invalid=u.extend({},this.errorMap),this.valid()||u(this.currentForm).triggerHandler("invalid-form",[this]),this.showErrors(),this.valid()},checkForm:function(){this.prepareForm();for(var t=0,e=this.currentElements=this.elements();e[t];t++)this.check(e[t]);return this.valid()},element:function(t){var e,n,i=this.clean(t),s=this.validationTargetFor(i),o=this,r=!0;return void 0===s?delete this.invalid[i.name]:(this.prepareElement(s),this.currentElements=u(s),(n=this.groups[s.name])&&u.each(this.groups,function(t,e){e===n&&t!==s.name&&((i=o.validationTargetFor(o.clean(o.findByName(t))))&&i.name in o.invalid&&(o.currentElements.push(i),r=o.check(i)&&r))}),e=!1!==this.check(s),r=r&&e,this.invalid[s.name]=!e,this.numberOfInvalids()||(this.toHide=this.toHide.add(this.containers)),this.showErrors(),u(t).attr("aria-invalid",!e)),r},showErrors:function(e){if(e){var n=this;u.extend(this.errorMap,e),this.errorList=u.map(this.errorMap,function(t,e){return{message:t,element:n.findByName(e)[0]}}),this.successList=u.grep(this.successList,function(t){return!(t.name in e)})}this.settings.showErrors?this.settings.showErrors.call(this,this.errorMap,this.errorList):this.defaultShowErrors()},resetForm:function(){u.fn.resetForm&&u(this.currentForm).resetForm(),this.invalid={},this.submitted={},this.prepareForm(),this.hideErrors();var t=this.elements().removeData("previousValue").removeAttr("aria-invalid");this.resetElements(t)},resetElements:function(t){var e;if(this.settings.unhighlight)for(e=0;t[e];e++)this.settings.unhighlight.call(this,t[e],this.settings.errorClass,""),this.findByName(t[e].name).removeClass(this.settings.validClass);else t.removeClass(this.settings.errorClass).removeClass(this.settings.validClass)},numberOfInvalids:function(){return this.objectLength(this.invalid)},objectLength:function(t){var e,n=0;for(e in t)void 0!==t[e]&&null!==t[e]&&!1!==t[e]&&n++;return n},hideErrors:function(){this.hideThese(this.toHide)},hideThese:function(t){t.not(this.containers).text(""),this.addWrapper(t).hide()},valid:function(){return 0===this.size()},size:function(){return this.errorList.length},focusInvalid:function(){if(this.settings.focusInvalid)try{u(this.findLastActive()||this.errorList.length&&this.errorList[0].element||[]).filter(":visible").focus().trigger("focusin")}catch(t){}},findLastActive:function(){var e=this.lastActive;return e&&1===u.grep(this.errorList,function(t){return t.element.name===e.name}).length&&e},elements:function(){var e=this,n={};return u(this.currentForm).find("input, select, textarea, [contenteditable]").not(":submit, :reset, :image, :disabled").not(this.settings.ignore).filter(function(){var t=this.name||u(this).attr("name");return!t&&e.settings.debug&&window.console&&console.error("%o has no name assigned",this),this.hasAttribute("contenteditable")&&(this.form=u(this).closest("form")[0],this.name=t),!(t in n||!e.objectLength(u(this).rules())||(n[t]=!0,0))})},clean:function(t){return u(t)[0]},errors:function(){var t=this.settings.errorClass.split(" ").join(".");return u(this.settings.errorElement+"."+t,this.errorContext)},resetInternals:function(){this.successList=[],this.errorList=[],this.errorMap={},this.toShow=u([]),this.toHide=u([])},reset:function(){this.resetInternals(),this.currentElements=u([])},prepareForm:function(){this.reset(),this.toHide=this.errors().add(this.containers)},prepareElement:function(t){this.reset(),this.toHide=this.errorsFor(t)},elementValue:function(t){var e,n,i=u(t),s=t.type;return"radio"===s||"checkbox"===s?this.findByName(t.name).filter(":checked").val():"number"===s&&void 0!==t.validity?t.validity.badInput?"NaN":i.val():(e=t.hasAttribute("contenteditable")?i.text():i.val(),"file"===s?"C:\\fakepath\\"===e.substr(0,12)?e.substr(12):0<=(n=e.lastIndexOf("/"))?e.substr(n+1):0<=(n=e.lastIndexOf("\\"))?e.substr(n+1):e:"string"==typeof e?e.replace(/\r/g,""):e)},check:function(e){e=this.validationTargetFor(this.clean(e));var t,n,i,s,o=u(e).rules(),r=u.map(o,function(t,e){return e}).length,a=!1,l=this.elementValue(e);if("function"==typeof o.normalizer?s=o.normalizer:"function"==typeof this.settings.normalizer&&(s=this.settings.normalizer),s){if("string"!=typeof(l=s.call(e,l)))throw new TypeError("The normalizer should return a string value.");delete o.normalizer}for(n in o){i={method:n,parameters:o[n]};try{if("dependency-mismatch"===(t=u.validator.methods[n].call(this,l,e,i.parameters))&&1===r){a=!0;continue}if(a=!1,"pending"===t)return void(this.toHide=this.toHide.not(this.errorsFor(e)));if(!t)return this.formatAndAdd(e,i),!1}catch(t){throw this.settings.debug&&window.console&&console.log("Exception occurred when checking element "+e.id+", check the '"+i.method+"' method.",t),t instanceof TypeError&&(t.message+=".  Exception occurred when checking element "+e.id+", check the '"+i.method+"' method."),t}}if(!a)return this.objectLength(o)&&this.successList.push(e),!0},customDataMessage:function(t,e){return u(t).data("msg"+e.charAt(0).toUpperCase()+e.substring(1).toLowerCase())||u(t).data("msg")},customMessage:function(t,e){var n=this.settings.messages[t];return n&&(n.constructor===String?n:n[e])},findDefined:function(){for(var t=0;t<arguments.length;t++)if(void 0!==arguments[t])return arguments[t]},defaultMessage:function(t,e){"string"==typeof e&&(e={method:e});var n=this.findDefined(this.customMessage(t.name,e.method),this.customDataMessage(t,e.method),!this.settings.ignoreTitle&&t.title||void 0,u.validator.messages[e.method],"<strong>Warning: No message defined for "+t.name+"</strong>"),i=/\$?\{(\d+)\}/g;return"function"==typeof n?n=n.call(this,e.parameters,t):i.test(n)&&(n=u.validator.format(n.replace(i,"{$1}"),e.parameters)),n},formatAndAdd:function(t,e){var n=this.defaultMessage(t,e);this.errorList.push({message:n,element:t,method:e.method}),this.errorMap[t.name]=n,this.submitted[t.name]=n},addWrapper:function(t){return this.settings.wrapper&&(t=t.add(t.parent(this.settings.wrapper))),t},defaultShowErrors:function(){var t,e,n;for(t=0;this.errorList[t];t++)n=this.errorList[t],this.settings.highlight&&this.settings.highlight.call(this,n.element,this.settings.errorClass,this.settings.validClass),this.showLabel(n.element,n.message);if(this.errorList.length&&(this.toShow=this.toShow.add(this.containers)),this.settings.success)for(t=0;this.successList[t];t++)this.showLabel(this.successList[t]);if(this.settings.unhighlight)for(t=0,e=this.validElements();e[t];t++)this.settings.unhighlight.call(this,e[t],this.settings.errorClass,this.settings.validClass);this.toHide=this.toHide.not(this.toShow),this.hideErrors(),this.addWrapper(this.toShow).show()},validElements:function(){return this.currentElements.not(this.invalidElements())},invalidElements:function(){return u(this.errorList).map(function(){return this.element})},showLabel:function(t,e){var n,i,s,o,r=this.errorsFor(t),a=this.idOrName(t),l=u(t).attr("aria-describedby");r.length?(r.removeClass(this.settings.validClass).addClass(this.settings.errorClass),r.html(e)):(n=r=u("<"+this.settings.errorElement+">").attr("id",a+"-error").addClass(this.settings.errorClass).html(e||""),this.settings.wrapper&&(n=r.hide().show().wrap("<"+this.settings.wrapper+"/>").parent()),this.labelContainer.length?this.labelContainer.append(n):this.settings.errorPlacement?this.settings.errorPlacement.call(this,n,u(t)):n.insertAfter(t),r.is("label")?r.attr("for",a):0===r.parents("label[for='"+this.escapeCssMeta(a)+"']").length&&(s=r.attr("id"),l?l.match(new RegExp("\\b"+this.escapeCssMeta(s)+"\\b"))||(l+=" "+s):l=s,u(t).attr("aria-describedby",l),(i=this.groups[t.name])&&(o=this,u.each(o.groups,function(t,e){e===i&&u("[name='"+o.escapeCssMeta(t)+"']",o.currentForm).attr("aria-describedby",r.attr("id"))})))),!e&&this.settings.success&&(r.text(""),"string"==typeof this.settings.success?r.addClass(this.settings.success):this.settings.success(r,t)),this.toShow=this.toShow.add(r)},errorsFor:function(t){var e=this.escapeCssMeta(this.idOrName(t)),n=u(t).attr("aria-describedby"),i="label[for='"+e+"'], label[for='"+e+"'] *";return n&&(i=i+", #"+this.escapeCssMeta(n).replace(/\s+/g,", #")),this.errors().filter(i)},escapeCssMeta:function(t){return t.replace(/([\\!"#$%&'()*+,.\/:;<=>?@\[\]^`{|}~])/g,"\\$1")},idOrName:function(t){return this.groups[t.name]||!this.checkable(t)&&t.id||t.name},validationTargetFor:function(t){return this.checkable(t)&&(t=this.findByName(t.name)),u(t).not(this.settings.ignore)[0]},checkable:function(t){return/radio|checkbox/i.test(t.type)},findByName:function(t){return u(this.currentForm).find("[name='"+this.escapeCssMeta(t)+"']")},getLength:function(t,e){switch(e.nodeName.toLowerCase()){case"select":return u("option:selected",e).length;case"input":if(this.checkable(e))return this.findByName(e.name).filter(":checked").length}return t.length},depend:function(t,e){return!this.dependTypes[typeof t]||this.dependTypes[typeof t](t,e)},dependTypes:{boolean:function(t){return t},string:function(t,e){return!!u(t,e.form).length},function:function(t,e){return t(e)}},optional:function(t){var e=this.elementValue(t);return!u.validator.methods.required.call(this,e,t)&&"dependency-mismatch"},startRequest:function(t){this.pending[t.name]||(this.pendingRequest++,u(t).addClass(this.settings.pendingClass),this.pending[t.name]=!0)},stopRequest:function(t,e){this.pendingRequest--,this.pendingRequest<0&&(this.pendingRequest=0),delete this.pending[t.name],u(t).removeClass(this.settings.pendingClass),e&&0===this.pendingRequest&&this.formSubmitted&&this.form()?(u(this.currentForm).submit(),this.submitButton&&u("input:hidden[name='"+this.submitButton.name+"']",this.currentForm).remove(),this.formSubmitted=!1):!e&&0===this.pendingRequest&&this.formSubmitted&&(u(this.currentForm).triggerHandler("invalid-form",[this]),this.formSubmitted=!1)},previousValue:function(t,e){return e="string"==typeof e&&e||"remote",u.data(t,"previousValue")||u.data(t,"previousValue",{old:null,valid:!0,message:this.defaultMessage(t,{method:e})})},destroy:function(){this.resetForm(),u(this.currentForm).off(".validate").removeData("validator").find(".validate-equalTo-blur").off(".validate-equalTo").removeClass("validate-equalTo-blur")}},classRuleSettings:{required:{required:!0},email:{email:!0},url:{url:!0},date:{date:!0},dateISO:{dateISO:!0},number:{number:!0},digits:{digits:!0},creditcard:{creditcard:!0}},addClassRules:function(t,e){t.constructor===String?this.classRuleSettings[t]=e:u.extend(this.classRuleSettings,t)},classRules:function(t){var e={},n=u(t).attr("class");return n&&u.each(n.split(" "),function(){this in u.validator.classRuleSettings&&u.extend(e,u.validator.classRuleSettings[this])}),e},normalizeAttributeRule:function(t,e,n,i){/min|max|step/.test(n)&&(null===e||/number|range|text/.test(e))&&(i=Number(i),isNaN(i)&&(i=void 0)),i||0===i?t[n]=i:e===n&&"range"!==e&&(t[n]=!0)},attributeRules:function(t){var e,n,i={},s=u(t),o=t.getAttribute("type");for(e in u.validator.methods)n="required"===e?(""===(n=t.getAttribute(e))&&(n=!0),!!n):s.attr(e),this.normalizeAttributeRule(i,o,e,n);return i.maxlength&&/-1|2147483647|524288/.test(i.maxlength)&&delete i.maxlength,i},dataRules:function(t){var e,n,i={},s=u(t),o=t.getAttribute("type");for(e in u.validator.methods)n=s.data("rule"+e.charAt(0).toUpperCase()+e.substring(1).toLowerCase()),this.normalizeAttributeRule(i,o,e,n);return i},staticRules:function(t){var e={},n=u.data(t.form,"validator");return n.settings.rules&&(e=u.validator.normalizeRule(n.settings.rules[t.name])||{}),e},normalizeRules:function(i,s){return u.each(i,function(t,e){if(!1!==e){if(e.param||e.depends){var n=!0;switch(typeof e.depends){case"string":n=!!u(e.depends,s.form).length;break;case"function":n=e.depends.call(s,s)}n?i[t]=void 0===e.param||e.param:(u.data(s.form,"validator").resetElements(u(s)),delete i[t])}}else delete i[t]}),u.each(i,function(t,e){i[t]=u.isFunction(e)&&"normalizer"!==t?e(s):e}),u.each(["minlength","maxlength"],function(){i[this]&&(i[this]=Number(i[this]))}),u.each(["rangelength","range"],function(){var t;i[this]&&(u.isArray(i[this])?i[this]=[Number(i[this][0]),Number(i[this][1])]:"string"==typeof i[this]&&(t=i[this].replace(/[\[\]]/g,"").split(/[\s,]+/),i[this]=[Number(t[0]),Number(t[1])]))}),u.validator.autoCreateRanges&&(null!=i.min&&null!=i.max&&(i.range=[i.min,i.max],delete i.min,delete i.max),null!=i.minlength&&null!=i.maxlength&&(i.rangelength=[i.minlength,i.maxlength],delete i.minlength,delete i.maxlength)),i},normalizeRule:function(t){if("string"==typeof t){var e={};u.each(t.split(/\s/),function(){e[this]=!0}),t=e}return t},addMethod:function(t,e,n){u.validator.methods[t]=e,u.validator.messages[t]=void 0!==n?n:u.validator.messages[t],e.length<3&&u.validator.addClassRules(t,u.validator.normalizeRule(t))},methods:{required:function(t,e,n){if(!this.depend(n,e))return"dependency-mismatch";if("select"!==e.nodeName.toLowerCase())return this.checkable(e)?0<this.getLength(t,e):0<t.length;var i=u(e).val();return i&&0<i.length},email:function(t,e){return this.optional(e)||/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/.test(t)},url:function(t,e){return this.optional(e)||/^(?:(?:(?:https?|ftp):)?\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})).?)(?::\d{2,5})?(?:[\/?#]\S*)?$/i.test(t)},date:function(t,e){return this.optional(e)||!/Invalid|NaN/.test(new Date(t).toString())},dateISO:function(t,e){return this.optional(e)||/^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$/.test(t)},number:function(t,e){return this.optional(e)||/^(?:-?\d+|-?\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$/.test(t)},digits:function(t,e){return this.optional(e)||/^\d+$/.test(t)},minlength:function(t,e,n){var i=u.isArray(t)?t.length:this.getLength(t,e);return this.optional(e)||n<=i},maxlength:function(t,e,n){var i=u.isArray(t)?t.length:this.getLength(t,e);return this.optional(e)||i<=n},rangelength:function(t,e,n){var i=u.isArray(t)?t.length:this.getLength(t,e);return this.optional(e)||i>=n[0]&&i<=n[1]},min:function(t,e,n){return this.optional(e)||n<=t},max:function(t,e,n){return this.optional(e)||t<=n},range:function(t,e,n){return this.optional(e)||t>=n[0]&&t<=n[1]},step:function(t,e,n){function i(t){var e=(""+t).match(/(?:\.(\d+))?$/);return e&&e[1]?e[1].length:0}function s(t){return Math.round(t*Math.pow(10,o))}var o,r=u(e).attr("type"),a="Step attribute on input type "+r+" is not supported.",l=new RegExp("\\b"+r+"\\b"),c=!0;if(r&&!l.test(["text","number","range"].join()))throw new Error(a);return o=i(n),(i(t)>o||s(t)%s(n)!=0)&&(c=!1),this.optional(e)||c},equalTo:function(t,e,n){var i=u(n);return this.settings.onfocusout&&i.not(".validate-equalTo-blur").length&&i.addClass("validate-equalTo-blur").on("blur.validate-equalTo",function(){u(e).valid()}),t===i.val()},remote:function(o,r,t,a){if(this.optional(r))return"dependency-mismatch";a="string"==typeof a&&a||"remote";var l,e,n,c=this.previousValue(r,a);return this.settings.messages[r.name]||(this.settings.messages[r.name]={}),c.originalMessage=c.originalMessage||this.settings.messages[r.name][a],this.settings.messages[r.name][a]=c.message,t="string"==typeof t?{url:t}:t,n=u.param(u.extend({data:o},t.data)),c.old===n?c.valid:(c.old=n,(l=this).startRequest(r),(e={})[r.name]=o,u.ajax(u.extend(!0,{mode:"abort",port:"validate"+r.name,dataType:"json",data:e,context:l.currentForm,success:function(t){var e,n,i,s=!0===t||"true"===t;l.settings.messages[r.name][a]=c.originalMessage,s?(i=l.formSubmitted,l.resetInternals(),l.toHide=l.errorsFor(r),l.formSubmitted=i,l.successList.push(r),l.invalid[r.name]=!1,l.showErrors()):(e={},n=t||l.defaultMessage(r,{method:a,parameters:o}),e[r.name]=c.message=n,l.invalid[r.name]=!0,l.showErrors(e)),c.valid=s,l.stopRequest(r,s)}},t)),"pending")}}});var i,s={};return u.ajaxPrefilter?u.ajaxPrefilter(function(t,e,n){var i=t.port;"abort"===t.mode&&(s[i]&&s[i].abort(),s[i]=n)}):(i=u.ajax,u.ajax=function(t){var e=("mode"in t?t:u.ajaxSettings).mode,n=("port"in t?t:u.ajaxSettings).port;return"abort"===e?(s[n]&&s[n].abort(),s[n]=i.apply(this,arguments),s[n]):i.apply(this,arguments)}),u}),function(t){"function"==typeof define&&define.amd?define(["jquery","../jquery.validate"],t):"object"==typeof module&&module.exports?module.exports=t(require("jquery")):t(jQuery)}(function(t){return t.extend(t.validator.messages,{required:"Это поле необходимо заполнить.",remote:"Пожалуйста, введите правильное значение.",email:"Пожалуйста, введите корректный адрес электронной почты.",url:"Пожалуйста, введите корректный URL.",date:"Пожалуйста, введите корректную дату.",dateISO:"Пожалуйста, введите корректную дату в формате ISO.",number:"Пожалуйста, введите число.",digits:"Пожалуйста, вводите только цифры.",creditcard:"Пожалуйста, введите правильный номер кредитной карты.",equalTo:"Пожалуйста, введите такое же значение ещё раз.",extension:"Пожалуйста, выберите файл с правильным расширением.",maxlength:t.validator.format("Пожалуйста, введите не больше {0} символов."),minlength:t.validator.format("Пожалуйста, введите не меньше {0} символов."),rangelength:t.validator.format("Пожалуйста, введите значение длиной от {0} до {1} символов."),range:t.validator.format("Пожалуйста, введите число от {0} до {1}."),max:t.validator.format("Пожалуйста, введите число, меньшее или равное {0}."),min:t.validator.format("Пожалуйста, введите число, большее или равное {0}.")}),t});var $jscomp={scope:{},findInternal:function(t,e,n){t instanceof String&&(t=String(t));for(var i=t.length,s=0;s<i;s++){var o=t[s];if(e.call(n,o,s,t))return{i:s,v:o}}return{i:-1,v:void 0}}};$jscomp.defineProperty="function"==typeof Object.defineProperties?Object.defineProperty:function(t,e,n){if(n.get||n.set)throw new TypeError("ES3 does not support getters and setters.");t!=Array.prototype&&t!=Object.prototype&&(t[e]=n.value)},$jscomp.getGlobal=function(t){return("undefined"==typeof window||window!==t)&&"undefined"!=typeof global&&null!=global?global:t},$jscomp.global=$jscomp.getGlobal(this),$jscomp.polyfill=function(t,e,n,i){if(e){for(n=$jscomp.global,t=t.split("."),i=0;i<t.length-1;i++){var s=t[i];s in n||(n[s]={}),n=n[s]}(e=e(i=n[t=t[t.length-1]]))!=i&&null!=e&&$jscomp.defineProperty(n,t,{configurable:!0,writable:!0,value:e})}},$jscomp.polyfill("Array.prototype.find",function(t){return t||function(t,e){return $jscomp.findInternal(this,t,e).v}},"es6-impl","es3"),function(t,e,n){"function"==typeof define&&define.amd?define(["jquery"],t):"object"==typeof exports?module.exports=t(require("jquery")):t(e||n)}(function(r){function a(c,b,x){var w={invalid:[],getCaret:function(){try{var t,e=0,n=c.get(0),i=document.selection,s=n.selectionStart;return i&&-1===navigator.appVersion.indexOf("MSIE 10")?((t=i.createRange()).moveStart("character",-w.val().length),e=t.text.length):!s&&"0"!==s||(e=s),e}catch(t){}},setCaret:function(t){try{if(c.is(":focus")){var e,n=c.get(0);n.setSelectionRange?n.setSelectionRange(t,t):((e=n.createTextRange()).collapse(!0),e.moveEnd("character",t),e.moveStart("character",t),e.select())}}catch(t){}},events:function(){c.on("keydown.mask",function(t){c.data("mask-keycode",t.keyCode||t.which),c.data("mask-previus-value",c.val()),c.data("mask-previus-caret-pos",w.getCaret()),w.maskDigitPosMapOld=w.maskDigitPosMap}).on(r.jMaskGlobals.useInput?"input.mask":"keyup.mask",w.behaviour).on("paste.mask drop.mask",function(){setTimeout(function(){c.keydown().keyup()},100)}).on("change.mask",function(){c.data("changed",!0)}).on("blur.mask",function(){o===w.val()||c.data("changed")||c.trigger("change"),c.data("changed",!1)}).on("blur.mask",function(){o=w.val()}).on("focus.mask",function(t){!0===x.selectOnFocus&&r(t.target).select()}).on("focusout.mask",function(){x.clearIfNotMatch&&!i.test(w.val())&&w.val("")})},getRegexMask:function(){for(var t,e,n,i,s=[],o=0;o<b.length;o++)(t=C.translation[b.charAt(o)])?(e=t.pattern.toString().replace(/.{1}$|^.{1}/g,""),n=t.optional,(t=t.recursive)?(s.push(b.charAt(o)),i={digit:b.charAt(o),pattern:e}):s.push(n||t?e+"?":e)):s.push(b.charAt(o).replace(/[-\/\\^$*+?.()|[\]{}]/g,"\\$&"));return s=s.join(""),i&&(s=s.replace(new RegExp("("+i.digit+"(.*"+i.digit+")?)"),"($1)?").replace(new RegExp(i.digit,"g"),i.pattern)),new RegExp(s)},destroyEvents:function(){c.off("input keydown keyup paste drop blur focusout ".split(" ").join(".mask "))},val:function(t){var e=c.is("input")?"val":"text";return e=0<arguments.length?(c[e]()!==t&&c[e](t),c):c[e]()},calculateCaretPosition:function(){var t=c.data("mask-previus-value")||"",e=w.getMasked(),n=w.getCaret();if(t!==e){var i,s=c.data("mask-previus-caret-pos")||0,o=(e=e.length,t.length),r=t=0,a=0,l=0;for(i=n;i<e&&w.maskDigitPosMap[i];i++)r++;for(i=n-1;0<=i&&w.maskDigitPosMap[i];i--)t++;for(i=n-1;0<=i;i--)w.maskDigitPosMap[i]&&a++;for(i=s-1;0<=i;i--)w.maskDigitPosMapOld[i]&&l++;o<n?n=10*e:n<=s&&s!==o?w.maskDigitPosMapOld[n]||(n=(s=n)-(l-a)-t,w.maskDigitPosMap[n]&&(n=s)):s<n&&(n=n+(a-l)+r)}return n},behaviour:function(t){t=t||window.event,w.invalid=[];var e=c.data("mask-keycode");if(-1===r.inArray(e,C.byPassKeys)){e=w.getMasked();var n=w.getCaret();return setTimeout(function(){w.setCaret(w.calculateCaretPosition())},10),w.val(e),w.setCaret(n),w.callbacks(t)}},getMasked:function(t,e){var n,i,s,o=[],r=void 0===e?w.val():e+"",a=0,l=b.length,c=0,u=r.length,d=1,h="push",p=-1,f=0,g=[];for(i=x.reverse?(h="unshift",d=-1,n=0,a=l-1,c=u-1,function(){return-1<a&&-1<c}):(n=l-1,function(){return a<l&&c<u});i();){var m=b.charAt(a),v=r.charAt(c),y=C.translation[m];y?(v.match(y.pattern)?(o[h](v),y.recursive&&(-1===p?p=a:a===n&&(a=p-d),n===p&&(a-=d)),a+=d):v===s?(f--,s=void 0):y.optional?(a+=d,c-=d):y.fallback?(o[h](y.fallback),a+=d,c-=d):w.invalid.push({p:c,v:v,e:y.pattern}),c+=d):(t||o[h](m),v===m?(g.push(c),c+=d):(s=m,g.push(c+f),f++),a+=d)}return r=b.charAt(n),l!==u+1||C.translation[r]||o.push(r),o=o.join(""),w.mapMaskdigitPositions(o,g,u),o},mapMaskdigitPositions:function(t,e,n){for(t=x.reverse?t.length-n:0,w.maskDigitPosMap={},n=0;n<e.length;n++)w.maskDigitPosMap[e[n]+t]=1},callbacks:function(t){function e(t,e,n){"function"==typeof x[t]&&e&&x[t].apply(this,n)}var n=w.val(),i=n!==o,s=[n,t,c,x];e("onChange",!0==i,s),e("onKeyPress",!0==i,s),e("onComplete",n.length===b.length,s),e("onInvalid",0<w.invalid.length,[n,t,c,w.invalid,x])}};c=r(c);var i,C=this,o=w.val();b="function"==typeof b?b(w.val(),void 0,c,x):b,C.mask=b,C.options=x,C.remove=function(){var t=w.getCaret();return w.destroyEvents(),w.val(C.getCleanVal()),w.setCaret(t),c},C.getCleanVal=function(){return w.getMasked(!0)},C.getMaskedVal=function(t){return w.getMasked(!1,t)},C.init=function(t){if(t=t||!1,x=x||{},C.clearIfNotMatch=r.jMaskGlobals.clearIfNotMatch,C.byPassKeys=r.jMaskGlobals.byPassKeys,C.translation=r.extend({},r.jMaskGlobals.translation,x.translation),C=r.extend(!0,{},C,x),i=w.getRegexMask(),t)w.events(),w.val(w.getMasked());else{x.placeholder&&c.attr("placeholder",x.placeholder),c.data("mask")&&c.attr("autocomplete","off");for(var e=!(t=0);t<b.length;t++){var n=C.translation[b.charAt(t)];if(n&&n.recursive){e=!1;break}}e&&c.attr("maxlength",b.length),w.destroyEvents(),w.events(),t=w.getCaret(),w.val(w.getMasked()),w.setCaret(t)}},C.init(!c.is("input"))}r.maskWatchers={};function e(){var t=r(this),e={},n=t.attr("data-mask");if(t.attr("data-mask-reverse")&&(e.reverse=!0),t.attr("data-mask-clearifnotmatch")&&(e.clearIfNotMatch=!0),"true"===t.attr("data-mask-selectonfocus")&&(e.selectOnFocus=!0),l(t,n,e))return t.data("mask",new a(this,n,e))}var l=function(t,e,n){n=n||{};var i=r(t).data("mask"),s=JSON.stringify;t=r(t).val()||r(t).text();try{return"function"==typeof e&&(e=e(t)),"object"!=typeof i||s(i.options)!==s(n)||i.mask!==e}catch(t){}},t=function(t){var e,n=document.createElement("div");return(e=(t="on"+t)in n)||(n.setAttribute(t,"return;"),e="function"==typeof n[t]),e};r.fn.mask=function(t,e){e=e||{};function n(){if(l(this,t,e))return r(this).data("mask",new a(this,t,e))}var i=this.selector,s=(o=r.jMaskGlobals).watchInterval,o=e.watchInputs||o.watchInputs;return r(this).each(n),i&&""!==i&&o&&(clearInterval(r.maskWatchers[i]),r.maskWatchers[i]=setInterval(function(){r(document).find(i).each(n)},s)),this},r.fn.masked=function(t){return this.data("mask").getMaskedVal(t)},r.fn.unmask=function(){return clearInterval(r.maskWatchers[this.selector]),delete r.maskWatchers[this.selector],this.each(function(){var t=r(this).data("mask");t&&t.remove().removeData("mask")})},r.fn.cleanVal=function(){return this.data("mask").getCleanVal()},r.applyDataMask=function(t){((t=t||r.jMaskGlobals.maskElements)instanceof r?t:r(t)).filter(r.jMaskGlobals.dataMaskAttr).each(e)},t={maskElements:"input,td,span,div",dataMaskAttr:"*[data-mask]",dataMask:!0,watchInterval:300,watchInputs:!0,useInput:!/Chrome\/[2-4][0-9]|SamsungBrowser/.test(window.navigator.userAgent)&&t("input"),watchDataMask:!1,byPassKeys:[9,16,17,18,36,37,38,39,40,91],translation:{0:{pattern:/\d/},9:{pattern:/\d/,optional:!0},"#":{pattern:/\d/,recursive:!0},A:{pattern:/[a-zA-Z0-9]/},S:{pattern:/[a-zA-Z]/}}},r.jMaskGlobals=r.jMaskGlobals||{},(t=r.jMaskGlobals=r.extend(!0,{},t,r.jMaskGlobals)).dataMask&&r.applyDataMask(),setInterval(function(){r.jMaskGlobals.watchDataMask&&r.applyDataMask()},t.watchInterval)},window.jQuery,window.Zepto);


/// =====================================     PUSHER ====================
var PusherPushNotifications = (function (exports) {
    'use strict';

    function _arrayWithoutHoles(arr) {
        if (Array.isArray(arr)) {
            for (var i = 0, arr2 = new Array(arr.length); i < arr.length; i++) {
                arr2[i] = arr[i];
            }

            return arr2;
        }
    }

    var arrayWithoutHoles = _arrayWithoutHoles;

    function _iterableToArray(iter) {
        if (Symbol.iterator in Object(iter) || Object.prototype.toString.call(iter) === "[object Arguments]") return Array.from(iter);
    }

    var iterableToArray = _iterableToArray;

    function _nonIterableSpread() {
        throw new TypeError("Invalid attempt to spread non-iterable instance");
    }

    var nonIterableSpread = _nonIterableSpread;

    function _toConsumableArray(arr) {
        return arrayWithoutHoles(arr) || iterableToArray(arr) || nonIterableSpread();
    }

    var toConsumableArray = _toConsumableArray;

    function createCommonjsModule(fn, module) {
        return module = { exports: {} }, fn(module, module.exports), module.exports;
    }

    var runtime_1 = createCommonjsModule(function (module) {
        /**
         * Copyright (c) 2014-present, Facebook, Inc.
         *
         * This source code is licensed under the MIT license found in the
         * LICENSE file in the root directory of this source tree.
         */

        var runtime = (function (exports) {

            var Op = Object.prototype;
            var hasOwn = Op.hasOwnProperty;
            var undefined$1; // More compressible than void 0.
            var $Symbol = typeof Symbol === "function" ? Symbol : {};
            var iteratorSymbol = $Symbol.iterator || "@@iterator";
            var asyncIteratorSymbol = $Symbol.asyncIterator || "@@asyncIterator";
            var toStringTagSymbol = $Symbol.toStringTag || "@@toStringTag";

            function wrap(innerFn, outerFn, self, tryLocsList) {
                // If outerFn provided and outerFn.prototype is a Generator, then outerFn.prototype instanceof Generator.
                var protoGenerator = outerFn && outerFn.prototype instanceof Generator ? outerFn : Generator;
                var generator = Object.create(protoGenerator.prototype);
                var context = new Context(tryLocsList || []);

                // The ._invoke method unifies the implementations of the .next,
                // .throw, and .return methods.
                generator._invoke = makeInvokeMethod(innerFn, self, context);

                return generator;
            }
            exports.wrap = wrap;

            // Try/catch helper to minimize deoptimizations. Returns a completion
            // record like context.tryEntries[i].completion. This interface could
            // have been (and was previously) designed to take a closure to be
            // invoked without arguments, but in all the cases we care about we
            // already have an existing method we want to call, so there's no need
            // to create a new function object. We can even get away with assuming
            // the method takes exactly one argument, since that happens to be true
            // in every case, so we don't have to touch the arguments object. The
            // only additional allocation required is the completion record, which
            // has a stable shape and so hopefully should be cheap to allocate.
            function tryCatch(fn, obj, arg) {
                try {
                    return { type: "normal", arg: fn.call(obj, arg) };
                } catch (err) {
                    return { type: "throw", arg: err };
                }
            }

            var GenStateSuspendedStart = "suspendedStart";
            var GenStateSuspendedYield = "suspendedYield";
            var GenStateExecuting = "executing";
            var GenStateCompleted = "completed";

            // Returning this object from the innerFn has the same effect as
            // breaking out of the dispatch switch statement.
            var ContinueSentinel = {};

            // Dummy constructor functions that we use as the .constructor and
            // .constructor.prototype properties for functions that return Generator
            // objects. For full spec compliance, you may wish to configure your
            // minifier not to mangle the names of these two functions.
            function Generator() {}
            function GeneratorFunction() {}
            function GeneratorFunctionPrototype() {}

            // This is a polyfill for %IteratorPrototype% for environments that
            // don't natively support it.
            var IteratorPrototype = {};
            IteratorPrototype[iteratorSymbol] = function () {
                return this;
            };

            var getProto = Object.getPrototypeOf;
            var NativeIteratorPrototype = getProto && getProto(getProto(values([])));
            if (NativeIteratorPrototype &&
                NativeIteratorPrototype !== Op &&
                hasOwn.call(NativeIteratorPrototype, iteratorSymbol)) {
                // This environment has a native %IteratorPrototype%; use it instead
                // of the polyfill.
                IteratorPrototype = NativeIteratorPrototype;
            }

            var Gp = GeneratorFunctionPrototype.prototype =
                Generator.prototype = Object.create(IteratorPrototype);
            GeneratorFunction.prototype = Gp.constructor = GeneratorFunctionPrototype;
            GeneratorFunctionPrototype.constructor = GeneratorFunction;
            GeneratorFunctionPrototype[toStringTagSymbol] =
                GeneratorFunction.displayName = "GeneratorFunction";

            // Helper for defining the .next, .throw, and .return methods of the
            // Iterator interface in terms of a single ._invoke method.
            function defineIteratorMethods(prototype) {
                ["next", "throw", "return"].forEach(function(method) {
                    prototype[method] = function(arg) {
                        return this._invoke(method, arg);
                    };
                });
            }

            exports.isGeneratorFunction = function(genFun) {
                var ctor = typeof genFun === "function" && genFun.constructor;
                return ctor
                    ? ctor === GeneratorFunction ||
                    // For the native GeneratorFunction constructor, the best we can
                    // do is to check its .name property.
                    (ctor.displayName || ctor.name) === "GeneratorFunction"
                    : false;
            };

            exports.mark = function(genFun) {
                if (Object.setPrototypeOf) {
                    Object.setPrototypeOf(genFun, GeneratorFunctionPrototype);
                } else {
                    genFun.__proto__ = GeneratorFunctionPrototype;
                    if (!(toStringTagSymbol in genFun)) {
                        genFun[toStringTagSymbol] = "GeneratorFunction";
                    }
                }
                genFun.prototype = Object.create(Gp);
                return genFun;
            };

            // Within the body of any async function, `await x` is transformed to
            // `yield regeneratorRuntime.awrap(x)`, so that the runtime can test
            // `hasOwn.call(value, "__await")` to determine if the yielded value is
            // meant to be awaited.
            exports.awrap = function(arg) {
                return { __await: arg };
            };

            function AsyncIterator(generator) {
                function invoke(method, arg, resolve, reject) {
                    var record = tryCatch(generator[method], generator, arg);
                    if (record.type === "throw") {
                        reject(record.arg);
                    } else {
                        var result = record.arg;
                        var value = result.value;
                        if (value &&
                            typeof value === "object" &&
                            hasOwn.call(value, "__await")) {
                            return Promise.resolve(value.__await).then(function(value) {
                                invoke("next", value, resolve, reject);
                            }, function(err) {
                                invoke("throw", err, resolve, reject);
                            });
                        }

                        return Promise.resolve(value).then(function(unwrapped) {
                            // When a yielded Promise is resolved, its final value becomes
                            // the .value of the Promise<{value,done}> result for the
                            // current iteration.
                            result.value = unwrapped;
                            resolve(result);
                        }, function(error) {
                            // If a rejected Promise was yielded, throw the rejection back
                            // into the async generator function so it can be handled there.
                            return invoke("throw", error, resolve, reject);
                        });
                    }
                }

                var previousPromise;

                function enqueue(method, arg) {
                    function callInvokeWithMethodAndArg() {
                        return new Promise(function(resolve, reject) {
                            invoke(method, arg, resolve, reject);
                        });
                    }

                    return previousPromise =
                        // If enqueue has been called before, then we want to wait until
                        // all previous Promises have been resolved before calling invoke,
                        // so that results are always delivered in the correct order. If
                        // enqueue has not been called before, then it is important to
                        // call invoke immediately, without waiting on a callback to fire,
                        // so that the async generator function has the opportunity to do
                        // any necessary setup in a predictable way. This predictability
                        // is why the Promise constructor synchronously invokes its
                        // executor callback, and why async functions synchronously
                        // execute code before the first await. Since we implement simple
                        // async functions in terms of async generators, it is especially
                        // important to get this right, even though it requires care.
                        previousPromise ? previousPromise.then(
                            callInvokeWithMethodAndArg,
                            // Avoid propagating failures to Promises returned by later
                            // invocations of the iterator.
                            callInvokeWithMethodAndArg
                        ) : callInvokeWithMethodAndArg();
                }

                // Define the unified helper method that is used to implement .next,
                // .throw, and .return (see defineIteratorMethods).
                this._invoke = enqueue;
            }

            defineIteratorMethods(AsyncIterator.prototype);
            AsyncIterator.prototype[asyncIteratorSymbol] = function () {
                return this;
            };
            exports.AsyncIterator = AsyncIterator;

            // Note that simple async functions are implemented on top of
            // AsyncIterator objects; they just return a Promise for the value of
            // the final result produced by the iterator.
            exports.async = function(innerFn, outerFn, self, tryLocsList) {
                var iter = new AsyncIterator(
                    wrap(innerFn, outerFn, self, tryLocsList)
                );

                return exports.isGeneratorFunction(outerFn)
                    ? iter // If outerFn is a generator, return the full iterator.
                    : iter.next().then(function(result) {
                        return result.done ? result.value : iter.next();
                    });
            };

            function makeInvokeMethod(innerFn, self, context) {
                var state = GenStateSuspendedStart;

                return function invoke(method, arg) {
                    if (state === GenStateExecuting) {
                        throw new Error("Generator is already running");
                    }

                    if (state === GenStateCompleted) {
                        if (method === "throw") {
                            throw arg;
                        }

                        // Be forgiving, per 25.3.3.3.3 of the spec:
                        // https://people.mozilla.org/~jorendorff/es6-draft.html#sec-generatorresume
                        return doneResult();
                    }

                    context.method = method;
                    context.arg = arg;

                    while (true) {
                        var delegate = context.delegate;
                        if (delegate) {
                            var delegateResult = maybeInvokeDelegate(delegate, context);
                            if (delegateResult) {
                                if (delegateResult === ContinueSentinel) continue;
                                return delegateResult;
                            }
                        }

                        if (context.method === "next") {
                            // Setting context._sent for legacy support of Babel's
                            // function.sent implementation.
                            context.sent = context._sent = context.arg;

                        } else if (context.method === "throw") {
                            if (state === GenStateSuspendedStart) {
                                state = GenStateCompleted;
                                throw context.arg;
                            }

                            context.dispatchException(context.arg);

                        } else if (context.method === "return") {
                            context.abrupt("return", context.arg);
                        }

                        state = GenStateExecuting;

                        var record = tryCatch(innerFn, self, context);
                        if (record.type === "normal") {
                            // If an exception is thrown from innerFn, we leave state ===
                            // GenStateExecuting and loop back for another invocation.
                            state = context.done
                                ? GenStateCompleted
                                : GenStateSuspendedYield;

                            if (record.arg === ContinueSentinel) {
                                continue;
                            }

                            return {
                                value: record.arg,
                                done: context.done
                            };

                        } else if (record.type === "throw") {
                            state = GenStateCompleted;
                            // Dispatch the exception by looping back around to the
                            // context.dispatchException(context.arg) call above.
                            context.method = "throw";
                            context.arg = record.arg;
                        }
                    }
                };
            }

            // Call delegate.iterator[context.method](context.arg) and handle the
            // result, either by returning a { value, done } result from the
            // delegate iterator, or by modifying context.method and context.arg,
            // setting context.delegate to null, and returning the ContinueSentinel.
            function maybeInvokeDelegate(delegate, context) {
                var method = delegate.iterator[context.method];
                if (method === undefined$1) {
                    // A .throw or .return when the delegate iterator has no .throw
                    // method always terminates the yield* loop.
                    context.delegate = null;

                    if (context.method === "throw") {
                        // Note: ["return"] must be used for ES3 parsing compatibility.
                        if (delegate.iterator["return"]) {
                            // If the delegate iterator has a return method, give it a
                            // chance to clean up.
                            context.method = "return";
                            context.arg = undefined$1;
                            maybeInvokeDelegate(delegate, context);

                            if (context.method === "throw") {
                                // If maybeInvokeDelegate(context) changed context.method from
                                // "return" to "throw", let that override the TypeError below.
                                return ContinueSentinel;
                            }
                        }

                        context.method = "throw";
                        context.arg = new TypeError(
                            "The iterator does not provide a 'throw' method");
                    }

                    return ContinueSentinel;
                }

                var record = tryCatch(method, delegate.iterator, context.arg);

                if (record.type === "throw") {
                    context.method = "throw";
                    context.arg = record.arg;
                    context.delegate = null;
                    return ContinueSentinel;
                }

                var info = record.arg;

                if (! info) {
                    context.method = "throw";
                    context.arg = new TypeError("iterator result is not an object");
                    context.delegate = null;
                    return ContinueSentinel;
                }

                if (info.done) {
                    // Assign the result of the finished delegate to the temporary
                    // variable specified by delegate.resultName (see delegateYield).
                    context[delegate.resultName] = info.value;

                    // Resume execution at the desired location (see delegateYield).
                    context.next = delegate.nextLoc;

                    // If context.method was "throw" but the delegate handled the
                    // exception, let the outer generator proceed normally. If
                    // context.method was "next", forget context.arg since it has been
                    // "consumed" by the delegate iterator. If context.method was
                    // "return", allow the original .return call to continue in the
                    // outer generator.
                    if (context.method !== "return") {
                        context.method = "next";
                        context.arg = undefined$1;
                    }

                } else {
                    // Re-yield the result returned by the delegate method.
                    return info;
                }

                // The delegate iterator is finished, so forget it and continue with
                // the outer generator.
                context.delegate = null;
                return ContinueSentinel;
            }

            // Define Generator.prototype.{next,throw,return} in terms of the
            // unified ._invoke helper method.
            defineIteratorMethods(Gp);

            Gp[toStringTagSymbol] = "Generator";

            // A Generator should always return itself as the iterator object when the
            // @@iterator function is called on it. Some browsers' implementations of the
            // iterator prototype chain incorrectly implement this, causing the Generator
            // object to not be returned from this call. This ensures that doesn't happen.
            // See https://github.com/facebook/regenerator/issues/274 for more details.
            Gp[iteratorSymbol] = function() {
                return this;
            };

            Gp.toString = function() {
                return "[object Generator]";
            };

            function pushTryEntry(locs) {
                var entry = { tryLoc: locs[0] };

                if (1 in locs) {
                    entry.catchLoc = locs[1];
                }

                if (2 in locs) {
                    entry.finallyLoc = locs[2];
                    entry.afterLoc = locs[3];
                }

                this.tryEntries.push(entry);
            }

            function resetTryEntry(entry) {
                var record = entry.completion || {};
                record.type = "normal";
                delete record.arg;
                entry.completion = record;
            }

            function Context(tryLocsList) {
                // The root entry object (effectively a try statement without a catch
                // or a finally block) gives us a place to store values thrown from
                // locations where there is no enclosing try statement.
                this.tryEntries = [{ tryLoc: "root" }];
                tryLocsList.forEach(pushTryEntry, this);
                this.reset(true);
            }

            exports.keys = function(object) {
                var keys = [];
                for (var key in object) {
                    keys.push(key);
                }
                keys.reverse();

                // Rather than returning an object with a next method, we keep
                // things simple and return the next function itself.
                return function next() {
                    while (keys.length) {
                        var key = keys.pop();
                        if (key in object) {
                            next.value = key;
                            next.done = false;
                            return next;
                        }
                    }

                    // To avoid creating an additional object, we just hang the .value
                    // and .done properties off the next function object itself. This
                    // also ensures that the minifier will not anonymize the function.
                    next.done = true;
                    return next;
                };
            };

            function values(iterable) {
                if (iterable) {
                    var iteratorMethod = iterable[iteratorSymbol];
                    if (iteratorMethod) {
                        return iteratorMethod.call(iterable);
                    }

                    if (typeof iterable.next === "function") {
                        return iterable;
                    }

                    if (!isNaN(iterable.length)) {
                        var i = -1, next = function next() {
                            while (++i < iterable.length) {
                                if (hasOwn.call(iterable, i)) {
                                    next.value = iterable[i];
                                    next.done = false;
                                    return next;
                                }
                            }

                            next.value = undefined$1;
                            next.done = true;

                            return next;
                        };

                        return next.next = next;
                    }
                }

                // Return an iterator with no values.
                return { next: doneResult };
            }
            exports.values = values;

            function doneResult() {
                return { value: undefined$1, done: true };
            }

            Context.prototype = {
                constructor: Context,

                reset: function(skipTempReset) {
                    this.prev = 0;
                    this.next = 0;
                    // Resetting context._sent for legacy support of Babel's
                    // function.sent implementation.
                    this.sent = this._sent = undefined$1;
                    this.done = false;
                    this.delegate = null;

                    this.method = "next";
                    this.arg = undefined$1;

                    this.tryEntries.forEach(resetTryEntry);

                    if (!skipTempReset) {
                        for (var name in this) {
                            // Not sure about the optimal order of these conditions:
                            if (name.charAt(0) === "t" &&
                                hasOwn.call(this, name) &&
                                !isNaN(+name.slice(1))) {
                                this[name] = undefined$1;
                            }
                        }
                    }
                },

                stop: function() {
                    this.done = true;

                    var rootEntry = this.tryEntries[0];
                    var rootRecord = rootEntry.completion;
                    if (rootRecord.type === "throw") {
                        throw rootRecord.arg;
                    }

                    return this.rval;
                },

                dispatchException: function(exception) {
                    if (this.done) {
                        throw exception;
                    }

                    var context = this;
                    function handle(loc, caught) {
                        record.type = "throw";
                        record.arg = exception;
                        context.next = loc;

                        if (caught) {
                            // If the dispatched exception was caught by a catch block,
                            // then let that catch block handle the exception normally.
                            context.method = "next";
                            context.arg = undefined$1;
                        }

                        return !! caught;
                    }

                    for (var i = this.tryEntries.length - 1; i >= 0; --i) {
                        var entry = this.tryEntries[i];
                        var record = entry.completion;

                        if (entry.tryLoc === "root") {
                            // Exception thrown outside of any try block that could handle
                            // it, so set the completion value of the entire function to
                            // throw the exception.
                            return handle("end");
                        }

                        if (entry.tryLoc <= this.prev) {
                            var hasCatch = hasOwn.call(entry, "catchLoc");
                            var hasFinally = hasOwn.call(entry, "finallyLoc");

                            if (hasCatch && hasFinally) {
                                if (this.prev < entry.catchLoc) {
                                    return handle(entry.catchLoc, true);
                                } else if (this.prev < entry.finallyLoc) {
                                    return handle(entry.finallyLoc);
                                }

                            } else if (hasCatch) {
                                if (this.prev < entry.catchLoc) {
                                    return handle(entry.catchLoc, true);
                                }

                            } else if (hasFinally) {
                                if (this.prev < entry.finallyLoc) {
                                    return handle(entry.finallyLoc);
                                }

                            } else {
                                throw new Error("try statement without catch or finally");
                            }
                        }
                    }
                },

                abrupt: function(type, arg) {
                    for (var i = this.tryEntries.length - 1; i >= 0; --i) {
                        var entry = this.tryEntries[i];
                        if (entry.tryLoc <= this.prev &&
                            hasOwn.call(entry, "finallyLoc") &&
                            this.prev < entry.finallyLoc) {
                            var finallyEntry = entry;
                            break;
                        }
                    }

                    if (finallyEntry &&
                        (type === "break" ||
                            type === "continue") &&
                        finallyEntry.tryLoc <= arg &&
                        arg <= finallyEntry.finallyLoc) {
                        // Ignore the finally entry if control is not jumping to a
                        // location outside the try/catch block.
                        finallyEntry = null;
                    }

                    var record = finallyEntry ? finallyEntry.completion : {};
                    record.type = type;
                    record.arg = arg;

                    if (finallyEntry) {
                        this.method = "next";
                        this.next = finallyEntry.finallyLoc;
                        return ContinueSentinel;
                    }

                    return this.complete(record);
                },

                complete: function(record, afterLoc) {
                    if (record.type === "throw") {
                        throw record.arg;
                    }

                    if (record.type === "break" ||
                        record.type === "continue") {
                        this.next = record.arg;
                    } else if (record.type === "return") {
                        this.rval = this.arg = record.arg;
                        this.method = "return";
                        this.next = "end";
                    } else if (record.type === "normal" && afterLoc) {
                        this.next = afterLoc;
                    }

                    return ContinueSentinel;
                },

                finish: function(finallyLoc) {
                    for (var i = this.tryEntries.length - 1; i >= 0; --i) {
                        var entry = this.tryEntries[i];
                        if (entry.finallyLoc === finallyLoc) {
                            this.complete(entry.completion, entry.afterLoc);
                            resetTryEntry(entry);
                            return ContinueSentinel;
                        }
                    }
                },

                "catch": function(tryLoc) {
                    for (var i = this.tryEntries.length - 1; i >= 0; --i) {
                        var entry = this.tryEntries[i];
                        if (entry.tryLoc === tryLoc) {
                            var record = entry.completion;
                            if (record.type === "throw") {
                                var thrown = record.arg;
                                resetTryEntry(entry);
                            }
                            return thrown;
                        }
                    }

                    // The context.catch method must only be called with a location
                    // argument that corresponds to a known catch block.
                    throw new Error("illegal catch attempt");
                },

                delegateYield: function(iterable, resultName, nextLoc) {
                    this.delegate = {
                        iterator: values(iterable),
                        resultName: resultName,
                        nextLoc: nextLoc
                    };

                    if (this.method === "next") {
                        // Deliberately forget the last sent value so that we don't
                        // accidentally pass it on to the delegate.
                        this.arg = undefined$1;
                    }

                    return ContinueSentinel;
                }
            };

            // Regardless of whether this script is executing as a CommonJS module
            // or not, return the runtime object so that we can declare the variable
            // regeneratorRuntime in the outer scope, which allows this module to be
            // injected easily by `bin/regenerator --include-runtime script.js`.
            return exports;

        }(
            // If this script is executing as a CommonJS module, use module.exports
            // as the regeneratorRuntime namespace. Otherwise create a new empty
            // object. Either way, the resulting object will be used to initialize
            // the regeneratorRuntime variable at the top of this file.
            module.exports
        ));

        try {
            regeneratorRuntime = runtime;
        } catch (accidentalStrictMode) {
            // This module should not be running in strict mode, so the above
            // assignment should always work unless something is misconfigured. Just
            // in case runtime.js accidentally runs in strict mode, we can escape
            // strict mode using a global Function call. This could conceivably fail
            // if a Content Security Policy forbids using Function, but in that case
            // the proper solution is to fix the accidental strict mode problem. If
            // you've misconfigured your bundler to force strict mode and applied a
            // CSP to forbid Function, and you're not willing to fix either of those
            // problems, please detail your unique predicament in a GitHub issue.
            Function("r", "regeneratorRuntime = r")(runtime);
        }
    });

    var regenerator = runtime_1;

    function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) {
        try {
            var info = gen[key](arg);
            var value = info.value;
        } catch (error) {
            reject(error);
            return;
        }

        if (info.done) {
            resolve(value);
        } else {
            Promise.resolve(value).then(_next, _throw);
        }
    }

    function _asyncToGenerator(fn) {
        return function () {
            var self = this,
                args = arguments;
            return new Promise(function (resolve, reject) {
                var gen = fn.apply(self, args);

                function _next(value) {
                    asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value);
                }

                function _throw(err) {
                    asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err);
                }

                _next(undefined);
            });
        };
    }

    var asyncToGenerator = _asyncToGenerator;

    function _classCallCheck(instance, Constructor) {
        if (!(instance instanceof Constructor)) {
            throw new TypeError("Cannot call a class as a function");
        }
    }

    var classCallCheck = _classCallCheck;

    function _defineProperties(target, props) {
        for (var i = 0; i < props.length; i++) {
            var descriptor = props[i];
            descriptor.enumerable = descriptor.enumerable || false;
            descriptor.configurable = true;
            if ("value" in descriptor) descriptor.writable = true;
            Object.defineProperty(target, descriptor.key, descriptor);
        }
    }

    function _createClass(Constructor, protoProps, staticProps) {
        if (protoProps) _defineProperties(Constructor.prototype, protoProps);
        if (staticProps) _defineProperties(Constructor, staticProps);
        return Constructor;
    }

    var createClass = _createClass;

    function _defineProperty(obj, key, value) {
        if (key in obj) {
            Object.defineProperty(obj, key, {
                value: value,
                enumerable: true,
                configurable: true,
                writable: true
            });
        } else {
            obj[key] = value;
        }

        return obj;
    }

    var defineProperty = _defineProperty;

    function _objectSpread(target) {
        for (var i = 1; i < arguments.length; i++) {
            var source = arguments[i] != null ? arguments[i] : {};
            var ownKeys = Object.keys(source);

            if (typeof Object.getOwnPropertySymbols === 'function') {
                ownKeys = ownKeys.concat(Object.getOwnPropertySymbols(source).filter(function (sym) {
                    return Object.getOwnPropertyDescriptor(source, sym).enumerable;
                }));
            }

            ownKeys.forEach(function (key) {
                defineProperty(target, key, source[key]);
            });
        }

        return target;
    }

    var objectSpread = _objectSpread;

    function doRequest(_ref) {
        var method = _ref.method,
            path = _ref.path,
            _ref$body = _ref.body,
            body = _ref$body === void 0 ? null : _ref$body,
            _ref$headers = _ref.headers,
            headers = _ref$headers === void 0 ? {} : _ref$headers;
        var options = {
            method: method,
            headers: headers
        };

        if (body !== null) {
            options.body = JSON.stringify(body);
            options.headers = objectSpread({
                'Content-Type': 'application/json'
            }, headers);
        }

        return fetch(path, options).then(
            /*#__PURE__*/
            function () {
                var _ref2 = asyncToGenerator(
                    /*#__PURE__*/
                    regenerator.mark(function _callee(response) {
                        return regenerator.wrap(function _callee$(_context) {
                            while (1) {
                                switch (_context.prev = _context.next) {
                                    case 0:
                                        if (response.ok) {
                                            _context.next = 3;
                                            break;
                                        }

                                        _context.next = 3;
                                        return handleError(response);

                                    case 3:
                                        _context.prev = 3;
                                        _context.next = 6;
                                        return response.json();

                                    case 6:
                                        return _context.abrupt("return", _context.sent);

                                    case 9:
                                        _context.prev = 9;
                                        _context.t0 = _context["catch"](3);
                                        return _context.abrupt("return", null);

                                    case 12:
                                    case "end":
                                        return _context.stop();
                                }
                            }
                        }, _callee, null, [[3, 9]]);
                    }));

                return function (_x) {
                    return _ref2.apply(this, arguments);
                };
            }());
    }

    function handleError(_x2) {
        return _handleError.apply(this, arguments);
    }

    function _handleError() {
        _handleError = asyncToGenerator(
            /*#__PURE__*/
            regenerator.mark(function _callee2(response) {
                var errorMessage, _ref3, _ref3$error, error, _ref3$description, description;

                return regenerator.wrap(function _callee2$(_context2) {
                    while (1) {
                        switch (_context2.prev = _context2.next) {
                            case 0:
                                _context2.prev = 0;
                                _context2.next = 3;
                                return response.json();

                            case 3:
                                _ref3 = _context2.sent;
                                _ref3$error = _ref3.error;
                                error = _ref3$error === void 0 ? 'Unknown error' : _ref3$error;
                                _ref3$description = _ref3.description;
                                description = _ref3$description === void 0 ? 'No description' : _ref3$description;
                                errorMessage = "Unexpected status code ".concat(response.status, ": ").concat(error, ", ").concat(description);
                                _context2.next = 14;
                                break;

                            case 11:
                                _context2.prev = 11;
                                _context2.t0 = _context2["catch"](0);
                                errorMessage = "Unexpected status code ".concat(response.status, ": Cannot parse error response");

                            case 14:
                                throw new Error(errorMessage);

                            case 15:
                            case "end":
                                return _context2.stop();
                        }
                    }
                }, _callee2, null, [[0, 11]]);
            }));
        return _handleError.apply(this, arguments);
    }

    var TokenProvider =
        /*#__PURE__*/
        function () {
            function TokenProvider() {
                var _ref = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {},
                    url = _ref.url,
                    queryParams = _ref.queryParams,
                    headers = _ref.headers;

                classCallCheck(this, TokenProvider);

                this.url = url;
                this.queryParams = queryParams;
                this.headers = headers;
            }

            createClass(TokenProvider, [{
                key: "fetchToken",
                value: function () {
                    var _fetchToken = asyncToGenerator(
                        /*#__PURE__*/
                        regenerator.mark(function _callee(userId) {
                            var queryParams, encodedParams, options, response;
                            return regenerator.wrap(function _callee$(_context) {
                                while (1) {
                                    switch (_context.prev = _context.next) {
                                        case 0:
                                            queryParams = objectSpread({
                                                user_id: userId
                                            }, this.queryParams);
                                            encodedParams = Object.entries(queryParams).map(function (kv) {
                                                return kv.map(encodeURIComponent).join('=');
                                            }).join('&');
                                            options = {
                                                method: 'GET',
                                                path: "".concat(this.url, "?").concat(encodedParams),
                                                headers: this.headers
                                            };
                                            _context.next = 5;
                                            return doRequest(options);

                                        case 5:
                                            response = _context.sent;
                                            return _context.abrupt("return", response);

                                        case 7:
                                        case "end":
                                            return _context.stop();
                                    }
                                }
                            }, _callee, this);
                        }));

                    function fetchToken(_x) {
                        return _fetchToken.apply(this, arguments);
                    }

                    return fetchToken;
                }()
            }]);

            return TokenProvider;
        }();

    var DeviceStateStore =
        /*#__PURE__*/
        function () {
            function DeviceStateStore(instanceId) {
                classCallCheck(this, DeviceStateStore);

                this._instanceId = instanceId;
                this._dbConn = null;
            }

            createClass(DeviceStateStore, [{
                key: "connect",
                value: function connect() {
                    var _this = this;

                    return new Promise(function (resolve, reject) {
                        var request = indexedDB.open(_this._dbName);

                        request.onsuccess = function (event) {
                            var db = event.target.result;
                            _this._dbConn = db;

                            _this._readState().then(function (state) {
                                return state === null ? _this.clear() : Promise.resolve();
                            }).then(resolve);
                        };

                        request.onupgradeneeded = function (event) {
                            var db = event.target.result;
                            db.createObjectStore('beams', {
                                keyPath: 'instance_id'
                            });
                        };

                        request.onerror = function (event) {
                            var error = new Error("Database error: ".concat(event.target.error));
                            reject(error);
                        };
                    });
                }
            }, {
                key: "clear",
                value: function clear() {
                    return this._writeState({
                        instance_id: this._instanceId,
                        device_id: null,
                        token: null,
                        user_id: null
                    });
                }
            }, {
                key: "_readState",
                value: function _readState() {
                    var _this2 = this;

                    if (!this.isConnected) {
                        throw new Error('Cannot read value: DeviceStateStore not connected to IndexedDB');
                    }

                    return new Promise(function (resolve, reject) {
                        var request = _this2._dbConn.transaction('beams').objectStore('beams').get(_this2._instanceId);

                        request.onsuccess = function (event) {
                            var state = event.target.result;

                            if (!state) {
                                resolve(null);
                            }

                            resolve(state);
                        };

                        request.onerror = function (event) {
                            reject(event.target.error);
                        };
                    });
                }
            }, {
                key: "_readProperty",
                value: function () {
                    var _readProperty2 = asyncToGenerator(
                        /*#__PURE__*/
                        regenerator.mark(function _callee(name) {
                            var state;
                            return regenerator.wrap(function _callee$(_context) {
                                while (1) {
                                    switch (_context.prev = _context.next) {
                                        case 0:
                                            _context.next = 2;
                                            return this._readState();

                                        case 2:
                                            state = _context.sent;

                                            if (!(state === null)) {
                                                _context.next = 5;
                                                break;
                                            }

                                            return _context.abrupt("return", null);

                                        case 5:
                                            return _context.abrupt("return", state[name] || null);

                                        case 6:
                                        case "end":
                                            return _context.stop();
                                    }
                                }
                            }, _callee, this);
                        }));

                    function _readProperty(_x) {
                        return _readProperty2.apply(this, arguments);
                    }

                    return _readProperty;
                }()
            }, {
                key: "_writeState",
                value: function _writeState(state) {
                    var _this3 = this;

                    if (!this.isConnected) {
                        throw new Error('Cannot write value: DeviceStateStore not connected to IndexedDB');
                    }

                    return new Promise(function (resolve, reject) {
                        var request = _this3._dbConn.transaction('beams', 'readwrite').objectStore('beams').put(state);

                        request.onsuccess = function (_) {
                            resolve();
                        };

                        request.onerror = function (event) {
                            reject(event.target.error);
                        };
                    });
                }
            }, {
                key: "_writeProperty",
                value: function () {
                    var _writeProperty2 = asyncToGenerator(
                        /*#__PURE__*/
                        regenerator.mark(function _callee2(name, value) {
                            var state;
                            return regenerator.wrap(function _callee2$(_context2) {
                                while (1) {
                                    switch (_context2.prev = _context2.next) {
                                        case 0:
                                            _context2.next = 2;
                                            return this._readState();

                                        case 2:
                                            state = _context2.sent;
                                            state[name] = value;
                                            _context2.next = 6;
                                            return this._writeState(state);

                                        case 6:
                                        case "end":
                                            return _context2.stop();
                                    }
                                }
                            }, _callee2, this);
                        }));

                    function _writeProperty(_x2, _x3) {
                        return _writeProperty2.apply(this, arguments);
                    }

                    return _writeProperty;
                }()
            }, {
                key: "getToken",
                value: function getToken() {
                    return this._readProperty('token');
                }
            }, {
                key: "setToken",
                value: function setToken(token) {
                    return this._writeProperty('token', token);
                }
            }, {
                key: "getDeviceId",
                value: function getDeviceId() {
                    return this._readProperty('device_id');
                }
            }, {
                key: "setDeviceId",
                value: function setDeviceId(deviceId) {
                    return this._writeProperty('device_id', deviceId);
                }
            }, {
                key: "getUserId",
                value: function getUserId() {
                    return this._readProperty('user_id');
                }
            }, {
                key: "setUserId",
                value: function setUserId(userId) {
                    return this._writeProperty('user_id', userId);
                }
            }, {
                key: "getLastSeenSdkVersion",
                value: function getLastSeenSdkVersion() {
                    return this._readProperty('last_seen_sdk_version');
                }
            }, {
                key: "setLastSeenSdkVersion",
                value: function setLastSeenSdkVersion(sdkVersion) {
                    return this._writeProperty('last_seen_sdk_version', sdkVersion);
                }
            }, {
                key: "getLastSeenUserAgent",
                value: function getLastSeenUserAgent() {
                    return this._readProperty('last_seen_user_agent');
                }
            }, {
                key: "setLastSeenUserAgent",
                value: function setLastSeenUserAgent(userAgent) {
                    return this._writeProperty('last_seen_user_agent', userAgent);
                }
            }, {
                key: "_dbName",
                get: function get() {
                    return "beams-".concat(this._instanceId);
                }
            }, {
                key: "isConnected",
                get: function get() {
                    return this._dbConn !== null;
                }
            }]);

            return DeviceStateStore;
        }();

    var version = "1.0.3";

    var INTERESTS_REGEX = new RegExp('^(_|\\-|=|@|,|\\.|;|[A-Z]|[a-z]|[0-9])*$');
    var MAX_INTEREST_LENGTH = 164;
    var MAX_INTERESTS_NUM = 5000;
    var SERVICE_WORKER_URL = "/service-worker.js?pusherBeamsWebSDKVersion=".concat(version);
    var RegistrationState = Object.freeze({
        PERMISSION_PROMPT_REQUIRED: 'PERMISSION_PROMPT_REQUIRED',
        PERMISSION_GRANTED_NOT_REGISTERED_WITH_BEAMS: 'PERMISSION_GRANTED_NOT_REGISTERED_WITH_BEAMS',
        PERMISSION_GRANTED_REGISTERED_WITH_BEAMS: 'PERMISSION_GRANTED_REGISTERED_WITH_BEAMS',
        PERMISSION_DENIED: 'PERMISSION_DENIED'
    });
    var Client =
        /*#__PURE__*/
        function () {
            function Client(config) {
                classCallCheck(this, Client);

                if (!config) {
                    throw new Error('Config object required');
                }

                var instanceId = config.instanceId,
                    _config$endpointOverr = config.endpointOverride,
                    endpointOverride = _config$endpointOverr === void 0 ? null : _config$endpointOverr,
                    _config$serviceWorker = config.serviceWorkerRegistration,
                    serviceWorkerRegistration = _config$serviceWorker === void 0 ? null : _config$serviceWorker;

                if (instanceId === undefined) {
                    throw new Error('Instance ID is required');
                }

                if (typeof instanceId !== 'string') {
                    throw new Error('Instance ID must be a string');
                }

                if (instanceId.length === 0) {
                    throw new Error('Instance ID cannot be empty');
                }

                if (!('indexedDB' in window)) {
                    throw new Error('Pusher Beams does not support this browser version (IndexedDB not supported)');
                }

                if (!window.isSecureContext) {
                    throw new Error('Pusher Beams relies on Service Workers, which only work in secure contexts. Check that your page is being served from localhost/over HTTPS');
                }

                if (!('serviceWorker' in navigator)) {
                    throw new Error('Pusher Beams does not support this browser version (Service Workers not supported)');
                }

                if (!('PushManager' in window)) {
                    throw new Error('Pusher Beams does not support this browser version (Web Push not supported)');
                }

                if (serviceWorkerRegistration) {
                    var serviceWorkerScope = serviceWorkerRegistration.scope;
                    var currentURL = window.location.href;
                    var scopeMatchesCurrentPage = currentURL.startsWith(serviceWorkerScope);

                    if (!scopeMatchesCurrentPage) {
                        throw new Error("Could not initialize Pusher web push: current page not in serviceWorkerRegistration scope (".concat(serviceWorkerScope, ")"));
                    }
                }

                this.instanceId = instanceId;
                this._deviceId = null;
                this._token = null;
                this._userId = null;
                this._serviceWorkerRegistration = serviceWorkerRegistration;
                this._deviceStateStore = new DeviceStateStore(instanceId);
                this._endpoint = endpointOverride; // Internal only

                this._ready = this._init();
            }

            createClass(Client, [{
                key: "_init",
                value: function () {
                    var _init2 = asyncToGenerator(
                        /*#__PURE__*/
                        regenerator.mark(function _callee() {
                            return regenerator.wrap(function _callee$(_context) {
                                while (1) {
                                    switch (_context.prev = _context.next) {
                                        case 0:
                                            if (!(this._deviceId !== null)) {
                                                _context.next = 2;
                                                break;
                                            }

                                            return _context.abrupt("return");

                                        case 2:
                                            _context.next = 4;
                                            return this._deviceStateStore.connect();

                                        case 4:
                                            if (!this._serviceWorkerRegistration) {
                                                _context.next = 9;
                                                break;
                                            }

                                            _context.next = 7;
                                            return window.navigator.serviceWorker.ready;

                                        case 7:
                                            _context.next = 12;
                                            break;

                                        case 9:
                                            _context.next = 11;
                                            return getServiceWorkerRegistration();

                                        case 11:
                                            this._serviceWorkerRegistration = _context.sent;

                                        case 12:
                                            _context.next = 14;
                                            return this._detectSubscriptionChange();

                                        case 14:
                                            _context.next = 16;
                                            return this._deviceStateStore.getDeviceId();

                                        case 16:
                                            this._deviceId = _context.sent;
                                            _context.next = 19;
                                            return this._deviceStateStore.getToken();

                                        case 19:
                                            this._token = _context.sent;
                                            _context.next = 22;
                                            return this._deviceStateStore.getUserId();

                                        case 22:
                                            this._userId = _context.sent;

                                        case 23:
                                        case "end":
                                            return _context.stop();
                                    }
                                }
                            }, _callee, this);
                        }));

                    function _init() {
                        return _init2.apply(this, arguments);
                    }

                    return _init;
                }() // Ensure SDK is loaded and is consistent

            }, {
                key: "_resolveSDKState",
                value: function () {
                    var _resolveSDKState2 = asyncToGenerator(
                        /*#__PURE__*/
                        regenerator.mark(function _callee2() {
                            return regenerator.wrap(function _callee2$(_context2) {
                                while (1) {
                                    switch (_context2.prev = _context2.next) {
                                        case 0:
                                            _context2.next = 2;
                                            return this._ready;

                                        case 2:
                                            _context2.next = 4;
                                            return this._detectSubscriptionChange();

                                        case 4:
                                        case "end":
                                            return _context2.stop();
                                    }
                                }
                            }, _callee2, this);
                        }));

                    function _resolveSDKState() {
                        return _resolveSDKState2.apply(this, arguments);
                    }

                    return _resolveSDKState;
                }()
            }, {
                key: "_detectSubscriptionChange",
                value: function () {
                    var _detectSubscriptionChange2 = asyncToGenerator(
                        /*#__PURE__*/
                        regenerator.mark(function _callee3() {
                            var storedToken, actualToken, pushTokenHasChanged;
                            return regenerator.wrap(function _callee3$(_context3) {
                                while (1) {
                                    switch (_context3.prev = _context3.next) {
                                        case 0:
                                            _context3.next = 2;
                                            return this._deviceStateStore.getToken();

                                        case 2:
                                            storedToken = _context3.sent;
                                            _context3.next = 5;
                                            return getWebPushToken(this._serviceWorkerRegistration);

                                        case 5:
                                            actualToken = _context3.sent;
                                            pushTokenHasChanged = storedToken !== actualToken;

                                            if (!pushTokenHasChanged) {
                                                _context3.next = 13;
                                                break;
                                            }

                                            _context3.next = 10;
                                            return this._deviceStateStore.clear();

                                        case 10:
                                            this._deviceId = null;
                                            this._token = null;
                                            this._userId = null;

                                        case 13:
                                        case "end":
                                            return _context3.stop();
                                    }
                                }
                            }, _callee3, this);
                        }));

                    function _detectSubscriptionChange() {
                        return _detectSubscriptionChange2.apply(this, arguments);
                    }

                    return _detectSubscriptionChange;
                }()
            }, {
                key: "getDeviceId",
                value: function () {
                    var _getDeviceId = asyncToGenerator(
                        /*#__PURE__*/
                        regenerator.mark(function _callee4() {
                            var _this = this;

                            return regenerator.wrap(function _callee4$(_context4) {
                                while (1) {
                                    switch (_context4.prev = _context4.next) {
                                        case 0:
                                            _context4.next = 2;
                                            return this._resolveSDKState();

                                        case 2:
                                            return _context4.abrupt("return", this._ready.then(function () {
                                                return _this._deviceId;
                                            }));

                                        case 3:
                                        case "end":
                                            return _context4.stop();
                                    }
                                }
                            }, _callee4, this);
                        }));

                    function getDeviceId() {
                        return _getDeviceId.apply(this, arguments);
                    }

                    return getDeviceId;
                }()
            }, {
                key: "getToken",
                value: function () {
                    var _getToken = asyncToGenerator(
                        /*#__PURE__*/
                        regenerator.mark(function _callee5() {
                            var _this2 = this;

                            return regenerator.wrap(function _callee5$(_context5) {
                                while (1) {
                                    switch (_context5.prev = _context5.next) {
                                        case 0:
                                            _context5.next = 2;
                                            return this._resolveSDKState();

                                        case 2:
                                            return _context5.abrupt("return", this._ready.then(function () {
                                                return _this2._token;
                                            }));

                                        case 3:
                                        case "end":
                                            return _context5.stop();
                                    }
                                }
                            }, _callee5, this);
                        }));

                    function getToken() {
                        return _getToken.apply(this, arguments);
                    }

                    return getToken;
                }()
            }, {
                key: "getUserId",
                value: function () {
                    var _getUserId = asyncToGenerator(
                        /*#__PURE__*/
                        regenerator.mark(function _callee6() {
                            var _this3 = this;

                            return regenerator.wrap(function _callee6$(_context6) {
                                while (1) {
                                    switch (_context6.prev = _context6.next) {
                                        case 0:
                                            _context6.next = 2;
                                            return this._resolveSDKState();

                                        case 2:
                                            return _context6.abrupt("return", this._ready.then(function () {
                                                return _this3._userId;
                                            }));

                                        case 3:
                                        case "end":
                                            return _context6.stop();
                                    }
                                }
                            }, _callee6, this);
                        }));

                    function getUserId() {
                        return _getUserId.apply(this, arguments);
                    }

                    return getUserId;
                }()
            }, {
                key: "_throwIfNotStarted",
                value: function _throwIfNotStarted(message) {
                    if (!this._deviceId) {
                        throw new Error("".concat(message, ". SDK not registered with Beams. Did you call .start?"));
                    }
                }
            }, {
                key: "start",
                value: function () {
                    var _start = asyncToGenerator(
                        /*#__PURE__*/
                        regenerator.mark(function _callee7() {
                            var _ref, publicKey, token, deviceId;

                            return regenerator.wrap(function _callee7$(_context7) {
                                while (1) {
                                    switch (_context7.prev = _context7.next) {
                                        case 0:
                                            _context7.next = 2;
                                            return this._resolveSDKState();

                                        case 2:
                                            if (isSupportedBrowser()) {
                                                _context7.next = 4;
                                                break;
                                            }

                                            return _context7.abrupt("return", this);

                                        case 4:
                                            if (!(this._deviceId !== null)) {
                                                _context7.next = 6;
                                                break;
                                            }

                                            return _context7.abrupt("return", this);

                                        case 6:
                                            _context7.next = 8;
                                            return this._getPublicKey();

                                        case 8:
                                            _ref = _context7.sent;
                                            publicKey = _ref.vapidPublicKey;
                                            _context7.next = 12;
                                            return this._getPushToken(publicKey);

                                        case 12:
                                            token = _context7.sent;
                                            _context7.next = 15;
                                            return this._registerDevice(token);

                                        case 15:
                                            deviceId = _context7.sent;
                                            _context7.next = 18;
                                            return this._deviceStateStore.setToken(token);

                                        case 18:
                                            _context7.next = 20;
                                            return this._deviceStateStore.setDeviceId(deviceId);

                                        case 20:
                                            _context7.next = 22;
                                            return this._deviceStateStore.setLastSeenSdkVersion(version);

                                        case 22:
                                            _context7.next = 24;
                                            return this._deviceStateStore.setLastSeenUserAgent(window.navigator.userAgent);

                                        case 24:
                                            this._token = token;
                                            this._deviceId = deviceId;
                                            return _context7.abrupt("return", this);

                                        case 27:
                                        case "end":
                                            return _context7.stop();
                                    }
                                }
                            }, _callee7, this);
                        }));

                    function start() {
                        return _start.apply(this, arguments);
                    }

                    return start;
                }()
            }, {
                key: "getRegistrationState",
                value: function () {
                    var _getRegistrationState = asyncToGenerator(
                        /*#__PURE__*/
                        regenerator.mark(function _callee8() {
                            return regenerator.wrap(function _callee8$(_context8) {
                                while (1) {
                                    switch (_context8.prev = _context8.next) {
                                        case 0:
                                            _context8.next = 2;
                                            return this._resolveSDKState();

                                        case 2:
                                            if (!(Notification.permission === 'denied')) {
                                                _context8.next = 4;
                                                break;
                                            }

                                            return _context8.abrupt("return", RegistrationState.PERMISSION_DENIED);

                                        case 4:
                                            if (!(Notification.permission === 'granted' && this._deviceId !== null)) {
                                                _context8.next = 6;
                                                break;
                                            }

                                            return _context8.abrupt("return", RegistrationState.PERMISSION_GRANTED_REGISTERED_WITH_BEAMS);

                                        case 6:
                                            if (!(Notification.permission === 'granted' && this._deviceId === null)) {
                                                _context8.next = 8;
                                                break;
                                            }

                                            return _context8.abrupt("return", RegistrationState.PERMISSION_GRANTED_NOT_REGISTERED_WITH_BEAMS);

                                        case 8:
                                            return _context8.abrupt("return", RegistrationState.PERMISSION_PROMPT_REQUIRED);

                                        case 9:
                                        case "end":
                                            return _context8.stop();
                                    }
                                }
                            }, _callee8, this);
                        }));

                    function getRegistrationState() {
                        return _getRegistrationState.apply(this, arguments);
                    }

                    return getRegistrationState;
                }()
            }, {
                key: "addDeviceInterest",
                value: function () {
                    var _addDeviceInterest = asyncToGenerator(
                        /*#__PURE__*/
                        regenerator.mark(function _callee9(interest) {
                            var path, options;
                            return regenerator.wrap(function _callee9$(_context9) {
                                while (1) {
                                    switch (_context9.prev = _context9.next) {
                                        case 0:
                                            _context9.next = 2;
                                            return this._resolveSDKState();

                                        case 2:
                                            this._throwIfNotStarted('Could not add Device Interest');

                                            validateInterestName(interest);
                                            path = "".concat(this._baseURL, "/device_api/v1/instances/").concat(encodeURIComponent(this.instanceId), "/devices/web/").concat(this._deviceId, "/interests/").concat(encodeURIComponent(interest));
                                            options = {
                                                method: 'POST',
                                                path: path
                                            };
                                            _context9.next = 8;
                                            return doRequest(options);

                                        case 8:
                                        case "end":
                                            return _context9.stop();
                                    }
                                }
                            }, _callee9, this);
                        }));

                    function addDeviceInterest(_x) {
                        return _addDeviceInterest.apply(this, arguments);
                    }

                    return addDeviceInterest;
                }()
            }, {
                key: "removeDeviceInterest",
                value: function () {
                    var _removeDeviceInterest = asyncToGenerator(
                        /*#__PURE__*/
                        regenerator.mark(function _callee10(interest) {
                            var path, options;
                            return regenerator.wrap(function _callee10$(_context10) {
                                while (1) {
                                    switch (_context10.prev = _context10.next) {
                                        case 0:
                                            _context10.next = 2;
                                            return this._resolveSDKState();

                                        case 2:
                                            this._throwIfNotStarted('Could not remove Device Interest');

                                            validateInterestName(interest);
                                            path = "".concat(this._baseURL, "/device_api/v1/instances/").concat(encodeURIComponent(this.instanceId), "/devices/web/").concat(this._deviceId, "/interests/").concat(encodeURIComponent(interest));
                                            options = {
                                                method: 'DELETE',
                                                path: path
                                            };
                                            _context10.next = 8;
                                            return doRequest(options);

                                        case 8:
                                        case "end":
                                            return _context10.stop();
                                    }
                                }
                            }, _callee10, this);
                        }));

                    function removeDeviceInterest(_x2) {
                        return _removeDeviceInterest.apply(this, arguments);
                    }

                    return removeDeviceInterest;
                }()
            }, {
                key: "getDeviceInterests",
                value: function () {
                    var _getDeviceInterests = asyncToGenerator(
                        /*#__PURE__*/
                        regenerator.mark(function _callee11() {
                            var path, options;
                            return regenerator.wrap(function _callee11$(_context11) {
                                while (1) {
                                    switch (_context11.prev = _context11.next) {
                                        case 0:
                                            _context11.next = 2;
                                            return this._resolveSDKState();

                                        case 2:
                                            this._throwIfNotStarted('Could not get Device Interests');

                                            path = "".concat(this._baseURL, "/device_api/v1/instances/").concat(encodeURIComponent(this.instanceId), "/devices/web/").concat(this._deviceId, "/interests");
                                            options = {
                                                method: 'GET',
                                                path: path
                                            };
                                            _context11.next = 7;
                                            return doRequest(options);

                                        case 7:
                                            _context11.t0 = _context11.sent['interests'];

                                            if (_context11.t0) {
                                                _context11.next = 10;
                                                break;
                                            }

                                            _context11.t0 = [];

                                        case 10:
                                            return _context11.abrupt("return", _context11.t0);

                                        case 11:
                                        case "end":
                                            return _context11.stop();
                                    }
                                }
                            }, _callee11, this);
                        }));

                    function getDeviceInterests() {
                        return _getDeviceInterests.apply(this, arguments);
                    }

                    return getDeviceInterests;
                }()
            }, {
                key: "setDeviceInterests",
                value: function () {
                    var _setDeviceInterests = asyncToGenerator(
                        /*#__PURE__*/
                        regenerator.mark(function _callee12(interests) {
                            var _iteratorNormalCompletion, _didIteratorError, _iteratorError, _iterator, _step, interest, uniqueInterests, path, options;

                            return regenerator.wrap(function _callee12$(_context12) {
                                while (1) {
                                    switch (_context12.prev = _context12.next) {
                                        case 0:
                                            _context12.next = 2;
                                            return this._resolveSDKState();

                                        case 2:
                                            this._throwIfNotStarted('Could not set Device Interests');

                                            if (!(interests === undefined || interests === null)) {
                                                _context12.next = 5;
                                                break;
                                            }

                                            throw new Error('interests argument is required');

                                        case 5:
                                            if (Array.isArray(interests)) {
                                                _context12.next = 7;
                                                break;
                                            }

                                            throw new Error('interests argument must be an array');

                                        case 7:
                                            if (!(interests.length > MAX_INTERESTS_NUM)) {
                                                _context12.next = 9;
                                                break;
                                            }

                                            throw new Error("Number of interests (".concat(interests.length, ") exceeds maximum of ").concat(MAX_INTERESTS_NUM));

                                        case 9:
                                            _iteratorNormalCompletion = true;
                                            _didIteratorError = false;
                                            _iteratorError = undefined;
                                            _context12.prev = 12;

                                            for (_iterator = interests[Symbol.iterator](); !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
                                                interest = _step.value;
                                                validateInterestName(interest);
                                            }

                                            _context12.next = 20;
                                            break;

                                        case 16:
                                            _context12.prev = 16;
                                            _context12.t0 = _context12["catch"](12);
                                            _didIteratorError = true;
                                            _iteratorError = _context12.t0;

                                        case 20:
                                            _context12.prev = 20;
                                            _context12.prev = 21;

                                            if (!_iteratorNormalCompletion && _iterator["return"] != null) {
                                                _iterator["return"]();
                                            }

                                        case 23:
                                            _context12.prev = 23;

                                            if (!_didIteratorError) {
                                                _context12.next = 26;
                                                break;
                                            }

                                            throw _iteratorError;

                                        case 26:
                                            return _context12.finish(23);

                                        case 27:
                                            return _context12.finish(20);

                                        case 28:
                                            uniqueInterests = Array.from(new Set(interests));
                                            path = "".concat(this._baseURL, "/device_api/v1/instances/").concat(encodeURIComponent(this.instanceId), "/devices/web/").concat(this._deviceId, "/interests");
                                            options = {
                                                method: 'PUT',
                                                path: path,
                                                body: {
                                                    interests: uniqueInterests
                                                }
                                            };
                                            _context12.next = 33;
                                            return doRequest(options);

                                        case 33:
                                        case "end":
                                            return _context12.stop();
                                    }
                                }
                            }, _callee12, this, [[12, 16, 20, 28], [21,, 23, 27]]);
                        }));

                    function setDeviceInterests(_x3) {
                        return _setDeviceInterests.apply(this, arguments);
                    }

                    return setDeviceInterests;
                }()
            }, {
                key: "clearDeviceInterests",
                value: function () {
                    var _clearDeviceInterests = asyncToGenerator(
                        /*#__PURE__*/
                        regenerator.mark(function _callee13() {
                            return regenerator.wrap(function _callee13$(_context13) {
                                while (1) {
                                    switch (_context13.prev = _context13.next) {
                                        case 0:
                                            _context13.next = 2;
                                            return this._resolveSDKState();

                                        case 2:
                                            this._throwIfNotStarted('Could not clear Device Interests');

                                            _context13.next = 5;
                                            return this.setDeviceInterests([]);

                                        case 5:
                                        case "end":
                                            return _context13.stop();
                                    }
                                }
                            }, _callee13, this);
                        }));

                    function clearDeviceInterests() {
                        return _clearDeviceInterests.apply(this, arguments);
                    }

                    return clearDeviceInterests;
                }()
            }, {
                key: "setUserId",
                value: function () {
                    var _setUserId = asyncToGenerator(
                        /*#__PURE__*/
                        regenerator.mark(function _callee14(userId, tokenProvider) {
                            var error, path, _ref2, beamsAuthToken, options;

                            return regenerator.wrap(function _callee14$(_context14) {
                                while (1) {
                                    switch (_context14.prev = _context14.next) {
                                        case 0:
                                            _context14.next = 2;
                                            return this._resolveSDKState();

                                        case 2:
                                            if (isSupportedBrowser()) {
                                                _context14.next = 4;
                                                break;
                                            }

                                            return _context14.abrupt("return");

                                        case 4:
                                            if (!(this._deviceId === null)) {
                                                _context14.next = 7;
                                                break;
                                            }

                                            error = new Error('.start must be called before .setUserId');
                                            return _context14.abrupt("return", Promise.reject(error));

                                        case 7:
                                            if (!(typeof userId !== 'string')) {
                                                _context14.next = 9;
                                                break;
                                            }

                                            throw new Error("User ID must be a string (was ".concat(userId, ")"));

                                        case 9:
                                            if (!(userId === '')) {
                                                _context14.next = 11;
                                                break;
                                            }

                                            throw new Error('User ID cannot be the empty string');

                                        case 11:
                                            if (!(this._userId !== null && this._userId !== userId)) {
                                                _context14.next = 13;
                                                break;
                                            }

                                            throw new Error('Changing the `userId` is not allowed.');

                                        case 13:
                                            path = "".concat(this._baseURL, "/device_api/v1/instances/").concat(encodeURIComponent(this.instanceId), "/devices/web/").concat(this._deviceId, "/user");
                                            _context14.next = 16;
                                            return tokenProvider.fetchToken(userId);

                                        case 16:
                                            _ref2 = _context14.sent;
                                            beamsAuthToken = _ref2.token;
                                            options = {
                                                method: 'PUT',
                                                path: path,
                                                headers: {
                                                    Authorization: "Bearer ".concat(beamsAuthToken)
                                                }
                                            };
                                            _context14.next = 21;
                                            return doRequest(options);

                                        case 21:
                                            this._userId = userId;
                                            return _context14.abrupt("return", this._deviceStateStore.setUserId(userId));

                                        case 23:
                                        case "end":
                                            return _context14.stop();
                                    }
                                }
                            }, _callee14, this);
                        }));

                    function setUserId(_x4, _x5) {
                        return _setUserId.apply(this, arguments);
                    }

                    return setUserId;
                }()
            }, {
                key: "stop",
                value: function () {
                    var _stop = asyncToGenerator(
                        /*#__PURE__*/
                        regenerator.mark(function _callee15() {
                            return regenerator.wrap(function _callee15$(_context15) {
                                while (1) {
                                    switch (_context15.prev = _context15.next) {
                                        case 0:
                                            _context15.next = 2;
                                            return this._resolveSDKState();

                                        case 2:
                                            if (isSupportedBrowser()) {
                                                _context15.next = 4;
                                                break;
                                            }

                                            return _context15.abrupt("return");

                                        case 4:
                                            if (!(this._deviceId === null)) {
                                                _context15.next = 6;
                                                break;
                                            }

                                            return _context15.abrupt("return");

                                        case 6:
                                            _context15.next = 8;
                                            return this._deleteDevice();

                                        case 8:
                                            _context15.next = 10;
                                            return this._deviceStateStore.clear();

                                        case 10:
                                            this._clearPushToken()["catch"](function () {}); // Not awaiting this, best effort.


                                            this._deviceId = null;
                                            this._token = null;
                                            this._userId = null;

                                        case 14:
                                        case "end":
                                            return _context15.stop();
                                    }
                                }
                            }, _callee15, this);
                        }));

                    function stop() {
                        return _stop.apply(this, arguments);
                    }

                    return stop;
                }()
            }, {
                key: "clearAllState",
                value: function () {
                    var _clearAllState = asyncToGenerator(
                        /*#__PURE__*/
                        regenerator.mark(function _callee16() {
                            return regenerator.wrap(function _callee16$(_context16) {
                                while (1) {
                                    switch (_context16.prev = _context16.next) {
                                        case 0:
                                            if (isSupportedBrowser()) {
                                                _context16.next = 2;
                                                break;
                                            }

                                            return _context16.abrupt("return");

                                        case 2:
                                            _context16.next = 4;
                                            return this.stop();

                                        case 4:
                                            _context16.next = 6;
                                            return this.start();

                                        case 6:
                                        case "end":
                                            return _context16.stop();
                                    }
                                }
                            }, _callee16, this);
                        }));

                    function clearAllState() {
                        return _clearAllState.apply(this, arguments);
                    }

                    return clearAllState;
                }()
            }, {
                key: "_getPublicKey",
                value: function () {
                    var _getPublicKey2 = asyncToGenerator(
                        /*#__PURE__*/
                        regenerator.mark(function _callee17() {
                            var path, options;
                            return regenerator.wrap(function _callee17$(_context17) {
                                while (1) {
                                    switch (_context17.prev = _context17.next) {
                                        case 0:
                                            path = "".concat(this._baseURL, "/device_api/v1/instances/").concat(encodeURIComponent(this.instanceId), "/web-vapid-public-key");
                                            options = {
                                                method: 'GET',
                                                path: path
                                            };
                                            return _context17.abrupt("return", doRequest(options));

                                        case 3:
                                        case "end":
                                            return _context17.stop();
                                    }
                                }
                            }, _callee17, this);
                        }));

                    function _getPublicKey() {
                        return _getPublicKey2.apply(this, arguments);
                    }

                    return _getPublicKey;
                }()
            }, {
                key: "_getPushToken",
                value: function () {
                    var _getPushToken2 = asyncToGenerator(
                        /*#__PURE__*/
                        regenerator.mark(function _callee18(publicKey) {
                            var sub;
                            return regenerator.wrap(function _callee18$(_context18) {
                                while (1) {
                                    switch (_context18.prev = _context18.next) {
                                        case 0:
                                            _context18.prev = 0;
                                            _context18.next = 3;
                                            return this._clearPushToken();

                                        case 3:
                                            _context18.next = 5;
                                            return this._serviceWorkerRegistration.pushManager.subscribe({
                                                userVisibleOnly: true,
                                                applicationServerKey: urlBase64ToUInt8Array(publicKey)
                                            });

                                        case 5:
                                            sub = _context18.sent;
                                            return _context18.abrupt("return", btoa(JSON.stringify(sub)));

                                        case 9:
                                            _context18.prev = 9;
                                            _context18.t0 = _context18["catch"](0);
                                            return _context18.abrupt("return", Promise.reject(_context18.t0));

                                        case 12:
                                        case "end":
                                            return _context18.stop();
                                    }
                                }
                            }, _callee18, this, [[0, 9]]);
                        }));

                    function _getPushToken(_x6) {
                        return _getPushToken2.apply(this, arguments);
                    }

                    return _getPushToken;
                }()
            }, {
                key: "_clearPushToken",
                value: function () {
                    var _clearPushToken2 = asyncToGenerator(
                        /*#__PURE__*/
                        regenerator.mark(function _callee19() {
                            return regenerator.wrap(function _callee19$(_context19) {
                                while (1) {
                                    switch (_context19.prev = _context19.next) {
                                        case 0:
                                            return _context19.abrupt("return", navigator.serviceWorker.ready.then(function (reg) {
                                                return reg.pushManager.getSubscription();
                                            }).then(function (sub) {
                                                if (sub) sub.unsubscribe();
                                            }));

                                        case 1:
                                        case "end":
                                            return _context19.stop();
                                    }
                                }
                            }, _callee19);
                        }));

                    function _clearPushToken() {
                        return _clearPushToken2.apply(this, arguments);
                    }

                    return _clearPushToken;
                }()
            }, {
                key: "_registerDevice",
                value: function () {
                    var _registerDevice2 = asyncToGenerator(
                        /*#__PURE__*/
                        regenerator.mark(function _callee20(token) {
                            var path, device, options, response;
                            return regenerator.wrap(function _callee20$(_context20) {
                                while (1) {
                                    switch (_context20.prev = _context20.next) {
                                        case 0:
                                            path = "".concat(this._baseURL, "/device_api/v1/instances/").concat(encodeURIComponent(this.instanceId), "/devices/web");
                                            device = {
                                                token: token,
                                                metadata: {
                                                    sdkVersion: version
                                                }
                                            };
                                            options = {
                                                method: 'POST',
                                                path: path,
                                                body: device
                                            };
                                            _context20.next = 5;
                                            return doRequest(options);

                                        case 5:
                                            response = _context20.sent;
                                            return _context20.abrupt("return", response.id);

                                        case 7:
                                        case "end":
                                            return _context20.stop();
                                    }
                                }
                            }, _callee20, this);
                        }));

                    function _registerDevice(_x7) {
                        return _registerDevice2.apply(this, arguments);
                    }

                    return _registerDevice;
                }()
            }, {
                key: "_deleteDevice",
                value: function () {
                    var _deleteDevice2 = asyncToGenerator(
                        /*#__PURE__*/
                        regenerator.mark(function _callee21() {
                            var path, options;
                            return regenerator.wrap(function _callee21$(_context21) {
                                while (1) {
                                    switch (_context21.prev = _context21.next) {
                                        case 0:
                                            path = "".concat(this._baseURL, "/device_api/v1/instances/").concat(encodeURIComponent(this.instanceId), "/devices/web/").concat(encodeURIComponent(this._deviceId));
                                            options = {
                                                method: 'DELETE',
                                                path: path
                                            };
                                            _context21.next = 4;
                                            return doRequest(options);

                                        case 4:
                                        case "end":
                                            return _context21.stop();
                                    }
                                }
                            }, _callee21, this);
                        }));

                    function _deleteDevice() {
                        return _deleteDevice2.apply(this, arguments);
                    }

                    return _deleteDevice;
                }()
                /**
                 * Submit SDK version and browser details (via the user agent) to Pusher Beams.
                 */

            }, {
                key: "_updateDeviceMetadata",
                value: function () {
                    var _updateDeviceMetadata2 = asyncToGenerator(
                        /*#__PURE__*/
                        regenerator.mark(function _callee22() {
                            var userAgent, storedUserAgent, storedSdkVersion, path, metadata, options;
                            return regenerator.wrap(function _callee22$(_context22) {
                                while (1) {
                                    switch (_context22.prev = _context22.next) {
                                        case 0:
                                            userAgent = window.navigator.userAgent;
                                            _context22.next = 3;
                                            return this._deviceStateStore.getLastSeenUserAgent();

                                        case 3:
                                            storedUserAgent = _context22.sent;
                                            _context22.next = 6;
                                            return this._deviceStateStore.getLastSeenSdkVersion();

                                        case 6:
                                            storedSdkVersion = _context22.sent;

                                            if (!(userAgent === storedUserAgent && version === storedSdkVersion)) {
                                                _context22.next = 9;
                                                break;
                                            }

                                            return _context22.abrupt("return");

                                        case 9:
                                            path = "".concat(this._baseURL, "/device_api/v1/instances/").concat(encodeURIComponent(this.instanceId), "/devices/web/").concat(this._deviceId, "/metadata");
                                            metadata = {
                                                sdkVersion: version
                                            };
                                            options = {
                                                method: 'PUT',
                                                path: path,
                                                body: metadata
                                            };
                                            _context22.next = 14;
                                            return doRequest(options);

                                        case 14:
                                            _context22.next = 16;
                                            return this._deviceStateStore.setLastSeenSdkVersion(version);

                                        case 16:
                                            _context22.next = 18;
                                            return this._deviceStateStore.setLastSeenUserAgent(userAgent);

                                        case 18:
                                        case "end":
                                            return _context22.stop();
                                    }
                                }
                            }, _callee22, this);
                        }));

                    function _updateDeviceMetadata() {
                        return _updateDeviceMetadata2.apply(this, arguments);
                    }

                    return _updateDeviceMetadata;
                }()
            }, {
                key: "_baseURL",
                get: function get() {
                    if (this._endpoint !== null) {
                        return this._endpoint;
                    }

                    return "https://".concat(this.instanceId, ".pushnotifications.pusher.com");
                }
            }]);

            return Client;
        }();

    var validateInterestName = function validateInterestName(interest) {
        if (interest === undefined || interest === null) {
            throw new Error('Interest name is required');
        }

        if (typeof interest !== 'string') {
            throw new Error("Interest ".concat(interest, " is not a string"));
        }

        if (!INTERESTS_REGEX.test(interest)) {
            throw new Error("interest \"".concat(interest, "\" contains a forbidden character. ") + 'Allowed characters are: ASCII upper/lower-case letters, ' + 'numbers or one of _-=@,.;');
        }

        if (interest.length > MAX_INTEREST_LENGTH) {
            throw new Error("Interest is longer than the maximum of ".concat(MAX_INTEREST_LENGTH, " chars"));
        }
    };

    function getServiceWorkerRegistration() {
        return _getServiceWorkerRegistration.apply(this, arguments);
    }

    function _getServiceWorkerRegistration() {
        _getServiceWorkerRegistration = asyncToGenerator(
            /*#__PURE__*/
            regenerator.mark(function _callee23() {
                var _ref3, swStatusCode;

                return regenerator.wrap(function _callee23$(_context23) {
                    while (1) {
                        switch (_context23.prev = _context23.next) {
                            case 0:
                                _context23.next = 2;
                                return fetch(SERVICE_WORKER_URL);

                            case 2:
                                _ref3 = _context23.sent;
                                swStatusCode = _ref3.status;

                                if (!(swStatusCode !== 200)) {
                                    _context23.next = 6;
                                    break;
                                }

                                throw new Error('Cannot start SDK, service worker missing: No file found at /service-worker.js');

                            case 6:
                                window.navigator.serviceWorker.register(SERVICE_WORKER_URL, {
                                    // explicitly opting out of `importScripts` caching just in case our
                                    // customers decides to host and serve the imported scripts and
                                    // accidentally set `Cache-Control` to something other than `max-age=0`
                                    updateViaCache: 'none'
                                });
                                return _context23.abrupt("return", window.navigator.serviceWorker.ready);

                            case 8:
                            case "end":
                                return _context23.stop();
                        }
                    }
                }, _callee23);
            }));
        return _getServiceWorkerRegistration.apply(this, arguments);
    }

    function getWebPushToken(swReg) {
        return swReg.pushManager.getSubscription().then(function (sub) {
            return !sub ? null : encodeSubscription(sub);
        });
    }

    function encodeSubscription(sub) {
        return btoa(JSON.stringify(sub));
    }

    function urlBase64ToUInt8Array(base64String) {
        var padding = '='.repeat((4 - base64String.length % 4) % 4);
        var base64 = (base64String + padding).replace(/-/g, '+').replace(/_/g, '/');
        var rawData = window.atob(base64);
        return Uint8Array.from(toConsumableArray(rawData).map(function (_char) {
            return _char.charCodeAt(0);
        }));
    }
    /**
     * Modified from https://stackoverflow.com/questions/4565112
     */


    function isSupportedBrowser() {
        var winNav = window.navigator;
        var vendorName = winNav.vendor;
        var isChromium = window.chrome !== null && typeof window.chrome !== 'undefined';
        var isOpera = winNav.userAgent.indexOf('OPR') > -1;
        var isEdge = winNav.userAgent.indexOf('Edg') > -1;
        var isFirefox = winNav.userAgent.indexOf('Firefox') > -1;
        var isChrome = isChromium && vendorName === 'Google Inc.' && !isEdge && !isOpera;
        var isSupported = isChrome || isOpera || isFirefox || isEdge;

        if (!isSupported) {
            console.warn('Pusher Web Push Notifications supports Chrome, Firefox, Edge and Opera.');
        }

        return isSupported;
    }

    exports.Client = Client;
    exports.RegistrationState = RegistrationState;
    exports.TokenProvider = TokenProvider;

    return exports;

}({}));

/// ==============================================          ENDPUSHER =================
//# sourceMappingURL=../maps/libs.min.js.map
