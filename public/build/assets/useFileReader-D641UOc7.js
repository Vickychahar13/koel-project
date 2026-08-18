const s=()=>{const e=new FileReader;return{readAsDataUrl:(a,r)=>{e.addEventListener("load",async()=>await r(e.result)),e.readAsDataURL(a)}}};export{s as u};
