//Node.Js File

import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-app.js";
import {
  getAuth,
  signInWithEmailAndPassword,
  createUserWithEmailAndPassword,

} from "https://www.gstatic.com/firebasejs/9.6.10/firebase-auth.js";
import {
  getFirestore,
  collection,
  addDoc,
  doc,
  setDoc,
  getDocs,
  deleteDoc,
} from "https://www.gstatic.com/firebasejs/9.6.10/firebase-firestore.js";

const firebaseConfig = {
  apiKey: "AIzaSyAYJols88O6bRrZC149P3fMgAPMr9WiSxA",
  authDomain: "unified-378706.firebaseapp.com",
  projectId: "unified-378706",
  storageBucket: "unified-378706.appspot.com",
  messagingSenderId: "239394474302",
  appId: "1:239394474302:web:53b7b230ffead6eccf046f",
};
const emailRegex = /^(?=.*[@])(?=.*[.])[a-zA-Z0-9._-]+@(gmail|yahoo|outlook)\.(com|net|org)$/i;

// Exam
const app = initializeApp(firebaseConfig);
const db = getFirestore(app);
const auth = getAuth(app);

const submitButton = document.getElementById("submit");
const signupButton = document.getElementById("sign-up");
const emailInput = document.getElementById("email");
const passwordInput = document.getElementById("password");
const main = document.getElementById("main");
const createacct = document.getElementById("create-acct");
const signupEmailIn = document.getElementById("email-signup");
const confirmSignupEmailIn = document.getElementById("confirm-email-signup");
const signupPasswordIn = document.getElementById("password-signup");
const confirmSignUpPasswordIn = document.getElementById(
  "confirm-password-signup"
);
const createacctbtn = document.getElementById("create-acct-btn");
const returnBtn = document.getElementById("return-btn");
const newsletter = document.getElementById("newsletter");
console.log(newsletter.value)
let email,
  password,
  signupEmail,
  signupPassword,
  confirmSignupEmail,
  confirmSignUpPassword;

  submitButton.addEventListener("click", function () {
    email = emailInput.value;
    password = passwordInput.value;
  
    signInWithEmailAndPassword(auth, email, password)
      .then((userCredential) => {
        const user = userCredential.user;
        window.alert("Success! Welcome back!");
        document.cookie = `uid=${user.uid}`;
        window.location = '../Pages/testingRSA.html';
      })
      .catch((error) => {
        console.log("Error occurred. Try again.");
        window.alert(error);
      });
  });

      
 

  signupButton.addEventListener("click", function () {
    main.style.display = "none";
    createacct.style.display = "block";
  });
  
  returnBtn.addEventListener("click", function () {
    main.style.display = "block";
    createacct.style.display = "none";
  });
  
createacctbtn.addEventListener("click", function() {
  let isVerified = true;

  signupEmail = signupEmailIn.value;
  confirmSignupEmail = confirmSignupEmailIn.value;
  if (signupEmail != confirmSignupEmail) {
    window.alert("Email fields do not match. Try again.");
    isVerified = false;
  }
  if(signupEmail !=emailRegex){
    window.alert("Invalid email/password")
    isVerified=false;
  }
  signupPassword = signupPasswordIn.value;
  confirmSignUpPassword = confirmSignUpPasswordIn.value;
  if (signupPassword != confirmSignUpPassword) {
    window.alert("Password fields do not match. Try again.");
    isVerified = false;
  }
  
  if (signupEmail == null || confirmSignupEmail == null || signupPassword == null || confirmSignUpPassword == null) {
    window.alert("Please fill out all required fields.");
    isVerified = false;
  }
  
  if(isVerified) {
    const usersCollectionRef = collection(db, 'users');
   
    createUserWithEmailAndPassword(auth, signupEmail, signupPassword)
      .then((userCredential) => {
        const user = userCredential.user;
        console.log("User: ", user);
        const uid = user.uid;

        const defaultTourismCards = [
          { name: 'Anjar', visited: false },
          { name: 'Baalbek', visited: false },
          { name: 'BeitEddine', visited: false },
          { name: 'Byblos', visited: false },
          { name: 'Kadisha', visited: false },
          { name: 'MIM', visited: false },
          { name: 'NationalMuseum', visited: false },
          { name: 'Tyre', visited: false },
        ];
        const key = "Openheimer"
        var encrptedUID= CryptoJS.AES.encrypt(uid, key)
        sessionStorage.setItem("uid",encrptedUID);

        

        const userDocRef = doc(usersCollectionRef, uid); // create a reference to a new document with user's UID as the document ID
        return setDoc(userDocRef, {
          email: user.email,
          createdAt: new Date(),
          tourismCards: defaultTourismCards,
        })
          .then(() => {
            window.alert("Success! Account created.");
            window.location.href = './SignUp.html';
          })
          .catch((error) => {
            window.alert("Error occurred. Try again.");
            console.log(error);
          });
      })
      .catch((error) => {
        const errorCode = error.code;
        const errorMessage = error.message;
        window.alert(errorMessage + " "+ errorCode);
  
        return false;
      });
}});