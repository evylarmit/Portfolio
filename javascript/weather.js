function getWeatherData(location) {
    const apiKey = "5d250a986f6336676e5b65f41f2d381a";
    const url = `https://api.openweathermap.org/data/2.5/weather?q=${location}&units=metric&appid=${apiKey}`;
    return fetch(url)
      .then(response => response.json())
      .then(data => {
        const weatherData = {
          temperature: data.main.temp,
          condition: data.weather[0].main,
          location: data.name,
        };
        return weatherData;
      });
  }
  function updateUI(weatherData) {
    const temperature = document.querySelector("#temperature");
    const condition = document.querySelector("#condition");
    const location = document.querySelector("#location");
  
    temperature.textContent = `${weatherData.temperature}°C`;
    condition.textContent = weatherData.condition;
    location.textContent = weatherData.location;
    
  }
  
  const searchBtn = document.querySelector("#search-btn");
  const searchBar = document.querySelector("#search-bar");
  
  searchBtn.addEventListener("click", () => {
    const location = searchBar.value;
    
    getWeatherData(location)
      .then(weatherData => {
        changeImg(weatherData.condition);
        updateUI(weatherData);
      })
      .catch(error => {
        console.log(error);
      });
  });
  
  
  function changeImg(condition) {
    console.log(condition);
    if (condition == 'Clouds'){
      document.getElementById("weather-img").src="img/clouds.jpg"
    } else if (condition == 'Sun') {
      document.getElementById("weather-img").src="img/sun.jpg"
    } else if (condition == 'Snow') {
      document.getElementById("weather-img").src="img/snow.jpg"
    } else if (condition == 'Rain') {
      document.getElementById("weather-img").src="img/rain.jpg"
    } else if (condition == 'Clear'){
      document.getElementById("weather-img").src="img/clear.jpg"
    } else {
      document.getElementById("weather-img").src="img/wrong.jpg"
    }
  }