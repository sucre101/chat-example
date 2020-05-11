<template>
  <div id="page-chat">
    <h1>Welcome to chat{{ nickname ? ', ' + nickname : '' }}</h1>

    <div class="col-lg-6" v-if="nickname">
      <div class="dialog-window">
        <div
          v-if="dialog"
          v-for="messages in dialog"
        >
          <p>{{ messages.text }}</p>
        </div>
      </div>
      <div class="form-group mt-3">
        <input
          v-model="message"
          type="text"
          class="form-control"
          placeholder="entry text message"
          @keypress.enter="sendMessage"
         />
      </div>
      <div class="form-group">
        <button
          class="btn btn-primary"
          @click="sendMessage"
        >
          Send
        </button>
      </div>
    </div>
    <div v-else>
      <div class="form-group mt-3">
        <input
          ref="nick"
          type="text"
          class="form-control"
          placeholder="entry your nick"
          @keypress.enter="setName"
        />
        </div>
        <div class="form-group">
          <button
            class="btn btn-primary"
            @click="setName"
          >
            Join chat
          </button>
        </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: "ChatComponent",
    data() {
      return {
        message: '',
        dialog: [],
        nickname: ''
      }
    },
    mounted() {
      let socket = io.connect('http://chat-example.loc:3000');

      socket.on('chat:message', (data) => {
          this.dialog.push({text: data.message});
      });
    },
    methods: {
      setName() {
            this.nickname = this.$refs.nick.value;
      },
      sendMessage() {
        axios.post('/chat', {text: this.message})
          .then((response) => {
            this.message = '';
          })
        }
    }
  }
</script>

<style scoped lang="sass">

  @import url('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css')

  #page-chat
    .dialog-window
      width: 100%
      height: 300px
      border: 1px solid grey
      border-radius: 5px
      overflow-y: scroll
</style>
