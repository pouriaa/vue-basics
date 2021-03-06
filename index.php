<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <title></title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.3.1/css/bulma.css">
    
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>



    <div id="root" class="container">
      <progress-view inline-template>
        <div>
          <h1>Your progress is {{ completionPercentage }} %</h1>
          <p><button @click="completionPercentage += 10">Update</button></p>
        </div>
      </progress-view>
    </div>








    <script src="https://unpkg.com/vue@2.1.3/dist/vue.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>