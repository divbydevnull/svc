<!doctype html>
<html ng-app>
  <head>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
  </head>
  <body>
    <div>
      <input type="text" ng-model="yourName" placeholder="Enter a name here">
      <p>Hello, {{ yourName }}</p>
    </div>
    <div>
        <input type="text" placeholder="Address Line 1">
        <p id='a1'>A1</p>
    </div>
    <div>
        <input type="text" placeholder="Address Line 2">
        <p id='a2'>A2</p>
    </div>
    <div>
        <input type="text" placeholder="City">
        <p id='city'>City</p>
    </div>
    <div>
        <input type="text" placeholder="State">
        <p id='state'>State</p>
    </div>
    <div>
        <input type="text" placeholder="Zip">
        <p id='state'>Zip</p>
    </div>
    <div>
        <input type="text" placeholder="Country">
        <p id='state'>Country</p>
    </div>
  </body>
</html>
