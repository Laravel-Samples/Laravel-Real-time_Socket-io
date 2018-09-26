<template>
        <h1 class="text-center" v-html="messageFront"></h1>
</template>

<script>
    export default {
        props: ['homeMessage'], 
        data() {
            return {
                messageFront: this.homeMessage.message
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
