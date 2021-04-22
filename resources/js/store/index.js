import router from '../app.js'


export default {

    state: {

        reservations: [],
        userInfo: null

    },

    getters: {

        getReservations(state) { //take parameter state

            return state.reservations
        },
        getUserInfo(state) { //take parameter state

            return state.userInfo
        }
    },

    actions: {
        allCategoryFromDatabase(context) {
            axios.get("/api/reservations")
                .then((response) => {
                    console.log(response.data)
                    context.commit("reservations", response.data) //reservations will be run from mutation
                })
                .catch((err) => {
                    console.log(err)
                })
        },
        userInfoRequest(context) {
            axios.get("/api/user")
                .then((res) => {
                    context.commit("setUserInfo", res.data)
                });
        },
        clearUserInfo(context) {
            context.commit("setUserInfo", null)
        }

    },

    mutations: {
        reservations(state, data) {
            return state.reservations = data
        },
        setUserInfo(state, data) {
            return state.userInfo = data
        }
    }
}