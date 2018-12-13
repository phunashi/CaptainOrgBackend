import React from "react";
import ReactDOM from "react-dom";
import Main from "./Main";
import axios from "axios";

window.token = localStorage.getItem("token");

// window.axios = axios;
// // axios.defaults.baseURL = "https://api.example.com";
// axios.defaults.headers.common["Authorization"] = "Bearer" + window.token;
// axios.defaults.headers.post["Content-Type"] = "application/json";

ReactDOM.render(<Main />, document.getElementById("root"));
