/*jshint quotmark:false */
/*jshint white:false */
/*jshint trailing:false */
/*jshint newcap:false */
var app = app || {};

(function () {
	'use strict';

	var Utils = app.Utils;
	// Generic "model" object. You can use whatever
	// framework you want. For this application it
	// may not even be worth separating this logic
	// out, but we do this to demonstrate one way to
	// separate out parts of your application.
	app.TodoModel = function (key, location) {
            this.key = key;
            
            if(location != 0) {
                this.todos = Utils.store(key, '', location[0]);
                this.listHeader = this.todos[0].name;
                this.todos = this.todos[1];
            } else {
                this.todos = Utils.store(key);
                this.listHeader = 'القائمة الأساسية';
                this.todos = this.todos[1];
            } 
            
            this.menus = Utils.getMenus();
            this.selectedCategory = location[0];
            this.onChanges = [];
	};

	app.TodoModel.prototype.subscribe = function (onChange) {
		this.onChanges.push(onChange);
               
	};

	app.TodoModel.prototype.inform = function (dataToSave) {
            if(!dataToSave) {
                dataToSave = this.todos;
            }
            Utils.store(this.key, dataToSave);
	};

	app.TodoModel.prototype.addTodo = function (title) {
            var parentCategoryID = $('#category_id').val();
            var childCategoryID = $('#child_category_id').val();
            
            var categoryID = (childCategoryID == 0) ? parentCategoryID : childCategoryID;
            
            var dataToSave = {
                    id: Utils.uuid(),
                    title: title,
                    completed: false,
                    categoryID: categoryID
		};
            
		this.todos = this.todos.concat(dataToSave);
		this.inform(dataToSave);
	};

	app.TodoModel.prototype.toggleAll = function (checked) {
            
		this.todos = this.todos.map(function (todo) {
			return Utils.extend({}, todo, {completed: checked});
		});

		//this.inform();
	};

	app.TodoModel.prototype.toggle = function (todoToToggle) {
            
                var isCompleted = !todoToToggle.completed;
                Utils.setStorageData('todo_'+ todoToToggle.id, isCompleted);
                
		this.todos = this.todos.map(function (todo) {
                    return todo !== todoToToggle ?
                    todo :
                    Utils.extend({}, todo, {completed: !todo.completed});
                    
		});
                
                
                this.onChanges.forEach(function (cb) { cb(); });
		//this.inform();
	};

	app.TodoModel.prototype.destroy = function (todo) {
		this.todos = this.todos.filter(function (candidate) {
			return candidate !== todo;
		});

		this.inform();
	};

	app.TodoModel.prototype.save = function (todoToSave, text) {
		this.todos = this.todos.map(function (todo) {
			return todo !== todoToSave ? todo : Utils.extend({}, todo, {title: text});
		});

		this.inform();
	};
        
        app.TodoModel.prototype.loadResults = function (category_id) {
            this.todos = Utils.store(this.key, null, category_id);
            this.todos = this.todos[1];
	};

	app.TodoModel.prototype.clearCompleted = function () {
		this.todos = this.todos.filter(function (todo) {
			return !todo.completed;
		});

		this.inform();
	};

})();
