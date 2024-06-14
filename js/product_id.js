let scrollY =window.scrollY
let curenntSection = 0
const sizes={
    width : window.innerWidth,
    height : window.innerHeight
}
window.addEventListener('scroll',()=>{
    scrollY = window.scrollY
    const newSection = Math.round(scrollY/sizes.height)
    console.log(newSection)
 
})

