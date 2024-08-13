document.addEventListener('DOMContentLoaded', () => {
    getRecommendations(); // Initial call to populate recommendations on load
});

function getRecommendations() {
    const careerStage = document.getElementById('career-stage').value;
    const interestArea = document.getElementById('interest-area').value;
    const recommendationsDiv = document.getElementById('recommendations');

    // Clear previous recommendations
    recommendationsDiv.innerHTML = '';

    // Define some example programs with links to their details
    const programs = [
        {
            careerStage: 'portofolio',
            interestArea: 'creative',
            title: 'Graphic Designer',
            description: 'Program pilihan untuk magang menjadi seorang graphic designer dengan durasi maksimal 3 bulan.',
            image: 'img/d.jpeg',
            link: 'program-graphic-designer.html'
        },
        {
            careerStage: 'portofolio',
            interestArea: 'creative',
            title: 'Video Editor',
            description: 'Program pilihan untuk magang menjadi seorang video editor dengan durasi maksimal 3 bulan.',
            image: 'img/v.PNG',
            link: 'program-video-editor.html'
        },
        {
            careerStage: 'it',
            interestArea: 'engineering',
            title: 'Software Engineer',
            description: 'Program pilihan untuk magang menjadi seorang software engineer dengan durasi maksimal 6 bulan.',
            image: 'img/j.PNG',
            link: 'program-software-engineer.html'
        },
        {
            careerStage: 'advanced',
            interestArea: 'finance',
            title: 'Financial Analyst',
            description: 'Program pilihan untuk magang menjadi seorang financial analyst dengan durasi maksimal 6 bulan.',
            image: 'financial-analyst.jpg',
            link: 'program-financial-analyst.html'
        }
        // Add more programs as needed
    ];

    // Filter programs based on selected criteria
    const filteredPrograms = programs.filter(program => program.careerStage === careerStage && program.interestArea === interestArea);

    // Display filtered programs
    filteredPrograms.forEach(program => {
        const programDiv = document.createElement('a');
        programDiv.className = 'program recommendation-program'; // Added "recommendation-program" class
        programDiv.href = program.link;

        const programImage = document.createElement('img');
        programImage.src = program.image;
        programDiv.appendChild(programImage);

        const programTitle = document.createElement('h3');
        programTitle.textContent = program.title;
        programDiv.appendChild(programTitle);

        const programDescription = document.createElement('p');
        programDescription.textContent = program.description;
        programDiv.appendChild(programDescription);

        recommendationsDiv.appendChild(programDiv);
    });
}
function toggleContent(id) {
    const content = document.getElementById(id);
    console.log("🚀 ~ toggleContent ~ content:", content)
    if (content.style.display === "none" || content.style.display === "") {
        content.style.display = "block";
    } else {
        content.style.display = "none";
    }
}
const selectorDropdown = ()=>{
    let getSelectorHeaderElement = document.getElementById('selector-header')
    let getRecomHeaderElement = document.getElementById('recom-header')

    let getSelectorPopupValue = document.querySelectorAll('.selector-popup-value')
    let getRecomPopupValue = document.querySelectorAll('.selector-popup-recom-value')
    
    let getSelectorPopupEl = document.getElementById('selector-popup')
    let getRecomPopupEl = document.getElementById('selector-recomendation')

    let selector = document.getElementById('btn-selector')
    let recommendation = document.getElementById('btn-recom')

    let programElement = document.getElementById('program-recomendation')
    let selectorData = ""
    let recomData = ""

    if(selector.onclick = ()=>{
        programElement.style.display = "none";
        getSelectorPopupEl.classList.toggle('active-popup')
        getSelectorPopupValue.forEach(option=>{
            option.onclick = (event)=>{
                getSelectorHeaderElement.textContent = event.target.textContent;
                getSelectorPopupEl.classList.remove('active-popup')
                // console.log(event.target.getAttribute('data-value'));
                selectorData = event.target.getAttribute('data-value')         
                checkOption()
            }
        })
    });
    if(recommendation.onclick = ()=>{
        programElement.style.display = "none";
        getRecomPopupEl.classList.toggle('active-popup')
        getRecomPopupValue.forEach(option=>{
            option.onclick = (event)=>{
                getRecomHeaderElement.textContent = event.target.textContent;
                getRecomPopupEl.classList.remove('active-popup')
                recomData = event.target.getAttribute('data-value')
                checkOption()
            }
        })
    });
    let checkOption = ()=>{
        if(selectorData == 'option3' && recomData == 'recom3'){
            console.log("testing")
            programElement.style.display = "block";
        }else{
            programElement.style.display = "none";
        }
    }
}
