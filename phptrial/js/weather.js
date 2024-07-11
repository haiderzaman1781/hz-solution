const input =document.getElementById("input-field");
const search =document.getElementById("btn_search");




function getdata(city_name) {
    var url = "http://api.weatherapi.com/v1/current.json?key=6efe206782ab4d388b074730240907&q="+city_name+"&aqi=yes";
    //alert(url);
    const promise = fetch(url)
    // if(!response.ok){
    //     throw new Error("Server Issue");
    // }
    alert("response");
    return false;
    return promise.json();
}

search.addEventListener("click" , ()=>{
    const data = input.value;
    const result = getdata(data);
    console.log(result);

});


// function for API

//  async function getdata(city_name){
//     const wada = await fetch(
//         `http://api.weatherapi.com/v1/current.json?key=6efe206782ab4d388b074730240907&q=${city_name}&aqi=yes`
// )
// if (!response.ok) {
//     throw new Error('Network response was not ok.');
// }
//  const data = await wada.json();
// return data;
// }


// search.addEventListener("click", async () => {
//     const input_value = input.value 
//     if (input_value) {
//         const data = await getdata(input_value);
//         if (data) {
//             console.log(data);
//         } else {
//             console.log('No data fetched.');
//         }
    
// }
// });
