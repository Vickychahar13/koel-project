import{P as m,C as d,S as u,d as l,W as v,A as f,a as p,b as y,c as w,M as g}from"./three.module-VcUqfAUV.js";import{s as _}from"./app-BTCGkzLq.js";import"./socketService-CLOoMCW2.js";import"./index-HIGCDqEt.js";import"./useOverlay-BzcBPr66.js";import"./formatters-hAfKvgZW.js";import"./commonStore-Ci34ZhMx.js";import"./useBranding-ITmcZxms.js";import"./index-DPVSElUA.js";class x{constructor(e,i=36){this.container=e,this.fov=i,this.camera=new m(this.fov,this.container.clientWidth/this.container.clientHeight,1,1e3),this.camera.position.z=128,this.clock=new d,this.scene=new u,this.uniforms={u_time:{type:"f",value:1},colorB:{type:"vec3",value:new l(16773120)},colorA:{type:"vec3",value:new l(16777215)}},this.renderer=new v({antialias:!0}),this.renderer.setSize(this.container.clientWidth,this.container.clientHeight),e.appendChild(this.renderer.domElement);const n=new f(16777215,.7);n.castShadow=!1,this.scene.add(n);const a=new p(16777215,.55);a.castShadow=!0,a.position.set(0,80,10),this.scene.add(a),this.onWindowResize=()=>{this.camera.aspect=this.container.clientWidth/this.container.clientHeight,this.camera.updateProjectionMatrix(),this.renderer.setSize(this.container.clientWidth,this.container.clientHeight)},this.onDocumentWheel=r=>{const o=this.camera.position.z+r.deltaY/100;this.camera.position.z=Math.min(Math.max(o,84),256)},window.addEventListener("resize",this.onWindowResize,!1),document.addEventListener("wheel",this.onDocumentWheel,!1)}animate(){requestAnimationFrame(this.animate.bind(this)),this.render()}render(){this.uniforms.u_time.value+=this.clock.getDelta(),this.renderer.render(this.scene,this.camera)}destroy(){window.removeEventListener("resize",this.onWindowResize,!1),document.removeEventListener("wheel",this.onDocumentWheel,!1),this.renderer.domElement.remove(),this.renderer.dispose()}}const h={vertex:`
    varying float x;
    varying float y;
    varying float z;
    varying vec3 vUv;
    uniform float u_time;
    uniform float u_amplitude;
    uniform float[64] u_data_arr;
    void main() {
      vUv = position;
      x = abs(position.x);
      y = abs(position.y);
      float floor_x = round(x);
      float floor_y = round(y);
      z = sin(u_data_arr[int(floor_x)] / 50.0 + u_data_arr[int(floor_y)] / 20.0) * u_amplitude * 2.0;
      gl_Position = projectionMatrix * modelViewMatrix * vec4(position.x, position.y, z, 1.0);
    }
  `,fragment:`
    varying float x;
    varying float y;
    varying float z;
    varying vec3 vUv;
    uniform float u_time;
    void main() {
      gl_FragColor = vec4((32.0 - abs(x)) / 32.0, (32.0 - abs(y)) / 32.0, (abs(x + y) / 2.0) / 32.0, 1.0);
    }
  `},E=s=>{const e=new x(s),i=_.analyzer;i.fftSize=512;const n=new Uint8Array(i.frequencyBinCount),a={u_time:{type:"f",value:1},u_amplitude:{type:"f",value:3},u_data_arr:{type:"float[64]",value:n}},r=new y(64,64,64,64),o=new w({uniforms:a,vertexShader:h.vertex,fragmentShader:h.fragment,wireframe:!0}),t=new g(r,o);t.rotation.x=-Math.PI/2+Math.PI/4,t.scale.x=2,t.scale.y=2,t.scale.z=2,t.position.y=8,e.scene.add(t);const c=()=>{i.getByteFrequencyData(n),requestAnimationFrame(c)};return c(),e.animate(),()=>e.destroy()};export{E as init};
