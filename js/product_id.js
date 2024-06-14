let scrollY =window.scrollY
let curenntSection = 0
const manhinhxem = document.getElementById('kiendeptrai')
const sizes={
    width : window.innerWidth,
    height : window.innerHeight
}
window.addEventListener('scroll',()=>{
    scrollY = window.scrollY
    const newSection = Math.round(scrollY/sizes.height)

 
})

// let donnut = null;
// const gltfLoadder = new THREE.GLTFLoader()
// gltfLoadder.load(
//     './aseet/car/scene.gltf',
//     (gltf) =>{
//         donnut = gltf.scene;
    
//         console.log(donnut)
//         donnut.position.y = 7
//         donnut.position.x = -2
//         donnut.rotation.x = Math.PI*0.2
//         donnut.rotation.z = Math.PI*0.15
//         const radius = 1
//         donnut.scale.set(radius,radius,radius)
//         scene.add(donnut)
    
// })


const cubeGeometry = new THREE.BoxGeometry(1,1,1)
const cubeMaterial = new THREE.MeshBasicMaterial({
    color:0xff0000
})
const cube = new THREE.Mesh(
    cubeGeometry,
    cubeMaterial
)



const canvas = document.querySelector('canvas.webgl')
//


const scene = new THREE.Scene()
const camera = new THREE.PerspectiveCamera(35,sizes.width/sizes.height,0.1,10000)
camera.position.z = 30
// scene.background = new THREE.Color(0xff5733);
scene.add(camera)
scene.add(cube)

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
   
    // if (!!donnut){
    //     donnut.position.y = Math.sin(elapsedTime*0.5)*0.1-0.1
    // }
    cube.rotation.y = Math.sin(elapsedTime)

    renderer.render(scene, camera);
    window.requestAnimationFrame(tick)
    console.log("vuoi");
}

// tick()