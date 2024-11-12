//Importa las funciones que necesito del firebase
import { initializeApp } from 'firebase/app';
import { getAuth } from 'firebase/auth';
import { getAnalytics } from "firebase/analytics";

const firebaseConfig = {
  apiKey: "AIzaSyAnsiRRHC-CmSANEcYxO-83KwF-hOLDNLE",
  authDomain: "torneofutbol-13788.firebaseapp.com",
  projectId: "torneofutbol-13788",
  storageBucket: "torneofutbol-13788.firebasestorage.app",
  messagingSenderId: "830242543306",
  appId: "1:830242543306:web:48c2486edc201026c4c633",
  measurementId: "G-HYWHRCSQ38"
};

//Inisializa el firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);