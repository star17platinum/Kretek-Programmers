import axios from 'axios'

const instance = axios.create({
    baseURL: 'http://localhost:3000',
    timeout: 10000,
    headers: {
        'Content-Type': 'application/json',
        Accept: 'application/json',
    },
})

instance.interceptors.request.use(
    (config) => {
        let token = ''
        if (token) {
            config.headers.Authorization = `Bearer ${token}`
        }
        return config
    },
    (error) => {
        return Promise.reject(error)
    }
)

instance.interceptors.response.use(
    (response) => {
        console.log(
            response.config.baseURL + response.config.url,
            'params',
            response.config.data
        )
        return response
    },
    (error) => {
        console.log(
            error.config.baseURL + error.config.url,
            'params',
            error.config.data
        )
        return Promise.reject(error)
    }
)

const get = (url, params) => {
    return instance.get(url, { params })
}

const post = (url, data) => {
    return instance.post(url, data)
}

const put = (url, data) => {
    return instance.put(url, data)
}

const deleteRequest = (url, data) => {
    return instance.delete(url, data)
}

const postFormData = (url, data) => {
    return instance.post(url, data, {
        headers: {
            'Content-Type': 'multipart/form-data',
        },
    })
}

export { get, post, put, deleteRequest, postFormData }
