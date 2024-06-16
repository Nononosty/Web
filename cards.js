document.addEventListener('DOMContentLoaded', function() {
    const hoody = document.querySelectorAll('.hoody');
    hoody.forEach(item => {
        item.addEventListener('click', function() {
            const imgSrc = item.querySelector('.h_i').src;
            const title = item.querySelector('h3').innerText;
            const description = item.dataset.description;

            const popup = document.createElement('div');
            popup.classList.add('popup');
            
            const img = document.createElement('img');
            img.src = imgSrc;
            
            const h3 = document.createElement('h3');
            h3.innerText = title;

            const p = document.createElement('p');
            p.innerText = description;

            const closeBtn = document.createElement('button');
            closeBtn.innerText = 'Х';
            closeBtn.addEventListener('click', function() {
                popup.remove();
            });
            
            popup.appendChild(img);
            popup.appendChild(h3); 

            popup.appendChild(p);

            popup.appendChild(closeBtn);
            
            document.body.appendChild(popup);
        });
    });
    });