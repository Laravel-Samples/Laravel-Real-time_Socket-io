<template>
        <h1 class="text-center" v-html="messageFront"></h1>
</template>

<script>
    export default {
        data() {
            return {
                messageFront: 'Genius is one percent inspiration and ninety-nine percent perspiration. - Thomas Edison'
            }
        },
        created() { // called after the component is created
            window.Echo.channel('public-message')
                .listen('PublicMessageSent', payload => {
                    this.placeMessage(payload.message) 
                }); 
        },
        methods: {
            placeMessage(message) {
                this.messageFront = message;
            }
        }        
    };
</script>
