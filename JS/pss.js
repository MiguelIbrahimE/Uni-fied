require('dotenv').config();
// Firebase configuration
var firebaseConfig = {
    apiKey: process.env.FIREBASE_API_KEY,
    authDomain: process.env.FIREBASE_AUTH_DOMAIN,
    projectId: process.env.FIREBASE_PROJECT_ID,
    storageBucket: process.env.FIREBASE_STORAGE_BUCKET,
    messagingSenderId: process.env.FIREBASE_MESSAGING_SENDER_ID,
    appId: process.env.FIREBASE_APP_ID,
  };
  
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  
  // Function to get the value of a cookie by its name
  function getCookie(name) {
    var value = "; " + document.cookie;
    var parts = value.split("; " + name + "=");
    if (parts.length == 2) {
      return parts.pop().split(";").shift();
    }
  }
  
  // Get the user ID from the cookie
  var userId = getCookie("uid");
  
  // Get the Firestore data for the user
  var docRef = firebase.firestore().collection("users").doc(userId);
  
  array = ["Anjar", "Baalbek", "BeitEddine", "Byblos", "Kadisha", "MIM", "NationalMuseum", "Tyre"];
  
  for (let i = 0; i < 8; i++) {
    docRef.get().then((doc) => {
      if (doc.exists) {
        // get the tourismCards subcollection for the user
        const tourismCardsRef = docRef.collection("tourismCards");
  
        // get the document with ID "0" from the tourismCards subcollection
        tourismCardsRef.doc(i).get().then((cardDoc) => {
          if (cardDoc.exists) {
            // get the "visited" field value from the card document
            const visited = cardDoc.data().visited;
  
            // set the "checked" attribute of the checkbox based on the "visited" value
            const checkbox = document.querySelectorAll(`input[name='${array[i]}']`)[0];
            checkbox.checked = visited;
          }
        });
      }
    });
  }
  