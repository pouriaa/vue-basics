let store = {
  user: {
    name: "John"
  }
};

new Vue({
  el: "#one",

  data:{
    shared: store,
    foo: 'bar'

  } 
});

new Vue({
  el: "#two",

  data:{
    shared: store,
    foo: 'other'

  }
});