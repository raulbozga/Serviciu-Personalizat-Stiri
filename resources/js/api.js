//const apikey="2152f98272b840fdaed102813222904";
const apikey = "26c3c6cb2249167251ba46a4774c4b0c";

const newsdataIo = "https://newsdata.io/api/1/news?apikey=pub_84288303248520ee801ef808f4ef5dc36fc0&country=ro&category=sports";

const main = document.getElementById('main');
const form = document.getElementById('form');
const search = document.getElementById('search');

const url = (news) => `${newsdataIo}`;

//function getData() {

async function getWeather(news) {
    const resp = await fetch(url(news),

        {

            origin: "cors"

        });
    const respData = await resp.json();

    console.log(respData);

    respData.results.forEach(news => {

        const { description, title, link } = news;
        const newsEL = document.createElement('div');
        newsEL.classList.add('news');

        newsEL.innerHTML = `
                    <div class="author">
                          <h2> ${title} </h2>
                    </div> 
                    <div class="title">
                          <p> ${description} </p>
                          <a href="${link}" >Go to source-></a>
                     </div>
    
    
    
                `;

        main.appendChild(newsEL);
    });

    return respData;

}

// function addWeatherToPage(data) {
//     const author = data.data.map(p => p.author);
//     const temp = data.data.map(p => p.title);
//     const condition = data.data.map(p => p.description);

//     const weather = document.createElement('div');
//     weather.classList.add('weather');

//     weather.innerHTML = `
//         <small>Autorul este ${author} </small>
//         <h2>Titlul este ${temp} </h2>


//     `;

//     main.innerHTML = "";

//     main.appendChild(weather);
// }

// form.addEventListener("submit", (e) => {

//     e.preventDefault();

//     const newsEL = search.value;

//     if (newsEL) {
//         getWeather(newsEL);
//     }
// });

getWeather("health");

//}

