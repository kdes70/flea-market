import API from "../../../Api/index";


export default {
    login(context, loginForm) {
        return new Promise((resolve, reject) => {

            console.log('loginForm', loginForm);

            axios.post(API.login(), loginForm)
                .then(response => {

                    console.log('Oauth token', response.data);

                    response.data.expires_in = response.data.expires_in + Date.now()

                    // window.localStorage.setItem('AuthToken', JSON.stringify(response.data))

                    context.commit('TOKEN_UPDATE', response.data)

                    resolve(response)
                })
                .catch(response => {
                    console.log('response reject', response);
                    reject(response)
                })
        })
    },

    getAuthUser(context, data) {

        const headers = {
            'Accept': 'application/json',
            'Authorization': 'Bearer ' + data.access_token
        }

        axios.get('/api/user', {headers: headers})
            .then(response => {
                // window.localStorage.setItem('AuthUser', JSON.stringify(responseUser))
                context.commit('SET_AUTH_USER', response.data)
            })
            .catch(response => {
                console.log('error get user', response);
            })
    },
    setAuthUser(context, userObj) {
        context.commit('SET_AUTH_USER', userObj)
    },

    clearAuthUser(context) {
        context.commit('CLEAR_AUTH_USER')
    },


}
