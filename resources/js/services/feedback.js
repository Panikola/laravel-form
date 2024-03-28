import api from './api';

const feedback = {
    save: (data) => api.post('/feedback', data),
};

export default feedback;
