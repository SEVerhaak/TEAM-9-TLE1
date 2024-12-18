// Check of de gebruiker de tutorial al gezien heeft



document.addEventListener('DOMContentLoaded', () => {


    const hasSeenTutorial = localStorage.getItem('hasSeenTutorial');
        if (!hasSeenTutorial) {

                startTutorial(); // Start de tutorial zodra #button1 gevonden is
                localStorage.setItem('hasSeenTutorial', 'true'); // Markeer de tutorial als gezien

    }
});



function startTutorial() {
    console.log('Tutorial gestart!');
    // create black overlay
    const overlay = document.createElement('div');
    overlay.classList.add('overlay');
    document.body.appendChild(overlay);
    // make overlay black and transparent
    overlay.style.backgroundColor = 'rgba(0,0,0,0.5)';
    overlay.style.position = 'fixed';
    overlay.style.top = 0;
    overlay.style.left = 0;
    overlay.style.width = '100%';
    overlay.style.height = '100%';



    //create dom element with css class
    const tutorial = document.createElement('div');
    tutorial.classList.add('tutorial');
    //add text to the element
    tutorial.innerHTML = `
        <h1 id="h1">Welkom bij de rondleiding!</h1>
        <p></p>
        <p>We leggen je op deze manier uit hoe deze site werkt
        <br>
        Druk op "volgende" om te beginnen met de ronleiding!</p>

        <button id="stepOne">Volgende</button>
    `;
    //add element to the body
    document.body.appendChild(tutorial);
    tutorial.style.textAlign = 'center';
    tutorial.style.position = 'fixed';
    tutorial.style.top = '50vh';
    tutorial.style.left = '2.3vw';
    //give background color white and padding
    tutorial.style.backgroundColor = 'white';
    tutorial.style.padding = '0.6rem';
    tutorial.style.borderRadius = '10px';
    // tutorial.style.fontWeight = 'bold';
    tutorial.style.fontSize = '1rem';
    document.getElementById('stepOne').style.fontWeight = 'bolder';
    document.getElementById('stepOne').style.fontSize = '1.3rem';
    document.getElementById('stepOne').style.marginTop = '1rem';
    document.getElementById('h1').style.marginBottom = '1rem';


    document.getElementById('stepOne').addEventListener('click', () => {
        console.log('stepOne');
        document.querySelector('.tutorial').remove();
        stepOne();
    });
}

function stepOne() {
    console.log('gang');


    //create dom element with css class
    const firstStep = document.createElement('div');
    firstStep.classList.add('tutorial');
    //add text to the element
    firstStep.innerHTML = `

        <p></p>
        <p>Als je op de home knop drukt kom je weer terug op de home pagina
        </p>

        <button id="stepTwo">Volgende</button>
    `;
    //add element to the body
    document.body.appendChild(firstStep);
    firstStep.style.textAlign = 'center';
    firstStep.style.position = 'fixed';
    firstStep.style.bottom = '30vh';
    firstStep.style.left = '2.3vw';
    //give background color white and padding
    firstStep.style.backgroundColor = 'white';
    firstStep.style.padding = '0.3rem';
    firstStep.style.borderRadius = '10px';
    // tutorial.style.fontWeight = 'bold';
    firstStep.style.fontSize = '1rem';

    firstStep.style.width = '40vw';


    document.getElementById('stepTwo').style.fontWeight = 'bolder';
    document.getElementById('stepTwo').style.fontSize = '1.3rem';
    document.getElementById('stepTwo').style.marginTop = '1rem';
    document.getElementById('stepTwo').style.marginTop = '1rem';
    document.getElementById('stepTwo').style.fontWeight = 'bold';

    const arrow = document.createElement('img');
    arrow.src = "images/arrow_down.png";

    //add element to the body
    document.body.appendChild(arrow);
    // give position
    arrow.style.position = 'fixed';
    arrow.style.bottom = '17vh';
    arrow.style.left = '5vw';
    arrow.style.width = '24vw';




    document.getElementById('stepTwo').addEventListener('click', () => {
        console.log('stepTwo');
        document.querySelector('.tutorial').remove();
        //remove arrow
        arrow.remove();
        stepTwo();
    });
}

function stepTwo() {
    console.log('gang');

    //create dom element with css class
    const secondStep = document.createElement('div');
    secondStep.classList.add('tutorial');
    //add text to the element
    secondStep.innerHTML = `

        <p></p>
        <p>Als je op de vacature knop drukt ga je naar de vacature pagina!
        </p>

        <button id="stepTwo">Volgende</button>
    `;
    //add element to the body
    document.body.appendChild(secondStep);
    secondStep.style.textAlign = 'center';
    secondStep.style.position = 'fixed';
    secondStep.style.bottom = '30vh';
    secondStep.style.left = '30vw';
    //give background color white and padding
    secondStep.style.backgroundColor = 'white';
    secondStep.style.padding = '0.3rem';
    secondStep.style.borderRadius = '10px';
    // tutorial.style.fontWeight = 'bold';
    secondStep.style.fontSize = '1rem';

    secondStep.style.width = '50vw';


    document.getElementById('stepTwo').style.fontWeight = 'bolder';
    document.getElementById('stepTwo').style.fontSize = '1.3rem';
    document.getElementById('stepTwo').style.marginTop = '1rem';
    document.getElementById('stepTwo').style.marginTop = '1rem';
    document.getElementById('stepTwo').style.fontWeight = 'bold';

    const arrow = document.createElement('img');
    arrow.src = "images/arrow_down.png";

    //add element to the body
    document.body.appendChild(arrow);
    // give position
    arrow.style.position = 'fixed';
    arrow.style.bottom = '17vh';
    arrow.style.left = '40vw';
    arrow.style.width = '24vw';

    console.log('gang2');
    document.getElementById('stepTwo').addEventListener('click', () => {
        console.log('gang');
        document.querySelector('.tutorial').remove();
        //remove arrow
        arrow.remove();
        stepThree();
    });

}

function stepThree() {
    console.log('gang3STEP3');
    //create dom element with css class
    const thirdStep = document.createElement('div');
    thirdStep.classList.add('tutorial');
    //add text to the element
    thirdStep.innerHTML = `

        <p></p>
        <p>Bij de instellingen kan je alles over je account vinden!
        </p>

        <button id="stepTwo">Volgende</button>
    `;
    //add element to the body
    document.body.appendChild(thirdStep);
    thirdStep.style.textAlign = 'center';
    thirdStep.style.position = 'fixed';
    thirdStep.style.bottom = '30vh';
    thirdStep.style.right = '0vw';
    //give background color white and padding
    thirdStep.style.backgroundColor = 'white';
    thirdStep.style.padding = '0.3rem';
    thirdStep.style.borderRadius = '10px';
    // tutorial.style.fontWeight = 'bold';
    thirdStep.style.fontSize = '1rem';

    thirdStep.style.width = '50vw';


    document.getElementById('stepTwo').style.fontWeight = 'bolder';
    document.getElementById('stepTwo').style.fontSize = '1.3rem';
    document.getElementById('stepTwo').style.marginTop = '1rem';
    document.getElementById('stepTwo').style.marginTop = '1rem';
    document.getElementById('stepTwo').style.fontWeight = 'bold';

    const arrow = document.createElement('img');
    arrow.src = "images/arrow_down.png";

    //add element to the body
    document.body.appendChild(arrow);
    // give position
    arrow.style.position = 'fixed';
    arrow.style.bottom = '17vh';
    arrow.style.right = '8vw';
    arrow.style.width = '24vw';

    console.log('gang2');
    document.getElementById('stepTwo').addEventListener('click', () => {
        console.log('gang');
        document.querySelector('.tutorial').remove();
        //remove arrow
        arrow.remove();
        //remove overlay
        document.querySelector('.overlay').remove();
        stepFour();
    });

}

function stepFour() {
    console.log('step4 start of function');

    //create dom element with css class
    const thirdStep = document.createElement('div');
    thirdStep.classList.add('tutorial');
    //add text to the element
    thirdStep.innerHTML = `

        <p></p>
        <p>Via deze knop kan je je account aanmaken!

        </p>

        <button id="stepTwo">Ik ga zelf rondkijken!</button>
    `;
    //add element to the body
    document.body.appendChild(thirdStep);
    thirdStep.style.textAlign = 'center';
    thirdStep.style.position = 'absolute';
    thirdStep.style.zIndex = '99999999';
    thirdStep.style.top = '40vh';
    thirdStep.style.right = '8vw';
    //give background color white and padding
    thirdStep.style.backgroundColor = 'white';
    thirdStep.style.padding = '0.3rem';
    thirdStep.style.borderRadius = '10px';
    // tutorial.style.fontWeight = 'bold';
    thirdStep.style.fontSize = '1rem';
    thirdStep.style.border = 'solid black 1px';

    thirdStep.style.width = '50vw';


    document.getElementById('stepTwo').style.fontWeight = 'bolder';
    document.getElementById('stepTwo').style.fontSize = '1rem';
    document.getElementById('stepTwo').style.marginTop = '1rem';
    document.getElementById('stepTwo').style.marginTop = '1rem';
    document.getElementById('stepTwo').style.fontWeight = 'bold';

    const arrow = document.createElement('img');
    arrow.src = "images/arrow_down.png";

    //add element to the body
    document.body.appendChild(arrow);
    // give position
    arrow.style.position = 'absolute';
    arrow.style.top = '52.5vh';
    arrow.style.right = '26vw';
    arrow.style.width = '12vw';

    document.getElementById('stepTwo').addEventListener('click', () => {
        console.log('closing tutorial and overlay and arrow');
        document.querySelector('.tutorial').remove();
        //remove arrow
        arrow.remove();
        //remove overlay

        stepFive();
    });
}
function stepFive() {
    console.log('step5 start of function');
}
