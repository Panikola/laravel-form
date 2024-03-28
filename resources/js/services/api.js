import axios from 'axios';
import ApiError from './errors/apiError';
import {showErrorNotification, showWarningNotification} from './notification';

const api = axios.create({
    baseURL: '/api',
    headers: {
        'X-Requested-With': 'XMLHttpRequest',
    }
});

api.interceptors.response.use(
    response => {
        if (response.status !== 200) {
            showWarningNotification(response.data.message);
        }
        return response;
    },
    error => {
        showErrorNotification(error.response.data.message);
        throw new ApiError(error.response.data.message, error.response.status);
    }
);

export default api;
