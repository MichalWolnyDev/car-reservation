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
