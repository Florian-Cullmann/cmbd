import './bootstrap';
import 'bootstrap';

document.querySelectorAll('.toggle-details').forEach(button => {
    button.addEventListener('click', () => {
        const target = document.querySelector(button.dataset.target);

        if (target) {
            if (target.classList.contains('d-none')) {
                // Remove `d-none` to make the element visible
                target.classList.remove('d-none');

                // Set the initial height to 0 to prepare for sliding down
                target.style.height = '0px';

                requestAnimationFrame(() => {
                    target.style.height = target.scrollHeight + 'px'; // Smoothly transition to full height
                });
            } else {
                target.style.height = target.scrollHeight + 'px';

                // Allow the browser to calculate the height
                requestAnimationFrame(() => {
                    target.style.height = '0px';
                });

                // Once the animation is done, hide the element
                target.addEventListener(
                    'transitionend',
                    () => {
                        if (target.style.height === '0px') {
                            target.classList.add('d-none');
                        }
                    },
                    { once: true }
                );
            }
        }
    });
});
