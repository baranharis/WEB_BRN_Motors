let button = document.getElementById("button-car");
let image = document.getElementById("image-car");
let carNumber = document.getElementById("number-car");
let carName = document.getElementById("name-car");


const changeCar = async() =>{
    let randomNumber = Math.ceil(Math.random() * 150)+1;
    
    let requestString = `https://pokeapi.co/api/v2/pokemon/${randomNumber}`;

    let data = await fetch(requestString);
    //console.log(data);

    let response = await data.json(data)
    console.log(response);

    image.src = response.sprites.front_default;
    carNumber.textContent = `#${response.id}`;
    carName.textContent = response.name;
}

changeCar();
button.addEventListener("click", changeCar);