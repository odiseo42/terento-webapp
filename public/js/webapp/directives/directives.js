angular.module('terentoApp').directive('typeahead', function(){
  return{
	restrict: 'E',
	replace: true,
	scope: {
		choice: '=',
		list: '='
	},
	template: '<div class="example-twitter-oss"><input type="text" class="search-typeahead" ng-model="choice" placeholder="Busca algo"/></div>',
	link: function(scope, element, attrs){
		$(element).find('input').typeahead({
			name: 'twitter-oss',                                                          
			local: scope.list,
			template: [                                                                 
			'<p class="repo-language">{{language}}</p>',                              
			'<p class="repo-name">{{name}}</p>',                                      
			'<p class="repo-description">{{description}}</p>'                         
			].join(''),
			engine: Hogan       
		});

	}
  };
});
