<template>
  <b-form-group
    :label="label"
  >
    <b-input
      :type="type"
      :value="value"
      @input="input"
      :autofocus="autofocus"
    />
  </b-form-group>
</template>

<script>
  export default {
    props: {
      label: String,
      value: [String, Number, null],
      type: String,
      autofocus: {
        type: Boolean,
        default: false
      }
    },
    methods: {
      input(val) {
        this.$emit('input', val);
      }
    }
  }
</script>

<style scoped>

</style>