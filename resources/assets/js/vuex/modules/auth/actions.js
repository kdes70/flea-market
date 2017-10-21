import API from "../../../Api/index";

export default {
    login(context, user) {
        return new Promise((resolve, reject) => {
            console.log('user', user);

            axios.post(API.login(), user)
                .then(response => {

                    let responseData = response.data
                    let now = Date.now()

                    responseData.expires_in = responseData.expires_in + now

                    context.commit('updateToken', responseData)

                    resolve(response)
                })
                .catch(response => {
                    console.log('response reject', response);
                    reject(response)
                })
        })
    }


}
