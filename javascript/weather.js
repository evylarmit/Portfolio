function getWeatherData(location) {
    const apiKey = "c49b323a6a35b644b35f8b8ac47c0edd";
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
    const temperature = document.querySelector("#temp");
    const condition = document.querySelector("#conditie");
    const location = document.querySelector("#locatie");
  
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
      updateUI(weatherData);
    })
    .catch(error => {
      console.log(error);
    });
});
