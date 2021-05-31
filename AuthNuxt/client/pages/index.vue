<template>
  <div class="container">
    <p v-if="$auth.loggedIn">
      {{ $auth.user.name }}
    </p>
    <p v-if="!$auth.loggedIn">
      Chua dang nhap
    </p>
  </div>
</template>

<script>
export default {
  middleware: 'auth'
}
</script>
