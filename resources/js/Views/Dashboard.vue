<template></template>


<script>
import  axios from 'axios';

export default {
    data() {
        return {
            alumnos: []
        }
    },

    created(){
            axios.post('/graphql', {
                query: '{alumnos{id, nombre, apellido1}}'
            }).then(res => {
                this.alumnos = res.data.data.alumnos;
            })
    }
}

</script>

