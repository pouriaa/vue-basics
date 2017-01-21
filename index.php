<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <title></title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>

    <div id="root">
      <ul>
        <h1>All</h1>
        <li v-for="task in tasks" v-text="task.description"></li>
        <h1>Incomplete</h1>
        <li v-for="task in incompletedTasks" v-text="task.description"></li>
      </ul>






      <!-- 
        {{ reversedMessage }}
        
      -->
    </div>








    <script src="https://unpkg.com/vue@2.1.3/dist/vue.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>