<html>

   <head>
      <title>Cats</title>
   </head>

   <body>
      <h2>Cats sample application</h2>

      <a href="/dashboard">Go to Dashboard </a>

      <div ng-app = "catsApp" ng-controller = "userController">
         Enter user ID: <input type = "text" ng-model = "id"><br><br>
         <br>
         <button type="submit" ng-click="getUser(id)" class="btn btn-primary btn-lg">Submit</button>
         <br/>
         User with id {{id}}: {{user}}
      </div>

   </body>
    <script src="js/vendors/angular.all.min.js"></script>
    <script src="js/vendors/vendors.all.min.js"></script>
	   <!-- Cats-->
    <!--<script src="js/cats.app.js"></script>-->
    <script src="js/custom.js"></script>
    <script src="js/app.js"></script>
    <script src="js/ui.views.js"></script>
    <script src="js/services/userService.js"></script>
    <script src="js/controllers/userController.js"></script>
    
</html>
