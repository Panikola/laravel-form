import {useToast} from 'vue-toastification';

const toast                          = useToast();
export const showSuccessNotification = (message) => {
    toast.success(message);
};

export const showErrorNotification   = (message) => {
    toast.error(message);
};
export const showWarningNotification = (message) => {
    toast.warning(message);
};
