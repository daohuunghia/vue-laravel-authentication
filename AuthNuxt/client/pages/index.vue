<template>
  <div class="container">
    {{ $auth.loggedIn }}
    <p v-if="$auth.loggedIn">
      Hello {{ user.name }}
    </p>
    <p v-if="!$auth.loggedIn">
      Chua dang nhap
    </p>
  </div>
</template>

<script>
export default {
}
</script>
