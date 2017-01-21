var app = new Vue({
    el: '#root',
    data: {
        message: 'this is my message',
        tasks: [
            {description: 'laundry', completed: true},
            {description: 'sleep', completed: false},
            {description: 'eat', completed: false},
            {description: 'shower', completed: true},
            {description: 'shave', completed: false}
        ]
    },
    computed : {
        incompletedTasks() {
            return this.tasks.filter(task => ! task.completed);
        }
    },
    methods() {

    }

});