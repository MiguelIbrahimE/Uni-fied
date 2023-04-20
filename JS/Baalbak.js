 

let apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=Baalbek&appid=7c906fd2f1359b69d792183ac6cc79bc&units=metric`;

fetch(apiUrl)
  .then(response => response.json())
  .then(data => {
    console.log(data);
    let temperature = data['main']['temp'];
    let description = data['weather'][0]['description'];
    let icon = data['weather'][0]['icon'];
    let precipitation = data['rain'] ? data['rain']['1h'] : 0;
  
    document.getElementById("city-name").innerHTML = data['name'];
    document.getElementById("temperature").innerHTML = `${temperature}&deg;C`;
    document.getElementById("description").innerHTML = description;
    document.getElementById("weather-icon").setAttribute("src", `https://openweathermap.org/img/w/${icon}.png`);
    document.getElementById("precipitation").innerHTML = `Precipitation: ${precipitation} mm`;

  })
  .catch(error => console.log(error));
