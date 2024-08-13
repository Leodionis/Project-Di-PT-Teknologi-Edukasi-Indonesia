document.addEventListener('DOMContentLoaded', () => {
    const reviewsContainer = document.querySelector('.reviews');

    const reviewsData = [
        {
            name: "Nama User",
            program: "Program yang diikuti",
            text: "Framer has helped me to scale my agency by being able to make websites in a very efficient and creative way."
        },
        {
            name: "Nama User",
            program: "Program yang diikuti",
            text: "As a seasoned designer always on the lookout for innovative tools, Framer.com instantly grabbed my attention. This powerful web design platform is more than just a design tool - it's a complete ecosystem that revolutionizes the way websites are created and published."
        },
        {
            name: "Nama User",
            program: "Program yang diikuti",
            text: "Framer has helped me to scale my agency by being able to make websites in a very efficient and creative way."
        },
        {
            name: "Nama User",
            program: "Program yang diikuti",
            text: "Framer has helped me to scale my agency by being able to make websites in a very efficient and creative way."
        },
        {
            name: "Nama User",
            program: "Program yang diikuti",
            text: "As a seasoned designer always on the lookout for innovative tools, Framer.com instantly grabbed my attention. This powerful web design platform is more than just a design tool - it's a complete ecosystem that revolutionizes the way websites are created and published."
        },
        {
            name: "Nama User",
            program: "Program yang diikuti",
            text: "Framer has helped me to scale my agency by being able to make websites in a very efficient and creative way."
        }
    ];

    reviewsData.forEach(review => {
        const reviewCard = document.createElement('div');
        reviewCard.classList.add('review-card');
        
        reviewCard.innerHTML = `
            <div class="review-header">
                <p class="name">${review.name}</p>
                <p class="program">${review.program}</p>
            </div>
            <div class="review-body">
                <p>${review.text}</p>
            </div>
        `;
        
        reviewsContainer.appendChild(reviewCard);
    });
});
