(function(){window.top.consentStatus="loading";window.top.disclaimerStatus="loading";let website_code;getConsent();var readyStateCheckInterval=setInterval(function(){if(window.top.document.readyState==="complete"){clearInterval(readyStateCheckInterval);if(!window.top.adoptLoaded){window.top.adoptLoaded=true;adoptInit();}}},200);function getConsent(){const scriptElem=document.querySelector('script[src^="//tag.goadopt.io/injector.js"]',);if(document.querySelector("meta[name='adopt-website-id']")){website_code=document.querySelector("meta[name='adopt-website-id']").getAttribute("content");}else if(scriptElem){website_code=scriptElem.getAttribute("src").substr(scriptElem.getAttribute("src").indexOf("website_code=")+13);}
let cookies={};decodeURIComponent(document.cookie).split(";").forEach(function(cookie){if(cookie){const parts=cookie.match(/(.*?)=(.*)$/);if(parts&&parts[1]){cookies[parts[1].trim()]=(parts[2]||"").trim();}}});const adoptConsent=cookies.AdoptConsent?cookies.AdoptConsent:localStorage.getItem("AdoptConsent");const xhreq=new XMLHttpRequest();const params={websiteID:website_code,adoptConsent:adoptConsent,};xhreq.onreadystatechange=function(oEvent){if(xhreq.readyState===4){if(xhreq.status!==200){window.top.consentStatus="loaded";window.top.thirdPartyCookie=false;}}};xhreq.onload=(xhr)=>{if(xhr){const consent=xhr.target.response;const result=JSON.parse(consent);window.top.consentResult=result;window.top.thirdPartyCookie=result.data.third_cookie;window.top.consentStatus="loaded";}};xhreq.open("POST",`https://disclaimer-api.goadopt.io/api/tag/get-consent`,true,);xhreq.setRequestHeader("Content-Type","text/plain");xhreq.withCredentials=true;xhreq.send(JSON.stringify(params));}
function adoptInit(){let link;if(location.host.includes("localhost:5000")||location.host.includes("localhost")||location.host.includes("adopt-bar-dev")){link="./";}else{link="//tag.goadopt.io/";}
let wind=window.top;if(website_code==="147c7136-e259-4630-b98f-0e40e87111e6"){wind=window;}
var d=wind.document.querySelector(".hkn-disclaimer-bar");if(!d){var h=wind.document.createElement("script");var t=wind.document.createElement("link");var s=wind.document.getElementsByTagName("script")[0];var c=wind.document.createElement("div");c.className="hkn-disclaimer-bar";h.type="text/javascript";h.charset="utf-8";h.async=true;t.rel="stylesheet";t.href=link+"bundle.css";var ie=!("Promise"in window)||/foo/gi.flags!="gi";h.src=link+(ie?"bundleie.js":"bundle.js");wind.document.body.appendChild(c);s.parentNode.insertBefore(t,s);s.parentNode.insertBefore(h,s);}}})();