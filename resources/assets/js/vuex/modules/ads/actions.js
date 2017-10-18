export default {
    getAdsList(context) {
        axios.get('/api/v1/ads')
            .then(response => {
                context.commit('getAdsList', {adsList: response.data})
            })
    }
}
