// $('body').append('<div style="" id="loadingDiv"><div class="loader">Loading...</div></div>');
$(window).on('load', function(){
    html.classList.add("stop-scrolling");
    setTimeout(removeLoader, 10); //wait for page load PLUS 0.01 seconds.
});
function removeLoader(){
    $( "#loadingDiv" ).fadeOut(500, function() {
      // fadeOut complete. Remove the loading div
      html.classList.remove("stop-scrolling");
      $( "#loadingDiv" ).remove(); //makes page more lightweight 
      animOnScroll();
  });  
}
    
    let html = document.documentElement;
    let toggleMenu = document.getElementById('toggle-menu');
    let header = document.getElementsByTagName('header')[0];
    let dropdownToggles = document.getElementsByClassName("dropdown");

    const mediaQuery = window.matchMedia('(max-width: 991px)'); 
    let toggleShow = false;

    const toggle = () => {
      if (mediaQuery.matches) {
        if (!toggleShow) {
          toggleMenu.classList.add('open');
          toggleShow = true;
          header.classList.add('full-screen');
          html.classList.add("stop-scrolling-mobile");
        }
        else {
          toggleMenu.classList.remove('open');
          toggleShow = false;
          header.classList.remove('full-screen');
          html.classList.remove("stop-scrolling-mobile");
        }
      }
    }

    toggleMenu.onclick = toggle; 

    const toggleDropdown = (target) => {
        let show = target.classList.contains("open");
        if (!show) {
            target.classList.add("open");
        }
        else {
            target.classList.remove("open");
        }
            
    }

    for (let i = 0; i < dropdownToggles.length; i++) {
        let dropdown = dropdownToggles[i];
        dropdown.addEventListener("click", () => {
            toggleDropdown(dropdown);
        })
    }

    //section animation
    const animItems = document.getElementsByClassName('_anim-items');

    if (animItems.length > 0) {
        window.addEventListener('scroll', animOnScroll);
        function animOnScroll() {
            for (let index = 0; index < animItems.length; index++) {
                const animItem = animItems[index];
                const animItemHeight = animItem.offsetHeight;
                const animItemOffset = offset(animItem).top;
                const animStart = 4;

                let animItemPoint = window.innerHeight - animItemHeight / animStart;

                if (animItemHeight > window.innerHeight) {
                    animItemPoint = window.innerHeight - window.innerHeight / animStart;
                }

                if((pageYOffset > animItemOffset - animItemPoint) && pageYOffset < (animItemOffset + animItemHeight)) {
                    animItem.classList.add('_active');
                } else {
                    if (!animItem.classList.contains('_anim-no-hide')) {
                        animItem.classList.remove('_active');
                    }
                }
            }
        }
        function offset(el) {
            const rect = el.getBoundingClientRect(),
            scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
            scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            return { top: rect.top + scrollTop, left: rect.left + scrollLeft }
        }
    }
  
      const globeViz = document.getElementById('globe');
      if (globeViz) {
        const world = Globe();
        world(globeViz)
        .globeImageUrl('https://unpkg.com/three-globe@2.18.3/example/img/earth-night.jpg')
      //   .globeImageUrl('./assets/planet-texture.jpg')
        .pointAltitude('size')
        .pointColor('color')
        .backgroundColor('rgba(0,0,0,0)')
        .atmosphereAltitude(0);
        
          // Add auto-rotation
        world.controls().autoRotate = true;
        world.controls().autoRotateSpeed = 0.6;
        world.controls().enableZoom = false;

        window.addEventListener('resize', () => {
            world.width([window.innerWidth])
            world.height([window.innerHeight])
          });
      }