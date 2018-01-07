<!DOCTYPE html>
<html ng-app="App">
  <head>
    <meta charset="utf-8">
    <title>Belajar REST API</title>
    <link rel="stylesheet" href="node_modules/semantic-ui/dist/semantic.min.css">
    <link rel="stylesheet" href="node_modules/angular/angular-csp.css">
    <script src="node_modules/angular/angular.min.js"></script>
    <script type="text/javascript" src="frontend/app.js"></script>
  </head>
  <body>
    <br>
    <div class="ui three column stackable grid">
          <div class="column">
          </div>
          <div class="column">
            <div class="ui fluid right action input">
                <input type="text" name="">
                <div class="ui teal button">
                  <i class="add icon"></i>Add
                </div>
            </div>
            <div class="ui divided items" ng-controller="Contact">
                <div class="item" ng-repeat="item in items">
                    <h3>{{ item.name}}</h3>
                </div>
            </div>
          </div>
    </div>
    <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="node_modules/semantic-ui/dist/semantic.min.js"></script>
  </body>
</html>
