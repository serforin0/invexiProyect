<template></template>


<script>
import  axios from 'axios';

export defaul{
    data(){
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

