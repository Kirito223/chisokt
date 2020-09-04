import axios from "axios";
import queryString from "query-string";
import Const from "../api/Const";

const axiosClient = axios.create({
    baseURL: Const.BASE_URL,
    headers: {
        "content-type": "application/json"
    },
    paramsSerializer: params => queryString.stringify(params)
});

// Add a request interceptor
axios.interceptors.request.use(
    function(config) {
        // Do something before request is sent
        document.body.classList.add("custom-loader");
        return config;
    },
    function(error) {
        // Do something with request error
        return Promise.reject(error);
    }
);

axiosClient.interceptors.response.use(
    response => {
        document.body.classList.remove("custom-loader");
        if (response && response.data) {
            return response.data;
        }

        return response;
    },
    error => {
        // Handle errors
        throw error;
    }
);

export default axiosClient;
