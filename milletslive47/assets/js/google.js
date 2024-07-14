// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/10.11.1/firebase-app.js";
import { getAuth, GoogleAuthProvider, signInWithPopup } from "https://www.gstatic.com/firebasejs/10.11.1/firebase-auth.js";
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
auth.languageCode = 'it';
const provider = new GoogleAuthProvider();

  // Continue with Google

  const gooleLogin = document.getElementById('google-login-btn');
  gooleLogin.addEventListener('click', function() {
      signInWithPopup(auth, provider)
          .then((result) => {
              const credential = GoogleAuthProvider.credentialFromResult(result);
              const user = result.user;
              console.log(user);
              window.location.href = "../profile.php";


          }).catch((error) => {
              const errorCode = error.code;
              const errorMessage = error.message;

          });
  });


