export default {

	state: {

        reservations: []

	},

	getters: {

       getReservations(state){ //take parameter state

          return state.reservations
       }
	},

	actions: {
       allCategoryFromDatabase(context){
          axios.get("api/reservations")

               .then((response)=>{
                  console.log(response.data)
                  context.commit("reservations",response.data) //reservations will be run from mutation

               })

               .catch(()=>{
                  
                  console.log("Error........")
                  
               })
       }
	},

	mutations: {
       reservations(state,data) {
          return state.reservations = data
       }
	}
}