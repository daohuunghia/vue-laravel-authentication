<template>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <form class="mt-5" @submit.prevent="login">
          <h3>Login</h3>
          <div class="form-group">
            <label>Email</label>
            <input v-model="userForm.email" type="email" class="form-control">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input v-model="userForm.password" type="password" class="form-control">
          </div>
          <button type="submit" class="btn btn-primary">
            Submit
          </button>
        </form>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data () {
    return {
      userForm: {
        email: 'nghiadh@gmail.com',
        password: '123456'
      }
    }
  },
  methods: {
    async login () {
      try {
        await this.$auth.loginWith('local', {
          data: this.userForm
        }).then(() => this.$router.push('/'))
      } catch (e) {
        console.log(e)
      }
    }
  }
}
</script>
