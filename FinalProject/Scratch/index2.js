

async function fetchData(){
    try{
        const pokeName = document.getElementById("pokemonName").value.toLowerCase();
        const response = await fetch(`https://pokeapi.co/api/v2/pokemon/${pokeName}`);
        
        if (!response.ok){
            throw new Error("could not fetch");
        }
        const data = await response.json();
        const pokeSprites = data.sprites.front_default;
        const imgElement = document.getElementById("pok");

        imgElement.src = pokeSprites;
        imgElement.style.display = "block";
    }
    catch (error){
        console.error(error);
    }
} 
/*
fetch("https://pokeapi.co/api/v2/pokemon/pikachu")
.then(response => {
    if(!response.ok){
        throw new Error("theres an error");
    }
    return response.json();
})
.then(data => console.log(data.name))
.catch(error => console.error(error));
*/