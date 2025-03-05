import './bootstrap';
const image = document.getElementById('book');

// image.addEventListener('mousemove', (event) => {
//     const rect = image.getBoundingClientRect();
//     const x = event.clientX - rect.left;
//     const y = event.clientY - rect.top;
//
//     // Log the coordinates
//     console.log(`Mouse X: ${x}, Mouse Y: ${y}`);
// });

    window.onload = function () {
    const img = document.getElementById('book');
    const areas = document.querySelectorAll('area');

    img.onload = function () {
    const imgWidth=img.width;
    const imgHeight=img.height;

    const area1Coords = [0, 0, Math.ceil(imgWidth / 2), imgHeight];
    const area2Coords = [Math.ceil(imgWidth / 2), 0, imgWidth, imgHeight];

    areas[0].setAttribute('coords', area1Coords.join(','));
    areas[1].setAttribute('coords', area2Coords.join(','));
};

    if (img.complete) {
    img.onload();
}
};




