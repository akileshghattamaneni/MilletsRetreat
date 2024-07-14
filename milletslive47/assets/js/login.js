// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/10.11.1/firebase-app.js";
import { getAuth, signInWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/10.11.1/firebase-auth.js";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyAVuDNpHhELT3zIUSvCY90-MJRcHMVa5Hg",
  authDomain: "login-page-625ec.firebaseapp.com",
  projectId: "login-page-625ec",
  storageBucket: "login-page-625ec.appspot.com",
  messagingSenderId: "247290214222",
  appId: "1:247290214222:web:f3d201bbf0ff37a5ac101f"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const auth = getAuth(app);

 
const submit = document.getElementById('submit');
submit.addEventListener("click", function (event) {
    event.preventDefault();

    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value; 

    signInWithEmailAndPassword(auth, email, password)
      .then((userCredential) => {
        const user = userCredential.user;
        alert("Logging in...");
        // Redirect to profile page with email as query parameter
        window.location.href = `profile.php?email=${email}`;
      })
      .catch((error) => {
        const errorMessage = error.message;
        alert(errorMessage);
      });
});




