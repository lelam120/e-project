const canvas = document.querySelector('canvas.webgl')


const scene = new THREE.Scene()
scene.background = new THREE.Color(0xffffff);
const sizes={
    width : window.innerWidth,
    height : window.innerHeight
}
// light
const ambientLight = new THREE.AmbientLight(0xffffff,3)
scene.add(ambientLight)
const directionalLight = new THREE.DirectionalLight(0xffffff,0.5)
directionalLight.position.set(1,2,0)
directionalLight.castShadow = true
scene.add(directionalLight)
// const hlight = new THREE.AmbientLight(0x404040,10);
// hlight.castShadow = true
// scene.add(hlight);

// const directionalLight = new THREE.DirectionalLight(0xffffff, 4);
// directionalLight.position.set(1, 2, 0);
// directionalLight.castShadow = true;
// scene.add(directionalLight);

const light = new THREE.PointLight(0xc4c4c4, 10);
light.position.set(-1.5, 2, 0);
scene.add(light);

// cubetest
const cubeGeometry = new THREE.BoxGeometry(1,1,1,1)
const cubeMaterial = new THREE.MeshBasicMaterial({
    color:0xffffff
})
const cube = new THREE.Mesh(
    cubeGeometry,
    cubeMaterial
  
)
cube.visible = false;
cube.position.set(-7,0,-60)
cube.rotation.y = -1.2
cube.scale.set(0.2,8,7)
scene.add(cube);
// overlay


//loader
// const loadingManager = new THREE.LoadingManager(
//     ()=>{
//         window.setTimeout(()=>{
//             gsap.to(overlayMaterial.uniforms.uAlpha,{
//                 duration:3,
//                 value:0,
//                 delay:0
//             })
//         },500)

//     },
//     ()=>{
//         console.log("cac")
//     },
//     ()=>{
//         console.log("errol")
//     }
// )


//donnet 
let donnut = null;
const gltfLoadder = new THREE.GLTFLoader()
gltfLoadder.load(
    './aseet/car/scene.gltf',
    (gltf) =>{
       
        donnut = gltf.scene;
        donnut.position.x = -5
        // donnut.rotation.x = Math.PI*0.2
        // donnut.rotation.z = Math.PI*0.15
        const radius = 1
        donnut.rotation.y = -4
        donnut.scale.set(radius,radius,radius)
        scene.add(donnut)
        directionalLight.target= donnut
    
})


//khonggian
starGeometry = new THREE.BufferGeometry();
const vertices = new Float32Array(6000 * 3); // Array to store vertex data (x, y, z)

for (let i = 0; i < 6000; i++) {
  const x = Math.random() * 600 - 300;
  const y = Math.random() * 600 - 300;
  const z = Math.random() * 600 - 300;


  vertices[i * 3] = x;
  vertices[i * 3 + 1] = y;
  vertices[i * 3 + 2] = z;
}


const positionAttribute = new THREE.BufferAttribute(vertices, 3);


starGeometry.setAttribute('position', positionAttribute);

const sprite = new THREE.TextureLoader().load('/img/trangvcl.png'); // Check filename
const starMaterial = new THREE.PointsMaterial({
  color: 0xffffff,
  size: 3,
  map: sprite,
  transparent: true
});

stars = new THREE.Points(starGeometry, starMaterial);
scene.add(stars)



//on relaod
window.onbeforeunload = function(){
window.scrollTo(0,0)
}
//scool
const transformDonut = [
    {
        rotationZ:0,
        rotationY:-4,
        positionX:-7,
        positionZ:0,
        positionY:0
    },
    {
        rotationZ:0,
        rotationY:-4,
        positionX:-1.5,
        positionZ:0,
        positionY:0
    },
    {
        rotationZ:0,
        rotationY:-1.4,
        positionX:1,
        positionZ:0,
        positionY:0.2
    },
 
    {
        rotationZ:1,
        rotationY:-4.5,
        positionX:-1.5,
        positionZ:0,
        positionY:0.3
    },
    {
        rotationZ:0.2,
        rotationY:0,
        positionX:-1.6,
        positionZ:0,
        positionY:0
    }
]
let scrollY =window.scrollY
let curenntSection = 0
let indeex =null
window.addEventListener('scroll',()=>{
    scrollY = window.scrollY
    const newSection = Math.round(scrollY/sizes.height)
    
    if (newSection != curenntSection){
        indeex = curenntSection
        curenntSection = newSection
      if (curenntSection==2){
        cube.visible = true;
        indeex = true
      }else{
        cube.visible = false;
        indeex = false
      }
        let targetBackgroundColor, targetLightColor;
       

        if (curenntSection == 2){
            
            targetBackgroundColor = { r: 0 / 255, g: 0 / 255, b: 0 / 255 };
            light.color.set(0xc4c4c4);
       
        }else if (curenntSection==3){
       
            targetBackgroundColor = { r: 71 / 255, g: 49 / 255, b: 9 / 255 };
            light.color.set(0xffa500);
           
        }else if (curenntSection == 1){
       
            targetBackgroundColor = { r:248 / 255, g:248/ 255, b: 248 / 255 };
            light.color.set(0xf7f7cc);
        }else{
            targetBackgroundColor = { r: 255 / 255, g: 255 / 255, b: 255 / 255 };
                light.color.set(0xc4c4c4);
        }
        
     


        if (scene && scene.background) {
            const currentBackgroundColor = {
                r: scene.background.r,
                g: scene.background.g,
                b: scene.background.b
            };
            
            gsap.to(currentBackgroundColor, {
                r: targetBackgroundColor.r,
                g: targetBackgroundColor.g,
                b: targetBackgroundColor.b,
                duration: 1.5,
                ease: 'power2.inOut',
                onUpdate: () => {
                    scene.background.setRGB(currentBackgroundColor.r, currentBackgroundColor.g, currentBackgroundColor.b);
                }
            });
       
        } else{
            console.log("cac")
        }







        if (!!donnut){
            gsap.to(
                donnut.rotation,{
                    duration:1.5,
                    ease:'power3.out',
                    z :transformDonut[curenntSection].rotationZ
                }
            )
            gsap.to(
                donnut.rotation,{
                    duration:1.5,
                    ease:'power3.out',
                    y :transformDonut[curenntSection].rotationY
                }
            )
            gsap.to(
                donnut.position,{
                    duration:1.5,
                    ease:'power2.inOut',
                    x :transformDonut[curenntSection].positionX
                }
            )
            gsap.to(
                donnut.position,{
                    duration:1.5,
                    ease:'power2.inOut',
                    z :transformDonut[curenntSection].positionZ
                }
            )
            gsap.to(
                donnut.position,{
                    duration:1.5,
                    ease:'power2.inOut',
                    y :transformDonut[curenntSection].positionY
                }
            )
            
        }
    }
})



const camera = new THREE.PerspectiveCamera(35,sizes.width/sizes.height,0.1,1000)




camera.position.set(0, 0.5, 5); 
scene.add(camera)
const renderer = new THREE.WebGLRenderer({
    canvas :canvas,
    antialias : true,
    alpha: true
})


renderer.setSize(sizes.width,sizes.height)
renderer.setPixelRatio(Math.min(window.devicePixelRatio,2))
renderer.render(scene, camera);


//animation

const clock = new THREE.Clock()
let lastElapsedTime = 0

const tick =()=>{
    const elapsedTime = clock.getElapsedTime()
    const deltaTime = elapsedTime-lastElapsedTime
    lastElapsedTime = elapsedTime
   
    if (!!donnut && indeex==true){
      
        donnut.position.y = Math.sin(elapsedTime*1)*0.1+0.1
    }
   
  
    // renderer.render(scene, camera);
    window.requestAnimationFrame(tick)

}

tick()



function animate() {
          
    requestAnimationFrame(animate);
   

  
    if (indeex == true) {
        const positions = starGeometry.getAttribute('position').array;
      
        for (let i = 0; i < positions.length / 3; i++) {
      
          positions[i * 3] += 1; // Move along the x-axis
          positions[i * 3 + 1] += 0; // Move along the y-axis
          positions[i * 3 + 2] += 2; // Move along the z-axis
      
          if (positions[i * 3 + 1] > 300) {
            positions[i * 3 + 1] = -300;
          }
          if (positions[i * 3] > 300) {
            positions[i * 3] = -300;
          }
          if (positions[i * 3 + 2] > 300) {
            positions[i * 3 + 2] = -300;
          }
        }
      
        starGeometry.attributes.position.needsUpdate = true;
      }
  
  
    renderer.render(scene, camera);
}
animate()