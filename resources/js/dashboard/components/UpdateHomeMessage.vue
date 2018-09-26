<template>
    <div>
        <input type="text" v-model="newMessage" @keydown.enter="save" class="form-control" :class="inputRes" autofocus>
         <div :class="feedbackRes" v-html="feedbackBox"></div>
        <button type="button" @click="save">Go!</button>
    </div>
</template>

<script>
    export default {
        data() { 
            return {
                newMessage: '',
                feedbackBox: '',
                feedbackRes: '',
                inputRes: ''
            }
        },
        methods: {            
            save() {
                if (this.newMessage.length) {
                    axios.post(`/ajax/send-message/`, {message: this.newMessage })
                     .catch(function (error) {
                            return error.response;
                      }).then(this.setResponse);

                    this.newMessage = '';
                }
            },
            setResponse(response) {
                if (response.status != 200) {
                    this.feedbackRes = "invalid-feedback";
                    this.inputRes = "is-invalid";
                    this.feedbackBox = response.data;
                } else {
                    this.feedbackRes = "";
                    this.inputRes = "";
                    this.feedbackBox = "Your message was sent!";
                }
            }
        }        
    };
</script>
