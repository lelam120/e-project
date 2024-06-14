

const canvas = document.querySelector('canvas.webgl')


const scene = new THREE.Scene()
const sizes={
    width : window.innerWidth,
    height : window.innerHeight
}
//cubetest
// const cubeGeometry = new THREE.BoxGeometry(1,1,1,1)
// const cubeMaterial = new THREE.MeshBasicMaterial({
//     color:0xff0000
// })
// const cube = new THREE.Mesh(
//     cubeGeometry,
//     cubeMaterial
// )
//overlay


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
        donnut.position.x = -7
        // donnut.rotation.x = Math.PI*0.2
        // donnut.rotation.z = Math.PI*0.15
        const radius = 1
        donnut.rotation.y = -4
        donnut.scale.set(radius,radius,radius)
        scene.add(donnut)
    
})
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


// Scene


//Camera
// scene.add(cube)
const camera = new THREE.PerspectiveCamera(35,sizes.width/sizes.height,0.1,1000)

// camera.rotation.z = -8 / 180 * Math.PI;


camera.position.set(0, 0.5, 5); 
scene.add(camera)
const renderer = new THREE.WebGLRenderer({
    canvas :canvas,
    antialias : true,
    alpha: true
})

//light
// const ambientLight = new THREE.AmbientLight(0xffffff,0.8)
// scene.add(ambientLight)
// const directionalLight = new THREE.DirectionalLight(0xffffff,1)
// directionalLight.position.set(1,2,0)
// scene.add(directionalLight)
const hlight = new THREE.AmbientLight(	0x404040,20);
scene.add(hlight);

const directionalLight = new THREE.DirectionalLight(0xffffff, 4);
directionalLight.position.set(1, 2, 0);
directionalLight.castShadow = true;
scene.add(directionalLight);

const light = new THREE.PointLight(0xc4c4c4, 0);
light.position.set(0, 2, 5);
scene.add(light);

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
   
    if (!!donnut && indeex==2){
        donnut.position.y = Math.sin(elapsedTime*1)*0.1-0.1
    }
   
  
    renderer.render(scene, camera);
    window.requestAnimationFrame(tick)

}

tick()