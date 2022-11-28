const carousel = document.querySelector('.trustedUs--carousel');
const allLogo = document.querySelectorAll('.trustedUs--item');
const logoWidth = document.querySelector('.trustedUs--item').offsetWidth;
const paginationButton = document.querySelectorAll('.trustedUs--pagination > span');


paginationButton[0].classList.add('activePagination');

let currentTab = 1;
let playSlider;

const itemInTab = 4;
let numberOfTabs = Math.round(allLogo.length / itemInTab) - 1;

if((allLogo.length % itemInTab) > 0) {
    numberOfTabs += 1;
}

console.log(numberOfTabs);

const tabWidth = logoWidth * itemInTab;

const scrollDistance = (index) => {
    let scrollVal = index * tabWidth;
    return scrollVal;
}



const scrollTab = (index) => {
    carousel.scrollLeft = scrollDistance(index);
}

const paginationAddClass = (index) => {
    //add class to activePagination button
    paginationButton[index].classList.add('activePagination');
}

const paginationRemoveClass = () => {
    for (const pagination of paginationButton) {
        pagination.classList.remove('activePagination')
    }
}


let slideRepeater = () => {
    playSlider = setInterval(() => {
        //remove all class in interval
        paginationRemoveClass();
        //add class in interval
        paginationAddClass(currentTab);

        scrollTab(currentTab);
        
        currentTab++;
        if(currentTab > numberOfTabs) {
            currentTab = 0;
        };

        
    }, 4000)
};
slideRepeater();

const scrollTabClick = () => {
    paginationButton.forEach((button, index) => {
        button.addEventListener('click', () => {
            paginationRemoveClass();

            //Clear interval
            clearInterval(playSlider);

            currentTab = index + 1;

            if(currentTab > numberOfTabs) {
                currentTab = 0;
            };

            slideRepeater();

            //next tab action
            scrollTab(index);

            paginationAddClass(index);

        });
    });
}

scrollTabClick();


