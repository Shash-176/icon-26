var mouseX = 0,
    mouseY = 0,
    windowHalfX = window.innerWidth / 2,
    windowHalfY = window.innerHeight / 2,
    SEPARATION = 100,
    AMOUNTX = 10,
    AMOUNTY = 10,
    camera,
    scene,
    renderer,
    isInsideHero = true,
    dfactor = 0.05; // Damping factor for animation   

init();
animate();

function init() {
    // Get the #intro section
    var introSection = document.getElementById('intro');

    // ! flag
    // Add an event listener to track mouse entering #hero
    document.getElementById('intro').addEventListener('mouseenter', function () {
        isInsideHero = true;
    });

    // Add an event listener to track mouse leaving #hero
    document.getElementById('intro').addEventListener('mouseleave', function () {
        isInsideHero = false;
    });

    // Create a div element for the "ICON" text
    var iconText = document.createElement('div');
    iconText.id = 'icon-text';

    //* TEXT badal do
    iconText.innerText = 'ICON';

    // Append the text element to the #intro section
    introSection.appendChild(iconText);

    var container,
        separation = 100,
        amountX = 50,
        amountY = 50,
        particle;

    console.log("THREE")
    container = document.createElement('div');
    container.id = 'hero-section';
    document.getElementById('intro').appendChild(container);

    scene = new THREE.Scene();

    renderer = new THREE.CanvasRenderer({ alpha: true }); // gradient; this can be swapped for WebGLRenderer
    renderer.setSize(window.innerWidth, window.innerHeight);
    container.appendChild(renderer.domElement);

    camera = new THREE.PerspectiveCamera(
        75,
        window.innerWidth / window.innerHeight,
        1,
        10000
    );
    camera.position.z = 100;

    // particles
    var PI2 = Math.PI * 2;
    var material = new THREE.SpriteCanvasMaterial({
        color: 0x58595b,
        program: function (context) {
            context.beginPath();
            context.arc(0, 0, 0.5, 0, PI2, true);
            context.fill();
        }
    });

    var geometry = new THREE.Geometry();

    for (var i = 0; i < 100; i++) {
        particle = new THREE.Sprite(material);
        particle.position.x = Math.random() * 2 - 1;
        particle.position.y = Math.random() * 2 - 1;
        particle.position.z = Math.random() * 2 - 1;
        particle.position.normalize();
        particle.position.multiplyScalar(Math.random() * 10 + 450);
        particle.scale.x = particle.scale.y = 10;
        scene.add(particle);
        geometry.vertices.push(particle.position);
    }

    // lines
    var line = new THREE.Line(geometry, new THREE.LineBasicMaterial({ color: 0x58595b, opacity: 0.5 }));
    scene.add(line);

    // mousey
    document.addEventListener('mousemove', onDocumentMouseMove, false);
    document.addEventListener('touchstart', onDocumentTouchStart, false);
    document.addEventListener('touchmove', onDocumentTouchMove, false);

    window.addEventListener('resize', onWindowResize, false);

} // end init();

function onWindowResize() {

    windowHalfX = window.innerWidth / 2;
    windowHalfY = window.innerHeight / 2;

    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();

    renderer.setSize(window.innerWidth, window.innerHeight);

}

function onDocumentMouseMove(event) {

    mouseX = event.clientX - windowHalfX;
    mouseY = event.clientY - windowHalfY;

}

function onDocumentTouchStart(event) {

    if (event.touches.length > 1) {

        event.preventDefault();

        mouseX = event.touches[0].pageX - windowHalfX;
        mouseY = event.touches[0].pageY - windowHalfY;

    }
}

function onDocumentTouchMove(event) {

    if (event.touches.length == 1) {

        event.preventDefault();

        mouseX = event.touches[0].pageX - windowHalfX;
        mouseY = event.touches[0].pageY - windowHalfY;

    }
}

// first render

function animate() {
    requestAnimationFrame(animate);

    if (isInsideHero) {
        // ? use damping factor
        dfactor = 0.05;
    } else {
        // ? If the mouse is outside, gradually reduce 
        if (dfactor > 0) {
            dfactor -= 0.0002;
        } else {
            //? Ensure it doesn't become negative
            dfactor = 0;
        }
    }
    render();
}


function render() {

    camera.position.x += (mouseX - camera.position.x) * dfactor;
    camera.position.y += (-mouseY + 200 - camera.position.y) * dfactor;
    camera.lookAt(scene.position);

    renderer.render(scene, camera);

}

// TEXT
