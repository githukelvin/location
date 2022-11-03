const loc = () => {
  function success(position) {
    console.log(position);

    const{coords:{latitude},coords:{longitude}}=position;
    
    const Burl= `https://api.bigdatacloud.net/data/reverse-geocode-client?latitude=${latitude}&longitude=${longitude}&localityLanguage=en`
    fetch(Burl)
    .then(Resolve=>Resolve.json())
    .then(resolve=>{
        const {city,continent,continentCode,countryName,principalSubdivision
        }=resolve;
        div = `<ul>
           <li>Continent :${continent}</li>
           <li>Continent Code :${continentCode}</li>
           <li>Country :${countryName}</li>
           <li>City :${city}</li>
           <li>District :${principalSubdivision}</li>
        </ul>`

        document.querySelector(".div").innerHTML +=div
        console.log(resolve)
    })
     
  }
  function error(){
    console.log("we are fucked");
  }
  navigator.geolocation.getCurrentPosition(success,error);


}

const btn =document.querySelector(".btn")
btn.addEventListener("click",loc);
