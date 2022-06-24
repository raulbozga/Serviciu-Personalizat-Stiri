const apikey = "2152f98272b840fdaed102813222904";


const main = document.getElementById('main');
const form = document.getElementById('form');
const search = document.getElementById('search');

const url = (city) => `http://api.weatherapi.com/v1/current.json?key=${apikey}&q=${city}`;

async function getWeather(city) {
    const resp = await fetch(url(city), {

        origin: "cors"

    });
    const respData = await resp.json();

    console.log(respData);

    addWeatherToPage(respData);

}

function addWeatherToPage(data) {

    const temp = data.current.temp_c;
    const condition = data.current.condition.text;
    const icon = data.current.condition.icon;

    const weather = document.createElement('div');
    weather.classList.add('weather');

    weather.innerHTML = `
        <small>Sunt </small>
        <h2>${temp} °C</h2>
        <p>in ${search.value}</p>
        <p>Sky ${condition}</p>
    `;

    main.innerHTML = "";

    main.appendChild(weather);
}

if (form) {
    form.addEventListener("submit", (e) => {

        e.preventDefault();

        const city = search.value;

        if (city) {
            getWeather(city);
        }
    });
}
//getWather("Baia Mare");