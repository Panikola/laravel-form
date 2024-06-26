class ApiError extends Error {
    constructor(message, status) {
        super(message);
        this.name   = this.constructor.name;
        this.status = status;
    }
}

export default ApiError;
