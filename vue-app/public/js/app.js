Vue.component ('coupon', {
  props: ['code'],
  
  template: `
    <input type="text" :value="code" @input="updateCode($event.target.value)" ref="input">
  `,

  methods: {
    updateCode(code) {
      // Validation
      if (this.invalids.includes(code)) {
        console.log('no valid');

        this.$refs.input.value = code = '';

        return;
      }

      this.$emit('input', code);
    }
  },

  data() {
    return {
      invalids: ['ALLFREE']
    }
  }
});

new Vue({
  el: "#app",

  data: {
    coupon: 'FREEBIE'
  }
});