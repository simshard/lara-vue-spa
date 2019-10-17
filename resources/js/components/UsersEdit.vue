<template>
 <div>
     <div v-if="message" class="alert">{{ message }}</div>
     <div v-if="! loaded">Loading...</div>
      <form @submit.prevent="onSubmit($event)" v-else>

        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <label for="user_name">Name</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
             id="user_name" v-model="user.name" />
        </div>
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <label for="user_email">Email</label>
            <input
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            id="user_email" type="email" v-model="user.email" />
        </div>





        <div class="bg-white px-8 pt-6 pb-8 mb-4">
            <button
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
            type="submit" :disabled="saving">Update</button>

            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
            :disabled="saving" @click.prevent="onDelete($event)">Delete</button>



        </div>
    </form>
  </div>
</template>

<script>
import api from '../api/users';

export default {
    data() {
    return {
      message: null,
      loaded: false,
      saving: false,
      user: {
        id: null,
        name: "",
        email: ""
      }
    };
  },
  methods: {
    onSubmit(event) {
      this.saving = true;
      api.update(this.user.id, {
          name: this.user.name,
          email: this.user.email,
      }).then((response) => {
          this.message = 'User updated';

          setTimeout(() => this.message = null, 2000);
          this.user = response.data.data;
      }).catch(error => {
          console.log(error)
      }).then(_ => this.saving = false);
    },

    onDelete() {
     this.saving = true;
     api.delete(this.user.id)
        .then((response) => {
         // console.log(response);
           this.message = 'User Deleted';
           setTimeout(() => this.$router.push({ name: 'users.index' }), 2000);
     });
},

    },
  created() {
      api.find(this.$route.params.id).then((response) => {
       setTimeout(() => {
         this.loaded = true;
         this.user = response.data.data;
       }, 500);
    });
  },




};
</script>

<style lang="scss" scoped>
$red: lighten(red, 30%);
$darkRed: darken($red, 50%);
.form-group label {
  display: block;
}
.alert {
    background: $red;
    color: $darkRed;
    padding: 1rem;
    margin-bottom: 1rem;
    width: 50%;
    border: 1px solid $darkRed;
    border-radius: 5px;
}
</style>
