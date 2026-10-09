/**
 * Halftone Background WebGL Effect (AIDesigner Engine)
 * Standalone, zero-dependency, GPU-accelerated animated halftone screen
 */
"use strict";(()=>{function y(a){let i={};for(let c of Array.from(a.attributes))c.name.startsWith("data-aifx-")&&(i[c.name.slice(10)]=c.value);return i}var U=["/editor","/preview","/backgrounds","/debug/effects"],I="aidesigner.ai",X=new Set(["localhost","127.0.0.1"]);function $(a){if(!a)return!1;let i=a.toLowerCase();return X.has(i)?!0:i===I||i.endsWith("."+I)}function j(a){return a?U.some(i=>a===i||a.startsWith(i+"/")):!1}function L(a){if(!a)return!1;try{let i=new URL(a);return $(i.hostname)&&j(i.pathname)}catch{return!1}}(()=>{var k;if(typeof window=="undefined"||window.AIFX)return;let a=document.currentScript,i=(k=a==null?void 0:a.src)!=null?k:"https://cdn.aidesigner.ai/effects/runtime/v1.js",c=i.replace(/\/runtime\/v1\.js.*$/,""),w=i.indexOf("?"),S=w===-1?"":i.slice(w),R=(a==null?void 0:a.getAttribute("data-aifx-key"))||new URLSearchParams(S).get("key")||"",W="https://api.aidesigner.ai/api/v1/effects/license";function v(e){try{return e.location.href}catch{return""}}function F(){return[location.href,document.referrer,window.parent&&window.parent!==window?v(window.parent):"",window.top&&window.top!==window?v(window.top):""].some(L)}let M=!1;function N(){return;let e=document.createElement("div");e.setAttribute("data-aifx-wm","");let n=e.attachShadow({mode:"closed"});n.innerHTML='<a href="https://aidesigner.ai/?ref=effect-badge" target="_blank" rel="noopener nofollow ugc" style="position:fixed;bottom:16px;right:16px;z-index:2147483647;display:flex;align-items:center;gap:6px;padding:7px 12px;border-radius:8px;background:#fff;color:#111;font:500 13px/1 system-ui,sans-serif;text-decoration:none;box-shadow:0 2px 10px rgba(0,0,0,.15);border:1px solid #e5e5e5;">\u2728 Made in AIDesigner</a>',document.body.appendChild(e)}let T=!1;function H(){/* clean standalone runtime without watermark */}let g=new Map,l=new Set,s=new WeakMap,m=new Set,h=new WeakMap;function P(e){if(g.has(e)||l.has(e)||!/^[a-z0-9-]{1,64}$/.test(e))return;l.add(e);let n=document.createElement("script");n.src=`${c}/fx/${e}/v1.js${S}`,n.async=!0,n.onerror=()=>l.delete(e),document.head.appendChild(n)}function O(e){try{if(!(parseFloat(getComputedStyle(e).zIndex)<0))return;for(let r=e.parentElement;r&&r!==document.documentElement;r=r.parentElement){let o=getComputedStyle(r);if(o.isolation==="isolate"||o.position!=="static"&&o.zIndex!=="auto"||o.transform!=="none"||o.filter!=="none"||parseFloat(o.opacity)<1||o.mixBlendMode!=="normal")return}let t=e.parentElement;t&&(t.style.isolation="isolate",console.info("[aifx] isolated the host section of a negative z-index effect so body/html backgrounds cannot paint over it"))}catch{}}function d(e){var f,u;if(!e||e.nodeType!==1||s.has(e))return;let n=e.getAttribute("data-aifx");if(!n)return;let t=e,r=g.get(n);if(!r){m.add(e),P(n);return}m.delete(e),((u=(f=t.ownerDocument)==null?void 0:f.defaultView)!=null?u:window).getComputedStyle(t).position==="static"&&(t.style.position="absolute"),t.style.overflow="hidden",O(t);try{s.set(e,{slug:n,instance:r.mount(t,y(t))}),H();let b=setTimeout(()=>{s.has(e)&&h.delete(e)},3e4);e.addEventListener("aifx:contextlost",()=>{var C;clearTimeout(b);let E=(C=h.get(e))!=null?C:0;if(p(e),E>=10)return;h.set(e,E+1);let z=Math.min(700*Math.pow(1.6,E),8e3);setTimeout(()=>{e.isConnected&&!document.hidden&&d(e)},z+Math.random()*600)},{once:!0})}catch(b){console.warn("[aifx] mount failed:",n,b)}}function p(e){let n=s.get(e);if(n){try{n.instance.destroy()}catch{}s.delete(e)}m.delete(e)}function x(e){var t;e.nodeType===1&&e.hasAttribute("data-aifx")&&d(e),(t=e.querySelectorAll)==null||t.call(e,"[data-aifx]").forEach(d)}window.AIFX={register(e,n){g.set(e,n),l.delete(e),m.forEach(t=>{t.isConnected&&t.getAttribute("data-aifx")===e&&d(t)})},rescan:()=>x(document)};let _=new MutationObserver(e=>{var n;for(let t of e){if(t.type==="attributes"&&t.target.nodeType===1){if(!((n=t.attributeName)!=null&&n.startsWith("data-aifx")))continue;let r=t.target;if(t.attributeName==="data-aifx")p(r),d(r);else{let o=s.get(r);if(o)try{o.instance.update(y(r))}catch{}}continue}t.addedNodes.forEach(r=>{r.nodeType===1&&x(r)}),t.removedNodes.forEach(r=>{var f,u;if(r.nodeType!==1)return;let o=r;(f=o.hasAttribute)!=null&&f.call(o,"data-aifx")&&p(o),(u=o.querySelectorAll)==null||u.call(o,"[data-aifx]").forEach(p)})}}),A=()=>{x(document),_.observe(document.documentElement,{childList:!0,subtree:!0,attributes:!0})};document.readyState==="loading"?document.addEventListener("DOMContentLoaded",A,{once:!0}):A()})();})();


"use strict";(()=>{var k=/^#(?:[0-9a-fA-F]{3}|[0-9a-fA-F]{4}|[0-9a-fA-F]{6}|[0-9a-fA-F]{8})$/;function T(o){let s=o.replace("#","");(s.length===3||s.length===4)&&(s=s.split("").map(e=>e+e).join("")),s.length===8&&(s=s.slice(0,6));let t=parseInt(s,16);return[(t>>16&255)/255,(t>>8&255)/255,(t&255)/255]}function A(o,s){let t={};for(let[e,i]of Object.entries(o)){let c=s[e];if(i.type==="number"){let u=c==null?NaN:parseFloat(c);t[e]=Number.isFinite(u)?Math.min(i.max,Math.max(i.min,u)):i.default}else if(i.type==="colors"){let u=(c!=null?c:"").split(",").map(f=>f.trim()).filter(f=>k.test(f));t[e]=u.length>=i.min?u.slice(0,i.max):i.default.slice()}else i.type==="enum"?t[e]=c!=null&&i.values.includes(c)?c:i.default:t[e]=c!=null&&/^https:\/\/[^\s"'<>]+$/i.test(c)?c:i.default}return t}var C="attribute vec2 a_pos;varying vec2 v_uv;void main(){v_uv=a_pos*0.5+0.5;gl_Position=vec4(a_pos,0.,1.);}";function L(){let o=typeof window!="undefined"?window.__AIFX_MAX_DPR__:void 0;return typeof o=="number"&&o>0?o:1.5}function M(o){try{let s=new URL(o);return s.protocol!=="https:"||s.hostname!=="cdn.aidesigner.ai"?null:`https://api.aidesigner.ai/api/v1/effects/image-proxy?url=${encodeURIComponent(o)}`}catch{return null}}function U(o,s){var y;let t=document.createElement("canvas");t.style.cssText="position:absolute;inset:0;width:100%;height:100%;display:block;";let e=(y=t.getContext("webgl",{alpha:!0,antialias:!1,premultipliedAlpha:!1}))!=null?y:t.getContext("experimental-webgl");if(!e)return null;function i(n,a){let r=e.createShader(n);return r?(e.shaderSource(r,a),e.compileShader(r),e.getShaderParameter(r,e.COMPILE_STATUS)?r:(console.warn("[aifx] shader compile failed:",e.getShaderInfoLog(r)),null)):null}let c=i(e.VERTEX_SHADER,C),u=i(e.FRAGMENT_SHADER,s),f=e.createProgram();if(!c||!u||!f)return null;if(e.attachShader(f,c),e.attachShader(f,u),e.linkProgram(f),!e.getProgramParameter(f,e.LINK_STATUS))return console.warn("[aifx] program link failed:",e.getProgramInfoLog(f)),null;e.useProgram(f),t.addEventListener("webglcontextlost",n=>{n.preventDefault(),o.dispatchEvent(new CustomEvent("aifx:contextlost"))});let E=e.createBuffer();e.bindBuffer(e.ARRAY_BUFFER,E),e.bufferData(e.ARRAY_BUFFER,new Float32Array([-1,-1,3,-1,-1,3]),e.STATIC_DRAW);let _=e.getAttribLocation(f,"a_pos");e.enableVertexAttribArray(_),e.vertexAttribPointer(_,2,e.FLOAT,!1,0,0),e.enable(e.BLEND),e.blendFunc(e.SRC_ALPHA,e.ONE_MINUS_SRC_ALPHA);let v=new Map;function g(n){var a;return v.has(n)||v.set(n,e.getUniformLocation(f,n)),(a=v.get(n))!=null?a:null}o.appendChild(t);let h=null,x=0,b=null,p={gl:e,canvas:t,setUniform1f:(n,a)=>{let r=g(n);r&&e.uniform1f(r,a)},setUniform2f:(n,a,r)=>{let m=g(n);m&&e.uniform2f(m,a,r)},setUniform3f:(n,a,r,m)=>{let l=g(n);l&&e.uniform3f(l,a,r,m)},setColor:(n,a)=>{let[r,m,l]=T(a);p.setUniform3f(n,r,m,l)},setImage:n=>{if(n===b)return;b=n;let a=++x;if(!n){p.setUniform1f("u_hasImage",0);return}let r=(m,l)=>{let d=new Image;d.crossOrigin="anonymous";let R=()=>{if(a!==x)return;let w=l?null:M(n);if(w){r(w,!0);return}b=null,p.setUniform1f("u_hasImage",0)};d.onload=()=>{if(a!==x)return;h||(h=e.createTexture()),e.activeTexture(e.TEXTURE0),e.bindTexture(e.TEXTURE_2D,h),e.pixelStorei(e.UNPACK_FLIP_Y_WEBGL,!0);try{e.texImage2D(e.TEXTURE_2D,0,e.RGBA,e.RGBA,e.UNSIGNED_BYTE,d)}catch{R();return}e.texParameteri(e.TEXTURE_2D,e.TEXTURE_WRAP_S,e.CLAMP_TO_EDGE),e.texParameteri(e.TEXTURE_2D,e.TEXTURE_WRAP_T,e.CLAMP_TO_EDGE),e.texParameteri(e.TEXTURE_2D,e.TEXTURE_MIN_FILTER,e.LINEAR),e.texParameteri(e.TEXTURE_2D,e.TEXTURE_MAG_FILTER,e.LINEAR);let w=g("u_image");w&&e.uniform1i(w,0),p.setUniform2f("u_imageRes",d.naturalWidth,d.naturalHeight),p.setUniform1f("u_hasImage",1)},d.onerror=R,d.src=m};r(n,!1)},draw:n=>{p.setUniform1f("u_time",n),e.drawArrays(e.TRIANGLES,0,3)},resize:()=>{let n=Math.min(window.devicePixelRatio||1,L()),a=Math.max(1,Math.round(o.clientWidth*n)),r=Math.max(1,Math.round(o.clientHeight*n));(t.width!==a||t.height!==r)&&(t.width=a,t.height=r,e.viewport(0,0,a,r),p.setUniform2f("u_res",a,r))},destroy:()=>{var n;t.remove();try{(n=e.getExtension("WEBGL_lose_context"))==null||n.loseContext()}catch{}}};return p.resize(),p}function P(o,s,t){let e=typeof matchMedia=="function"&&matchMedia("(prefers-reduced-motion: reduce)").matches,i=0,c=!0,u=performance.now(),f=.5,E=.5,_=.5,v=.5,g=0,h=-1e9,x=m=>{let l=o.getBoundingClientRect();l.width<1||l.height<1||(f=(m.clientX-l.left)/l.width,E=(m.clientY-l.top)/l.height,h=performance.now())};window.addEventListener("pointermove",x,{passive:!0});let b=typeof window.__AIFX_FPS_CAP__=="number"&&window.__AIFX_FPS_CAP__>0?window.__AIFX_FPS_CAP__:0,p=b>0?1e3/b-1:0,y=-1e9,n=()=>{!e&&c&&(i=requestAnimationFrame(n));let m=performance.now();if(m-y<p)return;y=m;let l=(m-u)/1e3;_+=(f-_)*.07,v+=(E-v)*.07,g+=((m-h<2500?1:0)-g)*.045;let d=o.clientWidth/Math.max(o.clientHeight,1);s.setUniform2f("u_mouse",_*d,1-v),s.setUniform1f("u_mouseAct",g),t(l),s.draw(l)},a=typeof IntersectionObserver=="function"?new IntersectionObserver(m=>{let l=m.some(d=>d.isIntersecting);l&&!c?(c=!0,i=requestAnimationFrame(n)):!l&&c&&(c=!1,cancelAnimationFrame(i))}):null;a==null||a.observe(o);let r=typeof ResizeObserver=="function"?new ResizeObserver(()=>s.resize()):null;return r==null||r.observe(o),i=requestAnimationFrame(n),()=>{cancelAnimationFrame(i),window.removeEventListener("pointermove",x),a==null||a.disconnect(),r==null||r.disconnect()}}function S(o,s){let t=document.createElement("div");return t.style.cssText=`position:absolute;inset:0;background:linear-gradient(135deg, ${s.join(", ")});opacity:.85;`,o.appendChild(t),()=>t.remove()}var F={colors:{type:"colors",default:["#312c8f","#e4572e"],min:1,max:2},bg:{type:"colors",default:["#f5eedd"],min:1,max:1},"bg-alpha":{type:"number",default:1,min:0,max:1},speed:{type:"number",default:.3,min:.02,max:2},"dot-scale":{type:"number",default:1,min:.45,max:2.8},"screen-angle":{type:"number",default:15,min:0,max:90},"duo-angle":{type:"number",default:75,min:0,max:90},duotone:{type:"number",default:.7,min:0,max:1},contrast:{type:"number",default:1.15,min:.4,max:2.2},scale:{type:"number",default:1.4,min:.4,max:4},"flow-angle":{type:"number",default:28,min:0,max:360},glow:{type:"number",default:.55,min:0,max:1},grain:{type:"number",default:.5,min:0,max:1},image:{type:"url",default:""},mouse:{type:"number",default:.7,min:0,max:1}},X=`
precision highp float;
varying vec2 v_uv;
uniform vec2 u_res;
uniform float u_time,u_speed,u_dot,u_sang,u_dang,u_duo,u_contrast,u_scale,u_flow,u_glow,u_grain,u_bgalpha;
uniform vec2 u_mouse;
uniform float u_mouseAct,u_mouseStr;
uniform vec3 u_bg,u_c0,u_c1;
uniform sampler2D u_image;
uniform float u_hasImage;
uniform vec2 u_imageRes;

float hash(vec2 p){return fract(sin(dot(p,vec2(127.1,311.7)))*43758.5453123);}
float noise(vec2 p){vec2 i=floor(p),f=fract(p);f=f*f*(3.0-2.0*f);
  return mix(mix(hash(i),hash(i+vec2(1.,0.)),f.x),mix(hash(i+vec2(0.,1.)),hash(i+vec2(1.,1.)),f.x),f.y);}
float fbm(vec2 p){float v=0.0,a=0.55;for(int i=0;i<3;i++){v+=a*noise(p);p=p*2.13+vec2(11.3,7.7);a*=0.5;}return v;}
vec2 rot(vec2 v,float a){float c=cos(a),s=sin(a);return vec2(c*v.x-s*v.y,s*v.x+c*v.y);}

// dither-lineage procedural ink field: flow-stretched warped fbm + drifting
// luminous core + corner vignette + dark-biased s-curve. Returns ink coverage.
float field(vec2 p,float t){
  float aspect=u_res.x/max(u_res.y,1.0);
  vec2 dir=vec2(cos(u_flow),sin(u_flow));
  vec2 rp=vec2(dot(p,dir),dot(p,vec2(-dir.y,dir.x)));
  vec2 w=vec2(rp.x*0.62,rp.y*1.45)*u_scale;
  w.x-=t*0.24;
  vec2 q=vec2(fbm(w+vec2(0.0,t*0.07)),fbm(w+vec2(4.7,2.3)-t*0.05));
  float v=fbm(w+(q-0.5)*1.6+vec2(t*0.03,0.0));
  float d=fbm(w*2.6+vec2(-t*0.17,0.0)+(q-0.5)*1.4);
  v+=(d-0.5)*0.24;
  vec2 sun=vec2(aspect*0.5,0.5)+vec2(0.32*aspect*sin(t*0.4+1.7),0.25*cos(t*0.31));
  v+=exp(-3.0*length(p-sun))*u_glow*0.62;
  vec2 ctr=(p-vec2(aspect*0.5,0.5))/vec2(max(aspect,1.0)*0.62,0.62);
  v-=smoothstep(0.45,1.5,length(ctr))*0.30;
  v=(v-0.56)*u_contrast+0.28;
  v=clamp(v,0.0,1.0);
  v=mix(v,v*v*(3.0-2.0*v),0.65);
  return v;
}

// photo tone -> ink coverage (cover-fit, classic newspaper screening:
// dark areas of the photo get the big dots)
float imageInk(vec2 p,float t){
  float aspect=u_res.x/max(u_res.y,1.0);
  float ia=u_imageRes.x/max(u_imageRes.y,1.0);
  vec2 uv01=vec2(p.x/aspect,p.y);
  vec2 sc=(ia>aspect)?vec2(aspect/ia,1.0):vec2(1.0,ia/aspect);
  vec3 c=texture2D(u_image,clamp((uv01-0.5)*sc+0.5,0.001,0.999)).rgb;
  float lum=dot(c,vec3(0.299,0.587,0.114));
  lum=clamp((lum-0.5)*u_contrast+0.5,0.0,1.0);
  // slow press-light sweep so the print breathes even with a static photo
  float sweep=sin(dot(p,vec2(0.8,0.55))*2.4-t*0.9);
  lum+=sweep*0.045;
  // keep the portrait positive in light-ink-on-dark-paper schemes, and cap
  // density like real newsprint so the dot lattice survives in the shadows
  float kInk=smoothstep(0.02,0.18,
    dot(u_c0,vec3(0.299,0.587,0.114))-dot(u_bg,vec3(0.299,0.587,0.114)));
  return clamp(mix(1.0-lum,lum,kInk),0.0,1.0)*0.9;
}

// ink coverage at p (aspect-corrected uv) + cursor ink-press bloom
float inkAt(vec2 p,float t){
  float c=(u_hasImage>0.5)?imageInk(p,t):field(p,t);
  // cursor ink-press: a gaussian bloom that swells nearby ink organically
  // (scaled by the local tone so it never reads as a synthetic circle)
  float m=u_mouseStr*u_mouseAct;
  vec2 mr=p-u_mouse;
  c+=m*0.5*exp(-dot(mr,mr)*7.0)*(0.38+1.2*c);
  return clamp(c,0.0,1.0);
}

// one rotated AM screen: returns (distance-in-cell, per-dot random, coverage)
vec3 screenSample(vec2 fragPx,float ang,float cellPx,float t){
  vec2 g=rot(fragPx,ang)/cellPx;
  vec2 id=floor(g);
  vec2 ctr=id+0.5;
  float d=length(g-ctr);
  vec2 centerPx=rot(ctr*cellPx,-ang);
  float c=inkAt(centerPx/max(u_res.y,1.0),t);
  return vec3(d,hash(id*0.731+ang*3.7),c);
}

// area-true dot radius: R = sqrt(c)/sqrt(2) so dots merge to solid at c=1,
// with a slight shadow boost so corners close fully (print dot gain)
float dotMask(float d,float c,float aa){
  float R=sqrt(max(c,0.0))*(0.708+0.10*smoothstep(0.8,1.0,c));
  return 1.0-smoothstep(R-aa,R+aa,d);
}

void main(){
  float t=u_time*u_speed;
  float aspect=u_res.x/max(u_res.y,1.0);
  float cellPx=max(u_dot*u_res.y/64.0,3.0);
  float aa=0.8/cellPx;

  vec3 s1=screenSample(gl_FragCoord.xy,u_sang,cellPx,t);
  vec3 s2=screenSample(gl_FragCoord.xy+vec2(31.7,57.3),u_dang,cellPx,t);

  float c1,c2;
  if(u_hasImage>0.5){
    float tone=s1.z;
    c1=smoothstep(0.03,0.97,pow(tone,1.12));
    tone=s2.z;
    c2=u_duo*0.55*pow(4.0*tone*(1.0-tone),1.4);
  }else{
    c1=smoothstep(0.13,0.70,s1.z);
    float v=s2.z;
    // secondary ink is a thin warm fringe hugging the indigo threshold,
    // plus a whisper of overprint in the deepest cores
    c2=u_duo*(0.42*smoothstep(0.09,0.18,v)*(1.0-smoothstep(0.22,0.38,v))
              +0.18*smoothstep(0.82,1.0,v));
  }

  // per-dot ink weight variation, faded out as coverage merges to solid so
  // dense areas stay clean; solids instead get continuous press mottle
  float fade1=1.0-smoothstep(0.55,0.85,c1);
  float fade2=1.0-smoothstep(0.55,0.85,c2);
  float dens1=1.0-0.14*(1.0-s1.y)*fade1;
  float dens2=1.0-0.14*(1.0-s2.y)*fade2;
  float mott=noise(gl_FragCoord.xy*0.016)*0.62+noise(gl_FragCoord.xy*0.045)*0.38;
  float m1=clamp(dotMask(s1.x,c1,aa)*dens1,0.0,1.0)*(1.0-0.05*u_grain*mott);
  float m2=clamp(dotMask(s2.x,c2,aa)*dens2,0.0,1.0)*(1.0-0.05*u_grain*mott);

  // warm paper: soft top-light gradient, fiber grain, gentle print vignette
  vec3 paper=u_bg;
  float fib=noise(gl_FragCoord.xy*0.55)*0.7+noise(gl_FragCoord.xy*0.13)*0.5;
  paper*=1.0+(fib-0.6)*0.10*u_grain;
  paper*=1.0+0.05*(v_uv.y-0.35);
  vec2 vc=(v_uv-0.5)*vec2(max(aspect,1.0),1.0);
  paper*=1.0-0.07*smoothstep(0.45,0.95,length(vc));

  // pigment-aware overprint: ink darker than paper multiplies through
  // (subtractive print), ink lighter than paper screens over it (luminous
  // dots on dark stock) \u2014 chosen per ink from relative luminance
  vec3 LW=vec3(0.299,0.587,0.114);
  float plum=dot(u_bg,LW);
  float k1=smoothstep(0.02,0.18,dot(u_c0,LW)-plum);
  float k2=smoothstep(0.02,0.18,dot(u_c1,LW)-plum);
  vec3 col=paper;
  col=mix(col*mix(vec3(1.0),u_c0,m1),col+(vec3(1.0)-col)*u_c0*m1,k1);
  col=mix(col*mix(vec3(1.0),u_c1,m2),col+(vec3(1.0)-col)*u_c1*m2,k2);

  // banding-free hash dither
  col+=(hash(gl_FragCoord.xy+fract(t*5.0)*97.0)-0.5)*0.008;
  col=clamp(col,0.0,1.0);

  float inkA=1.0-(1.0-m1)*(1.0-m2);
  float alpha=max(u_bgalpha,inkA);
  gl_FragColor=vec4(col,alpha);
}`,I;(I=window.AIFX)==null||I.register("halftone",{mount(o,s){let t=A(F,s),e=U(o,X);if(!e){let u=S(o,t.colors);return{update(){},destroy:u}}let i=()=>{let u=t.colors;e.setColor("u_c0",u[0]),e.setColor("u_c1",u[Math.min(1,u.length-1)]),e.setColor("u_bg",t.bg[0]),e.setUniform1f("u_bgalpha",t["bg-alpha"]),e.setUniform1f("u_speed",t.speed),e.setUniform1f("u_dot",t["dot-scale"]),e.setUniform1f("u_sang",t["screen-angle"]*Math.PI/180),e.setUniform1f("u_dang",t["duo-angle"]*Math.PI/180),e.setUniform1f("u_duo",t.duotone),e.setUniform1f("u_contrast",t.contrast),e.setUniform1f("u_scale",t.scale),e.setUniform1f("u_flow",t["flow-angle"]*Math.PI/180),e.setUniform1f("u_glow",t.glow),e.setUniform1f("u_grain",t.grain),e.setUniform1f("u_mouseStr",t.mouse),e.setImage(t.image)};i();let c=P(o,e,()=>{});return{update(u){t=A(F,u),i()},destroy(){c(),e.destroy()}}}});})();

