export default {
    getCategoryList(context) {
        axios.get('/api/v1/category')
            .then(response => {
                context.commit('getCategoryList', response.data)
            })
    },
}
