document.addEventListener('DOMContentLoaded', function () {
    new Splide('.splide', {
        type: 'loop',
        height: 270,
        autoWidth: 270,
        perPage: 4,
        focus: 'center',
        autoplay: true,
        pauseOnHover: true,
        trimSpace: false,
        lazyLoad: "nearby",
    }).mount();

    const cards = document.querySelectorAll(".p-faq");
    cards.forEach((card) => {
        card.querySelector('.p-faq__question').addEventListener('click', function () {
            var active = card.querySelector('.p-faq__question').classList.toggle('active');
            // var showAnswer = card.querySelector('.p-faq__answer').classList.toggle('show');
            var showAnswer = card.querySelector('.p-faq__answer');

            if (showAnswer.classList.contains('hidden')) {
                showAnswer.classList.replace('hidden', 'show');
                card.querySelector('.p-faq__action').innerHTML = " - ";
            } else {
                showAnswer.classList.replace('show', 'hidden');
                card.querySelector('.p-faq__action').innerHTML = " + ";
            }
        });
    });
    // for (var i = 0; i < cards.length; ++i) {
    //     console.log(cards[i]);
    //     cards[i].addEventListener('click', () => {

    //     });
    // }


});