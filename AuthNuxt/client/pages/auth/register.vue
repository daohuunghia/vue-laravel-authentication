<template>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <form class="mt-5">
          <h3>Register</h3>
          <div class="form-group">
            <label>Name</label>
            <input v-model="userForm.name" type="text" class="form-control">
          </div>
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
