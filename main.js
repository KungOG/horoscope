function getFormData() {
    var birthdate = new Date(document.getElementById("birthdate").value)
    birthdate.setFullYear("2019")
    birthDateString = birthdate.toISOString().substr(0, 10)

    data = new FormData();
    data.append("birthdate", birthDateString);
    return data;
};

function fetchData () {
    fetch("addHoroscope.php", {
        method: "POST", 
        body: getFormData()
    }).then((response) => {
        return response.json();
    }).then((data) => {   
        console.log(data)
        watchData();
    }).catch((err) => {
        console.log("err: ", err)
    })
};


function deleteData () {
    fetch("deleteHoroscope.php", {
        method: "DELETE"
    }).then((response) => {
        return response.json();
    }).then((data) => {
        watchData();
        console.log(data);
    }).catch((error) => {
        console.log("Error: ", error);
    })
};


function updateData () {
    fetch("updateHoroscope.php", {
        method: "POST",
        body: getFormData()
    }).then((response) => {
        return response.json();
    }).then((data) => {
        watchData();
        console.log(data);
    }).catch((error) => {
        console.log("Error: ", error);
    })
};


function watchData () {
    fetch("viewHoroscope.php", {
        method: "GET"
    }).then((response) => {
        return response.json()
    }).then((json) => {
        var showHoroscope = document.getElementById("horoscope");
        showHoroscope.innerText = json;
        console.log(json);
    }).catch((error) => {
        console.log("Error: ", error);
    })
};