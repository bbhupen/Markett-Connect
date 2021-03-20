// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional

const form = document.querySelector(".form-group")
const service = document.querySelector("#service")
const description = document.querySelector("#description")
const pricing = document.querySelector("#pricing")
const place = document.querySelector("#place")
const payMethod = document.querySelector("#payMethod")
const btnCreateService = document.querySelector("#btnCreateService")

var firebaseConfig = {
    apiKey: "AIzaSyDnE787dggA-iM2fJNh8Ibin7X8uFfDheI",
    authDomain: "beaming-figure-307202.firebaseapp.com",
    projectId: "beaming-figure-307202",
    storageBucket: "beaming-figure-307202.appspot.com",
    messagingSenderId: "377569324256",
    appId: "1:377569324256:web:af8a33c68f6be1be51b485"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);


var firestore = firebase.firestore()
const docRef = firestore.doc("user_id/data") 




// btnCreateService.addEventListener("click", () => {
//     docRef.add({
//         service: service.value,
//         description: description.value,
//         pricing: pricing.value,
//         place: place.value,
//         payMethod: payMethod.value
//     }),
//         error => console.log(error)
    
//     console.log("wow")

// })


btnCreateService.addEventListener("click", function () {
    docRef.set({
        service: service.value,
        description: description.value,
        pricing: pricing.value,
        place: place.value,
        payMethod: payMethod.value
    }).then(function () {
        console.log("Status saved!")
    }).catch(function (error) {
        console.log("Error ", error)
    })

})
// btnCreateService.addEventListener("click", () => {

    

//     docRef.add({
//         service: service.value,
//         serviceDesc: serviceDesc.value,
//         pricing: pricing.value,
//         location: place.value,
//         paymentMode: paymentMode.value
//     }),
//         error => console.log(error)
    
//     console.log("wow")

//     console.log(service.value)


//     //Uploading Service
    
    


// })

    





// firebase.initializeApp(firebaseConfig)

// var firestore = firebase.firestore()

// const docRef = firestore.collection("user_id")

