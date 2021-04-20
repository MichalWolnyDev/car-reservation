<template>
    <div>
        <div>
            <div>
                <div>
                    <ul>
                        
                        <li v-for="item in getReservations" :key="item.id">>
                          {{ item }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { mapGetters } from 'vuex';
    export default {
        name: 'Dashboard',
        data(){
            return {
                user: null
            }
        },
        mounted() {
            axios.get('/api/user')
            .then((res) => {
                this.user = res.data
            })
        },
        computed: {
        ...mapGetters([
        'getReservations'
        ])
    },
    mounted(){
        this.$store.dispatch('allCategoryFromDatabase');
    },
    }
</script>
