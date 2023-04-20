let apiKey = "7c906fd2f1359b69d792183ac6cc79bc";
let city = "Anjar";

let apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric`;

fetch(apiUrl)
  .then(response => response.json())
  .then(data => {
    console.log(data);
    let temperature = data['main']['temp'];
    let description = data['weather'][0]['description'];
    let icon = data['weather'][0]['icon'];

    document.getElementById("temperature").innerHTML = temperature;
    document.getElementById("description").innerHTML = description;
    document.getElementById("icon").setAttribute("src", `https://openweathermap.org/img/w/${icon}.png`);
  })
  .catch(error => console.log(error));
