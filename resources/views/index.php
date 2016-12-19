<html>
   
   <head>
      <title>Cats</title>
      <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
   </head>
   
   <body>
      <h2>Cats sample application</h2>
      
      <div ng-app = "mainApp" ng-controller = "userController">
         Enter user ID: <input type = "text" ng-model = "id"><br><br>
         <br>
         <button type="submit" ng-click="getUser(id)" class="btn btn-primary btn-lg">Submit</button>
         <br/>
         User with id {{id}}: {{user}}
      </div>
      
   </body>
	<script src="js/app.js"></script>
    <script src="js/controllers/mainCtrl.js"></script>
    <script src="js/services/userService.js"></script>
</html>
