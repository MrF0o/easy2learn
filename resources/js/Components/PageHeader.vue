<template>
  <div class=" mt-4 p-1">
    <h3 class="m-0 pb-1">
        {{text}}
    </h3>
    <p class="m-0">
        {{desc}}
    </p>
  </div>
</template>

<script>
export default {
  props: {
    text: {
      type: String,
      required: true,
      default: "",
    },
    desc: {
      type: String,
      required: false,
      default: "",
    },
  },
};
</script>

<style>
</style>