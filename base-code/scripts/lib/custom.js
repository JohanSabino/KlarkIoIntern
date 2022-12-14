// put your custom js in the file

//Note: selectors should use jquery style selecting only
var myCarousel = document.querySelector('#carouselExampleIndicators');
var myModalEl = document.getElementById('ModalScrollable');

myModalEl.addEventListener('show.bs.modal', function (event) {
    const trigger = event.relatedTarget;
    var bsCarousel = bootstrap.Carousel.getInstance(myCarousel);
    bsCarousel.to(trigger.dataset.bsSlideTo);
});
