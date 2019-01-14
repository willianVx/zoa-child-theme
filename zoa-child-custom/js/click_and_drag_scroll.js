    const slider = document.querySelector('.scrolling-wrapper');
    let isDown = false;
    let startX;
    let scrollleft;

    slider.addEventListener('mousedown', (e) => {
        isDown = true;
        slider.classList.add('active');
        startX = e.pageX - slider.offsetLeft;
        scrollleft = slider.scrollLeft;
    });

    slider.addEventListener('mouseleave', () => {
        isDown = false;
        slider.classList.remove('active');
    });

    slider.addEventListener('mouseup', () => {
        isDown = false;
        slider.classList.remove('active');
    });

    slider.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 3;
        slider.scrollLeft = scrollleft - walk;
    });

    const scroll_prev = document.getElementsByClassName('scroll_prev');
    const scroll_next = document.getElementsByClassName('scroll_next');

    console.log(scroll_prev);
    console.log(scroll_prev[0]);

    scroll_prev[0].addEventListener('click', () => {
        slider.scrollLeft = slider.scrollLeft - 200;
    });

    scroll_prev[1].addEventListener('click', () => {
        slider.scrollLeft = slider.scrollLeft - 200;
    });

    scroll_prev[2].addEventListener('click', () => {
        slider.scrollLeft = slider.scrollLeft - 200;
    });

    scroll_next[0].addEventListener('click', () => {
        slider.scrollLeft = slider.scrollLeft + 200;
    });

    scroll_next[1].addEventListener('click', () => {
        slider.scrollLeft = slider.scrollLeft + 200;
    });
    
    scroll_next[2].addEventListener('click', () => {
        slider.scrollLeft = slider.scrollLeft + 200;
    });







