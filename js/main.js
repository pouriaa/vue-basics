Vue.component('task-list', {
  template: '<div><li v-for="task in tasks">{{ task.task }}</li></div>',
  data() {
    return {
      tasks: [
        {task: 'Go to store', completed: true},
        {task: 'Go to bank', completed: false},
        {task: 'Do Laundry', completed: true},
        {task: 'Eat food', completed: false},
        {task: 'Go to school', completed: true}    
      ]
    };
  }
});

Vue.component('task', {
template: '<div></div>'
});

new Vue({
  el: '#root'
});