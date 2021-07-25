html {
  background-image: linear-gradient(#ff512f, rgb(192, 58, 174));
  background-size: cover;
  height: 150%;
  background-color: #000;
}
* {
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  -o-font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}
body {
  color: #000000;
  font-family: Arial, san-serif;
}

/* Contact Form Styles */
h1 {
  margin: 10px 0 0 0;
}
h4 {
  margin: 0 0 20px 0;
  color: brown;
}
#contact-form {
  background-color: rgba(183, 141, 187, 0.9);
  padding: 10px 20px 30px 20px;
  max-width: 100%;
  float: left;
  left: 50%;
  position: absolute;
  margin-top: -15px;
  margin-left: -238px;
  border-radius: 7px;
  -webkit-border-radius: 7px;
  -moz-border-radius: 7px;
}
#contact-form input,
#contact-form select,
#contact-form textarea,
#contact-form label {
  font-size: 15px;
  margin-bottom: 2px;
  font-family: Arial, san-serif;
}
#contact-form input,
#contact-form select,
#contact-form textarea {
  width: 100%;
  background: #fff;
  border: 0;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  border-radius: 4px;
  margin-bottom: 25px;
  padding: 5px;
}
#contact-form input:focus,
#contact-form select:focus,
#contact-form textarea:focus {
  background-color: #e5e6e7;
}
#contact-form textarea {
  width: 100%;
  height: 150px;
}
#contact-form button[type="submit"] {
  cursor: pointer;
  width: 100%;
  border: none;
  background: #991d57;
  background-image: linear-gradient(bottom, #8c1c50 0%, #991d57 52%);
  background-image: -moz-linear-gradient(bottom, #8c1c50 0%, #991d57 52%);
  background-image: -webkit-linear-gradient(bottom, #8c1c50 0%, #991d57 52%);
  color: #fff;
  margin: 0 0 5px;
  padding: 10px;
  border-radius: 5px;
}
#contact-form button[type="submit"]:hover {
  background-image: linear-gradient(bottom, #9c215a 0%, #a82767 52%);
  background-image: -moz-linear-gradient(bottom, #9c215a 0%, #a82767 52%);
  background-image: -webkit-linear-gradient(bottom, #9c215a 0%, #a82767 52%);
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}
#contact-form button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}
input:required,
textarea:required {
  box-shadow: none;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  -o-box-shadow: none;
}
#contact-form .required {
  font-weight: bold;
  color: #e5e6e7;
}

/* Hide success/failure message
    (especially since the php is missing) */
#failure,
#success {
  color: #6ea070;
  display: none;
}

/* Make form look nice on smaller screens */
@media only screen and (max-width: 580px) {
  #contact-form {
    left: 3%;
    margin-right: 3%;
    width: 88%;
    margin-left: 0;
    padding-left: 3%;
    padding-right: 3%;
  }
}
h1 {
  background-color: white;
  color: black;
  border-radius: 10px;
  padding: 6px;
  margin: 0 0 50px;
  font-size: 30px;
  text-transform: uppercase;
  font-weight: 700;
  text-align: center;
}
small {
  font-size: 18px;
  display: block;
  text-transform: none;
  font-weight: 300;
  margin-top: 10px;
}
